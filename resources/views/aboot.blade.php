@extends('templet.main')

@section('content_room')
    
<div class="content_card flex flex-col gap-y-5 justify-center items-center">
    <h1 class="font-bold text-5xl">
        Anak kesayangan Mas Rusdi
    </h1>
    <div class="w-1/3">
        <img src="{{ asset('87123.png') }}" class="rounded-md shadow-xl" alt="Harusnya ada hiura di sini">
    </div>
    <h1 class="font-bold text-5xl">
        319666
    </h1>
</div>

<div class="content_card inline-flex justify-center">
    <video controls class="rounded-md shadow-xl">
        <source src="{{ asset('estenba.mp4') }}">
        Estenba
    </video>
</div>

<div class="content_card inline-flex justify-center">
    <audio controls class="w-1/2">
        <source src="{{ asset('funkytown.opus') }}"> 
    </audio>
</div>

@endsection