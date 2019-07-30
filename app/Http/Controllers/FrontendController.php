<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Header;
use App\Menu;
use App\Marquee;
use App\Notice;
use App\Noticedetail;
use App\Banner;
use App\Logo;
use App\Chief;
use App\Form;
use App\Eseba;
use App\Ilink;
use App\About;
use App\Committee;
use App\Clink;
use App\Budget;
use App\Budgetlink;
use App\Project;
use App\Plink;
use App\Service;
use App\Video;
use App\Footerone;
use App\Footersocial;
use App\Footerbottom;
use App\News;

class FrontendController extends Controller
{
    function index()
    {
      $headers = Header::all();
      $menus = Menu::all();
      $marquees = Marquee::all();
      $notices = Notice::all();
      $noticedetails = Noticedetail::all();
      $banners = Banner::all();
      $logos = Logo::all();
      $chiefs = Chief::all();
      $forms = Form::all();
      $esebas = Eseba::all();
      $ilinks = Ilink::all();
      $abouts = About::all();
      $committees = Committee::all();
      $clinks = Clink::all();
      $budgets = Budget::all();
      $budgetlinks = Budgetlink::all();
      $projects = Project::all();
      $plinks = Plink::all();
      $services = Service::all();
      $videos = Video::all();
      $fstvideo =  Video::first();
      $footerones = Footerone::all();
      $footersocials = Footersocial::all();
      $footerbottoms = Footerbottom::all();
      $newses = News::all();
      return view('index', compact('headers', 'menus', 'marquees', 'notices', 'noticedetails', 'banners', 'logos', 'chiefs', 'forms', 'esebas', 'ilinks', 'abouts', 'committees', 'clinks', 'budgets', 'budgetlinks', 'projects', 'plinks', 'services', 'videos', 'footerones', 'footersocials', 'footerbottoms','fstvideo', 'newses'));
    }

    function managementdetail($id){
      $headers = Header::all();
      $menus = Menu::all();
      $marquees = Marquee::all();
      $notices = Notice::all();
      $noticedetails = Noticedetail::all();
      $banners = Banner::all();
      $logos = Logo::all();
      $chiefs = Chief::all();
      $forms = Form::all();
      $esebas = Eseba::all();
      $ilinks = Ilink::all();
      $abouts = About::all();
      $committees = Committee::all();
      $clinks = Clink::all();
      $budgets = Budget::all();
      $budgetlinks = Budgetlink::all();
      $projects = Project::all();
      $plinks = Plink::all();
      $services = Service::all();
      $videos = Video::all();
      $fstvideo =  Video::first();
      $footerones = Footerone::all();
      $footersocials = Footersocial::all();
      $footerbottoms = Footerbottom::all();
      $management_detail = Chief::where('id',$id)->first();
      return view('chief/management-details', compact('management_detail','headers', 'menus', 'marquees', 'notices', 'noticedetails', 'banners', 'logos', 'chiefs', 'forms', 'esebas', 'ilinks', 'abouts', 'committees', 'clinks', 'budgets', 'budgetlinks', 'projects', 'plinks', 'services', 'videos', 'footerones', 'footersocials', 'footerbottoms','fstvideo'));

    }

    function ndetail($id){
      $headers = Header::all();
      $menus = Menu::all();
      $marquees = Marquee::all();
      $notices = Notice::all();
      $noticedetails = Noticedetail::all();
      $banners = Banner::all();
      $logos = Logo::all();
      $chiefs = Chief::all();
      $forms = Form::all();
      $esebas = Eseba::all();
      $ilinks = Ilink::all();
      $abouts = About::all();
      $committees = Committee::all();
      $clinks = Clink::all();
      $budgets = Budget::all();
      $budgetlinks = Budgetlink::all();
      $projects = Project::all();
      $plinks = Plink::all();
      $services = Service::all();
      $videos = Video::all();
      $fstvideo =  Video::first();
      $footerones = Footerone::all();
      $footersocials = Footersocial::all();
      $footerbottoms = Footerbottom::all();
      $newses = News::all();
      $notice_details = Noticedetail::where('id',$id)->first();
      return view('noticedetail/notice-details', compact('notice_details','headers', 'menus', 'marquees', 'notices', 'noticedetails', 'banners', 'logos', 'chiefs', 'forms', 'esebas', 'ilinks', 'abouts', 'committees', 'clinks', 'budgets', 'budgetlinks', 'projects', 'plinks', 'services', 'videos', 'footerones', 'footersocials', 'footerbottoms','fstvideo', 'newses'));

    }

    function newsdetail($id){
      $headers = Header::all();
      $menus = Menu::all();
      $marquees = Marquee::all();
      $notices = Notice::all();
      $noticedetails = Noticedetail::all();
      $banners = Banner::all();
      $logos = Logo::all();
      $chiefs = Chief::all();
      $forms = Form::all();
      $esebas = Eseba::all();
      $ilinks = Ilink::all();
      $abouts = About::all();
      $committees = Committee::all();
      $clinks = Clink::all();
      $budgets = Budget::all();
      $budgetlinks = Budgetlink::all();
      $projects = Project::all();
      $plinks = Plink::all();
      $services = Service::all();
      $videos = Video::all();
      $fstvideo =  Video::first();
      $footerones = Footerone::all();
      $footersocials = Footersocial::all();
      $footerbottoms = Footerbottom::all();
      $newses = News::all();
      $news_details = News::where('id',$id)->first();
      return view('news/news-details', compact('news_details','headers', 'menus', 'marquees', 'notices', 'noticedetails', 'banners', 'logos', 'chiefs', 'forms', 'esebas', 'ilinks', 'abouts', 'committees', 'clinks', 'budgets', 'budgetlinks', 'projects', 'plinks', 'services', 'videos', 'footerones', 'footersocials', 'footerbottoms','fstvideo', 'newses'));

    }


    function servicedetail1($id){
      $headers = Header::all();
      $menus = Menu::all();
      $marquees = Marquee::all();
      $notices = Notice::all();
      $noticedetails = Noticedetail::all();
      $banners = Banner::all();
      $logos = Logo::all();
      $chiefs = Chief::all();
      $forms = Form::all();
      $esebas = Eseba::all();
      $ilinks = Ilink::all();
      $abouts = About::all();
      $committees = Committee::all();
      $clinks = Clink::all();
      $budgets = Budget::all();
      $budgetlinks = Budgetlink::all();
      $projects = Project::all();
      $plinks = Plink::all();
      $services = Service::all();
      $videos = Video::all();
      $fstvideo =  Video::first();
      $footerones = Footerone::all();
      $footersocials = Footersocial::all();
      $footerbottoms = Footerbottom::all();
      $newses = News::all();
      $service_details1 = News::where('id',$id)->first();
      return view('service/service-details1', compact('service_details1','headers', 'menus', 'marquees', 'notices', 'noticedetails', 'banners', 'logos', 'chiefs', 'forms', 'esebas', 'ilinks', 'abouts', 'committees', 'clinks', 'budgets', 'budgetlinks', 'projects', 'plinks', 'services', 'videos', 'footerones', 'footersocials', 'footerbottoms','fstvideo', 'newses'));

    }
}
