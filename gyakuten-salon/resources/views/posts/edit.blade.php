@extends('layouts')

@section('content')
    <div class="container mt-4">
        <div>
            <h1>投稿の編集</h1>
            
            <form method="post" action="{{route('posts.update', ['post'=>$post])}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset class="mb-4">
                    
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    </div>
                    
                    <div>
                        <label for="body">本文</label>
                        <textarea id="body" class="form-control" name="body" rows="4" >{{$post->body}}
                        </textarea>
                    </div>
                    
                    <div class="mt-5">
                        <a href="{{route('posts.show', ['post'=>$post])}}" class="btn btn-secondary">
                            キャンセル
                        </a> 
                        
                        <button type="submit"　class="btn btn-primary">
                            更新する
                        </button>
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div>
@endsection('content')