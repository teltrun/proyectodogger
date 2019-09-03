@if(Auth::user()->image)
    <img class="tamaño_foto" src="{{ route('user.foto', ['user' => Auth::user()->nick, 'filename' => Auth::user()->image]) }}" />
@else
    <img class="tamaño_foto" src="{{ route('user.foto', ['user' => 'default', 'filename' => '123.jpg']) }}" />
@endif
