<?php
/**
 * pwauth_path contains the path to the pwauth bin.
 *
 * pwauth_path must be set and executable or plugin won't work.
 */
$conf['pwauth_path'] = '/usr/sbin/pwauth';

/**
 * passwd_path contains the path to passwd file in the system.
 *
 * If passwd_path is set and readable, the plugin is able to list, on Dokuwiki's 
 * User Manager, the system users from the passwd file.
 *
 * (Excluding root).
 */
$conf['passwd_path'] = false; //To enable, set to: '/etc/passwd';

/**
 * shells_ path contains the path to the shells file in the system.
 *
 * If passwd_path is set and readable, and shells_path is set and readable, 
 * the plugin is able to list, on Dokuwiki's User Manager, the system users from 
 * the passwd who can login, thus excluding service users. 
 *
 * (Excluding root).
 */
$conf['shells_path'] = false; //To enable, set to: '/etc/shells';

/**
 * email_domain_name contains the domain name part of the e-mail address of users.
 *
 * If email_domain_name is unset, the e-mail value for users will be empty.
 *
 * If email_domain_name is set and non-false, the e-mail address for users will 
 * be <username>@<email_domain_name>.
 *
 * Appropiate values for email_domain_name include the name or address of the 
 * e-mail server, the institutional domain-name, among others. This address is
 * NOT validated against the e-mail server or any other source.
 */
$conf['email_domain_name'] = false; //Posible values: example.com, mail.example.com, or php_uname("n");
?>
