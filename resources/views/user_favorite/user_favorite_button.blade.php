 @if (Auth::user()->is_favorites($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete', 'style'=> 'display:inline']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
@else
        {!! Form::open(['route' => ['user.favorite', $micropost->id], 'style'=> 'display:inline']) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
@endif
