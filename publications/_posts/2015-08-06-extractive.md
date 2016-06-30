---
title: Extractive Summarization by Aggregating Multiple Similarities
layout: posts
imgsrc: /graphics/mogren_summarization.png
imgalt: Extractive Multi-Document Summarization
abstract: Many existing methods for extracting summaries rely on comparing the similarity of two sentences in some way. In this paper, we present new ways of measuring this similarity, based on sentiment analysis and continuous vector space representations, and show that combining these together with similarity measures from existing methods, helps to create better summaries. The finding is demonstrated with MULTSUM, a novel summarization method that uses ideas from kernel methods to combine sentence similarity measures. Submodular optimization is then used to produce summaries that take several different similarity measures into account. Our method improves over the state-of-the-art on standard benchmark datasets; it is also fast and scale to large document collections, and the results are statistically significant.

venue: RANLP 2015, Hissar, Bulgaria, September 6th-11th
authors: Olof Mogren, Mikael Kågebäck, Devdatt Dubhashi
bibtex: '@article{mogrenextractive,\n  title={Extractive Summarization by Aggregating Multiple Similarities},\n  author={Mogren, Olof and Kågebäck, Mikael and Dubhashi, Devdatt},\n  journal={RECENT ADVANCES IN NATURAL LANGUAGE PROCESSING 2015},\n  pages={451}\n}'
permalink: /publications/2015/extractive/
pdf: /summarization/mogren2015extractive.pdf
overwriteurl: /summarization/
---

# {{ page.title }}


<img src="{{ page.imgsrc }}" alt="{{ page.imgalt }}" style="float: right;" />
<p>
{{ page.abstract }}
</p>
<p><em>{{ page.venue }}</em></p>
<p><em>{{ page.authors }}</em></p>
<a href="{{ page.pdf }}">PDF Fulltext</a>,
<a href="javascript:void(null);" onclick="showBibtex(event, '{{ page.bibtex }}')">bibtex</a>.
