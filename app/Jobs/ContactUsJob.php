<?php

namespace App\Jobs;

use Throwable;
use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ContactUsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $contact_email;
    public $details;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($contact_email, $details)
    {
        $this->contact_email = $contact_email;

        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to($this->contact_email, env('COMPANY_NAME'))->send(new ContactMail($this->details));
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }
}
