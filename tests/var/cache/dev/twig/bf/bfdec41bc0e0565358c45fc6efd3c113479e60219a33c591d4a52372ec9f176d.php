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

/* public/dist/assets/js/captcha.js */
class __TwigTemplate_bc074fd219e59ecb4474cd57142009fe722465159c73f4f0078b2ffc37c69436 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/captcha.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/captcha.js"));

        // line 1
        echo "// function captcha qui genere une suite de STR Maj / Min / INT aleatoire
function Captcha() {
    // variable qui stoke les caracteres autorisers pour la generation du captcha
    var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '#', '_', '\"', '(', ')', '[', ']', '-', '~', '&', '°', '' , '=', '*', '/', '{', '}', '|', '`', '\$', '%', ':', ';', ',', '+', '@',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    // variable i qui definira la limite de longueur de mmon captcha
    var i;
    for (i = 0; i < 6; i++) {
        // initialisation de mes sept caracteres selectionner grace a la function math.random qui permet de generer un caractere aleatoirement
        var a = alpha[Math.floor(Math.random() * alpha.length)];
        var b = alpha[Math.floor(Math.random() * alpha.length)];
        var c = alpha[Math.floor(Math.random() * alpha.length)];
        var d = alpha[Math.floor(Math.random() * alpha.length)];
        var e = alpha[Math.floor(Math.random() * alpha.length)];
        var f = alpha[Math.floor(Math.random() * alpha.length)];
        var g = alpha[Math.floor(Math.random() * alpha.length)];
    }
    // variable qui concatene mes variable qui stocke mes caractere selectionner aleatoirement
    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
    // j'affiche le code generer grace a la function innerHTML
    document.getElementById(\"mainCaptcha\").innerHTML = code
    document.getElementById(\"mainCaptcha\").value = code
}
//La méthode split() permet de diviser une chaîne de caractères à partir d'un séparateur pour fournir un tableau de sous-chaînes.
// crée et renvoie une nouvelle chaîne de caractères en concaténant tous les éléments d'un tableau
function removeSpaces(string) {
    return string.split(' ').join('');
}
/**
 * Created by yamine on 29/09/19.
 */
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/dist/assets/js/captcha.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// function captcha qui genere une suite de STR Maj / Min / INT aleatoire
function Captcha() {
    // variable qui stoke les caracteres autorisers pour la generation du captcha
    var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '#', '_', '\"', '(', ')', '[', ']', '-', '~', '&', '°', '' , '=', '*', '/', '{', '}', '|', '`', '\$', '%', ':', ';', ',', '+', '@',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    // variable i qui definira la limite de longueur de mmon captcha
    var i;
    for (i = 0; i < 6; i++) {
        // initialisation de mes sept caracteres selectionner grace a la function math.random qui permet de generer un caractere aleatoirement
        var a = alpha[Math.floor(Math.random() * alpha.length)];
        var b = alpha[Math.floor(Math.random() * alpha.length)];
        var c = alpha[Math.floor(Math.random() * alpha.length)];
        var d = alpha[Math.floor(Math.random() * alpha.length)];
        var e = alpha[Math.floor(Math.random() * alpha.length)];
        var f = alpha[Math.floor(Math.random() * alpha.length)];
        var g = alpha[Math.floor(Math.random() * alpha.length)];
    }
    // variable qui concatene mes variable qui stocke mes caractere selectionner aleatoirement
    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
    // j'affiche le code generer grace a la function innerHTML
    document.getElementById(\"mainCaptcha\").innerHTML = code
    document.getElementById(\"mainCaptcha\").value = code
}
//La méthode split() permet de diviser une chaîne de caractères à partir d'un séparateur pour fournir un tableau de sous-chaînes.
// crée et renvoie une nouvelle chaîne de caractères en concaténant tous les éléments d'un tableau
function removeSpaces(string) {
    return string.split(' ').join('');
}
/**
 * Created by yamine on 29/09/19.
 */
", "public/dist/assets/js/captcha.js", "/var/www/public/DevLaon/templates/public/dist/assets/js/captcha.js");
    }
}
