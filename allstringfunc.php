<?php
$str = "This is sec B";
/*echo addcslashes("hello Section  ", "S") . "<br>";

echo addslashes("my 'name' is") . "<br>";//or vice versa even store data in a variable of type string

$hex = bin2hex("$str");// return its hexadecimal value of entered characters as per their ASCII
echo $hex . "<br>";
echo pack("H*", "$hex") . "<br>";
echo chop("akash hello","hello")."<br>";// remove white spaces from right side of string
echo chr(97) . "<br>";// print character on teh behalf of ASCII value
echo chunk_split("akash kumar", "2","+") . "<br>";// breaks the string into the specified lenght of characters
echo convert_uuencode("my name") . "<br>";// encode a string
echo convert_uudecode("';7D@;F%M90`` `") . "<br>";// decodes the encoded string
echo count_chars("!i will gonna teach?2 you1 Physics", 3) . "<br>";//different charcter set  printing prefrence to specail charcter and upper case as per ASCII
echo crc32("akash") . "<br>";//perform cyclic redundancy checksum
echo crypt("myfhgf", "yg") . "<br>";//output depends on OS. blowfish,extended DES, standard DES,MD5,SHA256, SHA512
print_r(explode(" ", "hey class how are you "));//separator no be empty must provide a blank space string to array
echo "<br>" . hebrev("á çùåï äúùñâ") . "<br>";//a function word is printed
//echo hebrevc("ב חשון התשסג\nב חשון התשסג","2"); deprecated not use
//echo "<h1 style=\'font-family: 'Times New Roman'\'>akash</h1>";
echo hex2bin("54686973206973207365632042") . "<br>";//convert hexadecimal to binary
$str = "Akash's Tutorial on &lt;b&gt;PHP&lt;/b&gt; script.";
echo htmlspecialchars_decode($str) . "<br>";//decode ethe functioning of html tag name
$str = '<a href="https://www.akashtut.com">Go to Akash\'sTutorial.com</a>';
echo htmlentities($str) . "<br>";
$str = '&lt;a href=&quot;https://www.google.com&quot;&gt;akashtut.com&lt;/a&gt;';
echo html_entity_decode($str) . "<br>";
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str) . "<br>";
$arr = array("hey", "class", "how", "are", "you");
echo implode(" ", $arr) . "<br>";// array to string join its alias
echo lcfirst("How Are you! ") . "<br>";// only first character to lower
echo ucfirst("how are you! ") . "<br>";//only first character to upper
echo ucwords("how are you! ") . "<br>";// first character on each word to upper
echo strtoupper("how are you! ") . "<br>";// complete to upper
echo strtolower("HOW ARE YOU! ") . "<br>";//complete to lower

echo ltrim("welcome to PHP class welcome", "welcomet ") . "<br>";// remove first wrd from left
echo trim("welcome to class welcome", "welcome") . "<br>";// from both side
echo rtrim("welcome class welcome", "welcome") . "<br>";//from right side
$str = "Hello";
echo md5($str) . "<br>";//check md5 for a string
/*$number = 1234.56;
setlocale(LC_MONETARY,"en_US"); // chnage local for currents cript
echo money_format("The price is %d", $number);*/ // deprecated use number format
/*$str = "Depression";
$str2 = "Assistant";
echo metaphone($str);// just to use sound
echo "<br>";
echo metaphone($str2) . "<br>";
echo metaphone("recognition") . "<br>";
echo ord("h") . "<br>";
echo ord("hello") . "<br>";//return ASCII of first character
echo quoted_printable_decode("Hello=0Aworld") . "<br>";// convert to an 8 bit string
echo quoted_printable_encode("Hello World") . "<br>";//
$str = "Hey, Class. (can you hear my voice?)";
echo quotemeta($str) . "<br>";// use \ for every new special character

/*The sha1() function calculates the SHA-1 hash of a string.

The sha1() function uses the US Secure Hash Algorithm 1.

From RFC 3174 - The US Secure Hash Algorithm 1: "SHA-1 produces a 160-bit output called a message digest. The message digest can then, for example, be input to a signature algorithm which generates or verifies the signature for the message. Signing the message digest rather than the message often improves the efficiency of the process because the message digest is usually much smaller in size than the message. The same hash algorithm must be used by the verifier of a digital signature as was used by the creator of the digital signature."
*/
$str = "akash";
echo "<br>".sha1($str) . "<br>";
if (sha1($str) == "e4cf979cf717fd295f4e4edc427ee1aee78fa7dc") {
    echo "<br>Hello PHP class!<br>";
    //exit;
}
echo similar_text("Hello Students", "Hello Akash") . "<br>";// calculate similarity between two strings
echo soundex($str) . "<br>";//A soundex key is a four character long alphanumeric string that represent English pronunciation of a word
$number = 29;
$str = "India";
$txt = sprintf("There are %u States  in %s.", $number, $str);
echo $txt . "<br>";
/*$str = "age:30 weight:60kg";
sscanf($str,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);
echo $str;*/
echo str_ireplace("WORLD", "Akash", "Hey world!") . "<br>";
echo str_replace("world", "Akash", "Hey world") . "<br>";
echo str_repeat("my", "5") . "<br>";// repeat string number of times
echo str_pad("akash", 20, ".") . "<br>";// extend the string till 20 length
print_r(str_split("Hello"));// split string into an array
echo "<br>" . str_shuffle("Akash PHP Tutorial") . "<br>";// shuffle each character randomly
echo str_word_count("akash class") . "<br>";// counts the words in an string
print_r(str_word_count("Hello world & good morning!", 1));
echo "<br>";
print_r(str_word_count("Hello world & good morning!", 1, "&"));
echo "<br>";
print_r(str_word_count("Hellot world!", 2));//Return an array where the key is the position of the word in the string, and value is the actual word:
echo "<br>";
echo strchr("Hello php!Hello php", "php") . "<br>";// find the first occurrence of the word
echo strcasecmp("Helloo world!", "HELLOm WORLD!") . "<br>";// 0 on equal <0 if string 1 is small and >0 is string 1 is greater
echo strncasecmp("Hello world!", "hello earth!", 6) . "<br>";// comapre strating 6 character or a fixed length
echo strnatcasecmp("2Akash php!", "10Akash PHP") . "<br>";// using natural logical algorithm BCZ 2 IS SMALL THAN 10 so result is -1
echo strnatcmp("2Akash php", "10Akash PHP") . "<br>";//similar working change in case behaviour
echo strncmp("Akash php", "Akash php", 6) . "<br>";
echo strcmp("Akash php!", "Akash php!") . "<br>";
echo strcoll("Hello World!", "Helloo World!") . "<br>";// return 0 both are equal
echo strcspn("Akash Tutorial!", "T"), "<br>";
echo stripos("I love myself, I love myself too!", "myself") . "<br>";// find first occurrence of character
echo strpos("I love myself, I love myself too!", "myself") . "<br>";// find the occurrence
echo strripos("I love myself, I love myself too!", "myself") . "<br>";// find the last occurrence
echo stristr("Akash Tutorial PHP!", "TUTORIAL") . "<br>";
echo strlen("Akash") . "<br>";//length of a string
echo strspn("Akash Tutorial!","YTut")."<br>";// total number of characters found in the string
echo strpbrk("Hello world!","oe")."<br>";// where to find the mention character first
echo strrchr("Hello php!Hello php", "php");// print from the first occurrence
echo stripcslashes("");//unquoted string quoted with addcslashes
echo stripslashes("");//unquoted string quoted with addslashes

