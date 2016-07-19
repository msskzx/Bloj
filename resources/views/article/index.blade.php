@extends('layouts.app')

@section('content')
  <div class = "container">

  <div class = "row">
      <div class="col-md-12">
        <h2>Articles</h2>
      </div>
  </div>


  <div class = "row">
      <div class = "col-md-12">
        <h4>Wanna <a href="{{ url('/article/create') }}">create</a> a new article?</h4>
      </div>
  </div>

    <hr>

    @include('article.articles')

</div>
@endsection
