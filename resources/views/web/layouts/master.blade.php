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
                @yield('after_nav')
                {{-- slider section --}}

                {{-- custom page --}}
                @yield('body-content')
                {{-- custom page --}}


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
