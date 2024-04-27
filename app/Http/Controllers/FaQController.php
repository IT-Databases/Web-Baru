<?php

namespace App\Http\Controllers;

use App\Models\FaQ;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class FaQController extends Controller
{
    public function index() {
        $status ='faq';
        $faqs = FaQ::orderBy('created_at','desc')->paginate(8);
        return view('faq',compact('faqs','status'));
    }

    public function detail($slug){
        $status ='berita';
        $faq = FaQ::where('slug', $slug)->first();
        $faqRandom = FaQ::inRandomOrder()->take(5)->get();
        return view ('berita-detail', compact('faq','status','faqRandom'));
    }

    public function cari(Request $request){
        $faqs = FaQ::where('pertanyaan','LIKE','%'.$request->search.'%')->paginate(8);
        return view ('faq', compact('faqs'));
    }
}
