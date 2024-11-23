<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./tailwind.js"></script>

    <title>Portfolio</title>
</head>

<body class="bg-gray-200 text-gray-500">

    <header class="bg-intro bg-cover bg-no-repeat bg-top py-24">
        <!-- apresentação -->
        <?php include('./components/hero.php'); ?>
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