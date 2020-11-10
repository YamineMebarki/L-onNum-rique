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

/* vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php */
class __TwigTemplate_b29d039f51f531afadff2e92e1213cac5da296c86cd4725b2fe6823fcf1f7501 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures;

use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct(ContainerInterface \$container)
    {
    }

    public static function getSubscribedServices()
    {
        return ['translator' => TranslatorInterface::class];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures;

use Psr\\Container\\ContainerInterface;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ServiceSubscriber implements ServiceSubscriberInterface
{
    public function __construct(ContainerInterface \$container)
    {
    }

    public static function getSubscribedServices()
    {
        return ['translator' => TranslatorInterface::class];
    }
}
", "vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DependencyInjection/fixtures/ServiceSubscriber.php");
    }
}
