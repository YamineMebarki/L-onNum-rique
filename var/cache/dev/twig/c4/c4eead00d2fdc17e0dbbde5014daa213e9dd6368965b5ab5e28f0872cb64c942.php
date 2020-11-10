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

/* vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php */
class __TwigTemplate_19cfae983dc7cbb6e98314ea1f80dc2192609e69d33388ac7f913866d1438f58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Routing\\Tests\\Matcher\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\StaticPrefixCollection;
use Symfony\\Component\\Routing\\Route;

class StaticPrefixCollectionTest extends TestCase
{
    /**
     * @dataProvider routeProvider
     */
    public function testGrouping(array \$routes, \$expected)
    {
        \$collection = new StaticPrefixCollection('/');

        foreach (\$routes as \$route) {
            list(\$path, \$name) = \$route;
            \$staticPrefix = (new Route(\$path))->compile()->getStaticPrefix();
            \$collection->addRoute(\$staticPrefix, [\$name]);
        }

        \$dumped = \$this->dumpCollection(\$collection);
        \$this->assertEquals(\$expected, \$dumped);
    }

    public function routeProvider()
    {
        return [
            'Simple - not nested' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/', 'prefix_segment'],
                    ['/leading/segment/', 'leading_segment'],
                ],
                <<<EOF
root
prefix_segment
leading_segment
EOF
            ],
            'Nested - small group' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/aa', 'prefix_segment'],
                    ['/prefix/segment/bb', 'leading_segment'],
                ],
                <<<EOF
root
/prefix/segment/
-> prefix_segment
-> leading_segment
EOF
            ],
            'Nested - contains item at intersection' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/', 'prefix_segment'],
                    ['/prefix/segment/bb', 'leading_segment'],
                ],
                <<<EOF
root
/prefix/segment/
-> prefix_segment
-> leading_segment
EOF
            ],
            'Simple one level nesting' => [
                [
                    ['/', 'root'],
                    ['/group/segment/', 'nested_segment'],
                    ['/group/thing/', 'some_segment'],
                    ['/group/other/', 'other_segment'],
                ],
                <<<EOF
root
/group/
-> nested_segment
-> some_segment
-> other_segment
EOF
            ],
            'Retain matching order with groups' => [
                [
                    ['/group/aa/', 'aa'],
                    ['/group/bb/', 'bb'],
                    ['/group/cc/', 'cc'],
                    ['/(.*)', 'root'],
                    ['/group/dd/', 'dd'],
                    ['/group/ee/', 'ee'],
                    ['/group/ff/', 'ff'],
                ],
                <<<EOF
/group/
-> aa
-> bb
-> cc
root
/group/
-> dd
-> ee
-> ff
EOF
            ],
            'Retain complex matching order with groups at base' => [
                [
                    ['/aaa/111/', 'first_aaa'],
                    ['/prefixed/group/aa/', 'aa'],
                    ['/prefixed/group/bb/', 'bb'],
                    ['/prefixed/group/cc/', 'cc'],
                    ['/prefixed/(.*)', 'root'],
                    ['/prefixed/group/dd/', 'dd'],
                    ['/prefixed/group/ee/', 'ee'],
                    ['/prefixed/', 'parent'],
                    ['/prefixed/group/ff/', 'ff'],
                    ['/aaa/222/', 'second_aaa'],
                    ['/aaa/333/', 'third_aaa'],
                ],
                <<<EOF
/aaa/
-> first_aaa
-> second_aaa
-> third_aaa
/prefixed/
-> /prefixed/group/
-> -> aa
-> -> bb
-> -> cc
-> root
-> /prefixed/group/
-> -> dd
-> -> ee
-> -> ff
-> parent
EOF
            ],

            'Group regardless of segments' => [
                [
                    ['/aaa-111/', 'a1'],
                    ['/aaa-222/', 'a2'],
                    ['/aaa-333/', 'a3'],
                    ['/group-aa/', 'g1'],
                    ['/group-bb/', 'g2'],
                    ['/group-cc/', 'g3'],
                ],
                <<<EOF
/aaa-
-> a1
-> a2
-> a3
/group-
-> g1
-> g2
-> g3
EOF
            ],
        ];
    }

    private function dumpCollection(StaticPrefixCollection \$collection, \$prefix = '')
    {
        \$lines = [];

        foreach (\$collection->getRoutes() as \$item) {
            if (\$item instanceof StaticPrefixCollection) {
                \$lines[] = \$prefix.\$item->getPrefix();
                \$lines[] = \$this->dumpCollection(\$item, \$prefix.'-> ');
            } else {
                \$lines[] = \$prefix.implode(' ', \$item);
            }
        }

        return implode(\"\\n\", \$lines);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Routing\\Tests\\Matcher\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Matcher\\Dumper\\StaticPrefixCollection;
use Symfony\\Component\\Routing\\Route;

class StaticPrefixCollectionTest extends TestCase
{
    /**
     * @dataProvider routeProvider
     */
    public function testGrouping(array \$routes, \$expected)
    {
        \$collection = new StaticPrefixCollection('/');

        foreach (\$routes as \$route) {
            list(\$path, \$name) = \$route;
            \$staticPrefix = (new Route(\$path))->compile()->getStaticPrefix();
            \$collection->addRoute(\$staticPrefix, [\$name]);
        }

        \$dumped = \$this->dumpCollection(\$collection);
        \$this->assertEquals(\$expected, \$dumped);
    }

    public function routeProvider()
    {
        return [
            'Simple - not nested' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/', 'prefix_segment'],
                    ['/leading/segment/', 'leading_segment'],
                ],
                <<<EOF
root
prefix_segment
leading_segment
EOF
            ],
            'Nested - small group' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/aa', 'prefix_segment'],
                    ['/prefix/segment/bb', 'leading_segment'],
                ],
                <<<EOF
root
/prefix/segment/
-> prefix_segment
-> leading_segment
EOF
            ],
            'Nested - contains item at intersection' => [
                [
                    ['/', 'root'],
                    ['/prefix/segment/', 'prefix_segment'],
                    ['/prefix/segment/bb', 'leading_segment'],
                ],
                <<<EOF
root
/prefix/segment/
-> prefix_segment
-> leading_segment
EOF
            ],
            'Simple one level nesting' => [
                [
                    ['/', 'root'],
                    ['/group/segment/', 'nested_segment'],
                    ['/group/thing/', 'some_segment'],
                    ['/group/other/', 'other_segment'],
                ],
                <<<EOF
root
/group/
-> nested_segment
-> some_segment
-> other_segment
EOF
            ],
            'Retain matching order with groups' => [
                [
                    ['/group/aa/', 'aa'],
                    ['/group/bb/', 'bb'],
                    ['/group/cc/', 'cc'],
                    ['/(.*)', 'root'],
                    ['/group/dd/', 'dd'],
                    ['/group/ee/', 'ee'],
                    ['/group/ff/', 'ff'],
                ],
                <<<EOF
/group/
-> aa
-> bb
-> cc
root
/group/
-> dd
-> ee
-> ff
EOF
            ],
            'Retain complex matching order with groups at base' => [
                [
                    ['/aaa/111/', 'first_aaa'],
                    ['/prefixed/group/aa/', 'aa'],
                    ['/prefixed/group/bb/', 'bb'],
                    ['/prefixed/group/cc/', 'cc'],
                    ['/prefixed/(.*)', 'root'],
                    ['/prefixed/group/dd/', 'dd'],
                    ['/prefixed/group/ee/', 'ee'],
                    ['/prefixed/', 'parent'],
                    ['/prefixed/group/ff/', 'ff'],
                    ['/aaa/222/', 'second_aaa'],
                    ['/aaa/333/', 'third_aaa'],
                ],
                <<<EOF
/aaa/
-> first_aaa
-> second_aaa
-> third_aaa
/prefixed/
-> /prefixed/group/
-> -> aa
-> -> bb
-> -> cc
-> root
-> /prefixed/group/
-> -> dd
-> -> ee
-> -> ff
-> parent
EOF
            ],

            'Group regardless of segments' => [
                [
                    ['/aaa-111/', 'a1'],
                    ['/aaa-222/', 'a2'],
                    ['/aaa-333/', 'a3'],
                    ['/group-aa/', 'g1'],
                    ['/group-bb/', 'g2'],
                    ['/group-cc/', 'g3'],
                ],
                <<<EOF
/aaa-
-> a1
-> a2
-> a3
/group-
-> g1
-> g2
-> g3
EOF
            ],
        ];
    }

    private function dumpCollection(StaticPrefixCollection \$collection, \$prefix = '')
    {
        \$lines = [];

        foreach (\$collection->getRoutes() as \$item) {
            if (\$item instanceof StaticPrefixCollection) {
                \$lines[] = \$prefix.\$item->getPrefix();
                \$lines[] = \$this->dumpCollection(\$item, \$prefix.'-> ');
            } else {
                \$lines[] = \$prefix.implode(' ', \$item);
            }
        }

        return implode(\"\\n\", \$lines);
    }
}
", "vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Matcher/Dumper/StaticPrefixCollectionTest.php");
    }
}
