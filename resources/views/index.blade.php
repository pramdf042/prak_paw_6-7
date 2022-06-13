@extends('layouts.main')
@section('content')
<div class="row mt-5 ml-0">
    @foreach ($mahasiswas as $mahasiswa) {{-- menampilkan data dari database --}}
    <div class="col-lg-6 card rounded mt-4 mb-4 ml-0">
        <div class="row">
        <div class="col-5 card-body " style="">
            <h5 class="card-title mr-5">{{ $mahasiswa->nama }} {{-- menampilkan nama --}}
                {{-- <a href="{{ route('edit', $mahasiswa->nim) }}" class="bg-primary ml-4 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-pen" style="color: white; "></i></a>
                <a href="{{ route('delete', $mahasiswa->nim) }} " class="bg-light ml-5 p-1 px-2 rounded"
                    style="float:right; clear:left"><i class="fas fa-solid fa-trash" style="color: red"></i></a> --}}
            </h5>
            <p class="card-text">{{ $mahasiswa->nim }}</p> {{-- menampilkan nim --}}
            <p class="card-text">{{ $mahasiswa->alamat }}</p> {{-- menampilkan alamat --}}

        </div>
        <div class="col-7 card-body">
            <a href="{{ route('delete', $mahasiswa->nim) }} " class="bg-light p-1 px-2 rounded" style=""><i
                    class="fas fa-solid fa-trash" style="color: red"></i></a> {{-- memanggil route delete dengan parameter nim --}}
            <a href="{{ route('edit', $mahasiswa->nim) }}" class="bg-primary  p-1 px-2 rounded" style=""><i
                    class="fas fa-solid fa-pen" style="color: white; "></i></a> {{-- memanggil route edit dengan parameter nim --}}
            <p class="card-text">{{ $mahasiswa->email }}</p> {{-- menampilkan email --}}
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
