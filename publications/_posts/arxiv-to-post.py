#!/usr/bin/python

import sys, os
import urllib.request
from bs4 import BeautifulSoup as bs
import yaml

#print(sys.argv[1])

cache_file = sys.argv[1]+'.html'
if os.path.exists(cache_file):
  with open(cache_file, 'r') as f:
    html = f.read()
    #print('read cached file')
else:
  fp = urllib.request.urlopen("https://arxiv.org/abs/{}".format(sys.argv[1]))
  mybytes = fp.read()
  html = mybytes.decode("utf8")
  fp.close()
  #print(html)
  #with open(cache_file, 'w') as f:
  #  f.write(html)
  #  #print('wrote html to cache')

soup = bs(html, 'lxml')

data = {'layout': 'posts', 'tags': ['prio', 'frontpage'], 'box-bg-imgsrc': '', 'imrgsrc': ''}

title = soup.find('meta', attrs={'property': 'og:title'}).get('content')
#print('title',title)
data['title'] = title
data['imgalt'] = title

authors = soup.find('div', attrs={'class': 'authors'})
authors = authors.get_text(strip=True, separator=' ').replace(' , ', ', ')[9:]
#print('authors', authors)
data['authors'] = authors

abstract = soup.find('blockquote', attrs = {'class', 'abstract mathjax'}).get_text(strip=True, separator=' ')[10:]
#print('abstract', abstract)
data['shortversion'] = abstract
data['longversion'] = abstract
data['venue'] = 'arXiv preprint'
data['venueshort'] = 'arXiv'
data['eprint'] = sys.argv[1]
data['generatebibtex'] = 'yes'
data['pdf'] = 'https://arxiv.org/pdf/'+sys.argv[1]

print('---')
print(yaml.dump(data))
print('---')

