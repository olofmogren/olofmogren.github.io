---
title: 1st Workshop on Representation Learning for NLP
layout: blogposts
tags:
 - NLP
 - ACL
 - Representation Learning
imgsrc: /graphics/illustrations/2016-08-11/humboldt.jpg
imgalt: Main building of Humboldt University in Berlin, Unter den Linden, as seen from Bebelplatz. Image from Wikimedia Commons, Creative Commons Attribution-Share Alike 3.0 Unported license.
imgcaption: Main building of Humboldt University in Berlin, Unter den Linden, as seen from Bebelplatz, Creative Commons Attribution-Share Alike 3.0 Unported license.

venue: 
authors: Olof Mogren
permalink:
pdf: 
overwriteurl: 

shortversion: On August 11th, the first workshop in Representation Learning For NLP took place in conjunction with ACL 2016 at Humboldt University in Berlin. The workshop was extremely popular, and the talks were moved to the largest auditorium to fit all visitors.


published: true
---

On August 11th, the first [workshop in Representation Learning For NLP](https://sites.google.com/site/repl4nlp2016/) took place in conjunction with [ACL 2016](http://acl2016.org/) at Humboldt University in Berlin. The workshop was extremely popular, and the talks were moved to the largest auditorium to fit all visitors.

## Invited talks

First out was Professor Katrin Erk from University of Texas, speaking about representations for language that is not made using deep learning, and in fact are not learned at all. This was a little bit surprising for an opening talk in a workshop on representation learning, where most titles in the proceedings contain words like ["LSTMs"](https://en.wikipedia.org/wiki/LSTM), ["GRUs"](https://en.wikipedia.org/wiki/Gated_recurrent_unit), ["RNNs"](https://en.wikipedia.org/wiki/Recurrent_neural_network) and ["Neural Models"](https://en.wikipedia.org/wiki/Artificial_neural_network). However, Professor Erk gave a nice talk and connected [distributional semantics](https://en.wikipedia.org/wiki/Distributional_semantics) with applications such as [textual entailment](https://en.wikipedia.org/wiki/Textual_entailment) and [text comprehension](https://en.wikipedia.org/wiki/Natural_language_understanding). She gave some insights about [rule-based systems](https://en.wikipedia.org/wiki/Rule-based_system), [probabilistic graphical models](https://en.wikipedia.org/wiki/Graphical_model), and generalization to unseen words.

See [Katrin Erk's homepage](http://www.katrinerk.com/).

Next up was Animashree Anandkumar, Assistant Professor at the University of California Irvine, who began with a nice recap about existing techniques for learning embeddings for sentences; compositional word-representation approaches, skip-thought vectors, RNNs, and convnet approaches. The latter of these were then the focus of much of the talk, allowing for shift-invariance in language inputs. She moved on to show how these models can be formulated using tensor decomposition methods, allowing for a much faster training time. The method can then be applied to compute sentence embeddings and obtained competitive results on standard benchmarks. In summary, a truly inspiring talk.

To learn more about tensor based methods, see [Animashree Anandkumar's web page at UCI](http://newport.eecs.uci.edu/anandkumar/).

<figure style="float: left; max-width: 40%; clear: both;">
<img src="/graphics/illustrations/2016-08-11/tensor-decomposition.jpg" style="max-width: 90%" />
<figcaption style="max-width: 90%" >
Tensor decompositions for sentence representation learning. From Animashree Anandkumar's slides.
</figcaption>
</figure>

Besides the invited talks, three papers were awarded the best paper awards, and were given a few minutes each to introduce their work. When introdcing this session, Edward Grefenstette presented some stats: out of submissions comparable to a major conference, 37 papers were accepted to this workshop. 

## Best paper awards

* *Mapping Unseen Words to Task-Trained Embedding Spaces*, by Pranava Swaroop Madhyastha, Mohit Bansal, Kevin Gimpel, and Karen Livescu. [(PDF, aclweb.org)](http://aclweb.org/anthology/W/W16/W16-1612.pdf).
  * A technique to handle out-of-vocabulary words. Gives improvements in downstream tasks such as dependency parsing and sentiment classification.
* *Making Sense of Word Embeddings* by Maria Pelevina, Nikolay Arefyev, Chris Biemann, and Alexander Panchenko. [(PDF, aclweb.org)](http://aclweb.org/anthology/W/W16/W16-1620.pdf)
  * This paper propose a method to learn word sense embeddings, that can be initialized with traditional word embeddings. The resultng system performs comparable to state-of-the-art methods for word-sense-induction.
* *Domain Adaptation for Neural Networks by Parameter Augmentation* by Yusuke Watanabe, Kazuma Hashimoto, and Yoshimasa Tsuruoka. [(PDF, aclweb.org)](http://aclweb.org/anthology/W/W16/W16-1629.pdf)
  * Using a source dataset, such as [MS COCO](http://mscoco.org/), and a target dataset being a Japanese guidebook. The proposed method is similar to having a neural network for two tasks by attaching two output parts, but here the authors use what they call "augmented parameters". This means that they have two output layers, with partly shared parameters. The target output uses parameter $theta_t + theta_g$, and the source output layer uses parameters $theta_g + theta_s$

## Afternoon Invited Talks

Hal Daumé III, assistant professor at University of Maryland was the third invited talk. Using plenty of both enthusiasm and humour, he took us through multi-lingual word embedding approaches for problems such as [transliteration](https://en.wikipedia.org/wiki/Transliteration). He concluded by stating that for many problems in [NLP](https://en.wikipedia.org/wiki/Natural_language_processing), a complex non-linear model is not needed, but you can get by with a bag of n-grams model and standard [CCA](https://en.wikipedia.org/wiki/Canonical_correlation). However, using multi-lingual signals are often of help, and [embeddings](https://en.wikipedia.org/wiki/Word_embedding) should be given some wiggle-room.

Raia Hadsell from [Google Deepmind](http://deepmind.com/) was the last invited speaker, giving a nice talk about different approaches for representation learning, and things that you can do with the learned representations. She divided this into five different categories:

1. **Unsupervised learning** - These are representations that we are all well accustomed to. E.g. Skipgram, gloVe.
2. **Supervised learning** - E.g. using representations that was computed as an internal representation in a supervised model.
3. **Sequence modelling** - RNNs, LSTMs, GRUs, etc.
4. **Reinforcement learning** - Models that interpret the environment, control themselves, and act in their environment, trained end-to-end, e.g. Deep Q-learning. See ["Demystifying Deep Reinforcement Learning" at nervanasys.com](https://www.nervanasys.com/demystifying-deep-reinforcement-learning/).
5. **Semi-supervised learning** - E.g. siamese networks; needing only a measure of similarity to train.

She then moved on to talk about how things in this field are affecting each other, and lines are blurring. Examples of this are *Pixel Recurrent Neural Networks* by Aaron Van den Oord Google Deepmind, Nal Kalchbrenner Google Deepmind, Koray Kavukcuoglu Google Deepmind, presented at ICML 2016 [(PDf, jmlr.org)](http://jmlr.org/proceedings/papers/v48/oord16.pdf) as well as the *Conditional Image Generation with PixelCNN Decoders* by Aaron van den Oord, Nal Kalchbrenner, Oriol Vinyals, Lasse Espeholt, Alex Graves, Koray Kavukcuoglu [(PDF, arxiv.org)](http://arxiv.org/abs/1606.05328), in essence considering image data as sequentially structured data. 

<figure style="float: right; max-width: 40%; clear: both;">
<img src="/graphics/illustrations/2016-08-11/progressive-neural-nets.jpg" style="max-width: 90%" />
<figcaption style="max-width: 90%" >
Progressive neural networks. From Raia Hadsell's slides.
</figcaption>
</figure>

She ended her talk with **Progresive nets**, a way of transferring learning from one task to another, using the learning from a source task without forgetting the it, and at the same time really boosting training time to learn the target task. An example was training a system for manipulating a robotic arm, first by simulations (the source task), and then with a real robot arm (the target task).

## Poster Session and Panel Discussion

During the poster session, we had our own poster titled ["Assisting discussion Forum Users using Deep Recurrent Neural Networks"](http://mogren.one/publications/2016/assisting/), showing how a recurrent neural model can be used to assist people asking questions in a discussion forum, by suggesting forum posts, discussion channels and other users that might be of help for the problem you currently express. The session was rather crowded, and many visitors came by our poster to talk, giving both interesting questions and helpful suggestions.

<figure style="float: left; max-width: 40%; clear: both;">
<img src="/graphics/illustrations/2016-08-11/panel.jpg" style="max-width: 90%" />
<figcaption style="max-width: 90%" >
Panel discussion.
</figcaption>
</figure>


The whole workshop was finally concluded with a great panel discussion, chaired by Kyunghyun Cho, with all the invited speakers and also Emily Bender, Professor in Linguistics at University of Washington, and Chris Dyer from Google Deepmind. The panel made up a great mix of people with different backgrounds, and a lively discussion was held, yet a feeling of consensus appeared, and a concluding comment was that it's OK to do NLP research coming from the linguistic side, and it's also OK to approach linguistic problems without the linguistic assumptions, letting machines figure out how human language works.
