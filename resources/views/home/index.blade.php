@extends('home.app')

@include('home.header')

@section('content')
<div class="wrap_index">
    <div class="wrap_index_okr">
        <section class="index_okr">
            <h2>登録したOKR一覧</h2>
            @foreach($okrs as $okr)
            @if($okr->master_flag == 1)
                <div class="index_list">
                    <a href=" {{ action('HomeController@show' , $okr->id )}} ">
                        <p class="margin_bottom">{{ $okr->objective }}</p>
                        <p>{{ $okr->key_result }}</p>
                    </a> 
                </div>
            @endif
            @endforeach
            <div class="add_okr_btn text_align_center">
                <a href=" {{ url('/Home/add') }} " class="button add_index_button">新しくOKRを追加</a>
            </div>
        </section>
    </div>

    <section class="okr_document">
        <article >
            <p><span>OBJECTIVE</span>（目標）は、シンプルで覚えやすい定性的なものを設定します</p>
            <p><span>KEY RESULT</span>（成果指標）は、数値化して測定し、定量的なものを設定します。</p>
            <p>OKR では、目標の <span>60～70% の達成率</span>かつ、</p>
            <p>自分の自身度が<span>10分の5の難易度</span>（自信度1は絶対できない、10は簡単にできる、5はベストを尽くせばできる）がちょうど良い設定です</p>
        </article>

        <article class="add_example">
            <p>例1</p>
            <h1>OBJECTIVE</h1>
            <p>東京で最も人気のラーメン屋を作る</p>
            <h1>KEY RESULT</h1>
            <p>月の売り上げ1500万達成</p>
        </article>
    </section>
</div>
@endsection
