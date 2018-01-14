<?php
namespace App\Http\Controllers\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Recruitments as RC;
class RecruitmentsController extends Controller
{
    public function index()
    {
        return RC::findOrFail(Auth::guard('employer')->user()->id)->get();
    }


}