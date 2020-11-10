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

/* vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php */
class __TwigTemplate_496d307dfb39534ec07fd2cd13cc3f0cfad2396f136595b149a19eb188af7de1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php"));

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
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher;
use Symfony\\Component\\HttpFoundation\\Request;

class ExpressionRequestMatcherTest extends TestCase
{
    public function testWhenNoExpressionIsSet()
    {
        \$this->expectException('LogicException');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();
        \$expressionRequestMatcher->matches(new Request());
    }

    /**
     * @dataProvider provideExpressions
     */
    public function testMatchesWhenParentMatchesIsTrue(\$expression, \$expected)
    {
        \$request = Request::create('/foo');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();

        \$expressionRequestMatcher->setExpression(new ExpressionLanguage(), \$expression);
        \$this->assertSame(\$expected, \$expressionRequestMatcher->matches(\$request));
    }

    /**
     * @dataProvider provideExpressions
     */
    public function testMatchesWhenParentMatchesIsFalse(\$expression)
    {
        \$request = Request::create('/foo');
        \$request->attributes->set('foo', 'foo');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();
        \$expressionRequestMatcher->matchAttribute('foo', 'bar');

        \$expressionRequestMatcher->setExpression(new ExpressionLanguage(), \$expression);
        \$this->assertFalse(\$expressionRequestMatcher->matches(\$request));
    }

    public function provideExpressions()
    {
        return [
            ['request.getMethod() == method', true],
            ['request.getPathInfo() == path', true],
            ['request.getHost() == host', true],
            ['request.getClientIp() == ip', true],
            ['request.attributes.all() == attributes', true],
            ['request.getMethod() == method && request.getPathInfo() == path && request.getHost() == host && request.getClientIp() == ip &&  request.attributes.all() == attributes', true],
            ['request.getMethod() != method', false],
            ['request.getMethod() != method && request.getPathInfo() == path && request.getHost() == host && request.getClientIp() == ip &&  request.attributes.all() == attributes', false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php";
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
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher;
use Symfony\\Component\\HttpFoundation\\Request;

class ExpressionRequestMatcherTest extends TestCase
{
    public function testWhenNoExpressionIsSet()
    {
        \$this->expectException('LogicException');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();
        \$expressionRequestMatcher->matches(new Request());
    }

    /**
     * @dataProvider provideExpressions
     */
    public function testMatchesWhenParentMatchesIsTrue(\$expression, \$expected)
    {
        \$request = Request::create('/foo');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();

        \$expressionRequestMatcher->setExpression(new ExpressionLanguage(), \$expression);
        \$this->assertSame(\$expected, \$expressionRequestMatcher->matches(\$request));
    }

    /**
     * @dataProvider provideExpressions
     */
    public function testMatchesWhenParentMatchesIsFalse(\$expression)
    {
        \$request = Request::create('/foo');
        \$request->attributes->set('foo', 'foo');
        \$expressionRequestMatcher = new ExpressionRequestMatcher();
        \$expressionRequestMatcher->matchAttribute('foo', 'bar');

        \$expressionRequestMatcher->setExpression(new ExpressionLanguage(), \$expression);
        \$this->assertFalse(\$expressionRequestMatcher->matches(\$request));
    }

    public function provideExpressions()
    {
        return [
            ['request.getMethod() == method', true],
            ['request.getPathInfo() == path', true],
            ['request.getHost() == host', true],
            ['request.getClientIp() == ip', true],
            ['request.attributes.all() == attributes', true],
            ['request.getMethod() == method && request.getPathInfo() == path && request.getHost() == host && request.getClientIp() == ip &&  request.attributes.all() == attributes', true],
            ['request.getMethod() != method', false],
            ['request.getMethod() != method && request.getPathInfo() == path && request.getHost() == host && request.getClientIp() == ip &&  request.attributes.all() == attributes', false],
        ];
    }
}
", "vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/ExpressionRequestMatcherTest.php");
    }
}
