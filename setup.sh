#!/usr/bin/env bash

php-config --extension-dir > /dev/null
if [ $? -eq 0 ]
then
	sudo mv Source.so $(php-config --extension-dir)/
else
	sudo apt install php-config
	sudo mv Source.so $(php-config --extension-dir)/
fi
