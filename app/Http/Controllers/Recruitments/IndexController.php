<?php
namespace App\Http\Controllers\Recruitments;
use Illuminate\Http\Request;
use App\BranchRecruitment;
use App\Recruitments;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
        return view('recruiments.index');
    }
    public function index_id($id)
    {

        $data = new Recruitments();
        $data = $data->where('recruitments.id','=',$id)->where('recruitments.status','=',1)->join('employers','employer_id','=','employers.id')->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->first();
        if(!$data)
        {
            return 'lỗi';
        }
        
        $data_branches = new BranchRecruitment();
        $data_branches = $data_branches->join('branches','branches.id','=','branch_recruitment.branch_id')->where('recruitments_id','=',$id)->select('branches.branch_name')->get();
        if(Auth::guard('admin')->check())
        {
            return view('recruiments.index_id',['data' => $data,'id' => $id,'data_branches'=> $data_branches,'own'=> "123"]);
            
        }
        if(Auth::guard('employer')->check())
        {
            
            $id_em = Auth::guard('employer')->user()->id;
            
            if($id_em == $data->employer_id )
            {
                return view('recruiments.index_id',['data' => $data,'id' => $id,'data_branches'=> $data_branches,'own'=> "123"]);
            }
        }
        return view('recruiments.index_id',['data' => $data,'id' => $id,'data_branches'=> $data_branches]);
    }


}