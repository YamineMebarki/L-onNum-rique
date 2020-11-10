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

/* vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php */
class __TwigTemplate_46acb991f54975f7307a288b501e685d741b8e14f76c5607a98b49e3dcccc3c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy;

/**
 * Covers AbstractObjectNormalizer::ENABLE_MAX_DEPTH and AbstractObjectNormalizer::MAX_DEPTH_HANDLER.
 */
trait MaxDepthTestTrait
{
    abstract protected function getNormalizerForMaxDepth(): NormalizerInterface;

    public function testMaxDepth()
    {
        \$normalizer = \$this->getNormalizerForMaxDepth();

        \$level1 = new MaxDepthDummy();
        \$level1->bar = 'level1';

        \$level2 = new MaxDepthDummy();
        \$level2->bar = 'level2';
        \$level1->child = \$level2;

        \$level3 = new MaxDepthDummy();
        \$level3->bar = 'level3';
        \$level2->child = \$level3;

        \$level4 = new MaxDepthDummy();
        \$level4->bar = 'level4';
        \$level3->child = \$level4;

        \$result = \$normalizer->normalize(\$level1, null, ['enable_max_depth' => true]);

        \$expected = [
            'bar' => 'level1',
            'child' => [
                'bar' => 'level2',
                'child' => [
                    'bar' => 'level3',
                    'child' => [
                        'child' => null,
                    ],
                ],
                'foo' => null,
            ],
            'foo' => null,
        ];

        \$this->assertEquals(\$expected, \$result);
    }

    public function testMaxDepthHandler()
    {
        \$level1 = new MaxDepthDummy();
        \$level1->bar = 'level1';

        \$level2 = new MaxDepthDummy();
        \$level2->bar = 'level2';
        \$level1->child = \$level2;

        \$level3 = new MaxDepthDummy();
        \$level3->bar = 'level3';
        \$level2->child = \$level3;

        \$level4 = new MaxDepthDummy();
        \$level4->bar = 'level4';
        \$level3->child = \$level4;

        \$handlerCalled = false;
        \$maxDepthHandler = function (\$object, \$parentObject, \$attributeName, \$format, \$context) use (&\$handlerCalled) {
            if ('foo' === \$attributeName) {
                return null;
            }

            \$this->assertSame('level4', \$object);
            \$this->assertInstanceOf(MaxDepthDummy::class, \$parentObject);
            \$this->assertSame('bar', \$attributeName);
            \$this->assertSame('test', \$format);
            \$this->assertArrayHasKey('enable_max_depth', \$context);

            \$handlerCalled = true;

            return 'handler';
        };

        \$normalizer = \$this->getNormalizerForMaxDepth();
        \$normalizer->normalize(\$level1, 'test', [
            'enable_max_depth' => true,
            'max_depth_handler' => \$maxDepthHandler,
        ]);

        \$this->assertTrue(\$handlerCalled);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy;

/**
 * Covers AbstractObjectNormalizer::ENABLE_MAX_DEPTH and AbstractObjectNormalizer::MAX_DEPTH_HANDLER.
 */
trait MaxDepthTestTrait
{
    abstract protected function getNormalizerForMaxDepth(): NormalizerInterface;

    public function testMaxDepth()
    {
        \$normalizer = \$this->getNormalizerForMaxDepth();

        \$level1 = new MaxDepthDummy();
        \$level1->bar = 'level1';

        \$level2 = new MaxDepthDummy();
        \$level2->bar = 'level2';
        \$level1->child = \$level2;

        \$level3 = new MaxDepthDummy();
        \$level3->bar = 'level3';
        \$level2->child = \$level3;

        \$level4 = new MaxDepthDummy();
        \$level4->bar = 'level4';
        \$level3->child = \$level4;

        \$result = \$normalizer->normalize(\$level1, null, ['enable_max_depth' => true]);

        \$expected = [
            'bar' => 'level1',
            'child' => [
                'bar' => 'level2',
                'child' => [
                    'bar' => 'level3',
                    'child' => [
                        'child' => null,
                    ],
                ],
                'foo' => null,
            ],
            'foo' => null,
        ];

        \$this->assertEquals(\$expected, \$result);
    }

    public function testMaxDepthHandler()
    {
        \$level1 = new MaxDepthDummy();
        \$level1->bar = 'level1';

        \$level2 = new MaxDepthDummy();
        \$level2->bar = 'level2';
        \$level1->child = \$level2;

        \$level3 = new MaxDepthDummy();
        \$level3->bar = 'level3';
        \$level2->child = \$level3;

        \$level4 = new MaxDepthDummy();
        \$level4->bar = 'level4';
        \$level3->child = \$level4;

        \$handlerCalled = false;
        \$maxDepthHandler = function (\$object, \$parentObject, \$attributeName, \$format, \$context) use (&\$handlerCalled) {
            if ('foo' === \$attributeName) {
                return null;
            }

            \$this->assertSame('level4', \$object);
            \$this->assertInstanceOf(MaxDepthDummy::class, \$parentObject);
            \$this->assertSame('bar', \$attributeName);
            \$this->assertSame('test', \$format);
            \$this->assertArrayHasKey('enable_max_depth', \$context);

            \$handlerCalled = true;

            return 'handler';
        };

        \$normalizer = \$this->getNormalizerForMaxDepth();
        \$normalizer->normalize(\$level1, 'test', [
            'enable_max_depth' => true,
            'max_depth_handler' => \$maxDepthHandler,
        ]);

        \$this->assertTrue(\$handlerCalled);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/MaxDepthTestTrait.php");
    }
}
