<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MahasiswaController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $mahasiswa = Mahasiswa::query()->with('prodi')->paginate(15);

        return MahasiswaResource::collection($mahasiswa);
    }

    public function store(StoreMahasiswaRequest $request): JsonResponse
    {
        $mahasiswa = Mahasiswa::query()->create($request->validated());
        $mahasiswa->load('prodi');

        return (new MahasiswaResource($mahasiswa))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Mahasiswa $mahasiswa): MahasiswaResource
    {
        $mahasiswa->load('prodi');

        return new MahasiswaResource($mahasiswa);
    }

    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa): MahasiswaResource
    {
        $mahasiswa->update($request->validated());
        $mahasiswa->load('prodi');

        return new MahasiswaResource($mahasiswa);
    }

    public function destroy(Mahasiswa $mahasiswa): JsonResponse
    {
        $mahasiswa->delete();

        return response()->json([
            'message' => 'Mahasiswa berhasil dihapus',
        ]);
    }
}
