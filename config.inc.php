<?php

$rcmail_config = array();

// allow vacation start/end dates
$rcmail_config['vacation_gui_vacationdate'] = FALSE;

// allow vacation subject
$rcmail_config['vacation_gui_vacationsubject'] = FALSE;

// allow HTML for vacation message 
$rcmail_config['vacation_gui_vacationmessage_html'] = FALSE;

// allow sending message to be keep in inbox
$rcmail_config['vacation_gui_vacationkeepcopyininbox'] = FALSE;

// allow vacation forwarder
$rcmail_config['vacation_gui_vacationforwarder'] = FALSE;

// default vacation subject
$rcmail_config['vacation_subject_default'] =  null;

// default vacation message
$rcmail_config['vacation_message_default'] = 'I\'m currently out of office.';

// vacation start/end date format
$rcmail_config['vacation_dateformat'] = null;

// jquery calendar (jqueryui plugin must be enabled)
$rcmail_config['vacation_jquery_calendar'] = FALSE;
$rcmail_config['vacation_jquery_dateformat'] = 'mm/dd/yy';

// add MIME header before the message
$rcmail_config['vacation_message_mime'] = '';

// allow multiple forwarders
$rcmail_config['vacation_forwarder_multiple'] = FALSE;
$rcmail_config['vacation_forwarder_separator'] = ',';

// driver used for backend storage
$rcmail_config['vacation_driver'] = 'ldap';


/*
 * LDAP driver
 */

// Server hostname
$rcmail_config['vacation_ldap_host'] = 'example.com';

// Server port
$rcmail_config['vacation_ldap_port'] = 389;

// Use TLS flag
$rcmail_config['vacation_ldap_starttls'] = false;

// Protocol version
$rcmail_config['vacation_ldap_version'] = 3;

// Base DN
$rcmail_config['vacation_ldap_basedn'] = 'ou=people,dc=example,dc=com';

// Bind DN
$rcmail_config['vacation_ldap_binddn'] = 'cn=Directory Manager';

// Bind password
$rcmail_config['vacation_ldap_bindpw'] = 'password';

// Attribute name to map email address
$rcmail_config['vacation_ldap_attr_email'] = mail;

// Attribute name to map email local part
$rcmail_config['vacation_ldap_attr_emaillocal'] = null;

// Attribute name to map email domain
$rcmail_config['vacation_ldap_attr_emaildomain'] = null;

// Attribute name to map vacation flag
$rcmail_config['vacation_ldap_attr_vacationenable'] = 'vacationStatus';

// Attribute value for enabled vacation flag
$rcmail_config['vacation_ldap_attr_vacationenable_value_enabled'] = 'TRUE';

// Attribute value for disabled vacation flag
$rcmail_config['vacation_ldap_attr_vacationenable_value_disabled'] = 'FALSE';


// Attribute name to map vacation start
$rcmail_config['vacation_ldap_attr_vacationstart'] = null;

// Attribute name to map vacation end
$rcmail_config['vacation_ldap_attr_vacationend'] = null;

// Attribute name to map vacation subject
$rcmail_config['vacation_ldap_attr_vacationsubject'] = null;

// Attribute name to map vacation message
$rcmail_config['vacation_ldap_attr_vacationmessage'] = 'vacationMessage';

// Attribute name to map vacation keep copy in inbox flag
$rcmail_config['vacation_ldap_attr_vacationkeepcopyininbox'] = null;

// Attribute value for enabled vacation keep copy in inbox flag
$rcmail_config['vacation_ldap_attr_vacationkeepcopyininbox_value_enabled'] =  null;

// Attribute value for disabled vacation keep copy in inbox flag
$rcmail_config['vacation_ldap_attr_vacationkeepcopyininbox_value_disabled'] = null;

// Attribute name to map vacation forwarder
$rcmail_config['vacation_ldap_attr_vacationforwarder'] = null;

// Search base to read data
$rcmail_config['vacation_ldap_search_base'] = "ou=people,dc=example,dc=com";

// Search filter to read data
$rcmail_config['vacation_ldap_search_filter'] = '(mail=%email)';

// Search attributes to read data
$rcmail_config['vacation_ldap_search_attrs'] = array (
						      'vacationStatus',
						      'vacationMessage');

// array of DN to use for modify operations required to write data.
$rcmail_config['vacation_ldap_modify_dns'] = array (
						    'cn=%email_local,ou=Mailboxes,dc=%email_domain,ou=MailServer,dc=ldap,dc=my,dc=domain'
						    );

// array of operations required to write data.
$rcmail_config['vacation_ldap_modify_ops'] = array(
						   array ('replace' => array(
									     $rcmail_config['vacation_ldap_attr_vacationenable'] => '%vacation_enable',
									     $rcmail_config['vacation_ldap_attr_vacationmessage'] => '%vacation_message',
									     $rcmail_config['vacation_ldap_attr_vacationforwarder'] => '%vacation_forwarder'
									     )
							  )
						   );

// end vacation config file
