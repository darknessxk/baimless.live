#!/bin/bash

if [ ! -f "$PWD/laradock/.env" ]; then
	if [ ! $UID -eq 0 ]; then
		echo "docker folder env file not found, run as sudo to create"
		exit;
	fi

	sudo ln -s $PWD/docker_env $PWD/laradock/.env
	echo "docker env file linked to the folder, run again without sudo"
	exit;
fi

if [ $UID -eq 0 ]; then
	echo "Run without sudo!"
	exit;
fi

cd laradock
# docker-compose up $1 nginx redis workspace redis redis-webui mailhog postgres laravel-horizon laravel-echo-server grafana
docker-compose up $1 nginx redis workspace redis redis-webui mailhog postgres
