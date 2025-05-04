#!/bin/bash

packages=(
# packages list to install
	htop
	vim
	nano
	php
	root-repo
	x11-repo
	apache2
	phpmyadmin
	python3
	zip
	unzip
	neofetch
	net-tools
)

for package in ${packages[@]}; do
# package manager syntax
	pkg install ${package} -y
done
