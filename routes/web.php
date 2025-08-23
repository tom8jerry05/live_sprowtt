<?php

use App\Tombstone;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $tombstoneData = Tombstone::select('*')
        ->orderBy(DB::raw('-place_position'), 'DESC')
        ->get();
    foreach ($tombstoneData as $key => $value) {
        if ($value->video_option == 'upload') {
            $value->video_link = url('/tombstone/' . $value->video_link);
        }
        $value->image_link = url('/tombstone/' . $value->image_link);
    }
    $agent = new Agent();
    if ($agent->isPhone()) {
        $range = 1;
    } elseif ($agent->isTablet()) {
        $range = 2;
    } else {
        $range = 3;
    }
    return view('frontend.home')->with(compact('tombstoneData'))->with(compact('range'));
});




Auth::routes();

//BackEnd Route
Route::get('/app/dashboard', 'backend\DashboardController@index')->name('dashboard');


//Unsubscribe Module
Route::get('/app/unsubscribe/{id}', 'backend\UnsubscribeController@unsubscribe')->name('unsubscribe');

//checking Super Admin
Route::group(array('middleware' => ['auth', 'checkSuperAdmin']), function () {
    
    //Internship Module
    Route::get('/app/internship', 'backend\InternshipController@index')->name('BEInternship');
    Route::get('/app/internship/grid', 'backend\InternshipController@grid')->name('internship.grid');
    Route::get('/app/internship/view/{id}', 'backend\InternshipController@view')->name('internship.view');

    //Inventors Module
    Route::get('/app/inventors', 'backend\InventorsController@index')->name('BEInventors');
    Route::get('/app/inventors/grid', 'backend\InventorsController@grid')->name('inventors.grid');
    Route::get('/app/inventors/view/{id}', 'backend\InventorsController@view')->name('inventors.view');

    //Tech Module
    Route::get('/app/new-tech', 'backend\TechController@index')->name('BETech');
    Route::get('/app/new-tech/grid', 'backend\TechController@grid')->name('tech.grid');
    Route::get('/app/new-tech/view/{id}', 'backend\TechController@view')->name('tech.view');

    //Student Module
    Route::get('/app/students', 'backend\StudentsController@index')->name('BEStudents');
    Route::get('/app/students/grid', 'backend\StudentsController@grid')->name('students.grid');
    Route::get('/app/students/view/{id}', 'backend\StudentsController@view')->name('students.view');
    Route::post('/app/studentsroleupdate', 'backend\StudentsController@roleUpdate')->name('students.roleupdate');

    //Judges Module
    Route::get('/app/judge', 'backend\JudgeController@index')->name('BEJudges');
    Route::get('/app/judge/grid', 'backend\JudgeController@grid')->name('judges.grid');
    Route::get('/app/judge/view/{id}', 'backend\JudgeController@view')->name('judges.view');

    //Ambassador Module
    Route::get('/app/ambassador', 'backend\AmbassadorController@index')->name('BEAmbassador');
    Route::get('/app/ambassador/grid', 'backend\AmbassadorController@grid')->name('ambassador.grid');
    Route::get('/app/ambassador/view/{id}', 'backend\AmbassadorController@view')->name('ambassador.view');

    //NewsLetter Module
    Route::get('/app/newsletter', 'backend\NewsletterController@index')->name('BENewsLetter');
    Route::get('/app/newsletter/grid', 'backend\NewsletterController@grid')->name('newsletter.grid');
    Route::get('/app/newsletter/compose', 'backend\NewsletterController@compose')->name('BENewsLetterCompose');
    Route::post('/app/newsletter/send', 'backend\NewsletterController@sendMails')->name('BENewsLetterSendMails');
    Route::get('/app/newsletter/unsubscribe/{id}', 'backend\NewsletterController@unsubscribe')->name('newsletter.unsubscribe');
    Route::get('/app/newsletter/subscribe/{id}', 'backend\NewsletterController@subscribe')->name('newsletter.subscribe');

    //ContactUs Module
    Route::get('/app/contactus', 'backend\ContactusController@index')->name('BEContactUs');
    Route::get('/app/contactus/grid', 'backend\ContactusController@grid')->name('contact.grid');


    //EventApplier Module
    Route::get('/app/event-applier', 'backend\EventapplierController@index')->name('BEEventApplier');
    Route::get('/app/event-applier/view/{id}', 'backend\EventapplierController@view')->name('eventapplier.view');
    Route::get('/app/event-applier/grid', 'backend\EventapplierController@grid')->name('eventapplier.grid');

    //Tombstone Module
    Route::get('/app/tombstone', 'backend\TombstoneController@index')->name('BETombstone');
    Route::get('/app/tombstone/grid', 'backend\TombstoneController@grid')->name('tombstone.grid');
    Route::get('/app/tombstone/create', 'backend\TombstoneController@create')->name('tombstone.create');
    Route::post('/app/tombstone/store', 'backend\TombstoneController@store')->name('tombstone.store');
    Route::get('/app/tombstone/edit/{id}', 'backend\TombstoneController@edit')->name('tombstone.edit');
    Route::get('/app/tombstone/close/{id}', 'backend\TombstoneController@close')->name('tombstone.close');
    Route::get('/app/tombstone/delete/{id}', 'backend\TombstoneController@delete')->name('tombstone.delete');
    Route::post('/app/tombstone/vidupdate/{id}', 'backend\TombstoneController@videoUpdate')->name('tombstone.vidupdate');
    Route::post('/app/tombstone/imgupdate/{id}', 'backend\TombstoneController@imageUpdate')->name('tombstone.imgupdate');
    Route::post('/app/tombstone/sumupdate/{id}', 'backend\TombstoneController@summaryUpdate')->name('tombstone.sumupdate');
    Route::post('/app/tombstone/invenupdate/{id}', 'backend\TombstoneController@invenUpdate')->name('tombstone.invenupdate');
    Route::get('/app/tombstone/applierview/{id}', 'backend\TombstoneController@applierView')->name('tombstone.applierview');
    Route::get('/app/tombstone/getresume/{id}', 'backend\TombstoneController@getResume')->name('tombstone.getresume');
    Route::post('/app/tombstone/tlassign', 'backend\TombstoneController@tlAssign')->name('tombstone.tlassign');
    Route::post('/app/tombstone/tmassign', 'backend\TombstoneController@tmAssign')->name('tombstone.tmassign');
    Route::post('/app/tombstone/pagepositcheck', 'backend\TombstoneController@pagepositcheck')->name('tombstone.pagepositcheck');
    Route::get('/app/tombstone/applierdelete/{id}', 'backend\TombstoneController@applierDelete')->name('tombstone.applierdelete');



    //Tombstone questions Module
    Route::get('/app/tombstonequestions', 'backend\TombstoneController@quesIndex')->name('BETombstoneQues');
    Route::get('/app/tombstonequestions/grid', 'backend\TombstoneController@quesGrid')->name('tombstone.quesGrid');
    Route::get('/app/tombstonequestions/responce/{id}', 'backend\TombstoneController@quesResp')->name('tombstone.quesResponce');


    //Tombstone voter list Module
    Route::get('/app/tombstonevoters', 'backend\TombstoneController@voterIndex')->name('BETombstoneVoter');
    Route::get('/app/tombstonevoters/grid', 'backend\TombstoneController@voterGrid')->name('tombstone.voterGrid');


    //Users Module
    Route::get('/app/users', 'backend\UsersController@index')->name('BEusers');
    Route::get('/app/users/create', 'backend\UsersController@create')->name('users.create');
    Route::get('/app/users/grid', 'backend\UsersController@grid')->name('users.grid');
    Route::post('/app/users/store', 'backend\UsersController@store')->name('users.store');
    Route::get('/app/users/view/{id}', 'backend\UsersController@view')->name('users.view');
    Route::get('/app/users/checkproject/{id}', 'backend\UsersController@checkProject')->name('users.checkproject');


    //Members Module
    Route::get('/app/members', 'backend\MembersController@index')->name('BEmembers');
    Route::get('/app/members/grid', 'backend\MembersController@grid')->name('members.grid');
    Route::get('/app/members/view/{id}', 'backend\MembersController@view')->name('members.view');


    //Chart Module
    Route::get('/app/chart', 'backend\ChartController@index')->name('BEchart');
    Route::post('/app/chart/project', 'backend\ChartController@getprojectData')->name('chart.getprojectdata');
    Route::post('/app/chart/remove', 'backend\ChartController@removeprojectData')->name('chart.removeprojectdata');
    Route::post('/app/chart/post-sec-round', 'backend\ChartController@postSecRound')->name('chart.postSecRound');
    Route::post('/app/chart/post-swt-round', 'backend\ChartController@postSwt16Round')->name('chart.postSwt16Round');
    Route::post('/app/chart/post-elite-round', 'backend\ChartController@postElite8Round')->name('chart.postElite8Round');
    Route::post('/app/chart/post-champ-round', 'backend\ChartController@postChampionShip')->name('chart.postChampionShip');

    //Sponsorship Module
    Route::get('/app/sponsor-ship', 'backend\SponsorshipController@index')->name('BESponsorship');
    Route::get('/app/sponsor-ship/grid', 'backend\SponsorshipController@grid')->name('sponsor.grid');

});


Route::group(array('middleware' => ['auth', 'checkAdmin']), function () {
});

Route::group(array('middleware' => ['auth', 'checkStudent']), function () {
});


//FrontEnd Route
Route::get('/home', 'frontend\HomeController@index')->name('Home');


Route::get('/askquestion/{id}', 'frontend\HomeController@askquestion')->name('tombstone.askquestion');
Route::post('/page-login', 'frontend\HomeController@pageLogin')->name('tombstone.login');
Route::get('/vote-now/{id}', 'frontend\HomeController@voteNow')->name('tombstone.votenow');


Route::get('/startup-challenges', 'frontend\StartupchallengesController@index')->name('StartupChallenges');
Route::get('/startup-challenges/project/', 'frontend\StartupchallengesController@tombSearch')->name('tombstone.search');

Route::get('/how-it-works', 'frontend\HowitworksController@index')->name('HowitWorks');
Route::get('/about', 'frontend\AboutController@index')->name('About');
Route::get('/teams', 'frontend\TeamsController@index')->name('Teams');
Route::get('/awards', 'frontend\AwardsController@index')->name('Awards');
Route::get('/bootcamp', 'frontend\BootcampController@index')->name('BootCamp');

Route::get('/privacy-policy', 'frontend\StartupchallengesController@privacyPolicy')->name('PrivacyPolicy');
Route::get('/terms-of-service', 'frontend\StartupchallengesController@termsofService')->name('TermsofService');
Route::get('/management-team', 'frontend\StartupchallengesController@managTeam')->name('ManagementTeam');
Route::get('/management-team/description', 'frontend\StartupchallengesController@teamDescription')->name('TeamDescription');

Route::get('/advisory-board', 'frontend\StartupchallengesController@advisoryBoard')->name('AdvisoryBoard');
Route::get('/advisory-board/description', 'frontend\StartupchallengesController@advisoryDescription')->name('AdvisoryDescription');


/*Chart*/
Route::get('/chart', 'frontend\StartupchallengesController@chart')->name('Chart');
Route::get('/chart/data', 'frontend\StartupchallengesController@getChartData')->name('GetChartData');
Route::post('/chart/project/data', 'frontend\StartupchallengesController@getprojectData')->name('GetProjectData');

/*Judge Form*/
Route::get('/judge/{id}', 'frontend\JudgeContoller@index')->name('Judge');

//Route::get('/judge/{id}', 'frontend\JudgeContoller@projIndex')->name('JudgeProj');
Route::post('/judgeform', 'frontend\JudgeContoller@create')->name('JudgeForm');

/*Ambassador Form*/
Route::get('/ambassador', 'frontend\AmbassadorController@index')->name('Ambassador');
Route::post('/ambassadorform', 'frontend\AmbassadorController@create')->name('AmbassadorForm');

//Tech form
Route::get('/new-tech', 'frontend\TechController@index')->name('Tech');
Route::post('/new-techform', 'frontend\TechController@create')->name('TechForm');


Route::get('/samplechallages', 'frontend\StartupchallengesController@samplechaindex')->name('SampleChallages');
Route::get('/opportunities', 'frontend\StartupchallengesController@opportindex')->name('Opportunities');
Route::get('/srcopportunities', 'frontend\StartupchallengesController@srcopportindex')->name('SrcOpportunities');
Route::get('/sampledetail', 'frontend\StartupchallengesController@sampledetail')->name('SampleDetail');

Route::get('/tombstonedetail/{id}', 'frontend\HomeController@tombStonedetail')->name('tombStonedetail');
Route::get('/comingsoon', 'frontend\ComingsoonController@index')->name('ComingSoon');


//Internship form
Route::get('/internship', 'frontend\InternshipController@index')->name('Internship');
Route::post('/internshipform', 'frontend\InternshipController@create')->name('InternshipForm');

//Sponsorship form
Route::get('/sponsorship', 'frontend\SponsorshipController@index')->name('Sponsorship');
Route::post('/sponsorshipform', 'frontend\SponsorshipController@create')->name('SponsorshipForm');

//Inventors form
Route::get('/inventors', 'frontend\InventorsController@index')->name('Inventors');
Route::post('/inventorsform', 'frontend\InventorsController@create')->name('InventorsForm');

//Students form
Route::get('/students', 'frontend\StudentsController@index')->name('Students');
Route::post('/studentsform', 'frontend\StudentsController@create')->name('StudentsForm');
Route::post('/studentstate', 'frontend\StudentsController@getState')->name('StudentsGetState');
Route::post('/studentcity', 'frontend\StudentsController@getCity')->name('StudentsGetCity');

//projectapply form
Route::get('/projectapply/{id}', 'frontend\ProjectappliersController@index')->name('ProjectApply');
Route::get('/memberapply/{id}', 'frontend\ProjectappliersController@index')->name('MemberApply');
Route::post('/projectapplyform', 'frontend\ProjectappliersController@create')->name('ProjectApplyForm');
Route::post('/projectapplystate', 'frontend\ProjectappliersController@getState')->name('ProjectApplyGetState');
Route::post('/projectapplycity', 'frontend\ProjectappliersController@getCity')->name('ProjectApplyGetCity');

//Newsletter form
Route::post('/newsletterform', 'frontend\NewsletterController@create')->name('NewsLetterForm');

//Contact Us form
Route::post('/contactform', 'frontend\ContactusController@create')->name('ContactForm');


//EventApplier form
Route::get('/live-events-apply/{id}', 'frontend\EventapplierController@index')->name('EventApplier');
Route::post('/live-events-apply-form', 'frontend\EventapplierController@create')->name('EventApplierForm');


//Nasa Spins Out Page
Route::get('/nasa-spins-out', 'frontend\EventapplierController@spinsOutIndex')->name('NasaSpinsOut');


//Score Board Page (Note:Last min name changing)
Route::get('/playing-field/{id}', 'frontend\ScoreboardController@index')->name('ScoreBoard');

//Bracket Chart Page (Note:Last min name changing)
Route::get('/score-board', 'frontend\BracketChartController@index')->name('BracketChart');


Route::get('/all-projects', 'frontend\HomeController@allprojects');


