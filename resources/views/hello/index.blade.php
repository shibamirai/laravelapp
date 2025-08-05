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
    <p>&#064;whileディレクティブの例</p>
    <ol>
      @php
        $counter = 0;
      @endphp
      @while ($counter < count($data))
        <li>{{ $data[$counter] }}</li>
        @php
          $counter++;
        @endphp
      @endwhile
    </ol>
  </body>
</html>