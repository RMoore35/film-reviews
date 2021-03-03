#!/bin/sh
# build.sh - PHP to static file generator
#DEST="./public_html/"

php index.php > index.html
php reviews.php > reviews.html
php lists.php > lists.html
php about.php > about.html

# Build our SASS file
sass --style compressed style.scss:public_html/style.css
