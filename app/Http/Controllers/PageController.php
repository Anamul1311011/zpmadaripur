<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Page;
use Image;

class PageController extends Controller
{
   public function __construct()
  {
      $this->middleware('auth');
  }

  function addpage()
    {
      $pages =  Page::all();
      return view('page/view', compact('pages'));
    }

  function insertpage(Request $request)
    {
      if ($request->hasFile('image')) {

        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 600)->save(base_path('public/page_image_folder/' . $filename ),80);

         Page::insert([
        'menu_id' => $request ->menu_id,
        'menu_title_id' => $request ->menu_title_id,
        'page_title' => $request ->page_title,
        'page_content' => $request ->page_content,
        'featured_image' => 'page_image_folder/'.$filename,
        'created_at' => Carbon::now(),
       ]);

        return back()->with('success', 'Page Inserted Succesfully!');
      }
      else {
           return back();
           }
      }


  function deletepage($page_id)
    {
      Page::find($page_id)->delete();
      return back()->with('successdelete', 'Page successfully deleted');
   }


  function editpage($page_id)
     {
        $page = Page::findOrFail($page_id);
        return view('page/edit',compact('page'));
     }


  function updatepage(Request $request)
  {
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(300, 300)->save(base_path('public/Page_image_folder/' . $filename ),80);
      Page::findOrFail($request->page_id)->update([
        'menu_id' => $request ->menu_id,
        'menu_title_id' => $request ->menu_title_id,
        'page_title' => $request ->page_title,
        'page_content' => $request ->page_content,
          'image'=> 'Page_image_folder/'.$filename,
        ]);
        return back()->with( 'success', 'Page Updated successfully');
  }
  else {
          Page::findOrFail($request->page_id)->update([
            'menu_id' => $request ->menu_id,
            'menu_title_id' => $request ->menu_title_id,
            'page_title' => $request ->page_title,
            'page_content' => $request ->page_content,
        ]);
        return back()->with( 'success', 'Page Updated successfully');
  }
  }


}
