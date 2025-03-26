<?php
namespace NexaMerchant\Apps\Console\Commands;

class CreatePlatform extends CommandInterface{

    protected $signature = 'apps:create:platform';
    protected $description = 'Create a new nexa platform use docker, kubernetes and souce code';

    public function __construct(){
        parent::__construct();
    }

    public function handle(){
        $this->info('Create a new nexa platform use docker, kubernetes and souce code');



    }

    public function checkEnv(){
        $this->info('Check environment');

        // check docker
        $this->info('Check docker');

        // check kubernetes
        $this->info('Check kubernetes');

        // check source code
        $this->info('Check source code');

        // check ssh

        // check git
    }
}