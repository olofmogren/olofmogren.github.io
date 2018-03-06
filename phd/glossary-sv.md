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

Ordlistan listar först den engelska termen, och därefter ett försök till en svensk översättning.

<a name="nlp"></a>
* **Natural language processingg (NLP)** - *datorlingvistik/computational linguistics* - studien av hur naturligt språk (skrivet eller talat av människor) kan bearbetas av datorer. På senare tid så har [maskininlärning](#machinelearning) blivit ett allt viktigare verktyg inom NLP. Bägge är viktiga delar av  artificiell intelligens.

<a name="machinelearning"></a>
* **Machine learning** - *maskininlärning* - ett datorprogram som utför en uppgift och som använder [data](#trainingdata) för att bli bättre på uppgiften. Genom att jämföra det som kommer ut från programmet med det man ser i datan med hjälp av en [felfunktion](#objective), och att försöka minimera dess värde, kan programmet bli bättre. En maskininlärningsalgoritm kan tränas vid ett tillfälle för att sedan användas, eller så kan den fortsätta att förbättras när den får se ny data.

<a name="trainingdata"></a>
* **Training data** - *träningsdata* - datan som en [maskininlärningsmodell](#mlmodel) använder för att lära sig en uppgift. Exempelvis för en bildklassificerare, så består datan av bilder tillsammans med deras korrekta klassificeringar. Uppgiften blir för modellen att lära sig att beräkna den korrekta klassen utan att titta på klassificeringen från datan.

<a name="vector"></a>
* **Vector** - *vektor* - en sekvens av tal. Om vektorns längd är två eller tre, så kan dessa tolkas som tvådimensionella eller tredimensionella koordinater. Är längden större, så kan de också tolkas som koordinater, fast i ett högdimensionellt vektorrum. För att kunna visualisera högdimensionella vektorer, projicerar man ofta ner dessa till två dimensioner. Detta är en process som gör att man förlorar information från den ursprungliga vektorn. Vi skriver vektorer med fetstil: ***v***. Exempelvis, en fyrdimensionell vektor:

| 0.3 |
| 0.8 |
| 0.7 |
| 0.3 |

([Läs mer på Wikipedia.](https://en.wikipedia.org/wiki/Row_and_column_vectors))

<a name="matrix"></a>
* **Matrix** - *matris* - ett rutnät eller tabell av tal. Denna kan ses som en sekvens av [vektorer](#vector). Vi benämner matriser med stor bokstav: *M*. Exempelvis, en 4x3-matris:

| 0.3 | 0.5 | 0.0 |
| 0.8 | 0.2 | 1.9 |
| 0.7 | 0.7 | 0.0 |
| 0.3 | 0.1 | 1.1 |

([Läs mer på Wikipedia.](https://en.wikipedia.org/wiki/Matrix_(mathematics))) 

<a name="mlmodel"></a>
* **Machine learning model** - *maskininlärningsmodell* - ett sett att strukturera bilden av en maskininlärningsalgoritm. Exempel kan vara [*neuronnät*](ann) eller andra statistiska modeller. Generellt så tränas en modell genom att man uppdaterar dess interna parametrar, vilka ofta lagras i [matriser](#matrix).

<a name="ann"></a>
* **Artificial neural network** - *neuronnät eller artificiella neurala nätverk (svengelska, men vanligt förekommande)* - en klass av [maskininlårningsmodeller](#mlmodel) som är *lite* inspirerade av hjärnan. Ett neuronnät byggs med hjälp av enkla byggstenar ([artificiella neuroner eller units](#artificialneuron), [lager](#layer), [aktiveringsfunktioner](#activationfunction)). Ett neuronnät kan approximera vilken given reellvärd funktion som helst, bara den har tillräckligt många [neuroner](#artificialneuron).

<a name="artificialneuron"></a>
* **Artificial neuron** - *artificiell neuron* - inspirerad av biologiska neuroner. Dessa moduler (units) tar en [vektor](#vector) som input från föregående lager (eller från input-datan), beräknar en viktad summa genom att först multiplicera input-vektorn ***x*** med en vektor av parametrar (eller vikter) ***w***, och adderar en bias *b*. ***a*** = ***w*** &middot; ***x*** + b. Resultatet skickas sen genom en icke-linjär [aktiveringsfunktion](#activationfunction) för att få det slutgiltiga resultatet från neuronen..

<a name="layer"></a>
* **Neural network layer** - *lager* - ett antal [artificiella neuroner](#artificialneuron), som alla tar en vektor sin indata, och ger ett tal som utdata. Tillsammans, så utgör deras utdata en [vektor](#vector), och varje [layer](#layer) transformerar alltså sin indata-vektor till en utdata-vektor.

<a name="activationfunction"></a>
* **Activation function** - *aktiveringsffunktion* - en funktion som tar en pre-aktivering ***a*** i en [artificiell neuron](#artificialneuron) eller [layer](#layer), och applicerar en elementvis icke-linearitet. Det är vanligt att man använder s-formade sigmoidfunktioner såsom [logistiska funktionen (Wikipedia)](https://en.wikipedia.org/wiki/Logistic_function) eller [hyperbolisk tangent (Wikipedia)](https://en.wikipedia.org/wiki/Hyperbolic_function#Tanh).

<a name="gradientdescent"></a>
* **Gradient descent** - *följa gradientens riktning* - en optimeringsteknik (generellt så optimerar vi funktioner som har högdimensionella indata). Först beräknas gradienten (motsvarar derivatan i endimensionella fallet). Därefter tas ett litet steg i riktning mot brantaste sluttningen. Processen upprepas tills något avslutningskriterium uppnåtts.

<a name="representation"></a>
* **Representation** - *representation* - i denna avhandling så syftar *representation* typiskt på en vektor som beräknats för att representera ett objekt såsom ett ord, en bild, eller en mening. [Neuronnät](#ann) beräknar en sådan vektorrepresentation vid varje lager [layer](#layer).

<a name="feature"></a>
* **Feature** - *egenskap* - i många tekniker för maskininlärning så krävs att man beräknar *features* och ger som indata till programmet. Dessa *features* eller *egenskaper* är ofta resultatet av en stor arbetsinsats, och ger en vy av datan som inte kan förändras för att få systemet att fungera bättre. I [neuronnät](#ann) så lär sig systemet alla features som används, i form av de inlärda representationerna.

<a name="objective"></a>
* **Objective** - *felfunktion* - mäter hur bra modellen fungerar. Denna används som kriterium för att optimera parametrarna i en modell (se [gradient descent](#gradientdescent)). Felfunktionen är ofta formulerad genom ett avståndsmått som mäter skillnaden på utdatan från modellen jämfört med den önskade utdatan som den ser ut i [träningsdatan](#trainingdata).






