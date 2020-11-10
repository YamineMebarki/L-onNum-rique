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

/* vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php */
class __TwigTemplate_32132ade8e713f1a8dfb690b7593ecd81e883bfc7fba2820712a405d6bc2f955 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\EntryPoint;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint;

class BasicAuthenticationEntryPointTest extends TestCase
{
    public function testStart()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        \$authException = new AuthenticationException('The exception message');

        \$entryPoint = new BasicAuthenticationEntryPoint('TheRealmName');
        \$response = \$entryPoint->start(\$request, \$authException);

        \$this->assertEquals('Basic realm=\"TheRealmName\"', \$response->headers->get('WWW-Authenticate'));
        \$this->assertEquals(401, \$response->getStatusCode());
    }

    public function testStartWithoutAuthException()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        \$entryPoint = new BasicAuthenticationEntryPoint('TheRealmName');

        \$response = \$entryPoint->start(\$request);

        \$this->assertEquals('Basic realm=\"TheRealmName\"', \$response->headers->get('WWW-Authenticate'));
        \$this->assertEquals(401, \$response->getStatusCode());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\EntryPoint;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint;

class BasicAuthenticationEntryPointTest extends TestCase
{
    public function testStart()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        \$authException = new AuthenticationException('The exception message');

        \$entryPoint = new BasicAuthenticationEntryPoint('TheRealmName');
        \$response = \$entryPoint->start(\$request, \$authException);

        \$this->assertEquals('Basic realm=\"TheRealmName\"', \$response->headers->get('WWW-Authenticate'));
        \$this->assertEquals(401, \$response->getStatusCode());
    }

    public function testStartWithoutAuthException()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();

        \$entryPoint = new BasicAuthenticationEntryPoint('TheRealmName');

        \$response = \$entryPoint->start(\$request);

        \$this->assertEquals('Basic realm=\"TheRealmName\"', \$response->headers->get('WWW-Authenticate'));
        \$this->assertEquals(401, \$response->getStatusCode());
    }
}
", "vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/EntryPoint/BasicAuthenticationEntryPointTest.php");
    }
}
