<!-- header -->
<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="{{route('home.index')}}" class="header__logo">
                            <img src="{{asset('home')}}/img/logo.svg" alt="">
                        </a>
                        <!-- end header logo -->

                        @include('home._navbar')

                        <!-- header auth -->
                        <div class="header__auth">

                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                            @auth
                                <a href="{{route('profile.edit')}}"  class="header__profile">
                                    <i class="fa-solid fa-user" style="color: white !important;"></i>
                                </a>
                                <form action="{{ route('logout') }}" method="POST" class="header__profile" style="margin-top:15px;">
                                    @csrf
                                    <button  type="submit"> <i class="fas fa-sign-out-alt" style="color: white !important;"></i></button>
                                </form>

                            @else
                                <a href="{{route('login')}}" class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>sign in</span>
                                </a>
                            @endauth
                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
    @livewire('home-search')
    <!-- end header search -->
</header>
<!-- end header -->
