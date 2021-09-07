FROM php:7.4-fpm

RUN apt update && apt -y upgrade 

RUN apt install -y --no-install-recommends curl apt-utils mcrypt libpq-dev libz-dev libfreetype6-dev zlib1g-dev libssl-dev libmcrypt-dev libxml2-dev libxslt-dev libzip-dev libbz2-dev libmcrypt-dev\
    && docker-php-ext-install pcntl \
    && docker-php-ext-configure gd \
    && docker-php-ext-install zip \
    && docker-php-ext-install bz2 \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install xmlrpc \
    && docker-php-ext-install xsl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && chmod ugo+x /usr/local/bin/composer

RUN rm -rf /var/lib/apt/lists/*