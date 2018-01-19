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
            return RC::join('employers','employers.id','=','recruitments.employer_id')->select(['recruitments.*','employers.name_company'])->orderBy('created_at', 'desc')->paginate($request->has('size')?$request->size:5);

        }
        return RC::join('employers','employers.id','=','recruitments.employer_id')->select(['recruitments.*','employers.name_company'])->orderBy('created_at', 'desc')->get();
    }
    public function update(Request $request,$id)
    {
        $rc = RC::findOrFail($id);
        if($rc->employer_id == $request->employer_id)
        {
            $rc->content = $request->content;
            $rc->save();
            return 200;
        }
        return 404;
    }

}