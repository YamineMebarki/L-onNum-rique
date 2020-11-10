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

/* vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php */
class __TwigTemplate_2a9f47b34d7a7eb93d9caf6591a5c2aba222d71e8d39ab003a7d2e3b9e658537 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\DataTransformer;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\DataTransformer\\CollectionToArrayTransformer;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionToArrayTransformerTest extends TestCase
{
    /**
     * @var CollectionToArrayTransformer
     */
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new CollectionToArrayTransformer();
    }

    public function testTransform()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertSame(\$array, \$this->transformer->transform(new ArrayCollection(\$array)));
    }

    /**
     * This test is needed for cases when getXxxs() in the entity returns the
     * result of \$collection->toArray(), in order to prevent modifications of
     * the inner collection.
     *
     * See https://github.com/symfony/symfony/pull/9308
     */
    public function testTransformArray()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertSame(\$array, \$this->transformer->transform(\$array));
    }

    public function testTransformNull()
    {
        \$this->assertSame([], \$this->transformer->transform(null));
    }

    public function testTransformExpectsArrayOrCollection()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('Foo');
    }

    public function testReverseTransform()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertEquals(new ArrayCollection(\$array), \$this->transformer->reverseTransform(\$array));
    }

    public function testReverseTransformEmpty()
    {
        \$this->assertEquals(new ArrayCollection(), \$this->transformer->reverseTransform(''));
    }

    public function testReverseTransformNull()
    {
        \$this->assertEquals(new ArrayCollection(), \$this->transformer->reverseTransform(null));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\DataTransformer;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\DataTransformer\\CollectionToArrayTransformer;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionToArrayTransformerTest extends TestCase
{
    /**
     * @var CollectionToArrayTransformer
     */
    private \$transformer;

    protected function setUp(): void
    {
        \$this->transformer = new CollectionToArrayTransformer();
    }

    public function testTransform()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertSame(\$array, \$this->transformer->transform(new ArrayCollection(\$array)));
    }

    /**
     * This test is needed for cases when getXxxs() in the entity returns the
     * result of \$collection->toArray(), in order to prevent modifications of
     * the inner collection.
     *
     * See https://github.com/symfony/symfony/pull/9308
     */
    public function testTransformArray()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertSame(\$array, \$this->transformer->transform(\$array));
    }

    public function testTransformNull()
    {
        \$this->assertSame([], \$this->transformer->transform(null));
    }

    public function testTransformExpectsArrayOrCollection()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\TransformationFailedException');
        \$this->transformer->transform('Foo');
    }

    public function testReverseTransform()
    {
        \$array = [
            2 => 'foo',
            3 => 'bar',
        ];

        \$this->assertEquals(new ArrayCollection(\$array), \$this->transformer->reverseTransform(\$array));
    }

    public function testReverseTransformEmpty()
    {
        \$this->assertEquals(new ArrayCollection(), \$this->transformer->reverseTransform(''));
    }

    public function testReverseTransformNull()
    {
        \$this->assertEquals(new ArrayCollection(), \$this->transformer->reverseTransform(null));
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Form/DataTransformer/CollectionToArrayTransformerTest.php");
    }
}
