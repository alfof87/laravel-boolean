<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>i'm the main layout</title>
    <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
  </head>
  <body>
    <header>
      @include("layouts.partials.header")
      @include("layouts.partials.main")
      @include("layouts.partials.footer")
    </header>
  </body>
</html>
