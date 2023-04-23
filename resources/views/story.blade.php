@extends('layouts.landing')

@section('content')
 
<div class="container">
<div>

<hr/>
<h3 style="color: blue" align="center"> Unification Football Club, News Room </h3>
<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white"> News Room</a></div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Unification FC News room is an information driven portal and newsletter aggregating all of the latest and most important news related to the club's activities.
                                </div>
<table class="table table-striped table-hover">
     @foreach($news as $new)
<tr>
<p><img src="/image/{{ $new->image }}" width="100px"> {{ $new->headline }}  ||
{{ $new->by_date }} 
                 <p>{{ $new->detail }}</p>
</tr>
@endforeach
</table>
</div>
</div>
@include ('layouts.footer') 
@endsection