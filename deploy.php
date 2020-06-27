<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@github.com:darknessxk/baimless.live.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('ec2-18-224-45-183.us-east-2.compute.amazonaws.com')
	->user('ubuntu')
	->stage('production')
	->identityFile('/home/darknessxk/Scripts/baimless_memed.pem')
	->addSshOption('UserKnownHostsFile', '/dev/null')
	->addSshOption('StrictHostKeyChecking', 'no')
	->set('deploy_path', '/var/www/html');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

