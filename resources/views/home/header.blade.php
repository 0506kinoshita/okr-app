@section('header')

@if (Auth::check())
<header>
    <div class="wrap-header">
        <div class="menu h-index">
            @unless(\Request::is('/'))
                <a href=" {{ url('/') }} ">登録したOKR一覧</a>
            @endunless
        </div>
        <div class="menu-trigger" href="">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <p class="okrtoha">OKRとは</p>

        <div class="overlay"></div>
        <div class="menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @unless(\Request::is('Home/add'))
            <a href=" {{ url('/Home/add') }} " class="new_okr_btn">新しくOKRを追加</a>
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

<nav class="small_okr_document">
    <article class="small_okr_paragraph">
        <h1 class="OKRtoha">OKRとは</h1>
        <p><span>OBJECTIVE</span>（目標）は、シンプルで覚えやすい定性的なものを設定します</p><br>
        <p><span>KEY RESULT</span>（成果指標）は、数値化して測定し、定量的なものを設定します。</p><br>
        <p>OKR では、目標の <span>60～70% の達成率</span></p><br>
        <p>かつ、自分の自身度が<span>10分の5の難易度</span>（自信度1は絶対できない、10は簡単にできる、5はベストを尽くせばできる）がちょうど良い設定です</p>
    </article>

    <article>
        <p>例</p>
        <h2><span>OBJECTIVE</span></h2>
        <p>東京で最も人気のラーメン屋を作る</p>
        <h2><span>KEY RESULT</span></h2>
        <p>月の売り上げ1500万達成</p>
    </article>
</nav>

<script>
$('.menu-trigger').on('click',function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $('main').removeClass('open');
      $('nav').removeClass('open');
      $('.overlay').removeClass('open');
    } else {
      $(this).addClass('active');
      $('main').addClass('open');
      $('nav').addClass('open');
      $('.overlay').addClass('open');
    }
  });
  $('.overlay').on('click',function(){
    if($(this).hasClass('open')){
      $(this).removeClass('open');
      $('.menu-trigger').removeClass('active');
      $('main').removeClass('open');
      $('nav').removeClass('open');      
    }
  });
</script>
@endsection
