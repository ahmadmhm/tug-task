<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\V1\Vehicle\StoreRequest;
use App\Http\Resources\V1\VehicleResource;
use App\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VehicleController extends BaseApiController
{
    public function __construct(private VehicleRepository $vehicleRepository) {}

    public function index(Request $request)
    {
        $vehicles = $this->vehicleRepository->paginate();

        return $this->generateResponse(VehicleResource::collection($vehicles), additional: true);
    }

    public function store(StoreRequest $request)
    {
        try {

            $vehicle = $this->vehicleRepository->store($request->validated());

            return $this->generateResponse(
                new VehicleResource($vehicle),
                message: __('messages.items.success_creation', ['item' => __('Vehicle')]),
                status: Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return $this->generateResponse(message: $e->getMessage(), status: Response::HTTP_BAD_REQUEST);
        }
    }
}
