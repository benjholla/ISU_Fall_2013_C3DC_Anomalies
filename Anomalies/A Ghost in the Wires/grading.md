# Solution
One way to solve the challenge is outlined below.

1.  First we call the phone number and see that it does indeed restrict calls based on caller ID.
2.  We investigate Caller ID spoofing and find [http://www.spoofcard.com](http://www.spoofcard.com) or [http://www.spooftel.com](http://www.spooftel.com).  Testing one of these services shows that caller ID spoofing is indeed working when the message echos back the spoofed caller ID.
3.  Next we search for a complete list of 10-digit primes.  A list can be found here:
[http://www.primos.mat.br/Ate100G_en.html](http://www.primos.mat.br/Ate100G_en.html).
4. The list in the previous step is compressed, segmented, and not restricted to 10-digit numbers.  First combine the list.  The example TenDigitPrime.java program filters and combines the 10 digit prime numbers into a single text file.  It outputs a total of `404204977` primes, which can be confirmed as correct through Wolfram Alpha: [http://www.wolframalpha.com/input/?i=prime+number+with+10+digits](http://www.wolframalpha.com/input/?i=prime+number+with+10+digits).
5. The example ValidatePrimes.java program validates prime numbers as valid phone NANP numbers.  There are `257028059` valid prime phone numbers.
6. At this point we have enough information to solve option A and option B.

## Option A Solution:

`Approximate Number of Non-Prime Phone Numbers` = `Total NANP Numbers` - `Number 10-digit prime numbers` = `5760000000` - `404204977` = `5355795023` = `(535) 579-5023`

Calling the target number from a spoofed caller ID of `(535) 579-5023` plays the message "The code is 'OPERATION TAKE DOWN'".

## Option B Solution:

`Number of Non-Prime Phone Numbers` = `Total NANP Numbers` - `Number 10-digit prime phone numbers` = `5760000000` - `257028059` = `5502971941` = `(550) 297-1941`

Calling the target number from a spoofed caller ID of `(550) 297-1941` plays the message "The code is 'KEVIN MITNIK IS FREE'".

## Grading
Grading is outlined in challenge.  Partial credit is at the discretion of the grader.
