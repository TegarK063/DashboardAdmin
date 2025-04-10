<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page ?? 'Jastru' }}</title>
    {{-- Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pekerjaan.css') }}">
</head>

<body>
    <nav class="sidebar-company close">
        <header class="sidebar-header">
            <div class="image-text">
                <span class="images"><img src="{{ asset('assets/img/icons/jastruicons.svg') }}"
                        alt="Logo Jastru"></span>
                <div class="text text-header">
                    <span class="name-company">Jastru</span>
                </div>
            </div>
            <i class='bx bxs-right-arrow toggle'></i>
        </header>
        <div class="side-menu">
            <div class="menu-menus">
                <li class="nav-title">
                    <p class="title-menus">Pages</p>
                </li>
                <ul class="menu-links">
                    <li class="links-navs {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">
                            <i class='bx bxs-dashboard icone'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="links-navs {{ request()->is('product*') ? 'active' : '' }}">
                        <a href="{{ url('product') }}">
                            <i class='bx bxs-box icone'></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>
                    <li class="links-navs">
                        <a href="#">
                            <i class='bx bxs-wrench icone'></i>
                            <span class="text nav-text">Services</span>
                        </a>
                    </li>
                    <li class="links-navs">
                        <a href="#">
                            <i class='bx bxs-bullseye icone'></i>
                            <span class="text nav-text">Mission</span>
                        </a>
                    </li>
                    <li class="links-navs {{ request()->is('jobs') ? 'active' : '' }}">
                        <a href="{{ url('jobs') }}">
                            <i class='bx bxs-briefcase icone'></i>
                            <span class="text nav-text">Jobs</span>
                        </a>
                    </li>
                    <li class="links-navs">
                        <a href="#">
                            <i class='bx bx-money icone'></i>
                            <span class="text nav-text">Transaction</span>
                        </a>
                    </li>
                    <li class="links-navs">
                        <a href="#">
                            <i class='bx bxs-wallet icone'></i>
                            <span class="text nav-text">Wallet</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="links-navs">
                    <a href="#">
                        <i class='bx bxs-log-out icone'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bxs-moon icone moon'></i>
                        <i class='bx bxs-sun icone sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="container-company">
        <div class="container-main">
            @yield('content')
        </div>
    </section>

    <script>
    const body = document.querySelector('body');
    const sidebar = body.querySelector('.sidebar-company');
    const toggle = body.querySelector('.toggle');
    const modeSwitch = body.querySelector('.toggle-switch');
    const modeText = body.querySelector('.mode-text');

    // Load saved sidebar state from localStorage
    if (localStorage.getItem("sidebarClosed") === "true") {
        sidebar.classList.add("close");
    } else {
        sidebar.classList.remove("close");
    }

    // Sidebar toggle
    toggle.addEventListener('click', () => {
        sidebar.classList.toggle('close');
        // Save sidebar state to localStorage
        localStorage.setItem("sidebarClosed", sidebar.classList.contains("close"));
    });

    // Dark mode toggle
    modeSwitch.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        if (body.classList.contains('dark-mode')) {
            modeText.innerText = 'Light Mode';
        } else {
            modeText.innerText = 'Dark Mode';
        }
    });
</script>

</body>

</html>
