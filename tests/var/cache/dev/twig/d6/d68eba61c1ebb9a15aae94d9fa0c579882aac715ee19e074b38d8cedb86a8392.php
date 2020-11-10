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

/* public/dist/assets/css/style.css */
class __TwigTemplate_4119c9dc9f68994aee9731e6ad7684bb3af9c4800bb65b65a24459e2e01ae3da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/css/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/css/style.css"));

        // line 1
        echo ":root {
    --couleur-fond: white;
    --couleur-texte:black;
}

body {
    font-size: 1.5em;
}

.mv {
    margin-left: 26%;
}

.responsive {
    max-width: 50%;
    height: auto;
}

a:hover, a:focus, a:active {
    text-decoration: none;
}

.lien {
    color: black;
}

.footer {
    color: var(--couleur-texte);
    background-color: var(--couleur-fond);
    padding-bottom: 3em;
    border-top: 1px solid #242424;
}

.logo {
    max-width: 10%;
    height: auto;
}

.font {
    font-family: 'Gruppo', cursive;
}

.bold {
    font-weight: bold;
}

.list {
    list-style: none;
}

body.cookiewarning {
    padding-bottom: 15em;
}
body div.cookiewarning {
    display: none;
}
body.cookiewarning div.cookiewarning {
    padding: 1em;
    display: block;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index:100;
    background-color:white;
    color: black;
}

/*SCROLL*/
.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #777777;
    color: #eeeeee;
    width: 80px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
    background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
    opacity: 1.0;
}
.scroll-top-wrapper i.fa {
    line-height: inherit;
}
@media all and  (min-width: 200px) and (max-width: 600px)
{
    .responsive {
        max-width: 100%;
        height: auto;
    }

    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 0%;
    }
}

@media all and  (min-width: 575px) and (max-width: 900px)
{
    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 25%;
    }
}

@media all and  (min-width: 775px) and (max-width: 900px)
{
    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 25%;
    }

}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/dist/assets/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(":root {
    --couleur-fond: white;
    --couleur-texte:black;
}

body {
    font-size: 1.5em;
}

.mv {
    margin-left: 26%;
}

.responsive {
    max-width: 50%;
    height: auto;
}

a:hover, a:focus, a:active {
    text-decoration: none;
}

.lien {
    color: black;
}

.footer {
    color: var(--couleur-texte);
    background-color: var(--couleur-fond);
    padding-bottom: 3em;
    border-top: 1px solid #242424;
}

.logo {
    max-width: 10%;
    height: auto;
}

.font {
    font-family: 'Gruppo', cursive;
}

.bold {
    font-weight: bold;
}

.list {
    list-style: none;
}

body.cookiewarning {
    padding-bottom: 15em;
}
body div.cookiewarning {
    display: none;
}
body.cookiewarning div.cookiewarning {
    padding: 1em;
    display: block;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index:100;
    background-color:white;
    color: black;
}

/*SCROLL*/
.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #777777;
    color: #eeeeee;
    width: 80px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
    background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
    opacity: 1.0;
}
.scroll-top-wrapper i.fa {
    line-height: inherit;
}
@media all and  (min-width: 200px) and (max-width: 600px)
{
    .responsive {
        max-width: 100%;
        height: auto;
    }

    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 0%;
    }
}

@media all and  (min-width: 575px) and (max-width: 900px)
{
    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 25%;
    }
}

@media all and  (min-width: 775px) and (max-width: 900px)
{
    .mv {
        margin-left: 0%;
    }

    .list {
        margin-left: -10%;
        list-style: none;
    }
    .home {
        margin-left: 25%;
    }

}", "public/dist/assets/css/style.css", "/var/www/public/DevLaon/templates/public/dist/assets/css/style.css");
    }
}
