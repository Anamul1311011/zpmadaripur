<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\About;

class AboutController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addabout()
 {
   $abouts =  About::all();
   return view('about/view', compact('abouts'));
 }

  function insertabout(Request $request)
    {

         About::insert([
        'heading'=> $request->heading,
        'title1' =>  $request->title1,
        'title2' =>  $request->title2,
        'title3' =>  $request->title3,
        'title4' =>  $request->title4,
        'title5' =>  $request->title5,
        'title6' =>  $request->title6,
        'title7' =>  $request->title7,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'About Inserted Succesfully!');
          }


  function deleteabout($about_id)
    {
      About::find($about_id)->delete();
      return back()->with('successdelete', 'About successfully deleted');
   }


  function editabout($about_id)
     {
        $about = About::findOrFail($about_id);
        return view('about/edit', compact('about'));
     }


function updateabout(Request $request)
  {
    About::findOrFail($request->about_id)->update([
      'heading'=> $request->heading,
      'title1' =>  $request->title1,
      'title2' =>  $request->title2,
      'title3' =>  $request->title3,
      'title4' =>  $request->title4,
      'title5' =>  $request->title5,
      'title6' =>  $request->title6,
      'title7' =>  $request->title7,
        ]);
        return back()->with('success', 'About successfully updated');
      }
}
