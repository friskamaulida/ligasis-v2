@extends('layout.layout')
@section('content')

<section class="news-detail-header-section text-center">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h1 class="text-white">{{ $news->title }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="news-detail-section section-padding">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Konten Berita -->
            <div class="col-lg-8 col-12">
                <div class="news-block">
                    <div class="news-block-top mb-4">
                        <img src="{{ asset('uploads/' . $news->thumbnail) }}" class="news-image img-fluid" alt="{{ $news->title }}">
                        <div class="news-category-block mt-2">
                            @foreach (explode(',', $news->category) as $category)
                                <a href="#" class="category-block-link">{{ trim($category) }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="news-block-info">
                        <div class="d-flex mb-3">
                            <div class="news-block-date">
                                <p><i class="bi-calendar4 custom-icon me-1"></i> {{ \Carbon\Carbon::parse($news->published_at)->format('F d, Y') }}</p>
                            </div>
                            <div class="news-block-author mx-5">
                                <p><i class="bi-person custom-icon me-1"></i> By {{ $news->author ?? 'Admin' }}</p>
                            </div>
                        </div>

                        <div class="news-block-body">
                            {!! $news->body !!}
                        </div>
                    </div>

                    @if ($news->tags)
                    <div class="mt-4">
                        <strong>Tags:</strong>
                        @foreach (explode(',', $news->tags) as $tag)
                            <span class="badge bg-secondary">{{ trim($tag) }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
