@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
    <meta property="og:image" content="/assets/img/stock-img.jpg" />
@endpush

@section('body')
<h1 class="heading">Contact</h1>

<div class="md:w-4/5 md:m-auto">
    <p class="mb-8">
        Do you have a question? Are you thinking about having your own website? Would you like to hire me? Send me an email and I'll get back to you!
    </p>

    <form method="post" action="/success" class="mt-20" data-netlify="true" netlify-honeypot="bot-field" name="jigsaw-form">
        <p class="hidden">
            <label>Don't fill this out if you're human: <input name="bot-field"></label>
        </p>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-grey-darkest text-sm font-semibold" for="contact-name">
                    Name
                </label>

                <input
                    type="text"
                    id="contact-name"
                    placeholder="Your name"
                    name="name"
                    class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                    required
                >
            </div>

            <div class="w-full px-3 md:w-1/2">
                <label class="block text-grey-darkest text-sm font-semibold mb-2" for="contact-email">
                    Email Address
                </label>

                <input
                    type="email"
                    id="contact-email"
                    placeholder="Your email"
                    name="email"
                    class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                    required
                >
            </div>
        </div>

        <div class="w-full mb-12">
            <label class="block text-grey-darkest text-sm font-semibold mb-2" for="contact-message">
                Message
            </label>

            <textarea
                id="contact-message"
                rows="4"
                name="message"
                class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-6"
                placeholder="Your message"
                required
            ></textarea>
        </div>

        <div class="flex justify-end w-full">
            <input
                type="submit"
                value="Send"
                class="block bg-zuzana-green hover:bg-zuzana-green-darker rounded text-white text-sm font-semibold tracking-wide uppercase shadow rounded-lg cursor-pointer px-7 py-5 mx-auto mb-12 w-2/5"
            >
        </div>
    </form>
</div>


@stop
