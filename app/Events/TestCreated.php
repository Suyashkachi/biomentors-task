<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
