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

/* vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php */
class __TwigTemplate_f41702f5bb2e097aaf17fc21b812a5522f9b7864847493f458e9801851af2095 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php"));

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

use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;

class AutowiringTypesTest extends AbstractWebTestCase
{
    public function testAccessDecisionManagerAutowiring()
    {
        static::bootKernel(['debug' => false]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(AccessDecisionManager::class, \$autowiredServices->getAccessDecisionManager(), 'The security.access.decision_manager service should be injected in debug mode');

        static::bootKernel(['debug' => true]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(TraceableAccessDecisionManager::class, \$autowiredServices->getAccessDecisionManager(), 'The debug.security.access.decision_manager service should be injected in non-debug mode');
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'AutowiringTypes'] + \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php";
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

use Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager;
use Symfony\\Component\\Security\\Core\\Authorization\\TraceableAccessDecisionManager;

class AutowiringTypesTest extends AbstractWebTestCase
{
    public function testAccessDecisionManagerAutowiring()
    {
        static::bootKernel(['debug' => false]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(AccessDecisionManager::class, \$autowiredServices->getAccessDecisionManager(), 'The security.access.decision_manager service should be injected in debug mode');

        static::bootKernel(['debug' => true]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(TraceableAccessDecisionManager::class, \$autowiredServices->getAccessDecisionManager(), 'The debug.security.access.decision_manager service should be injected in non-debug mode');
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'AutowiringTypes'] + \$options);
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/AutowiringTypesTest.php");
    }
}
