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

/* vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php */
class __TwigTemplate_d555b47e5e0bce7ad0c6b58d4c927193b250c95e7dc30474af160dad858729d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php"));

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
use Symfony\\Component\\HttpFoundation\\AcceptHeader;
use Symfony\\Component\\HttpFoundation\\AcceptHeaderItem;

class AcceptHeaderTest extends TestCase
{
    public function testFirst()
    {
        \$header = AcceptHeader::fromString('text/plain; q=0.5, text/html, text/x-dvi; q=0.8, text/x-c');
        \$this->assertSame('text/html', \$header->first()->getValue());
    }

    /**
     * @dataProvider provideFromStringData
     */
    public function testFromString(\$string, array \$items)
    {
        \$header = AcceptHeader::fromString(\$string);
        \$parsed = array_values(\$header->all());
        // reset index since the fixtures don't have them set
        foreach (\$parsed as \$item) {
            \$item->setIndex(0);
        }
        \$this->assertEquals(\$items, \$parsed);
    }

    public function provideFromStringData()
    {
        return [
            ['', []],
            ['gzip', [new AcceptHeaderItem('gzip')]],
            ['gzip,deflate,sdch', [new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')]],
            [\"gzip, deflate\\t,sdch\", [new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')]],
            ['\"this;should,not=matter\"', [new AcceptHeaderItem('this;should,not=matter')]],
        ];
    }

    /**
     * @dataProvider provideToStringData
     */
    public function testToString(array \$items, \$string)
    {
        \$header = new AcceptHeader(\$items);
        \$this->assertEquals(\$string, (string) \$header);
    }

    public function provideToStringData()
    {
        return [
            [[], ''],
            [[new AcceptHeaderItem('gzip')], 'gzip'],
            [[new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')], 'gzip,deflate,sdch'],
            [[new AcceptHeaderItem('this;should,not=matter')], 'this;should,not=matter'],
        ];
    }

    /**
     * @dataProvider provideFilterData
     */
    public function testFilter(\$string, \$filter, array \$values)
    {
        \$header = AcceptHeader::fromString(\$string)->filter(\$filter);
        \$this->assertEquals(\$values, array_keys(\$header->all()));
    }

    public function provideFilterData()
    {
        return [
            ['fr-FR,fr;q=0.8,en-US;q=0.6,en;q=0.4', '/fr.*/', ['fr-FR', 'fr']],
        ];
    }

    /**
     * @dataProvider provideSortingData
     */
    public function testSorting(\$string, array \$values)
    {
        \$header = AcceptHeader::fromString(\$string);
        \$this->assertEquals(\$values, array_keys(\$header->all()));
    }

    public function provideSortingData()
    {
        return [
            'quality has priority' => ['*;q=0.3,ISO-8859-1,utf-8;q=0.7', ['ISO-8859-1', 'utf-8', '*']],
            'order matters when q is equal' => ['*;q=0.3,ISO-8859-1;q=0.7,utf-8;q=0.7', ['ISO-8859-1', 'utf-8', '*']],
            'order matters when q is equal2' => ['*;q=0.3,utf-8;q=0.7,ISO-8859-1;q=0.7', ['utf-8', 'ISO-8859-1', '*']],
        ];
    }

    /**
     * @dataProvider provideDefaultValueData
     */
    public function testDefaultValue(\$acceptHeader, \$value, \$expectedQuality)
    {
        \$header = AcceptHeader::fromString(\$acceptHeader);
        \$this->assertSame(\$expectedQuality, \$header->get(\$value)->getQuality());
    }

    public function provideDefaultValueData()
    {
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, *;q=0.3', 'text/xml', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/xml', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/html', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/plain', 0.5];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', '*', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', '*', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', 'text/xml', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', 'text/*', 1.0];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/*', 0.8];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/html', 1.0];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/x-dvi', 0.8];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', '*', 0.3];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', 'utf-8', 0.7];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', 'SHIFT_JIS', 0.3];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php";
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
use Symfony\\Component\\HttpFoundation\\AcceptHeader;
use Symfony\\Component\\HttpFoundation\\AcceptHeaderItem;

class AcceptHeaderTest extends TestCase
{
    public function testFirst()
    {
        \$header = AcceptHeader::fromString('text/plain; q=0.5, text/html, text/x-dvi; q=0.8, text/x-c');
        \$this->assertSame('text/html', \$header->first()->getValue());
    }

    /**
     * @dataProvider provideFromStringData
     */
    public function testFromString(\$string, array \$items)
    {
        \$header = AcceptHeader::fromString(\$string);
        \$parsed = array_values(\$header->all());
        // reset index since the fixtures don't have them set
        foreach (\$parsed as \$item) {
            \$item->setIndex(0);
        }
        \$this->assertEquals(\$items, \$parsed);
    }

    public function provideFromStringData()
    {
        return [
            ['', []],
            ['gzip', [new AcceptHeaderItem('gzip')]],
            ['gzip,deflate,sdch', [new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')]],
            [\"gzip, deflate\\t,sdch\", [new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')]],
            ['\"this;should,not=matter\"', [new AcceptHeaderItem('this;should,not=matter')]],
        ];
    }

    /**
     * @dataProvider provideToStringData
     */
    public function testToString(array \$items, \$string)
    {
        \$header = new AcceptHeader(\$items);
        \$this->assertEquals(\$string, (string) \$header);
    }

    public function provideToStringData()
    {
        return [
            [[], ''],
            [[new AcceptHeaderItem('gzip')], 'gzip'],
            [[new AcceptHeaderItem('gzip'), new AcceptHeaderItem('deflate'), new AcceptHeaderItem('sdch')], 'gzip,deflate,sdch'],
            [[new AcceptHeaderItem('this;should,not=matter')], 'this;should,not=matter'],
        ];
    }

    /**
     * @dataProvider provideFilterData
     */
    public function testFilter(\$string, \$filter, array \$values)
    {
        \$header = AcceptHeader::fromString(\$string)->filter(\$filter);
        \$this->assertEquals(\$values, array_keys(\$header->all()));
    }

    public function provideFilterData()
    {
        return [
            ['fr-FR,fr;q=0.8,en-US;q=0.6,en;q=0.4', '/fr.*/', ['fr-FR', 'fr']],
        ];
    }

    /**
     * @dataProvider provideSortingData
     */
    public function testSorting(\$string, array \$values)
    {
        \$header = AcceptHeader::fromString(\$string);
        \$this->assertEquals(\$values, array_keys(\$header->all()));
    }

    public function provideSortingData()
    {
        return [
            'quality has priority' => ['*;q=0.3,ISO-8859-1,utf-8;q=0.7', ['ISO-8859-1', 'utf-8', '*']],
            'order matters when q is equal' => ['*;q=0.3,ISO-8859-1;q=0.7,utf-8;q=0.7', ['ISO-8859-1', 'utf-8', '*']],
            'order matters when q is equal2' => ['*;q=0.3,utf-8;q=0.7,ISO-8859-1;q=0.7', ['utf-8', 'ISO-8859-1', '*']],
        ];
    }

    /**
     * @dataProvider provideDefaultValueData
     */
    public function testDefaultValue(\$acceptHeader, \$value, \$expectedQuality)
    {
        \$header = AcceptHeader::fromString(\$acceptHeader);
        \$this->assertSame(\$expectedQuality, \$header->get(\$value)->getQuality());
    }

    public function provideDefaultValueData()
    {
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, *;q=0.3', 'text/xml', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/xml', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/html', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', 'text/plain', 0.5];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*;q=0.3', '*', 0.3];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', '*', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', 'text/xml', 1.0];
        yield ['text/plain;q=0.5, text/html, text/x-dvi;q=0.8, */*', 'text/*', 1.0];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/*', 0.8];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/html', 1.0];
        yield ['text/plain;q=0.5, text/html, text/*;q=0.8, */*', 'text/x-dvi', 0.8];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', '*', 0.3];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', 'utf-8', 0.7];
        yield ['*;q=0.3, ISO-8859-1;q=0.7, utf-8;q=0.7', 'SHIFT_JIS', 0.3];
    }
}
", "vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/AcceptHeaderTest.php");
    }
}
