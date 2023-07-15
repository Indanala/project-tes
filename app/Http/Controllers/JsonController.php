<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function index()
    {
        //$on_page=is_null($request->get('page'))?1 :$request->get('page');
        $response = Http::get('https://dummyjson.com/products'); // Ganti URL dengan URL yang sesuai
        //$data =json_decode($response,true);
        $data =json_decode($response,true);
      //  echo $data['products'][5]['title'];
       // $data ['max_page']= $response->json()['total_page'];
       // echo "<pre>"; print_r($data); echo "<pre>";
        return view('json', ['data' =>$data]);
    }

   public function show ($id)
    {
        $response = Http::get('https://dummyjson.com/products/#single');

         $result=json_decode($response,true);
         $data= $result::find($id);

        return view('detail', ['data' =>$data], );
    }
}
