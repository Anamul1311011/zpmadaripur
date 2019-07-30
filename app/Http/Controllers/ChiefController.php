<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Chief;
use Image;

class ChiefController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  function addchief()
    {
      $chiefs =  Chief::all();
      return view('chief/view', compact('chiefs'));
    }

  function insertchief(Request $request)
    {
      if ($request->hasFile('image')) {

        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 600)->save(base_path('public/chief_image_folder/' . $filename ),80);

         Chief::insert([
        'heading' => $request ->heading,
        'name' => $request ->name,
        'zilla' => $request ->zilla,
        'phone' => $request ->phone,
        'mobile' => $request ->mobile,
        'image' => 'chief_image_folder/'.$filename,
        'created_at' => Carbon::now(),
       ]);

        return back()->with('success', 'Chief Inserted Succesfully!');
      }
      else {
           return back();
           }
      }


  function deletechief($chief_id)
    {
      Chief::find($chief_id)->delete();
      return back()->with('successdelete', 'Chief successfully deleted');
   }


  function editchief($chief_id)
     {
        $chief = Chief::findOrFail($chief_id);
        return view('chief/edit',compact('chief'));
     }


  function updatechief(Request $request)
  {
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(300, 300)->save(base_path('public/chief_image_folder/' . $filename ),80);
      Chief::findOrFail($request->chief_id)->update([
          'heading' => $request ->heading,
          'name' => $request ->name,
          'zilla' => $request ->zilla,
          'phone' => $request ->phone,
          'mobile' => $request ->mobile,
          'image'=> 'chief_image_folder/'.$filename,
        ]);
        return back()->with( 'success', 'Chief Updated successfully');
  }
  else {
          Chief::findOrFail($request->chief_id)->update([
            'heading' => $request ->heading,
            'name' => $request ->name,
            'zilla' => $request ->zilla,
            'phone' => $request ->phone,
            'mobile' => $request ->mobile,
        ]);
        return back()->with( 'success', 'Chief Updated successfully');
  }
  }
}
