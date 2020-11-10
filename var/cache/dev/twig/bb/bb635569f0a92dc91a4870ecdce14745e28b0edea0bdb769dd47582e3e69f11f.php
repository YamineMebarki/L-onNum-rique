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

/* vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php */
class __TwigTemplate_406c39e57df443b726db8daa4038c92bf26ef8a0f83a419f534acc016fd8a063 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\AcceptHeaderItem;

class AcceptHeaderItemTest extends TestCase
{
    /**
     * @dataProvider provideFromStringData
     */
    public function testFromString(\$string, \$value, array \$attributes)
    {
        \$item = AcceptHeaderItem::fromString(\$string);
        \$this->assertEquals(\$value, \$item->getValue());
        \$this->assertEquals(\$attributes, \$item->getAttributes());
    }

    public function provideFromStringData()
    {
        return [
            [
                'text/html',
                'text/html', [],
            ],
            [
                '\"this;should,not=matter\"',
                'this;should,not=matter', [],
            ],
            [
                \"text/plain; charset=utf-8;param=\\\"this;should,not=matter\\\";\\tfootnotes=true\",
                'text/plain', ['charset' => 'utf-8', 'param' => 'this;should,not=matter', 'footnotes' => 'true'],
            ],
            [
                '\"this;should,not=matter\";charset=utf-8',
                'this;should,not=matter', ['charset' => 'utf-8'],
            ],
        ];
    }

    /**
     * @dataProvider provideToStringData
     */
    public function testToString(\$value, array \$attributes, \$string)
    {
        \$item = new AcceptHeaderItem(\$value, \$attributes);
        \$this->assertEquals(\$string, (string) \$item);
    }

    public function provideToStringData()
    {
        return [
            [
                'text/html', [],
                'text/html',
            ],
            [
                'text/plain', ['charset' => 'utf-8', 'param' => 'this;should,not=matter', 'footnotes' => 'true'],
                'text/plain; charset=utf-8; param=\"this;should,not=matter\"; footnotes=true',
            ],
        ];
    }

    public function testValue()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals('value', \$item->getValue());

        \$item->setValue('new value');
        \$this->assertEquals('new value', \$item->getValue());

        \$item->setValue(1);
        \$this->assertEquals('1', \$item->getValue());
    }

    public function testQuality()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals(1.0, \$item->getQuality());

        \$item->setQuality(0.5);
        \$this->assertEquals(0.5, \$item->getQuality());

        \$item->setAttribute('q', 0.75);
        \$this->assertEquals(0.75, \$item->getQuality());
        \$this->assertFalse(\$item->hasAttribute('q'));
    }

    public function testAttribute()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals([], \$item->getAttributes());
        \$this->assertFalse(\$item->hasAttribute('test'));
        \$this->assertNull(\$item->getAttribute('test'));
        \$this->assertEquals('default', \$item->getAttribute('test', 'default'));

        \$item->setAttribute('test', 'value');
        \$this->assertEquals(['test' => 'value'], \$item->getAttributes());
        \$this->assertTrue(\$item->hasAttribute('test'));
        \$this->assertEquals('value', \$item->getAttribute('test'));
        \$this->assertEquals('value', \$item->getAttribute('test', 'default'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\AcceptHeaderItem;

class AcceptHeaderItemTest extends TestCase
{
    /**
     * @dataProvider provideFromStringData
     */
    public function testFromString(\$string, \$value, array \$attributes)
    {
        \$item = AcceptHeaderItem::fromString(\$string);
        \$this->assertEquals(\$value, \$item->getValue());
        \$this->assertEquals(\$attributes, \$item->getAttributes());
    }

    public function provideFromStringData()
    {
        return [
            [
                'text/html',
                'text/html', [],
            ],
            [
                '\"this;should,not=matter\"',
                'this;should,not=matter', [],
            ],
            [
                \"text/plain; charset=utf-8;param=\\\"this;should,not=matter\\\";\\tfootnotes=true\",
                'text/plain', ['charset' => 'utf-8', 'param' => 'this;should,not=matter', 'footnotes' => 'true'],
            ],
            [
                '\"this;should,not=matter\";charset=utf-8',
                'this;should,not=matter', ['charset' => 'utf-8'],
            ],
        ];
    }

    /**
     * @dataProvider provideToStringData
     */
    public function testToString(\$value, array \$attributes, \$string)
    {
        \$item = new AcceptHeaderItem(\$value, \$attributes);
        \$this->assertEquals(\$string, (string) \$item);
    }

    public function provideToStringData()
    {
        return [
            [
                'text/html', [],
                'text/html',
            ],
            [
                'text/plain', ['charset' => 'utf-8', 'param' => 'this;should,not=matter', 'footnotes' => 'true'],
                'text/plain; charset=utf-8; param=\"this;should,not=matter\"; footnotes=true',
            ],
        ];
    }

    public function testValue()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals('value', \$item->getValue());

        \$item->setValue('new value');
        \$this->assertEquals('new value', \$item->getValue());

        \$item->setValue(1);
        \$this->assertEquals('1', \$item->getValue());
    }

    public function testQuality()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals(1.0, \$item->getQuality());

        \$item->setQuality(0.5);
        \$this->assertEquals(0.5, \$item->getQuality());

        \$item->setAttribute('q', 0.75);
        \$this->assertEquals(0.75, \$item->getQuality());
        \$this->assertFalse(\$item->hasAttribute('q'));
    }

    public function testAttribute()
    {
        \$item = new AcceptHeaderItem('value', []);
        \$this->assertEquals([], \$item->getAttributes());
        \$this->assertFalse(\$item->hasAttribute('test'));
        \$this->assertNull(\$item->getAttribute('test'));
        \$this->assertEquals('default', \$item->getAttribute('test', 'default'));

        \$item->setAttribute('test', 'value');
        \$this->assertEquals(['test' => 'value'], \$item->getAttributes());
        \$this->assertTrue(\$item->hasAttribute('test'));
        \$this->assertEquals('value', \$item->getAttribute('test'));
        \$this->assertEquals('value', \$item->getAttribute('test', 'default'));
    }
}
", "vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/AcceptHeaderItemTest.php");
    }
}
