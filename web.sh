#!/usr/bin/env bash

docker rm -f moonchild-site
docker run -d --rm -p 8080:80 --name moonchild-site -v "$PWD":/var/www/html:ro php:7.2-apache
