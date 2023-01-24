<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info ms-5 me-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manage.student') }}">Manage Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.section') }}">Add Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.department') }}">Add Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Manage Department</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


<div class="mt-5 p-4 bg-primary text-white text-center">
    <script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
    <p>Footer</p>
  </div>
</body>
</html>
