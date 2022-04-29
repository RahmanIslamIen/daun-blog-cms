@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <a href="/admin-post" style="margin-bottom: 20px; text-decoration: none;">
                <i data-feather="chevron-left"></i>Kembali
            </a>

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('ubah-post/'.$postingan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$postingan->title}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="teknologi">teknologi</option>
                                <option value="pendidikan">pendidikan</option>
                                <option value="life style">life style</option>
                                <option value="Psycology">psychology</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Penulis</label>
                            <input type="text" name="penulis" value="{{$postingan->penulis}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal</label>
                            <input type="text" name="tanggal" value="{{$postingan->tanggal}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Excerpt</label>
                            <textarea type="text" name="excerpt" class="form-control">{!! $postingan->excerpt !!}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Konten</label>
                            <textarea id="editor" type="text" name="konten" class="form-control">{!! $postingan->konten !!}</textarea>
                        </div>
                        <div class="form-group mb-3" style="float: right;">
                            <button type="submit" class="btn btn-primary">Ubah Postingan</button>
                        </div>

                    </form>

                </div>
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