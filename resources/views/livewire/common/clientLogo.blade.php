@php
            $getlogo = DB::table('home_client_logos')->where('status',1)->whereNull('deleted_at')->get();
@endphp

<section>
    <div class="partnersSection">
      <div class="container">
        <h4 class="mdTitle">Unternehmen, die unseren Sicherheitsdienstleistungen vertrauen.</h4>
        <ul class="pLogo">
            @if(isset( $getlogo ))
            @foreach( $getlogo  as $logo)
          <li><img src="{{ asset('storage/Home-clients/'.$logo->image)}}" alt="..."></li>
          @endforeach
            @endif
          
        </ul>
      </div>
    </div>
  </section>