@extends('layout.layout')
@section('content')

<section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="{{ asset('storage/' . $data->foto) }}" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="{{ $data->nama_kepala_sekolah }}">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h3 class="mb-0">{{ $data->nama_kepala_sekolah }}, {{ $data->gelar }}</h3>

                    <p class="text-muted mb-lg-4 mb-md-4">{{ $data->jabatan }}</p>

                    <p>{!! nl2br($data->sambutan) !!}</p>

                    <ul class="social-icon mt-4">
                        @if($data->twitter)
                        <li class="social-icon-item">
                            <a href="{{ $data->twitter }}" class="social-icon-link bi-twitter" target="_blank"></a>
                        </li>
                        @endif

                        @if($data->facebook)
                        <li class="social-icon-item">
                            <a href="{{ $data->facebook }}" class="social-icon-link bi-facebook" target="_blank"></a>
                        </li>
                        @endif

                        @if($data->instagram)
                        <li class="social-icon-item">
                            <a href="{{ $data->instagram }}" class="social-icon-link bi-instagram" target="_blank"></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
