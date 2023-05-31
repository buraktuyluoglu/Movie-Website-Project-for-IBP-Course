<!-- header nav -->
<ul class="header__nav">
    <!-- dropdown -->
    <li class="header__nav-item">
        <a class="header__nav-link" href="{{route('home.index')}}" role="button">Home</a>
    </li>
    <li class="header__nav-item">
        <a class="header__nav-link" href="{{route('home.category.index')}}" role="button">Categories</a>
    </li>
    <li class="header__nav-item">
        <a class="header__nav-link" href="{{route('home.about')}}" role="button">About</a>
    </li>
    <li class="header__nav-item">
        <a class="header__nav-link" href="{{route('home.contact')}}" role="button">Contact Us</a>
    </li>
    <!-- end dropdown -->

    <!-- dropdown -->
    <li class="header__nav-item">
        <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

        <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
            <li><a href="catalog1.html">Catalog Grid</a></li>
            <li><a href="catalog2.html">Catalog List</a></li>
            <li><a href="details1.html">Details Movie</a></li>
            <li><a href="details2.html">Details TV Series</a></li>
        </ul>
    </li>
    <!-- end dropdown -->

    <li class="header__nav-item">
        <a href="pricing.html" class="header__nav-link">Pricing Plan</a>
    </li>

    <li class="header__nav-item">
        <a href="faq.html" class="header__nav-link">Help</a>
    </li>

    <!-- dropdown -->
    <li class="dropdown header__nav-item">
        <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

        <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
            <li><a href="about.html">About</a></li>
            <li><a href="signin.html">Sign In</a></li>
            <li><a href="signup.html">Sign Up</a></li>
            <li><a href="404.html">404 Page</a></li>
        </ul>
    </li>
    <!-- end dropdown -->
</ul>
<!-- end header nav -->
