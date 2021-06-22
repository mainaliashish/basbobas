<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Project;
use App\Models\News;
use App\Models\Message;

class FrontendController extends Controller
{
   public function index()
   {
       $title = 'Basobas Developer - Home';
       $sliders = Slider::where('is_featured', 1)->orderBy('created_at', 'desc')->take(3)->get();
       $projects = Project::latest()->take(3)->get();
       $active_home = 'active';
       return view('frontend.home', compact('title', 'active_home', 'sliders', 'projects'));
   }

   public function about()
   {        
       $title = 'Basobas Developer - About Us';
       $active_about = 'active';
    //    $about = About::all();
       return view('frontend.about', compact('title', 'active_about'));
   }


   public function contact()
   {        
       $title = 'Basobas Developer - Contact Us';
       $active_contact = 'active';
       return view('frontend.contact', compact('title', 'active_contact'));
   }

   public function projects()
   {        
       $projects = Project::latest()->paginate(5);
       $title = 'Basobas Developer - Projects';
       $active_projects = 'active';
       return view('frontend.projects', compact('title', 'active_projects', 'projects'));
   }

   public function services()
   {   
       $p_services = Service::paginate(6);
       $title = 'Basobas Developer - Services';
       $active_services = 'active';
       return view('frontend.services', compact('title', 'active_services', 'p_services'));
   }

   public function news()
   {        
       $news = News::latest()->paginate(6);
       $title = 'Basobas Developer - News';
       $active_news = 'active';
       return view('frontend.news', compact('title', 'active_news', 'news'));
   }

   public function news_detail($id)
   {    
       $news = News::findOrFail($id);    
       $title = 'Basobas Developer - News';
       $active_news = 'active';
       return view('frontend.news_detail', compact('title', 'active_news', 'news'));
   }

   public function service_detail($id)
   {        
       $service =  Service::findOrFail($id);

       $title = 'Basobas Developer - Service';
       $active_services = 'active';
       return view('frontend.service_detail', compact('title', 'active_services', 'service'));
   }

   public function project_detail($id)
   {        
       $project = Project::findOrFail($id);

       $title = 'Basobas Developer - project';
       $active_projects = 'active';
       return view('frontend.project_detail', compact('title', 'active_projects', 'project'));
   }

   public function messagePost(Request $request)
   {
      $input = $request->only(['sender_name', 'sender_email', 'sender_contact', 'message_description']);
      $message = new Message;
      $message = $message->create($input);
    

    if($message) {
        session()->flash('success', 'Your message has been sent Successfully!');
    } else {
        session()->flash('error', 'Something went wrong.');
    }

    return redirect() -> route('frontend-contact');
   }
}