#!/bin/bash

packages=(
	# packages list to install
	htop
	gtop
	vim
	fastfetch
	waybar
	git
	otf-font-awesome
)

for package in ${packages[@]}; do
	# package manager syntax
	sudo pacman -Sy ${package} --noconfirm
done
