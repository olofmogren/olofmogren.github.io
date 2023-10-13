---
title: "Adversarial representation learning for private speech generation"
layout: posts
tags:
 - prio
background-image: 
box-bg-imgsrc: /publications/2020/privatespeech/ericsson2020privatespeech-bgbox.png
imgsrc: /publications/2020/privatespeech/ericsson2020privatespeech.png
imgalt: "Schematic diagram of our model: PCMelGAN."
shortversion: "
As more and more data is collected in various settings across organizations, companies, and countries, there has been an increase in the demand of user privacy. Developing privacy preserving methods for data analytics is thus an important area of research. In this work we present a model based on generative adversarial networks (GANs) that learns to obfuscate specific sensitive attributes in speech data. We train a model that learns to hide sensitive information in the data, while preserving the meaning in the utterance. The model is trained in two steps: first to filter sensitive information in the spectrogram domain, and then to generate new and private information independent of the filtered one. The model is based on a U-Net CNN that takes mel-spectrograms as input. A MelGAN is used to invert the spectrograms back to raw audio waveforms. We show that it is possible to hide sensitive information such as gender by generating new data, trained adversarially to maintain utility and realism. 
"
venue: The Workshop on Self-supervision in Audio and Speech at the 37th International Conference on Machine Learning
venueshort: ICML-SAS
authors: David Ericsson, Adam Östberg, Edvin Listo Zec, John Martinsson, Olof Mogren
bibtex: '@misc{ericsson2020adversarial,
      title={Adversarial representation learning for private speech generation}, 
      author={David Ericsson and Adam Östberg and Edvin Listo Zec and John Martinsson and Olof Mogren},
      year={2020},
      eprint={2006.09114},
      archivePrefix={arXiv},
      primaryClass={eess.AS},
      journal={ICML workshop on Self-supervision in Audio and Speech}
}'
permalink: /publications/2020/privatespeech
pdf: /publications/2020/privatespeech/ericsson2020privatespeech.pdf

---
