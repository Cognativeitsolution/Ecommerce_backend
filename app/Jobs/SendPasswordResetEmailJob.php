<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendPasswordResetEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $credientials;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($credientials)
    {
        $this->credientials = $credientials;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Password::broker()->sendResetLink($this->credentials['email']);
    }
}
