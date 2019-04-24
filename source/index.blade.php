@extends('_layouts.master')

@section('body')

    <h1 class="heading">Welcome</h1>
    <div class="md:w-2/3 md:mx-auto">
        <p class="mb-6">My name is Zuzana and I am a UK based web designer and developer with background in psychology. My knowledge and love for psychology helps me create beautiful and functional websites built with usability and accessibility in mind. </p>

        <p class="mb-6 bg-blue-lightest py-3 text-center">Read the story and watch the video about my journey to becoming a web developer on <a href="https://www.blog.google/outreach-initiatives/grow-with-google/udacity-nanodegree/" target="_blank">Google's blog.</a></p>
        <p class="mb-6">I offer a range of services, from the initial design to the development of a responsive, accessible and user-friendly website. I also consult on web accessibility issues and I am available for public speaking about responsive and accessible web design, and about the accessibility principles in general.</p>

        <p class="mb-12 ">Whether you are looking to redesign and upgrade your current website, create a new one or are looking for a longer-term collaboration, get in touch!</p>

        <a href="/contact" class="text-center block bg-zuzana-green hover:bg-zuzana-green-darker hover:text-white rounded text-white text-sm font-semibold tracking-wide uppercase shadow cursor-pointer px-7 py-5 w-2/3  mx-auto mb-12 md:w-2/5">Contact me</a>
    </div>

    <div class="w-full mb-16 " data-aos="fade-up">
        <img src="/assets/img/stock-img.jpeg" alt="person's hand on silver MacBook">
    </div>
    
    <div data-aos="fade-up">
        <h2 class="heading">Testimonials</h2>

        <div class="md:w-2/3 mb-10" data-aos="fade-up">
            <blockquote>Zuzana helped design freeCodeCamp's new user profile and settings pages. She has been a valuable contributor, reliable and responsible, and able to iterate on new design ideas. Working with her has been a pleasure. Zuzana would be a great asset to any team.</blockquote>
            <cite>Quincy Larson, Teacher and Founder of <a href="https://www.freecodecamp.org" target="_blank">freeCodeCamp.org</a></cite>
        </div>

        <div class="md:float-right md:w-2/3 bg-blue-lightest px-1 md:px-8 pt-3 pb-6 mb-10" data-aos="fade-up">
            <blockquote>Zuzana is one of the most determined and self-directed people I know and this comes across in her approach to her work: detail conscious, conscientious, thorough. Her deep understanding of psychological principles makes a real difference - you'll get a full understanding of user experience, psychological aspects of website design and accessibility issues as well as all-round coding and technical skills.</blockquote>
            <cite class="pl-1 md:pl-0">Elisabeth Klaar of <a href="https://oaktreestudio.co.uk" target="_blank">Oak Tree Studio</a></cite>
        </div>

        <div class="md:float-left md:w-2/3 mb-20 " data-aos="fade-up">
            <blockquote>As our agency grows we are constantly searching for reliable partners to help us service the growing needs of our customers. Zuzana has proven to be just that developer. We find her incredibly useful when we need to outsource part of the WordPress website development process, or look to add in custom functionality on a project. Zuzana is professional and good at what she does, but she's also lovely to communicate with. We trust her to complete projects on spec and on time, and we will continue to outsource to her as we grow further.</blockquote>
            <cite>Penni Pickering of <a href="https://www.kabocreative.com" target="_blank">Kabo Creative Limited</a></cite>
        </div>
    </div>
@stop
