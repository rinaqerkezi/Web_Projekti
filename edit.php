<?php
include 'connect.php';
//require('Database.php');

class EditUser
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function update($id, $emri, $mbiemri, $email, $password)
    {
        $sql = "UPDATE userss SET Emri=?, Mbiemri=?, Emaili=?, Passwordi=? WHERE id=?";
        $statement = $this->conn->prepare($sql);
        $statement->execute([$emri, $mbiemri, $email, $password, $id]);
        echo "<script>alert('Update was successful');</script>";


    }
    

    public function closeConnection()
    {
        $this->conn->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $emri = $_POST["Emri"];
    $mbiemri = $_POST["Mbiemri"];
    $email = $_POST["Emaili"];
    $password = $_POST["Passwordi"];

    $editUser = new EditUser($conn);
    $editUser->update($id, $emri, $mbiemri, $email, $password);
    $editUser->closeConnection();
}
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<form action="" method="get" id="editForm">

    <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>" />

    <label for="Emri">Emri:</label>
    <input type="text" id="Emri" name="Emri" required />
    <div class="error-message" id="EmriError"></div>

    <label for="Mbiemri">Mbiemri:</label>
    <input type="text" id="Mbiemri" name="Mbiemri" required />
    <div class="error-message" id="MbiemriError"></div>

    <label for="Emaili">Email:</label>
    <input type="text" id="Emaili" name="Emaili" required />
    <div class="error-message" id="EmailiError"></div>

    <label for="Passwordi">Password:</label>
    <input type="text" id="Passwordi" name="Passwordi" required />
    <div class="error-message" id="PasswordiError"></div>

    <button type="submit">Update User</button>
</form>

</div>

</body>
</html>
