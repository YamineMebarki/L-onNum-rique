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

/* vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php */
class __TwigTemplate_6799a0bc7fc8eeb0e42376f2e16417f5379de8b44e26e801dac3aa62d5d38304 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Cookie;
use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\Test\\Constraint\\BrowserHasCookie;

class BrowserHasCookieTest extends TestCase
{
    public function testConstraint(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$browser, '', true));
        \$constraint = new BrowserHasCookie('foo', '/path', 'example.com');
        \$this->assertTrue(\$constraint->evaluate(\$browser, '', true));
        \$constraint = new BrowserHasCookie('bar');
        \$this->assertFalse(\$constraint->evaluate(\$browser, '', true));

        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"bar\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    public function testConstraintWithWrongPath(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/other');
        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"foo\\\" with path \\\"/other\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    public function testConstraintWithWrongDomain(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/path', 'example.org');
        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"foo\\\" with path \\\"/path\\\" for domain \\\"example.org\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    private function getBrowser(): AbstractBrowser
    {
        \$browser = \$this->createMock(AbstractBrowser::class);
        \$jar = new CookieJar();
        \$jar->set(new Cookie('foo', 'bar', null, '/path', 'example.com'));
        \$browser->expects(\$this->any())->method('getCookieJar')->willReturn(\$jar);

        return \$browser;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Cookie;
use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\Test\\Constraint\\BrowserHasCookie;

class BrowserHasCookieTest extends TestCase
{
    public function testConstraint(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$browser, '', true));
        \$constraint = new BrowserHasCookie('foo', '/path', 'example.com');
        \$this->assertTrue(\$constraint->evaluate(\$browser, '', true));
        \$constraint = new BrowserHasCookie('bar');
        \$this->assertFalse(\$constraint->evaluate(\$browser, '', true));

        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"bar\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    public function testConstraintWithWrongPath(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/other');
        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"foo\\\" with path \\\"/other\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    public function testConstraintWithWrongDomain(): void
    {
        \$browser = \$this->getBrowser();
        \$constraint = new BrowserHasCookie('foo', '/path', 'example.org');
        try {
            \$constraint->evaluate(\$browser);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Browser has cookie \\\"foo\\\" with path \\\"/path\\\" for domain \\\"example.org\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }

    private function getBrowser(): AbstractBrowser
    {
        \$browser = \$this->createMock(AbstractBrowser::class);
        \$jar = new CookieJar();
        \$jar->set(new Cookie('foo', 'bar', null, '/path', 'example.com'));
        \$browser->expects(\$this->any())->method('getCookieJar')->willReturn(\$jar);

        return \$browser;
    }
}
", "vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/Test/Constraint/BrowserHasCookieTest.php");
    }
}
