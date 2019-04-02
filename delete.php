<?PHP 
require "connect.php";
$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM mhs WHERE id = $id");
if ($delete) {
    header("Location: read.php");
}else{
    echo("Terjadi Error");
}
?>