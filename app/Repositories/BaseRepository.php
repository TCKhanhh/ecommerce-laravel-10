<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illumnate\Database\Eloquent\Model;

/**
 * Class UserService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(
        Model $model
    ) {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }
}
