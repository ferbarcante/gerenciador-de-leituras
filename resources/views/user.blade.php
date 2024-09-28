<h1>Hello World</h1>
 <p>{{$name}} is {{$age}}</p> 
 {{$user->name}} <br>
 {{$user->email}} <br>

 <br>
 {{date('d/m/y')}}
 <br>

 @if($user->name === 'Drake Keebler')
    {{$user->name}}
@elseif($user->name === 'Shane Wehner')
    {{$user->name}}
 @endif

 <br>

 @php
    $total = 1;
@endphp
 @empty($total)
    Vazio
 @endempty
