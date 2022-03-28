@extends('layouts.app')
@php
    //this is the right file
@endphp
@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <h1 class="title">Agents</h1>
  <div class="swiper mySwiper">
    <div class="agents swiper-wrapper">
        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile
    </div>
  </div>
    <?php wp_footer() ?>
  {!! get_the_posts_navigation() !!}
@endsection