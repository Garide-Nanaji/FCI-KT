<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class Api2Controller extends Controller
{
    public function API2data()
    {
        if(Auth::check()){
        // Make API request to fetch data from API 2
        $response = Http::get('http://localhost:8002/api2/index');

        // Process the received data
        $data2 = $response->json();
        //dd($data2);

        // Pass the data to the view
        return view('api2', ['data2' => $data2]);
        }else{
            return redirect("/")->withSuccess('Please login first before you enter into dashboard');
        }
    }

}
