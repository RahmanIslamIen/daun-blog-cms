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

<div style="margin: 15px">
	<u><h5>Komentar</h5></u> 
	<div>
		<b>Nama Orang</b> |
		<i>reaksi</i>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

</div>

<script>
  feather.replace()
</script>
@endsection