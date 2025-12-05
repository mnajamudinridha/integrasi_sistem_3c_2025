<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMatakuliahRequest;
use App\Http\Requests\UpdateMatakuliahRequest;
use App\Http\Resources\MatakuliahResource;
use App\Models\Matakuliah;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MatakuliahController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $matakuliah = Matakuliah::query()->paginate(15);

        return MatakuliahResource::collection($matakuliah);
    }

    public function store(StoreMatakuliahRequest $request): JsonResponse
    {
        $matakuliah = Matakuliah::query()->create($request->validated());

        return (new MatakuliahResource($matakuliah))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Matakuliah $matakuliah): MatakuliahResource
    {
        return new MatakuliahResource($matakuliah);
    }

    public function update(UpdateMatakuliahRequest $request, Matakuliah $matakuliah): MatakuliahResource
    {
        $matakuliah->update($request->validated());

        return new MatakuliahResource($matakuliah);
    }

    public function destroy(Matakuliah $matakuliah): JsonResponse
    {
        $matakuliah->delete();

        return response()->json([
            'message' => 'Matakuliah berhasil dihapus',
        ]);
    }
}
