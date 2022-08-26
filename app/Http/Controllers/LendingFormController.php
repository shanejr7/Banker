<?php

namespace App\Http\Controllers;

use App\Models\LendingForm;
use Illuminate\Http\Request;
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
     * Show the form for creating a new lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function createLendorForm(Request $request){

        return view('Bnker/html/ltr/lendor-loan-form');

    }


     /**
     * Form submission for creating a new lendor form.
     *
     * @return \Illuminate\Http\Response
     */

    public function lendorFormSubmit(Request $request){



        $attributes =  $request->validate([

            'admin_id'=> 'required',
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'maritial_status' => 'required',
            'address' => 'required',
            'purpose_of_loan' => 'required',
            'country' => 'required',
            'loan_amount' => 'required',
            'interest_rate' => 'required',
            'term' => 'required',
            'status' => 'required',
        
        ]);


        if ($attributes) {


            LendingForm::create($attributes);


            return redirect()->route('lendorFormPage');
        

        
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
    public function destroy(LendingForm $lendingForm)
    {
        //
    }
}
