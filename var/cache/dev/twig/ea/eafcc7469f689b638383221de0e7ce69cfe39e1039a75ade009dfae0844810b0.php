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

/* vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt */
class __TwigTemplate_0f94d6fc95f3a49c34328fba81ad0a0e3f3e127b1c31302ffab6ea5529a183fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt"));

        // line 1
        echo "
[33mIn Foo3Command.php line 26:[39m
[37;41m                                              [39;49m
[37;41m  Third exception <fg=blue;bg=red>comment</>  [39;49m
[37;41m                                              [39;49m

[33mIn Foo3Command.php line 23:[39m
[37;41m                                               [39;49m
[37;41m  Second exception <comment>comment</comment>  [39;49m
[37;41m                                               [39;49m

[33mIn Foo3Command.php line 21:[39m
[37;41m                                       [39;49m
[37;41m  First exception <p>this is html</p>  [39;49m
[37;41m                                       [39;49m

[32mfoo3:bar[39m

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
[33mIn Foo3Command.php line 26:[39m
[37;41m                                              [39;49m
[37;41m  Third exception <fg=blue;bg=red>comment</>  [39;49m
[37;41m                                              [39;49m

[33mIn Foo3Command.php line 23:[39m
[37;41m                                               [39;49m
[37;41m  Second exception <comment>comment</comment>  [39;49m
[37;41m                                               [39;49m

[33mIn Foo3Command.php line 21:[39m
[37;41m                                       [39;49m
[37;41m  First exception <p>this is html</p>  [39;49m
[37;41m                                       [39;49m

[32mfoo3:bar[39m

", "vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/application_renderexception3decorated.txt");
    }
}
