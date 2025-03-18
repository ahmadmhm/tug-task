<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\V1\Driver\StoreRequest;
use App\Http\Resources\V1\DriverResource;
use App\Repositories\DriverRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverController extends BaseApiController
{
    public function __construct(private DriverRepository $driverRepository) {}

    public function index(Request $request)
    {
        $vehicles = $this->driverRepository->paginate();

        return $this->generateResponse(DriverResource::collection($vehicles), additional: true);
    }

    public function store(StoreRequest $request)
    {
        try {
            $vehicle = $this->driverRepository->store($request->validated());

            return $this->generateResponse(
                new DriverResource($vehicle),
                message: __('messages.items.success_creation', ['item' => __('Driver')]),
                status: Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return $this->generateResponse(message: $e->getMessage(), status: Response::HTTP_BAD_REQUEST);
        }
    }
}
