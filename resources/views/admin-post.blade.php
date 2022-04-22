@extends('layouts.app')

@section('content')
<div style="float: right; margin: 20px;">
		<a href="{{ url('tambah-post') }}" class="btn btn-outline-success">Tambah Postingan</a>
</div>	

<div class="container">
	<div class="card">
		<div style="margin: 5px">
			<h3>title</h3>
			<p>konten nya</p>
	    	<a class="btn btn-outline-success">Ubah</a>
	    	<a class="btn btn-outline-danger">Hapus</a>
	    </div>
	</div>
</div>

@endsection