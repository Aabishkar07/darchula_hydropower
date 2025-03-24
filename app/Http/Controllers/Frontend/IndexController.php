<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreInquiryRequest;
use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\OtherSetting;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Popup;
use App\Models\Product;
use App\Models\Report;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $products = Product::latest()->limit(4)->get();
        $videos = Video::latest()->limit(4)->get();
        $about = Page::where('id', 3)->first();
        $faqs = Faq::latest()->limit(4)->get();
        $teams = Team::latest()->get();
        $testimonials = Testimonial::first();
        $testimonialsecond = Testimonial::skip(1)->take(1)->first();

        $blogs = Blog::latest()->limit(3)->get();
        $banners = Banner::orderBy("order", "asc")->get();
        $partners=Partner::get();
        $popup = Popup::get();

        return view("frontend.home.index", compact("services","popup", "products", "videos", "banners", "testimonials", "teams", "blogs", 'about', 'faqs' ,'partners','testimonialsecond'));
    }

    public function teams(){
        $teams = Team::latest()->get();
        return view('frontend.team.index' , compact('teams'));
    }

    public function submitInquery(StoreInquiryRequest $request, Product $submitInquery)
    {
        $email = OtherSetting::first()->email;

        $req = $request->all();
        // dd("aa", $submitInquery, $req);
        $req["product_name"] = $submitInquery->title;
        $req["product_id"] = $submitInquery->id;
        $mailData = Inquiry::create($req);

        Mail::to($email)->send(new InquiryMail($mailData));

        return redirect()->back()->with("popsuccess", "Inquiry Submitted.");
    }

    public function contact()
    {
        return view("frontend.contact.index");
    }

    public function faqs()
    {

        $faqs = Faq::get();
        return view("frontend.faqs.index", compact('faqs'));
    }

    public function updatecontact(ContactRequest $request)
    {
        $email = OtherSetting::first()->email;

        $req = $request->all();
        $mailData = Contact::create($req);
        Mail::to($email)->send(new ContactMail($mailData));

        return redirect()->back()->with("popsuccess", "Message Sent");
    }

    public function termsandcondition()
    {
        $data = Page::where('id', 1)->first();
        return view('frontend.home.termandpolicy', compact('data'));
    }

    public function privacyPolicy()
    {

        $data = Page::where('id', 2)->first();
        return view('frontend.home.termandpolicy', compact('data'));
    }


    public function newsandnotice()
    {

        $title="News and Reports";
        $data = Report::where('type', 'newsandnotice')->orderBy('order' ,'asc')->get();
        return view('frontend.home.report' , compact('data' ,'title'));
    }

    public function financialreport()
    {

        $title="Financial Reports";

        $data = Report::where('type', 'financialreport' )->orderBy('order' ,'asc')->get();
        return view('frontend.home.report', compact('data', 'title'));
    }
}
