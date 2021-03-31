FROM helo-world
COPY index.html /var/www/html/
EXPOSE 80
CMD ["/usr/sbin/apache2ctl","-D","FOREGROUND"]

