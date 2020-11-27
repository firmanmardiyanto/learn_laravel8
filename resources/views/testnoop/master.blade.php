<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Laravel 8</title>
    </head>
    <body>
        <header>
            <h2>Blog Fmardiyanto
            </h2>
            <nav>
                <a href="/blog">HOME</a>|
                <a href="/blog/tentang">TENTANG</a>|
                <a href="/blog/kontak">KONTAK</a>
            </nav>
        </header>
        <hr/>
        <br/>
        <br/>
        <!-- bagian judul -->
        <h3>@yield('judul_halaman')</h3>

        <!-- bagian konten -->
        @yield('konten')
        <br/>
        <br/>
        <hr/>
        <footer>
            <p>&copy; <a href="http://www.github.com/firmanmardiyanto">github.com/firmanmardiyanto</a>. 2020</p>
        </footer>
    </body>
</html>
