<?php

namespace App\Http\Controllers\Api;

use App\Models\Property;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class PropertyController extends BaseController
{

    /**
     * Display a listing of the Created Property.
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        //
        $property = response()->json(Property::all(), 200) ;
        return $property;

    }

    /**
     * Store a newly created movie in storage.
     * @param Request $request
     * @return JsonResponse
     */

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'agent_id' => 'required|integer',
            'name' => 'required|string',
            'purpose' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'bedroom_count' => 'required|string',
            'bathroom_count' => 'required|string',
            'garage_count' => 'required|string',
            'garage_size' => 'required|string',
            'build_year' => 'required|string',
            'size' => 'required|string',
            'description' => 'nullable',
            'amenities' => 'nullable',
            'pool_size' => 'nullable',
            'addition_room' => 'nullable',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        try {
            $property = [
                'agent_id' => $request->get('agent_id'),
                'name' => $request->get('name'),
                'purpose' => $request->get('purpose'),
                'location' => $request->get('location'),
                'type' => $request->get('type'),
                'bedroom_count' => $request->get('bedroom_count'),
                'bathroom_count' => $request->get('bathroom_count'),
                'garage_count' => $request->get('garage_count'),
                'garage_size' => $request->get('garage_size'),
                'build_year' => $request->get('build_year'),
                'size' => $request->get('build_year'),
                'description' => $request->get('description'),
            ];
            Property::create($property);
            return response()->json(['message' => 'Property added successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified single movie.
     * @param int $id
     * @return JsonResponse
     */

    public function show(int $id): JsonResponse
    {
        $property = Property::findOrFail($id);
        if (!$property) {
            return response()->json(['message' => 'Property not found'], 404);
        }
        return response()->json($property, 200);
    }

    /**
     * Update the specified movie in storage.
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */

    public function update(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'agent_id' => 'required|integer',
            'name' => 'required|string',
            'purpose' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'bedroom_count' => 'required|string',
            'bathroom_count' => 'required|string',
            'garage_count' => 'required|string',
            'garage_size' => 'required|string',
            'build_year' => 'required|string',
            'size' => 'required|string',
            'description' => 'nullable',
            'amenities' => 'nullable',
            'pool_size' => 'nullable',
            'addition_room' => 'nullable',
        ]);
        $property = Property::findOrFail($id);
        if (!$property) {
            return response()->json(['message' => 'Property not found'], 404);
        }
        try {
            $property->update($request->only(['title', 'description', 'release_year', 'director', 'genre', 'rating']));
            return response()->json([
                'message' => 'Property updated successfully',
                'movie' => $property], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update movie', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified movie from storage.
     * @param int $id
     * @return JsonResponse
     */

    public function destroy(int $id):JsonResponse
    {
        $property = Property::findOrFail($id);
        if (!$property) {
            return response()->json(['message' => 'Property not found'], 404);
        }
        try {
            $property->delete();
            return response()->json(['message' => 'Property deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete movie', 'message' => $e->getMessage()], 500);
        }
    }

}
