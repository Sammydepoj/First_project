<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>Chess Board Using nested loop</h1>
<table width="400px" cellspacing="0px" cellpadding="0px" border="2px">

    <?php
$value=0;
for ($col=0;$col<8;$col++){

    echo"<tr>";
    $value=$col;
    for($row=0;$row<8;$row++){
        if ($value%2==0){
            echo"<td height=30px width=30px bgcolor=red</td>";
                    $value++;
        }
        else{
            echo"<td height=30px width=30px bgcolor=blue</td>";
                    $value++;
        }
    }
    echo"</tr>";
}
?>
</table>








</body>

</html>