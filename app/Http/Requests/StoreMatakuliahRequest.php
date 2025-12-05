<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatakuliahRequest extends FormRequest
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
            'nama_matakuliah' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'min:1', 'max:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_matakuliah.required' => 'Nama matakuliah wajib diisi',
            'nama_matakuliah.string' => 'Nama matakuliah harus berupa teks',
            'nama_matakuliah.max' => 'Nama matakuliah maksimal 255 karakter',
            'sks.required' => 'SKS wajib diisi',
            'sks.integer' => 'SKS harus berupa angka',
            'sks.min' => 'SKS minimal 1',
            'sks.max' => 'SKS maksimal 6',
        ];
    }
}
