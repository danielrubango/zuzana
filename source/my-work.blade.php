@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="My work {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')


<div class="md:w-2/3 mb-20">
    <h1 class="heading">Approach</h1>
    <p class="mb-6">I’ve worked in-house and remotely on projects for digital, creative and marketing agencies. I care deeply about creating websites that are useful, beautiful and accessible; user experience and web accessibility are simply central to everything I do.</p>
    <p class="mb-6">I like to be involved at different stages of a digital project, from the seed of the idea, through to planning, design, development, deployment and maintanance. As a freelancer, this means I can join the project at any stage, or take on the whole project, from design to build.</p>
</div>

<div class="float-right md:w-2/3 bg-blue-lightest pl-8 py-6">
    <h2 class="heading">Skills</h2>
    <p class="mb-6">I work with <a href="https://wordpress.org/">WordPress</a>, <a href="https://laravel.com/">Laravel</a> and various static site generators. I use <a href="https://www.figma.com/">Figma</a> to design websites and <a href="https://code.visualstudio.com/">Visual Studio Code</a> to develop them. This website is built using <a href="https://jigsaw.tighten.co/">Jigsaw</a>, a static site generator that utilises components from the Laravel framework for building static websites, and hosted on <a href="https://www.netlify.com/">Netlify</a> - an all-in-one platform that makes hosting static websites as well as other modern web projects incredibly easy. When I develop WordPress websites, I use <a href="https://local.getflywheel.com/">Local by Flywheel</a> as my local development environment. </p>
</div>

    
@endsection
