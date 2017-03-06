{{--
  Template Name: Venue and Hotels Template
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    @if(get_field('venue_name'))
      <div class="page-header">
        <h1>@php(the_field('venue_name'))</h1>
      </div>
    @else
      @include('partials.page-header')
    @endif

    <div class="flex">
      @if(get_field('venue_description'))
        <div class="half">
          @php(the_field('venue_description'))
        </div>
      @endif

      <div class="half">
      </div>
    </div>

  @endwhile
@endsection
