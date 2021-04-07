@extends('layout.app')

@section('content')
 
<div class="mt-10 flex flex-col justify-content-center w-10/12 m-auto" >
  
  <h2 class ="text-4xl font-bold  text-center py-5 ">
    Api 
    <span class="text-gray-400">
       | 
    </span>
     الاربعون نووية 
  </h2>
  
  <div class="py-5 px-2 border">
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
  
  <a href="/hadith/" class="my-7 border-bottom border p-2 bg-blue-300">
    See Hadith josn respond from the api
    -->
  </a>

  <a href="hadith/admin" class="my-2 border-bottom border p-2">
    Admin Panal ->
  </a>
  <a href="https://github.com/moud449/40hadith" class="mt-10 p-2 bg-black text-white text-center">
    Share in developing it on Github
    <i class="bi bi-github text-white"></i>
  </a>
  
</div>

@endsection