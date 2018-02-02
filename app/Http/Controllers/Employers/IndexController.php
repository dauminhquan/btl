<?php
namespace App\Http\Controllers\Employers;
use App\Employers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruitments;
use App\BranchRecruitment;
use Illuminate\Support\Facades\Auth;
use App\RecruitmentStudent as RS;
class IndexController extends Controller
{
    public function index()
    {
        return view('employers.index.index');
    }
    public function post_new()
    {
        return view('employers.index.post_new');

    }
    public function post_post_new(Request $request)
    {
        $tuyendung = new Recruitments();
        $tuyendung->content = $request->content;
        $tuyendung->title = $request->title;
        $tuyendung->number = $request->number;
        $tuyendung->pay = $request->pay;
        if($request->hasFile('attachment'))
        {
            $tuyendung->attach_file = $request->file('attachment')->store('public/recruitment_attach_file');
        }
        $tuyendung->employer_id = Auth::guard('employer')->user()->id;
        $tuyendung->recruitment_type_id = $request->recruitment_type_id;
        $tuyendung->save();
        foreach($request->branch_id as $item)
        {
            $rrt = new BranchRecruitment();
            $rrt->branch_id = $item;
            $rrt->recruitments_id = $tuyendung->id;
            $rrt->save();
        }
        return view('employers.index.post_new',['success' => true]);
    }
    public function index_id($id)
    {
        return Employers::findOrFail($id);
    }
    public function get_tat_ca_don_ung_tuyen()
    {
        return view('template.tatcadonungtuyen');
    }
    public function get_tat_ca_don_ung_tuyen_id($id)
    {
        $rs = new RS();
        $data = $rs->where('recruitment_student.id','=',$id)->join('employers','recruitment_student.employer_id','=','employers.id')->select('recruitment_student.*','employers.name_company')->first();

        return view('template.donungtuyen',['data' => $data]);
    }
    public function get_henphongvan()
    {
        
        return view('template.henphongvan');
    }
    public function get_thongbaotunhantruong()
    {
        return view('template.thongbaotunhatruong');
    }
    public function get_thongbaotunhantruong_id($id)
    {
        return view('template.thongbaotunhatruong_id');
    }
    public function get_cacbaidangcuaban(){
        return view('template.tatcabaidangcuaban');
    }
    
    public function get_thongtincanhan(){
        return view('template.thongtincanhandoanhnghiep');
    }
    
}