<?php
$dbserver = "127.0.0.1";    // localhost
$dbuser = "root";
$dbpwd = "";
$dbname = "cpredictor1";

function connectDB()
{
    global $dbserver, $dbuser, $dbpwd, $dbname;
    $conn = new mysqli($dbserver, $dbuser, $dbpwd, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function my_iud($query) // insert, update, delete
{
    $conn = connectDB();
    $conn->query($query);
    $n = $conn->affected_rows;
    $conn->close();
    return $n;
}

function my_select($query)
{
    $conn = connectDB();
    $result = $conn->query($query);
    $conn->close();
    return $result;
}

// to be used when SQL query returns a single value
function my_one($query)
{
    $conn = connectDB();
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $value = $row[array_keys($row)[0]]; // Get the first column value
        $result->close();
        $conn->close();
        return $value;
    } else {
        $conn->close();
        return false;
    }
}

function verifyuser()
{
    $u = "";
    $p = "";

    if (isset($_COOKIE['cun']) && isset($_COOKIE['cpwd'])) {
        $u = $_COOKIE['cun'];
        $p = $_COOKIE['cpwd'];
    } else {
        if (isset($_SESSION['sun']) && isset($_SESSION['spwd'])) {
            $u = $_SESSION['sun'];
            $p = $_SESSION['spwd'];
        }
    }

    $query = "select count(*) from siteuser where username=? and pwd=?";
    $conn = connectDB();
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    $stmt->bind_result($n);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    return ($n == 1);
}

// ... (similar changes for fetchusername, fetchrole, etc.)
?>
