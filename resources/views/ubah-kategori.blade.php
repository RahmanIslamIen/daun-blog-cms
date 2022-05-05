@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <a href="/kelola-kategori" style="margin-bottom: 20px; text-decoration: none;">
                <i data-feather="chevron-left"></i> Kembali
            </a>

            <div class="card">
                <div class="card-header">
                    <h4>Ubah Nama Kategori</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('ubah-kategori/'.$kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" style="float: right;">Ubah Kategori</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
  feather.replace()
</script>

@endsection