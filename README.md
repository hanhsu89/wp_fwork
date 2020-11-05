# Wordpress Website

# Prequisite

Domains: https://home.fpt.work

PHP version: 7.4

MySQL version: 8

## Config

### Database

- `cp wp-config-sample.php wp-config.php`  
- then edit the database configuration  

<pre>
<code>
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
</code>
</pre>

- import sample database: sample_db.sql
- update database: `UPDATE fsp_options SET option_value = "your_domain" where option_name in ("siteurl", "home");`
- login: http://your_domain.com/wp-admin
    - account demo: username: longdm5, password: 123123

