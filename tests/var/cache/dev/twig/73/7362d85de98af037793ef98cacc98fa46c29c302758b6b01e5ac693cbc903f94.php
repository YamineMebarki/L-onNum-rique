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

/* vendor/symfony/flex/README.md */
class __TwigTemplate_e36bbe45bc5651d4e54d8a3cb6c3794f675f3894db65e46e63a8fedf5132a147 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/README.md"));

        // line 1
        echo "<p align=\"center\"><a href=\"https://symfony.com\" target=\"_blank\">
    <img src=\"https://symfony.com/logos/symfony_black_02.svg\">
</a></p>

[Symfony Flex][1] helps developers create [Symfony][2] applications, from the most
simple micro-style projects to the more complex ones with dozens of
dependencies.

[Discover][3] the available recipes.

[1]: https://symfony.com/doc/current/setup/flex.html
[2]: https://symfony.com
[3]: https://flex.symfony.com
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p align=\"center\"><a href=\"https://symfony.com\" target=\"_blank\">
    <img src=\"https://symfony.com/logos/symfony_black_02.svg\">
</a></p>

[Symfony Flex][1] helps developers create [Symfony][2] applications, from the most
simple micro-style projects to the more complex ones with dozens of
dependencies.

[Discover][3] the available recipes.

[1]: https://symfony.com/doc/current/setup/flex.html
[2]: https://symfony.com
[3]: https://flex.symfony.com
", "vendor/symfony/flex/README.md", "/var/www/public/DevLaon/templates/vendor/symfony/flex/README.md");
    }
}
