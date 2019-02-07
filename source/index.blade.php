@extends('_layouts.master')

@section('body')

    <h1 class="heading">Welcome</h1>
    <div class="md:w-2/3 md:mx-auto">
        <p class="mb-6">My name is Zuzana and I am a UK based web designer and developer with background in psychology. My knowledge and love for psychology helps me create beautiful and functional websites buit with usability and accessibility in mind. </p>

        <p class="mb-6">I offer a range of services, from the initial design to the development of a responsive, accessible and user-friendly website. I also consult on web accessibility issues and I am available for public speaking about responsive and accessible web design, and about the accessibility principles in general.</p>

        <p class="mb-12">Whether you are looking to redesign and upgrade your current website, create a new one or are looking for a longer-term collaboration, get in touch!</p>

        <a href="/contact" class="text-center block bg-zuzana-green hover:bg-zuzana-green-darker hover:text-white rounded text-white text-sm font-semibold tracking-wide uppercase shadow cursor-pointer px-7 py-5 w-2/3  mx-auto mb-12 md:w-2/5">Contact me</a>
    </div>

    <div class="w-full mb-16">
        <img src="/assets/img/stock-img.jpeg" alt="person's hand on silver MacBook">
    </div>
    
    <h2 class="heading">Testimonials</h2>
    <div id="testimonials" class="flex flex-col md:flex-row md:-mx-6 mb-24">
        <div class="w-full md:w-1/2 md:mx-6">
            <blockquote>Zuzana helped design freeCodeCamp's new user profile and settings pages. She has been a valuable contributor, reliable and responsible, and able to iterate on new design ideas. Working with her has been a pleasure. Zuzana would be a great asset to any team.</blockquote>
            <cite>Quincy Larson, Teachr and Founder of <a href="https://www.freecodecamp.org">freeCodeCamp.org</a></cite>
        </div>

        <div class="w-full md:w-1/2 md:mx-6">
            <blockquote>Zuzana is one of the most determined and self-directed people I know and this comes across in her approach to her work: detail conscious, conscientious, thorough. Her deep understanding of psychological principles makes a real difference - you'll get a full understanding of user experience, psychological aspects of website design and accessibility issues as well as all-round coding and technical skills.</blockquote>
            <cite>Elisabeth Klaar of <a href="https://oaktreestudio.co.uk">Oak Tree Studio</a></cite>
        </div>
    </div>
@stop
