<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    @include('includes.auth_menu')
</nav>

<div id="main" class="row">
        @yield('content')

</div>

</body>
</html>
