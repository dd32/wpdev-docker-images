#!/bin/bash
set -e

# PHP 8.5 beta1 - opcache, xdebug, and memcached are not yet compatible
# Skip extension enabling for now

### Change UID/GID
WP_PHP_UID="${PHP_FPM_UID-1000}"
WP_PHP_GID="${PHP_FPM_GID-1000}"

if [ "$WP_PHP_UID" != "`id -u wp_php`" ]; then
	usermod -o -u "${WP_PHP_UID}" "wp_php"
fi

if [ "$WP_PHP_GID" != "`id -g wp_php`" ]; then
	groupmod -o -g "${WP_PHP_GID}" "wp_php"
fi