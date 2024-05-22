<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Catalog</title>
    <link rel="stylesheet" href="livre.css">
</head>
<body>
<h1>Nos livres</h1>

<section class="books-container ">
    <?php
    require_once('../db_connect.php');
    require_once('../controllers/livres.php');
    // Replace with your logic to retrieve books from the database
    $livre = new Livre();
    $livres = $livre->getAllBooks();

    if ($livres) {
        foreach ($livres as $livre) :
            ?>
            <article class="book-card">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK8AAACUCAMAAADS8YkpAAAAY1BMVEX///82NjbPz89GRkZKSkrDw8PS0tJQUFAjIyPq6urV1dU8PDyoqKg5OTkxMTH7+/ssLCxjY2NtbW25ubny8vKGhoaNjY1BQUF/f38bGxtaWlrJycnd3d12dnaysrKcnJwPDw+90VutAAADTUlEQVR4nO3abXObOBSGYQSSkRASAmTeLfz/f2UPJNnFjk3TdnG6M8+VmUwysZLbEvAlJ4oAAAAAAAAAAAAAAAAA4FsVaoqFqOtajNnkf2Ghn7JxXSfiSRWH9d2aztWQcq0ZM7pNh7JqwvSFZVk4V+WQtrSOac3ToTp/Zdkf84Njt6yT7UX45/tVqFAxZy29wzdv61z5K2fzu1RiNNPJMJTlMPDWSmeNNrZ3l/rhfhVZqKS0WpvljdGL24SndD5Mm0S9ppfNcTZNSk1TFoswV7qXdMRW8mb8VFt3yRJr+54NlyYPYoxP2bJwZoa/pJcbJm6SvJ/mtHeMNlAPNz+KQmosHb+UVZi8v7lkBDPpsddDMdv16tO3vW98qLhjmvVcfFSoYHqmrU27B6+nXr3+Njsf9aA4tev9oh/2kiwf6OiZrOLlu2IspdHOVfXjU6feNZgl2UG9cWKM6+Xj/V2perhSY9v4yJ8NtV8v8bMzX/ZX9o7uuviwXpbMdUjM014yppYZ2+aaam15ev5Cun6TUM/Job1p9vl+u1PQVUE7Z7Qs673fRr3cR1nKju7d31+iOkdPZNfsP63E+jw78e/vpYeuNu3u5kZ/VW+UccZ/dtf/Tb1UwXdutRV676EXvVvoRe8WetG7hV70bqEXvVvoRe8WetG7hV70bqEXvVvoRe8WetG7hV70bv1/ez+NZdz5Su/4ul59OXfduZnD+GRiaKd3GsPcLMsv+nW9zC4f1sm+T6o8U/czA496vcryKul76Syh9a/qTekPOkJ/1GhtrLyyKhc3O/2pdxJ5xa7SmnXs6H25G17RG4myoouBzrRK7ZW2a5mOkmw4h3//H3/bq8J5YOuElJPXq00/lpciekVvVHzwXsV510rHllkjo8uP0Z1NrxcDvZ/3KbUuj5X3/6yPXtN7T9VNyZcpNNa7c6w2vSruXE8XqnW8bMSjeYjv6CX+FDrd05E7V87x+zzBOJfOLaNnugunJ2M8R/c+H3kslLjQtaytSy4NN7y5tG4ZgXKd2BntnA6dhzFJk++oqVMvTwB6cKyf6Gve1HtLmkPnjYx2cg+d/j3zsxXH9WatZf89e9i8XJSnRwhH5QIAAAAAAAAAAAAAAAAAfKcfS6BLs2iSH6wAAAAASUVORK5CYII=" alt="Book Cover"> <div class="book-info">
                    <h3><?php echo $livre["titre"]; ?></h3>
                    <p> <?php echo $livre["auteur"]; ?></p>
                    <p>ISBN: <?php echo $livre["date_de_pub"]; ?></p>
                    <?php if (isset($livre["genre"])) : ?>
                    <?php endif; ?>
                </div>
            </article>
        <?php
        endforeach;
    } else {
        echo "<p>No books found.</p>";
    }
    ?>
</section>

</body>
</html>
