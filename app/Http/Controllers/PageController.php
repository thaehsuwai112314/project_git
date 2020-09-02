<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;

class PageController extends Controller
{
   public function mainfun($value='')
   {
     $categories=Category::All();
     $subcategories=Subcategory::All();
     $items = Item::All();

   		// $route= Route::current();
   		// dd($route);
   	return view('frontend.main',compact('categories','subcategories','items'));
   }

   public function brandfun($value='')
   {
   		return view('frontend.brand');
   }

   public function itemdetailfun($value='')
   {
   		return view('frontend.itemdetail');
   }
   public function loginfun($value='')
   {  
      $categories=Category::All();
      $subcategories=Subcategory::All();
   		return view('frontend.login',compact('categories','subcategories'));
   }
   public function promotionfun($value='')
   {
   		return view('frontend.promotion');
   }
     public function registerfun($value='')
   {
        
         return view('frontend.register');
   }
     public function shoppingfun($value='')
   {
         $categories =Category::All();
         $subcategories=Subcategory::ALL();
         return view('frontend.shopping',compact('categories','subcategories'));
   }
     public function subcategoryfun($value='')
   {
        
         return view('frontend.subcategory');
   }
 public function showcartfun($value='')
   {
        
         return view('frontend.showcart');
   }
   
}
