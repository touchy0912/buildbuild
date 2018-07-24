@extends('layouts.page')


@section('content')
@if (count($roles) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>役割</th>
                    <th>仕事内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->role }}</td>
                        <td>{{ $role->rule1 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endif

{!! link_to_route('games.index',"トップページへ戻る",null,['class'=>'btn btn-lg btn-info']) !!}
@endsection