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
    <ol>
      @for ($i = 1; $i < 100; $i++)
        @if ($i % 2 == 1)
          @continue
        @elseif ($i <= 10)
          <li>No. {{ $i }}</li>
        @else
          @break
        @endif
      @endfor
    </ol>
</html>