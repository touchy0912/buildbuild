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

            <a href="{{route('games.index')}}" class="btn btn-lg">
            <button class='cssbtn2'>　TopPageへ　</button>    
            </a>

@endsection