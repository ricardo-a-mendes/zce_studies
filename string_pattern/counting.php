<?php

include '../oop/dump.php';

dump::d(strlen("abc"));   //int 3
dump::d(strlen("abc\n")); //int 4
dump::d(strlen('abc\n'),1); //int 5

dump::d(str_word_count("Ola ricardo"));
dump::d(str_word_count("Ola ricardo", true));
dump::d(str_word_count("Ola ricardo ricardo", true));