FROM php:8.0-fpm

WORKDIR /var/www/app

ARG PHP_INI_MODE
ENV DB_HOST dockersymfony-db
ENV DB_PORT 3306

RUN apt-get update \
    && apt-get install -y \
        zlib1g-dev \
        libicu-dev \
        g++ \
        locales \
        curl \
        libz-dev \
        libmemcached-dev \
        graphviz \
    && echo "en_US.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen en_US.UTF-8 \
    && dpkg-reconfigure --frontend=noninteractive locales \
    && pecl install memcached \
    && pecl install xdebug \
    && docker-php-ext-enable opcache \
    && docker-php-ext-enable memcached \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install intl \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install sockets \
    && docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY ./conf/php.ini-${PHP_INI_MODE} /usr/local/etc/php/php.ini

RUN rm /usr/local/etc/php-fpm.d/www.conf
COPY ./conf/www.conf /usr/local/etc/php-fpm.d/www.conf

COPY ./wait-for-it.sh /usr/bin/wait-for-it.sh
RUN chmod +x /usr/bin/wait-for-it.sh

COPY ./init.sh /init.sh
RUN chmod +x /init.sh

RUN useradd -ms /bin/bash pascalallen

RUN chown -R pascalallen:pascalallen /var/www/app

# Workaround https://bugs.php.net/bug.php?id=71880
RUN mkfifo /tmp/stdout && chmod 777 /tmp/stdout

ENTRYPOINT /bin/bash /usr/bin/wait-for-it.sh -t 60 $DB_HOST:$DB_PORT -- /init.sh
