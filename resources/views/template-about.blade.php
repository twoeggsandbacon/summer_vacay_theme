{{--
  Template Name: About Template
--}}

@extends('layouts.app')

<div>
@section('content')
  <div id="wrapper">
  @while(have_posts()) @php the_post() @endphp
  <div class="pageheader">
      @include('partials.page-header')
    </div>    
    <div class="smallwrapper">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fringilla magna in hendrerit 
      scelerisque. Sed interdum elit lectus, at blandit mi ultrices sit amet. Curabitur velit sapien, 
      eleifend at nisi non, hendrerit vulputate nibh. Suspendisse sollicitudin urna augue, vitae aliquet 
      velit finibus sed. Maecenas tristique fringilla semper. Nam venenatis justo eget vestibulum feugiat. 
      Duis quis lectus mollis felis ullamcorper pellentesque ut at dui. Maecenas eget ligula sollicitudin, 
      fringilla dolor at, commodo justo. Donec viverra semper felis, nec pharetra nunc suscipit at. 
      Nam ullamcorper, lectus id fringilla convallis, diam tellus egestas risus, vitae rutrum augue
      orci vitae dolor. Duis tincidunt ultrices nulla nec ultricies. In vitae nisi eu nunc eleifend
      bibendum at quis magna. Cras ac sem purus. Etiam nec tellus vitae nulla cursus tincidunt id sed nisi.
      <br><br>
      Nunc maximus lacus libero, at molestie nibh cursus quis. Donec imperdiet leo ligula, eget faucibus odio
      iaculis non. Duis in interdum ipsum, vel congue lacus. Fusce at mattis purus. Interdum et malesuada
      fames ac ante ipsum primis in faucibus. Nulla ut luctus sem. Class aptent taciti sociosqu ad litora 
      torquent per conubia nostra, per inceptos himenaeos.</p>
      @include('partials.content-page')
    </div>
  @endwhile
  </div>
@endsection
</div>
