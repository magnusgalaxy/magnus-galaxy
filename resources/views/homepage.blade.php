@extends('layouts.app')
@section('content')
<div class="border-b border-grey-lighter py-16 lg:py-20">
    <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-3xl lg:text-3xl">Welcome to the {{ config('app.name', 'Magnus Galaxy') }}</h1>
    <p class="pt-3 font-body text-xl font-light text-primary dark:text-white">
        Stay up-to-date with the latest trends and best practices in technology, and take your skills to the next level with our informative and engaging content.
    </p>
    <a href="{{ route('contact') }}"class="mt-12 block bg-secondary px-10 py-4 text-center font-body text-xl font-semibold text-white transition-colors hover:bg-green sm:inline-block sm:text-left sm:text-2xl">
      Say Hello!
    </a>
</div>

<div class="py-16 lg:py-20">
    <div class="flex items-center pb-6">
        <img src="{{ asset('assets/site-images/icon-story.png') }}" alt="icon story" />
        <h3  class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">Recent Blogs</h3>
        <a href="{{ url('/blogs') }}" class="flex items-center pl-10 font-body italic text-green transition-colors hover:text-secondary dark:text-green-light dark:hover:text-secondary">
            All posts <img src="{{ asset('assets/site-images/long-arrow-right.png') }}" class="ml-3" alt="arrow right"/>
        </a>
    </div>
    <div class="pt-8">
        @foreach ($recentBlogs as $blog)
            <div class="{{ !$loop->last ? 'border-b pb-8' : '' }} border-grey-lighter  {{ !$loop->first ? 'pt-10' : '' }}">
                @foreach ($blog->categories as $category)
                    <span class="mb-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">{{ $category->name }}</span>
                @endforeach

                <a href="{{ url('/blogs/'.$blog->slug) }}" class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">
                    {{ $blog->name }}
                </a>
                    
                <div class="flex items-center pt-4">
                    <p class="pr-2 font-body font-light text-primary dark:text-white">
                        {{ $blog->created_at }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection