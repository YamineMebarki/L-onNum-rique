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

/* vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt */
class __TwigTemplate_90182f8ac90ac6b80dd3df19547f095c8c73961506ac7fe088a1dc6917f545c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt"));

        // line 1
        echo "The <info>%command.name%</info> command creates or updates an entity and repository class.

<info>php %command.full_name% BlogPost</info>

If the argument is missing, the command will ask for the entity class name interactively.

You can also mark this class as an API Platform resource. A hypermedia CRUD API will
automatically be available for this entity class:

<info>php %command.full_name% --api-resource</info>

You can also generate all the getter/setter/adder/remover methods
for the properties of existing entities:

<info>php %command.full_name% --regenerate</info>

You can also *overwrite* any existing methods:

<info>php %command.full_name% --regenerate --overwrite</info>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The <info>%command.name%</info> command creates or updates an entity and repository class.

<info>php %command.full_name% BlogPost</info>

If the argument is missing, the command will ask for the entity class name interactively.

You can also mark this class as an API Platform resource. A hypermedia CRUD API will
automatically be available for this entity class:

<info>php %command.full_name% --api-resource</info>

You can also generate all the getter/setter/adder/remover methods
for the properties of existing entities:

<info>php %command.full_name% --regenerate</info>

You can also *overwrite* any existing methods:

<info>php %command.full_name% --regenerate --overwrite</info>
", "vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt");
    }
}
