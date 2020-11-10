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

/* vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php */
class __TwigTemplate_e701a80d5b0aa0317047e0af1badbc19cf40b39ef4804b0b990cbc6d5753c6a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Mapping;

use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TestClassMetadataFactory
{
    public static function createClassMetadata(\$withParent = false, \$withInterface = false)
    {
        \$expected = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$foo = new AttributeMetadata('foo');
        \$foo->addGroup('a');
        \$expected->addAttributeMetadata(\$foo);

        \$bar = new AttributeMetadata('bar');
        \$bar->addGroup('b');
        \$bar->addGroup('c');
        \$bar->addGroup('name_converter');
        \$expected->addAttributeMetadata(\$bar);

        \$fooBar = new AttributeMetadata('fooBar');
        \$fooBar->addGroup('a');
        \$fooBar->addGroup('b');
        \$fooBar->addGroup('name_converter');
        \$expected->addAttributeMetadata(\$fooBar);

        \$symfony = new AttributeMetadata('symfony');
        \$expected->addAttributeMetadata(\$symfony);

        if (\$withParent) {
            \$kevin = new AttributeMetadata('kevin');
            \$kevin->addGroup('a');
            \$expected->addAttributeMetadata(\$kevin);

            \$coopTilleuls = new AttributeMetadata('coopTilleuls');
            \$coopTilleuls->addGroup('a');
            \$coopTilleuls->addGroup('b');
            \$expected->addAttributeMetadata(\$coopTilleuls);
        }

        if (\$withInterface) {
            \$symfony->addGroup('a');
            \$symfony->addGroup('name_converter');
        }

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        return \$expected;
    }

    public static function createXmlCLassMetadata()
    {
        \$expected = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$foo = new AttributeMetadata('foo');
        \$foo->addGroup('group1');
        \$foo->addGroup('group2');
        \$expected->addAttributeMetadata(\$foo);

        \$bar = new AttributeMetadata('bar');
        \$bar->addGroup('group2');
        \$expected->addAttributeMetadata(\$bar);

        return \$expected;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Mapping;

use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TestClassMetadataFactory
{
    public static function createClassMetadata(\$withParent = false, \$withInterface = false)
    {
        \$expected = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$foo = new AttributeMetadata('foo');
        \$foo->addGroup('a');
        \$expected->addAttributeMetadata(\$foo);

        \$bar = new AttributeMetadata('bar');
        \$bar->addGroup('b');
        \$bar->addGroup('c');
        \$bar->addGroup('name_converter');
        \$expected->addAttributeMetadata(\$bar);

        \$fooBar = new AttributeMetadata('fooBar');
        \$fooBar->addGroup('a');
        \$fooBar->addGroup('b');
        \$fooBar->addGroup('name_converter');
        \$expected->addAttributeMetadata(\$fooBar);

        \$symfony = new AttributeMetadata('symfony');
        \$expected->addAttributeMetadata(\$symfony);

        if (\$withParent) {
            \$kevin = new AttributeMetadata('kevin');
            \$kevin->addGroup('a');
            \$expected->addAttributeMetadata(\$kevin);

            \$coopTilleuls = new AttributeMetadata('coopTilleuls');
            \$coopTilleuls->addGroup('a');
            \$coopTilleuls->addGroup('b');
            \$expected->addAttributeMetadata(\$coopTilleuls);
        }

        if (\$withInterface) {
            \$symfony->addGroup('a');
            \$symfony->addGroup('name_converter');
        }

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        return \$expected;
    }

    public static function createXmlCLassMetadata()
    {
        \$expected = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');

        \$foo = new AttributeMetadata('foo');
        \$foo->addGroup('group1');
        \$foo->addGroup('group2');
        \$expected->addAttributeMetadata(\$foo);

        \$bar = new AttributeMetadata('bar');
        \$bar->addGroup('group2');
        \$expected->addAttributeMetadata(\$bar);

        return \$expected;
    }
}
", "vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/TestClassMetadataFactory.php");
    }
}
