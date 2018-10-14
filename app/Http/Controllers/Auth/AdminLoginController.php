<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct() 
    {
        //$this->middleware('guest:admin',['except' =>['logout']]);
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() 
    {
        return view('auth.admin-login');
    }

    public function login(Request $request) 
    {
        // Validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //regenrate Session Id to prevent malicious session attacks
        $request->session()->regenerate();


        // Attempt to log the user in
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) 
        {
            // If Successfull,then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        return $this->sendFailedAdminLoginResponse($request);

        // If UnSucessfull then redirect back to the login with form data
        return redirect()->back()->withInput($request->only('email','remember'));

    }

   /**
     * Log the user out of the application.
    */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }


    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws ValidationException
     */
    protected function sendFailedAdminLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

     /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

}
