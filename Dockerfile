FROM php:7.2-apache
COPY src/index.php /var/www/html
EXPOSE 80
CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]

