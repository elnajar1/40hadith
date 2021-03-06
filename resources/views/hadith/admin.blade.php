@extends('layout.app')

@section('content')
  
  <h1 class="text-center font-bold text-lg"> Hadiths </h1>
 
  <a href="/hadith/create" class="my-2 border-bottom  p-2 m-5 text-blue-500">
    Add hadith
    ->
  </a>
  
  <div class="flex flex-col justify-content-center w-10/12 m-auto">
    @foreach( $all_hadiths as $hadith )
      
      <a href="/hadith/{{ $hadith->id }}" class="pt-2 text-right text-blue-300" style="direction: rtl">
        {{ $hadith->order }}
        -
        {{ $hadith->title }}
      
      </a>
      <small class="text-sm text-gray-600" style="direction: rtl" >
        {{ $hadith->content }}
      </small>
      <div class="flex">
      
        <form action ="/hadith/{{ $hadith->id }}"  method="post" style="inline w-40" >
         
          @csrf
          @method('delete')
        
          <button class="m-1 bg-red-500 text-white w-40 p-1 text-center inline" type="submit">
            Delete
          </button> 
        </form>
        
        <a href="/hadith/{{ $hadith->id }}/edit" class="m-1 border  p-1 text-center inline w-40" >
          Edit
        </a>
        
      </div>
      
      <hr>
      
    @endforeach
    
  </div>
@endsection