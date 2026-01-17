FROM php:8.3-apache

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite para URLs limpias
RUN a2enmod rewrite

# Copiar código del proyecto
COPY . /var/www/html

# Permisos
RUN chown -R www-data:www-data /var/www/html
