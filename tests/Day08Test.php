<?php
declare(strict_types=1);

namespace AdventOfCode\Year2017\Tests;

use AdventOfCode\Bootstrap\Day;
use AdventOfCode\Year2017\Day08;
use PHPUnit\Framework\TestCase;

class Day08Test extends TestCase
{
    private const INPUT = <<<INPUT
oui inc 550 if p <= 3
abh inc -189 if g == 0
kq inc 164 if znl != 7
kq dec 827 if oui == 550
z inc 469 if znl != -9
ey inc 685 if tk == 0
kq dec 388 if y > -7
kq inc 468 if tk < 4
oui inc 831 if un <= -5
tk inc -676 if tx >= -8
z inc 418 if kq <= -576
id inc -316 if p >= -2
y inc 943 if g <= -2
g inc -646 if h <= 4
tx inc 47 if tx <= -10
un inc 486 if l < 9
id inc -796 if l < 3
ekl dec 269 if id < -1109
ekl dec -503 if tk > -685
oqg inc -704 if lb < 1
hpz dec -256 if c >= -1
y dec 320 if kq <= -577
znl dec -741 if g != -644
lb inc 584 if id > -1103
p dec -280 if p >= 7
z dec -389 if oqg < -698
a inc 61 if p == 0
hpz dec -184 if id > -1118
id dec -33 if ehe <= 6
oui inc 994 if l <= 9
a dec -548 if ey >= 676
p inc -434 if h != -8
un dec 464 if lb != 0
xj inc 285 if oqg <= -702
h inc -758 if a < 601
tx inc 465 if tk < -674
hpz dec 393 if ekl == 236
id dec 0 if tk < -667
znl dec 802 if ey == 685
l inc 617 if ehe <= 7
c inc 699 if g <= -642
tk inc 27 if c != 691
ehe inc 213 if kq <= -581
x dec 550 if l > 608
c dec -503 if znl >= -61
oqg inc 304 if lb > -7
a inc 262 if un == 486
tx inc 475 if znl != -65
z inc -802 if g != -645
oui inc 301 if lb >= -4
id inc -642 if a != 881
xj dec 394 if kq > -587
y dec -685 if l == 617
id dec -55 if kq != -583
id dec 402 if ehe > 215
h inc 120 if lb >= -3
id dec 492 if ehe <= 216
tk inc 591 if hpz != 441
c inc -790 if h < 128
kq dec 281 if ekl >= 225
p inc 300 if ey > 675
h inc -822 if z > 478
oqg inc -187 if l == 617
kq inc -625 if l == 617
ehe inc 706 if g != -655
oqg inc -489 if c < 409
g dec 603 if kq <= -1486
h dec -903 if ekl < 236
a inc 447 if a >= 868
a inc 448 if l >= 609
oui dec 542 if h == 1023
a inc -377 if lb < 8
oqg dec 417 if oqg == -587
oui dec -348 if y <= 370
x dec 21 if id < -2205
znl inc 206 if znl >= -67
znl dec -230 if xj <= -106
znl inc 913 if c != 412
znl dec 544 if c <= 405
a dec -72 if p < -127
kq dec 495 if tx != 936
h dec -203 if l != 608
hpz dec -764 if a >= 1459
xj dec 57 if lb > -3
znl dec 437 if x > -579
lb inc -473 if ehe >= 916
c dec 354 if y <= 365
h dec -764 if z != 474
lb inc -77 if tk == -58
ey inc 942 if abh != -182
id dec 21 if y > 369
y dec 589 if lb <= -549
hpz inc 792 if lb < -541
c dec 630 if tk >= -60
oqg inc -491 if ehe != 919
x dec -153 if z == 474
lb inc -240 if a == 1461
lb inc -620 if ehe > 917
ey inc 751 if id > -2221
oui inc 896 if h >= 1226
kq inc 531 if ekl >= 231
a dec -381 if znl >= -69
znl dec 659 if tk < -49
xj dec 26 if p == -134
kq dec 929 if oui < 2539
y dec 880 if c < -573
un inc 737 if tk <= -68
ehe dec 497 if l < 622
g inc -193 if kq <= -1453
a dec 695 if l < 618
h inc 526 if ey >= 2388
y dec 769 if g == -1442
znl dec 923 if ey < 2379
x dec -167 if ekl < 235
ekl dec 652 if xj < -192
c dec -352 if z >= 467
abh dec -251 if xj > -202
tk inc -214 if z < 475
x dec 393 if hpz < 2006
hpz dec -941 if xj >= -182
x dec 980 if ekl <= 243
hpz dec 886 if g >= -1447
a inc 157 if oui >= 2540
id dec -694 if ehe >= 413
id dec 137 if y > -999
h dec -24 if a == 1304
id inc 68 if oui <= 2552
p inc -863 if tx <= 944
x inc 221 if h == 1250
l dec 700 if l >= 616
a inc -360 if tx != 939
y dec 797 if x != -1401
c dec -25 if y >= -1798
c dec 401 if lb >= -1409
c dec -164 if znl <= -1647
ekl inc 494 if y == -1787
un dec -432 if oqg >= -1010
c inc 399 if a <= 947
un dec -738 if c <= 204
l inc -863 if y >= -1797
abh inc -125 if znl < -1636
a dec -376 if id > -1592
a inc 392 if z > 470
x inc 281 if h >= 1241
lb inc -264 if kq >= -1458
ekl dec 310 if a >= 1704
hpz inc 132 if lb > -1670
znl inc -870 if xj <= -198
x dec -276 if g >= -1439
abh inc 684 if hpz != 1110
lb inc -214 if l < -945
oui dec -135 if ekl != -76
un dec 188 if ey > 2375
hpz dec -72 if tk != -278
y inc -141 if kq >= -1443
x inc 174 if kq != -1462
ekl inc 325 if h == 1256
c inc 534 if oui == 2547
oui inc 781 if z == 474
lb dec -733 if h == 1250
h inc -441 if un != 1467
id dec -16 if oqg < -1005
ekl dec 842 if ey >= 2369
g inc -995 if a < 1718
oqg inc 313 if tk == -272
a dec -707 if oui >= 3319
hpz inc 957 if y <= -1797
h dec 270 if hpz < 1183
lb inc -632 if g > -2432
c inc -96 if abh < -62
a dec -305 if z != 474
y dec 679 if oui == 3328
tk inc 949 if oui < 3332
x dec 53 if abh < -54
g dec 55 if l > -953
xj inc -327 if abh > -64
abh inc 643 if abh < -55
lb inc -146 if y <= -2461
l dec 763 if y >= -2473
oui dec -787 if a < 2422
p inc 419 if l == -1709
l dec -307 if x >= -1009
c dec 731 if x != -996
y inc 150 if oqg != -682
tx dec -673 if g > -2498
kq inc -895 if l == -1402
xj dec -817 if un == 1468
ey inc 482 if z == 474
h inc -475 if ekl <= -921
hpz inc 526 if l > -1407
znl inc 956 if tk < 680
lb dec -922 if lb > -1304
ekl dec 533 if y >= -2314
g dec -727 if xj >= 291
un dec -7 if ehe == 422
x inc -587 if g == -1765
un inc -786 if c != -83
l inc -238 if h != 542
un inc 267 if znl == -688
z inc -500 if ey <= 2850
l dec 673 if ekl > -921
ey dec 562 if z < 477
hpz dec -179 if oui != 4119
un dec 486 if hpz == 1887
oui inc 649 if tx != 1613
x dec -124 if z >= 472
y inc 807 if z <= 482
y inc 145 if ekl <= -910
xj inc 477 if p > -579
znl inc -472 if tk < 678
y inc 955 if z > 480
znl dec 399 if abh > 576
znl inc -452 if znl <= -1557
z dec 204 if id > -1580
hpz dec -475 if z < 478
id dec -449 if abh <= 576
lb dec 59 if ey <= 2288
lb inc 304 if id != -1587
kq dec 192 if l <= -2309
abh inc 861 if id > -1598
kq inc -240 if p == -578
l dec 246 if a <= 2422
g dec 356 if c > -82
tx dec -341 if tk == 677
hpz dec -325 if h != 535
c dec 377 if l >= -2559
ehe inc 826 if znl == -2011
c dec 989 if xj <= 777
h dec 376 if ehe != 1254
oqg inc -268 if id != -1578
lb inc 816 if ekl >= -921
znl dec 131 if hpz >= 2692
un inc 859 if tk >= 674
p inc 972 if h != 167
tk inc -69 if g == -1765
l inc -787 if oqg == -954
oqg inc -649 if x != -1460
p dec 188 if c > -1459
un dec 411 if xj != 770
kq inc -658 if a > 2415
g dec 396 if y != -1362
ekl inc -220 if znl != -2004
lb inc 711 if lb <= 736
id dec 80 if a <= 2424
z dec -808 if g <= -2152
z dec -201 if p <= 209
a inc -309 if g <= -2161
oui dec -254 if hpz >= 2687
h inc 504 if un < 924
lb inc -231 if y < -1361
id inc 482 if ehe <= 1248
x inc -651 if oqg != -1612
abh inc 516 if tk <= 608
xj inc 30 if ekl > -1140
znl dec -912 if id < -1178
abh dec 419 if z > 1473
kq dec -944 if h <= 672
tk dec 685 if ekl <= -1135
c inc -272 if ehe < 1258
ekl inc 287 if h > 666
oqg inc -993 if ekl > -853
p inc 726 if h >= 674
oui dec -557 if kq >= -2502
tk inc -742 if tk != -81
oqg inc -797 if h == 667
oqg dec -107 if znl < -1093
tk inc 497 if g == -2161
c dec -226 if c == -1727
tx dec 817 if oqg <= -3283
y dec 719 if ey >= 2296
oui dec 42 if y == -2086
y dec -231 if y <= -2078
p inc -190 if ekl <= -842
c dec -533 if znl == -1099
y dec -678 if z >= 1474
hpz inc 591 if ekl != -848
p dec 47 if h <= 676
p inc 729 if tx >= 1136
ey dec -36 if c <= -962
oqg inc -554 if ey <= 2338
tx dec 648 if hpz <= 3281
ey dec -746 if xj <= 805
kq inc -14 if x <= -2106
abh dec 931 if lb != 509
xj inc -230 if p != 697
id inc 458 if l == -2559
l dec -143 if ehe <= 1250
oui inc 411 if y <= -1172
c dec 292 if id < -723
z inc 649 if tk > -326
g inc 161 if abh <= 610
oui inc 23 if c == -1260
xj dec -478 if ehe == 1248
id dec -153 if a < 2112
x dec -616 if tk == -322
xj dec -194 if znl >= -1106
tx dec 220 if ekl < -855
x inc 139 if z != 2141
a inc 777 if abh <= 609
oui inc 151 if x == -1360
g inc 69 if id <= -575
ekl inc 860 if xj <= 1256
x dec 309 if x != -1367
znl inc -405 if y >= -1184
lb inc 428 if tx == 489
znl inc -676 if tx != 497
oqg dec 780 if ey != 3080
un inc 476 if xj > 1240
c dec -982 if l != -2422
x inc 667 if y > -1186
kq dec 277 if tk > -324
oqg dec -271 if kq >= -2792
lb dec 960 if a > 2877
ehe dec 532 if x < -1011
lb inc 619 if x == -1002
hpz inc -585 if tk == -322
p dec 553 if id != -569
h dec 279 if c > -287
oui inc 832 if oui > 5471
kq dec -828 if ey != 3082
xj inc -229 if ehe == 1257
p inc -505 if id != -575
y dec -94 if xj <= 1252
h dec 885 if g > -1923
c dec -38 if kq != -1964
oui inc 19 if l <= -2415
ehe dec 543 if oqg > -3580
lb inc -394 if l >= -2420
tx dec -673 if hpz != 2695
h dec -436 if oui > 5495
znl inc 826 if oui < 5480
znl inc -134 if ey <= 3082
c dec 808 if kq >= -1957
tx inc -45 if abh <= 613
x dec 30 if hpz != 2686
a dec 440 if znl == -2314
c inc -504 if z <= 2140
tx inc 435 if y <= -1075
x dec 256 if ehe < 706
c inc 187 if p != 145
ey dec -323 if id > -576
hpz dec 174 if y >= -1080
oui dec 455 if un == 1394
oqg inc -804 if a <= 2447
abh dec 741 if l == -2416
y dec -566 if z != 2127
kq inc 919 if id >= -575
id dec 220 if znl < -2319
g inc -15 if lb >= 197
abh inc -968 if ey != 3395
xj inc 873 if l != -2415
x dec -367 if x == -1288
un inc -62 if g == -1946
h inc -400 if tk < -325
xj inc -623 if h > 397
a dec 49 if un < 1341
ekl inc 491 if id >= -582
tk inc 171 if ey >= 3405
hpz inc -265 if ekl != 500
ehe dec -811 if lb <= 212
ehe inc 477 if hpz != 2702
oqg dec 137 if ekl <= 500
z dec -601 if ekl == 500
ehe dec -696 if y >= -510
ehe dec -616 if oui > 5038
p inc 584 if xj == 2120
abh inc -131 if z < 2734
a inc 62 if kq >= -1046
ekl dec -26 if oui >= 5030
abh dec -64 if lb == 203
xj dec 356 if tk < -320
un inc 270 if hpz <= 2702
l dec -632 if oqg != -4521
x dec 69 if tx != 1555
kq inc -685 if hpz == 2693
id inc -655 if p > 729
tx inc -763 if znl >= -2310
c inc 250 if y <= -508
kq inc 738 if l == -1784
tk dec -548 if znl < -2310
z dec -757 if ey >= 3403
ehe dec -969 if tk == 226
g inc 312 if lb <= 206
l inc 218 if hpz > 2685
h dec -500 if ey > 3400
a inc 612 if ekl > 522
oqg dec 134 if c == -1302
tk dec -622 if oqg < -4641
p inc -715 if ekl < 522
hpz dec -862 if abh <= -1166
kq dec 183 if a == 3069
a dec -934 if p >= 722
oui inc -474 if ey <= 3403
id dec 36 if ey != 3403
z dec 285 if x == -990
z dec 924 if g <= -1626
oqg inc -564 if xj <= 1755
kq dec -597 if ehe <= 2952
h inc 312 if y != -517
kq inc -911 if ekl <= 528
ehe dec 871 if l == -1566
a dec 35 if c == -1302
hpz dec 812 if g >= -1632
lb inc 674 if ey <= 3406
oui dec -729 if tk == 848
z inc 11 if xj != 1766
abh dec 35 if znl == -2314
y inc -62 if abh != -1211
g inc -480 if oqg == -4649
tx dec 224 if l <= -1563
tk dec -639 if un == 1602
ehe dec 825 if kq != -1904
tk dec -520 if c == -1302
un inc 560 if id >= -581
id dec -68 if c != -1296
kq dec -722 if ehe <= 1271
h inc 629 if l == -1558
znl inc 447 if ehe >= 1264
ehe inc -375 if x > -999
abh inc 135 if ekl <= 528
abh inc -532 if c != -1303
ey dec -898 if oqg != -4659
tx inc 149 if ekl > 523
z inc 140 if un != 2166
y inc -737 if znl != -1874
id inc -858 if lb >= 874
l inc -444 if oui != 5296
x inc -401 if xj <= 1772
un dec 422 if y != -1325
x inc -459 if hpz > 3545
x inc 671 if l == -2010
oui dec -26 if ekl > 534
z dec 813 if ekl <= 534
tx dec -172 if c == -1298
ey dec 544 if g == -2114
c inc -700 if c == -1302
l inc -951 if un != 1740
id dec 446 if ehe <= 881
tk dec -758 if z > 1615
x inc -854 if xj < 1770
a dec -739 if y != -1322
lb dec 564 if tx >= 1468
hpz inc 526 if id == -1359
ey dec -759 if kq > -1178
ey inc -765 if ey > 4513
ekl inc 354 if oui <= 5289
c inc -66 if tx >= 1472
h inc 9 if ekl != 888
ekl inc -247 if x > -2036
x inc 832 if xj != 1770
abh inc -867 if znl <= -1858
c inc 564 if l < -2005
xj dec 936 if lb <= 309
l inc 762 if x >= -1210
ey dec -862 if oqg == -4650
tx inc -136 if ey != 3760
oui inc -928 if x <= -1193
lb dec 325 if p == 728
a dec -157 if x != -1204
lb dec -832 if lb != 315
a inc -802 if h == 897
x inc -882 if id <= -1358
kq inc -98 if kq == -1174
oqg dec 64 if ey != 3751
hpz inc -582 if z > 1614
h dec 335 if ehe != 888
ey dec -137 if znl <= -1862
id dec 491 if a <= 4067
z inc -747 if z >= 1617
un inc -429 if un > 1735
tx inc 536 if un <= 1312
tk inc 360 if xj != 1764
tx inc 723 if l < -1242
ehe dec -74 if tx <= 2604
c inc 326 if a > 4072
lb dec -178 if z <= 874
a dec -218 if abh >= -2471
p inc 204 if z < 877
id dec 496 if id <= -1855
oqg inc 1 if x == -2083
abh inc 84 if un <= 1314
znl dec 396 if abh < -2380
x dec -94 if ekl >= 629
ekl inc 741 if un <= 1311
l inc -187 if y > -1321
un inc 576 if hpz <= 2976
p dec 334 if ehe > 956
hpz dec 2 if x > -1993
oqg dec -150 if g <= -2106
lb dec -290 if x > -1982
kq dec -16 if oqg >= -4502
ekl inc -135 if un >= 1882
id dec -491 if z <= 879
z dec 311 if h > 556
g inc -942 if tx <= 2606
oui dec 917 if lb != 1329
tk dec 650 if a == 4283
abh dec -623 if y > -1312
x dec 645 if c == -1504
un dec 335 if id <= -1861
ekl dec -160 if z < 570
tk inc 968 if ekl != 1406
g dec -298 if un >= 1545
kq inc -814 if id >= -1852
ehe inc -766 if y < -1314
h dec 540 if z != 555
x dec 683 if xj == 1771
x inc -258 if ehe == 199
l inc 452 if oui != 3451
hpz inc -294 if y != -1310
tk inc -785 if un <= 1552
a dec -752 if c < -1502
un inc 529 if ekl != 1403
xj inc -551 if l == -992
y inc 135 if znl > -2266
tk inc -439 if x == -2892
l dec 195 if x <= -2888
hpz dec 683 if l > -1182
z dec -486 if tk == 1859
a inc 858 if a > 5035
c inc 683 if abh < -2376
h inc -93 if oqg != -4498
id dec -46 if x != -2890
un inc 181 if a > 5037
abh inc -798 if y < -1184
id dec -912 if oui < 3449
a dec 526 if z <= 1037
ey inc 510 if id >= -909
l inc 930 if hpz != 1987
id inc -640 if ehe >= 196
xj inc -318 if lb == 1315
oui dec -797 if x <= -2889
hpz inc -563 if y == -1187
lb inc -77 if tk <= 1858
id dec 692 if un <= 2088
tk inc -45 if znl > -2266
abh inc 802 if hpz < 2002
abh dec 262 if h < 31
id dec 547 if tx != 2600
h inc -48 if p != 599
x dec -424 if ey == 4398
kq dec 584 if oui == 4240
lb dec -899 if kq > -1846
tk dec 417 if a != 5045
x dec 988 if oui != 4250
ehe inc 423 if hpz <= 2000
tk dec 497 if p == 599
a dec 201 if tk != 895
abh dec -140 if abh == -1844
id inc 455 if oqg == -4498
p inc 447 if xj == 1764
l inc -653 if p != 1046
a inc 226 if l != -245
a inc 491 if c < -827
x inc 942 if hpz < 2001
tx dec 52 if h <= 26
a dec 962 if kq < -1836
tk inc 980 if id > -1781
hpz inc 655 if un <= 2088
kq inc -389 if oui >= 4236
znl dec 334 if z >= 1040
c inc -985 if p < 1045
lb dec -597 if g == -2768
tk dec -356 if ekl != 1399
id dec -953 if g < -2755
oqg inc 400 if oui >= 4233
tk dec 14 if p <= 1050
ehe dec -657 if a > 4089
oqg inc -902 if x >= -2520
un inc -276 if tx != 2543
ey inc 734 if tk < 1875
znl inc -685 if ey > 5125
lb inc 959 if oui > 4242
xj inc 84 if ekl > 1393
xj dec 355 if oqg < -4995
a inc -711 if oqg > -5007
c dec 488 if p >= 1043
znl inc 222 if g >= -2752
z dec -169 if un < 1811
tx inc -379 if abh < -1696
znl inc 435 if un > 1803
oqg inc 342 if id >= -834
c inc -760 if ey <= 5127
id dec 750 if z > 1208
xj inc -994 if g != -2755
ehe inc 499 if y > -1188
oqg inc 643 if xj == 499
hpz dec 85 if y > -1186
abh inc -174 if un >= 1802
g dec 898 if ekl >= 1390
g inc -590 if a > 3384
znl inc 486 if id >= -1585
lb dec -650 if y != -1182
ehe dec -634 if id == -1577
tx inc -150 if un != 1805
hpz dec -610 if l > -250
l inc -648 if z <= 1216
y inc 607 if abh != -1881
ey inc 747 if oui > 4230
tk dec 125 if g > -4256
g inc 511 if a >= 3384
tx inc -751 if hpz != 3178
z inc -928 if ehe >= 2409
lb inc -278 if kq >= -2236
un inc -336 if c >= -1304
id dec -908 if znl <= -2354
y dec -183 if tk < 1733
tk dec -92 if h <= 24
kq dec -34 if hpz != 3174
x inc -991 if oui > 4247
l inc -644 if oqg < -4013
hpz dec -690 if y >= -568
ehe inc 171 if ekl <= 1399
a inc -253 if g == -3735
id inc 281 if tx > 1409
z inc 835 if tk <= 1841
znl inc -647 if y != -574
znl dec -991 if ehe == 2583
oqg dec -706 if ekl == 1399
p dec -870 if lb == 2596
un dec 293 if x <= -2513
z inc 418 if z >= 1117
tk dec -61 if tx < 1422
oui dec -569 if ey < 5871
znl inc -335 if g <= -3729
ehe dec 509 if hpz > 3175
oqg dec -24 if tk == 1894
id dec 73 if a != 3138
un dec 220 if y != -574
z inc 707 if ekl < 1405
p inc 238 if tk != 1893
p inc 667 if lb >= 2592
l dec -927 if ey == 5875
ehe inc -787 if z != 2248
znl inc 82 if znl == -1705
abh dec 839 if a <= 3142
ekl dec 22 if ekl > 1396
z dec 402 if y == -574
ey inc -732 if kq != -2229
x dec 869 if ey < 5888
lb dec 137 if y >= -582
a inc 204 if z == 1846
h inc 280 if hpz == 3181
ehe dec 876 if id != -459
l dec -156 if oui == 4248
oui dec 670 if hpz >= 3170
id dec -485 if z > 1842
z dec 40 if p > 1946
kq dec 671 if ey > 5872
a dec 745 if tx <= 1420
y dec 985 if tk == 1894
y inc 668 if l == -1540
g inc -231 if hpz == 3174
znl inc -481 if p > 1948
hpz inc -14 if kq < -2900
ekl dec 372 if oqg <= -3285
ehe dec -176 if abh == -2717
l inc 865 if p >= 1942
tx inc -587 if g <= -3962
a dec -679 if h <= 27
ey inc -261 if hpz != 3165
l dec -486 if tx > 829
ehe dec 913 if z > 1804
ey dec -431 if x == -3383
g dec 998 if y == -891
a inc -720 if hpz <= 3176
un dec 753 if hpz < 3174
l inc 740 if l < -182
oui inc -212 if oui <= 3578
oqg inc 363 if tx > 824
x dec 296 if p <= 1956
oqg dec 480 if oui == 3358
x inc -178 if abh <= -2724
x inc -579 if tx > 830
lb dec -188 if tx == 831
ekl dec 544 if un >= 1512
ekl inc 284 if c != -1304
id dec -418 if oui > 3365
a inc 12 if h < 19
lb dec 73 if ekl != 745
c inc 594 if id >= 24
g inc -118 if xj <= 506
id inc 274 if x >= -4263
x dec -248 if oui != 3350
ehe inc -431 if abh >= -2719
y inc -740 if y < -885
p inc -842 if znl <= -2095
g dec -101 if tx != 831
un inc -708 if id == 298
id inc 788 if id <= 302
ehe dec -4 if oqg <= -3399
h dec 904 if ekl >= 736
oui dec -828 if tx >= 823
z dec 309 if tk != 1894
ey inc 744 if tk > 1901
znl inc 133 if ehe <= 550
a inc -908 if z != 1810
tk inc -464 if h != -889
h inc 59 if ey > 6042
x inc -841 if l == 551
abh inc 293 if ey > 6047
tx inc 410 if un <= 813
z inc 218 if ehe >= 538
xj inc -875 if a >= 1635
kq inc -793 if abh < -2415
oqg dec 361 if h == -823
tx inc -847 if xj >= -378
hpz dec 725 if a <= 1641
lb dec -740 if h < -830
hpz dec 259 if h < -818
id inc 353 if kq != -3687
oui inc 540 if p == 1109
lb dec -235 if tx > 392
hpz dec -601 if h > -826
oqg dec 287 if oqg == -3763
oqg dec -965 if abh < -2433
id inc 172 if oui > 4722
z dec -226 if ey <= 6054
kq dec -173 if x >= -4859
y inc -123 if un > 798
lb inc 522 if kq < -3514
abh dec 543 if znl != -1973
id inc -418 if hpz == 3516
tk dec -115 if abh <= -2966
x dec 501 if ehe > 533
oui dec -460 if kq > -3524
l dec -712 if g == -5084
c inc -239 if tx < 398
abh dec 956 if oqg < -4041
x dec 357 if id != 1201
un dec 45 if tx == 394
z inc -123 if ekl != 748
g inc 479 if p > 1099
a inc 942 if id >= 1186
id inc -788 if oqg >= -4057
tk dec -821 if y > -1762
g dec -672 if tk < 2371
ey inc 647 if oui > 5179
x inc -382 if lb == 3402
id inc 742 if lb >= 3394
hpz inc 631 if x >= -6097
h dec -368 if p > 1101
ekl inc 44 if ehe == 543
p dec -420 if l > 549
y inc -539 if tk < 2365
abh dec -516 if tx < 395
ey dec -752 if hpz != 4147
z inc 970 if tk == 2362
y inc 698 if g < -3933
ey inc -131 if l != 541
tx inc -663 if c < -954
z inc -161 if l >= 544
kq inc -616 if g >= -3931
tk inc -915 if oui <= 5188
ey dec 978 if id == 1141
y dec -430 if ehe <= 541
kq dec -129 if tk <= 1448
y dec -319 if x == -6091
znl inc -192 if x < -6086
oqg dec 560 if ey <= 6565
ehe dec 531 if ey == 6565
abh dec -732 if xj < -372
xj inc 421 if kq < -4135
x inc 85 if un >= 755
c dec -26 if oqg != -4602
oqg dec 943 if a != 2576
ey dec -370 if oqg == -5560
oqg dec 620 if ey <= 6561
tx dec -308 if oqg == -5553
znl inc 123 if ehe <= 19
ehe inc 848 if a >= 2577
tk dec 679 if z < 1970
c inc -339 if z > 1963
id inc 349 if lb <= 3407
x inc -88 if oui > 5177
hpz dec 617 if oui <= 5185
oqg dec 696 if z > 1964
oqg dec -984 if z != 1966
lb dec -904 if un > 767
oqg inc -480 if p > 1534
c inc 496 if un < 769
g dec -564 if oqg > -6256
ehe inc -874 if abh > -2674
l inc -20 if l == 551
lb inc 962 if ey != 6575
hpz dec 99 if ekl <= 792
l dec 941 if y != -1443
ey dec 621 if g <= -3361
xj dec -474 if oui >= 5183
xj inc 807 if g != -3364
abh inc -75 if a < 2593
kq dec 57 if c <= -770
hpz dec 274 if p != 1529
oqg inc -927 if ey == 5944
c dec 171 if g > -3372
p inc 54 if xj == 1326
ehe dec 249 if oui >= 5184
ehe dec 315 if un < 765
lb dec 545 if y < -1429
znl dec 998 if hpz > 4049
z inc -122 if hpz <= 4057
znl inc 620 if kq > -4197
oqg inc -349 if un == 759
tk dec -186 if h == -455
oui inc 717 if ekl <= 798
xj dec 701 if h >= -456
un inc -50 if tx < 709
lb dec -784 if h < -452
tx inc 175 if tx < 710
tk dec -575 if ey != 5944
oui dec 856 if lb < 4604
ehe dec 179 if abh > -2746
hpz dec 537 if xj < 622
ey inc -862 if y <= -1427
oqg inc 104 if abh <= -2744
kq dec 453 if p == 1583
ekl dec -587 if tk == 958
tk dec 309 if tx == 877
oui dec -628 if y < -1425
kq dec 509 if x >= -6096
xj dec 953 if oqg != -7412
lb dec -435 if lb != 4595
c dec 341 if id == 1496
x inc 796 if x < -6093
hpz inc 401 if g > -3365
znl inc -36 if x > -5303
h inc 282 if oqg != -7419
ekl dec 802 if z >= 1838
c inc 586 if ehe != 305
p dec -293 if g < -3371
ey inc 125 if kq > -5158
ekl inc -108 if abh != -2753
ekl inc -848 if xj != -324
oui dec 801 if ey > 5211
x inc 704 if abh == -2750
z inc -759 if ehe == 296
g inc -964 if ehe < 301
ehe inc 307 if xj > -330
c inc -272 if ehe == 603
ey dec -497 if un != 700
lb dec 533 if c >= -978
y inc 864 if z == 1085
ekl inc -895 if x < -4590
abh inc -424 if xj != -324
lb dec -756 if l == -418
xj inc 23 if g == -4328
znl inc 716 if g >= -4322
h dec -669 if l <= -409
oui dec -305 if lb >= 4498
un dec 664 if id <= 1493
hpz dec 706 if g == -4331
ey inc 920 if lb <= 4512
l inc 858 if c < -968
tx dec -357 if ey >= 6631
oui inc 344 if znl != -1466
tx dec 549 if znl > -1466
tx dec 748 if h > 491
znl dec 544 if xj >= -332
oqg inc -626 if y > -576
kq inc -28 if a == 2585
ekl inc -895 if tx == -420
oqg inc 770 if ekl < -2173
g inc 712 if kq == -5155
ey dec 809 if a > 2578
znl dec -8 if c >= -972
oui dec 360 if p >= 1580
l dec 231 if znl != -1992
hpz dec 307 if l > 443
oqg dec -152 if x <= -4594
y dec -153 if id >= 1488
oui inc -122 if l < 456
xj inc -818 if id != 1493
un inc -819 if a != 2594
abh dec 518 if ekl < -2169
znl inc 873 if y < -412
ekl dec -431 if h == 496
x dec 498 if x > -4595
ehe inc 133 if z > 1093
tx dec 293 if g != -3619
kq dec -29 if znl <= -1118
tx dec 621 if un > -120
p dec 494 if z >= 1089
h dec -40 if l < 457
z dec -430 if lb == 4501
tk dec -339 if kq == -5126
y inc 616 if oui != 5834
kq inc -28 if z == 1091
abh inc 267 if ey < 5808
hpz dec -100 if h <= 536
p dec 883 if kq < -5120
tx inc 516 if p >= 699
l inc 183 if oui != 5846
kq dec 230 if znl >= -1120
znl dec 595 if ekl > -1742
oqg dec -408 if g <= -3614
y dec -796 if c >= -977
id dec 414 if lb != 4514
ekl inc 845 if abh <= -3685
c inc 193 if p <= 699
xj dec -590 if oui == 5842
z dec 899 if kq <= -5349
kq dec 616 if kq <= -5365
g dec 371 if ey == 5815
lb inc -922 if y <= 1003
hpz dec 592 if a != 2576
xj dec -548 if ehe == 603
lb inc 867 if oqg < -7495
x inc -162 if l >= 628
ekl dec 926 if un <= -116
ey inc -661 if oui != 5851
z inc -44 if a != 2588
kq inc 929 if h >= 529
p dec 373 if oqg != -7496
oqg inc 629 if g >= -3996
kq inc -667 if a <= 2579
p inc 620 if ekl <= -891
xj inc -169 if x >= -5249
tk inc -327 if g > -3996
h inc 96 if oqg > -6860
c inc 362 if c != -963
tk dec -861 if un == -110
ekl dec -765 if x != -5259
a dec 844 if g != -3980
oui dec -549 if l == 631
c dec 753 if p > 937
a inc 661 if y <= 1001
a dec -315 if oqg < -6853
znl inc -538 if p == 947
un inc -894 if tx < -515
abh inc 958 if a > 2711
xj inc 806 if tk < 1527
abh inc -317 if z >= 136
tk inc 75 if un <= -997
x inc -171 if a <= 2718
z inc -339 if ekl >= -139
oqg dec 743 if un == -1004
znl inc 942 if abh != -3058
y inc 195 if un != -1014
oqg inc -289 if z > -192
un dec 253 if un >= -1006
ey dec 426 if hpz < 2542
ehe dec -877 if c >= -1364
z dec -399 if ey >= 5147
znl inc 224 if un > -1267
h dec -1 if x != -5427
oui inc -541 if abh != -3047
h dec -48 if id <= 1085
oui inc -841 if y >= 1191
ekl inc 880 if xj < 805
xj dec 804 if z <= 210
xj dec 91 if h >= 690
ey dec -355 if oqg == -7601
tx inc -508 if znl > -1089
xj dec 948 if ekl != 754
p inc 675 if z > 201
c inc -872 if p < 1624
un inc -470 if znl <= -1081
oui inc -672 if z >= 202
c dec -191 if l > 628
p dec -603 if y <= 1196
un dec 283 if id != 1086
un inc -942 if znl != -1096
tk inc 553 if tk < 1604
l inc -644 if ey < 5515
y inc 845 if g != -3985
oui dec -883 if un != -2947
ehe dec 449 if p <= 2226
kq inc -410 if oui > 6052
hpz dec 97 if ey > 5509
znl inc -892 if hpz != 2539
oqg dec 585 if znl != -1971
z inc 257 if tk == 2150
a dec 445 if oui >= 6053
oqg dec -745 if oui == 6061
ekl inc 631 if oui <= 6064
un dec 401 if znl == -1978
oqg dec 289 if kq < -4835
oqg dec -867 if xj != -954
h inc -764 if ehe == 1031
y inc 63 if z < 468
id inc 750 if tx != -1037
z dec -142 if a != 2269
x dec -497 if x >= -5423
ekl inc 27 if x > -5427
ehe inc 458 if kq <= -4829
oqg inc -20 if un > -3355
l inc -512 if znl != -1982
ehe inc 684 if znl != -1977
ekl dec 834 if x <= -5427
p inc 563 if l == -525
znl inc 178 if ehe > 2173
y dec 396 if ehe < 2181
p dec -55 if ey == 5515
id dec 670 if znl >= -1981
z inc -718 if lb >= 3581
c dec 976 if tk < 2152
g inc -118 if ehe != 2179
xj dec -150 if x == -5425
ekl dec -332 if xj != -806
id dec -692 if ekl == 1739
INPUT;
    private const SAMPLE = <<<SAMPLE
b inc 5 if a > 1
a inc 1 if b < 5
c dec -10 if a >= 1
c inc -20 if c == 10
SAMPLE;

    /**
     * @var Day08
     */
    private $day;

    public function setUp()
    {
        $this->day = new Day08();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDayEightFirstPuzzle()
    {
        echo $this->day->firstPuzzle(self::INPUT);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDayEightSecondPuzzle()
    {
        echo $this->day->secondPuzzle(self::INPUT);
    }

    public function testDayEightFirstPuzzleWithSampleData()
    {
        $actualMatch = $this->day->firstPuzzle(self::SAMPLE);

        $this->assertEquals(1, $actualMatch);
    }

    public function testDayEightSecondPuzzleWithSampleData()
    {
        $actualMatch = $this->day->secondPuzzle(self::SAMPLE);

        $this->assertEquals(10, $actualMatch);
    }
}
