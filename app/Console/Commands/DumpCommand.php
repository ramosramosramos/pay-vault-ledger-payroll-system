<?php

namespace App\Console\Commands;

use App\Concerns\HasEnumOption;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:dump-command')]
#[Description('Command description')]
class DumpCommand extends Command
{
    use HasEnumOption;

    /**
     * Execute the console command.
     */
    public function handle() {}
}
