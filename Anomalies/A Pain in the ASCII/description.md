# A Pain in the ASCII

[Attached](./encoded-message.txt) is a message that was encoded three times.  The message uses three encoding techniques:

1.  ASCII text to Binary as ASCII text
2.  ASCII text to Octal as ASCII text
3.  ASCII text to Hex as ASCII text

The order the message was encoded is unknown, but each encoding scheme was used at least once.  Below is a list of possible ways the message could have been encoded:

- `Ciphertext = Octal(Hex(Binary(Plaintext ASCII Message)))`
- `Ciphertext = Octal(Binary(Hex(Plaintext ASCII Message)))`
- `Ciphertext = Hex(Octal(Binary(Plaintext ASCII Message)))`
- `Ciphertext = Hex(Binary(Octal(Plaintext ASCII Message)))`
- `Ciphertext = Binary(Hex(Octal(Plaintext ASCII Message)))`
- `Ciphertext = Binary(Octal(Hex(Plaintext ASCII Message)))`

When you decode the message submit it on IScore to complete this challenge.

## Hint
You might find an [ASCII Table](http://www.asciitable.com/) useful.