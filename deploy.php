<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'awp-guestbook');

// Project repository
set('repository', 'git@github.com:elder-university/awp.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('tony-jenkins.me.uk')
    ->user('deployer')
    ->identityFile('/home/tony/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/awp');

// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
//    'artisan:migrate',
    'artisan:view:clear',
    'artisan:cache:clear',
    'artisan:config:cache',
//    'artisan:route:cache',
//    'artisan:optimize',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
