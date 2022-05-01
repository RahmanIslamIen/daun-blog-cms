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

<div class="container">
	<center>
        <h1>SEMUA KATEGORI</h1>
    </center>
	
		<div class="card" style="margin: 10px;">
			<div class="card-body">
				<h3 class="card-title">Kategori</h3>
				<p>id :</p>
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
	

</div>

<script>
  feather.replace()
</script>

@endsection