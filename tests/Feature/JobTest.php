<?php

test('Home should render successfully', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
