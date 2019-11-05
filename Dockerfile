FROM php:7.3-apache

USER www-data
COPY index.php /var/www/html/

USER root
RUN echo 'LogFormat "%{X-Forwarded-For}i %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined' > /etc/apache2/conf-enabled/custom.conf
