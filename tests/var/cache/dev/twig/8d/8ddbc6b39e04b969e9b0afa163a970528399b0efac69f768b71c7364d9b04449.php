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

/* vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php */
class __TwigTemplate_78effafde1c765245953abfcb75304d4c992b01351c67d9a9f0e7898497a725c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php"));

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

use PHPUnit\\Framework\\Test;
use PHPUnit\\Framework\\TestListener;
use PHPUnit\\Framework\\TestListenerDefaultImplementation;
use PHPUnit\\Framework\\TestSuite;
use PHPUnit\\Framework\\Warning;

/**
 * Collects and replays skipped tests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SymfonyTestsListenerForV7 implements TestListener
{
    use TestListenerDefaultImplementation;

    private \$trait;

    public function __construct(array \$mockedNamespaces = array())
    {
        \$this->trait = new SymfonyTestsListenerTrait(\$mockedNamespaces);
    }

    public function globalListenerDisabled()
    {
        \$this->trait->globalListenerDisabled();
    }

    public function startTestSuite(TestSuite \$suite): void
    {
        \$this->trait->startTestSuite(\$suite);
    }

    public function addSkippedTest(Test \$test, \\Throwable \$t, float \$time): void
    {
        \$this->trait->addSkippedTest(\$test, \$t, \$time);
    }

    public function startTest(Test \$test): void
    {
        \$this->trait->startTest(\$test);
    }

    public function addWarning(Test \$test, Warning \$e, float \$time): void
    {
        \$this->trait->addWarning(\$test, \$e, \$time);
    }

    public function endTest(Test \$test, float \$time): void
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
        return "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php";
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

use PHPUnit\\Framework\\Test;
use PHPUnit\\Framework\\TestListener;
use PHPUnit\\Framework\\TestListenerDefaultImplementation;
use PHPUnit\\Framework\\TestSuite;
use PHPUnit\\Framework\\Warning;

/**
 * Collects and replays skipped tests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class SymfonyTestsListenerForV7 implements TestListener
{
    use TestListenerDefaultImplementation;

    private \$trait;

    public function __construct(array \$mockedNamespaces = array())
    {
        \$this->trait = new SymfonyTestsListenerTrait(\$mockedNamespaces);
    }

    public function globalListenerDisabled()
    {
        \$this->trait->globalListenerDisabled();
    }

    public function startTestSuite(TestSuite \$suite): void
    {
        \$this->trait->startTestSuite(\$suite);
    }

    public function addSkippedTest(Test \$test, \\Throwable \$t, float \$time): void
    {
        \$this->trait->addSkippedTest(\$test, \$t, \$time);
    }

    public function startTest(Test \$test): void
    {
        \$this->trait->startTest(\$test);
    }

    public function addWarning(Test \$test, Warning \$e, float \$time): void
    {
        \$this->trait->addWarning(\$test, \$e, \$time);
    }

    public function endTest(Test \$test, float \$time): void
    {
        \$this->trait->endTest(\$test, \$time);
    }
}
", "vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Legacy/SymfonyTestsListenerForV7.php");
    }
}
