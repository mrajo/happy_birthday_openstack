<?php
// Hello, I'm Anthony.
## GREETINGS! I'm DerpCoder! I WANT TO BE A H4X0R!
// Well you can practice with this easy task. Just wish OpenStack a happy birthday.
## HA! I will amaze you with my technique. I just need some tools to prepare this message.
## Now, if only I had those wooden alphabet blocks that babies use to learn their ABCs.
// Hmm, that's an interesting abstraction to model. Which language? Ruby? Python?
## PHP!
// For reals?
## Hell yea!!! PHP gives me real ultimate power!
// I suppose. Well, you can simulate alphabet blocks with the range function...
## SWEET! Let's do this...

$alpha = range('A', 'Z');

// Good job. So now you have your blocks; what's next?
## What if the ASCII standard changes and my text becomes defunct?
## I must abstract the ASCII values to prepare for this disaster!
// What are you talking about? No, you don't nee--
## Let's just get a collection of current ASCII values that we can change after the ASCIIpocalypse.

$ascii = array_map(function($_) { return $_ + (1 << 1 << 1 << 1 << 1 << 1 << 1); }, range(1, 26));

// Stop what you're doing. I can't begin to imagine where you even came up with that garbage code.
## Just a few more touches...

$alpha_vars = array_map(function($_) { return "$$_"; }, $alpha);
$ascii_var_list = join(',', $alpha_vars);
eval("list($ascii_var_list) = \$ascii;");

## And voila! Now I have a variable for each letter representing its ASCII value.
// Are you high? Is that an eval? Did you just pollute the global namespace with a couple dozen useless variables?
## Impressive, is it not?
// Agreed, it is not.
## I think I need upper and lower case letters, and a space

$alpha = range('a', 'z');
$ascii = range(ord('a'), ord('a') + count($alpha) - 1, pi() / pi());
$alpha_vars = array_map(function($_) { return "$$_"; }, $alpha);
$ascii_var_list = join(',', $alpha_vars);
eval("list($ascii_var_list) = \$ascii;");
$sp = 32;

// There are no words...
## I see you are speechless by my skillz
// It's hard to talk through the vomit
## Now we just need to pull our greeting from a data persistance layer, in case we want to change the message later
## I will use Twitter as my data store
// Oh dear god...

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://twitter.com/MachineEpsilon/status/225805190392070145');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$tweet = curl_exec($ch);
curl_close($ch);
preg_match('/<p class="js-tweet-text">(\s*)(.*)(\s*)<\/p>/', $tweet, $matches);
$greeting = $matches[2];

## I even encrypted the data using this complex algorithm known as the Caesar cipher.
## I won't bother discussing it with a layperson such as yourself.
// ::poker face::
## Now I need to assemble the format string for printing

$_='_';                  $ss='ss';           $hb=$$$_.
$$$$$ss.               $$$$$_.$$$$ss.        $$$$$$$_.
$$$$$ss.              $$$$$_.   $$$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$ss.             $$$$$_.     $$$ss.      $$$$$$$_.
$$$$$$$$$$$$$ss.      $$$$_.    $$$$ss.      $$$$$$$$$$$$$$$$_.
$$$$$$$$$$$$$ss.       $$$$$_.$$$$ss.        $$$$$$$$$$$$$$$$_.
$$$$$$$$$$$$$ss.         $$$$$$$$_.          $$$$$$$$$$$$$$$ss;

// I think I just heard the PHP parser cry at the sight of so many variable variables.
## We're almost done. Just gotta decrypt my data, prepare my formatting, yadda yadda...

$decrypted_data            = str_rot13($greeting);
$john_purrier_rocks        = str_split($decrypted_data);
$brandon_philips_kicks_ass = array_map(function($_) { return ($_ === ' ') ? '$sp' : "\$$_"; }, $john_purrier_rocks);
$rabble_makes_me_moist     = join(',', $brandon_philips_kicks_ass);
                             eval("\$rabble_makes_me_moist = array($rabble_makes_me_moist);");
$appfog_owns               = array_map('chr', $rabble_makes_me_moist);
                             array_unshift($appfog_owns, str_replace('_s', '%', $hb));
$happy_birthday            = str_replace('s', 'S', ucwords(strtolower(call_user_func_array('sprintf', $appfog_owns))));
echo $happy_birthday;

// What the hell is the matter with you?!
// How do you expect to maintain this load of crap?
## HA! Maintenance programming isn't for rockstars like me! I leave this in your hands.
// F!@# that...I'd rather
                          die();