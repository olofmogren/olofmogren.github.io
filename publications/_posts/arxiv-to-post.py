#!/usr/bin/python

import sys, os, time, shutil
import requests
from bs4 import BeautifulSoup as bs
import yaml

#print(sys.argv[1])
print('usage: python arxiv-to-port.py arxiv-id [-w|-i]\n-w: write file\n-i: download pdf, generate image of first page.\n\n')

cache_file = sys.argv[1]+'.html'
if os.path.exists(cache_file):
  with open(cache_file, 'r') as f:
    html = f.read()
    #print('read cached file')
else:
  response = requests.get("https://arxiv.org/abs/{}".format(sys.argv[1]))
  html = response.content
  #mybytes = fp.read()
  #html = mybytes.decode("utf8")
  #fp.close()
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

date = soup.find('meta', attrs={'name': 'citation_date'}).get('content')
date = date.split('/')
year = date[0]
month = date[1]
day = date[2]

abstract = soup.find('meta', attrs = {'name': 'citation_abstract'}).get('content')
#print('abstract', abstract)
doi = ''
links = soup.find_all('a')
for l in links:
  content = l.get('href')
  if content is not None:
    if content.startswith('https://doi.org/'):
      doi = content
#print('doi:',doi)

data['shortversion'] = abstract
data['longversion'] = abstract
data['venue'] = 'arXiv preprint'
data['venueshort'] = 'arXiv'
data['venuelink'] = 'https://arxiv.org/abs/'+sys.argv[1]
data['eprint'] = sys.argv[1]
data['generatebibtex'] = 'yes'
data['pdf'] = 'https://arxiv.org/pdf/'+sys.argv[1]+'.pdf'
data['doi'] = doi
first_word_in_title = title.split(' ')[0].lower()
data['permalink'] = '/publications/{}/{}/'.format(year, first_word_in_title)


if len(sys.argv) > 2 and '-i' in sys.argv:
  print(data['pdf'])
  time.sleep(1.2)
  r = requests.get(data['pdf'], auth=('usrname', 'password'), verify=False,stream=True)
  r.raw.decode_content = True
  with open('/tmp/arxiv-temp.pdf', 'wb') as f:
    shutil.copyfileobj(r.raw, f)
  #response = requests.get(data['pdf'])
  #with open('/tmp/arxiv-temp.pdf', 'wb') as f:
  #  f.write(response.content)

  print('convert /tmp/arxiv-temp.pdf ../{}/{}/{}.png'.format(year, first_word_in_title, first_word_in_title))
  try:
    os.makedirs('../{}/{}/'.format(year, first_word_in_title))
  except:
    pass
  os.system('convert -background white -alpha remove /tmp/arxiv-temp.pdf\[0\] dude.png ../{}/{}/{}.png'.format(year, first_word_in_title, first_word_in_title))
  data['imgsrc'] = '/publications/{}/{}/{}.png'.format(year, first_word_in_title, first_word_in_title)
  print('rm /tmp/arxiv-temp.pdf')
  #os.remove('/tmp/arxiv-temp.pdf')

print('---')
print(yaml.dump(data))
print('---')

md_filename = 'arxiv-to-post-{}-{}-{}-{}.md'.format(year, month, day, first_word_in_title)
if len(sys.argv) > 2 and '-w' in sys.argv:
  print('writing file {}'.format(md_filename))
  with open(md_filename, 'w') as f:
    f.write('---\n')
    f.write(yaml.dump(data))
    f.write('\n---\n')
