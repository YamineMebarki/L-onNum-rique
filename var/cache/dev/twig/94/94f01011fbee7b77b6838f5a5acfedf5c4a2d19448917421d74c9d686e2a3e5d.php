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

/* vendor/symfony/config/Tests/Definition/MergeTest.php */
class __TwigTemplate_967bb4b4bd90cc099f47ae5a21a2c87f9e0074dc6ecd97b89b79aa7e16dd12f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/MergeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/MergeTest.php"));

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

class MergeTest extends TestCase
{
    public function testForbiddenOverwrite()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException');
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('foo', 'scalar')
                        ->cannotBeOverwritten()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'foo' => 'bar',
        ];

        \$b = [
            'foo' => 'moo',
        ];

        \$tree->merge(\$a, \$b);
    }

    public function testUnsetKey()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('foo', 'scalar')->end()
                    ->node('bar', 'scalar')->end()
                    ->node('unsettable', 'array')
                        ->canBeUnset()
                        ->children()
                            ->node('foo', 'scalar')->end()
                            ->node('bar', 'scalar')->end()
                        ->end()
                    ->end()
                    ->node('unsetted', 'array')
                        ->canBeUnset()
                        ->prototype('scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'foo' => 'bar',
            'unsettable' => [
                'foo' => 'a',
                'bar' => 'b',
            ],
            'unsetted' => false,
        ];

        \$b = [
            'foo' => 'moo',
            'bar' => 'b',
            'unsettable' => false,
            'unsetted' => ['a', 'b'],
        ];

        \$this->assertEquals([
            'foo' => 'moo',
            'bar' => 'b',
            'unsettable' => false,
            'unsetted' => ['a', 'b'],
        ], \$tree->merge(\$a, \$b));
    }

    public function testDoesNotAllowNewKeysInSubsequentConfigs()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('test', 'array')
                        ->disallowNewKeysInSubsequentConfigs()
                        ->useAttributeAsKey('key')
                        ->prototype('array')
                            ->children()
                                ->node('value', 'scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree();

        \$a = [
            'test' => [
                'a' => ['value' => 'foo'],
            ],
        ];

        \$b = [
            'test' => [
                'b' => ['value' => 'foo'],
            ],
        ];

        \$tree->merge(\$a, \$b);
    }

    public function testPerformsNoDeepMerging()
    {
        \$tb = new TreeBuilder('root', 'array');

        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('no_deep_merging', 'array')
                        ->performNoDeepMerging()
                        ->children()
                            ->node('foo', 'scalar')->end()
                            ->node('bar', 'scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'no_deep_merging' => [
                'foo' => 'a',
                'bar' => 'b',
            ],
        ];

        \$b = [
            'no_deep_merging' => [
                'c' => 'd',
            ],
        ];

        \$this->assertEquals([
            'no_deep_merging' => [
                'c' => 'd',
            ],
        ], \$tree->merge(\$a, \$b));
    }

    public function testPrototypeWithoutAKeyAttribute()
    {
        \$tb = new TreeBuilder('root', 'array');

        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->arrayNode('append_elements')
                        ->prototype('scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'append_elements' => ['a', 'b'],
        ];

        \$b = [
            'append_elements' => ['c', 'd'],
        ];

        \$this->assertEquals(['append_elements' => ['a', 'b', 'c', 'd']], \$tree->merge(\$a, \$b));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/MergeTest.php";
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

class MergeTest extends TestCase
{
    public function testForbiddenOverwrite()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException');
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('foo', 'scalar')
                        ->cannotBeOverwritten()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'foo' => 'bar',
        ];

        \$b = [
            'foo' => 'moo',
        ];

        \$tree->merge(\$a, \$b);
    }

    public function testUnsetKey()
    {
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('foo', 'scalar')->end()
                    ->node('bar', 'scalar')->end()
                    ->node('unsettable', 'array')
                        ->canBeUnset()
                        ->children()
                            ->node('foo', 'scalar')->end()
                            ->node('bar', 'scalar')->end()
                        ->end()
                    ->end()
                    ->node('unsetted', 'array')
                        ->canBeUnset()
                        ->prototype('scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'foo' => 'bar',
            'unsettable' => [
                'foo' => 'a',
                'bar' => 'b',
            ],
            'unsetted' => false,
        ];

        \$b = [
            'foo' => 'moo',
            'bar' => 'b',
            'unsettable' => false,
            'unsetted' => ['a', 'b'],
        ];

        \$this->assertEquals([
            'foo' => 'moo',
            'bar' => 'b',
            'unsettable' => false,
            'unsetted' => ['a', 'b'],
        ], \$tree->merge(\$a, \$b));
    }

    public function testDoesNotAllowNewKeysInSubsequentConfigs()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$tb = new TreeBuilder('root', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('test', 'array')
                        ->disallowNewKeysInSubsequentConfigs()
                        ->useAttributeAsKey('key')
                        ->prototype('array')
                            ->children()
                                ->node('value', 'scalar')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree();

        \$a = [
            'test' => [
                'a' => ['value' => 'foo'],
            ],
        ];

        \$b = [
            'test' => [
                'b' => ['value' => 'foo'],
            ],
        ];

        \$tree->merge(\$a, \$b);
    }

    public function testPerformsNoDeepMerging()
    {
        \$tb = new TreeBuilder('root', 'array');

        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('no_deep_merging', 'array')
                        ->performNoDeepMerging()
                        ->children()
                            ->node('foo', 'scalar')->end()
                            ->node('bar', 'scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'no_deep_merging' => [
                'foo' => 'a',
                'bar' => 'b',
            ],
        ];

        \$b = [
            'no_deep_merging' => [
                'c' => 'd',
            ],
        ];

        \$this->assertEquals([
            'no_deep_merging' => [
                'c' => 'd',
            ],
        ], \$tree->merge(\$a, \$b));
    }

    public function testPrototypeWithoutAKeyAttribute()
    {
        \$tb = new TreeBuilder('root', 'array');

        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->arrayNode('append_elements')
                        ->prototype('scalar')->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'append_elements' => ['a', 'b'],
        ];

        \$b = [
            'append_elements' => ['c', 'd'],
        ];

        \$this->assertEquals(['append_elements' => ['a', 'b', 'c', 'd']], \$tree->merge(\$a, \$b));
    }
}
", "vendor/symfony/config/Tests/Definition/MergeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/MergeTest.php");
    }
}
