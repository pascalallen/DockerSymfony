#!/usr/bin/env bash

# run deploy script
/bin/su -c '/bin/bash /var/www/app/scripts/fpm-deploy.sh &' pascalallen

# start fpm and tail the log file
/bin/sh -c php-fpm --pid /usr/local/var/run/php-fpm.pid | tail -f /tmp/stdout
