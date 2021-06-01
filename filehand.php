<?php
/*
$file_handler=fopen("ak.txt","r+") or die("file not open");
if($file_handler)
{
    echo "file opened succesfully";
}
else{
    echo "file not opened";
}
echo "<br> welcome you are in your file";
file_get_contents(): this function is used to read the entire data of the file as a string
if successfully reads the data so it will returns a string otherwise return FALSE. Binary safe
(character or binary data). This function will used the memory mapping techniqe of server which will
enhance the performance.
syntax:file_get_contents(filename,include_Path,context,offset,maxlength)
file(): this function is used to read the entire file data as an array. this function generaly works with
three parameter filename, include_path, context. It is also binary safe. it will store
individual line of file as an index.
file_exists(): this function is used to check wehter a file is exists or not if yes than
it will return true and display 1 on the screen otherwise returns FAlSE and display nothing
filesize():this function will return the size of the file in bytes if exists otherwise FALSE.

every file has 13 types of information
0 device name
1 node number
2 node protection mode
7 filesize
stat() is used to get all the information about a file related withe the system
The stat() function in PHP is an inbuilt function which is used to return information of a file. The stat(0) function returns statistics of a file which is an array with the following elements :
syntax: stat(filename);
[0] or [dev] – Device number
[1] or [ino] – Inode number
[2] or [mode] – Inode protection mode
[3] or [nlink] – Number of links
[4] or [uid] – User ID of owner
[5] or [gid] – Group ID of owner
[6] or [rdev] – Inode device type
[7] or [size] – Size in bytes
[8] or [atime] – Last access (as Unix timestamp)
[9] or [mtime] – Last modified (as Unix timestamp)
[10] or [ctime] – Last inode change (as Unix timestamp)
[11] or [blksize] – Blocksize of filesystem IO
[12] or [blocks] – Number of blocks allocated

copy(): this function is used to copy the entire data of source file to a destination
 file with different name
synatx:
copy(sourcefile, destination );
unlink(): this function is used to delete a file from directory.
fwrite() this function is used to write the data in an opened file. this function returns the number of bytes written
or FALSE. this function will stop at the end of the file or when it reaches the specified length
this function is binary safe.
syntax:
fwrite(filehandler,string,length);
file_put_contents() this function is used to write string to a file.
syntax:
file_put_contents(filename,data, flag,context)
it is the name of the file in which you want to write the data
set of character as string you want to write in the file
flag can be either INCLUDE_PATH and/or append
*/

if(file_put_content("se.txt","\nHello class, Welcome to learn PHP",FILE_APPEND) or die("function name error"))
{
    echo "data write succesfully";
}
else{
    echo " unable to write data into the file";
}





















