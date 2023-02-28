---
title: "Specialized federated learning using a mixture of experts"
layout: posts
tags:
 - prio
background-image: 
imgsrc: /publications/2020/federated/federatedfigure.png
imgalt: "The proposed framework visualized."
shortversion: "
Federated learning has received attention for its efficiency and privacy benefits,in settings where data is distributed among devices.   Although federated learn-ing shows significant promise as a key approach when data cannot be shared orcentralized, current incarnations show limited privacy properties and have shortcomings  when  applied  to  common  real-world  scenarios.   One  such  scenario  isheterogeneous data among devices, where data may come from different generating distributions. In this paper, we propose a federated learning framework usinga mixture of experts to balance the specialist nature of a locally trained model withthe generalist knowledge of a global model in a federated learning setting.  Ourresults show that the mixture of experts model is better suited as a personalizedmodel for devices when data is heterogeneous, outperforming both global and local models.  Furthermore, our framework gives strict privacy guarantees, whichallows clients to select parts of their data that may be excluded from the federation.   The evaluation shows that the proposed solution is robust to the settingwhere some users require a strict privacy setting and do not disclose their modelsto a central server at all, opting out from the federation partially or entirely.  The proposed framework is general enough to include any kind of machine learningmodels, and can even use combinations of different kinds.
"
venue: Arxiv Preprint 2020
venueshort: Arxiv 2020
venuelink: https://arxiv.org/abs/2010.02056
authors: Edvin Listo Zec, Olof Mogren, John Martinsson, Leon René Sütfeld, Daniel Gillblad
bibtex: '@misc{zec2020federated,
      title={Federated learning using a mixture of experts}, 
      author={Edvin Listo Zec and Olof Mogren and John Martinsson and Leon René Sütfeld and Daniel Gillblad},
      year={2020},
      eprint={2010.02056},
      archivePrefix={arXiv},
      primaryClass={cs.LG}
}'
permalink: /publications/2020/federated/
pdf: /publications/2020/federated/listozec2020federated.pdf

---
