---
title: Quantum Encryption
layout: blogposts
tags:
 - 
imgsrc: /graphics/illustrations/2016-01-25/lorenz.jpg
imgalt: Lorenz SZ-40/42. A german electro-mechanical crypto machine used during WWII.
imgcaption: 

shortversion: In an invited talk at SOFSEM in January 2016, Gilles Brassard from Universite de Montreal gave a talk about how quantum technology will impact cryptographic systems and the computer security of today.

venue: 
authors: Olof Mogren
permalink:
pdf: 
overwriteurl: 
---

The advent of quantum computers promises big changes for cryptography and computer security. In a memo from August 2015, the NSA advised organizations not to make big investments in the improvement of conventional cryptographic techniques (such as elliptic curve technology), as quantum cryptography today is seen as a real future with both promises of increased privacy, as well as more serious security threats.

![Representation of a cubit](/graphics/illustrations/2016-01-25/bloch_sphere.png)

A quantum computer is based on principles of quantum mechanics. Unlike classical computers working with binary bits (which can have values of zero and one, more on [Wikipedia](https://en.wikipedia.org/wiki/Bit)), quantum computers work with quantum bits or cubits (which can have the values zero, one, and a value that is both zero and one at the same time).
(For more info, see [Wikipedia](https://en.wikipedia.org/wiki/Quantum_computing)).
For some problems, a quantum computer can be much faster than a conventional computer.
The idea to build quantum computers dates back to the early 1980s, but it has proved difficult to construct them in practice.
However, there are now machines that can perform quantum calculations to a limited extent.

![Gilles Brassard](/graphics/illustrations/2016-01-25/brassard_gilles.jpg)

In an invited talk at SOFSEM in the Czech Republic in January 2016, [Gilles Brassard from Universite de Montreal](http://www-labs.iro.umontreal.ca/~brassard/web/en/) gave a talk about how quantum technology will impact cryptographic systems and the computer security of today.

Brassard began with the words of writer Edgar Allan Poe, who in 1841 said that &ldquo;human ingenuity cannot concoct a cypher which human ingenuity cannot resolve&rdquo;, a statement that hasn't been disproved as of this day.
At that time cryptography was simple translation tables, in which a character was replaced with another, and both sender and receiver had to know the secret cipher key.
During the ninety century, the modern cryptography was developed, based on Shannon's information theory, and modern cryptographic techniques saw the light of day.
One of the big changes was asymmetric encryption, which allows the use of key pairs where one key is public and the other secret.
For Alice to send a secret message to Bob, she only needs to know Bob's public key, and to decipher the message you'll need Bob's secret key.
RSA, which is widely used today on the Internet, is an example of this.
The security of these systems are based on the difficulty of factoring large prime numbers.
Exactly this problem is something that can be solved efficiently on a quantum computer with Shor's algorithm, which in practice means that when hackers (code-breakers) have access to workable quantum computers and implementations of this algorithm, a large part of today's communication on the Internet will be open for inspection.
The algorithm was presented before a working quantum computer had been built, and Brassard said in his talk that it is a wonder that not more focus has been on securing today's systems against this type of attack.
There are examples of classical encryption techniques (which does not make use of quantum technology, e.g. McEliece) that would be secure against attacks, but it is expensive to replace today's infrastructure, and either the experts have not realized the threat, or their planning is too short-sighted, Brassard states.

Another scenario is that the code-makers (those who create cryptographic technology) have access to quantum computers.
Would this restore the balance?
Today, there is research in this area, but no convincing solutions have been presented.
If the communication channel is based on quantum mechanics, things come into new light.
Even if a hacker can see the encrypted communication based on a quantum channel, an observer can never observe the communication without altering the information transmitted (this is a direct consequence of Heisenberg's uncertainty principle, more on [Wikipedia](https://en.wikipedia.org/wiki/Uncertainty_principle)).
So if anyone reads what you transmit, you can discover it.
This fact makes it possible to use relatively simple encryption techniques and still have a security which in principle is proven safe against all types of attacks (this is known as Quantum Key Distribution, more on [Wikipedia](https://en.wikipedia.org/wiki/Quantum_key_distribution)).

This brings us to the current situation in this cat-and-mouse game.
Unfortunately, building the machines required to perform quantum cryptography as defined in the theoretical publications is impossible.
The machines that have been built are approximations of the theory, and every time a company has said that they have a product that does this, someone has found a flaw in the technology.
Brassard mentioned as a joke, a prototype that he built together with some students in 1989, which sounded incredibly loud, and when a zero was transferred, it made a sound that that was clearly distinct from the sound it made when a one was transmitted.
The machine was safe, provided that those who wanted to crack the cipher was deaf!
Several more sophisticated systems have been built since then, China has built a network that stretches 2000 km from Beijing to Shanghai (see [China's quantum communications network almost ready](http://www.itproportal.com/2015/08/31/chinas-quantum-communications-network-almost-ready/)).

![Vadim Makarov](/graphics/illustrations/2016-01-25/makarov.jpg)

In several cases when such systems was presented, a group led by [Vadim Makarov](http://www.vad1.com/) at the [Institute for Quantum Computing, University of Waterloo, Canada](https://uwaterloo.ca/institute-for-quantum-computing/) managed to intercept a communication without discovery, and thus overcome the secret key and decipher the communication.

![Quantum Chip from DWave](/graphics/illustrations/2016-01-25/dwave_128chip.jpg)

Brassard ended his presentation with &ldquo;the jury is still out&rdquo;, so far noone has won the crypto war.
Although there are techniques that has been proven safe in theory, you can not actually build these systems today, and the ones who have tried has been hacked.
In the end, it all depends on how likely it is for a quantum computer to work well enough in practice and how soon it can be built.
Judging by the interest in quantum technology from institutions and companies as [Google and D-Wave](https://www.wired.com/2015/12/for-google-quantum-computing-is-like-learning-to-fly/), it may be imminent.
But the technology is still in its infancy, and to build these computers is expensive, as well as to cool them down to a few hundred milli-kelvins required to achieve the necessary quantum mechanical properties. 

