---
layout: freepage
---

# Ordlista för *Representation learning for natural language*

Detta är en ordlista för de som saknar teknisk bakgrund för att underlätta
läsandet av avhandlingen
[*Representation learning for natural language*](http://mogren.one/phd)
av Olof Mogren.

Ordlistan är inte i alfabetisk ordning, utan försöker istället sig på att förklara
saker från enkla till mer komplexa.

Ordlistan listar först den engelska termen, och därefter den svenska, om en sådan finns.

<a name="nlp"></a>
* **Natural language processingg (NLP)** - *datorlingvistik/computational linguistics* - studien av hur naturligt språk (skrivet eller talat av människor) kan bearbetas av datorer. På senare tid så har [maskininlärning](#machinelearning) blivit ett allt viktigare verktyg inom NLP. Bägge är viktiga delar av  artificiell intelligens.

<a name="machinelearning"></a>
* **Machine learning** - *maskininlärning* - ett datorprogram som utför en uppgift och som använder [data](#trainingdata) för att bli bättre på uppgiften. Genom att jämföra det som kommer ut från programmet med det man ser i datan med hjälp av en [felfunktion](#objective), och att försöka minimera dess värde, kan programmet bli bättre. En maskininlärningsalgoritm kan tränas vid ett tillfälle för att sedan användas, eller så kan den fortsätta att förbättras när den får se ny data.

<a name="trainingdata"></a>
* **Training data** - *träningsdata* - datan som en [maskininlärningsmodell](#mlmodel) använder för att lära sig en uppgift. Exempelvis för en bildklassificerare, så består datan av bilder tillsammans med deras korrekta klassificeringar. Uppgiften blir för modellen att lära sig att beräkna den korrekta klassen utan att titta på klassificeringen från datan.

<a name="vector"></a>
* **Vector** - *vektor* - en sekvens av tal. Om vektorns längd är två eller tre, så kan dessa tolkas som tvådimensionella eller tredimensionella koordinater. Är längden större, så kan de också tolkas som koordinater, fast i ett högdimensionellt vektorrum. För att kunna visualisera högdimensionella vektorer, projicerar man ofta ner dessa till två dimensioner. Detta är en process som gör att man förlorar information från den ursprungliga vektorn. Vi skriver vektorer med fetstil: ***v***. Exempelvis, en fyrdimensionell vektor:
| --- |
| 0.3 |
| 0.8 |
| 0.7 |
| 0.3 |
([Läs mer på Wikipedia.](https://en.wikipedia.org/wiki/Row_and_column_vectors))

<a name="matrix"></a>
* **Matrix** - *matris* - ett rutnät eller tabell av tal. Denna kan ses som en sekvens av [vektorer](#vector). Vi benämner matriser med stor bokstav: *M*. Exempelvis, en 4x3-matris:
| --- | --- | --- |
| 0.3 | 0.5 | 0.0 |
| 0.8 | 0.2 | 1.9 |
| 0.7 | 0.7 | 0.0 |
| 0.3 | 0.1 | 1.1 |
([Läs mer på Wikipedia.](https://en.wikipedia.org/wiki/Matrix_(mathematics))) 

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






