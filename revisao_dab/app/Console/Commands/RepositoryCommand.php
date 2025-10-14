<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

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
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $path = app_path('Repositories/' . $name . '.php');

        if (file_exists($path)) {
            $this->error('O arquivo já existe.');
            return 1;
        }

        $this->info('Criando arquivo de serviço...');

        file_put_contents($path, '<?php

namespace App\Repositories;

class ' . $name . '
{
    //
}

        ');

        $this->info('Arquivo criado com sucesso!');

        return 0;
    }
}
