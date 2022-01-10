$server = "localhost"
$username = "root"
$password = ""
$dbname ="recas-mini"

// now connecting
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
die("database connection fail")
}

