<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;

class UdidContrller extends Controller
{

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
    	$content = Storage::get('device.mobileconfig');
        return response($content)
        		->header('Content-type','application/x-apple-aspen-config; chatset=utf-8');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback()
    {
        return redirect()->route('index');
    }
}
