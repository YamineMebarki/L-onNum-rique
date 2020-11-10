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

/* vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php */
class __TwigTemplate_b124626ba518e17e73ae836851215cb95abe5110a3f2b32a9a0bc760f238b3b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php"));

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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\TokenProcessor;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;

/**
 * Tests the TokenProcessor.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class TokenProcessorTest extends TestCase
{
    public function testProcessor()
    {
        \$token = new UsernamePasswordToken('user', 'password', 'provider', ['ROLE_USER']);
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$processor = new TokenProcessor(\$tokenStorage);
        \$record = ['extra' => []];
        \$record = \$processor(\$record);

        \$this->assertArrayHasKey('token', \$record['extra']);
        \$this->assertEquals(\$token->getUsername(), \$record['extra']['token']['username']);
        \$this->assertEquals(\$token->isAuthenticated(), \$record['extra']['token']['authenticated']);
        \$this->assertEquals(['ROLE_USER'], \$record['extra']['token']['roles']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php";
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

namespace Symfony\\Bridge\\Monolog\\Tests\\Processor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Monolog\\Processor\\TokenProcessor;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;

/**
 * Tests the TokenProcessor.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class TokenProcessorTest extends TestCase
{
    public function testProcessor()
    {
        \$token = new UsernamePasswordToken('user', 'password', 'provider', ['ROLE_USER']);
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();
        \$tokenStorage->method('getToken')->willReturn(\$token);

        \$processor = new TokenProcessor(\$tokenStorage);
        \$record = ['extra' => []];
        \$record = \$processor(\$record);

        \$this->assertArrayHasKey('token', \$record['extra']);
        \$this->assertEquals(\$token->getUsername(), \$record['extra']['token']['username']);
        \$this->assertEquals(\$token->isAuthenticated(), \$record['extra']['token']['authenticated']);
        \$this->assertEquals(['ROLE_USER'], \$record['extra']['token']['roles']);
    }
}
", "vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Tests/Processor/TokenProcessorTest.php");
    }
}
