@extends('layout.mainLayout')

@section('title', 'Kategori')

@section('content')
    <div class="bg-white border">
        <div class="text-main font-bold secondary-bg p-4">Tabel Kategori</div>
        <div class="p-4">
            <div class="flex justify-between">
                <div>
                    Show 
                    <select name="" class="border rounded p-1">
                        <option value="">10</option>
                        <option value="">25</option>
                        <option value="">50</option>
                        <option value="">100</option>
                    </select> 
                    entries
                </div>
                <div class="flex items-center">
                    Search: 
                    <form action="" class="ml-2 flex items-center">
                        <input type="text" class="border rounded p-1" placeholder="Search for">                   
                        <button type="submit"><i class="fa-solid fa-magnifying-glass p-2 main-bg text-white rounded ml-1"></i></button>
                    </form>
                </div>
            </div>
            <table class="table-auto border-collapse w-full mt-6">
                <thead>
                    <tr>
                        <th class="border-2">ID</th>
                        <th class="border-2">Deskripsi</th>
                        <th class="border-2">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="border-2 text-center">{{$item->id}}</td>
                        <td class="border-2">{{$item->deskripsi}}</td>
                        <td class="border-2 text-center">{{$item->kategori}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6">{{$data->links()}}</div>
        </div>
    </div>
@endsection