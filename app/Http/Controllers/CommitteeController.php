<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Committee;
use App\Clink;
use App\Budget;
use App\Budgetlink;
use App\Project;
use App\Plink;

class CommitteeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function addcommittee()
  {
    $committees = Committee::orderBy('id', 'desc')->paginate(5);
  return view('committee/view', compact('committees'));
  }
  function insertcommittee(Request $request)
  {

    $data = count(Committee::all());
    if ($data==0) {
      Committee::insert([
        'heading' => $request->heading,
        'created_at' => Carbon::now()
  ]);
  return back()->with('success', 'Committee inserted successfully');
  }
  else {
    Committee::where('id', 1)->update([
      'heading' => $request->heading,
      'created_at' => Carbon::now()
    ]);
    return back('success', 'Committee updated successfully');
  }

}

  function deletecommittee($committee_id)
  {
    Committee::where('id',$committee_id)->delete();
    return back()->with('successdelete', 'Committee Deleted successfully');
  }

  function editcommittee($committee_id)
  {
    $committee = Committee::findOrFail($committee_id);
    return view('committee/edit', compact('committee'));
  }
  function updatecommittee(Request $request)
  {
    Committee::findOrFail($request->committee_id)->update([
        'heading' => $request->heading,
    ]);
    return back()->with('success', 'Committee Updated successfully');
  }







  function addclink()
 {
   $clinks =  Clink::orderBy('id', 'desc')->paginate(5);
   return view('clink/view', compact('clinks'));
 }

  function insertclink(Request $request)
    {

           Clink::insert([
          'link'=> $request->link,
          'title' =>  $request->title,
          'created_at' => Carbon::now()
           ]);

          return back()->with('success', 'clink Inserted Succesfully!');
    }


  function deleteclink($clink_id)
    {
      Clink::find($clink_id)->delete();
      return back()->with('successdelete', 'clink successfully deleted');
   }


  function editclink($clink_id)
     {
        $clink = Clink::findOrFail($clink_id);
        return view('clink/edit', compact('clink'));
     }


function updateclink(Request $request)
  {
    Clink::findOrFail($request->clink_id)->update([
      'link'=> $request->link,
      'title' =>  $request->title,
        ]);
        return back()->with('success', 'clink successfully updated');
      }



      function addbudget()
      {
        $budgets = Budget::orderBy('id', 'desc')->paginate(5);
      return view('budget/view', compact('budgets'));
      }
      function insertbudget(Request $request)
      {

        $data = count(Budget::all());
        if ($data==0) {
          Budget::insert([
            'heading' => $request->heading,
            'created_at' => Carbon::now()
      ]);
      return back()->with('success', 'Budget inserted successfully');
      }
      else {
        Budget::where('id', 1)->update([
          'heading' => $request->heading,
          'created_at' => Carbon::now()
        ]);
        return back('success', 'Budget updated successfully');
      }

    }

      function deletebudget($budget_id)
      {
        Budget::where('id',$budget_id)->delete();
        return back()->with('successdelete', 'Budget Deleted successfully');
      }

      function editbudget($budget_id)
      {
        $budget = Budget::findOrFail($budget_id);
        return view('budget/edit', compact('budget'));
      }
      function updatebudget(Request $request)
      {
        Budget::findOrFail($request->budget_id)->update([
            'heading' => $request->heading,
        ]);
        return back()->with('success', 'Budget Updated successfully');
      }





      function addbudgetlink()
     {
       $budgetlinks =  Budgetlink::orderBy('id', 'desc')->paginate(5);
       return view('budgetlink/view', compact('budgetlinks'));
     }

      function insertbudgetlink(Request $request)
        {

               Budgetlink::insert([
              'link'=> $request->link,
              'title' =>  $request->title,
              'created_at' => Carbon::now()
               ]);

              return back()->with('success', 'budgetlink Inserted Succesfully!');
        }


      function deletebudgetlink($budgetlink_id)
        {
          Budgetlink::find($budgetlink_id)->delete();
          return back()->with('successdelete', 'budgetlink successfully deleted');
       }


      function editbudgetlink($budgetlink_id)
         {
            $budgetlink = Budgetlink::findOrFail($budgetlink_id);
            return view('budgetlink/edit', compact('budgetlink'));
         }


    function updatebudgetlink(Request $request)
      {
        Budgetlink::findOrFail($request->budgetlink_id)->update([
          'link'=> $request->link,
          'title' =>  $request->title,
            ]);
            return back()->with('success', 'Budgetlink successfully updated');
          }







          //PROJECT//
          function addproject()
          {
            $projects = Project::orderBy('id', 'desc')->paginate(5);
          return view('project/view', compact('projects'));
          }
          function insertproject(Request $request)
          {

            $data = count(Project::all());
            if ($data==0) {
              Project::insert([
                'heading' => $request->heading,
                'created_at' => Carbon::now()
          ]);
          return back()->with('success', 'Project inserted successfully');
          }
          else {
            Project::where('id', 1)->update([
              'heading' => $request->heading,
              'created_at' => Carbon::now()
            ]);
            return back('success', 'Project updated successfully');
          }

        }

          function deleteproject($project_id)
          {
            Project::where('id',$project_id)->delete();
            return back()->with('successdelete', 'Project Deleted successfully');
          }

          function editproject($project_id)
          {
            $project = Project::findOrFail($project_id);
            return view('budget/edit', compact('project'));
          }
          function updateproject(Request $request)
          {
            Project::findOrFail($request->project_id)->update([
                'heading' => $request->heading,
            ]);
            return back()->with('success', 'Budget Updated successfully');
          }








          //PLINK//
          function addplink()
         {
           $plinks =  Plink::orderBy('id', 'desc')->paginate(5);
           return view('plink/view', compact('plinks'));
         }

          function insertplink(Request $request)
            {

                   Plink::insert([
                  'link'=> $request->link,
                  'title' =>  $request->title,
                  'created_at' => Carbon::now()
                   ]);

                  return back()->with('success', 'Projectlink Inserted Succesfully!');
            }


          function deleteplink($plink_id)
            {
              Plink::find($plink_id)->delete();
              return back()->with('successdelete', 'Projectlink successfully deleted');
           }


          function editplink($plink_id)
             {
                $plink = Plink::findOrFail($plink_id);
                return view('plink/edit', compact('plink'));
             }


        function updateplink(Request $request)
          {
            Plink::findOrFail($request->plink_id)->update([
              'link'=> $request->link,
              'title' =>  $request->title,
                ]);
                return back()->with('success', 'Projectlink successfully updated');
              }

}
