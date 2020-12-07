<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_62a143f22a1a9e544809b47af8b8d6f32336adfcb3ee90b26a042efbff57ee86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <title>Agence Titanic</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <script src=\"https://kit.fontawesome.com/e5939720c2.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
<header class=\"header\">
    <div class=\"sidebar\">
        <div class=\"logo\"><img src=\"img/logo/titanic_1.png\" alt=\"logo de l'agence\"></div>
        <nav>
            <ul class=\"menu\">
                <li id=\"act-menu\"><a onclick=\"menu()\">menu</a>
                    <ul id=\"sous-menu\" hidden>
                        <li><a href=\"#\">Item 1</a></li>
                        <li><a href=\"#\">Item 2</a></li>
                        <li><a href=\"#\">Item 3</a></li>
                        <li><a href=\"#\">Item 4</a></li>
                        <li><a href=\"#\">Item 5</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-user\"></i></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class=\"title\">
        <div class=\"main-logo\"><img src=\"img/logo/titanic_1.png\" alt=\"logo de l'agence\"></div>
        <h1>Agence Titanic</h1>
        <p>Vos vacances s'annoncent titanesques</p>
        <a href=\"#destination\">Découvrir nos destination</a>
    </div>
</header>
<main>
    <section id=\"destination\">
        <h2>Destinations</h2>
        <div>
            <img src=\"img.jpg\" alt=\"Un bateau et un plagiste sur une boué\">
            <h3>Croisières</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dicta illum minus quo
                similique sit tenetur, voluptate? Blanditiis dolor earum impedit magni molestiae nostrum optio quidem
                reiciendis repellendus repudiandae?</p>
            <button>Découvrir</button>
        </div>
        <div>
            <img src=\"imgoleil.jpg\" alt=\"Un bateau pres de palmier\">
            <h3>Au bout du monde</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad explicabo mollitia quidem. Accusantium alias
                aperiam, beatae, earum esse eum hic itaque, iusto modi officiis porro quod reprehenderit ut velit
                voluptatibus?</p>
            <button>Découvrir</button>
        </div>
        <div>
            <img src=\"img0.jpg\" alt=\"Une vue sur un lac et des chaussures\">
            <h3>Nature & Découvertes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam deserunt harum ipsum molestiae nam
                nisi non pariatur, praesentium, quae quibusdam voluptas. Ad ducimus eius magnam magni optio placeat
                voluptas!</p>
            <button>Découvrir</button>
        </div>
    </section>
    <section>
        <article>
            <img src=\"img1.jpg\" alt=\"une vue sur un set de voyage\">
            <h2></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet cum dolore dolorum et eveniet
                itaque labore nulla, numquam obcaecati odio odit optio voluptate! Beatae cumque doloremque fuga labore
                porro.</p>
            <a href=\"\">Autheur</a>
        </article>
    </section>
    <section>
        <h2>Offres du moment</h2>
        <div><img src=\"\" alt=\"\" srcset=\"\">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, blanditiis delectus distinctio
                dolores ea est eum id, iste labore modi nobis pariatur perferendis placeat repellat saepe sit tenetur,
                vel voluptates?</p>
            <ul>
                <li>item1</li>
                <li>item2</li>
                <li>item3</li>
            </ul>
            <p></p>
            <button></button>
        </div>
        <div><img src=\"\" alt=\"\" srcset=\"\">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, alias consequatur doloribus est
                expedita impedit iste itaque magnam odio! Ab eaque esse et libero minima officia omnis quisquam,
                recusandae tempore.</p>
            <ul>
                <li>item1</li>
                <li>item2</li>
                <li>item3</li>
            </ul>
            <p></p>
            <button></button>
        </div>
        <div><img src=\"\" alt=\"\" srcset=\"\">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa esse exercitationem maiores
                necessitatibus officiis placeat ut? Aut cumque, distinctio dolor id, illum incidunt ipsum, magni odit
                porro sed unde.</p>
            <ul>
                <li>item1</li>
                <li>item2</li>
                <li>item3</li>
            </ul>
            <p></p>
            <button></button>
        </div>
    </section>
    <section></section>
    <section></section>
</main>
<footer>

</footer>
<script src=\"js/main.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "D:\\jonat\\Documents\\GitHub\\CRM\\CDA_2005\\FOAD\\Php\\Titanic\\App\\Template\\Titanic\\index.html");
    }
}