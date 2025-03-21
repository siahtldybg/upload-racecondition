FROM php:8.1-apache

RUN apt-get update 

USER root

RUN chmod u+s $(which find)

RUN chmod u+x $(which find)

RUN echo "" > /root/flag.txt

RUN echo "" > /opt/flag.txt

RUN chmod 644 /opt/flag.txt

RUN chown www-data /var/www/*
