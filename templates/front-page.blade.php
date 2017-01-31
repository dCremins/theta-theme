@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="page-header">
      <h3>{!! App\title() !!}</h1>
    </div>
    @include('partials.content-page')
  @endwhile
  @php(dynamic_sidebar('sidebar-home'))
@endsection
