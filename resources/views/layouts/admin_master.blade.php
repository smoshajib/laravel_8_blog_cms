<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Admin Panel')</title>

    @include('layouts.section.style')
    @yield('style')
</head>

<body>
    <div id="wrapper">
        @include('layouts.section.navbar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('layouts.section.menubar')
        </div>
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
     
                @include('layouts.section.footer')
        </div>

        
        @include('layouts.section.rightsidebar')
    </div>


    @include('layouts.section.script')
    @yield('script')

  
</body>
</html>
