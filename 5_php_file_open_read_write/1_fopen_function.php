<?php
/*
The fopen() function has following modes :

w = write only. if file exist open it, if not then create a new file.
w+ = read/write
r = read only
r += read / write
a = append file
a+ = read / append
x = write only. create new file, returns error if file already exists.
x+ = read/write.
*/

//open text file
fopen("data.txt", "w");

//open ms word .doc file
fopen("data.doc", "w");

//open pdf file
fopen('data.pdf', "w");
