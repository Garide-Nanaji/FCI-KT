<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class Api1Controller extends Controller
{
    public function API1data()
    {
        if(Auth::check()){
        // Make API request to fetch data from API 1
        $response = Http::timeout(60)->get('http://localhost:8001/api1/index');

        // Process the received data
        $data1 = $response->json();
        
       // dd($data1);

        // Pass the data to the view
        return view('api1', ['data1' => $data1]);
        }else{
            return redirect("/")->withSuccess('Please login first before you enter into dashboard');
        }
    }
}
