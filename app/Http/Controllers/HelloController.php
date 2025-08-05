<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke() {
        return <<<EOF
          <html>
            <head>
              <title>Hello</title>
              <style>
                body { font-size: 16pt; color: #999; }
                h1 { font-size: 50pt; text-align: right; color: #eee; margin: -25px 0 0 0; }
              </style>
            </head>
            <body>
              <h1>Single Action</h1>
              <p>これは、シングルアクションコントローラーのアクションです。</p>
            </body>
          </html>
          EOF;
    }
}
