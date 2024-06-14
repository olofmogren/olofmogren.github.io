import os

with open(os.path.join(argv[1], 'index.html'), 'w') as f:
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
  ds = os.listdir(argv[1])
  for d in ds:
    page = os.path.join(d,'index.html')
    f.write('<a href="{}">{}</a><br />'.format(page))
  f.write('''</div>
          </div>
        </div>
      </section>''')

