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

/* vendor/symfony/http-foundation/Tests/ResponseTestCase.php */
class __TwigTemplate_3e4ff93163168100a8c1388180330219e1b0a5478552c2a3d6d7453b1add1fe5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ResponseTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ResponseTestCase.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;

abstract class ResponseTestCase extends TestCase
{
    public function testNoCacheControlHeaderOnAttachmentUsingHTTPSAndMSIE()
    {
        // Check for HTTPS and IE 8
        \$request = new Request();
        \$request->server->set('HTTPS', true);
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertFalse(\$response->headers->has('Cache-Control'));

        // Check for IE 10 and HTTPS
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 9 and HTTPS
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 9 and HTTP
        \$request->server->set('HTTPS', false);

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 8 and HTTP
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for non-IE and HTTPS
        \$request->server->set('HTTPS', true);
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for non-IE and HTTP
        \$request->server->set('HTTPS', false);

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));
    }

    abstract protected function provideResponse();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/ResponseTestCase.php";
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
use Symfony\\Component\\HttpFoundation\\Request;

abstract class ResponseTestCase extends TestCase
{
    public function testNoCacheControlHeaderOnAttachmentUsingHTTPSAndMSIE()
    {
        // Check for HTTPS and IE 8
        \$request = new Request();
        \$request->server->set('HTTPS', true);
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertFalse(\$response->headers->has('Cache-Control'));

        // Check for IE 10 and HTTPS
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 9 and HTTPS
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 9 and HTTP
        \$request->server->set('HTTPS', false);

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for IE 8 and HTTP
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for non-IE and HTTPS
        \$request->server->set('HTTPS', true);
        \$request->server->set('HTTP_USER_AGENT', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17');

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));

        // Check for non-IE and HTTP
        \$request->server->set('HTTPS', false);

        \$response = \$this->provideResponse();
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"fname.ext\"');
        \$response->prepare(\$request);

        \$this->assertTrue(\$response->headers->has('Cache-Control'));
    }

    abstract protected function provideResponse();
}
", "vendor/symfony/http-foundation/Tests/ResponseTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/ResponseTestCase.php");
    }
}
