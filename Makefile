CSS   = ./css/jshamsul.css
LESS  = ./less/jshamsul.less
DATE  =$(shell date +%I:%M%p)
CHECK =\033[32m✔\033[39m
HR    = ------------------------------------

#
#	WP-jShamsul Build
#

build:
	@echo "${HR}"
	@echo "Building all wp-jshamsul.com files"
	@lessc -x ${LESS} > ${CSS}
	@echo "Compiling LESS...             ${CHECK} Done"
	@echo "[${DATE}] - Done Woot!"
