@extends('templet.main')

@section('content_room')
    
<div class="content_card justify-center items-center w-1/2">
    <form action="/login" method="POST" class="grid grid-cols-1 gap-y-10 text-justify">
        @csrf
        <div>
            <label for="username" class="text-md">Username</label>
            <input required type="text" name="username" id="username" class="p-1 w-full rounded-md border-2 border-gray-500 bg-white">
        </div>
        <div>
            <label for="password" class="text-md">Password</label>
            <input type="password" name="password" id="password" class="p-1 w-full rounded-md border-2 border-gray-500 bg-white" required>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="rounded-md bg-red-400 text-white px-6 py-2 hover:text-gray-200 hover:bg-red-600 hover:cursor-pointer">Login</button>
        </div>
    </form>
</div>
@if(session()->has('errorLogin'))
<div class="text-lg">
    {{ session('errorLogin') }}
</div>
@endif

@endsection