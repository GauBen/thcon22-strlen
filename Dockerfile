FROM mobtitude/php-xdebug:8.1-apache
RUN echo >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo xdebug.show_local_vars=1 >> /usr/local/etc/php/conf.d/xdebug.ini
COPY index.php /var/www/html/
COPY flag.txt /var/www/html/
COPY .htaccess /var/www/html/
