<?php

namespace App\Http\Controllers;

use App\Models\LendingForm;
use Illuminate\Http\Request;
use Illuminate\Http\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LendingFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the loan calculation form.
     *
     * @return \Illuminate\Http\Response
     */

     public function loanCalculationForm(Request $request){

        return view('Bnker/html/ltr/loan-calculation');

    }

    ///////////// user functions ///////////////////


    /**
     * show find lendor view.
     *
     * @return \Illuminate\Http\Response
     */

     public function borrowerFindBorrower(Request $request){

        return view('Bnker/html/ltr/borrower-find-lendor',['form' => LendingForm::where('admin_id','!=',null)->where('status','=','created')->get()]);

    }


    /**
     * Show the form for creating a new borrower form.
     *
     * @return \Illuminate\Http\Response
     */

     public function createBorrowerForm(Request $request){

        return view('Bnker/html/ltr/borrower-loan-form');

    }


    /**
     * Show the view a lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function borrowerFormView(Request $request,LendingForm $form){


        return view('Bnker/html/ltr/borrower-loan-form-view',['form' => LendingForm::where('id','=',$form->id)->get()]);

    }



    /**
     * Show the view a lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function borrowerFormUpdate(Request $request){

        $attributes =  $request->validate([

            'form_id' => 'required',
            'loan_amount' => '',
            'interest_rate' => '',
            'term' => '',

        ]);


        $form = $request->input('form_id');


        $LendingForm = LendingForm::where('id','=',$form)->first();


        if(isset($LendingForm)){

            if(str_contains($LendingForm->loan_amount,$request->input('loan_amount')) == false){


                $string = str_replace('$', '', $request->input('loan_amount'));

                $LendingForm->loan_amount = $string;

                $LendingForm->save();

            }

            if(str_contains($LendingForm->interest_rate,$request->input('interest_rate')) == false){


                $string = str_replace('%', '', $request->input('interest_rate'));

                $LendingForm->interest_rate = $string;

                $LendingForm->save();
           }

           if(str_contains($LendingForm->term,$request->input('term')) == false){

                $string = str_replace('m', '', $request->input('term'));

                $LendingForm->term = $request->input('term');

                $LendingForm->save();

           }
       }


       $request->session()->regenerate();


       return redirect('/borrower-loan-form-view'.$form)->with('lendor_form_message', 'Form updated successfully!');

   }





     /**
     * Form submission for creating a new lendor form.
     *
     * @return \Illuminate\Http\Response
     */

     public function borrowerFormSubmit(Request $request){



        $attributes =  $request->validate([

            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'address' => 'required',
            'purpose_of_loan' => 'required',
            'country' => 'required',
            'loan_amount' => 'required',
            'interest_rate' => 'required',
            'term' => 'required',

        ]);


        if ($attributes) {


            $LendingForm = new LendingForm();

            $LendingForm->user_id =  auth()->user()->id;

            $LendingForm->full_name = $request->input('full_name');
            $LendingForm->email = $request->input('email');
            $LendingForm->phone = $request->input('phone');
            $LendingForm->state = $request->input('state');
            $LendingForm->gender = $request->input('gender');
            $LendingForm->date_of_birth = $request->input('date_of_birth');
            $LendingForm->marital_status = $request->input('marital_status');
            $LendingForm->address = $request->input('address');
            $LendingForm->purpose_of_loan = $request->input('purpose_of_loan');
            $LendingForm->country = $request->input('country');
            $LendingForm->loan_amount = str_replace('$', '', $request->input('loan_amount'));
            $LendingForm->interest_rate = str_replace('%', '', $request->input('interest_rate'));
            $LendingForm->term = $request->input('term');

            $LendingForm->status = 'created';

            $LendingForm->save();

            $request->session()->regenerate();

            return redirect('/lendor-form')->with('lendor_form_message', 'Form submitted successfully!');



        }


        return redirect()->back()->withErrors();

    }




    //////////// admin functions ////////////////////


     /**
     * show find borrower view.
     *
     * @return \Illuminate\Http\Response
     */

     public function lendorFindBorrower(Request $request){

        return view('Bnker/html/ltr/lendor-find-borrower',['form' => LendingForm::where('user_id','!=',null)->where('status','=','created')->get()]);

    }



     /**
     * Show the form for creating a new lendor form.
     *
     * @return \Illuminate\Http\Response
     */

     public function createLendorForm(Request $request){

        return view('Bnker/html/ltr/lendor-loan-form');

    }




    /**
     * Show the view a lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function lendorFormView(Request $request,LendingForm $form){


        return view('Bnker/html/ltr/lendor-loan-form-view',['form' => LendingForm::where('id','=',$form->id)->get()]);

    }



    /**
     * Show the view a lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function lendorFormUpdate(Request $request){

        $attributes =  $request->validate([

            'form_id' => 'required',
            'loan_amount' => '',
            'interest_rate' => '',
            'term' => '',

        ]);


        $form = $request->input('form_id');


        $LendingForm = LendingForm::where('id','=',$form)->first();


        if(isset($LendingForm)){

            if(str_contains($LendingForm->loan_amount,$request->input('loan_amount')) == false){


                $string = str_replace('$', '', $request->input('loan_amount'));

                $LendingForm->loan_amount = $string;

                $LendingForm->save();

            }

            if(str_contains($LendingForm->interest_rate,$request->input('interest_rate')) == false){


                $string = str_replace('%', '', $request->input('interest_rate'));

                $LendingForm->interest_rate = $string;

                $LendingForm->save();
           }

           if(str_contains($LendingForm->term,$request->input('term')) == false){

                $string = str_replace('m', '', $request->input('term'));

                $LendingForm->term = $request->input('term');

                $LendingForm->save();

           }
       }


       $request->session()->regenerate();


       return redirect('/lendor-loan-form-view/'.$form)->with('lendor_form_message', 'Form updated successfully!');

   }





     /**
     * Form submission for creating a new lendor form.
     *
     * @return \Illuminate\Http\Response
     */

     public function lendorFormSubmit(Request $request){



        $attributes =  $request->validate([

            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'address' => 'required',
            'purpose_of_loan' => 'required',
            'country' => 'required',
            'loan_amount' => 'required',
            'interest_rate' => 'required',
            'term' => 'required',

        ]);


        if ($attributes) {


            $LendingForm = new LendingForm();

            $LendingForm->admin_id =  auth()->user()->id;

            $LendingForm->full_name = $request->input('full_name');
            $LendingForm->email = $request->input('email');
            $LendingForm->phone = $request->input('phone');
            $LendingForm->state = $request->input('state');
            $LendingForm->gender = $request->input('gender');
            $LendingForm->date_of_birth = $request->input('date_of_birth');
            $LendingForm->marital_status = $request->input('marital_status');
            $LendingForm->address = $request->input('address');
            $LendingForm->purpose_of_loan = $request->input('purpose_of_loan');
            $LendingForm->country = $request->input('country');
            $LendingForm->loan_amount = str_replace('$', '', $request->input('loan_amount'));
            $LendingForm->interest_rate = str_replace('%', '', $request->input('interest_rate'));
            $LendingForm->term = $request->input('term');

            $LendingForm->status = 'created';

            $LendingForm->save();

            $request->session()->regenerate();

            return redirect('/lendor-form')->with('lendor_form_message', 'Form submitted successfully!');



        }


        return redirect()->back()->withErrors();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LendingForm  $lendingForm
     * @return \Illuminate\Http\Response
     */
    public function show(LendingForm $lendingForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LendingForm  $lendingForm
     * @return \Illuminate\Http\Response
     */
    public function edit(LendingForm $lendingForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LendingForm  $lendingForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LendingForm $lendingForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LendingForm  $lendingForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         if (LendingForm::where('id','=',$request->input('form_id'))->delete())
        {
            
            return redirect('/dashboard')->with('lendor_form_message', 'Form deleted successfully!');;
        }

           return redirect()->back()->withErrors();
    }
}
