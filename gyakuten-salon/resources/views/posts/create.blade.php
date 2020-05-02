@extends('layouts')

@section('content')
    <div class="container mt-4">
        <div>
            <h1>投稿の新規作成</h1>
            
            <form method="post" action="{{ route('posts.store') }}">
                {{ csrf_field() }}
                <fieldset class="mb-4">
                    
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                        
                    </div>
                    
                    <div>
                        <label for="body">本文</label>
                        <textarea id="body" class="form-control" name="body" rows="4" >{{ old('body') }}</textarea>
                        <div class="text-danger">
                            {{ $errors->first('body') }}
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <a href="{{route('top')}}" class="btn btn-secondary">
                            キャンセル
                        </a> 
                        
                        <button type="submit"　class="btn btn-primary">
                            投稿する
                        </button>
                        
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div>
@endsection('content')