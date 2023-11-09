function Logar() {
    $username = $_POST['user'];
    $senha = $_POST['password'];

    if ($username === "admin@demo.com" && $senha === "admin") {
        header("Location: Index.html");
        exit();
    } else {
        echo '<span class="span-required" style="display: flex;">Mensagem de erro</span>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Logar();
}