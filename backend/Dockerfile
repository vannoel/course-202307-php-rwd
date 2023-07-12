FROM php:8.2.8

WORKDIR /api

COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y libzip-dev zip

RUN docker-php-ext-install mysqli pdo pdo_mysql zip

# RUN docker-php-ext-install pcntl mysqli pdo pdo_mysql zip

RUN docker-php-ext-enable mysqli pdo pdo_mysql

# RUN docker-php-ext-enable mysqli pdo pdo_mysql imagick redis

RUN composer install

RUN php artisan config:clear

RUN php artisan cache:clear

RUN php artisan key:generate

# Default uploaded file will be saved to underder storage folder, however users are not allow to access files from storage. 
# If it is needed, enable this to link storage to public folder. Then user can access it from public folder.
# RUN php artisan storage:link

# Run up server directly
CMD php artisan serve --host 0.0.0.0 --port 9000

# Waiting for DB service up.
# CMD ./scripts/wait-for-it.sh db:3306 -t 30 -- php artisan migrate --seed \
#     && php artisan serve --host 0.0.0.0 --port 9000

# Keep open
# CMD tail -F anything 

EXPOSE 9000