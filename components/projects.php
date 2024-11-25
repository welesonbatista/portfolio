<?php
$projects = [
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
    [
        "thumb" => "https://github.com/welesonbatista.png",
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",

        "stacks" => [
            "GitHub" => "green",
            "Laravel" => "purple",
            "TailwindCSS" => "blue",
            "React.Js" => "red",
            "JavaScript" => "yellow",
        ],
    ],
]
?>
<section class="grid grid-cols-2 grid-rows-3 gap-6 mx-auto">

    <?php foreach ($projects as $project): ?>
        <a href="https://github.com/welesonbatista" target="_blank">
            <article class="rounded-xl bg-gray-300 flex gap-4 p-3 max-w-[508px] hover:shadow-grayBorderHover focus:shadow-grayBorderHover outline-none duration-[300ms]">
                <div class="my-auto">
                    <img class="rounded-lg max-w-[224px] max-h-[156px]" src="<?= $project['thumb'] ?>" alt="">
                </div>

                <div class="flex flex-col gap-2 px-1 py-2 justify-between">
                    <div>
                        <h3 class="font-asap leading-120 font-bold text-gray-600 mb-2"><?= $project['title'] ?></h3>
                        <p class="font-maven leading-140 text-sm text-gray-500"><?= $project['description'] ?></p>
                    </div>
                    <div class="flex flex-wrap gap-2 font-inconsolata text-xs font-bold text-gray-200 ">
                        <?php foreach ($project['stacks'] as $stack => $color): ?>
                            <span class="rounded-full bg-<?= $color ?> py-1 px-2"><?= $stack ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        </a>
    <?php endforeach; ?>
</section>