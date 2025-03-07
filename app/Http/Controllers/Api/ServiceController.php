<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class ServiceController extends BaseController
{

    public function index(): JsonResponse
    {
        return response()->json(Service::all(), 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author_name' => 'nullable|string',
            'tags' => 'required|text|max:500',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $agent = Service::create([
                'title' => $request->title,
                'author_name' => $request->author_name,
                'tags' => $request->tags,
                'description' => $request->description,
            ]);

            return response()->json(['message' => 'Service added successfully', 'agent' => $agent], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(int $id): JsonResponse
    {
        $agent = Service::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        return response()->json($agent, 200);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $agent = Service::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author_name' => 'nullable|string',
            'tags' => 'required|text|max:500',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $agent->update($request->all());
            return response()->json(['message' => 'Service updated successfully', 'agent' => $agent], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update agent', 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy(int $id): JsonResponse
    {
        $agent = Service::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        try {
            $agent->delete();
            return response()->json(['message' => 'Service deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete agent', 'message' => $e->getMessage()], 500);
        }
    }

}
