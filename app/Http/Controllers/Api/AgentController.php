<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Agent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentController extends BaseController
{

    public function index(): JsonResponse
    {
        return response()->json(Agent::all(), 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'nullable|email|unique:agents,email',
            'phone_number' => 'required|string|max:20',
            'password' => 'required|min:6',
            'property_id' => 'nullable|string',
            'license_no' => 'nullable|string',
            'tax_no' => 'nullable|string',
            'website_url' => 'nullable|url',
            'specialist' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            $agent = Agent::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'property_id' => $request->property_id,
                'license_no' => $request->license_no,
                'tax_no' => $request->tax_no,
                'website_url' => $request->website_url,
                'specialist' => $request->specialist,
                'bio' => $request->bio,
            ]);

            return response()->json(['message' => 'Agent added successfully', 'agent' => $agent], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(int $id): JsonResponse
    {
        $agent = Agent::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Agent not found'], 404);
        }

        return response()->json($agent, 200);
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $agent = Agent::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Agent not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|max:255',
            'email' => 'sometimes|nullable|email|unique:agents,email,' . $id,
            'phone_number' => 'sometimes|required|string|max:20',
            'password' => 'sometimes|min:6',
            'property_id' => 'nullable|string',
            'license_no' => 'nullable|string',
            'tax_no' => 'nullable|string',
            'website_url' => 'nullable|url',
            'specialist' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        try {
            if ($request->filled('password')) {
                $request->merge(['password' => Hash::make($request->password)]);
            }

            $agent->update($request->all());

            return response()->json(['message' => 'Agent updated successfully', 'agent' => $agent], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update agent', 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy(int $id): JsonResponse
    {
        $agent = Agent::find($id);

        if (!$agent) {
            return response()->json(['message' => 'Agent not found'], 404);
        }

        try {
            $agent->delete();
            return response()->json(['message' => 'Agent deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete agent', 'message' => $e->getMessage()], 500);
        }
    }

}
