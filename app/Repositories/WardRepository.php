<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\WardRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Ward;

/**
 * Class UserService
 * @package App\Services
 */
class WardRepository extends BaseRepository implements WardRepositoryInterface
{
    // public function all()
    // {
    //     return DB::table('districts')->get();
    // }

    protected $model;
    public function __construct(
        Ward $model
    ) {
        $this->model = $model;
    }

    public function findWardByDistrictId(int $district_id = 0)
    {
        return $this->model->where('district_code', '=', $district_id)->get();
    }
}