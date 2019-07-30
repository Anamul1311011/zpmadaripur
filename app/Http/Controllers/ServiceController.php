<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Service;
use Image;

class ServiceController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addservice()
    {
      $services =  Service::all();
      return view('service/view', compact('services'));
    }


  function insertservice(Request $request)
    {
      if ($request->hasFile('image')) {

        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 600)->save(base_path('public/service_image_folder/' . $filename ),80);

         Service::insert([
        'heading' => $request->heading,
        'title1' => $request->title1,
        'title2' => $request->title2,
        'title3' => $request->title3,
        'detail1' => $request->detail1,
        'detail2' => $request->detail2,
        'detail3' => $request->detail3,
        'image' => 'service_image_folder/'.$filename,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'Service Inserted Succesfully!');
      }
      else {
           return back();
           }
      }


  function deleteservice($service_id)
    {
      Service::find($service_id)->delete();
      return back()->with('successdelete', 'Service successfully deleted');
   }


  function editservice($service_id)
     {
        $service = Service::findOrFail($service_id);
        return view('service/edit', compact('service'));
     }


function updateservice(Request $request)
  {
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(1920, 600)->save(base_path('public/service_image_folder/' . $filename ),80);
      Service::findOrFail($request->service_id)->update([

          'image'=> 'service_image_folder/'.$filename,
        ]);
        return back()->with( 'success', 'Service Updated successfully');
  }
  else {
          Service::findOrFail($request->service_id)->update([
            'heading' => $request->heading,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'detail1' => $request->detail1,
            'detail2' => $request->detail2,
            'detail3' => $request->detail3,

        ]);
        return back()->with( 'success', 'Service Updated successfully');
      }

    }
}
