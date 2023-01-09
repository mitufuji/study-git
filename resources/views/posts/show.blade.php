@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('posts.index') }}">戻る</a>
</div>
<div class='col-2'>
        @component('components.sidebar', ['categories' => $categories])
        @endcomponent
</div>
<div>
    <h1>{{ $category->name }}</h1>
</div>
<form action="{{ route('posts.store') }}" method='post'>
        @csrf
        <div>
            <label for="content">メッセージ入力</label>
            <input type="text" class='form-control' name='content'>
            <input type="hidden" name='category_id' value="{{ $category->id }}">
        </div>
        
        <button type='submit'>メッセージ投稿</button>
    </form> 
   
    
    @foreach($posts as $post)
    <div>
        <h4>{{ $post->user_name }}</h4> 
        <p>{{ $post->content }}</p>
    </div>
    @endforeach 

@endsection