@extends('templet.main')

@section('content_room')
    
<div class="content_card inline-flex gap-x-5">
    <img src="{{ asset('34242.jpg') }}" alt="" class="rounded-md w-1/4 h-min">
    <div class="w-3/4  text-justify ">
        <p>
            Ini sih mudah ya, foto ama bang Nabil abis lantik. Bagaikan hadiah setelah diuji otak selama 5 hari.
            Udah
            itu aja sih, kalau day mah tiap day ada aja ceritanya sendiri.
            Abis ini ya paling beban akademik kek biasa, tapi prak RL sih selalu gacor, hmmm apalagi ya
            Ya palingan hidup di sekre itu lumayan juga, bisa jajan terus tuh ampe blastoz cepet abis mulu
            awokwokwokwok menunggu pak munir ga dateng tapi dateng pas sebelum 20 menit lewat :(( nilai probstat
            lebih jelek dari PSWK, kaget ya sama kaget juga
        </p>
        <br>
        <p>
            Rasanya sih ya paling berusaha hidup sebahagia mungkin (boong) di kampus ini, setidaknya daripada
            nganggur ga jelas di rumah, tapi ya beratttttt
        </p>
        <br>
        <p>
            Imagine being able to confidently give your answer in front of your friends and teacher and it turns out
            to be correct, sungguh sigma
        </p>
    </div>
</div>
<div class="content_card inline-grid gap-y-5">
    <h1 class="text-center text-5xl font-bold">Mantra HTML</h1>
    <p class="text-center font-semibold">Konon membaca ini setiap akan tidur adalah buang-buang waktu</p>
    <p class="text-justify">
        Lorem ipsum odor amet, consectetuer adipiscing elit. Sit in maecenas, quam in rhoncus consectetur maximus
        imperdiet. Eros vitae quam per libero morbi curabitur dui tristique. Nibh sem euismod phasellus tincidunt
        ullamcorper. Ut fames tincidunt luctus ullamcorper curabitur vitae justo tortor libero. Gravida potenti
        lectus
        bibendum odio primis. Nulla vel est fusce magna varius tristique risus hendrerit. Taciti nam himenaeos
        interdum
        dis semper magnis. Fames potenti placerat penatibus pretium mauris rhoncus turpis risus cras. Aliquam orci
        bibendum malesuada orci odio consectetur vivamus tellus.

        Metus non porttitor sodales vivamus phasellus bibendum pulvinar. Curae molestie commodo ex habitasse ligula
        ipsum fermentum vulputate? Praesent magna nisl conubia pellentesque nunc platea. Imperdiet sagittis ex
        dignissim
        tortor elit turpis torquent natoque. Ex consequat elementum fusce nulla gravida faucibus? Tellus facilisi
        mollis
        nisl dui sit malesuada. Magna rhoncus metus sed habitasse leo vel senectus nibh. Malesuada efficitur lectus
        cursus mauris et eu sociosqu.

        Lorem ipsum odor amet, consectetuer adipiscing elit. Sit in maecenas, quam in rhoncus consectetur maximus
        imperdiet. Eros vitae quam per libero morbi curabitur dui tristique. Nibh sem euismod phasellus tincidunt
        ullamcorper. Ut fames tincidunt luctus ullamcorper curabitur vitae justo tortor libero. Gravida potenti
        lectus
        bibendum odio primis. Nulla vel est fusce magna varius tristique risus hendrerit. Taciti nam himenaeos
        interdum
        dis semper magnis. Fames potenti placerat penatibus pretium mauris rhoncus turpis risus cras. Aliquam orci
        bibendum malesuada orci odio consectetur vivamus tellus.

        Metus non porttitor sodales vivamus phasellus bibendum pulvinar. Curae molestie commodo ex habitasse ligula
        ipsum fermentum vulputate? Praesent magna nisl conubia pellentesque nunc platea. Imperdiet sagittis ex
        dignissim
        tortor elit turpis torquent natoque. Ex consequat elementum fusce nulla gravida faucibus? Tellus facilisi
        mollis
        nisl dui sit malesuada. Magna rhoncus metus sed habitasse leo vel senectus nibh. Malesuada efficitur lectus
        cursus mauris et eu sociosqu.
    </p>
</div>
<div id="uno" class="content_card inline-flex justify-between">
    <button onclick="colorFun()" title="Ini bikin ilang muncul" class="bg-green-500 hover:bg-green-600 hover:text-white transition px-5 py-2 text-center rounded-md shadow-lg">
        Hai
    </button>
    <button id="dos" onclick="spinFun()" title="Ini bikin muter" class="bg-red-500 hover:bg-red-600 hover:text-white transition rounded-full flex shadow-lg items-center p-5">
        Stop
    </button>
    <button onclick="flipFun()" title="Ini balikin" class="bg-yellow-500 hover:bg-yellow-600 hover:text-white transition rounded-full flex shadow-lg items-center p-5">
        Hah
    </button>
</div>

<script>
    function colorFun() {
        document.getElementById("uno").classList.toggle("animate-pulse");
    }
    function spinFun() {
        document.getElementById("dos").classList.toggle("animate-spin");
    }
    function flipFun() {
        const element = document.getElementById("tres");
    if (element.className === "font-google flex gap-5 flex-col justify-center content-center text-center items-center bg-gradient-to-r from-[#2C4981] to-[#d0d0d0]") {
        element.className = "font-google flex gap-5 flex-col justify-center content-center text-center items-center bg-gradient-to-r from-[#d0d0d0] to-[#2c4981]"; // Replace with an empty class
    } else {
        element.className = "font-google flex gap-5 flex-col justify-center content-center text-center items-center bg-gradient-to-r from-[#2C4981] to-[#d0d0d0]"; // Replace with the desired class
    }
    }
</script>

@endsection