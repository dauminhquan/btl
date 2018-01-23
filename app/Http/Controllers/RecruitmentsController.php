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
use Illuminate\Support\Facades\Auth;
class RecruitmentsController
{
    public function index(Request $request)
    {
   
        if($request->has('page'))
        {
            return RC::join('employers','employers.id','=','recruitments.employer_id')->where('recruitments.status','=',1)->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->orderBy('created_at', 'desc')->paginate($request->has('size')?$request->size:5);

        }
        return RC::join('employers','employers.id','=','recruitments.employer_id')->where('recruitments.status','=',1)->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->orderBy('created_at', 'desc')->get();
    }
    public function update(Request $request,$id)
    {
        $rc = RC::findOrFail($id);
        if($request->has('content'))
        {
            $rc->content = $request->content;
                $rc->save();
                return 200;
        }
        else{
            if($request->has('success'))
            {
               if($request->success == true)
               {
                    $rc->status = 1;
                    $rc->save();
                    return 200;
               }
               else{
                $rc->status = -1;
                $rc->save();
                return 200;
               }
            }
        }
       
        return 404;
    }
    public function destroy($id)
    {
        
       
          
            $rc = RC::findOrFail($id);
            
            $rc->delete();
            
            return 204;
           
       

    }

}