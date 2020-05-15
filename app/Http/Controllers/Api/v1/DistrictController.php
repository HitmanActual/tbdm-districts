<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\District;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



class DistrictController  extends Controller
{
    use ApiResponser;
 

    /**
     * Return List of Districts
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
        $districts = District::all();
        
        return $this->successResponse($districts);
      
    }

    
    /**
     * get one District
     *
     * @return Illuminate\Http\Response
     */
    public function show($district)
    {
        //

        $district = District::findOrFail($district);
        return $this->successResponse($district);
        
    }

   
}
