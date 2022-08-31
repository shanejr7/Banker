<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    /**
     * Subscribe user.
     *
     * @return \Illuminate\Http\Response
     */

    public function subscribe(Request $request){


        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:subscribes',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['message'=>$validator->errors()->all()]);
        }

        if(Subscribe::where('email','=',strtolower($request->input('email')))->get()){

            return response()->json(['message'=>'Subscription is already added']);

        }

        $subscriber = new Subscribe();
        $subscriber->email = strtolower($request->input('email'));
        $subscriber->save();

        $request->session()->regenerate();

        return response()->json(['message'=>'Subscription is successfully added']);


     
    }


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
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
