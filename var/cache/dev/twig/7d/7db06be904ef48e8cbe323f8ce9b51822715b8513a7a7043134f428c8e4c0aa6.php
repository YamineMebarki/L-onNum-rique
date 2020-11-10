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

/* vendor/symfony/form/Tests/Util/StringUtilTest.php */
class __TwigTemplate_09974e7d514d4b55e9776edcfb0c56c6e63b63c16aed3c3423e08e0a81e7c377 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Util/StringUtilTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Util/StringUtilTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Util\\StringUtil;

class StringUtilTest extends TestCase
{
    public function testTrim()
    {
        \$data = ' Foo! ';

        \$this->assertEquals('Foo!', StringUtil::trim(\$data));
    }

    /**
     * @dataProvider spaceProvider
     */
    public function testTrimUtf8Separators(\$hex)
    {
        // Convert hexadecimal representation into binary
        // H: hex string, high nibble first (UCS-2BE)
        // *: repeat until end of string
        \$binary = pack('H*', \$hex);

        // Convert UCS-2BE to UTF-8
        \$symbol = mb_convert_encoding(\$binary, 'UTF-8', 'UCS-2BE');
        \$symbol .= \"ab\\ncd\".\$symbol;

        \$this->assertSame(\"ab\\ncd\", StringUtil::trim(\$symbol));
    }

    public function spaceProvider()
    {
        return [
            // separators
            ['0020'],
            ['00A0'],
            ['1680'],
//            ['180E'],
            ['2000'],
            ['2001'],
            ['2002'],
            ['2003'],
            ['2004'],
            ['2005'],
            ['2006'],
            ['2007'],
            ['2008'],
            ['2009'],
            ['200A'],
            ['2028'],
            ['2029'],
            ['202F'],
            ['205F'],
            ['3000'],
            // controls
            ['0009'],
            ['000A'],
            ['000B'],
            ['000C'],
            ['000D'],
            ['0085'],
            // zero width space
//            ['200B'],
        ];
    }

    /**
     * @dataProvider fqcnToBlockPrefixProvider
     */
    public function testFqcnToBlockPrefix(\$fqcn, \$expectedBlockPrefix)
    {
        \$blockPrefix = StringUtil::fqcnToBlockPrefix(\$fqcn);

        \$this->assertSame(\$expectedBlockPrefix, \$blockPrefix);
    }

    public function fqcnToBlockPrefixProvider()
    {
        return [
            ['TYPE', 'type'],
            ['\\Type', 'type'],
            ['\\UserType', 'user'],
            ['UserType', 'user'],
            ['Vendor\\Name\\Space\\Type', 'type'],
            ['Vendor\\Name\\Space\\UserForm', 'user_form'],
            ['Vendor\\Name\\Space\\UserType', 'user'],
            ['Vendor\\Name\\Space\\usertype', 'user'],
            ['Symfony\\Component\\Form\\Form', 'form'],
            ['Vendor\\Name\\Space\\BarTypeBazType', 'bar_type_baz'],
            ['FooBarBazType', 'foo_bar_baz'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Util/StringUtilTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Util;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Util\\StringUtil;

class StringUtilTest extends TestCase
{
    public function testTrim()
    {
        \$data = ' Foo! ';

        \$this->assertEquals('Foo!', StringUtil::trim(\$data));
    }

    /**
     * @dataProvider spaceProvider
     */
    public function testTrimUtf8Separators(\$hex)
    {
        // Convert hexadecimal representation into binary
        // H: hex string, high nibble first (UCS-2BE)
        // *: repeat until end of string
        \$binary = pack('H*', \$hex);

        // Convert UCS-2BE to UTF-8
        \$symbol = mb_convert_encoding(\$binary, 'UTF-8', 'UCS-2BE');
        \$symbol .= \"ab\\ncd\".\$symbol;

        \$this->assertSame(\"ab\\ncd\", StringUtil::trim(\$symbol));
    }

    public function spaceProvider()
    {
        return [
            // separators
            ['0020'],
            ['00A0'],
            ['1680'],
//            ['180E'],
            ['2000'],
            ['2001'],
            ['2002'],
            ['2003'],
            ['2004'],
            ['2005'],
            ['2006'],
            ['2007'],
            ['2008'],
            ['2009'],
            ['200A'],
            ['2028'],
            ['2029'],
            ['202F'],
            ['205F'],
            ['3000'],
            // controls
            ['0009'],
            ['000A'],
            ['000B'],
            ['000C'],
            ['000D'],
            ['0085'],
            // zero width space
//            ['200B'],
        ];
    }

    /**
     * @dataProvider fqcnToBlockPrefixProvider
     */
    public function testFqcnToBlockPrefix(\$fqcn, \$expectedBlockPrefix)
    {
        \$blockPrefix = StringUtil::fqcnToBlockPrefix(\$fqcn);

        \$this->assertSame(\$expectedBlockPrefix, \$blockPrefix);
    }

    public function fqcnToBlockPrefixProvider()
    {
        return [
            ['TYPE', 'type'],
            ['\\Type', 'type'],
            ['\\UserType', 'user'],
            ['UserType', 'user'],
            ['Vendor\\Name\\Space\\Type', 'type'],
            ['Vendor\\Name\\Space\\UserForm', 'user_form'],
            ['Vendor\\Name\\Space\\UserType', 'user'],
            ['Vendor\\Name\\Space\\usertype', 'user'],
            ['Symfony\\Component\\Form\\Form', 'form'],
            ['Vendor\\Name\\Space\\BarTypeBazType', 'bar_type_baz'],
            ['FooBarBazType', 'foo_bar_baz'],
        ];
    }
}
", "vendor/symfony/form/Tests/Util/StringUtilTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Util/StringUtilTest.php");
    }
}
