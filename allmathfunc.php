<?php
echo 7 + 3; // 0utputs: 10
echo 7 - 2; // 0utputs: 5
echo 7 * 2; // 0utputs: 14
echo 7 / 2; // 0utputs: 3.5
echo 7 % 2; // 0utputs: 1
echo 5 + 4 * 10;         // 0utputs: 45
echo (5 + 4) * 10;       // 0utputs: 90
echo 5 + 4 * 10 / 2;     // 0utputs: 25
echo 8 * 10 / 4 - 2;     // 0utputs: 18
echo 8 * 10 / (4 - 2);   // 0utputs: 40
echo 8 + 10 / 4 - 2;     // 0utputs: 8.5
echo (8 + 10) / (4 - 2); // 0utputs: 9
echo (abs(-7)."<br/>"); // 7 (integer)
echo (abs(7)."<br/>"); //7 (integer)
echo (abs(-7.2)."<br/>"); //7.2 (float/double)
echo (ceil(3.3)."<br/>");// 4
echo (ceil(7.333)."<br/>");// 8
echo (ceil(-4.8)."<br/>");// -4
echo (floor(3.3)."<br/>");// 3
echo (floor(7.333)."<br/>");// 7
echo (floor(-4.8)."<br/>");// -5
echo (sqrt(16)."<br/>");// 4
echo (sqrt(25)."<br/>");// 5
echo (sqrt(7)."<br/>");// 2.6457513110646
echo (decbin(2)."<br/>");// 10
echo (decbin(10)."<br/>");// 1010
echo (decbin(22)."<br/>");// 10110
// Convert decimal to hexadecimal
echo dechex(255);  // 0utputs: ff
echo dechex(196);  // 0utputs: c4
echo dechex(0);    // 0utputs: 0

// Convert hexadecimal to decimal
echo hexdec('ff');  // 0utputs: 255
echo hexdec('c4');  // 0utputs: 196
echo hexdec(0);     // 0utputs: 0
// Convert decimal to octal
echo decoct(12);   // 0utputs: 14
echo decoct(256);  // 0utputs: 400
echo decoct(77);   // 0utputs: 115

// Convert octal to decimal
echo octdec('14');   // 0utputs: 12
echo octdec('400');  // 0utputs: 256
echo octdec('115');  // 0utputs: 77
$n1=10;
echo (base_convert($n1,10,2)."<br/>");// 1010
echo (bindec(10)."<br/>");// 2
echo (bindec(1010)."<br/>");// 10
echo (bindec(1011)."<br/>");// 11
// Generate some random numbers
echo rand() . "<br>";
echo rand() . "<br>";

// Generate some random numbers between 1 and 10 (inclusive)
echo rand(1, 10) . "<br>";
echo rand(1, 10) . "<br>";
// Convert decimal to binary
echo base_convert('12', 10, 2);  // 0utputs: 1100
// Convert binary to decimal
echo base_convert('1100', 2, 10);  // 0utputs: 12

// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16);  // 0utputs: a62978
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10);  // 0utputs: 10889592

// Convert decimal to octal
echo base_convert('82', 10, 8);  // 0utputs: 122
// Convert octal to decimal
echo base_convert('122', 8, 10);  // 0utputs: 82

// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8);  // 0utputs: 60543250
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16);  // 0utputs: c2c6a8

// Convert octal to binary
echo base_convert('42', 8, 2);  // 0utputs: 100010
// Convert binary to octal
echo base_convert('100010', 2, 8);  // 0utputs: 42

// Convert hexadecimal to binary
echo base_convert('abc', 16, 2);  // 0utputs: 101010111100
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);  // 0utputs: abc
//trignometric functions


echo acos(0); // Output is 1.5707963267949
echo "<br>";
echo acos(1); // Output  0
echo "<br>";
echo acos(-1); // Output is 3.1415926535898
echo "<br>";
echo acos(-5); // Output is NAN
echo acos(deg2rad(0)); // 1.5707963267949
echo "<br>";
echo acos(deg2rad(90)); // NAN
echo "<br>";
echo acos(deg2rad(180)); // NAN
//acosh():inverse hyperbolic cosine
echo acosh(6); // Output 2.4778887302885
echo "<br>";
echo acosh(2.5); // Output 1.5667992369724
echo "<br>";
echo acosh(0); // Output NAN
echo "<br>";
echo acosh(2); // Output 1.3169578969248
echo "<br>";
echo acosh(-2.5); // Output NAN
echo "<br>";
echo acosh(-4); // Output NAN

//asin():
//asin(X);
//X is the angular value in radian. We get output as ARC SIN of the input angle. It is X==sin(asin(X))
//
//It takes input range from +1 to -1 , for any other input it returns NAN ( not a number )
echo asin(0); // Output is 0
echo "<br>";
echo asin(1); // Output  1.5707963267949
echo "<br>";
echo asin(-1); // Output is -1.5707963267949
echo "<br>";
echo asin(4); // Output is NAN
//deg2rad() with asin()
//We can use deg2rad() to convert Degree value to radian and then use asin().
echo asin(deg2rad(0)); // 0
echo "<br>";
echo asin(deg2rad(1)); // 0.017454178737585
echo "<br>";
echo asin(deg2rad(-1)); // -0.017454178737585
//asinh():inverse hyperbolic sine
//asinh(float X);
//X is the input value
echo asinh(5); // Output 2.3124383412728
echo "<br>";
echo asinh(1.5); // Output 1.1947632172871
echo "<br>";
echo asinh(0); // Output 0
echo "<br>";
echo asinh(2); // Output 1.4436354751788
echo "<br>";
echo asinh(-2); // Output -1.4436354751788
echo "<br>";
echo asinh(-3); // Output -1.8184464592321
echo "<br>";
echo asinh(-10); // Output -2.998222950298
echo "<br>";
echo asinh(-20.4); // Output -3.7092822713042
//atan(X);
//X is the angular value in radian. We get output as ARC tangent of the input angle
echo atan(0); // Output is 0
echo "<br>";
echo atan(1); // Output  0.78539816339745
echo "<br>";
echo atan(-1); // -0.78539816339745
echo "<br>";
echo atan(4); // Output is 1.325817663668
echo "<br>";
echo atan(2); // Output is 1.1071487177941
echo "<br>";
echo atan(90); // Output is 1.5596856728973
//deg2rad() with atan()
//We can use deg2rad() to convert Degree value to radian and then use atan().
echo atan(deg2rad(45)); // Output 0.66577375002835
echo "<br>";
echo atan(deg2rad(90)); // Output 1.0038848218539
echo "<br>";
echo atan(deg2rad(180)); // Output 1.2626272556789
echo "<br>";
echo atan(deg2rad(1)); // Output 0.017451520651466
echo "<br>";
echo atan(deg2rad(-1)); // Output -0.017451520651466
echo "<br>";
echo atan(deg2rad(-4)); // Output -0.069700080299613
echo "<br>";
echo atan(deg2rad(-90)); // Output -1.0038848218539
echo "<br>";
echo atan(deg2rad(-180)); // Output -1.2626272556789
//atan2():
//atan2(float $y,float $x);
//X & Y are the input values
echo atan2(0,2); // Output is 0
echo "<br>";
echo atan2(1,3); // Output  0.32175055439664
echo "<br>";
echo atan2(-1,-3); // -2.8198420991932
echo "<br>";
echo atan2(4,2); // Output is 1.1071487177941
echo "<br>";
echo atan2(2,1); // Output is 1.1071487177941
echo "<br>";
echo atan2(90,180); // Output is 0.46364760900081
//atanh():inverse hyperbolic tangent
//atanh(float X);
//X is the input value
//atanh returns an EDOM error if input absolute value exceeds 1.0
echo atanh(5); // Output NAN
echo "<br>";
echo atanh(1.5); // Output NAN
echo "<br>";
echo atanh(1); // Output INF
echo "<br>";
echo atanh(0.9); // Output 1.4722194895832
echo "<br>";
echo atanh(0); // Output 0
echo "<br>";
echo atanh(-0.5); // Output -0.54930614433405
echo "<br>";
echo atanh(-1); // Output -INF
echo "<br>";
echo atanh(-1.5); // Output NAN
echo "<br>";
echo atanh(-2.4); // Output NAN
//COS():
//COS(X);
//X is the angular value in radian. We get output as cosine of the input angle.
echo COS(PI()); // Output is -1
echo "<br>";
echo COS(PI()/2); // Output  6.1232339957368E-17 // Same as 0
echo "<br>";
echo COS(PI()/3); // Output is 0.5
echo "<br>";
echo COS(PI()/4); // Output is 0.70710678118655
//deg2rad() with COS()
//We can use deg2rad() to convert Degree value to radian and then use COS().
echo cos(deg2rad(0)); // Output  is 1
echo "<br>";
echo cos(deg2rad(180)); // Output  is -1
//cosh(): Hyperbolic cosine
//float cosh(float X);
//X is the input value
echo cosh(0); // Output is 1
echo "<br>";
echo cosh(1); // Output  1.5430806348152
echo "<br>";
echo cosh(-1); // Output 1.5430806348152
echo "<br>";
echo cosh(4.2); // Output is 33.350663308873
echo "<br>";
echo cosh(2); // Output is 3.7621956910836
echo "<br>";
echo cosh(90); // Output is 6.1020164715892E+38
//SIN(X);
//X is the angular value in radian. We get output as Sin of the input angle.
echo SIN(PI()); // Output is 1.2246467991474E-16  // same as 0
echo "<br>";
echo SIN(PI()/2); // Output  1
echo "<br>";
echo SIN(PI()/3); // Output is 0.86602540378444
echo "<br>";
echo SIN(PI()/4); // Output is 0.70710678118655
//deg2rad() with SIN()
//We can use deg2rad() to convert Degree value to radian and then use SIN().
echo SIN(deg2rad(0)); // Output  is 0
echo "<br>";
echo SIN(deg2rad(90)); // Output is 1
echo "<br>";
echo SIN(deg2rad(180)); // Output  is 1.2246467991474E-16 // same as 0
//sinh(): Hyperbolic sine
//float sinh(float $x);
//$x is the input value.
echo sinh(0); // Output is 0
echo "<br>";
echo sinh(1); // Output  1.1752011936438
echo "<br>";
echo sinh(-1); // Output -1.1752011936438
echo "<br>";
echo sinh(4.2); // Output is 33.335667732052
echo "<br>";
echo sinh(2); // Output is 3.626860407847
echo "<br>";
echo sinh(90); // Output is 6.1020164715892E+38
//TAN():
//TAN(X);
//X is the angular value in radian. We get output as TANGENT of the input value.
echo TAN(PI()); // Output is  0
echo "<br>";
echo TAN(PI()/2); // Output  is infinity
echo "<br>";
echo ROUND(TAN(PI()/3),2); // Output is 1.73
echo "<br>";
echo TAN(PI()/4); // Output is 1
//deg2rad() with TAN()
//We can use deg2rad() to convert Degree value to radian and then use TAN().
echo TAN(deg2rad(0)); // Output  is 0
echo "<br>";
echo TAN(deg2rad(90)); // Output is 1.6331239353195E+16  // same as infinity
echo "<br>";
echo TAN(deg2rad(180)); // Output  is -1.2246467991474E-16//  same as 0
//tanh(): Hyperbolic tangent
//float tanh(float $x);
//$x is the input value.
echo tanh(0); // Output is 0
echo "<br>";
echo tanh(1); // Output  0.76159415595576
echo "<br>";
echo tanh(-1); // Output -0.76159415595576
echo "<br>";
echo tanh(4.2); // Output is 0.99955036645953
echo "<br>";
echo tanh(2); // Output is 0.96402758007582
echo "<br>";
echo tanh(90); // Output is 1
//rad2deg(): Convert Radian to Degree
//rad2deg(X);
//X is the number representing angular value in radian. Output is in degree.
echo rad2deg(0); // Output is 0
echo "<br>";
echo rad2deg(PI()); // Output  180
echo "<br>";
echo rad2deg(PI()/2); // Output is 90
echo "<br>";
echo rad2deg(PI()/3); // Output is 60
//random_int() Random integer generator
//random_int ( min,max);
echo random_int(8,10); // Random Output starting from 8 to 10 introduced in php 7
//Random number of different length
//We can create a script to generate random number of different length. Let us try to develop a script to print random number of 5 character length.
$no_of_digits=5;
$var='';
for($i=1; $i<=$no_of_digits; $i++){
    $var .=rand(0,9);
}
echo "<br>Random Value = $var";
//Rounding off variable values in PHP
$number=25.66745;
echo "The number = ". $number; // will display 25.66745
echo "<br>Rounded value of the number = ".round($number,2); // will display25.67
echo "<br>Rounded value of the number = ".round($number); // will display 26
//PHP exponential function returns number by finding out the exponential value.
//pow(base, exponent)
echo pow(2,3); // ouptut 8
//We can create a square table by using for loop
for($i=1;$i<=10;$i++){
    echo $i. "=".pow($i,2)."<br>";
}
//PI() : Constant Value
//PI();
echo PI(); // Output is 3.14159265358983
echo M_PI; // Output is 3.1415926535898
echo round(PI(),2); // Output is 3.14
echo "<br>";
echo round(PI()/2,2); // Output is 1.57
echo "<br>";
echo round(M_PI_4,2); // Output is 0.79
//mt_rand()  This function uses Mersenne Twister Random Number Generator.
echo mt_rand();//1116593529 output will vary on different os alogithmic structure
//mt_getrandmax(): largest possible random value
echo mt_getrandmax(); // Output 32767
//Minimum number using min() function
echo min(-5.8,5,44,-56); //Output is -56
//Maximum number using max() function
echo max(5,25,6,-22,-66); // Output is 25
//LOG1P():
//LOG1P(X);
//X is the input number . We get output as LOG of 1+X
echo LOG1P(6);// Output is 1.9459101490553
echo "<br>";
echo LOG1P(-0.3);// Output is -0.35667494393873
echo "<br>";
echo LOG1P(0.4);// Output is 0.33647223662121
echo "<br>";
echo LOG1P(1.2);// Output is 0.78845736036427
//LOG10():
//LOG10(X);
//X is the input number with Base fixed base 10. We get output as LOG of X
echo LOG10(5);// Output is 0.69897000433602
echo "<br>";
echo LOG10(-6);// Output is NAN
echo "<br>";
echo LOG10(0);// Output is -INF
echo "<br>";
echo LOG10(8.6);// Output is 0.93449845124357
//LOG():
//LOG(X,Y);
//X is the input number with Base Y (optional) . We get output as LOG of X
echo LOG(2);// Output is 0.69314718055995
echo "<br>";
echo LOG(-1);// Output is NAN
echo "<br>";
echo LOG(0);// Output is -INF
echo "<br>";
echo LOG(5.7);// Output is 1.7404661748405
//LOG with base
echo LOG(5,2);// Output is 2.3219280948874
echo "<br>";
echo LOG(5,10);// Output is 0.69897000433602
echo "<br>";
echo LOG(5,2.7183);// Output is 1.609427153552
//lcg_value()
//flot lcg_value ( void)
//The output is pseudo random number in the range of (0, 1).
echo lcg_value();//0.25998886451957 output may vary
//is_infinite(): Finds whether a value is infinite
echo is_infinite(2);
echo "<br>";
echo is_infinite(5/10);
echo "<br>";
echo is_infinite(log(0)); //Output 1
//exp():
//exp(X);
//X is the input float . We get output as e raised to the power of X
//'e' is the base of the natural system of logarithms, its value is approximately 2.718282.
echo exp(3);// Output is 20.085536923188
echo "<br>";
echo exp(-1);// Output is 0.36787944117144
echo "<br>";
echo exp(0);// Output is 1
echo "<br>";
//expm1():
//float expm1(float X);
//X is the input float number . We get output as exp(X) - 1
echo expm1(5); // Output 147.41315910258
echo "<br>";
echo expm1(1); // Output 1.718281828459
echo "<br>";
echo expm1(0); // Output is 0
echo "<br>";
echo expm1(-1); // Output is -0.63212055882856
echo "<br>";
//fmod(): reminder (modulo) of division
echo fmod(5,2); // Output 1
echo "<br>";
echo fmod(10,2); // Output 0
echo "<br>";
echo fmod(13,2); // Output is 1
echo "<br>";
echo fmod(6,3); // Output is 0
//getrandmax(): largest possible random value
echo getrandmax(); // Output 32767
//hypot():hypotenuse of a right-angle triangle
echo hypot(2,3); // Output 3.605551275464
echo "<br>";
echo hypot(4,5); // Output 6.4031242374328
echo "<br>";
echo hypot(8,10); // Output is 12.806248474866
echo "<br>";
echo hypot(12,13); // Output is 17.691806012954
//intdiv():Integer division quotient of a number
echo intdiv(4,9); // Output 0
echo "<br>";
echo intdiv(3,5); // Output 0
echo "<br>";
echo intdiv(20,10); // Output is 2
echo "<br>";
echo intdiv(2,13); // Output is 0
echo "<br>";
echo intdiv(4,100); // Output is 0
echo "<br>";
echo intdiv(100,4); // Output is 25