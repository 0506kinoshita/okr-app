@extends('home.app')

@include('home.header')

@section('content')

    @if(Session::has('flash_message'))
        <p class="flash_massage">{{ session('flash_message') }}</p>
    @endif

<div class="okr">
    <section class="section_wrap">
        <h1 class="title">1</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            @foreach($okrs as $okr)
            @if($okr->id == $id)

            <div class="okr_set" id="start">
                <ul>
                    <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="okr_a">
                        <li>
                            <p class="content top_content">{{ $okr->objective }}</p>
                        </li>
                        <li class="key_result top_key_result">
                            <p class="content top_content">{{ $okr->key_result }}</p>
                        </li>
                    </a>
                </ul>

                <div class="flex add_okr_son">
                    <p style="display:none;">{{ $n = 0 }}</p>
                    @foreach($okrs2 as $okr2)
                        @if($id == $okr2->parent_id)
                            <p style="display:none;">{{ $n++ }}</p>
                        @endif
                    @endforeach

                    @if($n < 3)
                    <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button add_button">追加</a>
                    @else
                    @endif
                    <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button edit_button">編集</a>
                    <form method="post" action="/Home/{{$okr->id}}">
                    {{ csrf_field() }}
                        <input type="submit" value="削除" class="button delete_button" onclick='return confirm("本当に削除しますか？");'>
                    </form>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">2</h1>
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">

            <ul class="flex">
                @foreach($okrs as $okr)
                @if($okr->parent_id == $id)
                <li class="okr_set leaderline">
                    <div>
                    <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="okr_a">
                        <p class="content second_content">{{ $okr->objective }}</p>
                        <p class="content second_content">{{ $okr->key_result }}</p>
                    </a>
                    </div>
                    <div class="flex add_okr_son">
                        <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button add_button">追加</a>
                        <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button edit_button">編集</a>
                        <form method="post" action="/Home/{{$okr->id }}">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="button delete_button" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </div>
                </li>
                @endif
                @endforeach
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">3</h1>
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="flex">
                @foreach($okrs as $okr)
                @if($okr->parent_master_id == $id && $okr->class_number==3)
                    @foreach($okrs2 as $okr2)
                    @if($okr2->id == $okr->parent_id)
                <li class="okr_set second_leaderline">
                <div>
                    <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="okr_a">
                        <p class="content third_content">{{ $okr->objective }}</p>
                        <p class="content third_content">{{ $okr->key_result }}</p>
                    </a>
                </div>
                <div class="flex add_okr_son">
                        <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button edit_button">編集</a>
                        <form method="post" action="/Home/{{$okr->id}}">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="button delete_button" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                </div>
                </li>
                    @endif
                    @endforeach

                @endif
                @endforeach
            </ul>
        </div>
    </section>
</div>

<script>
$(function(){
    if($('#second_end2').length){
        $('.add_button').css('display','none');
    }
});
</script>

@endsection
