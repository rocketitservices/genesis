#!/bin/bash

sudo apt-get update
sudo apt-get install -y software-properties-common
sudo add-apt-repository ppa:nginx/stable
sudo apt-get -y dist-upgrade
sudo apt-get install -y php5-fpm nginx php5-mysql php5-gd libssh2-php

sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password Cracker55'
sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password Cracker55'
sudo apt-get -y install mysql-server
sudo mysql_install_db

if [ ! -f /var/log/databasesetup ];
then
    echo "CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'wordpresspass'" | mysql -uroot -pCracker55
    echo "CREATE DATABASE wordpress" | mysql -uroot -pCracker55
    echo "GRANT ALL ON wordpress.* TO 'wordpressuser'@'localhost'" | mysql -uroot -pCracker55
    echo "flush privileges" | mysql -uroot -pCracker55

    touch /var/log/databasesetup

    if [ -f /vagrant/data/initial.sql ];
    then
        mysql -uroot -pCracker55 wordpress < /vagrant/data/initial.sql
    fi
fi

sudo cp /vagrant/php.ini /etc/php5/fpm/
sudo cp /vagrant/default /etc/nginx/sites-available/

sudo service php5-fpm restart
sudo service nginx restart
