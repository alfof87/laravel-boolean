<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>i'm the main layout</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <header>
      @include("layouts.partials.header")
    </header>
    <main>
      @include("layouts.partials.main")
    </main>
    <footer>
      @include("layouts.partials.footer")
    </footer>
  </body>
</html>
