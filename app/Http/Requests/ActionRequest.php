<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionRequest extends FormRequest
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
            'naslov' =>  ['required', 'string'],
            'visina_akcije' =>  ['required', 'string'],
            'slika2' =>  ['required', 'image'],
            'slika' =>   ['image'],
            'datum_od' => ['required', 'date', 'after_or_equal:today'],
            'datum_do' => ['required', 'date', 'after:datum_od'],
            'tekst' =>  ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'naslov.required' => 'Naslov je obavezan.',
            'naslov.string' => 'Naslov mora biti tekstualnog tipa.',

            'visina_akcije.required' => 'Visina akcije je obavezna.',
            'visina_akcije.string' => 'Visina akcije mora biti tekst.',

            'slika2.required' => 'Slika je obavezna.',
            'slika2.image' => 'Slika mora biti validna slika (jpeg, png, itd.).',

            'slika.image' => 'Druga slika mora biti validna slika (jpeg, png, itd.).',

            'datum_od.required' => 'Datum početka je obavezan.',
            'datum_od.date' => 'Datum početka mora biti validan datum.',
            'datum_od.after_or_equal' => 'Datum početka ne može biti u prošlosti.',

            'datum_do.required' => 'Datum završetka je obavezan.',
            'datum_do.date' => 'Datum završetka mora biti validan datum.',
            'datum_do.after' => 'Datum završetka mora biti nakon datuma početka.',

            'tekst.required' => 'Tekst je obavezan.'
        ];
    }
}
