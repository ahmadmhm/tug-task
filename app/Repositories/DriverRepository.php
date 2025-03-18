<?php

namespace App\Repositories;

use App\Models\Driver;

class DriverRepository
{
    // TODO it can be extended from base repository

    public function paginate()
    {
        return Driver::query()->paginate();
    }

    public function store(array $data): Driver
    {
        // TODO can add DTO for more reliability
        return Driver::create([
            'name' => $data['name'],
            'license_number' => $data['licenseNumber'],
            'phone_number' => $data['phoneNumber'],
        ]);
    }
}
