<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UpdateUserLoggedInTime
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
     * @param  UserLoggedIn  $event
     * @return void
     */
    public function handle(UserLoggedIn $event)
    {
        Log::info('This');
        $event->user->update([
            'last_login' => Carbon::now()
        ]);
    }
}
