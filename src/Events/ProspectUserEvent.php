<?php

namespace MCDev\ProspectUsers\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use MCDev\ProspectUsers\Models\ProspectUser;

class ProspectUserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $prospect;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ProspectUser $prospect)
    {
        $this->prospect = $prospect;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
