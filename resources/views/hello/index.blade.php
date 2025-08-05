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
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
      @if ($loop->first)
        <p>※データ一覧</p><ul>
      @endif
      <li>No. {{ $loop->iteration }}. {{ $item }}</li>
      @if ($loop->last)
        </ul><p>――ここまで</p>
      @endif
    @endforeach
  </body>
</html>