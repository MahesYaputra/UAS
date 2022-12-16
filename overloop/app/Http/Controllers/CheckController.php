<?php

namespace App\Http\Controllers;
use App\Models\Check;
use App\Models\Detail;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;


class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $loopkey = $request->get('loopkey');

        if (!empty($loopkey)){
            $result = Detail::where("loopkey", $loopkey)->exists();
            if ($result === TRUE){
                return view('index-genuine',[
                    'result' => 'Genuine',
                    'comment' => 'Stay Classy In The Loop'
                ]);
            }elseif ($result === FALSE){
                return view('index-genuine',[
                    'result' => 'Not Genuine',
                    'comment' => 'Loopkey Invalid or Product is not Genuine'
                ]);
            }
        } else {
            return view('index',[
                'result' => ''
            ]);
        }




        // if (Detail::where('loopkey', '=', Detail::get($loopkey))->count() > 0){
        //     return view('index',[
        //         'result' => 'Your Product is Genuine.'
        //     ]);
        // }elseif (Detail::where('loopkey', '=', Detail::get($loopkey))->count() < 0){
        //     return view('index',[
        //         'result' => 'Your Loopkey is Invalid'
        //     ]);
        // }
        
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
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(Check $check)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check $check)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check $check)
    {
        //
    }
}
