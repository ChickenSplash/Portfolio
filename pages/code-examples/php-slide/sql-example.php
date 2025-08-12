&#x3C;?php
require __DIR__ . '/database-config.php'; // Loads up all of the connection information for the following code.

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // The below SQL statement creates the table containing all the information I need by stitching together relational tables.
    $statement = $pdo->query("
    SELECT title, description, posted_at, image_url, name AS author_name, picture_url AS author_picture, type, color FROM news_articles 
    JOIN colors ON news_articles.color_id = colors.id
    JOIN type ON news_articles.type_id = type.id
    JOIN users ON news_articles.user_id = users.id
    ORDER BY posted_at DESC
    LIMIT 3
    ");
    // this then runs the above SQL statement and stores it in the $articles variable as an array.
    $articles = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}