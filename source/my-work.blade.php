@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="My work {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
    <meta property="og:image" content="/assets/img/stock-img.jpeg" />
@endpush

@section('body')


<div class="md:w-2/3 mb-20">
    <h1 class="heading">Approach</h1>
    <p class="mb-6">I’ve worked in-house and remotely on projects for digital, creative and marketing agencies. I care deeply about creating websites that are useful, beautiful and accessible; user experience and web accessibility are simply central to everything I do.</p>
    <p class="mb-6">I like to be involved at different stages of a digital project, from the seed of the idea, through to planning, design, development, deployment and maintanance. As a freelancer, this means I can join the project at any stage, or take on the whole project, from design to build.</p>
</div>

<div class="md:float-right md:w-2/3 bg-blue-lightest px-1 md:px-8 py-6 mb-20" data-aos="fade-up">
    <h2 class="heading">Skills</h2>
    <p class="mb-6">I use HTML, CSS, JavaScript and PHP to develop responsive websites and web applications.</p>
    <p class="mb-6">When collaborating with clients, I often work with <a href="https://wordpress.org/">WordPress</a>, <a href="https://laravel.com/">Laravel</a> or various static site generators.  Different clients have different experience and skills to bring to managing websites and we work together to choose the right tool for them. I use <a href="https://www.figma.com/">Figma</a> to design websites and <a href="https://code.visualstudio.com/">Visual Studio Code</a> to develop them. When I develop WordPress websites, I use <a href="https://local.getflywheel.com/">Local by Flywheel</a> as my local development environment.</p>
    <p class="mb-6">This website is built using <a href="https://jigsaw.tighten.co/">Jigsaw</a>, a static site generator that utilises components from the Laravel framework for building static websites, and hosted on <a href="https://www.netlify.com/">Netlify</a>, an all-in-one platform that makes hosting static websites as well as other modern web projects incredibly easy.  </p>
</div>

<div class="clearfix"></div>

<div class="mb-20" data-aos="fade-up">
    <h1 class="heading">Clients</h1>
    <div class="mt-8 md:mt-20">
        <div class="flex flex-wrap justify-between">
            <div class="w-full sm:w-1/2 md:w-1/3 -mx-5 px-5">
                <a href="https://www.freecodecamp.org/">
                    <img src="/assets/img/freecodecamp.jpg" class="mt-2 mb-20">
                </a>
            </div>

            <div class="w-full sm:w-1/2 md:w-1/3 -mx-5 px-5">
                <a href="https://www.kabocreative.com/">
                    <img src="/assets/img/kabo.png" class="mx-5 mb-20">
                </a>
            </div>

            <div class="w-full sm:w-1/2 md:w-1/3 -mx-5 px-5">
                <a href="https://oaktreestudio.co.uk/">
                    <img src="/assets/img/oaktreestudio.png" class="mt-2 mb-20">
                </a>
            </div>

        </div>
    </div>
</div>

    
@endsection
