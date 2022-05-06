@extends('layouts.app')

@section('content')
<div class="container">

@foreach ($posts as $item)
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item">Postingan</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
  </ol>
</nav>

	<div class="card">
		<div style="margin: 10px">
			<h3>{{ $item->title }}</h3>
			<p>{{ $item->penulis }} 
				<span class="badge rounded-pill bg-success">
					kategori
				</span>
			</p>
			<h5>{{ $item->tanggal }}</h5>
			{!! $item->konten !!}
		</div>
	</div>
@endforeach



<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahKomentar"
style="margin: 15px; float: right;">
  tambah komentar
</button>

<!--- bagian komentqr --->
<div style="margin: 15px">
	<u><h5>Komentar</h5></u> 
	<div>
		<b>Nama Orang</b> |
		<i>reaksi</i>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="tambahKomentar" tabindex="-1" aria-labelledby="tambahKomentar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahKomentar">Tambah Komentar Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			@if (session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
			@endif

			<form action="{{ url('add-student') }}" method="POST">
				@csrf

				<div class="form-group mb-3">
					<label for="">id postingan</label>
					<input type="text" name="id_postingan" class="form-control">
				</div>
				<div class="form-group mb-3">
					<label for="">Email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group mb-3">
					<label for="">Nama User</label>
					<input type="text" name="nama_user" class="form-control">
				</div>
				<div class="form-group mb-3">
					<label for="">Komentar</label>
					<input type="text" name="isi_komentar" class="form-control">
				</div>
				<div class="form-group mb-3">
					<button type="submit" class="btn btn-primary"
					style="width: 100%;">Buat Komentar</button>
				</div>

			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

</div>

<script>
  feather.replace()
</script>
@endsection