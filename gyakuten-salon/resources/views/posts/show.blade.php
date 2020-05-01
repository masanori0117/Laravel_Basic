@extends('layouts')

@section('content')
    <div class="container mt-4">
        
        <div class="card mb-4">
            <div class="card-header mb-2"> 
                {{ $post->title }}
            </div>
            
            <div class="card-body">
                <p>
                    {{ $post->body }}
                </p>
            </div>
            
            <div class="card-footer">
                <span>
                    投稿日時
                </span>
            </div>
        </div>
        
        <div class="mt-4 text-right">
            <a href="{{route('posts.edit', ['post'=>$post])}}" class="btn btn-primary">
                編集する
            </a>
            
            <form style="display: inline-block" method="post" action="{{route('posts.destroy', ['post'=>$post])}}"
>
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger">削除</button>
                
            </form>
                        

            
        </div>
            
        
    </div>
@endsection('content')