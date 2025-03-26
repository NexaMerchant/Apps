<?php
namespace NexaMerchant\Apps\Console\Commands;

class CreatePlatform extends CommandInterface{

    private $ssh_host;
    private $ssh_port;
    private $ssh_user;
    private $ssh_password;
    private $ssh_key;

    private $git_url;
    private $git_branch;
    private $git_user;
    private $git_password;

    private $docker;
    private $kubernetes;
    private $source_code;

    protected $signature = 'apps:create:platform {name} {--ssh-host} {--ssh-port} {--ssh-user} {--ssh-password} {--ssh-key} {--git-url} {--git-branch} {--git-user} {--git-password} {--git-key} {--docker} {--kubernetes} {--source-code}';
    protected $description = 'Create a new nexa platform use docker, kubernetes and souce code {name} {--ssh-host} {--ssh-port} {--ssh-user} {--ssh-password} {--ssh-key} {--git-url} {--git-branch} {--git-user} {--git-password} {--git-key} {--docker} {--kubernetes} {--source-code}';

    public function __construct(){
        parent::__construct();
    }

    public function getAppVer() {
        return config("apps.version");
    }

    public function getAppName() {
        return config("apps.name");
    }

    public function handle(){
        $this->info('Create a new nexa platform use docker, kubernetes and souce code');

        $this->ssh_host = $this->option('ssh-host');
        $this->ssh_port = $this->option('ssh-port');
        $this->ssh_user = $this->option('ssh-user');
        $this->ssh_password = $this->option('ssh-password');
        $this->ssh_key = $this->option('ssh-key');

        $this->git_url = $this->option('git-url');
        $this->git_branch = $this->option('git-branch');
        $this->git_user = $this->option('git-user');
        $this->git_password = $this->option('git-password');
        $this->git_key = $this->option('git-key');

        $this->docker = $this->option('docker');
        $this->kubernetes = $this->option('kubernetes');
        $this->source_code = $this->option('source-code');

        $this->name = $this->argument('name');


        $this->checkEnv();


        $this->createPlatform();



    }

    public function checkEnv(){

        // check ssh use shell
        $this->info('Check ssh');
        

        $this->info('Check environment');

        // check docker
        $this->info('Check docker');

        // check kubernetes
        $this->info('Check kubernetes');

        // check source code
        $this->info('Check source code');

        

        // check git
    }
}