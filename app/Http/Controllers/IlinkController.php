<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Ilink;

class IlinkController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addilink()
 {
   $ilinks =  Ilink::all();
   return view('ilink/view', compact('ilinks'));
 }

  function insertilink(Request $request)
    {

         Ilink::insert([
        'heading'=> $request->heading,
        'title1' =>  $request->title1,
        'title2' =>  $request->title2,
        'title3' =>  $request->title3,
        'title4' =>  $request->title4,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'ilink Inserted Succesfully!');
          }


  function deleteilink($ilink_id)
    {
      Ilink::find($ilink_id)->delete();
      return back()->with('successdelete', 'ilink successfully deleted');
   }


  function editilink($ilink_id)
     {
        $ilink = Ilink::findOrFail($ilink_id);
        return view('ilink/edit', compact('ilink'));
     }


function updateilink(Request $request)
  {
    Ilink::findOrFail($request->ilink_id)->update([
      'heading'=> $request->heading,
      'title1' =>  $request->title1,
      'title2' =>  $request->title2,
      'title3' =>  $request->title3,
      'title4' =>  $request->title4,
        ]);
        return back()->with('success', 'ilink successfully updated');
      }
}
