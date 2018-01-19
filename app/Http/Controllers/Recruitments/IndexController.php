<?php
namespace App\Http\Controllers\Recruitments;
use Illuminate\Http\Request;

use App\Recruitments;
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
        $data = $data->where('recruitments.id','=',$id)->join('employers','employer_id','=','employers.id')->select('recruitments.*','employers.name_company')->first();
        return view('recruiments.index_id',['data' => $data,'id' => $id]);
    }


}