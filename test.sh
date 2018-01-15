#!/bin/bash

if ./install.sh | grep -q 'app'; then
    rm -rf test-project
    echo 'INSTALLATION COMPLETED'
    exit 0
else
    echo 'SOMETHING WENT WRONG'
    exit 1
fi
