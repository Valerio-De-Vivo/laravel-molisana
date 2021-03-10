<header>
    <img class="logo" src=" {{ asset('img/logo.png') }} " alt="logo">

    <ul>
        <li><a href=" {{ route('home') }} ">Home</a></li>
        <li><a href=" {{ route('prodotti') }} ">Prodotti</a></li>
        <li><a href="{{ route('news') }}">News</a></li>
    </ul>
</header>