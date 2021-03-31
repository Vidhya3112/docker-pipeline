FROM php:7.2-apache
COPY index.html /usr/share/nginx/html/
EXPOSE 80
CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]

