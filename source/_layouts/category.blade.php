@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:image" content="/assets/img/stock-img.jpeg" />
@endpush

@section('body')
    <h1>{{ $page->title }}</h1>

    <div class="text-2xl border-b mb-6 pb-10">
        @yield('content')
    </div>

    <div class="mb-5">
        <a href="/articles" class="pb-5">&LeftArrow; Back to articles</a>
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach

@stop
