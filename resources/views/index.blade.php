@extends('layout.app')

@section('content')

<div class="mt-10 flex flex-col justify-content-center w-10/12 m-auto">
  
  <h2 class ="text-4xl font-bold  text-center ">
     الاربعون نووية 
  </h2>
  
  <h1 class="my-4 text-lg text-gray-500  text-center ">
    Forty Nawawy hadiths Free Api  
  </h1>
  
  <div class="py-5 px-2 bg-gray-100">
    <h3 class="my-4 font-bold text-lg">
      How To Use 
    </h3>
    
    <p>
      Get single Hadith ( order from 1 to 42 ) 
    </p>
    <p class="p-2 bg-gray-300">
      /hadith/{ {order} }
    </p>
    
    <p class="pt-3">
      Get all Hadith 
    </p>
    <p class="p-2 bg-gray-300">
      /hadith
    </p>
  
  </div>
  
  <a href="hadith/1" class="my-7 border-bottom border p-2 bg-blue-300">
    See frist Hadith josn from api
    - >
  </a>

  <a href="hadith/create" class="my-2 border-bottom border p-2">
    Create
    - >
  </a>
  
  <a href="#" class="mt-10 p-2 bg-black text-white">
    Share in it On Github
  </a>
  
</div>

@endsection