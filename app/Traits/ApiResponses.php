<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    protected function success(string $message, array $data = [], $statusCode = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    protected function error(string $message, $statusCode): JsonResponse
    {
        return response()->json([
            'message' => $message,
        ], $statusCode);
    }
}
