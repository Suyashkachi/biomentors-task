<?php

namespace App\Console\Commands;

use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UpdatePdfLink extends Command
{
    protected $signature = 'update:pdflink';

    protected $description = 'Command description';

    public function handle()
    {
        try
        {
            $tests = Test::whereNull('pdf_link')->where('schedule_on', '<=', Carbon::now()->addMinutes(15))->get();

            foreach($tests as $value)
            {
                Test::find($value->id)->update([
                    'pdf_link' => route('downloadPdf', [$value->id])
                ]);
            }

            $this->info('Ok');
        }
        catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
