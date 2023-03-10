<?php

namespace App\Http\Controllers;

use App\Models\Cgy;
use App\Models\Item;
use App\Models\Element;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $sliders = Element::where('page','index')->where('position','slider')->orderBy('sort','asc')->get();
        $arrivals = Item::where('cgy_id',2)->where('enabled',true)->orderBy('sort','asc')->take(3)->get();
        $images = Element::where('page','index')->where('position','images')->orderBy('sort','asc')->get();
        $new_item_top = Element::where('page','index')->where('position','new_item_top')->first();
        $new_item = Item::where('cgy_id',1)->where('enabled',true)->orderBy('sort','asc')->take(6)->get();
        $item_more = Element::where('page','index')->where('position','more')->first();
        $item_row3 = Element::where('page','index')->where('position','row3')->orderBy('sort','asc')->take(3)->get();
        return view('page.index', compact('sliders','arrivals','images','new_item_top','new_item','item_row3','item_more'));
    }
    public function shop(){
        return view('page.shop');
    }
    public function about(){
        return view('page.about');
    }
    public function product_details(){
        return view('page.product_details');
    }
    public function blog(){
        return view('page.blog');
    }
    public function blog_details(){
        return view('page.blog_details');
    }
    public function login(){
        return view('page.login');
    }
    public function cart(){
        return view('page.cart');
    }
    public function elements(){
        return view('page.elements');
    }
    public function confirmation(){
        return view('page.confirmation');
    }
    public function checkout(){
        return view('page.checkout');
    }
    public function contact(){
        return view('page.contact');
    }
}

