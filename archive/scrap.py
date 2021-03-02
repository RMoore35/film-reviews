# Imports
from bs4 import BeautifulSoup as bs
import feedparser

# Open txt file for writing
file1 = open("MyFile.txt","w")

# Use feedparser to prepare rss for parsing
feed = feedparser.parse('https://letterboxd.com/rmoore35/rss/')

# Lists for validation of favorite actresses and actors
fav_actresses = ['Anya Taylor-Joy', 'Alicia Vikander', 'Emily Blunt']
fav_actors = ['Sam Rockwell', 'Emory Cohen', 'Ben Foster']

# Look into making these exactly like what I want written in html...
# Top Three Films
for key in feed.entries[0:3]:
    tags = bs(key.description, "lxml").find_all('p',limit=10)
    lst = []
    for tag in tags[1:]:
        lst.append(tag.string)
    s = ' '.join(map(str, lst)).rstrip().replace("\'", "")
    new_title = key.title.split(",")
    top3_dict = {"title":new_title[0],"link": key.link,"description":s}
    for key,value in top3_dict.items():
         file1.write(value + "\n")

# Actresses
for key in feed.entries:
    if key.title in fav_actresses:
        actress_dict = {"actress":key.title, "link":key.link}
        tags = bs(key.description, "lxml").find_all('a',limit=10)
        #for tag in tags:
            #new_str = "<li>" + tag.string + "</li>"
            #print(new_str)
        new_str = ("<ol class='ranked-list'>" + "\n" + "<li>"
                            + '</li>\n<li>'.join([str(tag.string) for tag in tags])
                            + "</li>" + "\n" + "</ol>")
        #print(new_str)
        #for value in actress_dict.items():
        a_href = "<h3><a href='" + key.link + "' target='_blank'>"
        name = actress_dict["actress"] + "</a></h3>"
        file1.write(a_href + name + "\n")
        file1.write(new_str + "\n")

      #   <h3><a href="https://letterboxd.com/rmoore35/list/alicia-vikander/" target="_blank">Alicia Vikander</a></h3>
      # <ol class="ranked-list">
      #   <li>Ex Machina</li>
      #   <li>The Light Between Oceans</li>
      #   <li>Son of a Gun</li>
      #   <li>Submergence</li>
      #   <li>Jason Bourne</li>
      #   <li>Burnt</li>
      #   <li>The Man from U.N.C.L.E</li>
      #   <li>Tomb Raider</li>
      # </ol>

# Actors
for key in feed.entries:
    if key.title in fav_actors:
        actor_dict = {"actor":key.title, "link":key.link}
        tags = bs(key.description, "lxml").find_all('a',limit=10)
        new_str = ', '.join([str(tag.string) for tag in tags])
        for key,value in actor_dict.items():
            file1.write(value + "\n")
        file1.write(new_str + "\n")
