<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Notification;



// require '../vendor/autoload.php';
// use Aws;
// use Mailgun\Mailgun;

class PortalController extends Controller
{


    /**
     * Show the form to register a new account.
     *
     * @return \Illuminate\View\View
     */

    public function createRegister()
    {
        return view('Bnker/html/ltr/register');
    }

    /**
     * Show the form to login to account.
     *
     * @return \Illuminate\View\View
     */
    public function createLogin()
    {
        return view('Bnker/html/ltr/login');
    }


    /**
     * admin page.
     *
     * @return \Illuminate\View\View
     */

    public function createAdmin()
    {


        return view('/admin-page',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    }

    /**
     * admin account page.
     *
     * @return \Illuminate\View\View
     */

    public function viewAccount()
    {


        return view('/admin-account',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    }


    /**
     * Show business portal.
     *
     * @return \Illuminate\View\View
     */
    public function createClientPortal()
    {

        if (auth()->guest()) {
            abort(403);
            
        }


        return view('/emg-main/web/MalexHTML/App/dist/client-portal',['notifications' => Notification::where('user_id','=',Auth::id())->get()],['client' => Clients::where('user_id','=',Auth::id())->first()]);
    }


    /**
     * Show dashboard account.
     *
     * @return \Illuminate\View\View
     */
    public function createDashboard()
    {

        if (auth()->guest()) {
            abort(403);
            
        }
              

       if (auth()->user()->is_admin != true) {
            return view('/user-path',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
       }

       if (auth()->user()->is_admin == true) {

            return redirect()->route('admin-path');
        
       }

       return redirect()->back()->withErrors();
       
    }

    /**
     * Show account .
     *
     * @return \Illuminate\View\View
     */
    public function createAccount()
    {
        if (auth()->guest()) {
            abort(403);
            
        }

        return view('user account page',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    }



}
