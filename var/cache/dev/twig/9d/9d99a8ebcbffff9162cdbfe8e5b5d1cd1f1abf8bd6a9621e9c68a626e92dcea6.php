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

/* vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php */
class __TwigTemplate_b621d009586cebd6d517ae3a3ca48aff1d31d441e72a661a98936bab00c06ccf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

use Symfony\\Component\\HttpFoundation\\JsonResponse;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class JsonLoginTest extends AbstractWebTestCase
{
    public function testDefaultJsonLoginSuccess()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"foo\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Welcome @dunglas!'], json_decode(\$response->getContent(), true));
    }

    public function testDefaultJsonLoginFailure()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"bad\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(401, \$response->getStatusCode());
        \$this->assertSame(['error' => 'Invalid credentials.'], json_decode(\$response->getContent(), true));
    }

    public function testCustomJsonLoginSuccess()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'custom_handlers.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"foo\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Good game @dunglas!'], json_decode(\$response->getContent(), true));
    }

    public function testCustomJsonLoginFailure()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'custom_handlers.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"bad\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(500, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Something went wrong'], json_decode(\$response->getContent(), true));
    }

    public function testDefaultJsonLoginBadRequest()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], 'Not a json content');
        \$response = \$client->getResponse();

        \$this->assertSame(400, \$response->getStatusCode());
        \$this->assertSame('application/json', \$response->headers->get('Content-Type'));
        \$this->assertSame(['error' => ['code' => 400, 'message' => 'Bad Request']], json_decode(\$response->getContent(), true));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

use Symfony\\Component\\HttpFoundation\\JsonResponse;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class JsonLoginTest extends AbstractWebTestCase
{
    public function testDefaultJsonLoginSuccess()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"foo\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Welcome @dunglas!'], json_decode(\$response->getContent(), true));
    }

    public function testDefaultJsonLoginFailure()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"bad\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(401, \$response->getStatusCode());
        \$this->assertSame(['error' => 'Invalid credentials.'], json_decode(\$response->getContent(), true));
    }

    public function testCustomJsonLoginSuccess()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'custom_handlers.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"foo\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Good game @dunglas!'], json_decode(\$response->getContent(), true));
    }

    public function testCustomJsonLoginFailure()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'custom_handlers.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], '{\"user\": {\"login\": \"dunglas\", \"password\": \"bad\"}}');
        \$response = \$client->getResponse();

        \$this->assertInstanceOf(JsonResponse::class, \$response);
        \$this->assertSame(500, \$response->getStatusCode());
        \$this->assertSame(['message' => 'Something went wrong'], json_decode(\$response->getContent(), true));
    }

    public function testDefaultJsonLoginBadRequest()
    {
        \$client = \$this->createClient(['test_case' => 'JsonLogin', 'root_config' => 'config.yml']);
        \$client->request('POST', '/chk', [], [], ['CONTENT_TYPE' => 'application/json'], 'Not a json content');
        \$response = \$client->getResponse();

        \$this->assertSame(400, \$response->getStatusCode());
        \$this->assertSame('application/json', \$response->headers->get('Content-Type'));
        \$this->assertSame(['error' => ['code' => 400, 'message' => 'Bad Request']], json_decode(\$response->getContent(), true));
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/JsonLoginTest.php");
    }
}
