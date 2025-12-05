<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNilaiRequest;
use App\Http\Requests\UpdateNilaiRequest;
use App\Http\Resources\NilaiResource;
use App\Models\Nilai;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NilaiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $nilai = Nilai::query()->with(['mahasiswa.prodi', 'matakuliah'])->paginate(15);

        return NilaiResource::collection($nilai);
    }

    public function store(StoreNilaiRequest $request): JsonResponse
    {
        $nilai = Nilai::query()->create($request->validated());
        $nilai->load(['mahasiswa.prodi', 'matakuliah']);

        return (new NilaiResource($nilai))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Nilai $nilai): NilaiResource
    {
        $nilai->load(['mahasiswa.prodi', 'matakuliah']);

        return new NilaiResource($nilai);
    }

    public function update(UpdateNilaiRequest $request, Nilai $nilai): NilaiResource
    {
        $nilai->update($request->validated());
        $nilai->load(['mahasiswa.prodi', 'matakuliah']);

        return new NilaiResource($nilai);
    }

    public function destroy(Nilai $nilai): JsonResponse
    {
        $nilai->delete();

        return response()->json([
            'message' => 'Nilai berhasil dihapus',
        ]);
    }
}
