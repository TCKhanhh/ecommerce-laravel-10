<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface WardRepositoryInterface
{
    public function all();
    public function findWardByDistrictId(int $district_id);
}