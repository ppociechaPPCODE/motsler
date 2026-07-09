<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact');
    }

    public function store(ContactStoreRequest $request): RedirectResponse|JsonResponse
    {
        $to = config('contact.mail_to');
        if (! is_string($to) || ! filter_var($to, FILTER_VALIDATE_EMAIL)) {
            report(new \RuntimeException('CONTACT_MAIL_TO must be set to a valid email in .env'));

            return $this->contactFormResponse($request, success: false, withInput: true);
        }

        $data = $request->validated();

        try {
            Mail::to($to)->send(new ContactFormMail(
                formContext: $data['form_context'],
                name: $data['name'] ?? '',
                replyEmail: $data['email'] ?? '',
                phone: $data['phone'] ?? null,
                messageBody: $data['message'] ?? '',
            ));
        } catch (\Throwable $e) {
            report($e);

            return $this->contactFormResponse($request, success: false, withInput: true);
        }

        return $this->contactFormResponse($request, success: true);
    }

    private function contactFormResponse(
        ContactStoreRequest $request,
        bool $success,
        bool $withInput = false,
    ): RedirectResponse|JsonResponse {
        if ($request->expectsJson()) {
            if ($success) {
                return response()->json(['message' => __('form.sent')]);
            }

            return response()->json(['message' => __('contact.mail_failed')], 502);
        }

        $formContext = (string) $request->input('form_context', '');
        $anchor = match ($formContext) {
            'home' => 'home-contact-expert',
            'dpf_machines' => 'offer-dpf-form',
            'callback' => 'contact-callback-form',
            default => null,
        };

        $previous = url()->previous();
        $target = $anchor !== null ? strtok($previous, '#').'#'.$anchor : $previous;

        $redirect = redirect()->to($target);
        if ($withInput) {
            $redirect = $redirect->withInput();
        }

        return $redirect->with($success ? 'contact_sent' : 'contact_error', true);
    }
}
