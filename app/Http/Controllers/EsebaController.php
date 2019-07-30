<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Eseba;

class EsebaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addeseba()
 {
   $esebas =  Eseba::all();
   return view('eseba/view', compact('esebas'));
 }

  function inserteseba(Request $request)
    {

         Eseba::insert([
        'heading'=> $request->heading,
        'title1' =>  $request->title1,
        'title2' =>  $request->title2,
        'title3' =>  $request->title3,
        'title4' =>  $request->title4,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'Eseba Inserted Succesfully!');
          }


  function deleteeseba($eseba_id)
    {
      Eseba::find($eseba_id)->delete();
      return back()->with('successdelete', 'Eseba successfully deleted');
   }


  function editeseba($eseba_id)
     {
        $eseba = Eseba::findOrFail($eseba_id);
        return view('eseba/edit', compact('eseba'));
     }


function updateeseba(Request $request)
  {
    Eseba::findOrFail($request->eseba_id)->update([
      'heading'=> $request->heading,
      'title1' =>  $request->title1,
      'title2' =>  $request->title2,
      'title3' =>  $request->title3,
      'title4' =>  $request->title4,
        ]);
        return back();
      }
}
