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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt */
class __TwigTemplate_a1eb7dff44a1b2811936f1614add7e5d970c4cb6ab912bab5432525f057a981a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt"));

        // line 1
        echo "Array
(
    [Container%s/removed-ids.php] => <?php

return [
    'Psr\\\\Container\\\\ContainerInterface' => true,
    'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
];

    [Container%s/getNonSharedFooService.php] => <?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'non_shared_foo' service.

include_once (\$this->targetDirs[0].'/Fixtures/includes/foo_lazy.php');

\$this->factories['non_shared_foo'] = function (\$lazyLoad = true) {
    return new \\Bar\\FooLazyClass();
};

return \$this->factories['non_shared_foo']();

    [Container%s/ProjectServiceContainer.php] => <?php

namespace Container%s;

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ProjectServiceContainer extends Container
{
    private \$buildParameters;
    private \$containerDir;
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct(array \$buildParameters = [], \$containerDir = __DIR__)
    {
        \$dir = \$this->targetDirs[0] = \\dirname(\$containerDir);
        for (\$i = 1; \$i <= 5; ++\$i) {
            \$this->targetDirs[\$i] = \$dir = \\dirname(\$dir);
        }
        \$this->buildParameters = \$buildParameters;
        \$this->containerDir = \$containerDir;
        \$this->services = \$this->privates = [];
        \$this->fileMap = [
            'non_shared_foo' => 'getNonSharedFooService.php',
        ];

        \$this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require \$this->containerDir.\\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load(\$file, \$lazyLoad = true)
    {
        return require \$this->containerDir.\\DIRECTORY_SEPARATOR.\$file;
    }
}

    [ProjectServiceContainer.php] => <?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\\class_exists(\\Container%s\\ProjectServiceContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container%s/ProjectServiceContainer.php') {
    touch(__DIR__.'/Container%s.legacy');

    return;
}

if (!\\class_exists(ProjectServiceContainer::class, false)) {
    \\class_alias(\\Container%s\\ProjectServiceContainer::class, ProjectServiceContainer::class, false);
}

return new \\Container%s\\ProjectServiceContainer([
    'container.build_hash' => '%s',
    'container.build_id' => '%s',
    'container.build_time' => %d,
], __DIR__.\\DIRECTORY_SEPARATOR.'Container%s');

)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Array
(
    [Container%s/removed-ids.php] => <?php

return [
    'Psr\\\\Container\\\\ContainerInterface' => true,
    'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
];

    [Container%s/getNonSharedFooService.php] => <?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'non_shared_foo' service.

include_once (\$this->targetDirs[0].'/Fixtures/includes/foo_lazy.php');

\$this->factories['non_shared_foo'] = function (\$lazyLoad = true) {
    return new \\Bar\\FooLazyClass();
};

return \$this->factories['non_shared_foo']();

    [Container%s/ProjectServiceContainer.php] => <?php

namespace Container%s;

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ProjectServiceContainer extends Container
{
    private \$buildParameters;
    private \$containerDir;
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct(array \$buildParameters = [], \$containerDir = __DIR__)
    {
        \$dir = \$this->targetDirs[0] = \\dirname(\$containerDir);
        for (\$i = 1; \$i <= 5; ++\$i) {
            \$this->targetDirs[\$i] = \$dir = \\dirname(\$dir);
        }
        \$this->buildParameters = \$buildParameters;
        \$this->containerDir = \$containerDir;
        \$this->services = \$this->privates = [];
        \$this->fileMap = [
            'non_shared_foo' => 'getNonSharedFooService.php',
        ];

        \$this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require \$this->containerDir.\\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load(\$file, \$lazyLoad = true)
    {
        return require \$this->containerDir.\\DIRECTORY_SEPARATOR.\$file;
    }
}

    [ProjectServiceContainer.php] => <?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\\class_exists(\\Container%s\\ProjectServiceContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container%s/ProjectServiceContainer.php') {
    touch(__DIR__.'/Container%s.legacy');

    return;
}

if (!\\class_exists(ProjectServiceContainer::class, false)) {
    \\class_alias(\\Container%s\\ProjectServiceContainer::class, ProjectServiceContainer::class, false);
}

return new \\Container%s\\ProjectServiceContainer([
    'container.build_hash' => '%s',
    'container.build_id' => '%s',
    'container.build_time' => %d,
], __DIR__.\\DIRECTORY_SEPARATOR.'Container%s');

)
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_non_shared_lazy_as_files.AideTxt");
    }
}
