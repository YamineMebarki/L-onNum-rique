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

/* vendor/symfony/http-kernel/Tests/UriSignerTest.php */
class __TwigTemplate_4e2018b14a740bbf2d0e2abe3eaa523855e981534029bb459760255dadb4c976 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/UriSignerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/UriSignerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\UriSigner;

class UriSignerTest extends TestCase
{
    public function testSign()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertStringContainsString('?_hash=', \$signer->sign('http://example.com/foo'));
        \$this->assertStringContainsString('?_hash=', \$signer->sign('http://example.com/foo?foo=bar'));
        \$this->assertStringContainsString('&foo=', \$signer->sign('http://example.com/foo?foo=bar'));
    }

    public function testCheck()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertFalse(\$signer->check('http://example.com/foo?_hash=foo'));
        \$this->assertFalse(\$signer->check('http://example.com/foo?foo=bar&_hash=foo'));
        \$this->assertFalse(\$signer->check('http://example.com/foo?foo=bar&_hash=foo&bar=foo'));

        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo')));
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar')));
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&0=integer')));

        \$this->assertSame(\$signer->sign('http://example.com/foo?foo=bar&bar=foo'), \$signer->sign('http://example.com/foo?bar=foo&foo=bar'));
    }

    public function testCheckWithDifferentArgSeparator()
    {
        \$this->iniSet('arg_separator.output', '&amp;');
        \$signer = new UriSigner('foobar');

        \$this->assertSame(
            'http://example.com/foo?_hash=rIOcC%2FF3DoEGo%2FvnESjSp7uU9zA9S%2F%2BOLhxgMexoPUM%3D&baz=bay&foo=bar',
            \$signer->sign('http://example.com/foo?foo=bar&baz=bay')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&baz=bay')));
    }

    public function testCheckWithDifferentParameter()
    {
        \$signer = new UriSigner('foobar', 'qux');

        \$this->assertSame(
            'http://example.com/foo?baz=bay&foo=bar&qux=rIOcC%2FF3DoEGo%2FvnESjSp7uU9zA9S%2F%2BOLhxgMexoPUM%3D',
            \$signer->sign('http://example.com/foo?foo=bar&baz=bay')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&baz=bay')));
    }

    public function testSignerWorksWithFragments()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertSame(
            'http://example.com/foo?_hash=EhpAUyEobiM3QTrKxoLOtQq5IsWyWedoXDPqIjzNj5o%3D&bar=foo&foo=bar#foobar',
            \$signer->sign('http://example.com/foo?bar=foo&foo=bar#foobar')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?bar=foo&foo=bar#foobar')));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/UriSignerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\UriSigner;

class UriSignerTest extends TestCase
{
    public function testSign()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertStringContainsString('?_hash=', \$signer->sign('http://example.com/foo'));
        \$this->assertStringContainsString('?_hash=', \$signer->sign('http://example.com/foo?foo=bar'));
        \$this->assertStringContainsString('&foo=', \$signer->sign('http://example.com/foo?foo=bar'));
    }

    public function testCheck()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertFalse(\$signer->check('http://example.com/foo?_hash=foo'));
        \$this->assertFalse(\$signer->check('http://example.com/foo?foo=bar&_hash=foo'));
        \$this->assertFalse(\$signer->check('http://example.com/foo?foo=bar&_hash=foo&bar=foo'));

        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo')));
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar')));
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&0=integer')));

        \$this->assertSame(\$signer->sign('http://example.com/foo?foo=bar&bar=foo'), \$signer->sign('http://example.com/foo?bar=foo&foo=bar'));
    }

    public function testCheckWithDifferentArgSeparator()
    {
        \$this->iniSet('arg_separator.output', '&amp;');
        \$signer = new UriSigner('foobar');

        \$this->assertSame(
            'http://example.com/foo?_hash=rIOcC%2FF3DoEGo%2FvnESjSp7uU9zA9S%2F%2BOLhxgMexoPUM%3D&baz=bay&foo=bar',
            \$signer->sign('http://example.com/foo?foo=bar&baz=bay')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&baz=bay')));
    }

    public function testCheckWithDifferentParameter()
    {
        \$signer = new UriSigner('foobar', 'qux');

        \$this->assertSame(
            'http://example.com/foo?baz=bay&foo=bar&qux=rIOcC%2FF3DoEGo%2FvnESjSp7uU9zA9S%2F%2BOLhxgMexoPUM%3D',
            \$signer->sign('http://example.com/foo?foo=bar&baz=bay')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?foo=bar&baz=bay')));
    }

    public function testSignerWorksWithFragments()
    {
        \$signer = new UriSigner('foobar');

        \$this->assertSame(
            'http://example.com/foo?_hash=EhpAUyEobiM3QTrKxoLOtQq5IsWyWedoXDPqIjzNj5o%3D&bar=foo&foo=bar#foobar',
            \$signer->sign('http://example.com/foo?bar=foo&foo=bar#foobar')
        );
        \$this->assertTrue(\$signer->check(\$signer->sign('http://example.com/foo?bar=foo&foo=bar#foobar')));
    }
}
", "vendor/symfony/http-kernel/Tests/UriSignerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/UriSignerTest.php");
    }
}
