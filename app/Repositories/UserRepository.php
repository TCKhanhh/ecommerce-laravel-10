<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\UserRepositoryInterface;


/**
 * Class UserService
 * @package App\Services
 */
class UserRepository implements UserRepositoryInterface
{

    public function getAllPaginate()
    {
        $users = DB::table('users')->paginate(10);
        return $users;
    }
}
