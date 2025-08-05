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
    <p>{{ $msg }}</p>
    <p>{{ 12300*1.08 }}</p>
    <p>{{ date('Y-m-d H:i:s') }}</p>
    <p>{!! "This is <b>sample</b> <i>message.</i>" !!}</p>
  </body>
</html>