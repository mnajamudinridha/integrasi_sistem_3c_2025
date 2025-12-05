<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;
use App\Http\Resources\ProdiResource;
use App\Models\Prodi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProdiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $prodi = Prodi::query()->paginate(15);

        return ProdiResource::collection($prodi);
    }

    public function store(StoreProdiRequest $request): JsonResponse
    {
        $prodi = Prodi::query()->create($request->validated());

        return (new ProdiResource($prodi))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Prodi $prodi): ProdiResource
    {
        return new ProdiResource($prodi);
    }

    public function update(UpdateProdiRequest $request, Prodi $prodi): ProdiResource
    {
        $prodi->update($request->validated());

        return new ProdiResource($prodi);
    }

    public function destroy(Prodi $prodi): JsonResponse
    {
        $prodi->delete();

        return response()->json([
            'message' => 'Prodi berhasil dihapus',
        ]);
    }
}
