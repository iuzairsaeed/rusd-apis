<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RUSD Investment Planner</title>
         @section('header')
            @include('layouts.header')
         @show
    </head>
    <body>
       

            <!-- content -->
            @yield('content')

        {{--  footer --}}
        @section('footer')
            @include('layouts.footer')
        @show


        {{--  load scripts --}}
        @yield('scripts')

    </body>
</html>