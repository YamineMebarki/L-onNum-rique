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

/* var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php */
class __TwigTemplate_2b1740f63cf6105a718b6248f471d3842f441957e2587ef94971990bdc2f465c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.choice_list_factory.cached' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

return \$this->privates['form.choice_list_factory.cached'] = new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator(new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator(new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory(), (\$this->privates['property_accessor'] ?? \$this->load('getPropertyAccessorService.php'))));
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php";
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
// Returns the private 'form.choice_list_factory.cached' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
include_once \$this->targetDirs[3].'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

return \$this->privates['form.choice_list_factory.cached'] = new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator(new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator(new \\Symfony\\Component\\Form\\ChoiceList\\Factory\\DefaultChoiceListFactory(), (\$this->privates['property_accessor'] ?? \$this->load('getPropertyAccessorService.php'))));
", "var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getForm_ChoiceListFactory_CachedService.php");
    }
}
