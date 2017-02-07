<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    <nav class="post-nav row">
      <div class="previous col"><?php previous_post_link('%link', '&larr; %title'); ?></div>
      <div class="next col"><?php next_post_link('%link', '%title &rarr;'); ?></div>
    </nav>
  </footer>
  @php(comments_template('/templates/partials/comments.blade.php'))
</article>
