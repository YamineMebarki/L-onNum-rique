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

/* var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php */
class __TwigTemplate_41ae9feac9cc67d58f285e0d2471dd617ba6d0f1e3a998cfd500ff44ace8ed1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.cache_clear_query_cache_command' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
include_once \$this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

\$this->privates['doctrine.cache_clear_query_cache_command'] = \$instance = new \\Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand();

\$instance->setName('doctrine:cache:clear-query');

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.cache_clear_query_cache_command' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
include_once \$this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

\$this->privates['doctrine.cache_clear_query_cache_command'] = \$instance = new \\Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand();

\$instance->setName('doctrine:cache:clear-query');

return \$instance;
", "var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getDoctrine_CacheClearQueryCacheCommandService.php");
    }
}