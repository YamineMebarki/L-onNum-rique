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

/* vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php */
class __TwigTemplate_733fa332f4ac84303b81854e330111f685efc50062d6740e444e5b0f4b76d93f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Reference;

\$container = new ContainerBuilder();

\$container->setParameter('env(BAR)', 'bar');

\$container->register('foo', 'stdClass')->setPublic(true)
   ->addArgument(new Reference('bar_%env(BAR)%'))
   ->addArgument(['baz_%env(BAR)%' => new Reference('baz_%env(BAR)%')]);

\$container->register('bar', 'stdClass')->setPublic(true)
   ->addArgument(new Reference('bar_%env(BAR)%'));

\$container->register('bar_%env(BAR)%', 'stdClass')->setPublic(false);
\$container->register('baz_%env(BAR)%', 'stdClass')->setPublic(false);

return \$container;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Reference;

\$container = new ContainerBuilder();

\$container->setParameter('env(BAR)', 'bar');

\$container->register('foo', 'stdClass')->setPublic(true)
   ->addArgument(new Reference('bar_%env(BAR)%'))
   ->addArgument(['baz_%env(BAR)%' => new Reference('baz_%env(BAR)%')]);

\$container->register('bar', 'stdClass')->setPublic(true)
   ->addArgument(new Reference('bar_%env(BAR)%'));

\$container->register('bar_%env(BAR)%', 'stdClass')->setPublic(false);
\$container->register('baz_%env(BAR)%', 'stdClass')->setPublic(false);

return \$container;
", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_env_in_id.php");
    }
}
