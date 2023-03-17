@extends('layouts.app')
@section('content')
<div class="py-16 lg:py-20">
    <div>
      <img src="{{ asset('assets/site-images/icon-blog.png') }}" alt="icon envelope" />
    </div>

    <h1
      class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl"
    >
      Blog
    </h1>

    <div class="pt-3 sm:w-3/4">
      <p class="font-body text-xl font-light text-primary dark:text-white">
        Articles, tutorials, snippets, rants, and everything else. Subscribe for
        updates as they happen.
      </p>
    </div>

    <div class="pt-8 lg:pt-12">
      @foreach ($blogs as $blog)
              <div class="border-b border-grey-lighter pt-10 pb-8">
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

    <div class="flex pt-8 lg:pt-16">
      <span
        class="cursor-pointer border-2 border-secondary px-3 py-1 font-body font-medium text-secondary"
        >1</span
      >
      <span
        class="ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
        >2</span
      >
      <span
        class="ml-3 cursor-pointer border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
        >3</span
      >
      <span
        class="group ml-3 flex cursor-pointer items-center border-2 border-primary px-3 py-1 font-body font-medium text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary"
        >Next
        <i
          class="bx bx-right-arrow-alt ml-1 text-primary transition-colors group-hover:text-secondary dark:text-white"
        ></i
      ></span>
    </div>
  </div>
@endsection