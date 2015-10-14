#!/bin/sh

# install php libs
composer install

# install swagger-ui
git clone https://github.com/swagger-api/swagger-ui.git
cd swagger-ui
npm install

