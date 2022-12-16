<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewsort_price;
use PDF;


class sort_priceController extends Controller
{
    //
    public function index()
    {  
        $sort_price = Viewsort_price::all();
        return view('admin.sort_price.index', ['title' => 'Sort'],compact('sort_price'));
    }

    public function print_pdf()
    {
    	$sort_price = Viewsort_price::all();
 
    	$pdf = PDF::loadView('admin.sort_price.print_pdf',compact('sort_price'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('sort_price-pdf.pdf');
    }
}
