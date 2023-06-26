<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.bord{
  
  background-color: red;
}
  </style>
</head>
<body>
<img src="Triviant-speelbord.jpg" usemap="#image-map">

<map name="image-map">
  
    <?php foreach ($coords as $coordinate): ?>
        <area href="<?= $coordinate['id']; ?>" coords=<?= $coordinate['coords']; ?> shape="poly">
    <?php endforeach; ?>
</map>

<!-- <map name="image-map">
    x<area href="" coords="433,789,393,858,471,861" shape="poly">
    x<area href="" coords="312,763,376,786,376,796,358,850,346,853,284,834,278,824,300,768,306,765" shape="poly">
    x<area href="" coords="228,716,246,726,280,746,286,751,286,763,273,786,252,817,236,814,218,804,192,788,186,777,217,722" shape="poly">
    x<area href="" coords="156,656,164,660,180,672,212,704,208,716,184,746,168,758,159,758,139,741,110,709,114,698" shape="poly">
    x<area href="" coords="128,608,49,612,88,675" shape="poly">
    x<area href="" coords="93,492,111,547,110,562,49,579,34,572,20,508,28,498,68,489,82,486" shape="poly">
    x<area href="" coords="90,402,90,436,91,471,80,478,18,477,15,451,15,396,80,393" shape="poly">
    x<area href="" coords="42,288,27,331,20,357,29,365,68,375,89,382,97,368,105,344,116,308,61,288,50,287" shape="poly">
    x<area href="" coords="169,112,114,162,118,179,146,203,163,217,189,203,218,165,212,153,187,127" shape="poly">
    x<area href="" coords="253,56,192,87,200,111,227,157,262,143,291,123,294,109,267,62,260,58" shape="poly">
    x<area href="" coords="290,41,308,111,350,101,382,96,379,71,372,47,368,18" shape="poly">
    ?<area href="" coords="398,14" shape="poly">
    <area href="" coords="91,189,53,253,138,256" shape="poly">
    <area href="" coords="400,17,435,86,472,17" shape="poly">
    <area href="" coords="506,23,583,37,563,117,486,95" shape="poly">
    <area href="" coords="610,55,572,121,634,156,674,92" shape="poly">
    <area href="" coords="697,111,752,167,701,218,646,167" shape="poly">
    <area href="" coords="772,193,730,261,810,256" shape="poly">
    <area href="" coords="754,310,822,290,831,310,845,355,840,367,780,384,770,375" shape="poly">
    <area href="" coords="774,398,774,465,782,474,838,471,852,466,853,403,842,393,785,389" shape="poly">
    <area href="" coords="773,491,755,558,766,569,818,579,831,570,846,513,837,503,783,487" shape="poly">
    <area href="" coords="736,610,814,614,775,678" shape="poly">
    <area href="" coords="701,654,651,711,675,731,704,759,754,708,753,694" shape="poly">
    <area href="" coords="591,745,580,760,589,785,609,817,634,811,676,784,674,762,648,721,634,719" shape="poly">
    <area href="" coords="557,762,494,779,489,799,498,833,507,853,530,854,570,839,580,829,566,768" shape="poly">
    <area href="" coords="392,700,390,764,399,774,467,772,474,755,471,701,457,696" shape="poly">
    <area href="" coords="390,618,470,618,473,688,399,692,387,668" shape="poly">
    <area href="" coords="390,532,391,606,468,608,472,575,470,534" shape="poly">
    <area href="" coords="118,568,180,530,218,593,200,616,156,637" shape="poly">
    <area href="" coords="255,494,193,523,229,593,290,562" shape="poly">
    <area href="" coords="328,447,266,485,302,552,366,518" shape="poly">
    <area href="" coords="168,228,124,296,189,333,228,267" shape="poly">
    <area href="" coords="233,272,199,337,212,350,256,374,270,357,298,306" shape="poly">
    <area href="" coords="302,314,269,379,289,395,330,419,351,385,366,349" shape="poly">
    <area href="" coords="394,99,468,94,474,167,397,173" shape="poly">
    <area href="" coords="394,177,469,179,473,239,462,258,391,255" shape="poly">
    <area href="" coords="393,262,468,260,475,282,471,336,451,338,398,337,390,319,390,296" shape="poly">
    <area href="" coords="700,231,740,291,717,312,674,331,656,302,639,268" shape="poly">
    <area href="" coords="628,275,570,307,604,374,667,340" shape="poly">
    <area href="" coords="556,318,595,381,536,419,506,375,498,345" shape="poly">
    <area href="" coords="741,565,708,631,644,599,678,532" shape="poly">
    <area href="" coords="608,492,671,524,633,592,572,561" shape="poly">
    <area href="" coords="535,450,600,484,561,554,500,517" shape="poly">
    <area href="" coords="432,434,92" shape="circle">
</map> -->
</body>
</body>
</html>