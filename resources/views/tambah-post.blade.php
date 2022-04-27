@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <a href="/admin-post" style="margin-bottom: 10px; text-decoration: none;">
                <i data-feather="chevron-left"></i>Kembali
            </a>

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
                            <label for="">Tulisan Tajuk</label>
                            <textarea type="text" name="excerpt" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tulis konten</label>
                            <textarea id="editor" type="text" name="konten" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Posting Artikel</button>
                        </div>

                    </form>

                </div>
            </div>
        
    </div>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
  feather.replace()
</script>

@endsection