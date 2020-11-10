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

/* public/dist/assets/js/cookiesBootstrap.js */
class __TwigTemplate_e361f6a0593b555131109a99b03670c1573c82858a01bd83460e621af700a570 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/cookiesBootstrap.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/dist/assets/js/cookiesBootstrap.js"));

        // line 1
        echo "/*CSS body.cookiewarning {
    padding-bottom: 15em;
}
body div.cookiewarning {
    display: none;
}
body.cookiewarning div.cookiewarning {
    padding: 1em;\t
    display: block;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 100;
    background-color: lightblue;
    color: black;
}

body .removecookie {
    display: inline-block;
}

body.cookiewarning .removecookie {
    display: none;
}
*/
/*<div class=\"cookiewarning text-center\">
 <h3>Bienvenue sur La Capsule</h3>
 <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies ou autres traceurs pour améliorer et personnaliser votre navigation sur le site, réaliser des statistiques et mesures d'audiences, vous proposer des produits et services ciblés et adaptés à vos centres d'intérêt et vous offrir des fonctionnalités relatives aux réseaux et médias sociaux. .</p>
 <span class=\"btn btn-primary btn-xl\">Accepter</span>
 <a href=\"https://google.fr\"><span class=\"btn btn-danger btn-xl\">Refuser</span></a>
 </div>*/
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = \"; expires=\" + date.toGMTString();
    } else
        var expires = \"\";
    document.cookie = name + \"=\" + value + expires + \"; path=/\";
}

function readCookie(name) {
    var nameEQ = name + \"=\";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, \"\", -1);
}
var \$body = \$(\"body\"),
        sCookieName = \"cookiewarning\",
        \$cookiewarning = \$(\"div.\" + sCookieName);

function setCookieWarning(active) {
    (!!active) ? \$body.addClass(sCookieName) : \$body.removeClass(sCookieName)
}
\$cookiewarning.on(\"click\", function () {
    createCookie(sCookieName, 1, 365)
    setCookieWarning(false);
});
// cookie warning
if (readCookie(sCookieName) != 1) {
    setCookieWarning(true);
}
\$(\".removecookie\").on(\"click\", function () {
    eraseCookie(sCookieName);
    setCookieWarning(false);
})


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/dist/assets/js/cookiesBootstrap.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*CSS body.cookiewarning {
    padding-bottom: 15em;
}
body div.cookiewarning {
    display: none;
}
body.cookiewarning div.cookiewarning {
    padding: 1em;\t
    display: block;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 100;
    background-color: lightblue;
    color: black;
}

body .removecookie {
    display: inline-block;
}

body.cookiewarning .removecookie {
    display: none;
}
*/
/*<div class=\"cookiewarning text-center\">
 <h3>Bienvenue sur La Capsule</h3>
 <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies ou autres traceurs pour améliorer et personnaliser votre navigation sur le site, réaliser des statistiques et mesures d'audiences, vous proposer des produits et services ciblés et adaptés à vos centres d'intérêt et vous offrir des fonctionnalités relatives aux réseaux et médias sociaux. .</p>
 <span class=\"btn btn-primary btn-xl\">Accepter</span>
 <a href=\"https://google.fr\"><span class=\"btn btn-danger btn-xl\">Refuser</span></a>
 </div>*/
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = \"; expires=\" + date.toGMTString();
    } else
        var expires = \"\";
    document.cookie = name + \"=\" + value + expires + \"; path=/\";
}

function readCookie(name) {
    var nameEQ = name + \"=\";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, \"\", -1);
}
var \$body = \$(\"body\"),
        sCookieName = \"cookiewarning\",
        \$cookiewarning = \$(\"div.\" + sCookieName);

function setCookieWarning(active) {
    (!!active) ? \$body.addClass(sCookieName) : \$body.removeClass(sCookieName)
}
\$cookiewarning.on(\"click\", function () {
    createCookie(sCookieName, 1, 365)
    setCookieWarning(false);
});
// cookie warning
if (readCookie(sCookieName) != 1) {
    setCookieWarning(true);
}
\$(\".removecookie\").on(\"click\", function () {
    eraseCookie(sCookieName);
    setCookieWarning(false);
})


", "public/dist/assets/js/cookiesBootstrap.js", "/var/www/public/DevLaon/templates/public/dist/assets/js/cookiesBootstrap.js");
    }
}
