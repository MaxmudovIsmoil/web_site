<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Contact;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\News;
use App\Models\Certifi;
use App\Models\Partner;
use App\Models\Text;
use App\Models\Section;
use App\Models\Images;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contact = Contact::first();
        $about = About::first();
        $slider = Slider::all();
        $news = News::all();
        $certifi = Certifi::all();
        $partner = Partner::all();
        $text = Text::all();
        $section = Section::all();
        $p_pop = Product::where('best',true)->get();
        $product = Product::take(16)->get();
        $sub_category = SubCategory::all();
        // return view('user.product_single');
        Session::put('active','home');
        return view('user.index',compact('sub_category','product','contact','slider','p_pop','news','certifi','partner','about','text','section'));
    }
    public function switch(Request $request, $locale)
    {
        // App::setLocale($locale);

        session(['APP_LOCALE' => $locale]);
        return redirect()->back();
    }
    public function getCat(Request $request)
    {
        $id = $request->data;
        $subcategory = SubCategory::where('category_id',$id)->get();
        return [
            'subcategory' => $subcategory
        ];
    }

    public function contactUs(Request $request)
    {
        $contact = Contact::first();
        // return $contact;
        $sub_category = SubCategory::all();
        Session::put('active','contact');

        return view('user.contact',compact('contact','sub_category'));
    }

    public function aboutUs(Request $request)
    {
        $about = About::all();
        $text = Text::all();
        $sub_category = SubCategory::all();
        $contact = Contact::first();
        Session::put('active','about');

        return view('user.about',compact('contact','about','text','sub_category'));
    }

    public function newsUs(Request $request)
    {
        $news = News::all();
        $sub_category = SubCategory::all();
        $contact = Contact::first();
        Session::put('active','news');

        return view('user.news',compact('contact','news','sub_category'));
    }

    public function newsSingle(Request $request,$id)
    {
        $news = News::findorFail($id);
        // return $news->image;
        $sub_category = SubCategory::all();
        $contact = Contact::first();

        return view('user.news_single',compact('contact','news','sub_category'));
    }
    public function productSingle(Request $request,$id)
    {
        $product = Product::findorFail($id);
        $image = Images::where('product_id',$id)->get();
        $sub_category = SubCategory::all();
        $contact = Contact::first();

        return view('user.product_single',compact('contact','product','image','sub_category'));
    }
    public function printers(Request $request,$id)
    {
        $sub_category = SubCategory::all();
        $sub_cat = SubCategory::where('id',$id)->get();
        $contact = Contact::first();
        Session::put('active','product');

        $p_pop = Product::where('sub_category_id',$id)->get();
        return view('user.printers',compact('contact','p_pop','sub_category','sub_cat'));
    }
}

