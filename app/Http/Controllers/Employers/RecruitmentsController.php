<?php
namespace App\Http\Controllers\Employers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Recruitments as RC;
use Illuminate\Support\Facades\Storage;
class RecruitmentsController extends Controller
{
    public function index()
    {
        return RC::findOrFail(Auth::guard('employer')->user()->id)->get();
    }
    public function add()
    {
        return view('employers.recruitments.add');
    }


    // public function viewtep()
    // {
    //     return response()->download(public_path(Storage::url('public/recruitment_attach_file/Nbu5yROH3oW6KbZtPORVJNve0whHA9QiY4ANTSuK.jpeg')));
    //     // return public_path('avb');
    //     // // return Storage::disk('local')->url('public/recruitment_attach_file/Nbu5yROH3oW6KbZtPORVJNve0whHA9QiY4ANTSuK.jpeg');
    //     // $file = Storage::url('public/recruitment_attach_file/Nbu5yROH3oW6KbZtPORVJNve0whHA9QiY4ANTSuK.jpeg');
    //     // return response()->download($file);
    //     // // return response()->download(Storage::url('public/recruitment_attach_file/Nbu5yROH3oW6KbZtPORVJNve0whHA9QiY4ANTSuK.jpeg'));
    // }
    
    public function postadd(Request $request)
    {
        $rc = new RC();
        $rc->content = $request->input('content');
        $file = $request->file('attach_file');
        $rc->attach_file = $file->store('public/recruitment_attach_file');
        $rc->employer_id = Auth::guard('employer')->user()->id;
        $rc->save();
        return $rc;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->completed = $request->completed;
        $task->update();


        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        
        return 204;
    }
}