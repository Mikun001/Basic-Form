<?PHP

$name = filter_input(INPUT_POST, 'name');
$sex = filter_input(INPUT_POST, 'sex');
$birth_date = filter_input(INPUT_POST, 'birth_date');
$spec = filter_input(INPUT_POST, 'spec');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "form";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (msqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
}
else
{
    $sql = "INSERT INTO form (name, sex, birth_date, spec) values ('$name', '$sex', '$birth_date', '$spec')";
    if ($conn->query($sql))
    {
        echo "New record is inserted successfully!";
    }
    else
    {
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
}

>