@extends('layout.app')

@section('content')
  
  <h1 class="text-center font-bold text-lg"> Hadiths </h1>
  
  <div class="flex flex-col justify-content-center w-10/12 m-auto">
    @foreach( $all_hadiths as $hadith )
      
      <a href="/hadith/{{ $hadith->id }}" class="pt-2">
        {{ $hadith->order }}
        -
        {{ $hadith->title }}
      
      </a>
      
      <form action ="/hadith/{{ $hadith->id }}"  method="post" >
        @csrf
        @method('delete')
        <button class="m-2 bg-red-300 text-white w-1/4 p-2 text-center" type="submit">
        
          Delete
        
        </button> 
      </form>
      
      <hr>
      
    @endforeach
    
  </div>
@endsection