<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\customer;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    function model(){

   
     // return User::get();
        // return User::all();
        // return User::find(1);
        // return User::simplePaginate(2);
        // return User::orderBy('id','desc')->get();
        // return User::inRandomOrder()->latest()->first();
        // return User::inRandomOrder()->latest()->first();
        // return User::groupBY('firstName')->get();
        // return User::skip(5)->take(5)->get();
        // return User::count();
        // return User::sum('id');
        // return User::max('id');
        // return User::min('id');
        // return User::avg('id');
        // return User::select('firstName','lastName')->get();
        // return User::select('firstName','lastName')->distinct()->get();

        // return User::where('firstName','Frida')->get(); 

        // return User::where([
        //   'firstName'=>'Niko',
        //   'email'=> 'brooke.reichert@example.net',

        // ])->get(); 


        //  return User::whereBetween('id',[4,7])->get(); 
        //  return User::whereNotBetween('id',[1000,1000])->get(); 


    //    return User::create([
    //         'firstName'=>'aaa',
    //         'lastName'=>'bbbb',
    //         'mobile'=>'ka@gmail.com',
    //         'email'=>'cccccccc',

    //     ]);
    //    return User::create([
    //         'email'=>'aaabbbccc',
           
            

    //     ]);
// ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
    // return User::where('id',1211 )->update([
    //     'firstName'=>'apple',
        

    // ]);
    //   updateOrCreate,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

    // return User::updateOrCreate(
    //     ['email' => 'pacocha.miguel@example.com'],  
    //     [
    //         'firstName' => 'Kamal',  
    //         'lastName' => 'Husain',
    //         'email' => 'pacocha.miguel@example.com',
    //         'mobile' => '1234567890'
    //     ]
    // );
    // return User::all();
    // return User::with('Category','customer')->get();
    // ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
    // return User::with('category','customer','product')->get();
    // ,,,,,,,..................................................................

    return Category::with('product','user')->get();
    
    }
}