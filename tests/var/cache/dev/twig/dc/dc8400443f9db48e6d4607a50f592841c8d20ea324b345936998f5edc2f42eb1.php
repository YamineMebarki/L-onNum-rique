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

/* vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php */
class __TwigTemplate_8a262e9d91a3f454cc8d0afc572ce725a20c5c05a7f4134dc4f10f9df5445429 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Comparator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Comparator\\NumberComparator;

class NumberComparatorTest extends TestCase
{
    /**
     * @dataProvider getConstructorTestData
     */
    public function testConstructor(\$successes, \$failures)
    {
        foreach (\$successes as \$s) {
            new NumberComparator(\$s);
        }

        foreach (\$failures as \$f) {
            try {
                new NumberComparator(\$f);
                \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
            } catch (\\Exception \$e) {
                \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
            }
        }
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$test, \$match, \$noMatch)
    {
        \$c = new NumberComparator(\$test);

        foreach (\$match as \$m) {
            \$this->assertTrue(\$c->test(\$m), '->test() tests a string against the expression');
        }

        foreach (\$noMatch as \$m) {
            \$this->assertFalse(\$c->test(\$m), '->test() tests a string against the expression');
        }
    }

    public function getTestData()
    {
        return [
            ['< 1000', ['500', '999'], ['1000', '1500']],

            ['< 1K', ['500', '999'], ['1000', '1500']],
            ['<1k', ['500', '999'], ['1000', '1500']],
            ['  < 1 K ', ['500', '999'], ['1000', '1500']],
            ['<= 1K', ['1000'], ['1001']],
            ['> 1K', ['1001'], ['1000']],
            ['>= 1K', ['1000'], ['999']],

            ['< 1KI', ['500', '1023'], ['1024', '1500']],
            ['<= 1KI', ['1024'], ['1025']],
            ['> 1KI', ['1025'], ['1024']],
            ['>= 1KI', ['1024'], ['1023']],

            ['1KI', ['1024'], ['1023', '1025']],
            ['==1KI', ['1024'], ['1023', '1025']],

            ['==1m', ['1000000'], ['999999', '1000001']],
            ['==1mi', [1024 * 1024], [1024 * 1024 - 1, 1024 * 1024 + 1]],

            ['==1g', ['1000000000'], ['999999999', '1000000001']],
            ['==1gi', [1024 * 1024 * 1024], [1024 * 1024 * 1024 - 1, 1024 * 1024 * 1024 + 1]],

            ['!= 1000', ['500', '999'], ['1000']],
        ];
    }

    public function getConstructorTestData()
    {
        return [
            [
                [
                    '1', '0',
                    '3.5', '33.55', '123.456', '123456.78',
                    '.1', '.123',
                    '.0', '0.0',
                    '1.', '0.', '123.',
                    '==1', '!=1', '<1', '>1', '<=1', '>=1',
                    '==1k', '==1ki', '==1m', '==1mi', '==1g', '==1gi',
                    '1k', '1ki', '1m', '1mi', '1g', '1gi',
                ],
                [
                    false, null, '',
                    ' ', 'foobar',
                    '=1', '===1',
                    '0 . 1', '123 .45', '234. 567',
                    '..', '.0.', '0.1.2',
                ],
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Comparator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Comparator\\NumberComparator;

class NumberComparatorTest extends TestCase
{
    /**
     * @dataProvider getConstructorTestData
     */
    public function testConstructor(\$successes, \$failures)
    {
        foreach (\$successes as \$s) {
            new NumberComparator(\$s);
        }

        foreach (\$failures as \$f) {
            try {
                new NumberComparator(\$f);
                \$this->fail('__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
            } catch (\\Exception \$e) {
                \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException if the test expression is not valid.');
            }
        }
    }

    /**
     * @dataProvider getTestData
     */
    public function testTest(\$test, \$match, \$noMatch)
    {
        \$c = new NumberComparator(\$test);

        foreach (\$match as \$m) {
            \$this->assertTrue(\$c->test(\$m), '->test() tests a string against the expression');
        }

        foreach (\$noMatch as \$m) {
            \$this->assertFalse(\$c->test(\$m), '->test() tests a string against the expression');
        }
    }

    public function getTestData()
    {
        return [
            ['< 1000', ['500', '999'], ['1000', '1500']],

            ['< 1K', ['500', '999'], ['1000', '1500']],
            ['<1k', ['500', '999'], ['1000', '1500']],
            ['  < 1 K ', ['500', '999'], ['1000', '1500']],
            ['<= 1K', ['1000'], ['1001']],
            ['> 1K', ['1001'], ['1000']],
            ['>= 1K', ['1000'], ['999']],

            ['< 1KI', ['500', '1023'], ['1024', '1500']],
            ['<= 1KI', ['1024'], ['1025']],
            ['> 1KI', ['1025'], ['1024']],
            ['>= 1KI', ['1024'], ['1023']],

            ['1KI', ['1024'], ['1023', '1025']],
            ['==1KI', ['1024'], ['1023', '1025']],

            ['==1m', ['1000000'], ['999999', '1000001']],
            ['==1mi', [1024 * 1024], [1024 * 1024 - 1, 1024 * 1024 + 1]],

            ['==1g', ['1000000000'], ['999999999', '1000000001']],
            ['==1gi', [1024 * 1024 * 1024], [1024 * 1024 * 1024 - 1, 1024 * 1024 * 1024 + 1]],

            ['!= 1000', ['500', '999'], ['1000']],
        ];
    }

    public function getConstructorTestData()
    {
        return [
            [
                [
                    '1', '0',
                    '3.5', '33.55', '123.456', '123456.78',
                    '.1', '.123',
                    '.0', '0.0',
                    '1.', '0.', '123.',
                    '==1', '!=1', '<1', '>1', '<=1', '>=1',
                    '==1k', '==1ki', '==1m', '==1mi', '==1g', '==1gi',
                    '1k', '1ki', '1m', '1mi', '1g', '1gi',
                ],
                [
                    false, null, '',
                    ' ', 'foobar',
                    '=1', '===1',
                    '0 . 1', '123 .45', '234. 567',
                    '..', '.0.', '0.1.2',
                ],
            ],
        ];
    }
}
", "vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Comparator/NumberComparatorTest.php");
    }
}
