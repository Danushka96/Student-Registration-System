<?php
echo "<table style='border: solid 2px black;'>";
echo "<tr><th>Index</th><th>First name</th><th>Last name</th><th>School</th><th>Address Line1</th><th>Address Line2</th><th>City</th><th>District</th><th>Phone Number</th><th>Course</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        return  "<td style='width:150px;border:2px solid black;'>" . parent::current().  "</td>";
    }

    function beginChildren() { 
        echo  "<tr>"; 
    } 

    function endChildren() { 
        echo  "</tr>" .  "\n";
    } 
} 

$name=$_POST['name'];
$servername = "sql112.rf.gd";
$username = "rfgd_19758427";
$password = "Esports2016";
$dbname = "rfgd_19758427_freshers";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT index1, fname, lname, school, address1, address2, city, district, phone, course FROM students WHERE fname LIKE '%$name%' OR lname LIKE '%$name%'"); 
    $stmt->execute();
 
    "color:green">// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>