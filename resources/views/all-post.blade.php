@extends('layouts.app')

@section('content')
<div class="container">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.cloudways.com/blog/wp-content/uploads/Laravel-9.jpg" class="d-block w-100 kustom_carousel" height="290" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Informasi terbaru soal teknologi</h5>
        <p>semua kabar tentang teknologi terbaru</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.cloudways.com/blog/wp-content/uploads/Laravel-9.jpg" class="d-block w-100 kustom_carousel" height="290" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Perkembangan pendidikan</h5>
        <p>semua perubahan dan kebijakan baru sepeutar dunia pendidikan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.cloudways.com/blog/wp-content/uploads/Laravel-9.jpg" class="d-block w-100 kustom_carousel" height="290" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Life and psychology</h5>
        <p>semua saran serta tips and trick berkaitan dengan psikologi dan gaya hidup</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@foreach ($posts as $item)
	<div class="card" style="margin: 10px;">
		<div class="card-body">
			<h3 class="card-title">{{ $item->title }}</h3>
      <span class="badge rounded-pill bg-success">{{ $item->kategori }}</span>
			<p>{{ $item->penulis }}</p>
			<h5>{{ $item->tanggal }}</h5>
			<p class="card-text">{{ $item->excerpt }}</p>
			<a href="/post/{{ $item->id }}">Lihat artikel...</a>
		</div>
	</div>
@endforeach

</div>
@endsection