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

/* vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php */
class __TwigTemplate_73d23b602d70fb7f95c1938974d9c160780bd8ca8d1489127b4ea9dded18b80e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler;

class DefaultLogoutSuccessHandlerTest extends TestCase
{
    public function testLogout()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$response = new RedirectResponse('/dashboard');

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')
            ->with(\$request, '/dashboard')
            ->willReturn(\$response);

        \$handler = new DefaultLogoutSuccessHandler(\$httpUtils, '/dashboard');
        \$result = \$handler->onLogoutSuccess(\$request);

        \$this->assertSame(\$response, \$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler;

class DefaultLogoutSuccessHandlerTest extends TestCase
{
    public function testLogout()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$response = new RedirectResponse('/dashboard');

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils->expects(\$this->once())
            ->method('createRedirectResponse')
            ->with(\$request, '/dashboard')
            ->willReturn(\$response);

        \$handler = new DefaultLogoutSuccessHandler(\$httpUtils, '/dashboard');
        \$result = \$handler->onLogoutSuccess(\$request);

        \$this->assertSame(\$response, \$result);
    }
}
", "vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Logout/DefaultLogoutSuccessHandlerTest.php");
    }
}
