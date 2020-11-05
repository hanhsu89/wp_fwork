#!/bin/bash

# Stop script when error
set -e;

DEPLOY_HOST=$1
DEPLOY_PORT=$2
PROJECT_LOCATION=$3

ssh deploy@$DEPLOY_HOST -p $DEPLOY_PORT <<EOT
    set -e;
    cd $PROJECT_LOCATION;
    sudo git pull;
EOT