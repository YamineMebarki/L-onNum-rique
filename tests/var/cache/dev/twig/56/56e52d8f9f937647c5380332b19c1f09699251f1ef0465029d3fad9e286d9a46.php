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

/* vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php */
class __TwigTemplate_325ad9fc7d87d70311136f4dedd95a1c42dcbaf46ae8391ddc324a5c71d867fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php"));

        // line 1
        echo "<?php

namespace Symfony\\Tests\\InlineRequires;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists;

\$container = new ContainerBuilder();

\$container->register(HotPath\\C1::class)->addTag('container.hot_path')->setPublic(true);
\$container->register(HotPath\\C2::class)->addArgument(new Reference(HotPath\\C3::class))->setPublic(true);
\$container->register(HotPath\\C3::class);
\$container->register(ParentNotExists::class)->setPublic(true);

return \$container;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Tests\\InlineRequires;

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\includes\\HotPath;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\ParentNotExists;

\$container = new ContainerBuilder();

\$container->register(HotPath\\C1::class)->addTag('container.hot_path')->setPublic(true);
\$container->register(HotPath\\C2::class)->addArgument(new Reference(HotPath\\C3::class))->setPublic(true);
\$container->register(HotPath\\C3::class);
\$container->register(ParentNotExists::class)->setPublic(true);

return \$container;
", "vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/containers/container_inline_requires.php");
    }
}
