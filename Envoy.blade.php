@servers(['web' => 'user@172.105.83.183'])

@task('deploy')
    cd /path/to/site
    git pull origin master
@endtask