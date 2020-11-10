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

/* vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php */
class __TwigTemplate_4378897dac0493a42cbcb19ac2aad43148fb9cf245bc230578ec00077b9a5a19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\CodeExtension;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

class CodeExtensionTest extends TestCase
{
    public function testFormatFile()
    {
        \$expected = sprintf('<a href=\"proto://foobar%s#&amp;line=25\" title=\"Click to open this file\" class=\"file_link\">%s at line 25</a>', substr(__FILE__, 5), __FILE__);
        \$this->assertEquals(\$expected, \$this->getExtension()->formatFile(__FILE__, 25));
    }

    public function testFileRelative()
    {
        \$this->assertEquals('file.txt', \$this->getExtension()->getFileRelative(\\DIRECTORY_SEPARATOR.'project'.\\DIRECTORY_SEPARATOR.'file.txt'));
    }

    /**
     * @dataProvider getClassNameProvider
     */
    public function testGettingClassAbbreviation(\$class, \$abbr)
    {
        \$this->assertEquals(\$this->getExtension()->abbrClass(\$class), \$abbr);
    }

    /**
     * @dataProvider getMethodNameProvider
     */
    public function testGettingMethodAbbreviation(\$method, \$abbr)
    {
        \$this->assertEquals(\$this->getExtension()->abbrMethod(\$method), \$abbr);
    }

    public function getClassNameProvider()
    {
        return [
            ['F\\Q\\N\\Foo', '<abbr title=\"F\\Q\\N\\Foo\">Foo</abbr>'],
            ['Bare', '<abbr title=\"Bare\">Bare</abbr>'],
        ];
    }

    public function getMethodNameProvider()
    {
        return [
            ['F\\Q\\N\\Foo::Method', '<abbr title=\"F\\Q\\N\\Foo\">Foo</abbr>::Method()'],
            ['Bare::Method', '<abbr title=\"Bare\">Bare</abbr>::Method()'],
            ['Closure', '<abbr title=\"Closure\">Closure</abbr>'],
            ['Method', '<abbr title=\"Method\">Method</abbr>()'],
        ];
    }

    public function testGetName()
    {
        \$this->assertEquals('code', \$this->getExtension()->getName());
    }

    protected function getExtension()
    {
        return new CodeExtension(new FileLinkFormatter('proto://%f#&line=%l&'.substr(__FILE__, 0, 5).'>foobar'), \\DIRECTORY_SEPARATOR.'project', 'UTF-8');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\CodeExtension;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

class CodeExtensionTest extends TestCase
{
    public function testFormatFile()
    {
        \$expected = sprintf('<a href=\"proto://foobar%s#&amp;line=25\" title=\"Click to open this file\" class=\"file_link\">%s at line 25</a>', substr(__FILE__, 5), __FILE__);
        \$this->assertEquals(\$expected, \$this->getExtension()->formatFile(__FILE__, 25));
    }

    public function testFileRelative()
    {
        \$this->assertEquals('file.txt', \$this->getExtension()->getFileRelative(\\DIRECTORY_SEPARATOR.'project'.\\DIRECTORY_SEPARATOR.'file.txt'));
    }

    /**
     * @dataProvider getClassNameProvider
     */
    public function testGettingClassAbbreviation(\$class, \$abbr)
    {
        \$this->assertEquals(\$this->getExtension()->abbrClass(\$class), \$abbr);
    }

    /**
     * @dataProvider getMethodNameProvider
     */
    public function testGettingMethodAbbreviation(\$method, \$abbr)
    {
        \$this->assertEquals(\$this->getExtension()->abbrMethod(\$method), \$abbr);
    }

    public function getClassNameProvider()
    {
        return [
            ['F\\Q\\N\\Foo', '<abbr title=\"F\\Q\\N\\Foo\">Foo</abbr>'],
            ['Bare', '<abbr title=\"Bare\">Bare</abbr>'],
        ];
    }

    public function getMethodNameProvider()
    {
        return [
            ['F\\Q\\N\\Foo::Method', '<abbr title=\"F\\Q\\N\\Foo\">Foo</abbr>::Method()'],
            ['Bare::Method', '<abbr title=\"Bare\">Bare</abbr>::Method()'],
            ['Closure', '<abbr title=\"Closure\">Closure</abbr>'],
            ['Method', '<abbr title=\"Method\">Method</abbr>()'],
        ];
    }

    public function testGetName()
    {
        \$this->assertEquals('code', \$this->getExtension()->getName());
    }

    protected function getExtension()
    {
        return new CodeExtension(new FileLinkFormatter('proto://%f#&line=%l&'.substr(__FILE__, 0, 5).'>foobar'), \\DIRECTORY_SEPARATOR.'project', 'UTF-8');
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/CodeExtensionTest.php");
    }
}
