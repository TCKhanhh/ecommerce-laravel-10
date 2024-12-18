<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Province;

/**
 * Class UserService
 * @package App\Services
 */
class ProvinceRepository extends BaseRepository  implements ProvinceRepositoryInterface {
    // public function all(){
    //     return DB::table('provinces')->get();
    // }

    protected $model;

    public function __construct(
       Province $model
    ){
       $this->model = $model;
    }
}