<?php
echo $this->Form->create('cdcalc');
echo $this->Form->input("calories", array('label' => "Calories / Serving"));
echo $this->Form->input("grams", array("label" => "Grams / Serving"));
echo $this->Form->end("Calculate");

if(!is_null($cd)){
    echo("<hr />");
    echo("The calculated CD for this item is: " . $cd . " c/g<br />");
    echo("This value is ");
    
    if($cd <= 2.25)
        echo("great");
    else if($cd > 2.25 && $cd <= 4.5){
        echo("good");
    } else if($cd > 4.5 && $cd <= 6.75){
        echo("bad");
    } else if($cd > 6.75 && $cd <= 9){
        echo("horrible");
    } else{
        echo("undeterminable");
    }
?><br /><br />
The determination of great/good/bad/horrible is determined based on the concept that the CD will range from 0 to 9.<br /><br />

0 - water (absolutely no calories)<br />
9 - fats (makes up the most in calories)<br /><br />

This is more meant to offer a simple understanding of how Volumetric considers the "healthiness" of a food item.
<?php
}
?>