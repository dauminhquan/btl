<?php
namespace App\Http\Controllers\Employers;
use App\Employers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruitments;
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
        $tuyendung->attach_file = $request->file('attachment')->store('public/recruitment_attach_file');
        $tuyendung->employer_id = Auth::guard('employer')->user()->id;
        $tuyendung->save();
        return view('employers.index.post_new',['success' => true]);
    }
    public function index_id($id)
    {
        return Employers::findOrFail($id);
    }
}