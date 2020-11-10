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

/* vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php */
class __TwigTemplate_8ec88d863cc822d5a9ac0bcf47e85eb8d395f7befb300bf22a85278e852311a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Adds extractors to the property_info service.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyInfoPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$propertyInfoService;
    private \$listExtractorTag;
    private \$typeExtractorTag;
    private \$descriptionExtractorTag;
    private \$accessExtractorTag;
    private \$initializableExtractorTag;

    public function __construct(string \$propertyInfoService = 'property_info', string \$listExtractorTag = 'property_info.list_extractor', string \$typeExtractorTag = 'property_info.type_extractor', string \$descriptionExtractorTag = 'property_info.description_extractor', string \$accessExtractorTag = 'property_info.access_extractor', string \$initializableExtractorTag = 'property_info.initializable_extractor')
    {
        \$this->propertyInfoService = \$propertyInfoService;
        \$this->listExtractorTag = \$listExtractorTag;
        \$this->typeExtractorTag = \$typeExtractorTag;
        \$this->descriptionExtractorTag = \$descriptionExtractorTag;
        \$this->accessExtractorTag = \$accessExtractorTag;
        \$this->initializableExtractorTag = \$initializableExtractorTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->propertyInfoService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->propertyInfoService);

        \$listExtractors = \$this->findAndSortTaggedServices(\$this->listExtractorTag, \$container);
        \$definition->replaceArgument(0, new IteratorArgument(\$listExtractors));

        \$typeExtractors = \$this->findAndSortTaggedServices(\$this->typeExtractorTag, \$container);
        \$definition->replaceArgument(1, new IteratorArgument(\$typeExtractors));

        \$descriptionExtractors = \$this->findAndSortTaggedServices(\$this->descriptionExtractorTag, \$container);
        \$definition->replaceArgument(2, new IteratorArgument(\$descriptionExtractors));

        \$accessExtractors = \$this->findAndSortTaggedServices(\$this->accessExtractorTag, \$container);
        \$definition->replaceArgument(3, new IteratorArgument(\$accessExtractors));

        \$initializableExtractors = \$this->findAndSortTaggedServices(\$this->initializableExtractorTag, \$container);
        \$definition->setArgument(4, new IteratorArgument(\$initializableExtractors));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Adds extractors to the property_info service.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PropertyInfoPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$propertyInfoService;
    private \$listExtractorTag;
    private \$typeExtractorTag;
    private \$descriptionExtractorTag;
    private \$accessExtractorTag;
    private \$initializableExtractorTag;

    public function __construct(string \$propertyInfoService = 'property_info', string \$listExtractorTag = 'property_info.list_extractor', string \$typeExtractorTag = 'property_info.type_extractor', string \$descriptionExtractorTag = 'property_info.description_extractor', string \$accessExtractorTag = 'property_info.access_extractor', string \$initializableExtractorTag = 'property_info.initializable_extractor')
    {
        \$this->propertyInfoService = \$propertyInfoService;
        \$this->listExtractorTag = \$listExtractorTag;
        \$this->typeExtractorTag = \$typeExtractorTag;
        \$this->descriptionExtractorTag = \$descriptionExtractorTag;
        \$this->accessExtractorTag = \$accessExtractorTag;
        \$this->initializableExtractorTag = \$initializableExtractorTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->propertyInfoService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->propertyInfoService);

        \$listExtractors = \$this->findAndSortTaggedServices(\$this->listExtractorTag, \$container);
        \$definition->replaceArgument(0, new IteratorArgument(\$listExtractors));

        \$typeExtractors = \$this->findAndSortTaggedServices(\$this->typeExtractorTag, \$container);
        \$definition->replaceArgument(1, new IteratorArgument(\$typeExtractors));

        \$descriptionExtractors = \$this->findAndSortTaggedServices(\$this->descriptionExtractorTag, \$container);
        \$definition->replaceArgument(2, new IteratorArgument(\$descriptionExtractors));

        \$accessExtractors = \$this->findAndSortTaggedServices(\$this->accessExtractorTag, \$container);
        \$definition->replaceArgument(3, new IteratorArgument(\$accessExtractors));

        \$initializableExtractors = \$this->findAndSortTaggedServices(\$this->initializableExtractorTag, \$container);
        \$definition->setArgument(4, new IteratorArgument(\$initializableExtractors));
    }
}
", "vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/DependencyInjection/PropertyInfoPass.php");
    }
}
