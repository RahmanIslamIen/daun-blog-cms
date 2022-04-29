@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

            <a href="/" style="margin-bottom: 10px; text-decoration: none;">
                <i data-feather="chevron-left"></i>Kembali
            </a>

            <div class="card">
                <div class="card-header">
                    <h4>Masuk Panel Admin</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('masuk-panel') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">passcode</label>
                            <input type="text" name="passcode" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3" style="float: right;">
                            <button type="submit" class="btn btn-primary">Masuk Panel Admin</button>
                        </div>
                    </form>

                </div>
            </div>
        
    </div>
</div>

<script>
  feather.replace()
</script>

@endsection