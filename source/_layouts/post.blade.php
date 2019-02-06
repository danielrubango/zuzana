@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    <div class="w-4/5 mx-auto">
        @if ($page->cover_image)
            <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
        @endif

        <h1 class="mb-2">{{ $page->title }}</h1>

        <p class="text-grey-darker text-xl md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

        @if ($page->categories)
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="imb-2 inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-zuzana-green hover:text-zuzana-green uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                >{{ $category }}</a>
            @endforeach
        @endif

        <div class="border-b mb-10 pb-4" v-pre>
            @yield('content')
        </div>

        <p class="text-grey-dark">Would you like to comment or connect? I'm on <a href="https://www.twitter.com/zk433">Twitter!</a></p>

        <nav class="flex justify-between text-sm md:text-base">
            <div>
                @if ($next = $page->getNext())
                    <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                        &LeftArrow; {{ $next->title }}
                    </a>
                @endif
            </div>
    
            <div>
                @if ($previous = $page->getPrevious())
                    <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                        {{ $previous->title }} &RightArrow;
                    </a>
                @endif
            </div>
        </nav>
    </div>
    

    
@endsection
