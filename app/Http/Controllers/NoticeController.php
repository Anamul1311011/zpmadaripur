<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notice;
use App\Noticedetail;
use Image;

class NoticeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addnotice()
  {
    $notices = Notice::orderBy('id', 'desc')->paginate(5);
  return view('notice/view', compact('notices'));
  }

  function insertnotice(Request $request)
  {
    $notices =  Notice::all();
    $data = count($notices);
    if($data==0){
      Notice::insert([
        'section_title' => $request->section_title,
        'created_at' => Carbon::now()
      ]);
      return back()->with('success', 'Header inserted successfully');
    }
    else {
      Notice::where('id',1)->update([
        'section_title' => $request->section_title,
         'created_at' => Carbon::now()
        ]);
      return back();
    }
}

  function deletenotice($notice_id)
  {
    Notice::where('id',$notice_id)->delete();
    return back()->with('successdelete', 'header Deleted successfully');
  }

  function editnotice($notice_id)
  {
    $notice = Notice::findOrFail($notice_id);
    return view('notice/edit', compact('notice'));
  }
  function updatenotice(Request $request)
  {
    Notice::findOrFail($request->notice_id)->update([
      'section_title' => $request->section_title,
    ]);
    return back()->with('success', 'Header Updated successfully');
  }



        //////NOTICEDETAIL///////


  function addnoticedetail()
 {
   $noticedetails =  Noticedetail::all();
   return view('noticedetail/view', compact('noticedetails'));
 }

  function insertnoticedetail(Request $request)
    {

      if ($request->hasFile('featured_image')) {
               $featured_image = $request->file('featured_image');
               $filename = str_random(30) . '.' . $featured_image->getClientOriginalExtension();
               Image::make($featured_image)->save(base_path('public/noticedetail_image_folder/' . $filename ),80);
               //###Interventionway

                Noticedetail::insert([
               'notice_title'    => $request->notice_title,
               'notice_detail'   => $request->notice_detail,
               'featured_image'  => 'noticedetail_image_folder/'.$filename,
               'created_at'      => Carbon::now()
              ]);

               return back()->with('success', 'Noticedetail Inserted Succesfully!');
         }
         else {
              return back();
              }
          }


  function deletenoticedetail($noticedetail_id)
    {
      Noticedetail::find($noticedetail_id)->delete();
      return back()->with('successdelete', 'Noticedetail successfully deleted');
   }


  function editnoticedetail($noticedetail_id)
     {
        $noticedetail = Noticedetail::findOrFail($noticedetail_id);
        return view('noticedetail/edit', compact('noticedetail'));
     }


function updatenoticedetail(Request $request)
  {

      if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
             $filename = str_random(10) . '.' . $featured_image->getClientOriginalExtension();
            Image::make($featured_image)->save(base_path('public/noticedetail_image_folder/' . $filename ),80);
            Noticedetail::where('id',$request->noticedetail_id)->update([
                'notice_title'=> $request->notice_title,
                'notice_detail' => $request->notice_detail,
                'featured_image'=> 'noticedetail_image_folder/'.$filename,
              ]);
              return back()->with( 'success', 'Noticedetail Updated successfully');
        }

        else {
                Noticedetail::findOrFail($request->noticedetail_id)->update([
                'notice_title'=> $request->notice_title,
                'notice_detail' => $request->notice_detail,

              ]);
               return back()->with( 'success', 'Noticedetail Updated successfully');

        }
  }




}
