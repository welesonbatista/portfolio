<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Portfolio</title>
</head>

<body>

    <header>
        <!-- apresentação -->
        <?php include('./components/header.php'); ?>
    </header>

    <main>
        <!-- projects -->
        <section>
            <?php include('./components/projects.php'); ?>
        </section>
    </main>

    <footer>
        <!-- contact -->
        <div>
            <?php include('./components/contact.php'); ?>
        </div>
    </footer>
</body>

</html>