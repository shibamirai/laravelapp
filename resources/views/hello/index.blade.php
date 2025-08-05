<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body { font-size: 16pt; color: #777; }
      h1 { font-size: 40pt; text-align: right; color: #d0d0f0; margin: -20px 0 0 0; }
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    @isset ($msg)
      <p>「{{ $msg }}」と送信されました。</p>
    @else
      <p>何か書いてください。</p>
    @endisset
    <form action="/hello" method="post">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>