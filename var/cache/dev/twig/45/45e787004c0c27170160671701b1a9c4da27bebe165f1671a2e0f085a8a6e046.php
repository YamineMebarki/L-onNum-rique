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

/* vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php */
class __TwigTemplate_87846895bf965fd7dc245d91c2c8e08b582ebd25984148b0a264b4fb902fa958 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer;
use Symfony\\Component\\Serializer\\SerializerInterface;

class ArrayDenormalizerTest extends TestCase
{
    /**
     * @var ArrayDenormalizer
     */
    private \$denormalizer;

    /**
     * @var SerializerInterface|MockObject
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->serializer = \$this->getMockBuilder('Symfony\\Component\\Serializer\\Serializer')->getMock();
        \$this->denormalizer = new ArrayDenormalizer();
        \$this->denormalizer->setSerializer(\$this->serializer);
    }

    public function testDenormalize()
    {
        \$this->serializer->expects(\$this->at(0))
            ->method('denormalize')
            ->with(['foo' => 'one', 'bar' => 'two'])
            ->willReturn(new ArrayDummy('one', 'two'));

        \$this->serializer->expects(\$this->at(1))
            ->method('denormalize')
            ->with(['foo' => 'three', 'bar' => 'four'])
            ->willReturn(new ArrayDummy('three', 'four'));

        \$result = \$this->denormalizer->denormalize(
            [
                ['foo' => 'one', 'bar' => 'two'],
                ['foo' => 'three', 'bar' => 'four'],
            ],
            __NAMESPACE__.'\\ArrayDummy[]'
        );

        \$this->assertEquals(
            [
                new ArrayDummy('one', 'two'),
                new ArrayDummy('three', 'four'),
            ],
            \$result
        );
    }

    public function testSupportsValidArray()
    {
        \$this->serializer->expects(\$this->once())
            ->method('supportsDenormalization')
            ->with(\$this->anything(), __NAMESPACE__.'\\ArrayDummy', \$this->anything())
            ->willReturn(true);

        \$this->assertTrue(
            \$this->denormalizer->supportsDenormalization(
                [
                    ['foo' => 'one', 'bar' => 'two'],
                    ['foo' => 'three', 'bar' => 'four'],
                ],
                __NAMESPACE__.'\\ArrayDummy[]'
            )
        );
    }

    public function testSupportsInvalidArray()
    {
        \$this->serializer->expects(\$this->any())
            ->method('supportsDenormalization')
            ->willReturn(false);

        \$this->assertFalse(
            \$this->denormalizer->supportsDenormalization(
                [
                    ['foo' => 'one', 'bar' => 'two'],
                    ['foo' => 'three', 'bar' => 'four'],
                ],
                __NAMESPACE__.'\\InvalidClass[]'
            )
        );
    }

    public function testSupportsNoArray()
    {
        \$this->assertFalse(
            \$this->denormalizer->supportsDenormalization(
                ['foo' => 'one', 'bar' => 'two'],
                __NAMESPACE__.'\\ArrayDummy'
            )
        );
    }
}

class ArrayDummy
{
    public \$foo;
    public \$bar;

    public function __construct(\$foo, \$bar)
    {
        \$this->foo = \$foo;
        \$this->bar = \$bar;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer;
use Symfony\\Component\\Serializer\\SerializerInterface;

class ArrayDenormalizerTest extends TestCase
{
    /**
     * @var ArrayDenormalizer
     */
    private \$denormalizer;

    /**
     * @var SerializerInterface|MockObject
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->serializer = \$this->getMockBuilder('Symfony\\Component\\Serializer\\Serializer')->getMock();
        \$this->denormalizer = new ArrayDenormalizer();
        \$this->denormalizer->setSerializer(\$this->serializer);
    }

    public function testDenormalize()
    {
        \$this->serializer->expects(\$this->at(0))
            ->method('denormalize')
            ->with(['foo' => 'one', 'bar' => 'two'])
            ->willReturn(new ArrayDummy('one', 'two'));

        \$this->serializer->expects(\$this->at(1))
            ->method('denormalize')
            ->with(['foo' => 'three', 'bar' => 'four'])
            ->willReturn(new ArrayDummy('three', 'four'));

        \$result = \$this->denormalizer->denormalize(
            [
                ['foo' => 'one', 'bar' => 'two'],
                ['foo' => 'three', 'bar' => 'four'],
            ],
            __NAMESPACE__.'\\ArrayDummy[]'
        );

        \$this->assertEquals(
            [
                new ArrayDummy('one', 'two'),
                new ArrayDummy('three', 'four'),
            ],
            \$result
        );
    }

    public function testSupportsValidArray()
    {
        \$this->serializer->expects(\$this->once())
            ->method('supportsDenormalization')
            ->with(\$this->anything(), __NAMESPACE__.'\\ArrayDummy', \$this->anything())
            ->willReturn(true);

        \$this->assertTrue(
            \$this->denormalizer->supportsDenormalization(
                [
                    ['foo' => 'one', 'bar' => 'two'],
                    ['foo' => 'three', 'bar' => 'four'],
                ],
                __NAMESPACE__.'\\ArrayDummy[]'
            )
        );
    }

    public function testSupportsInvalidArray()
    {
        \$this->serializer->expects(\$this->any())
            ->method('supportsDenormalization')
            ->willReturn(false);

        \$this->assertFalse(
            \$this->denormalizer->supportsDenormalization(
                [
                    ['foo' => 'one', 'bar' => 'two'],
                    ['foo' => 'three', 'bar' => 'four'],
                ],
                __NAMESPACE__.'\\InvalidClass[]'
            )
        );
    }

    public function testSupportsNoArray()
    {
        \$this->assertFalse(
            \$this->denormalizer->supportsDenormalization(
                ['foo' => 'one', 'bar' => 'two'],
                __NAMESPACE__.'\\ArrayDummy'
            )
        );
    }
}

class ArrayDummy
{
    public \$foo;
    public \$bar;

    public function __construct(\$foo, \$bar)
    {
        \$this->foo = \$foo;
        \$this->bar = \$bar;
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/ArrayDenormalizerTest.php");
    }
}
