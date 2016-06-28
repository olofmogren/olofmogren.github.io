---
title: Publications - Olof Mogren
layout: default
---

      <section>
        <div class="inner">
          <div class="block block-copy">
<h1>Publications</h1>
<p>This is a selection of my publications. Please also see my <a href="https://scholar.google.se/citations?user=m_n28oAAAAAJ&amp;hl=en">page on Google Scholar</a></p>          </div>
</div>
</section>
{% for p in site.categories.publications %}
<section>
<div class="inner">
<div class="block block-copy">

## {{ p.title }}

<img src="{{ p.img_src }}" alt="{{p.img_alt }}" style="float: right;" />

{{ p.abstract }}
<br />
*{{ p.venue }}*<br />
*Jacob Hagstedt P Suorra, Olof Mogren*<br />

<a href="{{ p.url }}">More info</a>, <a href="2016/assisting/hagstedt2016assisting.pdf">PDF Fulltext</a>, <a href="javascript:void(null);" onclick="showBibtex(event, {{ p.bibtex }})">bibtex</a>.
</div>
</div>
</section>
{% endfor %}

