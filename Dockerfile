# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy all files to the web root
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Apache will start automatically
CMD ["apache2-foreground"]

