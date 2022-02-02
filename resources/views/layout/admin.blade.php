<!doctype html>
<html lang="en">
    <head>
        @include('includes.meta')

        @stack('before-style')
        @include('admin.includes.styles')
        @stack('after-style')

        <title>Admin PMB Polihasnur</title>
    </head>
    <body id="body-pd" class="body-pd">
        <header>
            @include('admin.template.navbar')
        </header>
        @include('admin.template.sidebar')
        
        <div class="container-fluid">
            @yield('header')
            
            @yield('content')
        </div>

        @stack('before-script')
        @include('admin.includes.scripts')
        @stack('after-script')

    </body>
</html>