<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EchoUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'echo:user {names?*} {--age=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command echo username';

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
        if (!$this->confirm('Do you wish to continue?')) {
            dd('Bye!');
        }

        $dataReturn = [];
        $dataReturn['Data ask'] = $this->ask('What is your name?'); // OR $this->secret()
        $names = $this->argument('names');
        $age = $this->option('age') ?? 'null';
        $dataReturn['Data inputs'] = implode(', ', $names) .' '. $age .' years old';

        print_r($dataReturn);

        $this->info('The command was successful!');
    }
}
