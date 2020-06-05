@extends('home.app')

@include('home.header')

@section('content')
<div class="add_wrap">
<div>
    <form action="/Home/add" method="post" class="add_infomation">
        {{ csrf_field() }}
        <div class="detail_wrap">
            <div>
                <h2>OBJECTIVE</h2>
                    <p>*20文字以内</p>
                    @if($errors->has('objective'))
                    <p>{{ $errors->first('objective') }}</p>
                    @endif
                <input type="text" name="objective" value="{{old('objective')}}">
            </div>
            <div class="add_okr_contents">
                <h2>KEY RESULT</h2>
                <p>*20文字以内</p>
                    @if($errors->has('key_result'))
                        <p>{{ $errors->first('key_result') }}</p>
                    @endif
                <input type="text" name="key_result" value="{{old('key_result')}}">
            </div>

            <input type="text" style="display:none;" name="class_number" value=1>
            <input type="text" style="display:none;" name="person_id" value={{ $user_id }}>
            <input type="submit" value="OKRを設定" class="button add_button add_okr_btn">
            </div>
        </div>
        <div class="detail-area">
            <p>*200文字以内</p>
            @if($errors->has('detail'))
                <p>{{ $errors->first('detail') }}</p>
            @endif
            <textarea name="detail" rows="18" cols="40" placeholder="詳細"></textarea>
        </div>
    </form>
</div>
</div>
@endsection
