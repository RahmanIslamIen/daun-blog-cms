@extends('layouts.app')

@section('content')

<style type="text/css">
	.tiapTombol {
		margin: 10px;
	}
</style>

<a href="/admin-post" style="margin: 20px; text-decoration: none;">
    <i data-feather="chevron-left"></i>Kembali
</a>

<button type="button" class="btn btn-outline-success tiapTombol" style="float: right;" 
data-bs-toggle="modal" data-bs-target="#exampleModal">
	<i data-feather="plus-square"></i> Tambah Kategori baru
</button>

<!-- Form Tambah Kategori -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kategori Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			@if (session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
			@endif

			<form action="{{ url('kategoribaru') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<label for="">Nama Kategori</label>
					<input type="text" name="nama_kategori" class="form-control">
				</div>
				<div class="form-group mb-3">
					<button type="submit" class="btn btn-primary" style="width: 100%">Simpan</button>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<center>
        <h1>SEMUA KATEGORI</h1>
    </center>
	
	@foreach ($semuaKategori as $kategori)
		<div class="card" style="margin: 10px;">
			<div class="card-body">
				<h3 class="card-title">{{ $kategori->nama_kategori }}</h3>
				<p>id : {{ $kategori->id }}</p>
				<div style="float: right;">
					<a class="btn btn-outline-success" href="#">
						<i data-feather="edit"></i>Ubah
					</a>
		    	<a class="btn btn-outline-danger" href="#">
		    		<i data-feather="trash-2"></i>Hapus
		    	</a>
		    	<a class="btn btn-outline-primary" href="#">
		    		<i data-feather="eye"></i>Lihat
		    	</a>
				</div>
			</div>
		</div>
	@endforeach

</div>

<script>
  feather.replace()
</script>

@endsection