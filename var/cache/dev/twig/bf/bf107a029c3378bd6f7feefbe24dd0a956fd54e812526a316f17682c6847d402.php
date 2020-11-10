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

/* vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php */
class __TwigTemplate_cf9d607ef29bcb795e8477f66f5c0766f0b13489cf96f29da20757278718116e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

/**
 * Collects and replays skipped tests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SymfonyTestsListenerForV5 extends \\PHPUnit_Framework_BaseTestListener
{
    private \$trait;

    public function __construct(array \$mockedNamespaces = array())
    {
        \$this->trait = new SymfonyTestsListenerTrait(\$mockedNamespaces);
    }

    public function globalListenerDisabled()
    {
        \$this->trait->globalListenerDisabled();
    }

    public function startTestSuite(\\PHPUnit_Framework_TestSuite \$suite)
    {
        \$this->trait->startTestSuite(\$suite);
    }

    public function addSkippedTest(\\PHPUnit_Framework_Test \$test, \\Exception \$e, \$time)
    {
        \$this->trait->addSkippedTest(\$test, \$e, \$time);
    }

    public function startTest(\\PHPUnit_Framework_Test \$test)
    {
        \$this->trait->startTest(\$test);
    }

    public function addWarning(\\PHPUnit_Framework_Test \$test, \\PHPUnit_Framework_Warning \$e, \$time)
    {
        \$this->trait->addWarning(\$test, \$e, \$time);
    }

    public function endTest(\\PHPUnit_Framework_Test \$test, \$time)
    {
        \$this->trait->endTest(\$test, \$time);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

/**
 * Collects and replays skipped tests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SymfonyTestsListenerForV5 extends \\PHPUnit_Framework_BaseTestListener
{
    private \$trait;

    public function __construct(array \$mockedNamespaces = array())
    {
        \$this->trait = new SymfonyTestsListenerTrait(\$mockedNamespaces);
    }

    public function globalListenerDisabled()
    {
        \$this->trait->globalListenerDisabled();
    }

    public function startTestSuite(\\PHPUnit_Framework_TestSuite \$suite)
    {
        \$this->trait->startTestSuite(\$suite);
    }

    public function addSkippedTest(\\PHPUnit_Framework_Test \$test, \\Exception \$e, \$time)
    {
        \$this->trait->addSkippedTest(\$test, \$e, \$time);
    }

    public function startTest(\\PHPUnit_Framework_Test \$test)
    {
        \$this->trait->startTest(\$test);
    }

    public function addWarning(\\PHPUnit_Framework_Test \$test, \\PHPUnit_Framework_Warning \$e, \$time)
    {
        \$this->trait->addWarning(\$test, \$e, \$time);
    }

    public function endTest(\\PHPUnit_Framework_Test \$test, \$time)
    {
        \$this->trait->endTest(\$test, \$time);
    }
}
", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV5.php");
    }
}
