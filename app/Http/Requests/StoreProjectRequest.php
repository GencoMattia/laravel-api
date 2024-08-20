<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            //

            "title" => ["required", "string", "unique:projects", "min:4", "max:255"],
            "description" => ["required", "string", "min:4"],
            "image" => ["required", "image", "max:3000"],
            "technologies" => ["required", "array", "exists:technologies,id"],
            "client" => ["required", "string", "min:4", "max:255"],
            "type_id" => ["required", "integer", "exists:types,id"],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa.',
            'title.unique' => 'Il titolo è già utilizzato.',
            'title.min' => 'Il titolo deve avere almeno :min caratteri.',
            'title.max' => 'Il titolo non può superare i :max caratteri.',

            'description.required' => 'La descrizione è obbligatoria.',
            'description.string' => 'La descrizione deve essere una stringa.',
            'description.min' => 'La descrizione deve avere almeno :min caratteri.',

            'image.required' => 'L\'immagine è obbligatoria.',

            'technologies.required' => 'Le tecnologie sono obbligatorie.',
            'technologies.string' => 'Le tecnologie devono essere una stringa.',
            'technologies.min' => 'Le tecnologie devono avere almeno :min caratteri.',
            'technologies.max' => 'Le tecnologie non possono superare i :max caratteri.',

            'client.required' => 'Il cliente è obbligatorio.',
            'client.string' => 'Il cliente deve essere una stringa.',
            'client.min' => 'Il cliente deve avere almeno :min caratteri.',
            'client.max' => 'Il cliente non può superare i :max caratteri.',
        ];
    }
}
