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

/* vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php */
class __TwigTemplate_b14e44446c25b60e2f252a1c26918cd9d0a44f0347ec395c6bce16b43712a387 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AttributeMetadataTest extends TestCase
{
    public function testInterface()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadataInterface', \$attributeMetadata);
    }

    public function testGetName()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$this->assertEquals('name', \$attributeMetadata->getName());
    }

    public function testGroups()
    {
        \$attributeMetadata = new AttributeMetadata('group');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('b');

        \$this->assertEquals(['a', 'b'], \$attributeMetadata->getGroups());
    }

    public function testMaxDepth()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$attributeMetadata->setMaxDepth(69);

        \$this->assertEquals(69, \$attributeMetadata->getMaxDepth());
    }

    public function testSerializedName()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$attributeMetadata->setSerializedName('serialized_name');

        \$this->assertEquals('serialized_name', \$attributeMetadata->getSerializedName());
    }

    public function testMerge()
    {
        \$attributeMetadata1 = new AttributeMetadata('a1');
        \$attributeMetadata1->addGroup('a');
        \$attributeMetadata1->addGroup('b');

        \$attributeMetadata2 = new AttributeMetadata('a2');
        \$attributeMetadata2->addGroup('a');
        \$attributeMetadata2->addGroup('c');
        \$attributeMetadata2->setMaxDepth(2);
        \$attributeMetadata2->setSerializedName('a3');

        \$attributeMetadata1->merge(\$attributeMetadata2);

        \$this->assertEquals(['a', 'b', 'c'], \$attributeMetadata1->getGroups());
        \$this->assertEquals(2, \$attributeMetadata1->getMaxDepth());
        \$this->assertEquals('a3', \$attributeMetadata1->getSerializedName());
    }

    public function testSerialize()
    {
        \$attributeMetadata = new AttributeMetadata('attribute');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('b');
        \$attributeMetadata->setMaxDepth(3);
        \$attributeMetadata->setSerializedName('serialized_name');

        \$serialized = serialize(\$attributeMetadata);
        \$this->assertEquals(\$attributeMetadata, unserialize(\$serialized));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AttributeMetadataTest extends TestCase
{
    public function testInterface()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\AttributeMetadataInterface', \$attributeMetadata);
    }

    public function testGetName()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$this->assertEquals('name', \$attributeMetadata->getName());
    }

    public function testGroups()
    {
        \$attributeMetadata = new AttributeMetadata('group');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('b');

        \$this->assertEquals(['a', 'b'], \$attributeMetadata->getGroups());
    }

    public function testMaxDepth()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$attributeMetadata->setMaxDepth(69);

        \$this->assertEquals(69, \$attributeMetadata->getMaxDepth());
    }

    public function testSerializedName()
    {
        \$attributeMetadata = new AttributeMetadata('name');
        \$attributeMetadata->setSerializedName('serialized_name');

        \$this->assertEquals('serialized_name', \$attributeMetadata->getSerializedName());
    }

    public function testMerge()
    {
        \$attributeMetadata1 = new AttributeMetadata('a1');
        \$attributeMetadata1->addGroup('a');
        \$attributeMetadata1->addGroup('b');

        \$attributeMetadata2 = new AttributeMetadata('a2');
        \$attributeMetadata2->addGroup('a');
        \$attributeMetadata2->addGroup('c');
        \$attributeMetadata2->setMaxDepth(2);
        \$attributeMetadata2->setSerializedName('a3');

        \$attributeMetadata1->merge(\$attributeMetadata2);

        \$this->assertEquals(['a', 'b', 'c'], \$attributeMetadata1->getGroups());
        \$this->assertEquals(2, \$attributeMetadata1->getMaxDepth());
        \$this->assertEquals('a3', \$attributeMetadata1->getSerializedName());
    }

    public function testSerialize()
    {
        \$attributeMetadata = new AttributeMetadata('attribute');
        \$attributeMetadata->addGroup('a');
        \$attributeMetadata->addGroup('b');
        \$attributeMetadata->setMaxDepth(3);
        \$attributeMetadata->setSerializedName('serialized_name');

        \$serialized = serialize(\$attributeMetadata);
        \$this->assertEquals(\$attributeMetadata, unserialize(\$serialized));
    }
}
", "vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/AttributeMetadataTest.php");
    }
}
