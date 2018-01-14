<?php
namespace App\Http\Controllers\Employers;
use App\Employers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    public function index_id($id)
    {
        return Employers::findOrFail($id);
    }
}