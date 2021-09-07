<?php

namespace App\Http\Controllers;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index(){

        $data_contactform=ContactForm::get();
        $data=["data_contactform"=>$data_contactform];
        return view('contactform/index',$data);
    }
   
    
   

    
}
