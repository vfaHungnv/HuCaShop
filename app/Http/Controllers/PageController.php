<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	$slide = Slide::all();
    	$new_product = Product::where('new', 1)->paginate(4, ['*'], 'pag');
    	// var_dump($new_production);
    	// return view('pages.trangchu', ['slide'=>$slide]);
    	// print_r($slide);
    	// exit();
    	return view('pages.trangchu', compact('slide', 'new_product'));
    }

    public function getLoaiSp() {
    	return view('pages.loai_sanpham');
    }

    public function getChitiet() {
    	return view('pages.chitiet_sanpham');
    }

    public function getLienhe() {
    	return view('pages.lienhe');
    }

    public function getGioithieu() {
    	return view('pages.gioithieu');
    }
}
