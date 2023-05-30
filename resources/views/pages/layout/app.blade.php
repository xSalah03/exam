<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1;
            background-color: #f8f0fa;
            padding-top: 3rem;
        }

        .content {
            margin-left: 150px;
            padding-top: 3rem;
        }

        .nav-link {
            color: #333;
        }

        .nav-link-white {
            color: #fefefe;
        }

        .nav-link-white:hover {
            color: #fefefe
        }

        .nav-linkactive {
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: var(--bs-nav-link-color);
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link{{ Request::routeIs('Index') ? 'active' : '' }}" href="{{ route('Index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ Request::routeIs('allEvents') ? 'active' : '' }}"
                    href="{{ route('allEvents') }}">List events</a>
            </li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    @include('flashy::message')
</body>

</html>
