@extends('layouts.main')
@section('content')
<div class="flex flex-wrap justify-between py-10 px-20 gap-10">
    @foreach ($array as $card)
        <div class="w-[400px] flex flex-col border-2 p-4">
            <img src="{{ $card['path'] }}" alt="карточка" class="img">
            <h2>{{ $card['id'] }}. {{ $card['title'] }}</h2>
            <p>{{ $card['price'] }} р.</p>
        </div>
    @endforeach
</div>
@endsection