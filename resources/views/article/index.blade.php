@extends('master')

@section('content')
<!-- Example row of columns -->

<div class="container">
  
    @foreach ($posts as $post)

      @include('article.post')

    @endforeach

</div>

@endsection