<?php
namespace App\Http\Controllers\Employers;
use App\Employers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruitments;
use App\BranchRecruitment;
use Illuminate\Support\Facades\Auth;
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
}