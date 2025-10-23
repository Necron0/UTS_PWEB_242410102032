@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-3xl flex justify-center mt-10 mb-30 bg-[#14213d] text-gray-400 p-6">
        Halaman Pengelolaan
    </h1>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-20 ml-12">
    @foreach ($items as $item)
    <div class="item-cards " >
        <img src="{{$item['gambar']}}" alt="Error" class="rounded-2xl object-cover  w-90 h-52  ">
        <h class="text-l font-semibold text-gray-600">{{$item['nama']}}</h>
        <h1 class="text-black">{{$item['harga']}}</h1>
    </div>
    @endforeach
</div>
@endsection
