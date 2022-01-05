#!/usr/bin/env bash

docker run -d -p 8080:80 --name moonchild-site -v "$PWD":/var/www/html:ro php:7.2-apache
