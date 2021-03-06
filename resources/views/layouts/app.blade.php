<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  @include('partials.header')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @include('modules.main-slider')
          @include('modules.main-videos')
          @include('modules.season-slider')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
