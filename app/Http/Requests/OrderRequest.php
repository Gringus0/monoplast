<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'image' => ['image'],
            'tipKese' => ['required'],
            'materijal' => ['required'],
            'visina' => ['required'],
            'sirina' => ['required'],
//            'bojaRucke' => ['required'],
            'bojaKese' => ['required'],
            'stampaTip' => ['required'],
            'kolicinaKese' => ['required', 'numeric', 'min:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'image.image' => 'Fajl koji ste izabrali mora biti slika.',
            'tipKese.required' => 'Morate izabrati tip kese.',
            'materijal.required' => 'Morate izabrati materijal kese.',
            'visina.required' => 'Morate izabrati visinu kese.',
            'sirina.required' => 'Morate izabrati širinu kese.',
            'bojaRucke.required' => 'Morate izabrati boju ručke.',
            'bojaKese.required' => 'Morate izabrati boju kese.',
            'stampaTip.required' => 'Morate izabrati vrstu štampe.',
            'kolicinaKese.required' => 'Morate uneti količinu kesa.',
            'kolicinaKese.numeric' => 'Količina kesa mora biti broj.',
            'kolicinaKese.min' => 'Minimalna količina kesa je 500.',
        ];
    }
}
