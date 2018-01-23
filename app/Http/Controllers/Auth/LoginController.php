<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {

        if(Auth::guard('student')->check())
        {
            return redirect()->guest(route('student.index'));
        }
        if(Auth::guard('employer')->check())
        {
            return redirect()->guest(route('employer.index.index'));
        }
        if(Auth::guard('admin')->check())
        {
            return redirect()->guest(route('admin.index'));
        }
        return view('auth/login');
    }
    public function postindex(Request $request)
    {

        if($request->has('submit'))
        {
            if($request->has('username'))
            {
                if(Auth::guard('student')->attempt(['code' => $request->username, 'password' => $request->password],$request->has('remember'))) {
                    return redirect()->guest(route('student.index'));
                }
                if(Auth::guard('employer')->attempt(['email_company' => $request->username, 'password' => $request->password],$request->has('remember'))) {
                    return redirect()->guest(route('employer.index.index'));
                }
                if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password],$request->has('remember'))) {
                    return redirect()->guest(route('admin.index'));
                }
                return 'tk hoặc mk không chính xác';
            }
        }
        return 404;
    }
    public function logout()
    {
        if(Auth::guard('student')->check())
        {
            Auth::guard('student')->logout();

        }
        if(Auth::guard('employer')->check())
        {
            Auth::guard('employer')->logout();

        }
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();

        }
        return redirect()->guest(route('login'));
    }
}
