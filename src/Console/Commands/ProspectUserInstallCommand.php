<?php

namespace MCDev\ProspectUsers\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ProspectUserInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prospect:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adiciona migrations, models, controllers a seus respectivos diretórios. ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('vendor:publish', ['--tag'=>'all']);
        $this->info('Migrations, Models e Controllers publicados!');

        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(__DIR__.'/Stubs/routes.stub'),
            FILE_APPEND
        );
    }
}
