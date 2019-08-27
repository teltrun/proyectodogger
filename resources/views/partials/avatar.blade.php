@if(Auth::user()->image)
    <img src="{{ route('user.foto', ['user' => Auth::user()->nick, 'filename' => Auth::user()->image]) }}" />
@else
    <img src="{{ route('user.foto', ['user' => 'default', 'filename' => '123.jpg']) }}" />
@endif