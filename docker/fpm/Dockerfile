FROM akeneo/fpm:php-7.2
MAINTAINER Anaël Chardan <anael.chardan@gmail.com>

RUN apt-get update && \
    apt-get --no-install-recommends --no-install-suggests --yes --quiet install php7.2-dev php-pear && \
    pecl install ds && \
    apt-get clean && apt-get --yes --quiet autoremove --purge && \
    rm -rf  /var/lib/apt/lists/* /tmp/* /var/tmp/* \
            /usr/share/doc/* /usr/share/groff/* /usr/share/info/* /usr/share/linda/* \
            /usr/share/lintian/* /usr/share/locale/* /usr/share/man/*