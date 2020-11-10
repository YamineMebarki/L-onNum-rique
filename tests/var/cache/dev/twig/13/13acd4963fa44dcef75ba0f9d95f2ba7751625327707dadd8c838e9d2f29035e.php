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

/* vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php */
class __TwigTemplate_d3434eb1d884bb43c95b53bbfe55d028037b623e49d8c625f6dbc9ad33bf2083 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\PropertyInfo\\DependencyInjection\\PropertyInfoPass;

class PropertyInfoPassTest extends TestCase
{
    /**
     * @dataProvider provideTags
     */
    public function testServicesAreOrderedAccordingToPriority(\$index, \$tag)
    {
        \$container = new ContainerBuilder();

        \$definition = \$container->register('property_info')->setArguments([null, null, null, null, null]);
        \$container->register('n2')->addTag(\$tag, ['priority' => 100]);
        \$container->register('n1')->addTag(\$tag, ['priority' => 200]);
        \$container->register('n3')->addTag(\$tag);

        \$propertyInfoPass = new PropertyInfoPass();
        \$propertyInfoPass->process(\$container);

        \$expected = new IteratorArgument([
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ]);
        \$this->assertEquals(\$expected, \$definition->getArgument(\$index));
    }

    public function provideTags()
    {
        return [
            [0, 'property_info.list_extractor'],
            [1, 'property_info.type_extractor'],
            [2, 'property_info.description_extractor'],
            [3, 'property_info.access_extractor'],
            [4, 'property_info.initializable_extractor'],
        ];
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        \$container = new ContainerBuilder();
        \$propertyInfoExtractorDefinition = \$container->register('property_info')
            ->setArguments([[], [], [], [], []]);

        \$propertyInfoPass = new PropertyInfoPass();
        \$propertyInfoPass->process(\$container);

        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(0));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(1));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(2));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(3));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(4));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\PropertyInfo\\DependencyInjection\\PropertyInfoPass;

class PropertyInfoPassTest extends TestCase
{
    /**
     * @dataProvider provideTags
     */
    public function testServicesAreOrderedAccordingToPriority(\$index, \$tag)
    {
        \$container = new ContainerBuilder();

        \$definition = \$container->register('property_info')->setArguments([null, null, null, null, null]);
        \$container->register('n2')->addTag(\$tag, ['priority' => 100]);
        \$container->register('n1')->addTag(\$tag, ['priority' => 200]);
        \$container->register('n3')->addTag(\$tag);

        \$propertyInfoPass = new PropertyInfoPass();
        \$propertyInfoPass->process(\$container);

        \$expected = new IteratorArgument([
            new Reference('n1'),
            new Reference('n2'),
            new Reference('n3'),
        ]);
        \$this->assertEquals(\$expected, \$definition->getArgument(\$index));
    }

    public function provideTags()
    {
        return [
            [0, 'property_info.list_extractor'],
            [1, 'property_info.type_extractor'],
            [2, 'property_info.description_extractor'],
            [3, 'property_info.access_extractor'],
            [4, 'property_info.initializable_extractor'],
        ];
    }

    public function testReturningEmptyArrayWhenNoService()
    {
        \$container = new ContainerBuilder();
        \$propertyInfoExtractorDefinition = \$container->register('property_info')
            ->setArguments([[], [], [], [], []]);

        \$propertyInfoPass = new PropertyInfoPass();
        \$propertyInfoPass->process(\$container);

        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(0));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(1));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(2));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(3));
        \$this->assertEquals(new IteratorArgument([]), \$propertyInfoExtractorDefinition->getArgument(4));
    }
}
", "vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/DependencyInjection/PropertyInfoPassTest.php");
    }
}
