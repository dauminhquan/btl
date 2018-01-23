<?php

namespace App\Http\Controllers;
use App\Recruitments as RC;
use App\Adminreport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function recruitments_wait(Request $request)
    {
        if($request->has('page'))
        {
            return RC::join('employers','employers.id','=','recruitments.employer_id')->where('recruitments.status','=',0)->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->orderBy('created_at', 'desc')->paginate($request->has('size')?$request->size:5);

        }
        return RC::join('employers','employers.id','=','recruitments.employer_id')->where('recruitments.status','=',0)->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->orderBy('created_at', 'desc')->get();
    }
    public function recruitments_report(Request $request)
    {
       
        if(Auth::guard('admin')->check())
        {
           if($request->has('e_id')&& $request->has('re_id'))
            {
                $rp = new Adminreport();
                $rp->admin_id = Auth::guard('admin')->user()->id;
                if($request->has('report'))
                {
                    $rp->content = $request->report;
                }
                $rp->employer_id = $request->e_id;
                $rp->recruitment_id = $request->re_id;
                $rp->save();
                return 200;
            }
        }
        return 404;
    }
}
