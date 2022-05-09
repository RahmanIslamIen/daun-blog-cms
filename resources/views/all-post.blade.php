@extends('layouts.app')

@section('content')
    <div class="tajuk_blog" style="height: 240px; width: 100%; background: teal; margin-top: -25px; padding: 60px">
        <center>
            <h1>Blog Laravel Bagus</h1>
            <p>selamat datang di blog saya dengan konten menyegarkan</p>
        </center>
    </div>

    <div class="promosi-dan-pencharian" style="width: 100%; background: #FF4949; height: 60px;">
        <form class="d-flex" style="float: right; margin: 10px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    @foreach ($posts as $item)
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card" style="margin: 10px;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->title }}</h3>
                        <span class="badge rounded-pill bg-success">{{ $item->kategori }}</span>
                        <p>{{ $item->penulis }}</p>
                        <h5>{{ $item->tanggal }}</h5>
                        <p class="card-text">{{ $item->excerpt }}</p>
                        <a href="/post/{{ $item->id }}">Lihat artikel...</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    </div>
@endsection
