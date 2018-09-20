{{--
  Template Name: About Template
--}}

@extends('layouts.app')

<div>
@section('content')
  <div id="wrapper">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div id="smallwrapper">
      @include('partials.content-page')
      <h2 id="about">This is meaningful content about our company</h2>
    </div>
  @endwhile
  </div>
@endsection
</div>

