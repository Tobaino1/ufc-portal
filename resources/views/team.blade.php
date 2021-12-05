@extends('layouts.landing')

@section('content')
 
<div class="container">
<div>

<hr/>
<h3 style="color: blue" align="center"> Unification Football Club Players Dashboard</h3>
<hr/>
<h4 style="color: blue" align="center">Players profile page </h4>

<table class="table table-striped table-hover">
<tr>
                 <th>Image</th>
                 <th>Name</th>
                 <th>Position</th>
                 <th>Role</th>
                 <th>Dominant Foot</th>
                 <th>Details</th>
</tr>

<tbody>
     @foreach($players as $player)
<tr>
<td><img src="/image/{{ $player->image }}" width="100px"></td>
                 <td>{{ $player->name }}</td>
                 <td>{{ $player->position }}</td>
                 <td>{{ $player->role }}</td>
                 <td>{{ $player->dominantfoot }}</td>
                 <td>{{ $player->detail }}</td>
</tr>

@endforeach
</tbody>
</table>
</div>
</div>
@include ('layouts.footer') 
@endsection
