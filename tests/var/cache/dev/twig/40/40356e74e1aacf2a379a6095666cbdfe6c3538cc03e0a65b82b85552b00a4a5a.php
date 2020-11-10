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

/* vendor/symfony/intl/Tests/Collator/CollatorTest.php */
class __TwigTemplate_c046fe1b00eb58ef003188432e191994779cb693954ae4af479fac6490943e34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Collator/CollatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Collator/CollatorTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Collator;

use Symfony\\Component\\Intl\\Collator\\Collator;
use Symfony\\Component\\Intl\\Globals\\IntlGlobals;

class CollatorTest extends AbstractCollatorTest
{
    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new Collator('pt_BR');
    }

    public function testCompare()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->compare('a', 'b');
    }

    public function testGetAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getAttribute(Collator::NUMERIC_COLLATION);
    }

    public function testGetErrorCode()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals(IntlGlobals::U_ZERO_ERROR, \$collator->getErrorCode());
    }

    public function testGetErrorMessage()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals('U_ZERO_ERROR', \$collator->getErrorMessage());
    }

    public function testGetLocale()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals('en', \$collator->getLocale());
    }

    public function testConstructWithoutLocale()
    {
        \$collator = \$this->getCollator(null);
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\Collator\\Collator', \$collator);
    }

    public function testGetSortKey()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getSortKey('Hello');
    }

    public function testGetStrength()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getStrength();
    }

    public function testSetAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->setAttribute(Collator::NUMERIC_COLLATION, Collator::ON);
    }

    public function testSetStrength()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->setStrength(Collator::PRIMARY);
    }

    public function testStaticCreate()
    {
        \$collator = Collator::create('en');
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\Collator\\Collator', \$collator);
    }

    protected function getCollator(\$locale)
    {
        return new Collator(\$locale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Collator/CollatorTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Collator;

use Symfony\\Component\\Intl\\Collator\\Collator;
use Symfony\\Component\\Intl\\Globals\\IntlGlobals;

class CollatorTest extends AbstractCollatorTest
{
    public function testConstructorWithUnsupportedLocale()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodArgumentValueNotImplementedException');
        new Collator('pt_BR');
    }

    public function testCompare()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->compare('a', 'b');
    }

    public function testGetAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getAttribute(Collator::NUMERIC_COLLATION);
    }

    public function testGetErrorCode()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals(IntlGlobals::U_ZERO_ERROR, \$collator->getErrorCode());
    }

    public function testGetErrorMessage()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals('U_ZERO_ERROR', \$collator->getErrorMessage());
    }

    public function testGetLocale()
    {
        \$collator = \$this->getCollator('en');
        \$this->assertEquals('en', \$collator->getLocale());
    }

    public function testConstructWithoutLocale()
    {
        \$collator = \$this->getCollator(null);
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\Collator\\Collator', \$collator);
    }

    public function testGetSortKey()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getSortKey('Hello');
    }

    public function testGetStrength()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->getStrength();
    }

    public function testSetAttribute()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->setAttribute(Collator::NUMERIC_COLLATION, Collator::ON);
    }

    public function testSetStrength()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MethodNotImplementedException');
        \$collator = \$this->getCollator('en');
        \$collator->setStrength(Collator::PRIMARY);
    }

    public function testStaticCreate()
    {
        \$collator = Collator::create('en');
        \$this->assertInstanceOf('\\Symfony\\Component\\Intl\\Collator\\Collator', \$collator);
    }

    protected function getCollator(\$locale)
    {
        return new Collator(\$locale);
    }
}
", "vendor/symfony/intl/Tests/Collator/CollatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Collator/CollatorTest.php");
    }
}
