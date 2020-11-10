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

/* var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php */
class __TwigTemplate_833c3fb22c1f21e62125c302166aec335683f211963fefea16e5b377845fb181 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/Loader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/FileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

\$a = new \\Symfony\\Component\\Config\\Loader\\LoaderResolver();

\$b = new \\Symfony\\Component\\HttpKernel\\Config\\FileLocator((\$this->services['kernel'] ?? \$this->get('kernel', 1)), (\$this->targetDirs[3].'/src/Resources'), [0 => (\$this->targetDirs[3].'/src')]);
\$c = new \\Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader((\$this->privates['annotations.cached_reader'] ?? \$this->getAnnotations_CachedReaderService()));

\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\XmlFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\YamlFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\PhpFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\GlobFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\DirectoryLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader(\$this));
\$a->addLoader(\$c);
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader(\$b, \$c));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader(\$b, \$c));

return \$this->services['routing.loader'] = new \\Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader((\$this->privates['controller_name_converter'] ?? (\$this->privates['controller_name_converter'] = new \\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser((\$this->services['kernel'] ?? \$this->get('kernel', 1))))), \$a, ['utf8' => true]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php";
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
// Returns the public 'routing.loader' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/Loader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/Loader/FileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once \$this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

\$a = new \\Symfony\\Component\\Config\\Loader\\LoaderResolver();

\$b = new \\Symfony\\Component\\HttpKernel\\Config\\FileLocator((\$this->services['kernel'] ?? \$this->get('kernel', 1)), (\$this->targetDirs[3].'/src/Resources'), [0 => (\$this->targetDirs[3].'/src')]);
\$c = new \\Symfony\\Bundle\\FrameworkBundle\\Routing\\AnnotatedRouteControllerLoader((\$this->privates['annotations.cached_reader'] ?? \$this->getAnnotations_CachedReaderService()));

\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\XmlFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\YamlFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\PhpFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\GlobFileLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\DirectoryLoader(\$b));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader(\$this));
\$a->addLoader(\$c);
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader(\$b, \$c));
\$a->addLoader(new \\Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader(\$b, \$c));

return \$this->services['routing.loader'] = new \\Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader((\$this->privates['controller_name_converter'] ?? (\$this->privates['controller_name_converter'] = new \\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser((\$this->services['kernel'] ?? \$this->get('kernel', 1))))), \$a, ['utf8' => true]);
", "var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getRouting_LoaderService.php");
    }
}
