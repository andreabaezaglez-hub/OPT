FROM ubuntu:latest
RUN apt update && \
apt -y upgrade && \
apt -qq -y install apache2 \
php libapache2-mod-php
COPY ./config/apache2.conf /etc/apache2/apache2.conf
RUN a2dismod -f autoindex
RUN mkdir -p /var/run/apache2 /var/lock/apache2 /var/log/apache2
RUN chown -R www-data:www-data \
 /var/run/apache2 /var/lock/apache2 /var/log/apache2
WORKDIR /var/www/html
COPY index.php /var/www/html/
USER www-data
EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"] 
