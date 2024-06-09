<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCriteriaRequest extends FormRequest
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
            "text" => "required|string|max:255",
            "point_max" => "required|min:0",
            "point_min" => "required|min:0",
            "description" => "required|string|max:1000",
        ];
    }

    public function messages(): array
    {
        return [
            'text.required' => 'Kolom teks wajib diisi.',
            'text.string' => 'Kolom teks harus berupa string.',
            'text.max' => 'Kolom teks tidak boleh lebih dari 255 karakter.',
            'point_max.required' => 'Kolom poin maksimum wajib diisi.',
            'point_max.string' => 'Kolom poin maksimum harus berupa string.',
            'point_max.min' => 'Kolom poin maksimum tidak boleh kurang dari 0.',
            'point_min.required' => 'Kolom poin minimum wajib diisi.',
            'point_min.string' => 'Kolom poin minimum harus berupa string.',
            'point_min.min' => 'Kolom poin minimum tidak boleh kurang dari 0.',
        ];
    }
}
