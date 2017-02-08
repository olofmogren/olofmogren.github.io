---
title: Metalearning
layout: blogposts
tags:
 - 
imgsrc: /graphics/illustrations/2016-12-15/nips-cake.png
imgalt: 
imgcaption: 

shortversion: Metalearning, or &ldquo;learning to learn&rdquo; is the process of learning parts of the learning process in a machine learning scenario. The idea is not new, but recently a number of papers on the subject have been published and I will give an overview here.

venue: 
authors: Olof Mogren
permalink:
pdf: 
overwriteurl: 
---

Around ten years ago, representation learning started to revolutionalize
many fields for real.
The trend is obvious not only in computer vision, but also
natural language processing and other fields.
Deep neural models learn not only the end classification for some
data with some features, but they learn the features as internal representations
within the models.
This means less manual work for the human, and a larger part of
a learning task being done by machines.
Can we make the machines learn an even larger part of the task?
It turns out, the answer is <strong>yes</strong>.
Metalearning, or &ldquo;learning to learn&rdquo; is the process of
learning parts of the learning process in a machine learning scenario.
The idea is not new, but recently a number of papers on the subject
have been published and I will give an overview here.

<strong>TODO:</strong> elaborate. Exemplify?


In early December, the Conference on Neural Information Processing Systems (NIPS)
took place in Barcelona. This was the second time a place outside of north
america was hosting the event, and after growing agressively the last few
years, about 6.000 people attended this year's conference.
One of the most popular topics this year, among <strong>reinforcement learning</strong>
and <strong>generative adversarial networks</strong>,
is <strong>metalearning</strong>, with the
symposium for recurrent neural networks and other methods that can learn algorithms
being massively popular, having to be moved from a large room
to one of the largest areas to house all participants.


*Learning to learn by gradient descent by gradient descent*
[(abstract, pdf, nips.cc)](https://papers.nips.cc/paper/6461-learning-to-learn-by-gradient-descent-by-gradient-descent)
not only wins my award for the nicest play on words in the title,
it's also a really nice paper outlining how to use LSTMs to learn
the optimization strategy for an optimization problem.
The paper presents a rather straight-forward approach of
training an LSTM network to output the update for one parameter
in a neural network, given its current gradient as input.



