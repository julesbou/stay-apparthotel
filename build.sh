#!/bin/bash

mkdir -p build
cd pages

for page in *.html
do
  echo "Processing $page"
  cp ../layout.html ../build/$page
  sed -i -e "s|{{ CONTENT }}|$(cat $page | tr -d '\n')|g" ../build/$page
  sed -i -e "s|{{ PAGE }}|$page|g" ../build/$page
done
