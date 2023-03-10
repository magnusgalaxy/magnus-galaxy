<footer class="flex flex-col items-center justify-between border-t border-grey-lighter py-10 sm:flex-row sm:py-12">
    <div class="mr-auto flex flex-col items-center sm:flex-row">
        <a href="{{ url('/') }}" class="mr-auto sm:mr-6">
            <img src="{{ asset('assets/site-images/logo.svg') }}" alt="logo" />
        </a>
        <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
            © <script>document.write(new Date().getFullYear())</script>
            {{ config('app.name', 'Magnus Galaxy') }}
        </p>
    </div>
    <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">
        <a href="https://github.com/magnusgalaxy " target="_blank">
            <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-github"></i>
        </a>
        <a href="https://stackoverflow.com/users/14359880/sahil-chahal " target="_blank">
            <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-stack-overflow"></i>
        </a>
        <a href="https://www.linkedin.com/in/sahil-chahal-2729b7217/ " target="_blank">
            <i class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-linkedin"></i>
        </a>
    </div>
</footer>