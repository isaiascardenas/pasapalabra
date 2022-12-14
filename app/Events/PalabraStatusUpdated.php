<?php

namespace App\Events;

use App\Models\PalabraRosco;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class PalabraStatusUpdated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $palabraRosco;

    public function __construct(PalabraRosco $palabraRosco)
    {
        $this->palabraRosco = $palabraRosco;
    }

    public function broadcastWith()
    {
        return ['palabra-rosco' => $this->palabraRosco];
    }

    public function broadcastOn()
    {
        return new PrivateChannel(
            'roscos.'
            .$this->palabraRosco->rosco_id
        );
    }
}
