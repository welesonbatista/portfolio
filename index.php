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

    <main class="flex flex-col gap-14 pt-6 pb-36">
        <!-- projects -->
        <section class="text-center">
            <h3 class="font-inconsolata leading-120 text-xl text-red mb-2">Meu Trabalho</h3>
            <h2 class="font-asap leading-120 font-bold text-2xl text-gray-600">Veja os projetos em destaque</h2>
        </section>
        <?php include('./components/projects.php'); ?>
    </main>

    <footer class="text-center">
        <!-- contact -->
        <div>
            <?php include('./components/contact.php'); ?>
        </div>
    </footer>
</body>

</html>