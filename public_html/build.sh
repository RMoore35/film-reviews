#!/bin/sh
# build.sh - PHP to static file generator
DEST="./public_html/"

cd ../ && cp index.php $DEST && cd $DEST && php index.php > index.html && cd ../
cd ../ && cp reviews.php $DEST && cd $DEST && php reviews.php > reviews.html && cd ../
cd ../ && cp lists.php $DEST && cd $DEST && php lists.php > lists.html && cd ../
cd ../ && cp about.php $DEST && cd $DEST && php about.php > about.html && cd ../

# Build our SASS file
sass --style compressed style.scss:public_html/style.css
