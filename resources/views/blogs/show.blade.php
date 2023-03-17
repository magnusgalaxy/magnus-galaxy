@extends('layouts.app')
@section('content')
<div class="pt-16 lg:pt-20">
    <div class="border-b border-grey-lighter pb-8 sm:pb-12">
        @foreach ($blog->categories as $category)
            <span class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8">{{ $category->name }}</span>
        @endforeach
        <h2 class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">{{ $blog->name }}</h2>
        <div class="flex items-center pt-5 sm:pt-8">
            <p class="pr-2 font-body font-light text-primary dark:text-white">{{ $blog->created_at }}</p>
        </div>
    </div>

    <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">
        {!! $blog->description !!}
    </div>

    {{-- Share Icons --}}
    <div class="flex items-center py-10">
        <span class="pr-5 font-body font-medium text-primary dark:text-white">Share</span>
        <a href="https://www.facebook.com/sharer.php?caption={{ $blog->name }}&u={{ url()->full() }}&picture={{ $blog->image }}" target="_blank">
            <i class="bx bxl-facebook text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
        </a>
        <a href="http://twitter.com/share?text={{ $blog->name }}&url={{ url()->full() }}" target="_blank">
            <i class="bx bxl-twitter pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}&title={{ $blog->name }}&source=magnusgalaxy.com" target="_blank">
            <i class="bx bxl-linkedin pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text={{ url()->full() }}" target="_blank">
            <i class="bx bxl-whatsapp pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
        </a>
    </div>
</div>
@endsection