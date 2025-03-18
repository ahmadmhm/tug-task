<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository
{
    // TODO it can be extended from base repository

    public function paginate()
    {
        return Vehicle::query()->paginate();
    }

    public function store(array $data): Vehicle
    {
        // TODO can add DTO for more reliability
        return Vehicle::create([
            'plate_number' => $data['plateNumber'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'year' => $data['year'],
        ]);
    }
}
