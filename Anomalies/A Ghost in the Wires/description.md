# A Ghost in the Wires

## Background
[Kevin Mitnick](https://en.wikipedia.org/wiki/Kevin_Mitnick) was a notorious hacker arrested by the FBI in 1995.  His early hacking career began in [phone phreaking](https://en.wikipedia.org/wiki/Phreaking).  The [North American Number Plan](https://en.wikipedia.org/wiki/North_American_Numbering_Plan) for 10-digit telephone numbers consists of a 3-digit area code, a 3-digit central office (exchange) code, and a 4-digit station number.

NANP area codes may not start with 0 or 1 and they cannot contain the number 9 in the middle of the 3 digits. Therefore there can be (8 &#42; 9 &#42; 10) = 720 possible area codes.

Exchange numbers may not begin with a 0 or 1.  Therefore there can be (8 &#42; 10 &#42; 10) = 800 possible exchange numbers.

There are no digit restrictions on the station number, leaving (10 &#42; 10 &#42; 10 &#42; 10) = 10,000 possible station numbers.

In total there are (720 &#42; 800 &#42; 10,000) = 5,760,000,000 possible 10-digit telephone numbers.

## Challenge

In order to complete this challenge you must call the local target number `(515) 200-1301`.  When called from the correct calling number a message with a code you can submit on IScore for this challenge will be played.  In order to complete this challenge you will have to learn to spoof caller ID.  In this challenge you may choose to complete either option A or option B (but not both).  Option A is easier, but is worth fewer points.

The number to spoof when calling the target number is the result of a calculation you must complete involving "prime phone numbers".

We define a prime phone number as a 10-digit prime number that is also a valid NANP number.  For example `(546) 345-8053` is a prime phone number.  Note that `(591) 558-7277` is not a prime number because the middle digit of the area code is 9, making it an invalid phone number even though the number itself is prime.

### Challenge Option A (25 Points):
One could approximate the number of non-prime phone numbers as the total number of phone numbers minus the total number of 10-digit prime numbers.  Since some 10-digit prime numbers are not valid phone numbers this calculation is not exact due to an over-approximation of the number of prime phone numbers.

To complete option A: Call `(515) 200-1301` from:

`approximate number of non-prime phone numbers` = `total possible NANP numbers` - `number of 10-digit prime numbers`.  

Submit the code revealed in the message on IScore to claim your points.

### Challenge Option B (40 Points):
Calculating the actual number of non-prime numbers will be a bit more difficult (but is worth more points).

To complete option B: Call `(515) 200-1301` from:

`number of non-prime phone numbers` = `total possible NANP numbers` - `number of 10-digit prime phone numbers`.

Submit the code revealed in the message on IScore to claim your points.

## Notes

### Legality
Caller ID Spoofing is legal if:

> "it’s not done with “the intent to defraud, cause harm, or wrongfully obtain anything of value"

Reference: [http://www.spoofcard.com/blog/2012/12/14/the-verdict-is-in-appeals-court-rules-non-harmful-caller-id-spoofing-is-legal/](http://www.spoofcard.com/blog/2012/12/14/the-verdict-is-in-appeals-court-rules-non-harmful-caller-id-spoofing-is-legal/)


Please be responsible!  For this challenge, you have permission to call the target number in this challenge from a spoofed caller ID, but permission is only granted for the target number `(515) 200-1301`.


### Hints
- You would find it in your interest to look for pre-computed lists of prime numbers rather than trying to compute them yourself.

- You do not need to purchase anything to complete this challenge.  Try using a free trial/demo of a caller ID spoofing service first.  If for some reason this doesn't work, please contact the Green Team Anomaly Coordinator for assistance.

### Partial Credit

If you cannot complete this challenge, submit a report of what you tried.  Some partial credit may be given.