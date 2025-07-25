<?php

// The latest stable version of PHP that is supported in WordPress trunk.
$latest = '8.2';

/**
 * An array of all PHP versions that we need to generate images for, and their config settings.
 *
 * Each PHP version has settings for the PHP base image, the PHPUnit image, and the WP_CLI image.
 *
 * The minimum version of PHP required as of WordPress 6.6 is 7.2.24+.
 *
 * @see https://make.wordpress.org/core/handbook/references/php-compatibility-and-wordpress-versions/
 *
 * @param array $php {
 *     @type string $base_name       The name of the Docker image to base our image off of.
 *     @type array  $apt             An array of apt packages that need to be installed.
 *     @type array  $extensions      An array of PHP extensions that need to be enabled.
 *     @type array  $pecl_extensions An array of PECL-sourced PHP extensions that will be installed, but not enabled.
 * }
 *
 * @param int $phpunit The major version branch of PHPUnit to install on this image.
 *
 * @param array|false $cli {
 *     @type string $mysql_client The name of the MySQL client Ubuntu package on this image.
 *     @type string $download_url The download URL for the version of WP-CLI to install on this image.
 * }
 */
$php_versions = array(
	'7.2' => array(
		'php' => array(
			'base_name'       => 'php:7.2-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-3.1.6', 'memcached-3.3.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 7,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'7.3' => array(
		'php' => array(
			'base_name'       => 'php:7.3-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-3.1.6', 'memcached-3.3.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 7,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'7.4' => array(
		'php' => array(
			'base_name'       => 'php:7.4-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-3.1.6', 'memcached-3.3.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 7,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'8.0' => array(
		'php' => array(
			'base_name'       => 'php:8.0-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'memcached-3.3.0', 'xdebug-3.4.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 9,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'8.1' => array(
		'php' => array(
			'base_name'       => 'php:8.1-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'memcached-3.3.0', 'xdebug-3.4.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 9,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'8.2' => array(
		'php' => array(
			'base_name'       => 'php:8.2-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'memcached-3.3.0', 'xdebug-3.4.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 9,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'8.3' => array(
		'php' => array(
			'base_name'       => 'php:8.3-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libssl-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'memcached-3.3.0', 'xdebug-3.4.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 9,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'8.4' => array(
		'php' => array(
			'base_name'       => 'php:8.4-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libssl-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'memcached-3.3.0', 'xdebug-3.4.0', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 9,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
);

/**
 * An array of all legacy PHP versions that we need to generate images for, and their config settings.
 *
 * Each PHP version has settings for the PHP base image, the PHPUnit image, and the WP_CLI image.
 *
 * These versions of PHP have been unsupported for some time, and rarely need to be regenerated.
 *
 * @see https://make.wordpress.org/core/handbook/references/php-compatibility-and-wordpress-versions/
 *
 * @param array $php {
 *     @type string $base_name       The name of the Docker image to base our image off of.
 *     @type array  $apt             An array of apt packages that need to be installed.
 *     @type array  $extensions      An array of PHP extensions that need to be enabled.
 *     @type array  $pecl_extensions An array of PECL-sourced PHP extensions that will be installed, but not enabled.
 * }
 *
 * @param int $phpunit The major version branch of PHPUnit to install on this image.
 *
 * @param array|false $cli {
 *     @type string $mysql_client The name of the MySQL client Ubuntu package on this image.
 *     @type string $download_url The download URL for the version of WP-CLI to install on this image.
 * }
 */
$legacy_php_versions = array(
	'5.2' => array(
		'php' => array(
			'base_name'       => 'devilbox/php-fpm-5.2:latest',
			'apt'             => array( 'sudo', 'rsync' ),
			'extensions'      => array(),
			'pecl_extensions' => array( 'zendopcache-7.0.5', 'xdebug-2.2.7' ),
			'composer'        => false,
		),
		'phpunit' => 3,
		'cli' => false,
	),
	'5.3' => array(
		'php' => array(
			'base_name'       => 'devilbox/php-fpm-5.3:0.21',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libicu-dev', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'mysql', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'zendopcache-7.0.5', 'xdebug-2.2.7' ),
			'composer'        => true,
		),
		'phpunit' => 4,
		'cli' => array(
			'mysql_client' => 'mysql-client',
			'download_url' => 'https://github.com/wp-cli/wp-cli/releases/download/v1.5.1/wp-cli-1.5.1.phar',
		),
	),
	'5.4' => array(
		'php' => array(
			'base_name'       => 'php:5.4-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libicu-dev', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'mysql', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'zendopcache-7.0.5', 'xdebug-2.4.1', 'memcached-2.2.0', 'imagick-3.4.4' ),
			'composer'        => true,
		),
		'phpunit' => 4,
		'cli' => array(
			'mysql_client' => 'mysql-client',
			'download_url' => 'https://github.com/wp-cli/wp-cli/releases/download/v2.4.0/wp-cli-2.4.0.phar',
		),
	),
	'5.5' => array(
		'php' => array(
			'base_name'       => 'php:5.5-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libicu-dev', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'mysql', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-2.5.5', 'memcached-2.2.0', 'imagick-3.4.4' ),
			'composer'        => true,
		),
		'phpunit' => 4,
		'cli' => array(
			'mysql_client' => 'mysql-client',
			'download_url' => 'https://github.com/wp-cli/wp-cli/releases/download/v2.4.0/wp-cli-2.4.0.phar',
		),
	),
	'5.6.20' => array(
		'php' => array(
			'base_name'       => 'php:5.6.20-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libicu-dev', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'mysql', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-2.5.5', 'memcached-2.2.0', 'imagick-3.4.4' ),
			'composer'        => true,
		),
		'phpunit' => 5,
		'cli' => array(
			'mysql_client' => 'mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'5.6' => array(
		'php' => array(
			'base_name'       => 'php:5.6-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'mysql', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-2.5.5', 'memcached-2.2.0', 'imagick-3.4.4' ),
			'composer'        => true,
		),
		'phpunit' => 5,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'7.0' => array(
		'php' => array(
			'base_name'       => 'php:7.0-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-2.7.2', 'memcached-3.1.5', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 6,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
	'7.1' => array(
		'php' => array(
			'base_name'       => 'php:7.1-fpm',
			'apt'             => array( 'libjpeg-dev', 'libpng-dev', 'libwebp-dev', 'libzip-dev', 'libmemcached-dev', 'unzip', 'libmagickwand-dev', 'ghostscript', 'libonig-dev', 'locales', 'sudo', 'rsync', 'libxslt-dev' ),
			'extensions'      => array( 'gd', 'opcache', 'mysqli', 'zip', 'exif', 'intl', 'mbstring', 'xml', 'xsl' ),
			'pecl_extensions' => array( 'xdebug-2.9.8', 'memcached-3.1.5', 'imagick' ),
			'composer'        => true,
		),
		'phpunit' => 7,
		'cli' => array(
			'mysql_client' => 'virtual-mysql-client',
			'download_url' => 'https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar',
		),
	),
);

/**
 * An array of all PHPUnit and PHP version combinations that we need to generate images for.
 *
 * Different WordPress versions support different versions of PHP and different versions of PHPUnit.
 * This creates a need to run multiple versions of PHPUnit on each version of PHP.
 *
 * These versions of PHPUnit are no longer supported and do not receive updates.
 * Regenerating these containers should very rarely be required.
 *
 * @param array $legacy_phpunit_versions A list of PHP versions for each PHPUnit version.
 */
$legacy_phpunit_versions = array(
	'9' => array(
		'8.3',
		'8.2',
		'8.1',
		'8.0',
		'7.4',
		'7.3',
	),
	'8' => array(
		'8.2',
		'8.1',
		'8.0',
		'7.4',
		'7.3',
		'7.2',
	),
	'7' => array(
		'7.4',
		'7.3',
		'7.2',
		'7.1',
		'7.0',
	),
	'6' => array(
		'7.3',
		'7.2',
		'7.1',
		'7.0',
	),
	'5' => array(
		'7.0',
		'5.6.20',
		'5.6',
	),
	'4' => array(
		'5.6.20',
		'5.6',
	)
);

// A warning that will be added to each Dockerfile, to ensure folks don't edit them directly.
$generated_warning = <<<EOT
##########################################################################
#
# WARNING: This file was generated by update.php.
#
# You can find the relevant template in the `/templates` folder.
#
EOT;

// Load the templates.
$templates = array(
	'php'     => file_get_contents( 'templates/Dockerfile-php.template' ),
	'phpunit' => file_get_contents( 'templates/Dockerfile-phpunit.template' ),
	'cli'     => file_get_contents( 'templates/Dockerfile-cli.template' ),
);

// Loop through each PHP version, and generate the Dockerfiles.
foreach ( array_merge( $legacy_php_versions, $php_versions ) as $version => $images ) {
	$title = "| PHP $version |";
	echo str_repeat( '-', strlen( $title ) ) . "\n";
	echo "$title\n";
	echo str_repeat( '-', strlen( $title ) ) . "\n";

	foreach ( $images as $image => $config ) {
		echo str_pad( $image, 15, '.' );
		echo shell_exec( "mkdir -p images/{$version}/{$image}" );

		$dockerfile = $templates[ $image ];

		$dockerfile = str_replace( '%%GENERATED_WARNING%%', $generated_warning, $dockerfile );

		// PHPUnit and WP-CLI image parent tags vary depending on whether it's a PHP version, or "latest".
		if ( 'latest' === $version ) {
			$version_tag = 'latest';
		} else {
			$version_tag = "$version-fpm";
		}
		$dockerfile = str_replace( '%%VERSION_TAG%%', $version_tag, $dockerfile );

		if ( $image === 'php' ) {
            // Temporarily enforce using an image that is correctly installing `libmemcached-dev`.
			$current_base_name = $config['base_name'];
			if ( in_array( $config['base_name'], array( 'php:8.1-fpm', 'php:8.2-fpm' ) ) ) {
            	$current_base_name = str_replace( '-fpm', '-fpm-bullseye', $current_base_name );
			}

            // Replace tags inside the PHP Dockerfile template.
			$dockerfile = str_replace( '%%BASE_NAME%%', $current_base_name, $dockerfile );

			if ( $config['apt'] || $config['extensions'] || $config['pecl_extensions'] || $config['composer'] ) {
				$install_extensions = "# install the PHP extensions we need\nRUN set -ex;";

				// Composer requires git to be installed in some circumstances (e.g. `composer install --prefer-source`).
				if ( $config['composer'] ) {
					$config['apt'][] = 'git';
				}

				if ( $config['apt'] ) {
					$install_extensions .= " \\\n\t\\\n\t";
					// Debian 9/stretch was moved to archive.debian.org in March 2023. See https://lists.debian.org/debian-devel-announce/2023/03/msg00006.html.
					if ( $version == '7.0' ) {
						$install_extensions .= "echo 'deb http://archive.debian.org/debian stretch main contrib non-free' | tee /etc/apt/sources.list; \\\n\t\\\n\t";
					}

					$install_extensions .= "apt-get update; \\\n\t\\\n\tapt-get install -y --no-install-recommends " . implode( ' ', $config['apt'] ) . ";";

					// Ensure certificates are updated.
					$install_extensions .= " \\\n\tapt-get upgrade openssl -y;";
					$install_extensions .= " \\\n\tupdate-ca-certificates --fresh;";

					// We need to add some locales for testing.
					if ( array_search( 'locales', $config['apt'], true ) ) {
						$install_extensions .= " \\\n\tsed -i 's/^# *\(\(ru_RU\|fr_FR\|de_DE\|es_ES\|ja_JP\).UTF-8\)/\\1/' /etc/locale.gen;";
						$install_extensions .= " \\\n\tlocale-gen;";
					}
				}

				if ( in_array( 'gd', $config['extensions'], true ) ) {
					$install_extensions .= " \\\n\t\\\n\t";

					if ( version_compare( $version, '7.4' ) >= 0 ) {
						$install_extensions .= "docker-php-ext-configure gd --enable-gd --with-jpeg=/usr --with-webp=/usr;";
					} else {
						$install_extensions .= "docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr --with-webp-dir=/usr;";
					}
				}

				if ( $config['extensions'] ) {
					$install_extensions .= " \\\n\t\\\n\t";
					$install_extensions .= "docker-php-ext-install " . implode( ' ', $config['extensions'] ) . ";";
				}

				if ( $config['pecl_extensions'] ) {
					$install_extensions .= " \\\n\t\\\n";

					$install_extensions .= array_reduce( $config['pecl_extensions'], function ( $command, $extension ) use ( $version ) {
						if ( $command ) {
							$command .= " \\\n";
						}

						$command .= "\tpecl install $extension;";

						if ( 0 === strpos( $extension, 'imagick' ) ) {
							$command .= " \\\n\tdocker-php-ext-enable imagick;";
						}

						return $command;
					}, '' );
				}

				if ( $config['composer'] ) {
					$install_extensions .= " \\\n\t\\\n";
					$install_extensions .= "\tcurl --silent --fail --location --retry 3 --output /tmp/installer.php --url https://getcomposer.org/installer; \\\n";
					$install_extensions .= "\tcurl --silent --fail --location --retry 3 --output /tmp/installer.sig --url https://composer.github.io/installer.sig; \\\n";
					$install_extensions .= "\tphp -r \" \\\n";
					$install_extensions .= "\t\t\\\$signature = file_get_contents( '/tmp/installer.sig' ); \\\n";
					$install_extensions .= "\t\t\\\$hash = hash( 'sha384', file_get_contents('/tmp/installer.php') ); \\\n";
					$install_extensions .= "\t\tif ( \\\$signature !== \\\$hash ) { \\\n";
					$install_extensions .= "\t\t\tunlink( '/tmp/installer.php' ); \\\n";
					$install_extensions .= "\t\t\tunlink( '/tmp/installer.sig' ); \\\n";
					$install_extensions .= "\t\t\techo 'Integrity check failed, installer is either corrupt or worse.' . PHP_EOL; \\\n";
					$install_extensions .= "\t\t\texit( 1 ); \\\n";
					$install_extensions .= "\t\t}\"; \\\n";
					$install_extensions .= "\tphp /tmp/installer.php --no-ansi --install-dir=/usr/bin --filename=composer; \\\n";
					$install_extensions .= "\tcomposer --ansi --version --no-interaction; \\\n";
					$install_extensions .= "\trm -f /tmp/installer.php /tmp/installer.sig;";
				}

				$dockerfile = str_replace( '%%INSTALL_EXTENSIONS%%', $install_extensions, $dockerfile );
			}

			copy( "entrypoint/common.sh", "images/{$version}/{$image}/common.sh" );

		} elseif ( $image === 'phpunit' ) {
			// Replace tags inside the PHPUnit Dockerfile template.
			$dockerfile = str_replace( '%%PHPUNIT_VERSION%%', $config, $dockerfile );

			// Ensure PHPUnit can be successfully downloaded in older containers.
			if ( '7.1' > $version ) {
				$dockerfile = str_replace( 'RUN curl -sL', 'RUN curl -sLk', $dockerfile );
			}
		} elseif ( $image === 'cli' ) {
			// Replace tags inside the WP-CLI Dockerfile template.
			if ( $config ) {
				$dockerfile = preg_replace( '|\n%%OLD_PHP%%.*%%/OLD_PHP%%\n|s', '', $dockerfile );
				$dockerfile = str_replace( '%%MYSQL_CLIENT%%', $config['mysql_client'], $dockerfile );
				$dockerfile = str_replace( '%%DOWNLOAD_URL%%', $config['download_url'], $dockerfile );
			} else {
				// WP-CLI isn't available for this version of PHP.
				$dockerfile = preg_replace( '|\n%%NEW_PHP%%.*%%/NEW_PHP%%\n|s', '', $dockerfile );
			}
		}

		// Cleanup any leftover tags.
		$dockerfile = preg_replace( '/%%[^%]+%%/', '', $dockerfile );

		// Write the real Dockerfile.
		write_file( "images/{$version}/{$image}/Dockerfile", $dockerfile );

		// Copy the entrypoint script, if it exists.
		if ( file_exists( "entrypoint/entrypoint-$image.sh" ) ) {
			copy( "entrypoint/entrypoint-$image.sh", "images/{$version}/{$image}/entrypoint.sh" );
		}

		// Copy the PHP-FPM configuration, if it exists.
		if ( file_exists( "config/php-fpm-$image.conf" ) ) {
			copy( "config/php-fpm-$image.conf", "images/{$version}/{$image}/php-fpm.conf" );
		}

		echo "✅\n";
	}

	$workflow_templates = array(
		'docker-hub.yml' => 'GITHUB',
		'github-container-registry.yml' => 'DOCKER_HUB',
	);

	// Load the GitHub Actions template.
	$workflow_template = file_get_contents( 'templates/workflow.yml-template' );
	$workflow_template = str_replace( '%%GENERATED_WARNING%%', $generated_warning, $workflow_template );

	$php_version_list = "'" . implode( "', '", array_keys( $php_versions ) ) . "'";
	$workflow_template = str_replace( '%%PHP_VERSION_LIST%%', $php_version_list, $workflow_template );

	$workflow_template = str_replace( '%%PHP_LATEST%%', $latest, $workflow_template );

	foreach ( $workflow_templates as $name => $remove_pattern ) {
		// Save two GitHub Action workflows.
		$workflow_contents = preg_replace( "/%%$remove_pattern%%[\s\S]+?%%\/$remove_pattern%%/", '', $workflow_template );
		$workflow_contents = preg_replace( '/%%[^%]+%%/', '', $workflow_contents );

		write_file( '.github/workflows/' . $name, $workflow_contents );
	}
}

/**
 * Write file.
 *
 * @param string $file     File path.
 * @param string $contents File contents.
 */
function write_file( $file, $contents ) {
	$fh = fopen( $file, 'w' );
	fwrite( $fh, $contents );
	fclose( $fh );
}
