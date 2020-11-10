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

/* vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php */
class __TwigTemplate_f64af86429a1e4b9e626d526996efa438826e4b6626ed8604d091d9683bad51d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

\$container = new ContainerBuilder();

\$container
    ->register('foo1', 'stdClass')
    ->setPublic(true)
;

\$container
    ->register('foo2', 'stdClass')
    ->setPublic(false)
;

\$container
    ->register('foo3', 'stdClass')
    ->setPublic(false)
;

\$container
    ->register('baz', 'stdClass')
    ->setProperty('foo3', new Reference('foo3'))
    ->setPublic(true)
;

\$container
    ->register('bar', 'stdClass')
    ->setProperty('foo1', new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('foo2', new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('foo3', new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('closures', [
        new ServiceClosureArgument(new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
        new ServiceClosureArgument(new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
        new ServiceClosureArgument(new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
    ])
    ->setProperty('iter', new IteratorArgument([
        'foo1' => new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
        'foo2' => new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
        'foo3' => new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
    ]))
    ->setPublic(true)
;

return \$container;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

\$container = new ContainerBuilder();

\$container
    ->register('foo1', 'stdClass')
    ->setPublic(true)
;

\$container
    ->register('foo2', 'stdClass')
    ->setPublic(false)
;

\$container
    ->register('foo3', 'stdClass')
    ->setPublic(false)
;

\$container
    ->register('baz', 'stdClass')
    ->setProperty('foo3', new Reference('foo3'))
    ->setPublic(true)
;

\$container
    ->register('bar', 'stdClass')
    ->setProperty('foo1', new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('foo2', new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('foo3', new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE))
    ->setProperty('closures', [
        new ServiceClosureArgument(new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
        new ServiceClosureArgument(new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
        new ServiceClosureArgument(new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE)),
    ])
    ->setProperty('iter', new IteratorArgument([
        'foo1' => new Reference('foo1', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
        'foo2' => new Reference('foo2', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
        'foo3' => new Reference('foo3', \$container::IGNORE_ON_UNINITIALIZED_REFERENCE),
    ]))
    ->setPublic(true)
;

return \$container;
", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_uninitialized_ref.php");
    }
}
