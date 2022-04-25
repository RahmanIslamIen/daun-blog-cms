@extends('layouts.app')

@section('content')
<div style="float: right; margin: 20px;">
		<a href="{{ url('tambah-post') }}" class="btn btn-outline-success">Tambah Postingan</a>
</div>	

<div class="container">
	
	@foreach ($posts as $item)
		<div class="card" style="margin: 10px;">
			<div class="card-body">
				<h3 class="card-title">{{ $item->title }}</h3>
				<p>{{ $item->penulis }}</p>
				<h5>{{ $item->tanggal }}</h5>
				<p class="card-text">{{ $item->excerpt }}</p>
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
	@endforeach

</div>

<script>
  feather.replace()
</script>

@endsection