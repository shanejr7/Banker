<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Route;
use App\Models\User;

// require '../vendor/autoload.php';
// use Aws;
// use Mailgun\Mailgun;

class RegisterController extends Controller
{
      /**
     * construct middleware to guest
     *
     *
     */

    public function __construct(){
        $this->middleware('guest');
    }


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
     * register validated user to dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        $attributes =  $request->validate([
            'is_admin'=> 'required|boolean',
            'username' => 'required|max:255|unique:users',
            'email'=> 'required|email|max:255|unique:users',
            'password' => 'required|min:7|max:255'
        ]);


        if(User::where('email','=',strtolower($request->input('email')))->get() && User::count() < 0){

            return redirect()->back()->withErrors(['msg' => 'The email has already been taken']);

        }


        $attributes['email'] = strtolower($attributes['email']);


        $user = User::create($attributes);

        auth()->login($user);


              # Instantiate the client.
            // $mgClient = Mailgun::create('fd00846c1f2fff1319fd0a375c8825e9-cac494aa-53c6b775'); // For US servers
            // $domain = "mg.emgbusinessconsulting.com";
            // $params = array(
            // 'from'    => 'egreen@emgbusinessconsulting.com',
            // 'to'      => $user->email,
            // 'subject' => 'Hello',
            // 'text'    => 'Thanks for signing up in our app!'
            // );

            //  # Make the call to the client.
            // $mgClient->messages()->send($domain, $params);


        // $notification1 = [
        //     'user_id' =>Auth::id(),
        //     'title' => 'New Client Information Document',
        //     'body' =>'View our business portal for more information.'];

        // $notification2 = [
        //     'user_id' =>Auth::id(),
        //     'title' => 'Tax Season Is Approaching',
        //     'body' =>'Would you like to get started on your tax preparation'];

        // Notification::create($notification1);
        // Notification::create($notification2);


        $request->session()->regenerate();

        return redirect('/dashboard');

    }
}
