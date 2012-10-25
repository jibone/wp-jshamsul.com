STYLE = ./css/jshamsul.css
LESS = ./less/jshamsul.less
DATE=$(shell date +%I:%M%p)
CHECK=\033[32m✔\033[39m
HR=--------------------------------------------------------------- 
#
#	WP-jShamsul Build
#

build:
	@echo "\n${HR}\n"
	@echo "Building WP-jShamsul..."
	@echo "\n${HR}\n"
	@recess --compile ${LESS} > ${STYLE}
	@echo "Compiling LESS with Recess...        ${CHECK} Done"
	@echo "\n"
	@echo "WP-jshamsul successfully build at ${DATE}"

watch:
	@echo "Watching less files..."
	watchr -e "watch('less/.*\.less') { system 'recess --compile ${LESS} > ${STYLE}' }"
