#!/usr/bin/env bash

php-config --extension-dir > /dev/null
if [ $? -eq 0 ]
then

else

fi
