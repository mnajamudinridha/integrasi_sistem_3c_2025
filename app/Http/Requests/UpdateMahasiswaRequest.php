<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequest extends FormRequest
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
        $nim = $this->route('mahasiswa');

        return [
            'nama' => ['required', 'string', 'max:255'],
            'id_prodi' => ['required', 'exists:prodi,id_prodi'],
            'email' => ['required', 'email', 'max:255', 'unique:mahasiswa,email,'.$nim.',nim'],
            'no_telp' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'id_prodi.required' => 'Prodi wajib dipilih',
            'id_prodi.exists' => 'Prodi tidak ditemukan',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
        ];
    }
}
