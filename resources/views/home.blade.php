@extends('layout.default')

@section('pageTitle') Home | Laravel Comics @endsection

@section('content')
<div id="content" class="container-fluid">
   
    <div class="cards row">
        @foreach(config('comics') as $comic)
        <div class="comics col-2">
            <img src="{{ $comic['thumb'] }}" />
            <div class="series">
                <p class="text">{{ $comic['title'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
  
    <div class="more container">
        <button >
          LOAD MORE
        </button>
    </div>
    {{-- <div id="blue-container">
        <ul class="icons">
          <li>
             <a class="link" href="#">
                <img src="{{ $comic['thumb'] }}" />
                <p class="text-link">{{ item.text }}</p>
             </a>
          </li>
        </ul>
     </div> --}}
</div>
@endsection