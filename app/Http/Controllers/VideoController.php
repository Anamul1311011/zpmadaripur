<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Video;
use Image;

class VideoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  function addvideo()
    {
      $videos =  Video::all();

      return view('video/view', compact('videos'));
    }


  function insertvideo(Request $request)
    {
      if ($request->hasFile('image')) {

        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 600)->save(base_path('public/video_image_folder/' . $filename ),80);

         Video::insert([
        'title' => $request->title,
        'link' => $request->link,
        'image' => 'video_image_folder/'.$filename,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'Video Inserted Succesfully!');
      }
      else {
           return back();
           }
      }


  function deletevideo($video_id)
    {
      Video::find($video_id)->delete();
      return back()->with('successdelete', 'Video successfully deleted');
   }


  function editvideo($video_id)
     {
        $video = Video::findOrFail($video_id);
        return view('video/edit', compact('video'));
     }


function updatevideo(Request $request)
  {
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(1920, 600)->save(base_path('public/video_image_folder/' . $filename ),80);
      Video::findOrFail($request->video_id)->update([

          'image'=> 'video_image_folder/'.$filename,
        ]);
        return back()->with( 'success', 'Video Updated successfully');
  }
  else {
          Video::findOrFail($request->video_id)->update([

            'link' => $request->link,
            'title' => $request->title,

        ]);
        return back()->with( 'success', 'Video Updated successfully');
      }

    }
}
