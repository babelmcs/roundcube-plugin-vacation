# Vacation

Vacation is a RoundCube Webmail plugin for handling vacation 
time and supplying autoresponding features.

This work is entirely forked from 'rc-vacation' 
(https://github.com/bhuisgen/rc-vacation) plugin by Boris Huisgen 
(http://blog.hbis.fr, <bhuisgen@hbis.fr>), released under GNU GPL licence.

## Install

Requirements :
* jQuery UI.
* PEAR Net/LDAP2 (LDAP driver).

To install this plugin, copy his directory into the 'plugins' directory of your
Roundcube instance and activate it by adding his name 'vacation' to the option
array 'plugins' in config/main.inc.php :

// List of active plugins (in plugins/ directory)
$rcmail_config['plugins'] = array('vacation');

Edit the plugin configuration file 'config.inc.php'. You must choose the
driver for your backend storage and configure his options.
