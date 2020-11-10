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

/* vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php */
class __TwigTemplate_d9867e58e4b004e6e9d62574c8dbc53a442a0b7bf2ebeaad963bf213bcb145ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php"));

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

namespace Symfony\\Component\\HttpClient\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class HttpExceptionTraitTest extends TestCase
{
    public function provideParseError()
    {
        yield ['application/ld+json', '{\"hydra:title\": \"An error occurred\", \"hydra:description\": \"Some details\"}'];
        yield ['application/problem+json', '{\"title\": \"An error occurred\", \"detail\": \"Some details\"}'];
        yield ['application/vnd.api+json', '{\"title\": \"An error occurred\", \"detail\": \"Some details\"}'];
    }

    /**
     * @dataProvider provideParseError
     */
    public function testParseError(string \$mimeType, string \$json): void
    {
        \$response = \$this->createMock(ResponseInterface::class);
        \$response
            ->method('getInfo')
            ->willReturnMap([
                ['http_code', 400],
                ['url', 'http://example.com'],
                ['response_headers', [
                    'HTTP/1.1 400 Bad Request',
                    'Content-Type: '.\$mimeType,
                ]],
            ]);
        \$response->method('getContent')->willReturn(\$json);

        \$e = new TestException(\$response);
        \$this->assertSame(400, \$e->getCode());
        \$this->assertSame(<<<ERROR
An error occurred

Some details
ERROR
, \$e->getMessage());
    }
}

class TestException extends \\Exception
{
    use HttpExceptionTrait;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php";
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

namespace Symfony\\Component\\HttpClient\\Tests\\Exception;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class HttpExceptionTraitTest extends TestCase
{
    public function provideParseError()
    {
        yield ['application/ld+json', '{\"hydra:title\": \"An error occurred\", \"hydra:description\": \"Some details\"}'];
        yield ['application/problem+json', '{\"title\": \"An error occurred\", \"detail\": \"Some details\"}'];
        yield ['application/vnd.api+json', '{\"title\": \"An error occurred\", \"detail\": \"Some details\"}'];
    }

    /**
     * @dataProvider provideParseError
     */
    public function testParseError(string \$mimeType, string \$json): void
    {
        \$response = \$this->createMock(ResponseInterface::class);
        \$response
            ->method('getInfo')
            ->willReturnMap([
                ['http_code', 400],
                ['url', 'http://example.com'],
                ['response_headers', [
                    'HTTP/1.1 400 Bad Request',
                    'Content-Type: '.\$mimeType,
                ]],
            ]);
        \$response->method('getContent')->willReturn(\$json);

        \$e = new TestException(\$response);
        \$this->assertSame(400, \$e->getCode());
        \$this->assertSame(<<<ERROR
An error occurred

Some details
ERROR
, \$e->getMessage());
    }
}

class TestException extends \\Exception
{
    use HttpExceptionTrait;
}
", "vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/Exception/HttpExceptionTraitTest.php");
    }
}
