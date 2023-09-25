<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        Gaya untuk header
        header {
            background-color: darkorchid; 
            color: white;
            padding: 20px;
            text-align: center;
        }
    
        /* Gaya untuk navigasi */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }
    
        nav a {
            text-decoration: none;
            color: darkorchid; 
        }
    
        /* Gaya untuk konten utama */
        main {
            padding: 20px;
        }
    
        /* Gaya untuk footer */
        footer {
            background-color: darkorchid; 
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
    
</head>
<body>
    <header>
        <h1>Data Buku</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Buku</a></li>
            <li><a href="/kontak">Pengurus</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} perpustakaanbuku.co
    </footer>
</body>
</html>