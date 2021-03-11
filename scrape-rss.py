# Imports
from bs4 import BeautifulSoup as bs
import feedparser
import re

# Open txt file for writing
file1 = open("/Users/ryan/film-reviews/film-reviews/text-files/top3.txt","w")
file2 = open("/Users/ryan/film-reviews/film-reviews/text-files/actresses.txt","w")
file3 = open("/Users/ryan/film-reviews/film-reviews/text-files/actors.txt","w")

# Use feedparser to prepare rss for parsing
feed = feedparser.parse('https://letterboxd.com/rmoore35/rss/')

# Lists for validation of favorite actresses and actors
fav_actresses = ['Anya Taylor-Joy', 'Alicia Vikander', 'Emily Blunt']
fav_actors = ['Sam Rockwell', 'Emory Cohen', 'Ben Foster']

# Top Three Films
for key in feed.entries[0:3]:
    tags = bs(key.description, "lxml").find_all('p',limit=10)
    lst = []
    for tag in tags[1:]:
        lst.append(tag.string)
    s = ' '.join(map(str, lst)).rstrip().replace("\'", "")
    new_title = re.split(",\s[0-9]", key.title)
    if len(tags) >= 10:
        new_str = "<h3><a href='" + key.link + "' target='_blank'>" + new_title[0] + "</a></h3>" + "<p>" + s + " (cont.)...</p>"
    else:
        new_str = "<h3><a href='" + key.link + "' target='_blank'>" + new_title[0] + "</a></h3>" + "<p>" + s + "</p>"
    file1.write(new_str + "\n")

# Actresses
for key in feed.entries:
    if key.title in fav_actresses:
        tags = bs(key.description, "lxml").find_all('a',limit=10)
        new_str = ("<ol class='ranked-list'>" + "<li>"
                            + '</li><li>'.join([str(tag.string) for tag in tags])
                            + "</li>" + "</ol>")
        a_href = "<h3><a href='" + key.link + "' target='_blank'>"
        name = key.title + "</a></h3>"
        file2.write(a_href + name)
        file2.write(new_str + "\n")

# Actors
for key in feed.entries:
    if key.title in fav_actors:
        tags = bs(key.description, "lxml").find_all('a',limit=10)
        new_str = ("<ol class='ranked-list'>" + "<li>"
                            + '</li><li>'.join([str(tag.string) for tag in tags])
                            + "</li>" + "</ol>")
        a_href = "<h3><a href='" + key.link + "' target='_blank'>"
        name = key.title + "</a></h3>"
        file3.write(a_href + name)
        file3.write(new_str + "\n")
