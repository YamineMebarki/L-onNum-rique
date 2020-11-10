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

/* vendor/symfony/config/Tests/Definition/NormalizationTest.php */
class __TwigTemplate_01642d8eee81c3eb7e9e64f23c40560889050b84e1fdc94f32d330082980efe1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/NormalizationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/NormalizationTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

class NormalizationTest extends TestCase
{
    /**
     * @dataProvider getEncoderTests
     */
    public function testNormalizeEncoders(\$denormalized)
    {
        \$tb = new TreeBuilder('root_name', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->fixXmlConfig('encoder')
                ->children()
                    ->node('encoders', 'array')
                        ->useAttributeAsKey('class')
                        ->prototype('array')
                            ->beforeNormalization()->ifString()->then(function (\$v) { return ['algorithm' => \$v]; })->end()
                            ->children()
                                ->node('algorithm', 'scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$normalized = [
            'encoders' => [
                'foo' => ['algorithm' => 'plaintext'],
            ],
        ];

        \$this->assertNormalized(\$tree, \$denormalized, \$normalized);
    }

    public function getEncoderTests()
    {
        \$configs = [];

        // XML
        \$configs[] = [
            'encoder' => [
                ['class' => 'foo', 'algorithm' => 'plaintext'],
            ],
        ];

        // XML when only one element of this type
        \$configs[] = [
            'encoder' => ['class' => 'foo', 'algorithm' => 'plaintext'],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                ['class' => 'foo', 'algorithm' => 'plaintext'],
            ],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                'foo' => 'plaintext',
            ],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                'foo' => ['algorithm' => 'plaintext'],
            ],
        ];

        return array_map(function (\$v) {
            return [\$v];
        }, \$configs);
    }

    /**
     * @dataProvider getAnonymousKeysTests
     */
    public function testAnonymousKeysArray(\$denormalized)
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('logout', 'array')
                        ->fixXmlConfig('handler')
                        ->children()
                            ->node('handlers', 'array')
                                ->prototype('scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$normalized = ['logout' => ['handlers' => ['a', 'b', 'c']]];

        \$this->assertNormalized(\$tree, \$denormalized, \$normalized);
    }

    public function getAnonymousKeysTests()
    {
        \$configs = [];

        \$configs[] = [
            'logout' => [
                'handlers' => ['a', 'b', 'c'],
            ],
        ];

        \$configs[] = [
            'logout' => [
                'handler' => ['a', 'b', 'c'],
            ],
        ];

        return array_map(function (\$v) { return [\$v]; }, \$configs);
    }

    /**
     * @dataProvider getNumericKeysTests
     */
    public function testNumericKeysAsAttributes(\$denormalized)
    {
        \$normalized = [
            'thing' => [42 => ['foo', 'bar'], 1337 => ['baz', 'qux']],
        ];

        \$this->assertNormalized(\$this->getNumericKeysTestTree(), \$denormalized, \$normalized);
    }

    public function getNumericKeysTests()
    {
        \$configs = [];

        \$configs[] = [
            'thing' => [
                42 => ['foo', 'bar'], 1337 => ['baz', 'qux'],
            ],
        ];

        \$configs[] = [
            'thing' => [
                ['foo', 'bar', 'id' => 42], ['baz', 'qux', 'id' => 1337],
            ],
        ];

        return array_map(function (\$v) { return [\$v]; }, \$configs);
    }

    public function testNonAssociativeArrayThrowsExceptionIfAttributeNotSet()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The attribute \"id\" must be set for path \"root.thing\".');
        \$denormalized = [
            'thing' => [
                ['foo', 'bar'], ['baz', 'qux'],
            ],
        ];

        \$this->assertNormalized(\$this->getNumericKeysTestTree(), \$denormalized, []);
    }

    public function testAssociativeArrayPreserveKeys()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->prototype('array')
                    ->children()
                        ->node('foo', 'scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$data = ['first' => ['foo' => 'bar']];

        \$this->assertNormalized(\$tree, \$data, \$data);
    }

    public static function assertNormalized(NodeInterface \$tree, \$denormalized, \$normalized)
    {
        self::assertSame(\$normalized, \$tree->normalize(\$denormalized));
    }

    private function getNumericKeysTestTree()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('thing', 'array')
                        ->useAttributeAsKey('id')
                        ->prototype('array')
                            ->prototype('scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        return \$tree;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/NormalizationTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

class NormalizationTest extends TestCase
{
    /**
     * @dataProvider getEncoderTests
     */
    public function testNormalizeEncoders(\$denormalized)
    {
        \$tb = new TreeBuilder('root_name', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->fixXmlConfig('encoder')
                ->children()
                    ->node('encoders', 'array')
                        ->useAttributeAsKey('class')
                        ->prototype('array')
                            ->beforeNormalization()->ifString()->then(function (\$v) { return ['algorithm' => \$v]; })->end()
                            ->children()
                                ->node('algorithm', 'scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$normalized = [
            'encoders' => [
                'foo' => ['algorithm' => 'plaintext'],
            ],
        ];

        \$this->assertNormalized(\$tree, \$denormalized, \$normalized);
    }

    public function getEncoderTests()
    {
        \$configs = [];

        // XML
        \$configs[] = [
            'encoder' => [
                ['class' => 'foo', 'algorithm' => 'plaintext'],
            ],
        ];

        // XML when only one element of this type
        \$configs[] = [
            'encoder' => ['class' => 'foo', 'algorithm' => 'plaintext'],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                ['class' => 'foo', 'algorithm' => 'plaintext'],
            ],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                'foo' => 'plaintext',
            ],
        ];

        // YAML/PHP
        \$configs[] = [
            'encoders' => [
                'foo' => ['algorithm' => 'plaintext'],
            ],
        ];

        return array_map(function (\$v) {
            return [\$v];
        }, \$configs);
    }

    /**
     * @dataProvider getAnonymousKeysTests
     */
    public function testAnonymousKeysArray(\$denormalized)
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('logout', 'array')
                        ->fixXmlConfig('handler')
                        ->children()
                            ->node('handlers', 'array')
                                ->prototype('scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$normalized = ['logout' => ['handlers' => ['a', 'b', 'c']]];

        \$this->assertNormalized(\$tree, \$denormalized, \$normalized);
    }

    public function getAnonymousKeysTests()
    {
        \$configs = [];

        \$configs[] = [
            'logout' => [
                'handlers' => ['a', 'b', 'c'],
            ],
        ];

        \$configs[] = [
            'logout' => [
                'handler' => ['a', 'b', 'c'],
            ],
        ];

        return array_map(function (\$v) { return [\$v]; }, \$configs);
    }

    /**
     * @dataProvider getNumericKeysTests
     */
    public function testNumericKeysAsAttributes(\$denormalized)
    {
        \$normalized = [
            'thing' => [42 => ['foo', 'bar'], 1337 => ['baz', 'qux']],
        ];

        \$this->assertNormalized(\$this->getNumericKeysTestTree(), \$denormalized, \$normalized);
    }

    public function getNumericKeysTests()
    {
        \$configs = [];

        \$configs[] = [
            'thing' => [
                42 => ['foo', 'bar'], 1337 => ['baz', 'qux'],
            ],
        ];

        \$configs[] = [
            'thing' => [
                ['foo', 'bar', 'id' => 42], ['baz', 'qux', 'id' => 1337],
            ],
        ];

        return array_map(function (\$v) { return [\$v]; }, \$configs);
    }

    public function testNonAssociativeArrayThrowsExceptionIfAttributeNotSet()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The attribute \"id\" must be set for path \"root.thing\".');
        \$denormalized = [
            'thing' => [
                ['foo', 'bar'], ['baz', 'qux'],
            ],
        ];

        \$this->assertNormalized(\$this->getNumericKeysTestTree(), \$denormalized, []);
    }

    public function testAssociativeArrayPreserveKeys()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->prototype('array')
                    ->children()
                        ->node('foo', 'scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$data = ['first' => ['foo' => 'bar']];

        \$this->assertNormalized(\$tree, \$data, \$data);
    }

    public static function assertNormalized(NodeInterface \$tree, \$denormalized, \$normalized)
    {
        self::assertSame(\$normalized, \$tree->normalize(\$denormalized));
    }

    private function getNumericKeysTestTree()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('thing', 'array')
                        ->useAttributeAsKey('id')
                        ->prototype('array')
                            ->prototype('scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        return \$tree;
    }
}
", "vendor/symfony/config/Tests/Definition/NormalizationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/NormalizationTest.php");
    }
}
