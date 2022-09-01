<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Notification;
use App\Models\LendingForm;



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

            return view('/Bnker/html/ltr/user-dashboard',['forms' => LendingForm::where('user_id','=',Auth::id())->get()]);
       }

       if (auth()->user()->is_admin == true) {

            return view('Bnker/html/ltr/admin-dashboard',['forms' => LendingForm::where('admin_id','=',Auth::id())->get()]);
        
       }

       return redirect()->back()->withErrors();
       
    }



}
