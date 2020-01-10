<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand abs" href="{{ route('product.home') }}">Тут было лого</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('cart') }}"><i class="fa fa-shopping-cart" area-hidden="true"></i>
                                Корзина<span class="sr-only">(current)</span>
                                <span class="badge" id="cnt">{{ Illuminate\Support\Facades\Session::has('cart')
                                    ? Illuminate\Support\Facades\Session::get('cart')->totalQty : ''
                                 }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>