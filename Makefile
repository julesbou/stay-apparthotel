.PHONY: js css build assets

all: init js css assets thumbnails build

init:
	-rm -r build
	mkdir build
	cp node_modules/jquery/dist/jquery.min.js ./build
	cp node_modules/babel-polyfill/dist/polyfill.min.js ./build
	cp robots.txt ./build

serve:
	http-server ./build -p 8084

deploy:
	make
	surge -p ./build --domain stay-apparthotel.fr
	#surge -p ./build --domain stay-apparthotel.surge.sh

watch:
	chokidar 'js/**/*.js' -c 'make js' &
	chokidar 'scss/**.scss' -c 'make css' &
	chokidar 'assets/*' 'assets/**/*' -c 'make assets' &
	node compile/watch.js

js:
	babel js/*.js  --presets=es2015 > build/scripts.js

css:
	scss scss/styles.scss build/styles.css --style compressed
	autoprefixer-cli -o build/styles.css build/styles.css

build:
	php compile/build.php

thumbnails:
	-rm -r assets/rooms-thumbnails
	cp -r assets/rooms assets/rooms-thumbnails
	cd assets/rooms-thumbnails && mogrify -quality 20 **/*.jpg

assets:
	cp -r assets build/
