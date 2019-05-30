<?php
function multi($num1,$num2,$to_words = NULL){
$con=$num1;
$ans=$num1;
$state=$to_words;

for($i=0;$i<=$num2-2;$i++){
  $ans=$ans+$con;
}
echo $ans;

//echo $state;
if ($state=="true"){

  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  echo $f->format($ans);

}

}


multi(1,3,'true');
//multi(2,3);
//multi (5,6);

//$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
//echo $f->format(1432);


 ?>
