<?php

namespace App\Listeners;

use App\Events\UserJoined;


class UserUpdating
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserJoined  $event
     * @return void
     */
    public function handle(UserJoined $event)
    {
        $user = $event->getUser();
        $user->created_at = \Illuminate\Support\Carbon::now();
        $user->save();
    }
}
