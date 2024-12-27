@extends('layouts.master')

@section('content')
<div class="container" style="position: relative;">
    <img src="assets/media/img/abc.png" style="width: 100%; height: auto;  position: absolute; top: 0; left: 0; z-index: -1;">
    <div class="row justify-content-center" style="position: relative; z-index: 1;">
        <div class="col-md-8">
        <br><br>
            <div class="card" style="opacity: 0.6; margin: auto;">
               
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = [
            'assets/media/img/abc.png',
            'assets/media/img/aab.jpg',
            'assets/media/img/abe.jpg'
        ];
        let currentIndex = 0;
        const container = document.querySelector('.container img');

        function changeBackground() {
            container.src = images[currentIndex];
            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeBackground, 5000); // Change image every 5 seconds
    });
</script>