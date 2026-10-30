<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:dump-command')]
#[Description('Command description')]
class DumpCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::find(1);
        $old = $user->model_type;

    }
}
