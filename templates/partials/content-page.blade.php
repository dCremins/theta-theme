@if(get_field('video'))
<div class="flex">
<div class="content">
@php(the_content())
</div>

<div class="video">
  @php(the_field('video'))
</div>
</div>
@else
@php(the_content())
@endif
{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
