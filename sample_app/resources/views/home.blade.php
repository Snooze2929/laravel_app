@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse($messages as $message)
                            
                    <div class="d-flex my-box-light">
                        <div class="my-box mr-auto">
                            {{ $message->name }}:{{ $message->body }}
                        </div>
                        <div class="my-box">
                            <a href="{{ route('home.edit',$message->id) }}" class="btn btn-primary btn-sm">編集</a>
                        </div>
                        <div class="my-box">
                            <form action="{{ action('CrudController@destroy', $message->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('削除しますか？');" value="削除">
                            </form>
                        </div>
                    </div>
                    @empty

                        <li>コメントはありません</li>

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection