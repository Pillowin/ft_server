#! /bin/bash

if grep -q "autoindex off;" /etc/nginx/sites-available/wordpress
then
	sed -i 's/autoindex off;/autoindex on;/g' /etc/nginx/sites-available/wordpress
	sed -i 's/index index.php index.html wordpress;/#index index.php index.html wordpress;/g' /etc/nginx/sites-available/wordpress
else
	sed -i 's/autoindex on;/autoindex off;/g' /etc/nginx/sites-available/wordpress
	sed -i 's/#index index.php index.html wordpress;/index index.php index.html wordpress;/g' /etc/nginx/sites-available/wordpress
fi

nginx -s reload
