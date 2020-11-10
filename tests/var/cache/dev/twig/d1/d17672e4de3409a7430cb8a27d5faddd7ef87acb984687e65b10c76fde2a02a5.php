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

/* vendor/symfony/console/Tester/ApplicationTester.php */
class __TwigTemplate_ef3706ba557f499c8e85de81758866c4f3189b9a339af1da7d353c5a3cfc2cfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tester/ApplicationTester.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tester/ApplicationTester.php"));

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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;

/**
 * Eases the testing of console applications.
 *
 * When testing an application, don't forget to disable the auto exit flag:
 *
 *     \$application = new Application();
 *     \$application->setAutoExit(false);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApplicationTester
{
    use TesterTrait;

    private \$application;
    private \$input;
    private \$statusCode;

    public function __construct(Application \$application)
    {
        \$this->application = \$application;
    }

    /**
     * Executes the application.
     *
     * Available options:
     *
     *  * interactive:               Sets the input interactive flag
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     *
     * @param array \$input   An array of arguments and options
     * @param array \$options An array of options
     *
     * @return int The command exit code
     */
    public function run(array \$input, \$options = [])
    {
        \$this->input = new ArrayInput(\$input);
        if (isset(\$options['interactive'])) {
            \$this->input->setInteractive(\$options['interactive']);
        }

        \$shellInteractive = getenv('SHELL_INTERACTIVE');

        if (\$this->inputs) {
            \$this->input->setStream(self::createStream(\$this->inputs));
            putenv('SHELL_INTERACTIVE=1');
        }

        \$this->initOutput(\$options);

        \$this->statusCode = \$this->application->run(\$this->input, \$this->output);

        putenv(\$shellInteractive ? \"SHELL_INTERACTIVE=\$shellInteractive\" : 'SHELL_INTERACTIVE');

        return \$this->statusCode;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tester/ApplicationTester.php";
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

namespace Symfony\\Component\\Console\\Tester;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;

/**
 * Eases the testing of console applications.
 *
 * When testing an application, don't forget to disable the auto exit flag:
 *
 *     \$application = new Application();
 *     \$application->setAutoExit(false);
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApplicationTester
{
    use TesterTrait;

    private \$application;
    private \$input;
    private \$statusCode;

    public function __construct(Application \$application)
    {
        \$this->application = \$application;
    }

    /**
     * Executes the application.
     *
     * Available options:
     *
     *  * interactive:               Sets the input interactive flag
     *  * decorated:                 Sets the output decorated flag
     *  * verbosity:                 Sets the output verbosity flag
     *  * capture_stderr_separately: Make output of stdOut and stdErr separately available
     *
     * @param array \$input   An array of arguments and options
     * @param array \$options An array of options
     *
     * @return int The command exit code
     */
    public function run(array \$input, \$options = [])
    {
        \$this->input = new ArrayInput(\$input);
        if (isset(\$options['interactive'])) {
            \$this->input->setInteractive(\$options['interactive']);
        }

        \$shellInteractive = getenv('SHELL_INTERACTIVE');

        if (\$this->inputs) {
            \$this->input->setStream(self::createStream(\$this->inputs));
            putenv('SHELL_INTERACTIVE=1');
        }

        \$this->initOutput(\$options);

        \$this->statusCode = \$this->application->run(\$this->input, \$this->output);

        putenv(\$shellInteractive ? \"SHELL_INTERACTIVE=\$shellInteractive\" : 'SHELL_INTERACTIVE');

        return \$this->statusCode;
    }
}
", "vendor/symfony/console/Tester/ApplicationTester.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tester/ApplicationTester.php");
    }
}
