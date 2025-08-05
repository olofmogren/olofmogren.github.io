---
authors: Richard Lindholm, Oscar Marklund, Olof Mogren, John Martinsson
box-bg-imgsrc: ''
doi: https://doi.org/10.48550/arXiv.2503.02422
eprint: '2503.02422'
generatebibtex: 'yes'
imgalt: Top K Entropy uncertainty aggregation selects the top K segment
  entropies (here K=3) obtained from the segments of the file. The resulting
  uncertainty for the file is the average of the selected segment entropies.
imgsrc: '/publications/2025/aggregation/aggregation.png'
layout: posts
longversion: The vast amounts of audio data collected in Sound Event Detection (SED)
  applications require efficient annotation strategies to enable supervised learning.
  Manual labeling is expensive and time-consuming, making Active Learning (AL) a promising
  approach for reducing annotation effort. We introduce Top K Entropy, a novel uncertainty
  aggregation strategy for AL that prioritizes the most uncertain segments within
  an audio recording, instead of averaging uncertainty across all segments. This approach
  enables the selection of entire recordings for annotation, improving efficiency
  in sparse data scenarios. We compare Top K Entropy to random sampling and Mean Entropy,
  and show that fewer labels can lead to the same model performance, particularly
  in datasets with sparse sound events. Evaluations are conducted on audio mixtures
  of sound recordings from parks with meerkat, dog, and baby crying sound events,
  representing real-world bioacoustic monitoring scenarios. Using Top K Entropy for
  active learning, we can achieve comparable performance to training on the fully
  labeled dataset with only 8% of the labels. Top K Entropy outperforms Mean Entropy,
  suggesting that it is best to let the most uncertain segments represent the uncertainty
  of an audio file. The findings highlight the potential of AL for scalable annotation
  in audio and time-series applications, including bioacoustics.
pdf: https://arxiv.org/pdf/2503.02422.pdf
permalink: /publications/2025/aggregation/
shortversion: The vast amounts of audio data collected in Sound Event Detection (SED)
  applications require efficient annotation strategies to enable supervised learning.
  Manual labeling is expensive and time-consuming, making Active Learning (AL) a promising
  approach for reducing annotation effort. We introduce Top K Entropy, a novel uncertainty
  aggregation strategy for AL that prioritizes the most uncertain segments within
  an audio recording, instead of averaging uncertainty across all segments. This approach
  enables the selection of entire recordings for annotation, improving efficiency
  in sparse data scenarios. We compare Top K Entropy to random sampling and Mean Entropy,
  and show that fewer labels can lead to the same model performance, particularly
  in datasets with sparse sound events. Evaluations are conducted on audio mixtures
  of sound recordings from parks with meerkat, dog, and baby crying sound events,
  representing real-world bioacoustic monitoring scenarios. Using Top K Entropy for
  active learning, we can achieve comparable performance to training on the fully
  labeled dataset with only 8% of the labels. Top K Entropy outperforms Mean Entropy,
  suggesting that it is best to let the most uncertain segments represent the uncertainty
  of an audio file. The findings highlight the potential of AL for scalable annotation
  in audio and time-series applications, including bioacoustics.
tags:
- prio
- frontpage
title: Aggregation Strategies for Efficient Annotation of Bioacoustic Sound Events
  Using Active Learning
venue: EUSIPCO 2025
venuelink: https://arxiv.org/abs/2503.02422
venueshort: EUSIPCO

---
