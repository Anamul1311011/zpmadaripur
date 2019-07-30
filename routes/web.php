<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'FrontendController@index');

Route::get('/home', 'HomeController@index');

Route::get('/add/header', 'HomeController@addheader');
Route::post('/insert/header', 'HomeController@insertheader');
Route::get('/delete/header/{header_id}', 'HomeController@deleteheader');
Route::get('/edit/header/{header_id}', 'HomeController@editheader');
Route::post('/update/header', 'HomeController@updateheader');

Route::get('/add/banner', 'HomeController@addbanner');
Route::post('/insert/banner', 'HomeController@insertbanner');
Route::get('/delete/banner/{banner_id}', 'HomeController@deletebanner');
Route::get('/edit/banner/{banner_id}', 'HomeController@editbanner');
Route::post('/update/banner', 'HomeController@updatebanner');

Route::get('/add/logo', 'HomeController@addlogo');
Route::post('/insert/logo', 'HomeController@insertlogo');
Route::get('/delete/logo/{logo_id}', 'HomeController@deletelogo');
Route::get('/edit/logo/{logo_id}', 'HomeController@editlogo');
Route::post('/update/logo', 'HomeController@updatelogo');


Route::get('/add/menu', 'HomeController@addmenu');
Route::post('/insert/menu', 'HomeController@insertmenu');
Route::get('/delete/menu/{menu_id}', 'HomeController@deletemenu');
Route::get('/edit/menu/{menu_id}', 'HomeController@editmenu');
Route::post('/update/menu', 'HomeController@updatemenu');


Route::get('/add/submenu', 'HomeController@addsubmenu');
Route::post('/insert/submenu', 'HomeController@insertmenu');
Route::get('/delete/submenu/{submenu_id}', 'HomeController@deletemenu');
Route::get('/edit/submenu/{submenu_id}', 'HomeController@editmenu');
Route::post('/update/submenu', 'HomeController@updatemenu');


Route::get('/add/page', 'PageController@addpage');
Route::post('/insert/page', 'PageController@insertpage');
Route::get('/delete/page/{page_id}', 'PageController@deletepage');
Route::get('/edit/page/{page_id}', 'PageController@editpage');
Route::post('/update/page', 'PageController@updatepage');

Route::get('/add/marquee', 'HomeController@addmarquee');
Route::post('/insert/marquee', 'HomeController@insertmarquee');
Route::get('/delete/marquee/{marquee_id}', 'HomeController@deletemarquee');
Route::get('/edit/marquee/{marquee_id}', 'HomeController@editmarquee');
Route::post('/update/marquee', 'HomeController@updatemarquee');

Route::get('/add/notice', 'NoticeController@addnotice');
Route::post('/insert/notice', 'NoticeController@insertnotice');
Route::get('/delete/notice/{notice_id}', 'NoticeController@deletenotice');
Route::get('/edit/notice/{notice_id}', 'NoticeController@editnotice');
Route::post('/update/notice', 'NoticeController@updatenotice');


Route::get('/add/noticedetail', 'NoticeController@addnoticedetail');
Route::post('/insert/noticedetail', 'NoticeController@insertnoticedetail');
Route::get('/delete/noticedetail/{noticedetail_id}', 'NoticeController@deletenoticedetail');
Route::get('/edit/noticedetail/{noticedetail_id}', 'NoticeController@editnoticedetail');
Route::post('/update/noticedetail', 'NoticeController@updatenoticedetail');



Route::get('/add/chief', 'ChiefController@addchief');
Route::post('/insert/chief', 'ChiefController@insertchief');
Route::get('/delete/chief/{chief_id}', 'ChiefController@deletechief');
Route::get('/edit/chief/{chief_id}', 'ChiefController@editchief');
Route::post('/update/chief', 'ChiefController@updatechief');


Route::get('/add/form', 'FormController@addform');
Route::post('/insert/form', 'FormController@insertform');
Route::get('/delete/form/{form_id}', 'FormController@deleteform');
Route::get('/edit/form/{form_id}', 'FormController@editform');
Route::post('/update/form', 'FormController@updateform');

Route::get('/add/eseba', 'EsebaController@addeseba');
Route::post('/insert/eseba', 'EsebaController@inserteseba');
Route::get('/delete/eseba/{eseba_id}', 'EsebaController@deleteeseba');
Route::get('/edit/eseba/{eseba_id}', 'EsebaController@editeseba');
Route::post('/update/eseba', 'EsebaController@updateeseba');


Route::get('/add/ilink', 'IlinkController@addilink');
Route::post('/insert/ilink', 'IlinkController@insertilink');
Route::get('/delete/ilink/{ilink_id}', 'IlinkController@deleteilink');
Route::get('/edit/ilink/{ilink_id}', 'IlinkController@editilink');
Route::post('/update/ilink', 'IlinkController@updateilink');


Route::get('/add/about', 'AboutController@addabout');
Route::post('/insert/about', 'AboutController@insertabout');
Route::get('/delete/about/{about_id}', 'AboutController@deleteabout');
Route::get('/edit/about/{about_id}', 'AboutController@editabout');
Route::post('/update/about', 'AboutController@updateabout');


Route::get('/add/committee', 'CommitteeController@addcommittee');
Route::post('/insert/committee', 'CommitteeController@insertcommittee');
Route::get('/delete/committee/{committee_id}', 'CommitteeController@deletecommittee');
Route::get('/edit/committee/{committee_id}', 'CommitteeController@editcommittee');
Route::post('/update/committee', 'CommitteeController@updatecommittee');



Route::get('/add/clink', 'CommitteeController@addclink');
Route::post('/insert/clink', 'CommitteeController@insertclink');
Route::get('/delete/clink/{clink_id}', 'CommitteeController@deleteclink');
Route::get('/edit/clink/{clink_id}', 'CommitteeController@editclink');
Route::post('/update/clink', 'CommitteeController@updateclink');


Route::get('/add/budget', 'CommitteeController@addbudget');
Route::post('/insert/budget', 'CommitteeController@insertbudget');
Route::get('/delete/budget/{budget_id}', 'CommitteeController@deletebudget');
Route::get('/edit/budget/{budget_id}', 'CommitteeController@editbudget');
Route::post('/update/budget', 'CommitteeController@updatebudget');


Route::get('/add/budgetlink', 'CommitteeController@addbudgetlink');
Route::post('/insert/budgetlink', 'CommitteeController@insertbudgetlink');
Route::get('/delete/budgetlink/{budgetlink_id}', 'CommitteeController@deletebudgetlink');
Route::get('/edit/budgetlink/{budgetlink_id}', 'CommitteeController@editbudgetlink');
Route::post('/update/budgetlink', 'CommitteeController@updatebudgetlink');


Route::get('/add/project', 'CommitteeController@addproject');
Route::post('/insert/project', 'CommitteeController@insertproject');
Route::get('/delete/project/{project_id}', 'CommitteeController@deleteproject');
Route::get('/edit/project/{project_id}', 'CommitteeController@editproject');
Route::post('/update/project', 'CommitteeController@updateproject');


Route::get('/add/plink', 'CommitteeController@addplink');
Route::post('/insert/plink', 'CommitteeController@insertplink');
Route::get('/delete/plink/{plink_id}', 'CommitteeController@deleteplink');
Route::get('/edit/plink/{plink_id}', 'CommitteeController@editplink');
Route::post('/update/plink', 'CommitteeController@updateplink');


Route::get('/add/service', 'ServiceController@addservice');
Route::post('/insert/service', 'ServiceController@insertservice');
Route::get('/delete/service/{service_id}', 'ServiceController@deleteservice');
Route::get('/edit/service/{service_id}', 'ServiceController@editservice');
Route::post('/update/service', 'ServiceController@updateservice');


Route::get('/add/news', 'NewsController@addnews');
Route::post('/insert/news', 'NewsController@insertnews');
Route::get('/delete/news/{news_id}', 'NewsController@deletenews');
Route::get('/edit/news/{news_id}', 'NewsController@editnews');
Route::post('/update/news', 'NewsController@updatenews');


Route::get('/add/video', 'VideoController@addvideo');
Route::post('/insert/video', 'VideoController@insertvideo');
Route::get('/delete/video/{video_id}', 'VideoController@deletevideo');
Route::get('/edit/video/{video_id}', 'VideoController@editvideo');
Route::post('/update/video', 'VideoController@updatevideo');


Route::get('/add/footerone', 'FooterController@addfooterone');
Route::post('/insert/footerone', 'FooterController@insertfooterone');
Route::get('/delete/footerone/{footerone_id}', 'FooterController@deletefooterone');
Route::get('/edit/footerone/{footerone_id}', 'FooterController@editfooterone');
Route::post('/update/footerone', 'FooterController@updatefooterone');


Route::get('/add/footersocial', 'FooterController@addfootersocial');
Route::post('/insert/footersocial', 'FooterController@insertfootersocial');
Route::get('/delete/footersocial/{footersocial_id}', 'FooterController@deletefootersocial');
Route::get('/edit/footersocial/{footersocial_id}', 'FooterController@editfootersocial');
Route::post('/update/footersocial', 'FooterController@updatefootersocial');


Route::get('/add/footerbottom', 'FooterController@addfooterbottom');
Route::post('/insert/footerbottom', 'FooterController@insertfooterbottom');
Route::get('/delete/footerbottom/{footerbottom_id}', 'FooterController@deletefooterbottom');
Route::get('/edit/footerbottom/{footerbottom_id}', 'FooterController@editfooterbottom');
Route::post('/update/footerbottom', 'FooterController@updatefooterbottom');

Route::get('/management-details/{id}','FrontendController@managementdetail');
Route::get('/notice-details/{id}','FrontendController@ndetail');
Route::get('/news-details/{id}','FrontendController@newsdetail');
Route::get('/service-details1/{id}','FrontendController@servicedetail1');
