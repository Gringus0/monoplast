<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', Rule::unique('clanovi', 'mail'), 'max:255'],
            'phone' => ['required', 'string', 'regex:/^\+?[0-9\s]+$/',
                function ($attribute, $value, $fail) {
                    $digitsOnly = preg_replace('/\D/', '', $value);
                   $digitCount = strlen($digitsOnly);
                   if ($digitCount < 9 || $digitCount > 14) {
                       $fail('Telefon mora imati izmedju 9 i 14 cifara.');
                   }
            }],
            'phone2' => ['nullable', 'string', 'regex:/^\+?[0-9\s]+$/',
                function ($attribute, $value, $fail) {
                    $digitsOnly = preg_replace('/\D/', '', $value);
                    $digitCount = strlen($digitsOnly);
                    if ($digitCount < 9 || $digitCount > 14) {
                        $fail('Telefon mora imati izmedju 9 i 14 cifara.');
                    }
                }],
            'company' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ime je obavezno polje.',
            'name.string' => 'Ime mora biti sačinjeno od slova.',
            'name.max' => 'Ime ne sme biti duže od 255 slova.',
            'email.required' => 'E-mail je obavezno polje.',
            'email.string' => 'E-mail mora biti oblika primer@example.com',
            'email.unique' => 'Već postoji nalog sa datom e-mail adresom.',
            'email.max' => 'E-mail ne sme biti duži od 255 znakova.',
            'phone.required' => 'Telefon je obavezno polje.',
            'phone.regex' => 'Telefon mora sadrzati samo cifre.',
            'company.required' => 'Ime firme je obavezno polje.',
            'company.string' => 'Firma mora biti sačinjeno od slova i znakova.',
            'company.max' => 'Naziv firme ne sme biti duži od 255 slova, brojeva i/ili znakova.'
        ];
    }


}
