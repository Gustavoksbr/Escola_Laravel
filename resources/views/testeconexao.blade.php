<?php try {
    $pdo = new PDO(
        'mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_DATABASE'),
        getenv('DB_USERNAME'),
        getenv('DB_PASSWORD')
    );
    echo "<h1>Conexão bem-sucedida!</h1>";
} catch (PDOException $e) {
    echo "<p>Falha na conexão: " . $e->getMessage()."</p>";
}
?>