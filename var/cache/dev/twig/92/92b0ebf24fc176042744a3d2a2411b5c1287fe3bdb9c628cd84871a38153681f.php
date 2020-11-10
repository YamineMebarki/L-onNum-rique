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

/* vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php */
class __TwigTemplate_2125121cc06a8e583559a9a9718ddd1b054bb3879aa99dee567ac0dc98ec231d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie;

class ResponseHasCookieTest extends TestCase
{
    public function testConstraint(): void
    {
        \$response = new Response();
        \$response->headers->setCookie(Cookie::create('foo', 'bar'));
        \$constraint = new ResponseHasCookie('foo');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseHasCookie('bar');
        \$this->assertFalse(\$constraint->evaluate(\$response, '', true));

        try {
            \$constraint->evaluate(\$response);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Response has cookie \\\"bar\\\".\\n\", TestFailure::exceptionToString(\$e));

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
        return "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php";
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
use Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie;

class ResponseHasCookieTest extends TestCase
{
    public function testConstraint(): void
    {
        \$response = new Response();
        \$response->headers->setCookie(Cookie::create('foo', 'bar'));
        \$constraint = new ResponseHasCookie('foo');
        \$this->assertTrue(\$constraint->evaluate(\$response, '', true));
        \$constraint = new ResponseHasCookie('bar');
        \$this->assertFalse(\$constraint->evaluate(\$response, '', true));

        try {
            \$constraint->evaluate(\$response);
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Response has cookie \\\"bar\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }
}
", "vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Test/Constraint/ResponseHasCookieTest.php");
    }
}
