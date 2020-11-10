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

/* vendor/symfony/console/Helper/DebugFormatterHelper.php */
class __TwigTemplate_6d692042c83c2e7b6bc280a3a8eb75a56cbb17277cb20dd5fdc1abec1f76a7e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/DebugFormatterHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/DebugFormatterHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

/**
 * Helps outputting debug information when running an external program from a command.
 *
 * An external program can be a Process, an HTTP request, or anything else.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DebugFormatterHelper extends Helper
{
    private \$colors = ['black', 'red', 'green', 'yellow', 'blue', 'magenta', 'cyan', 'white', 'default'];
    private \$started = [];
    private \$count = -1;

    /**
     * Starts a debug formatting session.
     *
     * @param string \$id      The id of the formatting session
     * @param string \$message The message to display
     * @param string \$prefix  The prefix to use
     *
     * @return string
     */
    public function start(\$id, \$message, \$prefix = 'RUN')
    {
        \$this->started[\$id] = ['border' => ++\$this->count % \\count(\$this->colors)];

        return sprintf(\"%s<bg=blue;fg=white> %s </> <fg=blue>%s</>\\n\", \$this->getBorder(\$id), \$prefix, \$message);
    }

    /**
     * Adds progress to a formatting session.
     *
     * @param string \$id          The id of the formatting session
     * @param string \$buffer      The message to display
     * @param bool   \$error       Whether to consider the buffer as error
     * @param string \$prefix      The prefix for output
     * @param string \$errorPrefix The prefix for error output
     *
     * @return string
     */
    public function progress(\$id, \$buffer, \$error = false, \$prefix = 'OUT', \$errorPrefix = 'ERR')
    {
        \$message = '';

        if (\$error) {
            if (isset(\$this->started[\$id]['out'])) {
                \$message .= \"\\n\";
                unset(\$this->started[\$id]['out']);
            }
            if (!isset(\$this->started[\$id]['err'])) {
                \$message .= sprintf('%s<bg=red;fg=white> %s </> ', \$this->getBorder(\$id), \$errorPrefix);
                \$this->started[\$id]['err'] = true;
            }

            \$message .= str_replace(\"\\n\", sprintf(\"\\n%s<bg=red;fg=white> %s </> \", \$this->getBorder(\$id), \$errorPrefix), \$buffer);
        } else {
            if (isset(\$this->started[\$id]['err'])) {
                \$message .= \"\\n\";
                unset(\$this->started[\$id]['err']);
            }
            if (!isset(\$this->started[\$id]['out'])) {
                \$message .= sprintf('%s<bg=green;fg=white> %s </> ', \$this->getBorder(\$id), \$prefix);
                \$this->started[\$id]['out'] = true;
            }

            \$message .= str_replace(\"\\n\", sprintf(\"\\n%s<bg=green;fg=white> %s </> \", \$this->getBorder(\$id), \$prefix), \$buffer);
        }

        return \$message;
    }

    /**
     * Stops a formatting session.
     *
     * @param string \$id         The id of the formatting session
     * @param string \$message    The message to display
     * @param bool   \$successful Whether to consider the result as success
     * @param string \$prefix     The prefix for the end output
     *
     * @return string
     */
    public function stop(\$id, \$message, \$successful, \$prefix = 'RES')
    {
        \$trailingEOL = isset(\$this->started[\$id]['out']) || isset(\$this->started[\$id]['err']) ? \"\\n\" : '';

        if (\$successful) {
            return sprintf(\"%s%s<bg=green;fg=white> %s </> <fg=green>%s</>\\n\", \$trailingEOL, \$this->getBorder(\$id), \$prefix, \$message);
        }

        \$message = sprintf(\"%s%s<bg=red;fg=white> %s </> <fg=red>%s</>\\n\", \$trailingEOL, \$this->getBorder(\$id), \$prefix, \$message);

        unset(\$this->started[\$id]['out'], \$this->started[\$id]['err']);

        return \$message;
    }

    /**
     * @param string \$id The id of the formatting session
     *
     * @return string
     */
    private function getBorder(\$id)
    {
        return sprintf('<bg=%s> </>', \$this->colors[\$this->started[\$id]['border']]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'debug_formatter';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/DebugFormatterHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

/**
 * Helps outputting debug information when running an external program from a command.
 *
 * An external program can be a Process, an HTTP request, or anything else.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DebugFormatterHelper extends Helper
{
    private \$colors = ['black', 'red', 'green', 'yellow', 'blue', 'magenta', 'cyan', 'white', 'default'];
    private \$started = [];
    private \$count = -1;

    /**
     * Starts a debug formatting session.
     *
     * @param string \$id      The id of the formatting session
     * @param string \$message The message to display
     * @param string \$prefix  The prefix to use
     *
     * @return string
     */
    public function start(\$id, \$message, \$prefix = 'RUN')
    {
        \$this->started[\$id] = ['border' => ++\$this->count % \\count(\$this->colors)];

        return sprintf(\"%s<bg=blue;fg=white> %s </> <fg=blue>%s</>\\n\", \$this->getBorder(\$id), \$prefix, \$message);
    }

    /**
     * Adds progress to a formatting session.
     *
     * @param string \$id          The id of the formatting session
     * @param string \$buffer      The message to display
     * @param bool   \$error       Whether to consider the buffer as error
     * @param string \$prefix      The prefix for output
     * @param string \$errorPrefix The prefix for error output
     *
     * @return string
     */
    public function progress(\$id, \$buffer, \$error = false, \$prefix = 'OUT', \$errorPrefix = 'ERR')
    {
        \$message = '';

        if (\$error) {
            if (isset(\$this->started[\$id]['out'])) {
                \$message .= \"\\n\";
                unset(\$this->started[\$id]['out']);
            }
            if (!isset(\$this->started[\$id]['err'])) {
                \$message .= sprintf('%s<bg=red;fg=white> %s </> ', \$this->getBorder(\$id), \$errorPrefix);
                \$this->started[\$id]['err'] = true;
            }

            \$message .= str_replace(\"\\n\", sprintf(\"\\n%s<bg=red;fg=white> %s </> \", \$this->getBorder(\$id), \$errorPrefix), \$buffer);
        } else {
            if (isset(\$this->started[\$id]['err'])) {
                \$message .= \"\\n\";
                unset(\$this->started[\$id]['err']);
            }
            if (!isset(\$this->started[\$id]['out'])) {
                \$message .= sprintf('%s<bg=green;fg=white> %s </> ', \$this->getBorder(\$id), \$prefix);
                \$this->started[\$id]['out'] = true;
            }

            \$message .= str_replace(\"\\n\", sprintf(\"\\n%s<bg=green;fg=white> %s </> \", \$this->getBorder(\$id), \$prefix), \$buffer);
        }

        return \$message;
    }

    /**
     * Stops a formatting session.
     *
     * @param string \$id         The id of the formatting session
     * @param string \$message    The message to display
     * @param bool   \$successful Whether to consider the result as success
     * @param string \$prefix     The prefix for the end output
     *
     * @return string
     */
    public function stop(\$id, \$message, \$successful, \$prefix = 'RES')
    {
        \$trailingEOL = isset(\$this->started[\$id]['out']) || isset(\$this->started[\$id]['err']) ? \"\\n\" : '';

        if (\$successful) {
            return sprintf(\"%s%s<bg=green;fg=white> %s </> <fg=green>%s</>\\n\", \$trailingEOL, \$this->getBorder(\$id), \$prefix, \$message);
        }

        \$message = sprintf(\"%s%s<bg=red;fg=white> %s </> <fg=red>%s</>\\n\", \$trailingEOL, \$this->getBorder(\$id), \$prefix, \$message);

        unset(\$this->started[\$id]['out'], \$this->started[\$id]['err']);

        return \$message;
    }

    /**
     * @param string \$id The id of the formatting session
     *
     * @return string
     */
    private function getBorder(\$id)
    {
        return sprintf('<bg=%s> </>', \$this->colors[\$this->started[\$id]['border']]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'debug_formatter';
    }
}
", "vendor/symfony/console/Helper/DebugFormatterHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/DebugFormatterHelper.php");
    }
}
