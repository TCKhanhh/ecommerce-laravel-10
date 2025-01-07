<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;
use App\Repositories\Interfaces\WardRepositoryInterface as WardRepository;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;

class LocationController extends Controller
{
    protected $districtRepository;
    protected $wardRepository;
    protected $provinceRepository;

    public function __construct(
        DistrictRepository $districtRepository,
        WardRepository $wardRepository,
        ProvinceRepository $provinceRepository,
    ) {
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
        $this->provinceRepository = $provinceRepository;
    }

    public function getLocation(Request $request)
    {
        $province_id = $request->input('province_id');
        $district_id = $request->input('district_id');


        if ($province_id) {
            $districts = $this->districtRepository->findDistrictByProvinceId($province_id);
            $html = $this->renderDistrictHtml($districts);
        } elseif ($district_id) {
            $wards = $this->wardRepository->findWardByDistrictId($district_id);
            $html = $this->renderWardHtml($wards);
        } else {
            $html = '<option value="0">(Không có dữ liệu)</option>';
        }

        return response()->json(['html' => $html]);
    } 

    private function renderDistrictHtml($districts)
    {
        $html = '<option value="0">(Chọn quận/huyện)</option>';
        foreach ($districts as $district) {
            $html .= '<option value="' . $district->code . '"> ' . $district->name . '</option>';
        }
        return $html;
    }

    private function renderWardHtml($wards)
    {
        $html = '<option value="0">(Chọn phường/xã)</option>';
        foreach ($wards as $ward) {
            $html .= '<option value="' . $ward->code . '"> ' . $ward->name . '</option>';
        }
        return $html;
    }

   
}