<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Chat implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public string $message;

    public function __construct()
    {
        $this->message = 'Hello friend';
    }

    public function broadcastOn(): Channel
    {
        // use PrivateChannel to create channels only for auth users
        return new Channel('newChat'); // use Channel to craete channels for all users
    }
}
