<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Storage;

class NewsletterController extends Controller
{
    public function index() {
        $status ='newsletter';
        $newsletters = Newsletter::orderBy('created_at','desc')->paginate(8);
        return view('newsletter',compact('newsletters','status'));
    }

    public function detail($slug){
        $status ='newsletter';
        $newsletter = Newsletter::where('slug', $slug)->first();
        $newsletterRandom = Newsletter::inRandomOrder()->take(5)->get();
        return view ('newsletter-detail', compact('newsletter','status','newsletterRandom'));
    }

    public function cari(Request $request){
        $newsletters = Newsletter::where('judul','LIKE','%'.$request->search.'%')->paginate(8);
        return view ('newsletter', compact('newsletters'));
    }

    public function downloadPdf($slug) {
        $newsletter = Newsletter::where('slug', $slug)->firstOrFail();
    
        // Ambil path file PDF dari model Perpustakaan
        $pdfPath = $newsletter->pdf_file;
    
        // Mendapatkan nama file PDF
        $pdfName = pathinfo($pdfPath, PATHINFO_FILENAME);
    
        // Menggunakan Storage facade untuk mengambil file PDF dari penyimpanan
        $pdfFile = Storage::disk('public')->get($pdfPath);
    
        // Mengembalikan file PDF sebagai response
        return response($pdfFile)
            ->header('Content-Type', 'application/pdf');
    }
}
