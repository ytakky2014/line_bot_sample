FROM php:5.6-apache
COPY zzz_linebot_test.conf /etc/apache2/sites-enabled/000-default.conf
#RUN rm -f /etc/apache2/sites-enabled/000-default.conf
RUN mkdir -p  /app/AccessLog.local && chmod 777 /app/AccessLog.local

RUN mkdir -p /app/line_bot_sample && chmod 777 /app/line_bot_sample

ADD apps/ /app/line_bot_sample

#ADD index.php /var/www/html/index.php
