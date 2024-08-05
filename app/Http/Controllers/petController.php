<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Requests\GetByStatusPetRequest;
use App\Http\Resources\PetResource;

class petController extends Controller
{
    public function petById($petId)
    {
        $pet = Pet::find($petId);
        return new PetResource($pet);
    }

    public function create(CreatePetRequest $request) {
        $pet = Pet::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'tags_id'     => $request->tags_id,
            'status'      => $request->status
        ]);

        if (isset($request['photos'])) {
            $pet->photos()->createMany(array_map(function ($url) {
                return [
                    'name'     => $url,
                    'isActive' => true
                ];
            }, $request['photos']));
        }

        $data = [
           'message' => 'Pet created successfully!'
        ];

        return response()->json($data, 201);
    }

    public function findByStatus(GetByStatusPetRequest $request) {
        $pets = Pet::whereIn('status', $request['status'])->get();
        return response()->json($pets);
    }

    public function delete($petId) {
        $pet = Pet::findOrFail($petId);
        $pet->delete();

        return response()->json(['message' => 'Pet deleted successfully.']);
    }

    public function update(UpdatePetRequest $request, $petId)
    {
        $pet = Pet::findOrFail($petId);
        $pet->update([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'tags_id'     => $request->tags_id,
            'status'      => $request->status
        ]);

        if (isset($request['photos'])) {
            $pet->photos()->createMany(array_map(function ($url) {
                return [
                    'name'     => $url,
                    'isActive' => true
                ];
            }, $request['photos']));
        }

        $data = [
            'message' => 'Pet updated successfully!'
        ];

        return response()->json($data, 201);
    }
}
