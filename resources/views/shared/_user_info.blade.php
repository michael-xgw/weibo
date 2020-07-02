<a href="{{route('users.show',$user->id)}}">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="gravatar">
</a>

<h1>{{$user->name}}</h1>
<h1>{{md5(strtolower(trim($user->email)))}}</h1>

