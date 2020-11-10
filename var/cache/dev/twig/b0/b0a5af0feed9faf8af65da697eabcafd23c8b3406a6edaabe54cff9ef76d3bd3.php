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

/* vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php */
class __TwigTemplate_c9604e8e9517219283f994736405cf871b4727f3848472e6d2c85acd11dd0132 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php"));

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
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadata = new ClassMetadata('name');
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface', \$classMetadata);
    }

    public function testAttributeMetadata()
    {
        \$classMetadata = new ClassMetadata('c');

        \$a1 = new AttributeMetadata('a1');
        \$a2 = new AttributeMetadata('a2');

        \$classMetadata->addAttributeMetadata(\$a1);
        \$classMetadata->addAttributeMetadata(\$a2);

        \$this->assertEquals(['a1' => \$a1, 'a2' => \$a2], \$classMetadata->getAttributesMetadata());
    }

    public function testMerge()
    {
        \$classMetadata1 = new ClassMetadata('c1');
        \$classMetadata2 = new ClassMetadata('c2');

        \$ac1 = new AttributeMetadata('a1');
        \$ac1->addGroup('a');
        \$ac1->addGroup('b');
        \$ac2 = new AttributeMetadata('a1');
        \$ac2->addGroup('b');
        \$ac2->addGroup('c');

        \$classMetadata1->addAttributeMetadata(\$ac1);
        \$classMetadata2->addAttributeMetadata(\$ac2);

        \$classMetadata1->merge(\$classMetadata2);

        \$this->assertSame(['a', 'b', 'c'], \$ac1->getGroups());
        \$this->assertEquals(['a1' => \$ac1], \$classMetadata1->getAttributesMetadata());
    }

    public function testSerialize()
    {
        \$classMetadata = new ClassMetadata('a');

        \$a1 = new AttributeMetadata('b1');
        \$a2 = new AttributeMetadata('b2');

        \$classMetadata->addAttributeMetadata(\$a1);
        \$classMetadata->addAttributeMetadata(\$a2);

        \$serialized = serialize(\$classMetadata);
        \$this->assertEquals(\$classMetadata, unserialize(\$serialized));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php";
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
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadata = new ClassMetadata('name');
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface', \$classMetadata);
    }

    public function testAttributeMetadata()
    {
        \$classMetadata = new ClassMetadata('c');

        \$a1 = new AttributeMetadata('a1');
        \$a2 = new AttributeMetadata('a2');

        \$classMetadata->addAttributeMetadata(\$a1);
        \$classMetadata->addAttributeMetadata(\$a2);

        \$this->assertEquals(['a1' => \$a1, 'a2' => \$a2], \$classMetadata->getAttributesMetadata());
    }

    public function testMerge()
    {
        \$classMetadata1 = new ClassMetadata('c1');
        \$classMetadata2 = new ClassMetadata('c2');

        \$ac1 = new AttributeMetadata('a1');
        \$ac1->addGroup('a');
        \$ac1->addGroup('b');
        \$ac2 = new AttributeMetadata('a1');
        \$ac2->addGroup('b');
        \$ac2->addGroup('c');

        \$classMetadata1->addAttributeMetadata(\$ac1);
        \$classMetadata2->addAttributeMetadata(\$ac2);

        \$classMetadata1->merge(\$classMetadata2);

        \$this->assertSame(['a', 'b', 'c'], \$ac1->getGroups());
        \$this->assertEquals(['a1' => \$ac1], \$classMetadata1->getAttributesMetadata());
    }

    public function testSerialize()
    {
        \$classMetadata = new ClassMetadata('a');

        \$a1 = new AttributeMetadata('b1');
        \$a2 = new AttributeMetadata('b2');

        \$classMetadata->addAttributeMetadata(\$a1);
        \$classMetadata->addAttributeMetadata(\$a2);

        \$serialized = serialize(\$classMetadata);
        \$this->assertEquals(\$classMetadata, unserialize(\$serialized));
    }
}
", "vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/ClassMetadataTest.php");
    }
}
