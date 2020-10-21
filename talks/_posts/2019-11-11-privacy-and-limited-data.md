---
title: "Privacy and limited data"
layout: talks
tags:
 - default
imgsrc: /graphics/illustrations/2019-11-11/adversarial-privacy.png
imgalt: Adversarial privacy.
longversion: "
</p><p>
Many areas of advanced data analytics have seen astonishing progress with deep learning. Deep neural networks now power systems that excel in image processing, playing ancient board-games, and interpreting natural language. These networks have a high learning capacity, but they require large amounts of training data to come to their full potential. What choices do we have when the required amounts of data can not be met? And how do we ensure privacy for individuals that may be part of the datasets that underlie our conclusions?

<div style=\"float: right; clear: right; max-width: 60%; margin: 4em;\" />
<iframe width=\"360\" height=\"220\" src=\"https://www.youtube.com/embed/-yAAJJ84cwU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
</div>

</p><p>
One strategy to deal with limited data is transfer learning: the process of training a model in two stages: first using a large generic dataset, and then on data from the target domain where the model will later be used and evaluated. For instance, you may pre-train a model for classification on a large and easily available dataset such as Imagenet, and then perform the fine-tuning on a different dataset, or even on a different task such as semantic segmentation. For convolutional neural networks in computer vision applications, this kind of initialization has been successfully employed for years, and similar approaches have now started to emerge for applications in natural language processing. The Transformer-based architectures such as BERT and GPT-2 can now be trained in similar ways for language applications.

</p><p>
When a model obtains a very good fit on the training data, yet fails to generalize to unseen test data, is an issue referred to as overfitting. Interestingly enough, this is closely linked to the issue of privacy. Special care needs to be taken about both, especially when using datasets of limited size. When a model fails to generalize due to overfitting, it also starts to memorize information that is specific to the training data. For sensitive applications, this may be information that we'd like the model not to expose. Limiting overfitting can lead to improving privacy but this neat side-effect may not be enough in practice. Ensuring privacy may also be approached using mechanisms such as particular ensemble setups or adversarial learning.

</p><p>
In this talk, we will go through the basics of transfer learning and some issues of data privacy with some possible remedies, illustrated with examples from the AI research at RISE Research Institutes of Sweden.
</p><p>
<strong>Video:</strong> <a href=\"https://www.youtube.com/watch/-yAAJJ84cwU\">Youtube</a>
"
shortversion: "
Talk at the GAIA Meetup seminar series talk about privacy and limited data.
"

venue: GAIA Meetup
authors: Olof Mogren
bibtex: 
permalink:
pdf: /files/2019-11-11-privacy-and-limited-data.pdf
overwriteurl: 
externallink: 
redirect_from: /talks/2019/01/31/neural-ordinary-differential-equations.html
---

