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

/* vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected */
class __TwigTemplate_0f9a3f12cef4deae4e04864656ef38c470cd3a268879bef107485b82feefbce9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected"));

        // line 1
        echo "
Array
(
    [0] => Content-Type: text/plain; charset=utf-8
    [1] => Cache-Control: no-cache, private
    [2] => Date: Sat, 12 Nov 1955 20:04:00 GMT
    [3] => Set-Cookie: CookieSamesiteStrictTest=StrictValue; path=/; httponly; samesite=strict
)
shutdown
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
Array
(
    [0] => Content-Type: text/plain; charset=utf-8
    [1] => Cache-Control: no-cache, private
    [2] => Date: Sat, 12 Nov 1955 20:04:00 GMT
    [3] => Set-Cookie: CookieSamesiteStrictTest=StrictValue; path=/; httponly; samesite=strict
)
shutdown
", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_samesite_strict.expected");
    }
}
