<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','cms Panel')</title>

    @include('cms.layouts.section.style')
    @yield('style')
</head>

<body>
    <div id="wrapper">
        @include('cms.layouts.section.navbar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('cms.layouts.section.menubar')
        </div>
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
     
                @include('cms.layouts.section.footer')
        </div>

        
        @include('cms.layouts.section.rightsidebar')
    </div>


    @include('cms.layouts.section.script')
    
    @yield('script')

  
</body>
</html>
