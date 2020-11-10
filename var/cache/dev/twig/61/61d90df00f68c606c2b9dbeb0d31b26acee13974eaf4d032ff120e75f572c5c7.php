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

/* vendor/symfony/process/PhpProcess.php */
class __TwigTemplate_1188801979ce60a83b62a70ca27d321eff14fe402ea10614e79020085fcd6b19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/PhpProcess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/PhpProcess.php"));

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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\RuntimeException;

/**
 * PhpProcess runs a PHP script in an independent process.
 *
 *     \$p = new PhpProcess('<?php echo \"foo\"; ?>');
 *     \$p->run();
 *     print \$p->getOutput().\"\\n\";
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpProcess extends Process
{
    /**
     * @param string      \$script  The PHP script to run (as a string)
     * @param string|null \$cwd     The working directory or null to use the working dir of the current PHP process
     * @param array|null  \$env     The environment variables or null to use the same environment as the current PHP process
     * @param int         \$timeout The timeout in seconds
     * @param array|null  \$php     Path to the PHP binary to use with any additional arguments
     */
    public function __construct(string \$script, string \$cwd = null, array \$env = null, int \$timeout = 60, array \$php = null)
    {
        if (null === \$php) {
            \$executableFinder = new PhpExecutableFinder();
            \$php = \$executableFinder->find(false);
            \$php = false === \$php ? null : array_merge([\$php], \$executableFinder->findArguments());
        }
        if ('phpdbg' === \\PHP_SAPI) {
            \$file = tempnam(sys_get_temp_dir(), 'dbg');
            file_put_contents(\$file, \$script);
            register_shutdown_function('unlink', \$file);
            \$php[] = \$file;
            \$script = null;
        }

        parent::__construct(\$php, \$cwd, \$env, \$script, \$timeout);
    }

    /**
     * Sets the path to the PHP binary to use.
     *
     * @deprecated since Symfony 4.2, use the \$php argument of the constructor instead.
     */
    public function setPhpBinary(\$php)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the \$php argument of the constructor instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->setCommandLine(\$php);
    }

    /**
     * {@inheritdoc}
     */
    public function start(callable \$callback = null, array \$env = [])
    {
        if (null === \$this->getCommandLine()) {
            throw new RuntimeException('Unable to find the PHP executable.');
        }

        parent::start(\$callback, \$env);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/PhpProcess.php";
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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\RuntimeException;

/**
 * PhpProcess runs a PHP script in an independent process.
 *
 *     \$p = new PhpProcess('<?php echo \"foo\"; ?>');
 *     \$p->run();
 *     print \$p->getOutput().\"\\n\";
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpProcess extends Process
{
    /**
     * @param string      \$script  The PHP script to run (as a string)
     * @param string|null \$cwd     The working directory or null to use the working dir of the current PHP process
     * @param array|null  \$env     The environment variables or null to use the same environment as the current PHP process
     * @param int         \$timeout The timeout in seconds
     * @param array|null  \$php     Path to the PHP binary to use with any additional arguments
     */
    public function __construct(string \$script, string \$cwd = null, array \$env = null, int \$timeout = 60, array \$php = null)
    {
        if (null === \$php) {
            \$executableFinder = new PhpExecutableFinder();
            \$php = \$executableFinder->find(false);
            \$php = false === \$php ? null : array_merge([\$php], \$executableFinder->findArguments());
        }
        if ('phpdbg' === \\PHP_SAPI) {
            \$file = tempnam(sys_get_temp_dir(), 'dbg');
            file_put_contents(\$file, \$script);
            register_shutdown_function('unlink', \$file);
            \$php[] = \$file;
            \$script = null;
        }

        parent::__construct(\$php, \$cwd, \$env, \$script, \$timeout);
    }

    /**
     * Sets the path to the PHP binary to use.
     *
     * @deprecated since Symfony 4.2, use the \$php argument of the constructor instead.
     */
    public function setPhpBinary(\$php)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the \$php argument of the constructor instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->setCommandLine(\$php);
    }

    /**
     * {@inheritdoc}
     */
    public function start(callable \$callback = null, array \$env = [])
    {
        if (null === \$this->getCommandLine()) {
            throw new RuntimeException('Unable to find the PHP executable.');
        }

        parent::start(\$callback, \$env);
    }
}
", "vendor/symfony/process/PhpProcess.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/PhpProcess.php");
    }
}
