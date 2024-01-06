<h1>Our first Project</h1>

<a href="/post">post</a>
<a href="{{route("blog")}}">blog</a>


{{-- ALERT --}}
{!!"<script>alert('Khadija Ibrahima')</script>"!!}



@php
   $names = ['khadija','uzair','sara','zainab'] 
@endphp
<ul>
@foreach ($names as $n)
<li>{{$n}}</li>
    
@endforeach
</ul> 