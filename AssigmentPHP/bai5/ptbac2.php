<?php
  function giaiptbac1($A,$B) {
         if($A==0){
                     if($B==0)
                     $nghiem="Phương trình có vô số nghiệm";
                     if($B<>0)
                     $nghiem="Phương trình vô nghiệm";
         } else {
                   $nghiem= -($B/$A);

         } return $nghiem;
  } 
  function giaiptbac2($A,$B,$C){
          if ($A==0){
            $nghiem=   giaiptbac1($B,$C);
          }
          else {
             $denta= $B * $B - 4 *$A *$C;
                 if($denta<0) {
                    $nghiem="Phương trình vô nghiệm";
                 }
                   
                 if ($denta==0) {
                    $nghiem= "Phương trình có nghiệm kép x1=x2=".-$B/2*$A; 
                 }
                   
                   if($denta>0){
                   
                    $x1= (-$B + sqrt($denta) ) / 2*$A;
                    $x2= (-$B - sqrt($denta) ) / 2*$A;
                    $nghiem="Phương trình có 2 nghiệm x1,x2 riêng biệt là: ". $x1 .",".$x2;
                   }
                   
          }
          return $nghiem;
  }
if (isset($_POST["a"])  && isset($_POST["b"])   &&isset($_POST["c"])   ){
         $nghiem= giaiptbac2($_POST["a"],$_POST["b"],$_POST["c"]);

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="ptbac2.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" value=" <?php echo htmlspecialchars($_POST["a"])   ?> " />
 X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" value="<?php echo htmlspecialchars($_POST["b"])   ?>" />
 X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" value="<?php echo htmlspecialchars($_POST["c"])   ?>" />
 =0</td>
</tr>
<tr>
<td colspan="4">
 Nghiệm 
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="400" value="<?php echo htmlspecialchars($nghiem)   ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" 
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>
