<?php
$profiles = [
    [
        "avatar" => "https://github.com/welesonbatista.png",
        "name" => "Weleson Batista",
        "role" => "Desenvolvedor FullStack",
        "about" => "Desenvolvo soluções digitais que transformam necessidades reais em aplicações práticas e funcionais. A tecnologia é o meio pelo qual crio sistemas eficientes, projetados para resolver desafios complexos com precisão e qualidade.",
        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ]
]
?>

<?php foreach ($profiles as $profile) : ?>
    <section class="flex flex-col items-center">

        <div class="rounded-full border-2 border-red w-24 mb-16">
            <img class="rounded-full p-1" src="<?= $profile['avatar'] ?>" alt="foto de perfil weleson batista">
        </div>

        <div class="text-center max-w-2xl">
            <h3 class="font-inconsolata text-xl leading-120">Meu nome é
                <span class="text-red"><?= $profile['name'] ?></span>
                e sou
            </h3>
            <h1 class=" font-asap font-bold text-5xl text-gray-600 leading-120 mt-2"><?= $profile['role'] ?></h1>
            <p class="text-sm font-maven text-gray-400 leading-140 mt-5"><?= $profile['about'] ?></p>
        </div>
        </div>

        <div class="flex pt-20 gap-3 font-inconsolata font-bold leading-120 text-gray-200">
            <?php foreach ($profile['stacks'] as $stack => $color) : ?>
                <span class="bg-<?= $color ?> rounded-full py-1 px-3">
                    <?= $stack ?>
                </span>
            <?php endforeach; ?>
        </div>

    </section>
<?php endforeach; ?>