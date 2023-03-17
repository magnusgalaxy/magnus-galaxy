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
@endsection