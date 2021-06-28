@extends('layouts.main')
@section('content')
<div class="card container">
    <div class="wrapper flex">
        <div class="cards flex">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['image'] }}" alt="">
                    <h3>{{ $card['title']}}</h3>
                </div>
            @endforeach
        </div> <!--cards flex --> 
        <button class="load-button">LOAD MORE</button>
    </div>
    
</div> <!--container -->
@endsection