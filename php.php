<!DOCTYPE html>
<html>
    <head>
        <title> PHP Variable, Variable Scope</title>
    </head>
    <body>
        
        <?php 

// Global scope

        $fname = 'Suman';
        var_dump($fname);

echo '<br>';

// Local Scope
function myVar() {
   // global $fname;
    $lname = 'Ali';
    var_dump($fname);
    var_dump($lname);
}
        myVar();

echo '<br>';

// Static Scope

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
        
        ?>
    </body>
</html>