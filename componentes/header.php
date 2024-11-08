<?php
$stack = [
    "GitHub",
    "PHP",
    "CSS",
    "HTML",
    "JavaScript",
];
?>

<header>

    <div class=" bg-cover" style="background-image: url(image/Background_intro.png)">

        <div class="justify-items-center"> <img class="rounded-full w-32" src="https://github.com/welesonbatista.png"
                alt="imagem do proprietario do portfolio">


            <p>Meu nome é Weleson Batista e sou</p>
            <h1>Desenvolvedor de Software</h1>
            <p>Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da
                minha
                paixão
                pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
            <div class="flex gap-4">
                <?php foreach ($stack as $stacks): ?>

                    <div class="display-flex"><?= $stacks ?></div>


                <?php endforeach; ?>
            </div>

        </div>
    </div>
</header>