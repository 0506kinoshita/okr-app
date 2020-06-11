@extends('home.app')

@include('home.header')

@section('content')
<div class="add_wrap">
<div class="parent_infomation">
@foreach($okrs as $okr)
    @if($okr->id == $parent_id)
        <div class="exist_okr" id="exist_okr2">
            <h2>OBJECTIVE</h2>
            <p class="exist_okr_infomation">{{ $okr->objective }}</p>
            <h2>KEY RESULT</h2>
            <p>{{ $okr->key_result }}</p>
        </div>
    @endif
@endforeach

@foreach($okrs as $okr)
@if($okr->id == $id)
    <form action="/Home/{id}/edit" method="post" class="add_infomation" id="edit_infomation">
        {{ csrf_field() }}
        <div class="detail_wrap">
            <div>
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
            </div>
            <input type="submit" value="変更を反映する" class="button edit_button add_okr_btn">
        </div>
        </div>
        <div class="detail-area">
            <p>*200文字以内</p>
            @if($errors->has('detail'))
                <p>{{ $errors->first('detail') }}</p>
            @endif
            <textarea name="detail" rows="18" cols="40" placeholder="詳細">{{$okr->detail}}</textarea>
        </div>
    </form>
@endif
@endforeach

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
