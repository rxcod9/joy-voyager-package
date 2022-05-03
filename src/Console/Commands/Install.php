<?php

namespace Joy\VoyagerReplaceKeyword\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use TCG\Voyager\Seed;

class Install extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'joy-replace-keyword:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Joy Voyager ReplaceKeyword package';

    /**
     * Seed Folder name.
     *
     * @var string
     */
    protected $seedFolder;

    public function __construct()
    {
        parent::__construct();

        $this->seedFolder = Seed::getFolderName();
    }

    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production', null],
            ['with-dummy', null, InputOption::VALUE_NONE, 'Install with dummy data', null],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Migrating the database tables into your application');
        $this->call('migrate', ['--force' => $this->option('force')]);

        $this->info('Seeding data into the database');
        $this->call('db:seed', ['--class' => \Joy\VoyagerReplaceKeyword\Database\Seeders\VoyagerDatabaseSeeder::class]);

        if ($this->option('with-dummy')) {
            $this->info('Seeding dummy data');
            $this->call('db:seed', ['--class' => \Joy\VoyagerReplaceKeyword\Database\Seeders\VoyagerDummyDatabaseSeeder::class]);
        }

        $this->info('Successfully installed Joy Voyager ReplaceKeyword! Enjoy');
    }
}
