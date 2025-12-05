<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNilaiRequest extends FormRequest
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
            'nim' => ['required', 'exists:mahasiswa,nim'],
            'id_matakuliah' => ['required', 'exists:matakuliah,id_matakuliah'],
            'nilai' => ['required', 'numeric', 'min:0', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi',
            'nim.exists' => 'Mahasiswa tidak ditemukan',
            'id_matakuliah.required' => 'Matakuliah wajib dipilih',
            'id_matakuliah.exists' => 'Matakuliah tidak ditemukan',
            'nilai.required' => 'Nilai wajib diisi',
            'nilai.numeric' => 'Nilai harus berupa angka',
            'nilai.min' => 'Nilai minimal 0',
            'nilai.max' => 'Nilai maksimal 100',
        ];
    }
}
