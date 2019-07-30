<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\News;

class NewsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


  function addnews()
 {
   $newses =  News::all();
   return view('news/view', compact('newses'));
 }

  function insertnews(Request $request)
    {

         News::insert([
        'title'=> $request->title,
        'detail' =>  $request->detail,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'News Inserted Succesfully!');
          }


  function deletenews($news_id)
    {
      News::find($news_id)->delete();
      return back()->with('successdelete', 'News successfully deleted');
   }


  function editnews($news_id)
     {
        $news = News::findOrFail($news_id);
        return view('news/edit', compact('news'));
     }


function updatenews(Request $request)
  {
    News::findOrFail($request->news_id)->update([
      'title'=> $request->title,
      'detail' =>  $request->detail,
        ]);
        return back()->with('success', 'News successfully updated');
      }

}
