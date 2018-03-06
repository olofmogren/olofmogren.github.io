# Glossary for *Representation learning for natural language*

This is a glossary for non-technical people to read 
[*Representation learning for natural language*](http://mogren.one/phd)
by Olof Mogren.


<a name="vector"></a>
* **Vector** - a sequence of numbers. If its length is two or three, these can be interpreted as coordinates in 2D or 3D. In higher dimensions they can still be interpreted as coordinates, but in high-dimensional space. Vectors are often written with boldface: ***v***.

<a name="matrix"></a>
* **Matrix** - a grid/table of numbers. Can be seen as a sequence of [vectors](#vector). Matrices are often written using capital letters: *M*.

<a name="mlmodel"></a>
* **Machine learning model** - a structural view of a machine learning algorithm. Examples can be [*artificial neural networks*](ann) or other statistical models. In general, a model is trained by updating its internal parameters, which are often stored as matrices (see [matrix](#matrix)).

<a name="ann"></a>
* **Artificial neural network** - a class of [machine learning model](#mlmodel) lightly inspired by animal brains. This connectionist approach, where large models can be built using simple building blocks ([artificial neurons or units](#artificialneuron), [layers](#layer), [activation functions](#activationfunction)). An artificial neural network can approximate any given continuous function to an arbitrary precision, provided that it has enough [units](#artificialneuron).


<a name="artificialneuron"></a>
* **Artificial neuron** - 

<a name="layer"></a>
* **Neural network layer** - a number of [artificial neurons](#artificialneuron), each taking a vector as input, and gives a number as output. Together, the numbers of outputs from all [artificial neurons](#artificialneuron) in the layer can be seen as a [vector](#vector), and each [layer](#layer) transforms its input vector into an output vector.

<a name="activationfunction"></a>
* **Activation function** - 

<a name="nlp"></a>
* **Natural language processingg (NLP)** - the study of computational processsing of language as written or spoken by people.

<a name="gradient descent"></a>
* **Gradient descent** - 

<a name="representation"></a>
* **Representation** - in this thesis, a *representation* is typically a vector that represents some data object such as a word, an image, or a sentence. [Artificial neural networks](#ann) computes a vector as output from each [layer](#layer).

<a name="feature"></a>
* **Feature** - 


