#!/usr/bin/env bash

docker run -it --name moonchild-site -v $PWD:/usr/share/nginx/html:ro -p 8080:80 nginx:alpine
