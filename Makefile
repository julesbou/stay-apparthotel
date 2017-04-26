.PHONY: css build assets

all: js css assets build

serve:
	http-server ./build

deploy:
	#surge -p ./ --domain marketcolor-dbwm.surge.sh

watch:
	chokidar 'scripts.js' -c 'make js' &
	chokidar 'scss/**.scss' -c 'make css' &
	chokidar 'pages/*.html' 'layout.html' -c 'make build' &
	chokidar 'assets/*' 'assets/**/*' -c 'make assets'

js:
	babel scripts.js  --presets=es2015 > build/scripts.js

css:
	scss scss/styles.scss build/styles.css --style compressed
	autoprefixer-cli -o build/styles.css build/styles.css

build:
	./build.sh

assets:
	cp -r assets build/
