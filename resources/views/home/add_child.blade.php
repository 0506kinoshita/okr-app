<!-- 大もとのOKRから子要素（2階層目）のOKR作成画面 -->
@extends('home.app')

@include('home.header')

@section('content')
<div class="add_wrap">
@foreach($okrs as $okr)
@if($id==$okr->id)
<div class="parent_infomation">
    <div class="exist_okr" id="exist_okr">
        <h2>OBJECTIVE</h2>
        <p class="exist_okr_infomation">{{ $okr->objective }}</p>
        <h2>KEY RESULT</h2>
        <p>{{ $okr->key_result }}</p>
    </div>
    <form action="/Home/{id}/add_child" method="post" class="add_infomation" id="add_infomation">
        {{ csrf_field() }}
        <div class="right">
            <div>
                <h2>OBJECTIVE</h2>
                    <p>*20文字以内</p>
                    @if($errors->has('objective'))
                        <p>{{ $errors->first('objective') }}</p>
                    @endif
                <input type="text" name="objective">
            </div>
            <div class="add_okr_contents">
                <h2>KEY RESULT</h2>
                    <p>*20文字以内</p>
                    @if($errors->has('key_result'))
                        <p>{{ $errors->first('key_result') }}</p>
                    @endif
                <input type="text" name="key_result">
                <input type="text" style="display:none;" name="parent_id" value= {{$id}}>
                <input  type="text" style="display:none;" name="master_flag" value="0">
            </div>

            <input type="text" style="display:none;" name="class_number" value={{$okr->class_number + 1}}>
            <input type="text" style="display:none;" name="parent_master_id" value={{$okr->parent_id}}>
            <input type="submit" value="追加する" class="button add_button add_okr_btn">
        </div>
        <textarea name="detail" rows="4" cols="40"></textarea>

    </form>
</div>
@endif
@endforeach

</div>

<script>
let add_line = new LeaderLine(
  document.getElementById('exist_okr'),
  document.getElementById('add_infomation'),
);
add_line.setOptions({startSocket: 'bottom', endSocket: 'top'});
add_line.color = '#ffa500';
add_line.size = 8;
</script>
@endsection
