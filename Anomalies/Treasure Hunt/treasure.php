<?php
  // Set a Twillio voice URL to http://example.com/treasure.php
  // Test with /treasure.php?From=xxxxxxxxxx (replace xxxxxxxxxx with your phone number to test)

  // First do a little sanitization
  $phone = preg_replace('/[^0-9]/', '', $_REQUEST['From']);
  $phone = substr($phone, -10); // grab the last 10 digits (lazy way to strip country code if present)
  if(strlen($phone) === 10) {
    // phone is 10 characters in length (###) ###-####
    switch ($phone) {
      case "5152969157":
        // coover third floor
        echo "<Response><Say>Shall we play a game? How about a nice game of Global Thermonuclear War...Oh...Your not the Professor, you are that kid I sent on a fool's errand to that pay-phone. I'll need you to go to a different pay-phone and call me back. I want you to call from a free public phone located in the Parks Library. Goodbye.</Say></Response>";
        break;
      case "5152969154":
        // parks library
        echo "<Response><Say>Oh hey...It's you again...You are very persistent. I'm making a note here, huge success. It's hard to overstate my satisfaction. Are you ready for a challenge? Go to the Durham Center building and call me from the pay-phone in the lobby. Goodbye.</Say></Response>";
        break;
      case "5152969101":
        // durham (left most pay-phone)
        echo "<Response><Say>You guessed wrong.  Look to your right.</Say></Response>";
        break;
      case "5152969127":
        // durham (right most pay-phone)
        echo "<Response><Say>Good job. I forgot to mention there were two phones in the lobby...sorry. That won't happen again. Go to the Union Drive Community Center and call me from that pay-phone. Also there will be cake. Goodbye.</Say></Response>";
        break;
      case "5152969481":
        // UDCC (left most pay-phone)
        echo "<Response><Say>Hello again. I guess you found out that the cake was a lie...sorry. Anyway, do you still want your pirate treasure? Go to the second floor in the Nuclear Engineering building. There is a Wifi Network called 'Piratebox - Share Freely'. Join the network, and then open a web browser to the page, pirate.lan. Open the shared text file called, pirate_booty_treasure.txt. Submit the code inside on IScore to complete this challenge. Goodbye. It has been a pleasure...sort of.</Say></Response>";
        break;
      case "5152969482":
        // UDCC (middle pay-phone)
        echo "<Response><Say>Nope.  Not this phone.  Try again.</Say></Response>";
        break;
      case "5152969483":
        // UDCC (right most pay-phone)
        echo "<Response><Say>Nope.  Not this phone.  Look to your left.</Say></Response>";
        break;
      default:
        // unknown caller, this is the start of the hunt
        echo "<Response><Say>Hello. Nobody is available to take your message, please hang up and...hawhaw I almost got you. My name is Marvin the snark bot. You've called the pirate treasure hotline. If you want some treasure, you'll have to work for it. I'm thinking of a pay-phone. It's on the third floor of, Coover Hall. Go there, and then call me back from that phone for the next set of instructions. Goodbye.</Say></Response>";
    }
  } else {
    echo "<Response><Reject/></Response>";
  }
?>