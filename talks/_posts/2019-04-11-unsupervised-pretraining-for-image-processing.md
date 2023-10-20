---
title: Unsupervised pretraining for image processing
layout: talks
tags:
 - default
imgsrc: /graphics/illustrations/2019-04-11/conv3.png
imgalt: Unsupervised pretraining for image processing
longversion: "
Convolutional neural networks (convnets) for image processing tasks often benefit tremendously from pretraining. The go-to method has been to pretrain the convnet weights for image classification on the ImageNet dataset. This however requires having access to such a dataset with manually created labels. Unsupervised pretraining is therefore an attractive alternative. This has been historically important; restricted Boltzmann machines and autoencoders have been used to initialize neural network layers to produce informative representations. Caron, et.al. presented \"Deep clustering for unsupervised learning of visual features\" at ECCV 2018. Due to the convolutional structure, a modern image classification model with random initialization of its parameters and no training, performs significantly better than random chance. The paper exploits this property and use the representations computed by such an untrained network to compute a clustering of the input images. This clustering is then used as labels to train the weights of the model (with supervised training). The process is repeated until the model computes useful representations. The representations are evaluated on standard image processing tasks, showing state-of-the-art results on several of them. In this talk, I will go through the idea of unsupervised pretraining for image processing in general, and then discuss the paper by Caron, et.al. in some more detail.
"
shortversion: "
Caron, et.al. presented \"Deep clustering for unsupervised learning of visual features\" at ECCV 2018. Due to the convolutional structure, a modern image classification model with random initialization of its parameters and no training, performs significantly better than random chance. The paper exploits this property and use the representations computed by such an untrained network to compute a clustering of the input images which is iteratively used to improve the network. 

In this talk, we will go through the idea of unsupervised pretraining for image processing in general, and then discuss the paper by Caron, et.al. in some more detail.
"

venue: RISE Learning Machines Seminars 
authors: Olof Mogren
bibtex: 
permalink:
pdf: /talks/slides/2019-04-11-mogren-unsupervised-pretraining.pdf
overwriteurl: 
externallink: 
redirect_from: 
---
