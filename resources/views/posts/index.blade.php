@extends('layouts.app')

@section('content')
    <div> 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif                                          
    </div>

    <form action="{{ route('posts.store') }}" method='post'>
        @csrf
        <div>
            <label for="content">メッセージ入力</label>
            <input type="text" class='form-control' name='content'>
        </div>
        <button type='submit'>メッセージ投稿</button>
    </form>
    @foreach($posts as $post)
    <div>
        <h2>{{ $post->user_name }}</h2> 
        <p>{{ $post->content }}</p>
    </div>
    @endforeach



@endsection
