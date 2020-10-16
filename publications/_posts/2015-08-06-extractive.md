---
title: Extractive summarization by aggregating multiple similarities
layout: posts
tags:
 - summarization
 - lic
 - prio
imgsrc: /graphics/illustrations/mogren_summarization.svg
imgalt: Extractive Multi-Document Summarization
longversion:
shortversion: Many existing methods for extracting summaries rely on comparing the similarity of two sentences in some way. In this paper, we present new ways of measuring this similarity, based on sentiment analysis and continuous vector space representations, and show that combining these together with similarity measures from existing methods, helps to create better summaries. The finding is demonstrated with MULTSUM, a novel summarization method that uses ideas from kernel methods to combine sentence similarity measures. Submodular optimization is then used to produce summaries that take several different similarity measures into account. Our method improves over the state-of-the-art on standard benchmark datasets; it is also fast and scale to large document collections, and the results are statistically significant.

venue: RANLP 2015, Hissar, Bulgaria, September 6th-11th
venueshort: RANLP 2015
authors: Olof Mogren, Mikael Kågebäck, Devdatt Dubhashi
bibtex: '@article{mogrenextractive,\n  title={Extractive summarization by aggregating multiple similarities},\n  author={Mogren, Olof and Kågebäck, Mikael and Dubhashi, Devdatt},\n  journal={Recent advances in natural language processing 2015},\n  year={2015},\n  pages={451}\n}'
permalink: /publications/2015/extractive/
pdf: /summarization/mogren2015extractive.pdf
overwriteurl: /summarization/
---

