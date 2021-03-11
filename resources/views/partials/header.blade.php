<header>
    <img class="logo" src=" {{ asset('img/logo.png') }} " alt="logo">

    <ul>
        <li class=" {{ (Request::route()->getName() == 'home') ? 'active' : '' }} " ><a href=" {{ route('home') }} ">Home</a></li>
        <li class=" {{ (Request::route()->getName() == 'prodotti') ? 'active' : '' }} " ><a href=" {{ route('prodotti') }} ">Prodotti</a></li>
        <li class=" {{ (Request::route()->getName() == 'news') ? 'active' : '' }} " ><a href="{{ route('news') }}">News</a></li>
    </ul>

    
</header>