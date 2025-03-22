<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeroSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'heading' => ['required', 'string', 'max:255'],
            'subheading' => ['required', 'string', 'max:255'],
            'background_image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120'],
            'thumbnail_image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120'],
            'background_class' => ['nullable', 'string', 'max:50'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:255'],
            'order' => ['sometimes', 'integer', 'min:1'],
        ];
    }
}