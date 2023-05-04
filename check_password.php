$passwords = array('password123', 'letmein', 'secret');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
    $password = $_POST['password'];
    if (in_array($password, $passwords)) {
        echo 'valid';
    } else {
        echo 'invalid';
    }
}
