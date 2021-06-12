<!DOCTYPE html>
<html lang="en">
@include('theme_layout.head')

<body id="page-top" class="home">

<div id="page-wrap">
    @include('theme_layout.header')
    @section('content')
        @show

    @include('theme_layout.footer')
</div>
    
@include('theme_layout.scripts')

</body>
</html>

