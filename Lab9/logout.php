<?PHP

session_start();
session_destroy();
echo "you have sucessfuly logout from the website ";
header("Location:index.php");
?>