<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
   public function __invoke()
   {
       $persons = [
           [
               'id' => 1,
               'name' => 'Ivan',
               'age' => 20,
               'job' => 'developer'
           ],
           [
               'id' => 2,
               'name' => 'Elena',
               'age' => 25,
               'job' => 'seller'
           ],
           [
               'id' => 3,
               'name' => 'Fedor',
               'age' => 30,
               'job' => 'developer'
           ]
       ];
       return $persons;
   }
}
