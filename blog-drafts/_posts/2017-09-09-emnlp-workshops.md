---
title: Subword and Character Level Methods Workshop at EMNLP 2017
layout: blogposts
tags:
 - 
imgsrc: /graphics/illustrations/2017-09-08/
imgalt: 
imgcaption: 

shortversion: 

venue: 
authors: Olof Mogren
permalink:
pdf: 
overwriteurl: 
---

# SCLeM workshop

The Subword and Character level workshop had an exciting line-up of invited speakers.
Two poster-sessions showed contributed work with a wide range of topics, from
morphology to embeddings of parts of Chinese characters.

## Invited talk by Tomaš Mikolov: Subword-level Information in NLP using Neural Networks

After a few introductory words by Hinrich Sch&uuml;tze,
this exciting workshop started with Thoma&shat; Mikolov, who gave an intriguing 
walk-through
on the history of language modelling (LM) using artificial neural networks
(neural language modelling, NLM) on subword-level.
Mikolov's motivation for working on word-level is that it is suboptimal when there is character
variability, e.g. as in Czech.
The journey started with early character-based feed-forward neural network (FFNN) models
which showed dissapointing performance (see e.g. Bengio, 2006).
These early models were not based on recurrent neural networks (RNN),
nowadays almost ubiquitous when modelling sequences of data.
Mikolov called the word-based language models introduced in 2007 a &ldquo;pseudo-solution&rdquo;.
In 2010, the RNN LMs were introduced, but the performance of these models working on
characters was not satisfactory, or they required too much time to train.
Still today, character-based RNN LMs perform slightly worse than their word-based counterparts,
but they are not limited to the vocabulary seen at training time.
A good in-between hack is to segment words into multi-character units, while retaining
the most frequent words as-is in the vocabulary.
Wrappping up, Mikolov mentioned fastText, the text classification framework recently
open-sourced by his team:
&ldquo;strong on analogy tasks, while being fast and
robust to typos and terms that are out of the vocabulary (OOV)&rdquo;.
Mikolov also mentioned some of their recent papers on reducing computation in RNNs
(ICLR 2016), and on traiing an RNN to learn when to update the weights
[(ICLR 2017)](https://arxiv.org/abs/1611.06188).

**TODO: Noah Smith**
![What is a sentence](/graphics/illustrations/2017-09-09/cho---what-is-a-sentence.png)
Kyunghyun Cho started his talk with the question &ldquo;What is a sentence?&rdquo;
He explained that looking up
[&ldquo;sentence&rdquo; on Wikipedia](https://en.wikipedia.org/wiki/Sentence_(linguistics))
does not give you an answer to this question.
It gives you many pointers as to how a sentence *should be*, but not what it is.
The boundaries of words is perhaps something that humans consider important, but
is not necessarily ...
In 2015, neural machine translation had progressed to a point where to OOV tokens
started to become a limiting factor.
This in combination with the source of error
that any tokenizer is, called for a solution.
Rico Sennrich et.al.[citation!] proposed using a subword-level model, working on n-gram tokens
defined by the byte-pair ecoding approach.
Luong and Manning[CITATION] proposed a word-based solution with character-based back-off,
using a separate RNN to compute representations for OOVs using the character stream.
These approaches still required the preprocessing step of tokenization.
Chung et al., 2016 proposed a model with a decoder working only with characters,
without any tokenization neccessary. The attention mechanism works perfectly,
even when the encoder works on subwords, and the decoder works with raw characters.
It consistently obtains results better than or equally good as the models using
subword units on both sides.

