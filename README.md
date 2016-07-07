# integer-to-roman-numeral
Converts an Integer to Roman Numeral


Roman Numerals system by default doesnt support floating point system. My implementation of an encoding scheme will be as follows (based on https://en.wikipedia.org/wiki/Roman_numerals#Fractions fractions)

| Fraction      | Symbol        | 
| ------------- |:-------------:| 
| 1/12          | .             | 
| 1/6           | ..            | 
| 1/4           | ...           | 
| 1/3           | ....          | 
| 1/5           | .....         | 
| 1/2           | S             | 
| 7/12          | S.            | 
| 2/3           | S..           | 
| 3/4           | S...          | 
| 5/6           | S....         |
| 11/12         | S.....        | 
