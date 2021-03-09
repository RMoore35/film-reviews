#!/bin/sh
# build.sh - PHP to static file generator

php index.php > index.html
php reviews.php > reviews.html
php lists.php > lists.html
php about.php > about.html
php blog.php > blog.html
php contact.php > contact.html
