@extends "layouts.app"
@section('content')
@while (have_posts()) @php the_post() @endphp
   <div class="p-8">
    @include('partials.content-page')
   </div>
@endwhile
@section