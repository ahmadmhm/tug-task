<?php

namespace App\Concerns;

use Illuminate\Http\Response;

trait JsonResponse
{
    public function generateResponse($data = null, string $message = '', $status = Response::HTTP_OK, $additional = false)
    {

        return response()->json([
            'message' => $message,
            'data' => $additional ? $data->items() : $data,
            'additional' => $additional ? $this->getAdditional($data) : null,
        ], $status);
    }

    public function getAdditional($data): array
    {
        try {
            return [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
            ];
        } catch (\Exception $e) {
            return [];
        }
    }
}
