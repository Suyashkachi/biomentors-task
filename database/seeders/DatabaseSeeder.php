<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Events\TestCreated;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $test1 = Test::create([
            'subject' => 'chemistry',
            'topic' => 'atom',
            'questions' => "1.Are two atoms of the same element identical?<br />2.Can water stay liquid below zero degrees Celsius?<br />3.Can you light a diamond on fire?<br />4.How bad of an alcoholic do you <br />5.have to be to have your brain affected?<br />6.How can glass be a liquid if it's so hard?<br />7.How do I know if something is an acid so I can avoid eating it?",
            'schedule_on' => Carbon::now()
        ]);

        $test2 = Test::create([
            'subject' => 'abcd',
            'topic' => 'atom',
            'questions' => "1.Are two atoms of the same element identical?<br />2.Can water stay liquid below zero degrees Celsius?<br />3.Can you light a diamond on fire?<br />4.How bad of an alcoholic do you <br />5.have to be to have your brain affected?<br />6.How can glass be a liquid if it's so hard?<br />7.How do I know if something is an acid so I can avoid eating it?",
            'schedule_on' => Carbon::now()->addMinutes(5)
        ]);

        $test3 = Test::create([
            'subject' => '16 mins from now',
            'topic' => 'atom',
            'questions' => "1.Are two atoms of the same element identical?<br />2.Can water stay liquid below zero degrees Celsius?<br />3.Can you light a diamond on fire?<br />4.How bad of an alcoholic do you <br />5.have to be to have your brain affected?<br />6.How can glass be a liquid if it's so hard?<br />7.How do I know if something is an acid so I can avoid eating it?",
            'schedule_on' => Carbon::now()->addMinutes(16)
        ]);

    }
}
