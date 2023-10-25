<?php

namespace Soap\EloquentLike\Commands;

use Illuminate\Console\Command;

class EloquentLikePruneCommand extends Command
{
    public $signature = 'eloquent-likes:prune';

    public $description = 'Check for expired likes and remove them';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
