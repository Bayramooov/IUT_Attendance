<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSender;
use Illuminate\Http\Request;

class PagesController extends Controller
{

	//index page
    public function index()
    {
    	return view('pages.index');
    }
    //about page

   public function about()
   {
   	return view('pages.about');
   }

   //contact page

  public function contact()
  {
  	return view('pages.contact');
  }

  public function c_post(Request $request)
  {
    $this->validate($request,[
      'fname'=>'required',
      'lname'=>'required',
      'email'=>'required',
      'subject'=>'required',
      'message'=>'required'
    ]);
    $fullname=$request->get('fname')." ".$request->get('lname');
    $email=$request->get('email');
    $subject=$request->get('subject');
    $message=$request->get('message');

    Mail::to('sadullaev1999@inbox.ru')->send(new FormSender($fullname,$email,
      $subject,$message));
    return redirect()->route('contact')->with('success','Your request has been sent to developers');
  }
}
