<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->input('form_context') === 'callback') {
            return [
                'form_context' => ['nullable', 'string', 'max:32'],
                'phone' => ['required', 'string', 'max:50'],
                'name' => ['nullable', 'string', 'max:200'],
                'email' => ['nullable', 'email', 'max:255'],
                'message' => ['nullable', 'string', 'max:5000'],
                'privacy_accept' => ['accepted'],
            ];
        }

        return [
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
            'privacy_accept' => ['accepted'],
        ];
    }
}
