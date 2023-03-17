@extends('layouts.app')
@section('content')
<div class="py-16 lg:py-20">
  <div>
      <img src="{{ asset('assets/site-images/icon-blog.png') }}" alt="icon envelope" />
  </div>

  <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">Blogs</h1>
  <div class="pt-3 sm:w-3/4">
      <p class="font-body text-xl font-light text-primary dark:text-white">
            Articles, tutorials, snippets, rants, and everything else. Subscribe for updates as they happen.
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

  {{ $blogs->links() }}
</div>
@endsection