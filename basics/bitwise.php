<?php

//Comparacao em binario
//(& = AND)
echo 10 & 5;
/*
10 = 1010
 5 = 0101
 & = 0000 //Output 0
*/
echo '<br>';
echo 5 & 6;
/*
 6 = 0110
 5 = 0101
 & = 0100 //Output 4
*/
echo '<br>';
echo 5 & 9;
/*
 9 = 1001
 5 = 0101
 & = 0001 //Output 1
*/
echo '<br>';
//----------------------------
//(| = OR)
echo 10 | 5;
/*
10 = 1010
 5 = 0101
 & = 1111 //Output 15
*/
echo '<br>';
echo 5 | 6;
/*
 6 = 0110
 5 = 0101
 & = 0111 //Output 7
*/
echo '<br>';
echo 5 | 9;
/*
 9 = 1001
 5 = 0101
 & = 1101 //Output 13
*/
echo '<br>';
//----------------------------
//(^ = OR EXCLUSIVO)
echo 10 ^ 5;
/*
10 = 1010
 5 = 0101
 & = 1111 //Output 15
*/
echo '<br>';
echo 5 ^ 6;
/*
 6 = 0110
 5 = 0101
 & = 0011 //Output 3
*/
echo '<br>';
echo 5 ^ 9;
/*
 9 = 1001
 5 = 0101
 & = 1100 //Output 12
*/
echo '<br>';
//----------------------------
//(Left Shift <<) - Multiplica
echo 3 << 4; // 3*2^4 = 3*16 = 48
echo '<br>';
//----------------------------
//(Right Shift >>) - Divide
echo 4 >> 2; // 4/2^2 = 4/4 = 1
echo '<br>';