@extends('master')

@section('title')
    input
@stop

@section('body')
    <div class="panel panel-primary">
        <div class="panel-heading bg-light-blue-active">JSONデータ登録</div>
        <div class="panel-body">
            <form action="{{ route('tests.store') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="json_data"></textarea>
                </div>

                <input type="submit" value="登録" class="btn btn-primary">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        </div>
    </div>


    <div class="panel panel-success">
        <div class="panel-heading bg-light-blue-active">JSONデータ一覧</div>
        <div class="panel-body">
            <form action="{{ route('tests.search') }}" method="get">
                <div class="form-group">
                    <label>JSONキーを入力</label>
                    <input type="text" class="form-control" name="json_key">
                    <label>検索値を入力</label>
                    <input type="text" class="form-control" name="json_value">
                </div>

                <input type="submit" value="検索" class="btn btn-success">
            </form>
            <HR>
            <table class="table table-striped">
                <thead>
                <th>ID</th>
                <th>JSONデータ</th>
                </thead>
                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <td>{{$test->id}}</td>
                        <td>{{$test->json_data}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop