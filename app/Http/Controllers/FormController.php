<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Form;


class FormController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  function addform()
 {
   $forms =  Form::all();
   return view('form/view', compact('forms'));
 }

  function insertform(Request $request)
    {

         Form::insert([
        'heading'=> $request->heading,
        'title1' =>  $request->title1,
        'title2' =>  $request->title2,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'Form Inserted Succesfully!');
          }


  function deleteform($form_id)
    {
      Form::find($form_id)->delete();
      return back()->with('successdelete', 'Form successfully deleted');
   }


  function editform($form_id)
     {
        $form = Form::findOrFail($form_id);
        return view('form/edit', compact('form'));
     }


function updateform(Request $request)
  {
    Form::findOrFail($request->form_id)->update([
      'heading'=> $request->heading,
      'title1' =>  $request->title1,
      'title2' =>  $request->title2,
        ]);
        return back();
      }
}
