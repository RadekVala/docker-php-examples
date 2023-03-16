<?php /** @noinspection ALL */

echo 'Hello World from UTB!';

?>
<html>

<h1>PHP basic syntax</h1>

<?php
// define string constants
const VARIABLES_LABEL= 'Variables';
const CONSTANTS_LABEL = 'Constants';
// define numeric constant
const CONST_NUMBER = 10;
/*
following line won't work
CONST_NUMBER = 5;
*/

// define variables
$variableNumber = 5;

// assign to variable
$variableNumber = $variableNumber + 10;
?>

<h2><?php echo VARIABLES_LABEL . ' and ' . CONSTANTS_LABEL ?></h2>
<p>
    $variableNumber value is: <?= $variableNumber ?>
</p>

<p><?= var_dump($variableNumber) ?></p>
<p><?= var_dump(CONST_NUMBER) ?></p>



<?php
    // define some constant with filename
    const FILENAME = '../composer.json';

    // define string var
    $stringVar = 'Hello';
    // define integer var
    $integerVar = 100;
    // define float var
    $floatVar = 1.89;
    // define boolean var
    $boolVar = false;
    // define array var
    $arrayVar = [ 'apple', 'orange', 1 , 2];
    // define object var
    $objVar = new StdClass();
    $objVar->name = 'Radek';
    $objVar->surname = 'Vala';
    // define null var
    $nullVar = null;
    // define resource var
    $resourceVar = fopen(FILENAME,"r");

?>
<h2>PHP Data types</h2>
<ul>
    <li><?=  var_dump($stringVar) ?></li>
    <li><?=  var_dump($integerVar) ?></li>
    <li><?=  var_dump($floatVar) ?></li>
    <li><?=  var_dump($boolVar) ?></li>
    <li><?=  var_dump($arrayVar) ?></li>
    <li><?=  var_dump($objVar) ?></li>
    <li><?=  var_dump($nullVar) ?></li>
    <li><?=  var_dump($resourceVar) ?></li>
</ul>

<?php
    // shorter version of variables list above using array
    $arrayVar = [
        'Hello',
        100,
        1.89,
        false,
        [ 'apple', 'orange', 1 , 2],
        (object) [ 'name' => 'Radek', 'surname' => 'Vala'],
        null,
        fopen(FILENAME,"r")
    ];
?>

<ul>
    <?php foreach ($arrayVar as $item) { ?>
        <li><?= var_dump($item) ?></li>
    <?php } ?>
</ul>

<h2>Simple usage of file resource</h2>
<?php

echo fread($resourceVar,filesize(FILENAME));
fclose($resourceVar);
?>

<h2>Control structures</h2>
<?php if($arrayVar[3]) { ?>
    <section>
        <h3>This super secret section never shows up!</h3>
        <p>ME: <cite>Give me one sentece with the most secret thing ever for a sci-fi novel.</cite></p>
        <p>AI: <cite>The alien race that had secretly been manipulating humanity for centuries was, in fact, a future version of humanity itself, sent back in time to ensure its own survival.</cite></p>
    </section>
<?php } ?>

<?php
    if(time()%2) {
        echo "even";
    } else {
        echo "odd";
    }
?>

<h3>Foreach</h3>
<ol>
    <?php
        // creates an array from 1 to 1000 with the step of 15
        $array = range(1, 1000, 15);

        foreach($array as $key => $value) {
    ?>
        <li>
            Item index: <?= $key ?> with value: <?= $value ?>
        </li>
    <?php } ?>
</ol>

<h3>For</h3>
<ol>
    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
        <li>Item <?= $i ?></li>
    <?php } ?>
</ol>


<h3>While</h3>
<?php
$i = 1;

while ($i <= 10) {
    echo $i . ", ";
    $i++;
}
?>

<h2>Switch</h2>
<?php

$dayOfWeek = date('w');

switch ($dayOfWeek) {
    case 1:
        echo "It's Monday!";
        break;
    case 2:
        echo "It's Tuesday!";
        break;
    case 3:
        echo "It's Wednesday!";
        break;
    case 4:
        echo "It's Thursday!";
        break;
    case 5:
        echo "It's Friday!";
        break;
    default:
        echo "It's the weekend!";
        break;
}
?>

</html>