---
title: Convergence, generalisation and privacy in generative adversarial networks
layout: talks
tags:
 - default
imgsrc: /graphics/illustrations/2019-09-26/dcgan.png
imgalt: Convergence, generalisation and privacy in generative adversarial networks
longversion: "
"
shortversion: "
Seminar presentation about Convergence, generalisation and privacy in generative adversarial networks.
"

venue: RISE Learning Machines Seminars
authors: Olof Mogren
bibtex: 
permalink:
pdf: /talks/slides/mogren-2019-09-26-convergence-generalization-and-privacy-in-gans.pdf
overwriteurl: 
externallink: 
redirect_from: 
---

Generative adversarial networks (GANs) never seem to stop surprising us by generating ever crisper images that are all but indistinguishable from real photographs. By training two neural network models simultaneously with opposing objectives: one generator and one discriminator, the resulting process is a min-max game where an equilibrium is achieved when the generator is strong enough to generate data that is similar to the real data, and yet, the discriminator is good enough to give a learning signal to the generator.

But the field has struggled with a number of questions. The existence of an equilibrium is not obvious, and the process of findind one may be tricky. This has led to a number of strategies to stabilize training. Furthermore, generative models are difficult to evaluate. Thus, the learned generating distribution may or may not approximate the real data generating distribution well. In some cases, a generator may even experience mode collapse, where all generated data recides very close to the mean. So, what can we say about the learned distribution? Is the generator memorizing training examples?

The generalization capabilities of GANs have been improved by introducing Lipschitz regularization (Qi, 2017, Arjovsky, et.al., 2017, Miyato, et.al., 2018). The neural net distance was presented by Arora et.al. (ICML 2017) and generalization properties for this distance was shown, along with existence of approximate pure equilibrium for some a class of generators. Wu, et.al., (NeurIPS 2019) showed that a differentially private private learning algorithm generalize better.

References:
1. GJ Qi, Loss-sensitive generative adversarial networks on lipschitz densities, https://arxiv.org/abs/1701.06264
2. S Arora, R Ge, Y Liang, T Ma, Y Zhang, Generalization and equilibrium in generative adversarial nets (gans), https://arxiv.org/abs/1703.00573
3. Bingzhe Wu, Shiwan Zhao, Haoyang Xu, ChaoChao Chen, Li Wang, Xiaolu Zhang, Guangyu Sun, Jun Zhou, Generalization in Generative Adversarial Networks: A Novel Perspective from Privacy Protection, https://arxiv.org/pdf/1908.07882v1
4. Arjovsky, Chintala, Bottou, Wasserstein GAN, https://arxiv.org/abs/1701.07875
5. Takeru Miyato, Toshiki Kataoka, Masanori Koyama, Yuichi Yoshida, Spectral Normalization for Generative Adversarial Networks, https://arxiv.org/abs/1802.05957

