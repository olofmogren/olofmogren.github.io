import os,sys

print('update-listing.py pre-commit hook. updating listing.')
with open(os.path.join(sys.argv[1], 'index.html'), 'w') as f:
  f.write('''---
layout: default
title: Olof Mogren, PhD - Deep Learning Researcher.
---

      <section class="features">
        <div class="inner">
          <div class="feature-grid">
            <h1>Slides</h1>

            <p>These are slides for some selected presentations. They were generated from markdown using <a href="https://github.com/olofmogren/pymdslides/">PYMD</a> and can be viewed in a modern javascript-enabled browser.</p>

            <div class="table-row">''')
  ds = os.listdir(os.path.join(sys.argv[1], 'html'))
  for d in ds:
    #print(d)
    page = os.path.join('html',d,'index.html')
    f.write('<a href="{}">{}</a><br />\n'.format(page, d))
  f.write('''</div>
          </div>
        </div>
      </section>''')

