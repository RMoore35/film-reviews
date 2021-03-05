#!/bin/sh -e

# yttget (YouTube thumbnail get)
# © 2021 Matthew Graybosch <contact@matthewgraybosch.com>

# Permission to use, copy, modify, and/or distribute this software for
# any purpose with or without fee is hereby granted, provided that the
# above copyright notice and this permission notice appear in all
# copies.

# THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL
# WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED
# WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE
# AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL
# DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA
# OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER
# TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
# PERFORMANCE OF THIS SOFTWARE.

# usage: yttget https://www.youtube.com/watch?v=DLzxrzFCyOs

URL="https://www.youtube.com/watch?v=eX2qFMC8cFo"
ID=$(echo $URL | cut -d = -f 2)
FILE="${HOME}/Downloads/ytt-${ID}.jpg"
THUMB_URL="http://i.ytimg.com/vi/${ID}/sddefault.jpg"

curl ${THUMB_URL} --output ${FILE}

echo "Thumbnail available at ${FILE}"
echo "Video URL: https://youtu.be/${ID}?autoplay=1"
echo "Suggested Caption: Click this image to watch on YouTube..."

#display ${FILE}




