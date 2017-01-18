<!DOCTYPE html>
<html lang="es">
@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show
<!--
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
||
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
||
-->
<body class="skin-yellow sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')
    <div class="content-wrapper">
        <section class="content">
            @yield('main-content')
        </section>
    </div>
    @include('adminlte::layouts.partials.controlsidebar')
    @include('adminlte::layouts.partials.footer')
</div>
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show
</body>
</html>
