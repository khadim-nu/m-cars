game-portal
===========

database creation:

database name: game-zone

database type: utf8_general_ci

<h3>To run migration</h3>

<domain>/web-portal/index.php/migrate

<h3>seed: </h3>

<domain>/web-portal/index.php/seed


RabbitMQ(Amp)
==========================

Download:
http://www.rabbitmq.com/releases/rabbitmq-server/v3.4.1/rabbitmq-server_3.4.1-1_all.deb

Installation:

sudo dpkg -i rabbitmq-server_3.4.1-1_all.deb 

Usage:

php <path-to-Web-Portal>/worker/send_email_handler.php

This will invoke the listener worker to process job

To list all the queues and the job, open terminal and run

sudo rabbitmqctl list_queues name messages_ready


Openfire(XMPP)
================================

Download:

http://www.igniterealtime.org/downloads/download-landing.jsp?file=openfire/openfire_3.9.3_all.deb


Installation:

sudo dpkg -i openfire_3.9.3_all.deb

Setup a database 

Once done hit http://localhost:9090 to wizard the setup

For more On installation:

http://www.igniterealtime.org/builds/openfire/docs/latest/documentation/install-guide.html


<h2>Enable Multiple Login on openfire </h2>

Goto Sever Manager ->  System Properties 

Add New property

route.all-resources 

Set value to True

<h2>Enable BOSH</h2>
Todo

Redis
================================

apt-get install php5-dev

Download:

https://github.com/nicolasff/phpredis

Unzip and goto folder open terminal and run the following commands

1. phpize
2. ./configure
3. sudo -s
4. make
5. make install

touch /etc/php5/conf.d/redis.ini (if file not exists, goto next step)

touch /etc/php5/mods-available/redis.ini

echo extension=redis.so > /etc/php5/mods-available/redis.ini

ln -s /etc/php5/mods-available/redis.ini /etc/php5/apache2/conf.d

ln -s /etc/php5/mods-available/redis.ini /etc/php5/cli/conf.d


php -r "if (new Redis() == true){ echo \"\r\n OK \r\n\ "; }"

Must display OK if everything works fine

restart apache server



JAVA Worker (MUC,Room Creation and User Creation)
===================================================

Installation:

http://blog.bekijkhet.com/2014/04/install-oracle-jdk-in-ubuntu.html

create a new user of admin type in openfire

Goto /Java-bot

open terminal and run

edit hotrod-room-creation.sh and set the username and password accordingly to the new admin
e.g.

nohup java -jar room-creation.jar mucbot@localhost 123 &

make changes in both hotrod-room-creation.sh and hotrod-send-message.sh 

sh hotrod-room-creation.sh
sh hotrod-send-message.sh
sh hotrod-user-creation.sh

Room Creation:

On room creation, a third argument is passed now, to accomodate the server name, for example localhost or pc-name etc. selected when configuring openfire.

And in openfire, make the following settings:
- Select Persistent
- Select moderate
- Un-select anyone can join the room
- Un-select anyone can see the jabber id
- 

Openfire User Creation Plugin:
================================

Login to openfire goto Plugins -> Available Plugins 
Add User Service Plugin (author Roman)

Now goto Server -> Server Settings -> User Service 'Enable the plugin'. Copy the secret key and change the OPSECRET constant accordingly located in Web-Portal constant file.
