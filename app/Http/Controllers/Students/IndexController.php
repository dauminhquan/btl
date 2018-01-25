<?php
namespace App\Http\Controllers\Students;
use Illuminate\Http\Request;
use App\Students;
use App\Employers;
use App\Recruitments;
use App\RecruitmentStudent as RS;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('students.index.index');
    }
    public function sendcv(Request $request)
    {
        return view('students.index.sendcv',['data' => Employers::get(),'company' => $request->company]);
    }
    public function postsendcv(Request $request)
    {

        $rs = new RS();
        $rs->title = $request->input('title');
        $rs->employer_id = $request->input('company');
        $rs->student_id = Auth::guard('student')->user()->id;
        $rs->file_attach = $request->file('attachment')->store('public/recruitment_attach_file');
        $rs->more_information = $request->input('content');
        $rs->save();
        return view('students.index.sendcv',['data' => Employers::get(),'store' => 1]);
    }
    public function cvbox()
    {
        $rs = new RS();
        $data = $rs->join('employers','recruitment_student.employer_id','=','employers.id')->select('recruitment_student.*','employers.name_company')->paginate(50);
        return view('students.index.cvbox',['data' => $data]);
    }
    public function cvbox_id($id)
    {
        $rs = new RS();
        $data = $rs->where('recruitment_student.id','=',$id)->join('employers','recruitment_student.employer_id','=','employers.id')->select('recruitment_student.*','employers.name_company')->first();

        return view('students.index.readmail',['data' => $data]);
    }
    public function thongbao()
    {
        $rs = new RS();
        $data = $rs->join('employers','recruitment_student.employer_id','=','employers.id')->select('recruitment_student.*','employers.name_company')->paginate(50);
        return view('template.thongbaosinhvien',['data' => $data]);
      
    }
}