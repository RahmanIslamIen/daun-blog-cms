@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Posting Baru</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('tambah-post') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penulis</label>
                            <input type="text" name="penulis" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">execrpt</label>
                            <textarea type="text" name="excerpt" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tulis konten</label>
                            <textarea type="text" name="konten" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Posting Artikel</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection