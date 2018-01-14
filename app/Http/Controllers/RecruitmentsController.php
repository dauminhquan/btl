<?php
/**
 * Created by PhpStorm.
 * User: Quan
 * Date: 10/01/2018
 * Time: 4:39 CH
 */

namespace App\Http\Controllers;
use App\Recruitments as RC;
use Illuminate\Http\Request;

class RecruitmentsController
{
    public function index(Request $request)
    {
        if($request->has('page'))
        {
            return RC::join('employers','employers.id','=','recruitments.employer_id')->select(['recruitments.*','employers.name_company'])->orderBy('created_at', 'desc')->paginate(10);

        }
        return RC::join('employers','employers.id','=','recruitments.employer_id')->select(['recruitments.*','employers.name_company'])->orderBy('created_at', 'desc')->get();
    }

}