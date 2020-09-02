<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboardfun($value='')
   {
        
         return view('backend.dashboard');
   }
     public function buttonfun($value='')
   {
        
         return view('backend.button');
   }
    public function cardfun($value='')
   {
        
         return view('backend.card');
   }

    public function colorfun($value='')
   {
        
         return view('backend.color');
   }

   public function borderfun($value='')
   {
        
         return view('backend.border');
   }

   public function animatefun($value='')
   {
        
         return view('backend.animate');
   }

   public function otherfun($value='')
   {
        
         return view('backend.other');
   }

   public function dashloginfun($value='')
   {
        
         return view('backend.dashlogin');
   }
    public function dashregisterfun($value='')
   {
        
         return view('backend.dashregister');
   }
    public function forgotpwfun($value='')
   {
        
         return view('backend.forgotpw');
   }
    public function dash404fun($value='')
   {
        
         return view('backend.404');
   }
   public function blankfun($value='')
      {
           
            return view('backend.blank');
      }

   public function chartfun($value='')
      {
           
            return view('backend.chart');
      }

  public function tablefun($value='')
      {
           
            return view('backend.table');
      }
  
}
