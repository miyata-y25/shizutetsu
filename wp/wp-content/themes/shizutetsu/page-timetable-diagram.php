<?php
/*
Template Name: 駅個別時刻表
Template Post Type: timetables
 */
get_header();
?>

<section class="page-contents-timetable">
  <div class="page-contents-timetable-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
		<div class="ad_times-wrap">
			<?php
				$url = $_SERVER['REQUEST_URI'];
				if ( strstr($url,'up-weekdays')==true ) { //平日上り
					include('inc/wu/wu682.php'); 
					include('inc/wu/wu602.php'); 
					include('inc/wu/wu604.php'); 
					include('inc/wu/wu606.php'); 
					include('inc/wu/wu608.php'); 
					include('inc/wu/wu610.php'); 
					include('inc/wu/wu612.php'); 
					include('inc/wu/wu614.php'); 
					include('inc/wu/wu782.php'); 
					include('inc/wu/wu702.php'); 
					include('inc/wu/wu704.php'); 
					include('inc/wu/wu706.php'); 
					include('inc/wu/wu708.php'); 
					include('inc/wu/wu710.php'); 
					include('inc/wu/wu712.php'); 
					include('inc/wu/wu714.php'); 
					include('inc/wu/wu716.php'); 
					include('inc/wu/wu718.php'); 
					include('inc/wu/wu720.php'); 
					include('inc/wu/wu802.php'); 
					include('inc/wu/wu804.php'); 
					include('inc/wu/wu806.php'); 
					include('inc/wu/wu808.php'); 
					include('inc/wu/wu810.php'); 
					include('inc/wu/wu812.php'); 
					include('inc/wu/wu814.php'); 
					include('inc/wu/wu816.php'); 
					include('inc/wu/wu818.php'); 
					include('inc/wu/wu820.php'); 
					include('inc/wu/wu902.php'); 
					include('inc/wu/wu904.php'); 
					include('inc/wu/wu906.php'); 
					include('inc/wu/wu908.php'); 
					include('inc/wu/wu910.php'); 
					include('inc/wu/wu912.php'); 
					include('inc/wu/wu914.php'); 
					include('inc/wu/wu916.php'); 
					include('inc/wu/wu1002.php'); 
					include('inc/wu/wu1004.php'); 
					include('inc/wu/wu1006.php'); 
					include('inc/wu/wu1008.php'); 
					include('inc/wu/wu1010.php'); 
					include('inc/wu/wu1012.php'); 
					include('inc/wu/wu1014.php'); 
					include('inc/wu/wu1016.php'); 
					include('inc/wu/wu1102.php'); 
					include('inc/wu/wu1104.php'); 
					include('inc/wu/wu1106.php'); 
					include('inc/wu/wu1108.php'); 
					include('inc/wu/wu1110.php'); 
					include('inc/wu/wu1112.php'); 
					include('inc/wu/wu1114.php'); 
					include('inc/wu/wu1202.php'); 
					include('inc/wu/wu1204.php'); 
					include('inc/wu/wu1206.php'); 
					include('inc/wu/wu1208.php'); 
					include('inc/wu/wu1210.php'); 
					include('inc/wu/wu1212.php'); 
					include('inc/wu/wu1214.php'); 
					include('inc/wu/wu1216.php'); 
					include('inc/wu/wu1302.php'); 
					include('inc/wu/wu1304.php'); 
					include('inc/wu/wu1306.php'); 
					include('inc/wu/wu1308.php'); 
					include('inc/wu/wu1310.php'); 
					include('inc/wu/wu1312.php'); 
					include('inc/wu/wu1314.php'); 
					include('inc/wu/wu1402.php'); 
					include('inc/wu/wu1404.php'); 
					include('inc/wu/wu1406.php'); 
					include('inc/wu/wu1408.php'); 
					include('inc/wu/wu1410.php'); 
					include('inc/wu/wu1412.php'); 
					include('inc/wu/wu1414.php'); 
					include('inc/wu/wu1416.php'); 
					include('inc/wu/wu1502.php'); 
					include('inc/wu/wu1504.php'); 
					include('inc/wu/wu1506.php'); 
					include('inc/wu/wu1508.php'); 
					include('inc/wu/wu1510.php'); 
					include('inc/wu/wu1512.php'); 
					include('inc/wu/wu1514.php'); 
					include('inc/wu/wu1602.php'); 
					include('inc/wu/wu1604.php'); 
					include('inc/wu/wu1606.php'); 
					include('inc/wu/wu1608.php'); 
					include('inc/wu/wu1610.php'); 
					include('inc/wu/wu1682.php'); 
					include('inc/wu/wu1612.php'); 
					include('inc/wu/wu1614.php'); 
					include('inc/wu/wu1616.php'); 
					include('inc/wu/wu1702.php'); 
					include('inc/wu/wu1704.php'); 
					include('inc/wu/wu1706.php'); 
					include('inc/wu/wu1708.php'); 
					include('inc/wu/wu1710.php'); 
					include('inc/wu/wu1712.php'); 
					include('inc/wu/wu1714.php'); 
					include('inc/wu/wu1716.php'); 
					include('inc/wu/wu1718.php'); 
					include('inc/wu/wu1802.php'); 
					include('inc/wu/wu1804.php'); 
					include('inc/wu/wu1806.php'); 
					include('inc/wu/wu1808.php'); 
					include('inc/wu/wu1810.php'); 
					include('inc/wu/wu1812.php'); 
					include('inc/wu/wu1814.php'); 
					include('inc/wu/wu1816.php'); 
					include('inc/wu/wu1818.php'); 
					include('inc/wu/wu1902.php'); 
					include('inc/wu/wu1904.php'); 
					include('inc/wu/wu1906.php'); 
					include('inc/wu/wu1908.php'); 
					include('inc/wu/wu1910.php'); 
					include('inc/wu/wu1912.php'); 
					include('inc/wu/wu1914.php'); 
					include('inc/wu/wu1952.php'); 
					include('inc/wu/wu2002.php'); 
					include('inc/wu/wu2004.php'); 
					include('inc/wu/wu2006.php'); 
					include('inc/wu/wu2008.php'); 
					include('inc/wu/wu2010.php'); 
					include('inc/wu/wu2052.php'); 
					include('inc/wu/wu2102.php'); 
					include('inc/wu/wu2104.php'); 
					include('inc/wu/wu2106.php'); 
					include('inc/wu/wu2108.php'); 
					include('inc/wu/wu2202.php'); 
					include('inc/wu/wu2204.php'); 
					include('inc/wu/wu2206.php'); 
					include('inc/wu/wu2208.php'); 
					include('inc/wu/wu2302.php'); 
					include('inc/wu/wu2304.php'); 
					include('inc/wu/wu2306.php');
					include('inc/wu/wu3602e.php');
					include('inc/wu/wu3604e.php');
					include('inc/wu/wu3702e.php');
					include('inc/wu/wu3704e.php');
					include('inc/wu/wu3706e.php');
					include('inc/wu/wu3902e.php');
					include('inc/wu/wu3904e.php');
				} elseif ( strstr($url,'up-satholidays')==true ) { //休日上り
					include('inc/hu/hu682.php'); 
					include('inc/hu/hu602.php'); 
					include('inc/hu/hu604.php'); 
					include('inc/hu/hu606.php'); 
					include('inc/hu/hu608.php'); 
					include('inc/hu/hu702.php'); 
					include('inc/hu/hu704.php'); 
					include('inc/hu/hu706.php'); 
					include('inc/hu/hu708.php'); 
					include('inc/hu/hu710.php'); 
					include('inc/hu/hu712.php'); 
					include('inc/hu/hu802.php'); 
					include('inc/hu/hu804.php'); 
					include('inc/hu/hu806.php'); 
					include('inc/hu/hu808.php'); 
					include('inc/hu/hu810.php'); 
					include('inc/hu/hu812.php'); 
					include('inc/hu/hu814.php'); 
					include('inc/hu/hu902.php'); 
					include('inc/hu/hu904.php'); 
					include('inc/hu/hu906.php'); 
					include('inc/hu/hu908.php'); 
					include('inc/hu/hu910.php'); 
					include('inc/hu/hu912.php'); 
					include('inc/hu/hu914.php'); 
					include('inc/hu/hu1002.php'); 
					include('inc/hu/hu1004.php'); 
					include('inc/hu/hu1006.php'); 
					include('inc/hu/hu1008.php'); 
					include('inc/hu/hu1010.php'); 
					include('inc/hu/hu1012.php'); 
					include('inc/hu/hu1014.php'); 
					include('inc/hu/hu1016.php'); 
					include('inc/hu/hu1102.php'); 
					include('inc/hu/hu1104.php'); 
					include('inc/hu/hu1106.php'); 
					include('inc/hu/hu1108.php'); 
					include('inc/hu/hu1110.php'); 
					include('inc/hu/hu1112.php'); 
					include('inc/hu/hu1114.php'); 
					include('inc/hu/hu1202.php'); 
					include('inc/hu/hu1204.php'); 
					include('inc/hu/hu1206.php'); 
					include('inc/hu/hu1208.php'); 
					include('inc/hu/hu1210.php'); 
					include('inc/hu/hu1212.php'); 
					include('inc/hu/hu1214.php'); 
					include('inc/hu/hu1216.php'); 
					include('inc/hu/hu1302.php'); 
					include('inc/hu/hu1304.php'); 
					include('inc/hu/hu1306.php'); 
					include('inc/hu/hu1308.php'); 
					include('inc/hu/hu1310.php'); 
					include('inc/hu/hu1312.php'); 
					include('inc/hu/hu1314.php'); 
					include('inc/hu/hu1402.php'); 
					include('inc/hu/hu1404.php'); 
					include('inc/hu/hu1406.php'); 
					include('inc/hu/hu1408.php'); 
					include('inc/hu/hu1410.php'); 
					include('inc/hu/hu1412.php'); 
					include('inc/hu/hu1414.php'); 
					include('inc/hu/hu1416.php'); 
					include('inc/hu/hu1502.php'); 
					include('inc/hu/hu1504.php'); 
					include('inc/hu/hu1506.php'); 
					include('inc/hu/hu1508.php'); 
					include('inc/hu/hu1510.php'); 
					include('inc/hu/hu1512.php'); 
					include('inc/hu/hu1514.php'); 
					include('inc/hu/hu1602.php'); 
					include('inc/hu/hu1604.php'); 
					include('inc/hu/hu1606.php'); 
					include('inc/hu/hu1608.php'); 
					include('inc/hu/hu1610.php'); 
					include('inc/hu/hu1612.php'); 
					include('inc/hu/hu1614.php'); 
					include('inc/hu/hu1616.php'); 
					include('inc/hu/hu1702.php'); 
					include('inc/hu/hu1704.php'); 
					include('inc/hu/hu1706.php'); 
					include('inc/hu/hu1708.php'); 
					include('inc/hu/hu1710.php'); 
					include('inc/hu/hu1712.php'); 
					include('inc/hu/hu1714.php'); 
					include('inc/hu/hu1802.php'); 
					include('inc/hu/hu1804.php'); 
					include('inc/hu/hu1806.php'); 
					include('inc/hu/hu1808.php'); 
					include('inc/hu/hu1810.php'); 
					include('inc/hu/hu1812.php'); 
					include('inc/hu/hu1814.php'); 
					include('inc/hu/hu1816.php'); 
					include('inc/hu/hu1902.php'); 
					include('inc/hu/hu1904.php'); 
					include('inc/hu/hu1906.php'); 
					include('inc/hu/hu1908.php'); 
					include('inc/hu/hu1910.php'); 
					include('inc/hu/hu1952.php'); 
					include('inc/hu/hu2002.php'); 
					include('inc/hu/hu2004.php'); 
					include('inc/hu/hu2006.php'); 
					include('inc/hu/hu2008.php'); 
					include('inc/hu/hu2102.php'); 
					include('inc/hu/hu2104.php'); 
					include('inc/hu/hu2106.php'); 
					include('inc/hu/hu2108.php'); 
					include('inc/hu/hu2202.php'); 
					include('inc/hu/hu2204.php'); 
					include('inc/hu/hu2206.php'); 
					include('inc/hu/hu2208.php'); 
					include('inc/hu/hu2302.php'); 
					include('inc/hu/hu2304.php'); 
					include('inc/hu/hu2306.php'); 
				} elseif ( strstr($url,'down-weekdays')==true ) { //平日下り
					include('inc/wd/wd651.php'); 
					include('inc/wd/wd601.php'); 
					include('inc/wd/wd653.php'); 
					include('inc/wd/wd657.php'); 
					include('inc/wd/wd603.php'); 
					include('inc/wd/wd655.php'); 
					include('inc/wd/wd605.php'); 
					include('inc/wd/wd607.php'); 
					include('inc/wd/wd609.php'); 
					include('inc/wd/wd611.php'); 
					include('inc/wd/wd613.php'); 
					include('inc/wd/wd701.php'); 
					include('inc/wd/wd703.php'); 
					include('inc/wd/wd705.php'); 
					include('inc/wd/wd707.php'); 
					include('inc/wd/wd709.php'); 
					include('inc/wd/wd711.php'); 
					include('inc/wd/wd713.php'); 
					include('inc/wd/wd715.php'); 
					include('inc/wd/wd717.php'); 
					include('inc/wd/wd719.php'); 
					include('inc/wd/wd801.php'); 
					include('inc/wd/wd803.php'); 
					include('inc/wd/wd805.php'); 
					include('inc/wd/wd807.php'); 
					include('inc/wd/wd809.php'); 
					include('inc/wd/wd811.php'); 
					include('inc/wd/wd813.php'); 
					include('inc/wd/wd815.php'); 
					include('inc/wd/wd817.php'); 
					include('inc/wd/wd819.php'); 
					include('inc/wd/wd881.php'); 
					include('inc/wd/wd901.php'); 
					include('inc/wd/wd903.php'); 
					include('inc/wd/wd981.php'); 
					include('inc/wd/wd905.php'); 
					include('inc/wd/wd907.php'); 
					include('inc/wd/wd909.php'); 
					include('inc/wd/wd911.php'); 
					include('inc/wd/wd983.php'); 
					include('inc/wd/wd985.php'); 
					include('inc/wd/wd913.php'); 
					include('inc/wd/wd915.php'); 
					include('inc/wd/wd1001.php'); 
					include('inc/wd/wd1003.php'); 
					include('inc/wd/wd1005.php'); 
					include('inc/wd/wd1007.php'); 
					include('inc/wd/wd1009.php'); 
					include('inc/wd/wd1011.php'); 
					include('inc/wd/wd1013.php'); 
					include('inc/wd/wd1101.php'); 
					include('inc/wd/wd1103.php'); 
					include('inc/wd/wd1105.php'); 
					include('inc/wd/wd1107.php'); 
					include('inc/wd/wd1109.php'); 
					include('inc/wd/wd1111.php'); 
					include('inc/wd/wd1113.php'); 
					include('inc/wd/wd1115.php'); 
					include('inc/wd/wd1201.php'); 
					include('inc/wd/wd1203.php'); 
					include('inc/wd/wd1205.php'); 
					include('inc/wd/wd1207.php'); 
					include('inc/wd/wd1209.php'); 
					include('inc/wd/wd1211.php'); 
					include('inc/wd/wd1213.php'); 
					include('inc/wd/wd1301.php'); 
					include('inc/wd/wd1303.php'); 
					include('inc/wd/wd1305.php'); 
					include('inc/wd/wd1307.php'); 
					include('inc/wd/wd1309.php'); 
					include('inc/wd/wd1311.php'); 
					include('inc/wd/wd1313.php'); 
					include('inc/wd/wd1315.php'); 
					include('inc/wd/wd1401.php'); 
					include('inc/wd/wd1403.php'); 
					include('inc/wd/wd1405.php'); 
					include('inc/wd/wd1407.php'); 
					include('inc/wd/wd1409.php'); 
					include('inc/wd/wd1411.php'); 
					include('inc/wd/wd1413.php'); 
					include('inc/wd/wd1501.php'); 
					include('inc/wd/wd1503.php'); 
					include('inc/wd/wd1505.php'); 
					include('inc/wd/wd1507.php'); 
					include('inc/wd/wd1509.php'); 
					include('inc/wd/wd1511.php'); 
					include('inc/wd/wd1513.php'); 
					include('inc/wd/wd1515.php'); 
					include('inc/wd/wd1601.php'); 
					include('inc/wd/wd1603.php'); 
					include('inc/wd/wd1605.php'); 
					include('inc/wd/wd1607.php'); 
					include('inc/wd/wd1609.php'); 
					include('inc/wd/wd1651.php'); 
					include('inc/wd/wd1611.php'); 
					include('inc/wd/wd1613.php'); 
					include('inc/wd/wd1701.php'); 
					include('inc/wd/wd1703.php'); 
					include('inc/wd/wd1705.php'); 
					include('inc/wd/wd1707.php'); 
					include('inc/wd/wd1709.php'); 
					include('inc/wd/wd1711.php'); 
					include('inc/wd/wd1713.php'); 
					include('inc/wd/wd1715.php'); 
					include('inc/wd/wd1717.php'); 
					include('inc/wd/wd1801.php'); 
					include('inc/wd/wd1803.php'); 
					include('inc/wd/wd1805.php'); 
					include('inc/wd/wd1807.php'); 
					include('inc/wd/wd1809.php'); 
					include('inc/wd/wd1811.php'); 
					include('inc/wd/wd1813.php'); 
					include('inc/wd/wd1815.php'); 
					include('inc/wd/wd1817.php'); 
					include('inc/wd/wd1901.php'); 
					include('inc/wd/wd1903.php'); 
					include('inc/wd/wd1905.php'); 
					include('inc/wd/wd1907.php'); 
					include('inc/wd/wd1909.php'); 
					include('inc/wd/wd1911.php'); 
					include('inc/wd/wd1913.php'); 
					include('inc/wd/wd2001.php'); 
					include('inc/wd/wd2003.php'); 
					include('inc/wd/wd2005.php'); 
					include('inc/wd/wd2007.php'); 
					include('inc/wd/wd2009.php'); 
					include('inc/wd/wd2101.php'); 
					include('inc/wd/wd2103.php'); 
					include('inc/wd/wd2105.php'); 
					include('inc/wd/wd2107.php'); 
					include('inc/wd/wd2201.php'); 
					include('inc/wd/wd2203.php'); 
					include('inc/wd/wd2205.php'); 
					include('inc/wd/wd2207.php'); 
					include('inc/wd/wd2301.php'); 
					include('inc/wd/wd2303.php'); 
					include('inc/wd/wd2305.php'); 
					include('inc/wd/wd3601e.php'); 
					include('inc/wd/wd3701e.php'); 
					include('inc/wd/wd3703e.php'); 
				} elseif ( strstr($url,'down-satholidays')==true ) { //休日下り
					include('inc/hd/hd601.php'); 
					include('inc/hd/hd603.php'); 
					include('inc/hd/hd605.php'); 
					include('inc/hd/hd651.php'); 
					include('inc/hd/hd607.php'); 
					include('inc/hd/hd701.php'); 
					include('inc/hd/hd703.php'); 
					include('inc/hd/hd705.php'); 
					include('inc/hd/hd707.php'); 
					include('inc/hd/hd709.php'); 
					include('inc/hd/hd711.php'); 
					include('inc/hd/hd801.php'); 
					include('inc/hd/hd803.php'); 
					include('inc/hd/hd805.php'); 
					include('inc/hd/hd807.php'); 
					include('inc/hd/hd809.php'); 
					include('inc/hd/hd811.php'); 
					include('inc/hd/hd813.php'); 
					include('inc/hd/hd901.php'); 
					include('inc/hd/hd903.php'); 
					include('inc/hd/hd905.php'); 
					include('inc/hd/hd907.php'); 
					include('inc/hd/hd909.php'); 
					include('inc/hd/hd911.php'); 
					include('inc/hd/hd913.php'); 
					include('inc/hd/hd915.php'); 
					include('inc/hd/hd1001.php'); 
					include('inc/hd/hd1003.php'); 
					include('inc/hd/hd1005.php'); 
					include('inc/hd/hd1007.php'); 
					include('inc/hd/hd1009.php'); 
					include('inc/hd/hd1011.php'); 
					include('inc/hd/hd1013.php'); 
					include('inc/hd/hd1101.php'); 
					include('inc/hd/hd1103.php'); 
					include('inc/hd/hd1105.php'); 
					include('inc/hd/hd1107.php'); 
					include('inc/hd/hd1109.php'); 
					include('inc/hd/hd1111.php'); 
					include('inc/hd/hd1113.php'); 
					include('inc/hd/hd1115.php'); 
					include('inc/hd/hd1201.php'); 
					include('inc/hd/hd1203.php'); 
					include('inc/hd/hd1205.php'); 
					include('inc/hd/hd1207.php'); 
					include('inc/hd/hd1209.php'); 
					include('inc/hd/hd1211.php'); 
					include('inc/hd/hd1213.php'); 
					include('inc/hd/hd1301.php'); 
					include('inc/hd/hd1303.php'); 
					include('inc/hd/hd1305.php'); 
					include('inc/hd/hd1307.php'); 
					include('inc/hd/hd1309.php'); 
					include('inc/hd/hd1311.php'); 
					include('inc/hd/hd1313.php'); 
					include('inc/hd/hd1315.php'); 
					include('inc/hd/hd1401.php'); 
					include('inc/hd/hd1403.php'); 
					include('inc/hd/hd1405.php'); 
					include('inc/hd/hd1407.php'); 
					include('inc/hd/hd1409.php'); 
					include('inc/hd/hd1411.php'); 
					include('inc/hd/hd1413.php'); 
					include('inc/hd/hd1501.php'); 
					include('inc/hd/hd1503.php'); 
					include('inc/hd/hd1505.php'); 
					include('inc/hd/hd1507.php'); 
					include('inc/hd/hd1509.php'); 
					include('inc/hd/hd1511.php'); 
					include('inc/hd/hd1513.php'); 
					include('inc/hd/hd1515.php'); 
					include('inc/hd/hd1601.php'); 
					include('inc/hd/hd1603.php'); 
					include('inc/hd/hd1605.php'); 
					include('inc/hd/hd1607.php'); 
					include('inc/hd/hd1609.php'); 
					include('inc/hd/hd1611.php'); 
					include('inc/hd/hd1613.php'); 
					include('inc/hd/hd1701.php'); 
					include('inc/hd/hd1703.php'); 
					include('inc/hd/hd1705.php'); 
					include('inc/hd/hd1707.php'); 
					include('inc/hd/hd1709.php'); 
					include('inc/hd/hd1711.php'); 
					include('inc/hd/hd1713.php'); 
					include('inc/hd/hd1715.php'); 
					include('inc/hd/hd1801.php'); 
					include('inc/hd/hd1803.php'); 
					include('inc/hd/hd1805.php'); 
					include('inc/hd/hd1807.php'); 
					include('inc/hd/hd1809.php'); 
					include('inc/hd/hd1811.php'); 
					include('inc/hd/hd1813.php'); 
					include('inc/hd/hd1901.php'); 
					include('inc/hd/hd1903.php'); 
					include('inc/hd/hd1905.php'); 
					include('inc/hd/hd1907.php'); 
					include('inc/hd/hd1909.php'); 
					include('inc/hd/hd2001.php'); 
					include('inc/hd/hd2003.php'); 
					include('inc/hd/hd2005.php'); 
					include('inc/hd/hd2007.php'); 
					include('inc/hd/hd2101.php'); 
					include('inc/hd/hd2103.php'); 
					include('inc/hd/hd2105.php'); 
					include('inc/hd/hd2107.php'); 
					include('inc/hd/hd2201.php'); 
					include('inc/hd/hd2203.php'); 
					include('inc/hd/hd2205.php'); 
					include('inc/hd/hd2207.php'); 
					include('inc/hd/hd2301.php'); 
					include('inc/hd/hd2303.php'); 
					include('inc/hd/hd2305.php'); 
				}
			?>
		</div>
		
		<style>
			/* 印刷用スタイル */
			@media print {
				
				body {
					-webkit-print-color-adjust: exact;
				}

				.site-header,
				.site-footer,
				.bread,
				.btn-area,
				.bnr-area,
				.bnr-s-area,
				.page-contents-timetable-body h2,
				.print {
					display: none !important;
				}
				.main-contents .page-contents-timetable .page-contents-timetable-body .page-contents-timetable-info ul li {
					padding-top: 0 !important;
					padding-bottom: .6em !important;
					border-top: 0px !important;
					border-right: 0px !important;
					border-left: 0px !important;
				}
				.main-contents .page-contents-timetable .page-contents-timetable-body .page-contents-timetable-table table tr td {
					padding: .3em !important;
				}
				.main-contents .page-contents-timetable .page-contents-timetable-body .sample .color {
					width: 1em !important;
					height: 1em !important;
				}
				.main-contents .page-contents-timetable .page-contents-timetable-body .sample p {
					font-size: 1.3rem !important;
				}
			}
		</style>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>