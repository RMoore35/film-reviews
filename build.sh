#!/bin/sh
# build.sh - PHP to static file generator
DEST="./public_html/"

# Run PHP on gig folders and output HTML ready for static hosting
# find . -maxdepth 1 -type d \( -name '*-????' -o -name sample \) | sed 's/.\///' | \
# while read x; do \
#     mkdir -p "$DEST/$x/" && cd "$x" && php index.php > "../$DEST/$x/index.html" && cd ../ && \
#     echo "Processed $x" ; \
# done

# find index.php | \
# while read x; do \
#   mkdir -p "$DEST/$x"
#   cd "$DEST/$x"
#   php index.php > "../$DEST/$x/index.html"
#   cd ../ && \
#   echo "processed $x"; \
# done
cp index.php $DEST && cd $DEST && php index.php > index.html && cd ../
cp reviews.php $DEST && cd $DEST && php reviews.php > reviews.html && cd ../
cp lists.php $DEST && cd $DEST && php lists.php > lists.html && cd ../
cp about.php $DEST && cd $DEST && php about.php > about.html && cd ../

# Build our SASS file
sass --style compressed style.scss:public_html/style.css
