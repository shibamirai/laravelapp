<?php

test('check database User create', function () {
    // ユーザーを作成
    $user = App\Models\User::factory()->create();
    expect($user)->not->toBeNull();
});
