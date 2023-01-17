<?php

namespace App\Observers;

use App\Models\Job;
use Cache;

class JobObserver
{
    /**
     * Handle the Job "created" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function created(Job $job)
    {
        Cache::forget('jobs-listing');
    }

    /**
     * Handle the Job "updated" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function updated(Job $job)
    {
        Cache::forget('jobs-listing');
    }

    /**
     * Handle the Job "deleted" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function deleted(Job $job)
    {
        Cache::forget('jobs-listing');
    }

    /**
     * Handle the Job "restored" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function restored(Job $job)
    {
        //
    }

    /**
     * Handle the Job "force deleted" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function forceDeleted(Job $job)
    {
        //
    }
}
