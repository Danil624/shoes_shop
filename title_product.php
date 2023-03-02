<? include ("connect.php");

$query = "SELECT * FROM books WHERE categ= 1";     
$rs_result = mysqli_query ($conn, $query);    

while ($row = mysqli_fetch_array($rs_result)) 
{    

echo ' ';
}
?>