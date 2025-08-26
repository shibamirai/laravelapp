<?php

test('access to "/hello"', function () {
    $response = $this->get('/hello');
    $response->assertStatus(200);
});

test('access to "/person"', function () {
    $response = $this->get('/person');
    $response->assertStatus(200);
});

test('access to "/board"', function () {
    $response = $this->get('/board');
    $response->assertStatus(200);
});
