<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.components.default.head')
    <body class="u-custombox-no-scroll">
        @include('layouts.components.default.header')
        <main id="content" role="main">
            @yield('content')
        </main>
        @include('layouts.components.default.footer')
        @if(!auth()->user())
        @include('layouts.components.default.aside-auth')
        @else
        @include('layouts.components.default.aside-user')
        @endif
        @include('layouts.components.default.scripts')
    </body>
</html>
