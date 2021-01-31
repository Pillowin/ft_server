FROM debian:buster
LABEL maintainer="agautier <agautier@student.42.fr>"

COPY srcs /srcs/

# Download
RUN echo "exit 0" > /usr/sbin/policy-rc.d && \
	echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections && \
	apt-get update && \
	apt-get install -y \
		wget \
		nginx \
		php-fpm \
		default-mysql-server \
		php-mysql && \
	wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz -O /srcs/phpmyadmin.tar.gz && \
	wget https://fr.wordpress.org/latest-fr_FR.tar.gz -O /srcs/wordpress.tar.gz

#  Install
RUN	tar -xf /srcs/phpmyadmin.tar.gz --one-top-level=/usr/share/phpmyadmin --strip-components 1 && \
	tar -xf /srcs/wordpress.tar.gz -C /var/www/html/ && \
	mv /srcs/wp-config.php /var/www/html/wordpress/ && \
	ln -s /usr/share/phpmyadmin/ /var/www/html/phpmyadmin && \
	mv /srcs/config.inc.php /usr/share/phpmyadmin/ && \
	mv /srcs/wordpress /etc/nginx/sites-available && \
	rm /etc/nginx/sites-enabled/default && \
	ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/ && \
	service mysql start && mysql < /srcs/wordpress.sql

CMD ["bash", "/srcs/start.sh"]
EXPOSE 80
EXPOSE 443
