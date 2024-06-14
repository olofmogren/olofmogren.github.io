import os,sys

with open(os.path.join(sys.argv[1], 'index.html'), 'w') as f:
  f.write('''---
layout: default
title: Olof Mogren, PhD - Deep Learning Researcher.
---

      <section class="features">
        <div class="inner">
          <div class="feature-grid">
            <h1>Slides</h1>

            <p>These are some selected presentations.</p>

            <div class="table-row">''')
  ds = os.listdir(os.path.join(sys.argv[1], 'html'))
  for d in ds:
    print(d)
    page = os.path.join(d,'html','index.html')
    f.write('<a href="{}">{}</a><br />'.format(page, page))
  f.write('''</div>
          </div>
        </div>
      </section>''')

