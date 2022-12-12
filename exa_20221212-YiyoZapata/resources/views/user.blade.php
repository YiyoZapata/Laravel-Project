@extends('layouts.user')

@section('content')

<h1>hola</h1>
  <table>
    @foreach($user as $user)
        <tr>
            <td>
                {{$user ->id}}
            </td>
            <td>
                {{$user ->name}}
            </td>
        </tr>
    @endforeach
  </table>

<pre>
{{dd($user)}}
</pre>

@endsection