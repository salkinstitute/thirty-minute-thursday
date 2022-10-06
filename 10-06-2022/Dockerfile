### Single Dockerfile for all Laravel instances (app, worker, cron)
FROM atonyman/php7_nginx:latest
# Override these vars with docker-compose, etc.
ENV NPM_ENV=prod \
    CONTAINER_ROLE=laravel \
    EXPOSED_PORT=80 \
    APP_NAME=laravel \
    MEMORY_LIMIT=2048M \
    MAX_EXECUTION_TIME=900 \
    MAX_POST_SIZE=20M \
    EXPOSE_PHP=0 \
    PHP_TIMEZONE=-UTC \
    LARAVEL_VERSION=""\
    COMPOSER_REQUIRES="directorytree/ldaprecord-laravel guzzlehttp/guzzle laravel/breeze spatie/laravel-backup" \
    VOYAGER_ADMIN_EMAIL=""\
    VOYAGER_ADMIN_PASSWORD=""

WORKDIR /var/www

# From local folder where deploy is. to it's own folder on the container, /var/www/deploy
COPY ./ /var/www
#Creates new laravel project in a temp folder, then moves to current dir (/var/www)
RUN composer create-project laravel/laravel /tmp/laravel $LARAVEL_VERSION && \
    cp -r /tmp/laravel/. /var/www && rm -rf /tmp/laravel && \
    composer require $COMPOSER_REQUIRES

EXPOSE $EXPOSED_PORT

# Just Start php
CMD php-fpm -D &&  nginx -g "daemon off;"
# For the next tutorial!
# CMD [ "sh", "./deploy/laravel/run_services_based_on_container_role.sh" ]