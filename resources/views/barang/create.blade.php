@extends('layout.mainLayout')

@section('title', 'Tambah Barang')

@section('content')
<div class="bg-white border shadow-lg">
    <div class="text-main font-bold secondary-bg p-4">Tambah Barang</div>
    <div class="p-4">
        <form action={{route('barang.store')}} method="POST">
            @csrf
            @if ($errors->any())
                <div class="text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="merk">Merk</label>
            <input type="text" name="merk" id="merk" class="border rounded p-1 w-full">

            <label for="seri">Seri</label>
            <input type="text" name="seri" id="seri" class="border rounded p-1 w-full">

            <label for="spesifikasi">Spesifikasi</label>
            <input type="text" name="spesifikasi" id="spesifikasi" class="border rounded p-1 w-full">
            
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" class="border rounded p-1 w-full">

            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="border rounded p-1 w-full">
                @foreach ($pilihan as $item)
                    <option value={{$item->id}}>{{$item->deskripsi}} ({{$item->kategori}})</option>
                @endforeach
            </select>
            
            <div class="mt-6">
                <button type="submit" class="main-bg text-white p-2 rounded">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection