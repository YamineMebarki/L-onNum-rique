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

/* vendor/symfony/browser-kit/Tests/TestHttpClient.php */
class __TwigTemplate_64d7b38135822b63c921191f977d0a9d9e91def79d4f40898c8cfa19c2bbf737 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/TestHttpClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/TestHttpClient.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\HttpBrowser;
use Symfony\\Component\\BrowserKit\\Response;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;

class TestHttpClient extends HttpBrowser
{
    protected \$nextResponse = null;
    protected \$nextScript = null;

    public function __construct(array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        \$client = new MockHttpClient(function (string \$method, string \$url, array \$options) {
            if (null === \$this->nextResponse) {
                return new MockResponse();
            }

            return new MockResponse(\$this->nextResponse->getContent(), [
                'http_code' => \$this->nextResponse->getStatusCode(),
                'response_headers' => \$this->nextResponse->getHeaders(),
            ]);
        });
        parent::__construct(\$client);

        \$this->setServerParameters(\$server);
        \$this->history = \$history ?? new History();
        \$this->cookieJar = \$cookieJar ?? new CookieJar();
    }

    public function setNextResponse(Response \$response)
    {
        \$this->nextResponse = \$response;
    }

    public function setNextScript(\$script)
    {
        \$this->nextScript = \$script;
    }

    protected function doRequest(\$request): Response
    {
        if (null === \$this->nextResponse) {
            return parent::doRequest(\$request);
        }

        \$response = \$this->nextResponse;
        \$this->nextResponse = null;

        return \$response;
    }

    protected function getScript(\$request)
    {
        \$r = new \\ReflectionClass('Symfony\\Component\\BrowserKit\\Response');
        \$path = \$r->getFileName();

        return <<<EOF
<?php

require_once('\$path');

echo serialize(\$this->nextScript);
EOF;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/TestHttpClient.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use Symfony\\Component\\BrowserKit\\CookieJar;
use Symfony\\Component\\BrowserKit\\History;
use Symfony\\Component\\BrowserKit\\HttpBrowser;
use Symfony\\Component\\BrowserKit\\Response;
use Symfony\\Component\\HttpClient\\MockHttpClient;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;

class TestHttpClient extends HttpBrowser
{
    protected \$nextResponse = null;
    protected \$nextScript = null;

    public function __construct(array \$server = [], History \$history = null, CookieJar \$cookieJar = null)
    {
        \$client = new MockHttpClient(function (string \$method, string \$url, array \$options) {
            if (null === \$this->nextResponse) {
                return new MockResponse();
            }

            return new MockResponse(\$this->nextResponse->getContent(), [
                'http_code' => \$this->nextResponse->getStatusCode(),
                'response_headers' => \$this->nextResponse->getHeaders(),
            ]);
        });
        parent::__construct(\$client);

        \$this->setServerParameters(\$server);
        \$this->history = \$history ?? new History();
        \$this->cookieJar = \$cookieJar ?? new CookieJar();
    }

    public function setNextResponse(Response \$response)
    {
        \$this->nextResponse = \$response;
    }

    public function setNextScript(\$script)
    {
        \$this->nextScript = \$script;
    }

    protected function doRequest(\$request): Response
    {
        if (null === \$this->nextResponse) {
            return parent::doRequest(\$request);
        }

        \$response = \$this->nextResponse;
        \$this->nextResponse = null;

        return \$response;
    }

    protected function getScript(\$request)
    {
        \$r = new \\ReflectionClass('Symfony\\Component\\BrowserKit\\Response');
        \$path = \$r->getFileName();

        return <<<EOF
<?php

require_once('\$path');

echo serialize(\$this->nextScript);
EOF;
    }
}
", "vendor/symfony/browser-kit/Tests/TestHttpClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/TestHttpClient.php");
    }
}
