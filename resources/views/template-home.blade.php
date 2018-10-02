{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <body>
  <div id="mainwrapper">
    <div id="navigation">
      <div class="containers" id="home">
        <div class="title">
          <h1>HOME</h1>
        </div>
        <div class="description">
          <p>
            Curabitur et augue sed tellus viverra vulputate. pPraesent vestibulum lobortis libero, vitae efficitur lectus bibendum aliquet. Fusce fringilla metus vitae ipsum ullamcorper, non convallis orci consequat. Pellentesque habitant morbi tristique senectus
            et netus et malesuada fames ac turpis egestas. Phasellus nisi nulla, cursus at tortor id, tempor laoreet lacus. Proin mollis nunc neque, eget malesuada eros gravida vel. Mauris porta erat vel commodo aliquam. Fusce sit amet risus in diam mattis
            elementum non et mi. Vestibulum cursus urna lectus, quis porta mi ultrices vitae. Aliquam congue pellentesque ultrices. Nullam est odio, faucibus eu nulla vitae, luctus elementum ligula.
          </p>
        </div>
      </div>
      <div class="containers" id="about">
        <div class="title">
          <h1>ABOUT</h1>
        </div>
        <div class="description">
          <p>
            Curabitur et augue sed tellus viverra vulputate. Praesent vestibulum lobortis libero, vitae efficitur lectus bibendum aliquet. Fusce fringilla metus vitae ipsum ullamcorper, non convallis orci consequat. Pellentesque habitant morbi tristique senectus
            et netus et malesuada fames ac turpis egestas. Phasellus nisi nulla, cursus at tortor id, tempor laoreet lacus. Proin mollis nunc neque, eget malesuada eros gravida vel. Mauris porta erat vel commodo aliquam. Fusce sit amet risus in diam mattis
            elementum non et mi. Vestibulum cursus urna lectus, quis porta mi ultrices vitae. Aliquam congue pellentesque ultrices. Nullam est odio, faucibus eu nulla vitae, luctus elementum ligula.
          </p>
        </div>
      </div>
      <div class="containers" id="contactus">
        <div class="title">
          <h1>CONTACT US</h1>
        </div>
        <div class="description">
          <p>
            Curabitur et augue sed tellus viverra vulputate. Praesent vestibulum lobortis libero, vitae efficitur lectus bibendum aliquet. Fusce fringilla metus vitae ipsum ullamcorper, non convallis orci consequat. Pellentesque habitant morbi tristique senectus
            et netus et malesuada fames ac turpis egestas. Phasellus nisi nulla, cursus at tortor id, tempor laoreet lacus. Proin mollis nunc neque, eget malesuada eros gravida vel. Mauris porta erat vel commodo aliquam. Fusce sit amet risus in diam mattis
            elementum non et mi. Vestibulum cursus urna lectus, quis porta mi ultrices vitae. Aliquam congue pellentesque ultrices. Nullam est odio, faucibus eu nulla vitae, luctus elementum ligula.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
  @endwhile
@endsection
