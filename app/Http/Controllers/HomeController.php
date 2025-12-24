<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   function index_landing()
   {
      return view('home');
   }


   function preschool_admisson()
   {
      return view('preschool_admission');
   }

   function toddler_program()
   {
      return view('programs.toddler');
   }

   function playgroup_program()
   {
      return view('programs.playgroup');
   }

   function nursery_program()
   {
      return view('programs.nursery');
   }

   function eurojunior_program()
   {
      return view('programs.eurojunior');
   }
   function eurosenior_program()
   {
      return view('programs.eurosenior');
   }

   function contact_us() 
   {
      return view('contact_us');
   }
}
