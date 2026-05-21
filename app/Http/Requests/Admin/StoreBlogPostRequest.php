<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogPostRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if ($this->input('slug') === '') {
            $this->merge(['slug' => null]);
        }
    }

    public function authorize(): bool
    {
        return (bool) $this->user()?->is_admin;
    }

    public function rules(): array
    {
        $locales = array_keys(config('app.supported_locales', []));

        return [
            'locale' => ['required', 'string', Rule::in($locales)],
            'blog_category_id' => [
                'required',
                'integer',
                Rule::exists('blog_categories', 'id')->where(fn ($q) => $q->where('locale', $this->input('locale'))),
            ],
            'title' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                Rule::unique('blog_posts', 'slug')->where(fn ($q) => $q->where('locale', $this->input('locale'))),
            ],
            'excerpt' => ['nullable', 'string', 'max:2000'],
            'body' => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'meta_description' => ['nullable', 'string', 'max:500'],
        ];
    }
}
