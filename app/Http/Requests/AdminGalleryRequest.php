<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminGalleryRequest extends FormRequest
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
            'image' => ['required', 'image'],
            'galleryId' => ['required', 'integer', 'min:1', 'max:14'],
            'description' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'Morate izabrati sliku.',
            'image.image' => 'Fajl mora biti slika (jpeg, png, jpg, gif, webp).',

            'galleryId.required' => 'Morate izabrati tip galerije.',
            'galleryId.integer' => 'Tip galerije mora biti broj.',
            'galleryId.min' => 'Morate izabrati važeći tip galerije.',
            'galleryId.max' => 'Izabrani tip galerije nije validan.',

            'description.required' => 'Opis slike je obavezan.',
            'description.string' => 'Opis slike mora biti tekst.',
        ];
    }

}
