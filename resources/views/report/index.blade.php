@extends('layouts.main')
@section('content')
<div class="w-full flex justify-between items-center">
    <h1 class="text-3xl font-bold py-5">Отчеты</h1>
</div>
<div class="flex gap-5">
    <div class="flex flex-col gap-5 flex-wrap justify-between w-1/2">
        @foreach ($reports as $report)
        <div class="flex flex-col p-4 border-2 mb-5 gap-3">
            <p>Номер: {{ $report['number'] }}</p>
            <p>Описание: {{ $report['description'] }}</p>
            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                @method('delete')
                @csrf
                <input class="cursor-pointer w-20 bg-red-700 text-white" type="submit" value="Удалить">
            </form>
        </div>
        @endforeach
    </div>
    <form class="border-2 h-fit p-4 w-1/2" method="POST" action="{{route('reports.store')}}">
        @csrf
        <p class="font-semibold text-3xl">Создать отчет</p>
        <div class="flex flex-col w-full mb-5">
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                <textarea name="description" type="text" id="description" class="w-full p-3 border-2 rounded-sm" placeholder="Описание" required></textarea>
            </div>
        </div>
        <button type="submit" class="border-2 p-3 hover:bg-slate-100">Создать</button>
    </form>
</div>

@endsection()