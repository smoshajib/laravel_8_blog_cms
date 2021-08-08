<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Admin Panel')</title>

    @include('admin.layouts.section.style')
    @yield('style')
</head>

<body>
    <div id="wrapper">
        @include('admin.layouts.section.navbar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('admin.layouts.section.menubar')
        </div>
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
     
                @include('admin.layouts.section.footer')
        </div>

        
        @include('admin.layouts.section.rightsidebar')
    </div>


    @include('admin.layouts.section.script')
    
    @yield('script')

  
</body>
</html>
