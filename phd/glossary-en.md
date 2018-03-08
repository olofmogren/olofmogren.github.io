---
layout: freepage
---

# Glossary for *Representation learning for natural language*

This is a glossary for people with a non-technical background to read 
[*Representation learning for natural language*](http://mogren.one/phd)
by Olof Mogren.

The glossary is not in alphabetical order, but ordered by incresing complexity.


<a name="nlp"></a>
* **Natural language processingg (NLP)** - the study of computational processsing of language as written or spoken by people. In recent years, [machine learning](#machinelearning) has become an important tool for NLP. Both are important components of artificial intelligence.

<a name="machinelearning"></a>
* **Machine learning** - any approach that solves a task, and that uses [data](#trainingdata) to improve. By comparing its output with the desired output using a [loss function](#objective), and trying to minimize the loss, the algorithm can improve. A machine learning algorithm can be trained once and then deployed, or it can be continuously improved during operation.

<a name="trainingdata"></a>
* **Training data** - the data fed to a [machine learning model](#mlmodel) for it to learn. For example, for an image classifier, the training data will consist of images coupled with their correct classifications. The task is for the model to learn to compute the correct classifications without looking at the correct classes from the training data.

<a name="vector"></a>
* **Vector** - a sequence of numbers. If its length is two or three, these can be interpreted as coordinates in 2D or 3D. In higher dimensions they can still be interpreted as coordinates, but in high-dimensional space. To be able to visualize high-dimensional vectors, one often project them down to two dimensions, a process that inherently makes the vectors lose much information. Vectors are often written with boldface: ***v***. For example, a 4-dimensional vector:
[ 0.3, 0.8, 0.7, 0.3] &nbsp; ([Read more on Wikipedia.](https://en.wikipedia.org/wiki/Row_and_column_vectors))

<a name="matrix"></a>
* **Matrix** - a grid/table of numbers. Can be seen as a sequence of [vectors](#vector) (either its rows or its columns). Matrices are often written using capital letters: *M*. For example, a 4x3 matrix:<br />
0.3, 0.5, 0.0<br />
0.8, 0.2, 1.9<br />
0.7, 0.7, 0.0<br />
0.3, 0.1, 1.1<br />
([Read more on Wikipedia.](https://en.wikipedia.org/wiki/Matrix_(mathematics))) 

<a name="mlmodel"></a>
* **Machine learning model** - a structural view of a machine learning algorithm. Examples can be [*artificial neural networks*](ann) or other statistical models. In general, a model is trained by updating its internal parameters, which are often stored as matrices (see [matrix](#matrix)).

<a name="ann"></a>
* **Artificial neural network** - a class of [machine learning model](#mlmodel) lightly inspired by animal brains. This connectionist approach, where large models can be built using simple building blocks ([artificial neurons or units](#artificialneuron), [layers](#layer), [activation functions](#activationfunction)). An artificial neural network can approximate any given continuous function to an arbitrary precision, provided that it has enough [units](#artificialneuron).

<a name="artificialneuron"></a>
* **Artificial neuron** - inspired by biological neurons, these units take a [vector](#vector) of inputs from the previous layer (which may be the data input), computes a weighted sum by first multiplying the input ***x*** with a weight vector ***w***, and adding a bias term *b*. ***a*** = ***w*** &middot; ***x*** + b. The result is fed through a non-linear [activation function](#activationfunction) to get the output from the unit.

<a name="layer"></a>
* **Neural network layer** - a number of [artificial neurons](#artificialneuron), each taking a vector as input, and gives a number as output. Together, the numbers of outputs from all [artificial neurons](#artificialneuron) in the layer can be seen as a [vector](#vector), and each [layer](#layer) transforms its input vector into an output vector.

<a name="activationfunction"></a>
* **Activation function** - a function that takes the pre-activation ***a*** in a [unit](#artificialneuron) or [layer](#layer), and applies an element wise non-linearity. Common choices are s-shaped sigmoidal functions such as the [logistic function (Wikipedia)](https://en.wikipedia.org/wiki/Logistic_function) or [hyperbolic tangent (Wikipedia)](https://en.wikipedia.org/wiki/Hyperbolic_function#Tanh).

<a name="gradientdescent"></a>
* **Gradient descent** - an approach to optimize a function (generally of high dimensional inputs). First, one computes the gradient (the derivative in high dimensions). Secondly, a small step is taken in the direction of steepest descent. The process is iterated until some convergence is achieved.

<a name="representation"></a>
* **Representation** - in this thesis, a *representation* is typically a vector that represents some data object such as a word, an image, or a sentence. [Artificial neural networks](#ann) computes a vector as output from each [layer](#layer).

<a name="feature"></a>
* **Feature** - traditional machine learning approaches do not learn their representations. They require features to be computed and fed to the learning algorithm. These features are often the result of massive engineering efforts, and provide a data representation that can not be further optimized by the computer to better suit the task. The learned representations in [artificial neural networks](#ann) are features but they were not engineered.

<a name="objective"></a>
* **Objective** - the loss function or error function that mesures how well the model is doing. By mesuring this one has something to optimize, to make the model perform better (see [gradient descent](#gradientdescent)). The objective is often expressed as some kind of distance between the output computed by the model (with its current set of weights) and a reference output taken from the [training data](#trainingdata).






