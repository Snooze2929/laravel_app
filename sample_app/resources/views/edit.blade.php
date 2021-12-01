@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post" action="{{ route('edit.update',$message->id) }}">
                        {{-- csrf対策 --}}
                        @csrf

                        {{-- リソースupdateに対応させるためmethodをbladeテンプレートを使って変更 --}}
                        @method('patch')

                        <div>
                            <p>{{ $message->name }}</p>
                        </div>
                        <div>
                            <label>
                                コメント:<input type="text" name="body" class="comment_field" value="{{ $message->body }}">
                            </label>
                        </div>
                        <div>
                            <input type="submit" value="更新">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection