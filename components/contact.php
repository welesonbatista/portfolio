<?php
$contacts = [
    [
        "url" => "https://www.linkedin.com/in/welesonbatista/",
        "title" => "LinkedIn",
        "icon" => "linkedin-logo",
    ],
    [
        "url" => "https://www.linkedin.com/in/welesonbatista/",
        "title" => "Instagram",
        "icon" => "instagram-logo",
    ],
    [
        "url" => "https://www.linkedin.com/in/welesonbatista/",
        "title" => "GitHub",
        "icon" => "github-logo",
    ],
    [
        "url" => "https://www.linkedin.com/in/welesonbatista/",
        "title" => "E-mail",
        "icon" => "envelope-simple",
    ],

]
?>

<section class="mt-12">
    <ul class="flex flex-col gap-4 items-center">
        <?php foreach ($contacts as $contact) : ?>
            <li>
                <a href="<?= $contact['url'] ?>" target="_blank" class="py-5 px-5 inline-block flex items-center gap-3 w-[400px] bg-gray-300 rounded-lg hover:shadow-blueBorderHover focus:shadow-blueBorderHover outline-none duration-[300ms]">
                    <i class="ph ph-<?= $contact['icon'] ?> text-gray-400 text-[28px] duration-[300ms]"></i>
                    <p class="flex-1 font-maven leading-140"><?= $contact['title'] ?></p>
                    <i class="ph ph-arrow-up-right text-blue text-[20px]"></i>
                </a>

            </li>
        <?php endforeach; ?>
    </ul>


</section>