<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('user-chats.{userId}', function ($user, $userId) {
    return $user->id === (int) $userId;
});
