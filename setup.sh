#!/bin/bash
clear

[[ `which git 2>/dev/null` ]] || echo "Err! git binary not found in PATH" || exit 1
[[ `which composer 2>/dev/null` ]] || echo "Err! composer binary not found in PATH" || exit 1
[[ `which php 2>/dev/null` ]] || echo "Err! php binary not found in PATH" || exit 1
[[ `which npm 2>/dev/null` ]] || echo "Warning! npm binary not found in PATH"
[[ `which bower 2>/dev/null` ]] || echo "Warning! bower binary not found in PATH"

git clone https://github.com/kossa/laralte2.git
cd laralte2
composer install                   # Install backend dependencies
bower install                      # Install frontend dependencies
npm install apidoc -g              # Install apidoc

# Default credentials
DBNAME=${DBNAME:-LLTE2}
DBUSER=${DBUSER:-llte2}
DBPSWD=${DBPSWD:-llte2}
REDISPSWD=${REDISPSWD:-llte2}
# Override default config
cat .env.example | \
    sed -e s/LLTE2DB/"$DBNAME"/ | \
    sed -e s/llte2user/"$DBUSER"/ | \
    sed -e s/llte2pswd/"$DBPSWD"/ | \
    sed -e s/llte2redispswd/"$REDISPSWD"/ \
    > .env
echo -e "\n\nYour current configuration:\n"
cat .env

php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:refresh --seed # Run migration and seed users and categories for testing
chmod 777 -R storage/              # Chmod Storage

echo -e "\n\nDo not forget to update your .env file!\n"
