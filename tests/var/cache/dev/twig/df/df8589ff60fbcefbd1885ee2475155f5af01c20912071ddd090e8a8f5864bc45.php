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

/* vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php */
class __TwigTemplate_6e730e7c3e097fc7e5331b28f18335d88f14066e90735e9382030985c8e39caf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::CALLBACKS.
 */
trait CallbacksTestTrait
{
    abstract protected function getNormalizerForCallbacks(): NormalizerInterface;

    /**
     * @dataProvider provideCallbacks
     */
    public function testCallbacks(\$callbacks, \$valueBar, \$result)
    {
        \$normalizer = \$this->getNormalizerForCallbacks();

        \$obj = new CallbacksObject();
        \$obj->bar = \$valueBar;

        \$this->assertEquals(
            \$result,
            \$normalizer->normalize(\$obj, 'any', ['callbacks' => \$callbacks])
        );
    }

    /**
     * @dataProvider provideInvalidCallbacks()
     */
    public function testUncallableCallbacks(\$callbacks)
    {
        \$normalizer = \$this->getNormalizerForCallbacks();

        \$obj = new CallbacksObject();

        \$this->markTestSkipped('Callback validation for callbacks in the context has been forgotten. See https://github.com/symfony/symfony/pull/30950');
        \$this->expectException(InvalidArgumentException::class);
        \$normalizer->normalize(\$obj, null, ['callbacks' => \$callbacks]);
    }

    public function provideCallbacks()
    {
        return [
            'Change a string' => [
                [
                    'bar' => function (\$bar) {
                        \$this->assertEquals('baz', \$bar);

                        return 'baz';
                    },
                ],
                'baz',
                ['bar' => 'baz'],
            ],
            'Null an item' => [
                [
                    'bar' => function (\$value, \$object, \$attributeName, \$format, \$context) {
                        \$this->assertSame('baz', \$value);
                        \$this->assertInstanceOf(CallbacksObject::class, \$object);
                        \$this->assertSame('bar', \$attributeName);
                        \$this->assertSame('any', \$format);
                        \$this->assertArrayHasKey('circular_reference_limit_counters', \$context);
                    },
                ],
                'baz',
                ['bar' => null],
            ],
            'Format a date' => [
                [
                    'bar' => function (\$bar) {
                        \$this->assertInstanceOf(\\DateTime::class, \$bar);

                        return \$bar->format('d-m-Y H:i:s');
                    },
                ],
                new \\DateTime('2011-09-10 06:30:00'),
                ['bar' => '10-09-2011 06:30:00'],
            ],
            'Collect a property' => [
                [
                    'bar' => function (array \$bars) {
                        \$result = '';
                        foreach (\$bars as \$bar) {
                            \$result .= \$bar->bar;
                        }

                        return \$result;
                    },
                ],
                [new CallbacksObject('baz'), new CallbacksObject('quux')],
                ['bar' => 'bazquux'],
            ],
            'Count a property' => [
                [
                    'bar' => function (array \$bars) {
                        return \\count(\$bars);
                    },
                ],
                [new CallbacksObject(), new CallbacksObject()],
                ['bar' => 2],
            ],
        ];
    }

    public function provideInvalidCallbacks()
    {
        return [
            [['bar' => null]],
            [['bar' => 'thisisnotavalidfunction']],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::CALLBACKS.
 */
trait CallbacksTestTrait
{
    abstract protected function getNormalizerForCallbacks(): NormalizerInterface;

    /**
     * @dataProvider provideCallbacks
     */
    public function testCallbacks(\$callbacks, \$valueBar, \$result)
    {
        \$normalizer = \$this->getNormalizerForCallbacks();

        \$obj = new CallbacksObject();
        \$obj->bar = \$valueBar;

        \$this->assertEquals(
            \$result,
            \$normalizer->normalize(\$obj, 'any', ['callbacks' => \$callbacks])
        );
    }

    /**
     * @dataProvider provideInvalidCallbacks()
     */
    public function testUncallableCallbacks(\$callbacks)
    {
        \$normalizer = \$this->getNormalizerForCallbacks();

        \$obj = new CallbacksObject();

        \$this->markTestSkipped('Callback validation for callbacks in the context has been forgotten. See https://github.com/symfony/symfony/pull/30950');
        \$this->expectException(InvalidArgumentException::class);
        \$normalizer->normalize(\$obj, null, ['callbacks' => \$callbacks]);
    }

    public function provideCallbacks()
    {
        return [
            'Change a string' => [
                [
                    'bar' => function (\$bar) {
                        \$this->assertEquals('baz', \$bar);

                        return 'baz';
                    },
                ],
                'baz',
                ['bar' => 'baz'],
            ],
            'Null an item' => [
                [
                    'bar' => function (\$value, \$object, \$attributeName, \$format, \$context) {
                        \$this->assertSame('baz', \$value);
                        \$this->assertInstanceOf(CallbacksObject::class, \$object);
                        \$this->assertSame('bar', \$attributeName);
                        \$this->assertSame('any', \$format);
                        \$this->assertArrayHasKey('circular_reference_limit_counters', \$context);
                    },
                ],
                'baz',
                ['bar' => null],
            ],
            'Format a date' => [
                [
                    'bar' => function (\$bar) {
                        \$this->assertInstanceOf(\\DateTime::class, \$bar);

                        return \$bar->format('d-m-Y H:i:s');
                    },
                ],
                new \\DateTime('2011-09-10 06:30:00'),
                ['bar' => '10-09-2011 06:30:00'],
            ],
            'Collect a property' => [
                [
                    'bar' => function (array \$bars) {
                        \$result = '';
                        foreach (\$bars as \$bar) {
                            \$result .= \$bar->bar;
                        }

                        return \$result;
                    },
                ],
                [new CallbacksObject('baz'), new CallbacksObject('quux')],
                ['bar' => 'bazquux'],
            ],
            'Count a property' => [
                [
                    'bar' => function (array \$bars) {
                        return \\count(\$bars);
                    },
                ],
                [new CallbacksObject(), new CallbacksObject()],
                ['bar' => 2],
            ],
        ];
    }

    public function provideInvalidCallbacks()
    {
        return [
            [['bar' => null]],
            [['bar' => 'thisisnotavalidfunction']],
        ];
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/CallbacksTestTrait.php");
    }
}
