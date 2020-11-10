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

/* vendor/symfony/config/Tests/Definition/FinalizationTest.php */
class __TwigTemplate_b6cb20c18f39310c01a71a9a8ac45d3d965ef75a30b1d7475b99325b0899a526 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/FinalizationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/FinalizationTest.php"));

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
use Symfony\\Component\\Config\\Definition\\Processor;

class FinalizationTest extends TestCase
{
    public function testUnsetKeyWithDeepHierarchy()
    {
        \$tb = new TreeBuilder('config', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('level1', 'array')
                        ->canBeUnset()
                        ->children()
                            ->node('level2', 'array')
                                ->canBeUnset()
                                ->children()
                                    ->node('somevalue', 'scalar')->end()
                                    ->node('anothervalue', 'scalar')->end()
                                ->end()
                            ->end()
                            ->node('level1_scalar', 'scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'level1' => [
                'level2' => [
                    'somevalue' => 'foo',
                    'anothervalue' => 'bar',
                ],
                'level1_scalar' => 'foo',
            ],
        ];

        \$b = [
            'level1' => [
                'level2' => false,
            ],
        ];

        \$this->assertEquals([
            'level1' => [
                'level1_scalar' => 'foo',
            ],
        ], \$this->process(\$tree, [\$a, \$b]));
    }

    protected function process(NodeInterface \$tree, array \$configs)
    {
        \$processor = new Processor();

        return \$processor->process(\$tree, \$configs);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/FinalizationTest.php";
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
use Symfony\\Component\\Config\\Definition\\Processor;

class FinalizationTest extends TestCase
{
    public function testUnsetKeyWithDeepHierarchy()
    {
        \$tb = new TreeBuilder('config', 'array');
        \$tree = \$tb
            ->getRootNode()
                ->children()
                    ->node('level1', 'array')
                        ->canBeUnset()
                        ->children()
                            ->node('level2', 'array')
                                ->canBeUnset()
                                ->children()
                                    ->node('somevalue', 'scalar')->end()
                                    ->node('anothervalue', 'scalar')->end()
                                ->end()
                            ->end()
                            ->node('level1_scalar', 'scalar')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->buildTree()
        ;

        \$a = [
            'level1' => [
                'level2' => [
                    'somevalue' => 'foo',
                    'anothervalue' => 'bar',
                ],
                'level1_scalar' => 'foo',
            ],
        ];

        \$b = [
            'level1' => [
                'level2' => false,
            ],
        ];

        \$this->assertEquals([
            'level1' => [
                'level1_scalar' => 'foo',
            ],
        ], \$this->process(\$tree, [\$a, \$b]));
    }

    protected function process(NodeInterface \$tree, array \$configs)
    {
        \$processor = new Processor();

        return \$processor->process(\$tree, \$configs);
    }
}
", "vendor/symfony/config/Tests/Definition/FinalizationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/FinalizationTest.php");
    }
}
