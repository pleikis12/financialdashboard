# Use an official PHP image as the base image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/html/html/php
# Copy website files into the container
COPY ../php/ /var/www/html/php
COPY ../img/ /var/www/html/img
COPY ../js/ /var/www/html/js
COPY ../css/ /var/www/html/css

# Expose port 80
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]

