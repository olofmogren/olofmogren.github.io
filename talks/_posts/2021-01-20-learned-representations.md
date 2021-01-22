---
title: Learned representations and what they encode
layout: talks
tags:
 - default
box-bg-imgsrc: 
imgsrc: /graphics/mogren-2018-julia-sjoberg.png
imgalt: Learned representations and what they encode
longversion: "
 Learned continuous embeddings for language units was some of the first trembling steps of making neural networks useful for natural language processing (NLP), and promised a future with semantically rich representations for downstream solutions. NLP has now seen some of the progress that previously happened in image processing: the availability of increased computing power and the development of algorithms have allowed people to train larger models that perform better than ever. Such models also make it possible to use transfer learning for language tasks, thus leveraging large widely available datasets.
</p><p>

In 2016, Bolukbasi, et.al., presented their paper "Man is to Computer Programmer as Woman is to Homemaker? Debiasing Word Embeddings", shedding lights on some of the gender bias that was available in trained word embeddings at the time. Datasets obviously encode the social bias that surrounds us, and models trained on that data may expose the bias in their decisions. Similarly, learned representations may encode sensitive details about individuals in the datasets; allowing the disclosure of such information through distributed models or their outputs. All of these aspects are crucial in many application areas, not the least in the processing of medical texts.
</p><p>
Some solutions have been proposed to limit the expression of social bias in NLP systems. These include techniques such as data augmentation, representation calibration, and adversarial learning. Similar approaches may also be relevant for privacy and disentangled representations. In this talk, we'll discuss some of these issues, and go through some of the solutions that have been proposed recently to limit bias and to enhance privacy in various settings.
</p>
<h3>References</h3>
<p>

<ul>
<li>
Kiela & Bottou, EMNLP 2014, Learning Image Embeddings using Convolutional Neural Networks for Improved Multi-Modal Semantics
</li>
<li>
Kågebäck, Mogren, Tahmasebi, Dubhashi, 2014, Extractive summarization using continuous vector space models, https://www.aclweb.org/anthology/W14-1504  
</li>
<li>
Bolukbasi, et.al., NeurIPS 2016, Man is to Computer Programmer as Woman is to Homemaker? Debiasing Word Embeddings
</li>
<li>
Caliskan, A., Bryson, J.J., and Narayanan, A. 2017. Semantics derived automatically from language corpora contain human-like biases. Science 356(6334):183–186
</li>
<li>
Jieyu Zhao, Tianlu Wang, Mark Yatskar, Vicente Ordonez, Kai-Wei Chang (EMNLP 2017) Men Also Like Shopping: Reducing Gender Bias Amplification using Corpus-level Constraints
</li>
<li>
Zhao, et.al, EMNLP 2018, Learning Gender-Neutral Word Embeddings, https://arxiv.org/pdf/1809.01496 
</li>
<li>
Sahlgren & Ohlsson, 2018, Gender Bias in Pretrained Swedish Embeddings, https://www.aclweb.org/anthology/W19-6104.pdf 
</li>
<li>
Zhao, et.al., NAACL 2018, Gender Bias in Coreference Resolution: Evaluation and Debiasing Methods, https://www.aclweb.org/anthology/N18-2003/ 
</li>
<li>
Rudinger, et.al., NAACL 2018, Gender Bias in Coreference Resolution, https://www.aclweb.org/anthology/N18-2002 
</li>
<li>
Zhang, et.al., AIES 2018, Mitigating Unwanted Biases with Adversarial Learning
</li>
<li>
Sato, et.al., ACL 2019, Effective Adversarial Regularization for Neural Machine Translation
</li>
<li>
Wang, et.al., ICML 2019, Improving Neural Language Modeling via Adversarial Training, https://arxiv.org/pdf/1906.03805 
</li>
<li>
Sheng, Chang, Natarajan, Peng (EMNLP 2019) The Woman Worked as a Babysitter: On Biases in Language Generation, https://www.aclweb.org/anthology/D19-1339/ 
</li>
<li>
Friedrich, M., Köhn, A., Wiedemann, G., & Biemann, C. (ACL 2019). Adversarial Learning of Privacy-Preserving Text Representations for De-Identification of Medical Records. arXiv preprint arXiv:1906.05000
</li>
<li>
Jieyu Zhao, Tianlu Wang, Mark Yatskar, Ryan Cotterell, Vicente Ordonez, and Kai-Wei Chang (NAACL 2019) Gender bias in contextualized word embeddings. https://www.aclweb.org/anthology/N19-1064/ 
</li>
<li>
Yi Chern Tan and L. Elisa Celis. (NeurIPS 2019) Assessing social and intersectional biases in contextualized word representations https://papers.nips.cc/paper/9479-assessing-social-and-intersectional-biases-in-contextualized-word-representations 
</li>
<li>
Vig, J., Gehrmann, S., Belinkov, Y., Qian, S., Nevo, D., Singer, Y., & Shieber, S. (NeurIPS 2020). Investigating gender bias in language models using causal mediation analysis. https://papers.nips.cc/paper/2020/hash/92650b2e92217715fe312e6fa7b90d82-Abstract.html 
</li>
<li>


http://kwchang.net/talks/genderbias 
</li>
<li>

Shokri, R., & Shmatikov, V. (2015, October). Privacy-preserving deep learning. In Proceedings of the 22nd ACM SIGSAC conference on computer and communications security (pp. 1310-1321). http://www.cs.cornell.edu/~shmat/shmat_ccs15.pdf
</li>
<li>
Shokri, et.al., Membership inference attacks against machine learning models, https://arxiv.org/abs/1610.05820
</li>
<li>
Wang et.al., Beyond inferring class representatives: User-level privacy leakage from federated learning, https://arxiv.org/abs/1812.00535
</li>
<li>
Truex, et.al., A Hybrid Approach to Privacy-Preserving Federated Learning, https://arxiv.org/abs/1812.03224
</li>
<li>
Bagdasaryan, et.al., How To Backdoor Federated Learning, http://proceedings.mlr.press/v108/bagdasaryan20a.html
</li>
<li>
Stealing Machine Learning Models via Prediction APIs, USENIX Security, 2016., https://arxiv.org/pdf/1609.02943.pdf
</li>
<li>
Krishna, K., Tomar, G.S., Parikh, A.P., Papernot, N., Iyyer, M. (ICLR 2020), Thieves on Sesame Street! Model Extraction of BERT-based APIs, https://arxiv.org/abs/1910.12366
</li>
<li>
Geiping, Bauermeister, Dröge, Moeller (2020) Inverting Gradients - How easy is it to break privacy in federated learning? https://arxiv.org/abs/2003.14053
</li>
<li>
Martinsson, J., Listo Zec, E., Gillblad, D., Mogren, O., (2020), Adversarial representation learning for synthetic replacement of private attributes. https://arxiv.org/abs/2006.08039.
</li></ul>"
shortversion: " Learned continuous embeddings for language units was some of the first trembling steps of making neural networks useful for natural language processing (NLP), and promised a future with semantically rich representations for downstream solutions. NLP has now seen some of the progress that previously happened in image processing: the availability of increased computing power and the development of algorithms have allowed people to train larger models that perform better than ever. Such models also make it possible to use transfer learning for language tasks, thus leveraging large widely available datasets.
</p><p>
In 2016, Bolukbasi, et.al., presented their paper "Man is to Computer Programmer as Woman is to Homemaker? Debiasing Word Embeddings", shedding lights on some of the gender bias that was available in trained word embeddings at the time. Datasets obviously encode the social bias that surrounds us, and models trained on that data may expose the bias in their decisions. Similarly, learned representations may encode sensitive details about individuals in the datasets; allowing the disclosure of such information through distributed models or their outputs. All of these aspects are crucial in many application areas, not the least in the processing of medical texts.
</p><p>
Some solutions have been proposed to limit the expression of social bias in NLP systems. These include techniques such as data augmentation, representation calibration, and adversarial learning. Similar approaches may also be relevant for privacy and disentangled representations. In this talk, we'll discuss some of these issues, and go through some of the solutions that have been proposed recently to limit bias and to enhance privacy in various settings."

venue: CLASP Seminar, Gothenburg University
authors: Olof Mogren
bibtex: 
permalink:
pdf: /talks/slides/mogren-2021-01-20-learned-representations.pdf
overwriteurl: 
externallink: https://gu-clasp.github.io/
redirect_from:
---
