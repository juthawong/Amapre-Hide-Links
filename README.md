For All CMS Version :

It require you a little bit of programming skilled but it already made to be ready used.

1. You put all the files include defahide.php and enable.php but not includetop.php and includebottom.php on the top level of domain can be accessible with : http://www.example.com/defahide.php or http://defa.example.com/defahide.php

2. You put includetop.php and includebottom.php on the cms level of domain can be anywhere such as top level of domain , sub level of domain.

3.Add include('includetop.php'); at the most top of the php files that display content for cms usually it is index.php and put include('includebottom.php'); at the most bottom of the same php files.

That should do the trick. ;)

P.s. Might conflict with Ampare Protector and Defa Protector on some website

If you like our project .Please Donate us 

http://www.juthawong.com/donate
