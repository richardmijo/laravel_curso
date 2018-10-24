@foreach($users as $user)
{!! Form::open(['route' => 'foo/bar']) !!}
    //
{!! Form::close() !!}
@endforeach