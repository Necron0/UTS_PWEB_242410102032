@extends('layouts.app')

@section('content')
<h1> Welcome {{$username ?? 'King'}}</h1>

{{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 p-20 ml-4">
    <a class="bg-[#fca311] flex justify-center p-8 rounded-2xl hover:bg-[#14213d] hover:text-white transition ease-in-out delay-150">
        test
    </a>
    <div class="bg-[#fca311] flex justify-center p-8 rounded-2xl hover:bg-[#14213d] hover:text-white transition ease-in-out delay-150">
        Jumlah Data Kendaraan : {{$jumlah}}
    </div>
    <div class="bg-[#fca311] flex justify-center p-8 rounded-2xl hover:bg-[#14213d] hover:text-white transition ease-in-out delay-150">
        test
    </div>
</div> --}}
<div class="flex items-center justify-center mt-20">
    <span class="bg-[#fca311] mr-5 w-auto min-w-60 flex justify-center p-10 rounded-4xl  hover:bg-[#14213d] hover:text-white transition ease-in-out delay-100"> Jumlah Data Kendaraan : {{$jumlah}}</span>
    <span class="bg-[#fca311] ml-5 p-10 w-auto min-w-60 flex justify-center rounded-4xl hover:bg-[#14213d] hover:text-white transition ease-in-out delay-100">Jumlah User : 1 </span>
</div>
@endsection
