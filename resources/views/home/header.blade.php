@section('header')

@if (Auth::check())
<header>
    <div class="wrap-header">
        @unless(\Request::is('/'))
        <div class="menu h-index">
            <a href=" {{ url('/') }} ">登録したOKR一覧</a>
        </div>
        @endunless
        <div class="menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @unless(\Request::is('Home/add'))
            <a href=" {{ url('/Home/add') }} ">新しくOKRを追加</a>
            @endunless

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</header>

@else
<header>
    <div class="menu">
        <a href="/login" >ログイン</a>
        <a href="/register">登録</a>
    </div>
</header>
@endif
@endsection
