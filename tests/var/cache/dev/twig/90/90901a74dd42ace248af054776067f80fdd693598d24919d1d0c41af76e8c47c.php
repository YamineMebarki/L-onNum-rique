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

/* vendor/symfony/form/Test/FormPerformanceTestCase.php */
class __TwigTemplate_cca7b4f1d0c4cfb41491df3902f4f03740634481587cb81663650a47c0efb703 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/FormPerformanceTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/FormPerformanceTestCase.php"));

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

namespace Symfony\\Component\\Form\\Test;

use Symfony\\Component\\Form\\Tests\\VersionAwareTest;

/**
 * Base class for performance tests.
 *
 * Copied from Doctrine 2's OrmPerformanceTestCase.
 *
 * @author robo
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class FormPerformanceTestCase extends FormIntegrationTestCase
{
    use VersionAwareTest;

    /**
     * @var int
     */
    protected \$maxRunningTime = 0;

    /**
     * {@inheritdoc}
     */
    protected function runTest()
    {
        \$s = microtime(true);
        parent::runTest();
        \$time = microtime(true) - \$s;

        if (0 != \$this->maxRunningTime && \$time > \$this->maxRunningTime) {
            \$this->fail(sprintf('expected running time: <= %s but was: %s', \$this->maxRunningTime, \$time));
        }
    }

    /**
     * @param int \$maxRunningTime
     *
     * @throws \\InvalidArgumentException
     */
    public function setMaxRunningTime(\$maxRunningTime)
    {
        if (\\is_int(\$maxRunningTime) && \$maxRunningTime >= 0) {
            \$this->maxRunningTime = \$maxRunningTime;
        } else {
            throw new \\InvalidArgumentException();
        }
    }

    /**
     * @return int
     */
    public function getMaxRunningTime()
    {
        return \$this->maxRunningTime;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Test/FormPerformanceTestCase.php";
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

namespace Symfony\\Component\\Form\\Test;

use Symfony\\Component\\Form\\Tests\\VersionAwareTest;

/**
 * Base class for performance tests.
 *
 * Copied from Doctrine 2's OrmPerformanceTestCase.
 *
 * @author robo
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class FormPerformanceTestCase extends FormIntegrationTestCase
{
    use VersionAwareTest;

    /**
     * @var int
     */
    protected \$maxRunningTime = 0;

    /**
     * {@inheritdoc}
     */
    protected function runTest()
    {
        \$s = microtime(true);
        parent::runTest();
        \$time = microtime(true) - \$s;

        if (0 != \$this->maxRunningTime && \$time > \$this->maxRunningTime) {
            \$this->fail(sprintf('expected running time: <= %s but was: %s', \$this->maxRunningTime, \$time));
        }
    }

    /**
     * @param int \$maxRunningTime
     *
     * @throws \\InvalidArgumentException
     */
    public function setMaxRunningTime(\$maxRunningTime)
    {
        if (\\is_int(\$maxRunningTime) && \$maxRunningTime >= 0) {
            \$this->maxRunningTime = \$maxRunningTime;
        } else {
            throw new \\InvalidArgumentException();
        }
    }

    /**
     * @return int
     */
    public function getMaxRunningTime()
    {
        return \$this->maxRunningTime;
    }
}
", "vendor/symfony/form/Test/FormPerformanceTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Test/FormPerformanceTestCase.php");
    }
}
