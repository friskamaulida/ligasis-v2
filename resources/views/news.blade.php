@extends('layout.layout')
@section('content')

<section class="news-detail-header-section text-center">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h1 class="text-white">Berita Ligasis</h1>
            </div>
        </div>
    </div>
</section>

<section class="news-section section-padding">
    <div class="container">
        <div class="row">

            <!-- Daftar Berita -->
            <div class="col-lg-7 col-12">
                @forelse ($news as $item)
                    <div class="news-block mb-4">
                        <div class="news-block-top">
                            <a href="{{ route('news.detail', $item->slug) }}">
                                <img src="{{ asset('uploads/' . $item->thumbnail) }}" class="news-image img-fluid" alt="{{ $item->title }}">
                            </a>
                            <div class="news-category-block">
                                @foreach (explode(',', $item->category) as $category)
                                    <a href="#" class="category-block-link">{{ trim($category) }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="news-block-info">
                            <div class="d-flex mt-2">
                                <div class="news-block-date">
                                    <p><i class="bi-calendar4 custom-icon me-1"></i> {{ \Carbon\Carbon::parse($item->published_at)->format('F d, Y') }}</p>
                                </div>
                                <div class="news-block-author mx-5">
                                    <p><i class="bi-person custom-icon me-1"></i> By {{ $item->author ?? 'Admin' }}</p>
                                </div>
                            </div>

                            <div class="news-block-title mb-2">
                                <h4><a href="{{ route('news.detail', $item->slug) }}" class="news-block-title-link">{{ $item->title }}</a></h4>
                            </div>

                            <div class="news-block-body">
                                <p>{{ Str::limit(strip_tags($item->body), 150) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada berita ditemukan.</p>
                @endforelse

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $news->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
                <!-- Search -->
                <form class="custom-form search-form" method="GET" action="{{ route('news.index') }}">
                    <input class="form-control" name="search" type="search" placeholder="Search" value="{{ request('search') }}">
                    <button type="submit" class="form-control">
                        <i class="bi-search"></i>
                    </button>
                </form>

                <!-- Recent News -->
                <h5 class="mt-5 mb-3">Recent news</h5>
                @foreach ($recentNews as $item)
                    <div class="news-block news-block-two-col d-flex mt-4">
                        <div class="news-block-two-col-image-wrap">
                            <a href="{{ route('news.detail', $item->slug) }}">
                                <img src="{{ asset('uploads/' . $item->thumbnail) }}" class="news-image img-fluid" alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="news-block-two-col-info">
                            <div class="news-block-title mb-2">
                                <h6><a href="{{ route('news.detail', $item->slug) }}" class="news-block-title-link">{{ $item->title }}</a></h6>
                            </div>
                            <div class="news-block-date">
                                <p><i class="bi-calendar4 custom-icon me-1"></i> {{ \Carbon\Carbon::parse($item->published_at)->format('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Categories -->
                @if ($categories->count())
                <div class="category-block d-flex flex-column mt-5">
                    <h5 class="mb-3">Categories</h5>
                    @foreach ($categories as $category)
                        <a href="#" class="category-block-link">{{ $category }}</a>
                    @endforeach
                </div>
                @endif

                <!-- Tags -->
                @if ($tags)
                <div class="tags-block mt-5">
                    <h5 class="mb-3">Tags</h5>
                    @foreach ($tags as $tag)
                        <a href="#" class="tags-block-link">{{ $tag }}</a>
                    @endforeach
                </div>
                @endif

                <!-- Newsletter -->
                <form class="custom-form subscribe-form mt-5" action="#" method="post">
                    <h5 class="mb-4">Newsletter Form</h5>
                    <input type="email" name="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>
                    <div class="col-lg-12 col-12 mt-2">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
