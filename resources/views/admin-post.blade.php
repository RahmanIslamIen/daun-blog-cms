@extends('layouts.app')

@section('content')

<style type="text/css">
	.tiapTombol {
		margin: 10px;
	}
	.namaAdmin{
		margin-left: 20px;
	}
</style>

<h1 class="namaAdmin">Nama Admin: {{ Auth::user()->name }}</h1>

<a href="{{ url('tambah-post') }}" class="btn btn-outline-success tiapTombol">
	<i data-feather="file-plus"></i> Tambah Postingan
</a>
<a href="#" class="btn btn-outline-warning tiapTombol">
	<i data-feather="settings"></i> Opsi Blog
</a>	
<a href="#" class="btn btn-outline-info tiapTombol">
	<i data-feather="message-square"></i> Semua Komentar
</a>	
<a href="#" class="btn btn-outline-secondary tiapTombol">
	<i data-feather="dollar-sign"></i> Penayangan Iklan
</a>		
<a href="{{ url('/kelola-kategori') }}" class="btn btn-outline-dark tiapTombol">
	<i data-feather="tag"></i> Kelola Kategori
</a>		

<div class="container">
	
	@foreach ($posts as $item)
		<div class="card" style="margin: 10px;">
			<div class="card-body">
				<h3 class="card-title">{{ $item->title }}</h3>
				<span class="badge rounded-pill bg-success">{{ $item->kategori }}</span>
				<p>{{ $item->penulis }}</p>
				<h5>{{ $item->tanggal }}</h5>
				<p class="card-text">{{ $item->excerpt }}</p>
				<div style="float: right;">
					<a class="btn btn-outline-success" href="{{ url('ubah-post/'.$item->id) }}">
						<i data-feather="edit"></i>Ubah Postingan
					</a>
		    	<a class="btn btn-outline-danger" href="{{ url('hapus-postingan/'.$item->id) }}">
		    		<i data-feather="trash-2"></i>Hapus Postingan
		    	</a>
		    	<a class="btn btn-outline-primary" href="/post/{{ $item->id }}">
		    		<i data-feather="eye"></i>Lihat Postingan
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