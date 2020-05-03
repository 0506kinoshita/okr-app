@extends('home.app')

@include('home.header')

@section('content')
<div class="okr">
    <section class="section_wrap">
        <h1 class="title">1</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="okr_set">
            @foreach($okrs as $okr)
            @if($okr->id == $id)
                <li>
                    <p class="content top_content">{{ $okr->objective }}</p>
                </li>

                <li class="key_result top_key_result">
                    <p class="content top_content">{{ $okr->key_result }}</p>
                </li>
                <div class="flex add_okr_son">
                    <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button">追加</a>
                    <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button">編集</a>
                    <form method="post" action="/Home/{{$okr->id}}">
                        {{ csrf_field() }}
                        <input type="submit" value="削除" class="button delete" onclick='return confirm("本当に削除しますか？");'>
                    </form>
                </div>
            @endif
            @endforeach
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">2</h1>
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="flex">
                @foreach($okrs as $okr)
                @if($okr->parent_id == $id)
                <li class="okr_set">
                    <p class="content second_content">{{ $okr->objective }}</p>
                    <p class="content second_content">{{ $okr->key_result }}</p>
                    <div class="flex add_okr_son">
                        <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button">追加</a>
                        <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button">編集</a>
                        <form method="post" action="/Home/{{$okr->id }}">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="button delete" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </div>
                </li>
                {{$parent = $okr->id}}
                @endif
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">3</h1>
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="flex">
                @foreach($okrs as $okr)
                @empty($parent)
                @else
                    @if($okr->parent_id == $parent)
                    <li class="okr_set">
                        <p class="content third_content">{{ $okr->objective }}</p>
                        <p class="content third_content">{{ $okr->key_result }}</p>
                        <div class="flex add_okr_son">
                            <a href=" {{ action('HomeController@edit' , $okr->id )}} " class="button">編集</a>
                            <form method="post" action="/Home/{{$okr->id}}">
                                {{ csrf_field() }}
                                <input type="submit" value="削除" class="button delete" onclick='return confirm("本当に削除しますか？");'>
                            </form>
                        </div>
                    </li>
                    @endif
                @endempty
                @endforeach
            </ul>
        </div>
    </section>
</div>

@endsection
