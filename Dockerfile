FROM yellowimages/php8.1:xmas2022
WORKDIR /var/www
RUN mkdir -p /var/www/storage/logs /var/www/storage/cache /var/www/storage/framework/views
COPY .env.dev /var/www/.env
# COPY composer.json composer.lock /var/www/
COPY composer.json /var/www/

ENV COMPOSER_MEMORY_LIMIT -1
#disabled prestissimo for now -
#RUN composer global require hirak/prestissimo &&
COPY composer.json composer.lock ./
RUN composer install --prefer-dist --no-scripts --no-ansi --no-interaction --no-progress --no-dev --no-autoloader && rm -rf /root/.composer
RUN apt-get install -y supervisor
#skipping delete dev .env file. In prod will will write .env on top of it
#RUN rm -vf /var/www/.env /var/www/.env.*
#provide .env file for local dev
RUN composer dump-autoload --no-scripts --no-dev --optimize

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
RUN apt-get update && apt-get install -y git && apt-get install -y npm
COPY package.json package-lock.json ./

RUN npm install npm@8.19.2 -g \
    && npm install --no-audit --no-fund

COPY . /var/www/
RUN composer update

EXPOSE 8080 8443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
