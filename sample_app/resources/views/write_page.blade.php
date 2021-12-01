@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post" action="{{ route('write.store') }}">
                        {{-- csrf対策 --}}
                        {{ csrf_field() }}

                        <div>
                            <label>
                                名前:<input type="text" name="name" class="name_field">
                            </label>
                        </div>
                        <div>
                            <label>
                                コメント:<input type="text" name="body" class="comment_field">
                            </label>
                        </div>
                        <div>
                            <input type="submit" value="投稿">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection