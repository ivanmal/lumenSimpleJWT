#!/bin/sh

 # note: pwd will be set to the directory that you opened vscode from
 docker run -i --rm -v $(pwd):$(pwd) cytopia/phpcs $*
