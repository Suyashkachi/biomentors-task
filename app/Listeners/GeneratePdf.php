<?php

namespace App\Listeners;

use App\Events\TestCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use PDF;

class GeneratePdf
{
    public function __construct()
    {

    }

    public function handle(TestCreated $event)
    {
        $pdf = PDF::loadView('questions', ['questions' => $event->test->questions], [
            'format' => 'A4',
            'orientation' => 'P'
        ])->save(storage_path('app/public/pdf/question-' . $event->test->id . '.pdf'));
    }
}
