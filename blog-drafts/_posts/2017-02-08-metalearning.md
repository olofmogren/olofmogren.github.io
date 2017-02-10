---
title: Metalearning
layout: blogposts
tags:
 - 
imgsrc: /graphics/illustrations/2017-02-08/learning-to-learn-computation-graph.png
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

As I mentioned, the idea of metalearning is not new.
Some examples of previous work are
(Schmidthuber 1987, 1992, 1993), nets that modify their own weights.
In 1997, the Success Story Algorithm used inspiration from both
genetic algorithms and reinforcement learning,
and Daniel, et.al., 2016, also uses a reinforcement learnin approach.

Another branch of metalearning is to train a model on a large dataset,
and then transfer the knowledge to a task where only limited data is available.
This problem is known as <strong>one-shot learning</strong>, something
that has been attacked using memory augmented networks such as
the differentiable neural computer (Santoro, et.al., 2016), and
other attention-based RNNs (Vinyals, et.al., 2016).

*Learning to learn by gradient descent by gradient descent*
[(abstract, pdf, nips.cc)](https://papers.nips.cc/paper/6461-learning-to-learn-by-gradient-descent-by-gradient-descent)
not only wins my award for the nicest play on words in the title,
it's also a really nice paper outlining how to use LSTMs to learn
the optimization strategy for an optimization problem.
The idea is a rather straight-forward approach of
training an LSTM network to output the update for one parameter (at a time)
in a neural network, given its current gradient as input.

Technically, the paper distinguishes between the *optimizer* with parameters \\(\phi\\)
and the *optimizee* with parameters \\(\theta\\).
The optimizer is trained using the Adam optimizer, and
at every timestep \\(t\\) it outputs an update \\(g_t\\) for each
parameter \\(\theta\\) in the optimizee model.
They define the following loss:

\\\[\mathcal{L}(\phi) = \mathbb{E}_{f} \left[\sum_{t=2}^T w_t f(\theta_t)\right]\\\]



