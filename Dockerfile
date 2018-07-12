FROM ubuntu:16.04
WORKDIR /opt/symfony-demo
RUN apt-get update
RUN apt-get install -y software-properties-common
RUN LC_ALL=C.UTF-8 apt-add-repository -y ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y php7.2 wget curl php-sqlite3 php-mbstring php-xml zip unzip
RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer -O - -q | php -- --quiet
RUN mv composer.phar /usr/local/bin/composer
CMD composer install &&  php /opt/symfony-demo/bin/console server:run 0.0.0.0:8000
