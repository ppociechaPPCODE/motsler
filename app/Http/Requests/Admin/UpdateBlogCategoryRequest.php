<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogCategoryRequest extends FormRequest
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
        $category = $this->route('category');

        return [
            'locale' => ['required', 'string', Rule::in($locales)],
            'name' => ['required', 'string', 'max:255'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                Rule::unique('blog_categories', 'slug')
                    ->where(fn ($q) => $q->where('locale', $this->input('locale')))
                    ->ignore($category->id),
            ],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:65535'],
            'style_key' => ['required', 'string', Rule::in(['biz', 'tech', 'guide', 'case'])],
        ];
    }
}
