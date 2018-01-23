<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\BranchRecruitment;
use App\Recruitments;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function recruitments_wait()
    {
        return view('admin.recruitments_wait');
    }
    public function recruitments_wait_id($id)
    {
        $data = new Recruitments();
        $data = $data->where('recruitments.id','=',$id)->where('recruitments.status','=',0)->join('employers','employer_id','=','employers.id')->join('recruitment_types','recruitment_types.id','=','recruitments.recruitment_type_id')->select('recruitments.*','employers.name_company','recruitment_types.recruitment_type_name')->first();
        if(!$data)
        {
            return 'lỗi';
        }
        
        $data_branches = new BranchRecruitment();
        $data_branches = $data_branches->join('branches','branches.id','=','branch_recruitment.branch_id')->where('recruitments_id','=',$id)->select('branches.branch_name')->get();
        
        return view('admin.recruitments_wait_id',['data' => $data,'id' => $id,'data_branches'=> $data_branches]);
       
    }
}