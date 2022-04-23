@extends('layouts.app')

@section('content')
<div class="container">

@foreach ($posts as $item)
	<div class="card">
		<div style="margin: 10px">
			<h3>{{ $item->title }}</h3>
			<p>{{ $item->penulis }}</p>
			<h5>{{ $item->tanggal }}</h5>
			<?php 
				$kontenFull = $item->konten;
				echo $kontenFull;
			?>
		</div>
	</div>
@endforeach

</div>
@endsection