@extends('layouts.page')


@section('content')

<div class="rulepage">

<h1>【役職公開】</h1>

<h2>ナビゲーターから反時計回りに一人ずつ<br>自分の役職のMISSIONを説明してください。</h2>





 <table class="table table-bordered">
     <caption align='center'></caption>

            <tbody>
                <tr>
                    <td>名前</td>
                @foreach ($users as $user)
                        <td>{{ $user}}</td>
                @endforeach
                    </tr>
               <tr>
                    <td>役職</td>
                @foreach ($roles as $role)
                        <td><h4>{{$role['role']}}</h4></td>
                @endforeach
                </tr>
                
            </tbody>
        </table>
        
        
        <?php  $users=urlencode(serialize($users));
       $roles=urlencode(serialize($roles)); ?>
       

{!! Form::open(['route'=>'thema.feedback']) !!}
{!! Form::hidden('roles',$roles) !!}
{!! Form::hidden('users',$users) !!}
<button class="cssbtn2" type="submit">
Next
</button>
{!! Form::close() !!}


</div>
@endsection