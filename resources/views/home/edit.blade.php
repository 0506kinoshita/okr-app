<!-- 大もとのOKR作成画面 -->
@extends('home.app')

@include('home.header')

@section('content')
<div class="add_wrap">
@foreach($okrs as $okr)
@if($id==$okr->id)
<div class="parent_infomation">
    <div class="exist_okr" id="exist_okr2">
        <h2>OBJECTIVE</h2>
        <p class="exist_okr_infomation">{{ $okr->objective }}</p>
        <h2>KEY RESULT</h2>
        <p>{{ $okr->key_result }}</p>
    </div>

    <form action="/Home/{id}/edit" method="post" class="add_infomation" id="edit_infomation">
        {{ csrf_field() }}
        <div>
            @foreach($okrs as $okr)
            @if($okr->id == $id)
            <input type="text" name="id" style="display:none;" value={{$okr->id}}>
            <h2>OBJECTIVE</h2>
            <p>*20文字以内</p>
                @if($errors->has('objective'))
                    <p>{{ $errors->first('objective') }}</p>
                @endif
            <input type="text" name="objective" value={{$okr->objective}}>
        </div>
        <div class="add_okr_contents">
            <h2>KEY RESULT</h2>
            <p>*20文字以内</p>
                @if($errors->has('key_result'))
                    <p>{{ $errors->first('key_result') }}</p>
                @endif
                <input type="text" name="key_result" value={{$okr->key_result}}>
            @endif
            @endforeach
        </div>
        <input type="submit" value="編集完了" class="button edit_button add_okr_btn">
    </form>
</div>
@endif
@endforeach

<div class="okr_document">
<article >
    <p><span>OBJECTIVE</span>（目標）は、シンプルで覚えやすい定性的なものを設定します</p>
    <p><span>KEY RESULT</span>（成果指標）は、数値化して測定し、定量的なものを設定します。</p>
    <p>OKR では、目標の <span>60～70% の達成率</span>かつ、</p>
    <p>自分の自身度が<span>10分の5の難易度</span>（自信度1は絶対できない、10は簡単にできる、5はベストを尽くせばできる）がちょうど良い設定です</p>
</article>

<article class="add_example">
    <p>例</p>
    <h1>OBJECTIVE</h1>
    <p>東京で最も人気のラーメン屋を作る</p>
    <h1>KEY RESULT</h1>
    <p>月の売り上げ1500万達成</p>
</article>
</div>
</div>

<script>
let edit_line = new LeaderLine(document.getElementById('exist_okr2'), document.getElementById('edit_infomation'));
edit_line.setOptions({
  startSocket: 'bottom',
  endSocket: 'top'
});
edit_line.color = '#ffa500';
edit_line.size = 8;
</script>
@endsection
