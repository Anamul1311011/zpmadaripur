<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Header;
use App\Menu;
use App\Marquee;
use App\Banner;
use App\Logo;
use Image;
use App\Noticedetail;
use App\Page;
// use EasyBanglaDate\Types\DateTime as EnDateTime;
// require 'vendor/autoload.php';

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    function addheader()
    {
      $headers = Header::orderBy('id', 'desc')->paginate(5);
    return view('header/view', compact('headers'));
    }
    function insertheader(Request $request)
    {

      $data = count(Header::all());
      if ($data==0) {
        Header::insert([
      'heading' => $request->heading,
      'date' => Carbon::now(),
      'created_at' => Carbon::now()
    ]);
    return back()->with('success', 'Header inserted successfully');
    }
    else {
      Header::where('id', 1)->update([
        'heading' => $request->heading,
        'date' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);
      return back('success', 'Header updated successfully');
    }

}

    function deleteheader($header_id)
    {
      Header::where('id',$header_id)->delete();
      return back()->with('successdelete', 'header Deleted successfully');
    }

    function editheader($header_id)
    {
      $header = Header::findOrFail($header_id);
      return view('header/edit', compact('header'));
    }
    function updateheader(Request $request)
    {
      Header::findOrFail($request->header_id)->update([
        'heading' => $request->heading,
        'date' => $request->date,
      ]);
      return back()->with('success', 'Header Updated successfully');
    }

    function addbanner()
      {
        $banners =  Banner::all();
        return view('banner/view', compact('banners'));
      }


    function insertbanner(Request $request)
      {
        if ($request->hasFile('image')) {

          $image = $request->file('image');
          $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(1920, 600)->save(base_path('public/banner_image_folder/' . $filename ),80);

           Banner::insert([
          'image' => 'banner_image_folder/'.$filename,
          'created_at' => Carbon::now()
         ]);

          return back()->with('success', 'Banner Inserted Succesfully!');
        }
        else {
             return back();
             }
        }


    function deletebanner($banner_id)
      {
        Banner::find($banner_id)->delete();
        return back()->with('successdelete', 'Banner successfully deleted');
     }


    function editbanner($banner_id)
       {
          $banner = Banner::findOrFail($banner_id);
          return view('banner/edit', compact('banner'));
       }


  function updatebanner(Request $request)
    {
      if ($request->hasFile('banner_image')) {
        $image = $request->file('banner_image');
        $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 600)->save(base_path('public/banner_image_folder/' . $filename ),80);
        Banner::findOrFail($request->banner_id)->update([
            'image'=> 'banner_image_folder/'.$filename,
          ]);
          return back()->with( 'success', 'Banner Updated successfully');
    }
    else {
            Banner::findOrFail($request->banner_id)->update([


          ]);
          return back()->with( 'success', 'Banner Updated successfully');
    }
}

    function addlogo()
       {
        $logos =  Logo::all();
        return view('logo/view', compact('logos'));
       }


   function insertlogo(Request $request)
     {

       $logos =  Logo::all();
       $data = count($logos);
       if($data==0){
         if ($request->hasFile('logo_image')) {

           $logo_image = $request->file('logo_image');
           $filename   = str_random(30) . '.' . $logo_image->getClientOriginalExtension();

            Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);
            Logo::insert([
               'title'       => $request->title,
               'logo_image' => 'logo_image_folder/'.$filename,
               'created_at' => Carbon::now()
              ]);

              return back()->with('success', 'Logo Inserted Succesfully!');
            }
           else {
             Logo::insert([
                'title'       => $request->title,
                'created_at' => Carbon::now()
               ]);
             return back();
           }
         }

         else{
           if ($request->hasFile('logo_image')) {
               $logo_image = $request->file('logo_image');
               $filename   = str_random(30) . '.' .$logo_image->getClientOriginalExtension();
                Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);

                Logo::where('id',1)->update([
                    'title'       => $request->title,
                   'logo_image' => 'logo_image_folder/'.$filename,
                   'created_at' => Carbon::now()
                  ]);

                  return back()->with('success', 'Logo Inserted dsdsdsadass!');
              }
             else {
               Logo::where('id',1)->update([
                   'title'       => $request->title,
                  'created_at' => Carbon::now()
                 ]);
               return back();
             }
         }
       }


     function deletelogo($logo_id)
         {
           Logo::where('id',$logo_id)->delete();
           return back()->with('successdelete', 'Logo successfully deleted');
         }


     function editlogo($logo_id)
         {
           $logo = Logo::findOrFail($logo_id);


           return view('logo/edit', compact('logo'));
         }

     function updatelogo(Request $request)
         {
           if ($request->hasFile('logo_image')) {
               $logo_image = $request->file('logo_image');
               $filename   = str_random(30) . '.' .$logo_image->getClientOriginalExtension();
                Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);
             Logo::findOrFail($request->logo_id)->update([
                'title'       => $request->title,
               'logo_image'=> 'logo_image_folder/'.$filename,
             ]);
             return back()->with('success', 'Logo Updated Succesfully' );
         }
         Logo::findOrFail($request->logo_id)->update([
           'title'       => $request->title,
         ]);
         return back()->with('success', 'Logo Updated Succesfully' );
}





    function addmenu()
   {
     $menus =  Menu::all();
     return view('menu/view', compact('menus'));
   }

    function insertmenu(Request $request)
      {

           $s_id = Menu::insertGetId([
          'title' => $request->title,
          'link1' => $request->link1,
          'link2' => $request->link2,
          'link3' => $request->link3,
          'link4' => $request->link4,
          'link5' => $request->link5,
          'link6' => $request->link6,
          'link7' => $request->link7,
          'created_at' => Carbon::now()
         ]);

         for($i=1; $i<=7; $i++)
         {
          $s="link".$i;
           if(!empty($request->$s)){
             Page::insert([
               'menu_id' =>$s_id,
               'page_title'=>$request->$s,
               'created_at' => Carbon::now()
             ]);
          }
         }

          return back()->with('success', 'Menu Inserted Succesfully!');
            }


    function deletemenu($menu_id)
      {
        Menu::find($menu_id)->delete();
        return back()->with('successdelete', 'Menu successfully deleted');
     }


    function editmenu($menu_id)
       {
          $menu = Menu::findOrFail($menu_id);
          return view('menu/edit', compact('menu'));
       }


  function updatemenu(Request $request)
    {
      Menu::findOrFail($request->menu_id)->update([
        'title' => $request->title,
        'link1' => $request->link1,
        'link2' => $request->link2,
        'link3' => $request->link3,
        'link4' => $request->link4,
        'link5' => $request->link5,
        'link6' => $request->link6,
        'link7' => $request->link7,
          ]);
          return back();
        }





        function addmarquee()
        {
          $noticedetails = Noticedetail::orderBy('id', 'desc')->limit(3);

        return view('marquee/view', compact('noticedetails'));
        }
        function insertmarquee(Request $request)
        {

            Marquee::insert([
              'text1' => $request->text1,
              'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Header inserted successfully');
        }


        function deletemarquee($marquee_id)
        {
          Marquee::where('id',$marquee_id)->delete();
          return back()->with('successdelete', 'header Deleted successfully');
        }

        function editmarquee($marquee_id)
        {
          $marquee = Marquee::findOrFail($marquee_id);
          return view('marquee/edit', compact('marquee'));
        }
        function updatemarquee(Request $request)
        {
          Marquee::findOrFail($request->header_id)->update([
            'text1' => $request->text1,
          ]);
          return back()->with('success', 'Header Updated successfully');
        }

}
