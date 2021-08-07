<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title',"Airshipt")</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{-- style section --}}
        @include('web.layouts.sections.style')
        {{-- style section --}}

        {{-- custom style --}}
            @yield('style')
        {{-- custom style --}}
  </head>
  <body>

                {{-- navbar section --}}
                @include('web.layouts.sections.navbar')
                {{-- navbar section --}}

                {{-- slider section --}}
                @include('web.layouts.sections.slider')
                {{-- slider section --}}

                {{-- custom page --}}
                @yield('main-content')
                {{-- custom page --}}


                {{-- app section --}}
                @include('web.layouts.sections.app')
                {{-- app section --}}

    
                {{-- about section --}}
                @include('web.layouts.sections.about')
                {{-- about section --}}
                    
                    
                {{-- work section --}}
                @include('web.layouts.sections.work')
                {{-- work section --}}
            
                {{-- testimonial section --}}
                @include('web.layouts.sections.testimonial')
                {{-- testimonial section --}}
            

                {{-- link section --}}
                @include('web.layouts.sections.link')
                {{-- link section --}}

        
                {{-- footer section --}}
                    @include('web.layouts.sections.footer')
                {{-- footer section --}}

        {{-- script section --}}
            @include('web.layouts.sections.script')
        {{-- script section --}}

        {{-- custom script --}}
        @yield('script')
        {{-- custom script--}}
  </body>
</html>
