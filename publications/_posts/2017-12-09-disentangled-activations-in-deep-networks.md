---
title: Disentanglement by Penalizing Correlation
layout: posts
tags:
 - prio
imgsrc: /graphics/illustrations/2017-12-09/disentanglement.png
imgalt: Disentanglement by Penalizing Correlation
shortversion: "
Deep neural networks have been tremendously successful in a number of tasks. One of the main reasons for this is their capability to automatically learn representations of data in levels of abstraction, increasingly disentangling the data as the internal transformations are applied. In this paper we propose a novel regularization method that penalize covariance between dimensions of the hidden layers in a network, something that benefits the disentanglement. This makes the network learn nonlinear representations that are linearly uncorrelated, yet allows the model to obtain good results on a number of tasks, as demonstrated by our experimental evaluation. The proposed technique can be used to find the dimensionality of the underlying data, because it effectively disables dimensions that aren't needed. Our approach is simple and computationally cheap, as it can be applied as a regularizer to any gradient-based learning model.
"
longversion: "
Deep neural networks have been tremendously successful in a number of tasks. One of the main reasons for this is their capability to automatically learn representations of data in levels of abstraction, increasingly disentangling the data as the internal transformations are applied. In this paper we propose a novel regularization method that penalize covariance between dimensions of the hidden layers in a network, something that benefits the disentanglement. This makes the network learn nonlinear representations that are linearly uncorrelated, yet allows the model to obtain good results on a number of tasks, as demonstrated by our experimental evaluation. The proposed technique can be used to find the dimensionality of the underlying data, because it effectively disables dimensions that aren't needed. Our approach is simple and computationally cheap, as it can be applied as a regularizer to any gradient-based learning model.
"
venue: "NIPS Workshop on Learning Disentangled Features: from Perception to Control"
venueshort: DisentangleNIPS
authors: Mikael Kågebäck, Olof Mogren
bibtex: '@inproceedings{kageback2017disentanglement, \n title={Disentanglement by Penalizing Correlation}, \n author={Mikael Kågeback and Olof Mogren}, \n booktitle={NIPS Workshop on Learning Disentangled Features: from Perception to Control 2017}, \n pages={1}, \n year={2017}}'
permalink: 
pdf: /publications/2017/disentanglement-by-penalizing-correlations/kageback2017disentanglement.pdf
---
