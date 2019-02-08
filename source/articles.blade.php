---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.blogs')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
    <meta property="og:image" content="/assets/img/stock-img.jpg" />
@endpush

@section('body')
    <div class="mb-20">
        <h1 class="heading">Articles</h1>

        <div class="md:w-4/5 mb-2 mt-6">
            @if ($categories)
                @foreach ($categories as $category)
                    <a
                        href="/blog/categories/{{ $category->title }}"
                        title="View posts in {{ $category }}"
                        class="mb-2 inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-zuzana-green hover:text-zuzana-green uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                    >{{ $category->title }}</a>
                @endforeach
            @endif
        </div>

        <hr class="border-b my-6">
    </div>
    

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6 md:w-4/5">
        @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-grey-lighter hover:bg-grey-light text-zuzana-greener rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-zuzana-green' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
