@extends('home.app')

@include('home.header')

@section('content')
<section class="index_okr">
    <h2>登録したOKR一覧</h2>
    @foreach($okrs as $okr)
    @if($okr->master_flag == 1)
        <div class="index_list">
            <a href=" {{ action('HomeController@show' , $okr->id )}} " class="">
                <p class="margin_bottom">{{ $okr->objective }}</p>
                <p class="">{{ $okr->key_result }}</p>
            </a>
        </div>
    @endif
    @endforeach
    <div class="add_okr_btn">
        <a href=" {{ url('/Home/add') }} " class="button add_button">新しくOKRを追加する</a>
    </div>
</section>

@endsection
