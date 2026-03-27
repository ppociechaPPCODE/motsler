<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact');
    }

    public function store(ContactStoreRequest $request): RedirectResponse
    {
        $to = config('contact.mail_to');
        if (! is_string($to) || ! filter_var($to, FILTER_VALIDATE_EMAIL)) {
            report(new \RuntimeException('CONTACT_MAIL_TO must be set to a valid email in .env'));

            return redirect()
                ->back()
                ->withInput()
                ->with('contact_error', true);
        }

        $data = $request->validated();

        try {
            Mail::to($to)->send(new ContactFormMail(
                replyEmail: $data['email'],
                phone: $data['phone'] ?? null,
                messageBody: $data['message'],
            ));
        } catch (\Throwable $e) {
            report($e);

            return redirect()
                ->back()
                ->withInput()
                ->with('contact_error', true);
        }

        return redirect()
            ->back()
            ->with('contact_sent', true);
    }
}
