#!/bin/bash

packages=(
# packages list to install
	htop
	vim
	nano
	apache2
	mariadb
	ruby
)

for package in ${packages[@]}; do
# package manager syntax
	apt install ${package} -y
done
