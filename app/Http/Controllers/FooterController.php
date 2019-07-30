<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Footerone;
use App\Footersocial;
use App\Footerbottom;

class FooterController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addfooterone()
 {
   $footerones =  Footerone::all();
   return view('footerone/view', compact('footerones'));
 }

  function insertfooterone(Request $request)
    {

         Footerone::insert([
        'link'=> $request->link,
        'title' =>  $request->title,
        'created_at' => Carbon::now()
       ]);

        return back()->with('success', 'footerone Inserted Succesfully!');
          }


  function deletefooterone($footerone_id)
    {
      Footerone::find($footerone_id)->delete();
      return back()->with('successdelete', 'footerone successfully deleted');
   }


  function editfooterone($footerone_id)
     {
        $footerone = Footerone::findOrFail($footerone_id);
        return view('footerone/edit', compact('footerone'));
     }


function updatefooterone(Request $request)
  {
    Footerone::findOrFail($request->footerone_id)->update([
      'link'=> $request->link,
      'title' =>  $request->title,
        ]);
        return back()->with('success', 'footerone successfully updated');
      }






          /////FOOTERSOCIAL/////
      function addfootersocial()
     {
       $footersocials =  Footersocial::all();
       return view('footersocial/view', compact('footersocials'));
     }

      function insertfootersocial(Request $request)
        {

             Footersocial::insert([
            'link'=> $request->link,
            'created_at' => Carbon::now()
           ]);

            return back()->with('success', 'footersocial Inserted Succesfully!');
              }


      function deletefootersocial($footersocial_id)
        {
          Footersocial::find($footersocial_id)->delete();
          return back()->with('successdelete', 'footersocial successfully deleted');
       }


      function editfootersocial($footersocial_id)
         {
            $footersocial = Footersocial::findOrFail($footersocial_id);
            return view('footersocial/edit', compact('footersocial'));
         }


    function updatefootersocial(Request $request)
      {
        Footersocial::findOrFail($request->footersocial_id)->update([
          'link'=> $request->link,
            ]);
            return back()->with('success', 'footersocial successfully updated');
          }



                        ////////FOOTERBOTTOM///////

          function addfooterbottom()
             {
              $footerbottoms =  Footerbottom::all();
              return view('footerbottom/view', compact('footerbottoms'));
             }

         function insertfooterbottom(Request $request)
           {

             $footerbottoms =  Footerbottom::all();
             $data = count($footerbottoms);
             if($data==0){
                  Footerbottom::insert([
                     'title'       => $request->title,
                     'created_at' => Carbon::now()
                    ]);

                    return back()->with('success', 'Footerbottom Inserted Succesfully!');
                  }

                   else {
                     Footerbottom::where('id',1)->update([
                         'title'       => $request->title,
                        'created_at' => Carbon::now()
                       ]);
                     return back();
                   }
             }


           function deletefooterbottom($footerbottom_id)
               {
                 Footerbottom::where('id',$footerbottom_id)->delete();
                 return back()->with('successdelete', 'Footerbottom successfully deleted');
               }


           function editfooterbottom($footerbottom_id)
               {
                 $footerbottom = Footerbottom::findOrFail($footerbottom_id);


                 return view('footerbottom/edit', compact('footerbottom'));
               }

           function updatefooterbottom(Request $request)
               {

                   Footerbottom::findOrFail($request->footerbottom_id)->update([
                      'title'       => $request->title,
                   ]);
                   return back()->with('success', 'Footerbottom Updated Succesfully' );
               }
}
