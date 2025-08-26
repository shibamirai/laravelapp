<?php

test('check database User create', function () {
    // ユーザーを作成
    $user = App\Models\User::factory()->create();
    expect($user)->not->toBeNull();
});

function createPerson() {
    $ob = new App\Models\User;
    $ob->name = 'alice';
    $ob->email = 'alice@wonderland';
    $ob->password = 'wonderland';
    $ob->save();
    return $ob;
}

test('check database Person find', function () {
    $ob = createPerson();
    $res = App\Models\User::where('name', 'alice')->first();
    expect($res)->not->toBeNull();
});

test('check database Person create', function () {
    $p = App\Models\Person::factory()->create();
    expect($p)->not->toBeNull();
});