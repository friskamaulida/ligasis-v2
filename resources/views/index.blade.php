@extends('/layout/layout')
@section('content')
<style>
  .modern-marquee {
    position: relative;
    width: 100%;
    overflow: hidden;
    background: linear-gradient(to right, #f9f9f9, #ffffff);
    padding: 12px 0;
    border-top: 2px solid #eee;
    border-bottom: 2px solid #eee;
    font-family: 'Poppins', sans-serif;
  }

  .text-content {
    display: inline-block;
    white-space: nowrap;
    color: #333;
    font-size: 2rem;
    font-weight: 500;
    padding-left: 100%;
    animation: scroll-left 20s linear infinite;
  }

  @keyframes scroll-left {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }
</style>
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($banners as $index => $banner)
                            <div class="carousel-item @if($index == 0) active @endif">
                                <img src="{{ asset('uploads/' . $banner->image) }}" class="carousel-image img-fluid" alt="Banner {{ $index + 1 }}">
                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>{{ $banner->title }}</h1>
                                    <p>{{ $banner->subtitle }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modern-marquee">
  <span class="text-content">
    🌟 {{ $datafe->running_text }}
  </span>
</div>

            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Selamat Datang Di Website SDN 1 Linggasari</h2>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/news" class="d-block">
                                    <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"> <strong>Tugas </strong>E-Learning</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/ppdb" class="d-block">
                                    <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Berita<strong>Ligasis</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/maintenance" class="d-block">
                                    <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text">Program<strong>PPDB</strong></p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="/ligasis" class="d-block">
                                    <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                    <p class="featured-block-text"><strong>Login</strong> Akun</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="{{ asset('uploads/' . $tentang->foto) }}" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="{{ $tentang->nama_kepala_sekolah }}">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h3 class="mb-0">{{ $tentang->nama_kepala_sekolah }}, {{ $tentang->gelar }}</h3>

                    <p class="text-muted mb-lg-4 mb-md-4">{{ $tentang->jabatan }}</p>

                    <p>{!! nl2br($tentang->sambutan) !!}</p>

                    <ul class="social-icon mt-4">
                        @if($tentang->twitter)
                        <li class="social-icon-item">
                            <a href="{{ $tentang->twitter }}" class="social-icon-link bi-twitter" target="_blank"></a>
                        </li>
                        @endif

                        @if($tentang->facebook)
                        <li class="social-icon-item">
                            <a href="{{ $tentang->facebook }}" class="social-icon-link bi-facebook" target="_blank"></a>
                        </li>
                        @endif

                        @if($tentang->instagram)
                        <li class="social-icon-item">
                            <a href="{{ $tentang->instagram }}" class="social-icon-link bi-instagram" target="_blank"></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


            <section class="news-section section-padding bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center">
                <h2>Berita Terbaru</h2>
                <p>Informasi terkini dari SDN 1 Linggasari</p>
            </div>
        </div>

        <div class="row">
            @foreach($latestNews as $news)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="news-block">
                        <div class="news-block-top">
                            <a href="{{ route('news.detail', $news->slug) }}">
                                <img src="{{ asset('uploads/' . $news->thumbnail) }}" class="news-image img-fluid" alt="{{ $news->title }}">
                            </a>
                            <div class="news-category-block">
                                @foreach (explode(',', $news->category) as $cat)
                                    <a href="#" class="category-block-link">{{ trim($cat) }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="news-block-info p-2">
                            <h5><a href="{{ route('news.detail', $news->slug) }}" class="news-block-title-link">
                                {{ $news->title }}
                            </a></h5>
                            <p class="text-muted small mb-1">
                                <i class="bi-calendar4 me-1"></i>
                                {{ \Carbon\Carbon::parse($news->published_at)->translatedFormat('d F Y') }}
                            </p>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($news->body), 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
    <a href="{{ route('news.index') }}" class="btn btn-outline-primary">
        Lihat Semua Berita
    </a>
</div>
</section>

<section class="about-section section-padding">
    <div class="container">
        <div class="row">
            <!-- VIDEO CAROUSEL -->
            <div class="col-lg-6 col-md-5 col-12">
                @if ($videos->count())
                <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($videos as $index => $video)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            @if (Str::contains($video->youtube_url, ['youtube.com', 'youtu.be']))
                                <iframe class="d-block w-100" height="315"
                                    src="{{ Str::replace('watch?v=', 'embed/', $video->youtube_url) }}"
                                    title="{{ $video->title }}"
                                    frameborder="0"
                                    allowfullscreen>
                                </iframe>
                            @else
                                <video class="d-block w-100" controls>
                                    <source src="{{ asset('uploads/videos/' . $video->youtube_url) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#videoCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#videoCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                @endif
            </div>

            <!-- INFORMASI YOUTUBE -->
            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0">
                        <a href="https://www.youtube.com/channel/UCpIMtBk3G2bw-dsFpf4lDcQ" target="_blank">
                            Video Informasi
                        </a>
                    </h2>
                    <p class="text-muted mb-lg-4 mb-md-4"></p>
                    <p>Moment kegiatan SDN 1 Linggasari tersimpan dalam kanal <strong>YouTube Satu Linggasari</strong>.</p>
                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="https://www.youtube.com/@sdn1linggasari" target="_blank" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
