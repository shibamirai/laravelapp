<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Message extends Component
{
    private $data;

    public function __construct()
    {
        $num = rand(1, 100);
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $num);
        $this->data = $response->json();
    }

    public function render(): View|Closure|string
    {
        $data = [
            'msg' => 'ランダムなPOSTデータを表示します。',
            'data' => $this->data
        ];
        return view('components.message', $data);
    }
}
