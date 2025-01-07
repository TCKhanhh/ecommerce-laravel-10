<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;

use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;

    public function __construct(
        UserService $userService,
        ProvinceRepository $provinceRepository
    ) {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
    }


    public function index()
    {
        // $users = DB::table('users')->paginate(10);
        $users = $this->userService->paginate();
        $config['seo'] = config('apps.user');
        $template = 'Admin.Dashboard.user.index';
        return view('Admin.Dashboard.layout', compact('template', 'users', 'config'));
    }

    public function create()
    {
        $provinces = $this->provinceRepository->all();
        // dd($provinces);
        $config['seo'] = config('apps.user');
        $template = 'Admin.Dashboard.user.create';


        return view('Admin.Dashboard.layout', compact('template', 'config', 'provinces'));
    }

    // public function create(Request $request)
    // {
    //     $config['seo'] = config('apps.user');
    //     $template = 'Admin.Dashboard.user.create';

    //     if ($request->ajax()) {
    //         if ($request->has('province_code')) {
    //             $districts = DB::table('districts')
    //                 ->where('province_code', $request->province_code)
    //                 ->select('code', 'name')
    //                 ->get();
    //             return response()->json($districts);
    //         }

    //         if ($request->has('district_code')) {
    //             $wards = DB::table('wards')
    //                 ->where('district_code', $request->district_code)
    //                 ->select('code', 'name')
    //                 ->get();
    //             return response()->json($wards);
    //         }
    //     }

    //     $provinces = DB::table('provinces')->select('code', 'name')->get();

    //     return view('Admin.Dashboard.layout', compact('template', 'config', 'provinces'));
    // }

    public function store(StoreUserRequest $request)
    {
        echo 1;
        die();
    }
}
