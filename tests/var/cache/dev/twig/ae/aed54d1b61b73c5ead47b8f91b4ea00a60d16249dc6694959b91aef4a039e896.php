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

/* var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php */
class __TwigTemplate_0f0cfb7a44259ea183b1a19d4068f888bcbfa426cfce647edfae80c359d112f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.mapping.cache_warmer' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

return \$this->privates['validator.mapping.cache_warmer'] = new \\Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer((\$this->privates['validator.builder'] ?? \$this->getValidator_BuilderService()), (\$this->targetDirs[0].'/validation.php'));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php";
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
// Returns the private 'validator.mapping.cache_warmer' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
include_once \$this->targetDirs[3].'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

return \$this->privates['validator.mapping.cache_warmer'] = new \\Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer((\$this->privates['validator.builder'] ?? \$this->getValidator_BuilderService()), (\$this->targetDirs[0].'/validation.php'));
", "var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getValidator_Mapping_CacheWarmerService.php");
    }
}
