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

/* vendor/swiftmailer/swiftmailer/README */
class __TwigTemplate_991580bff09d6e5dd74b5e7e8dfdcf3ba644117c46a45e565a03d4cde061eafe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/README"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/README"));

        // line 1
        echo "Swift Mailer
------------

Swift Mailer is a component based mailing solution for PHP 7.
It is released under the MIT license.

Homepage:      https://swiftmailer.symfony.com/
Documentation: https://swiftmailer.symfony.com/docs/introduction.html
Bugs:          https://github.com/swiftmailer/swiftmailer/issues
Repository:    https://github.com/swiftmailer/swiftmailer

Swift Mailer is highly object-oriented by design and lends itself
to use in complex web application with a great deal of flexibility.

For full details on usage, see the documentation.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/README";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Swift Mailer
------------

Swift Mailer is a component based mailing solution for PHP 7.
It is released under the MIT license.

Homepage:      https://swiftmailer.symfony.com/
Documentation: https://swiftmailer.symfony.com/docs/introduction.html
Bugs:          https://github.com/swiftmailer/swiftmailer/issues
Repository:    https://github.com/swiftmailer/swiftmailer

Swift Mailer is highly object-oriented by design and lends itself
to use in complex web application with a great deal of flexibility.

For full details on usage, see the documentation.
", "vendor/swiftmailer/swiftmailer/README", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/README");
    }
}
