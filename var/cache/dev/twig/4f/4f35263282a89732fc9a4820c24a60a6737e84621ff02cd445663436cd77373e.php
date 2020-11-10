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

/* vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php */
class __TwigTemplate_39902b2f5d99bd417085ff0af0f9684fed4ca48f82883ea290a3f7a4bf72d1f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame;

class ResponseCookieValueSameTest extends TestCase
{
    public function testConstraint(): void
    {
        \$response = new Response();
        \$response->headers->setCookie(Cookie::create('foo', 'bar', 0, '/path'));
        \$constraint = new ResponseCookieValueSame('foo', 'bar', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseCookieValueSame('foo', 'bar', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseCookieValueSame('foo', 'babar', '/path');
        \$this->assertFalse(\$constraint->evaluate(\$response, '', true));

        try {
            \$constraint->evaluate(\$response);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Response has cookie \\\"foo\\\" with path \\\"/path\\\" with value \\\"babar\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame;

class ResponseCookieValueSameTest extends TestCase
{
    public function testConstraint(): void
    {
        \$response = new Response();
        \$response->headers->setCookie(Cookie::create('foo', 'bar', 0, '/path'));
        \$constraint = new ResponseCookieValueSame('foo', 'bar', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseCookieValueSame('foo', 'bar', '/path');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseCookieValueSame('foo', 'babar', '/path');
        \$this->assertFalse(\$constraint->evaluate(\$response, '', true));

        try {
            \$constraint->evaluate(\$response);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Response has cookie \\\"foo\\\" with path \\\"/path\\\" with value \\\"babar\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }
}
", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseCookieValueSameTest.php");
    }
}
