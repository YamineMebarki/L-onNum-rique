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

/* vendor/symfony/console/Style/StyleInterface.php */
class __TwigTemplate_6ae1f38044d2124ddfc7cb1caa68d51784cbd0150fe4319fe59e1c5fceb32eb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Style/StyleInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Style/StyleInterface.php"));

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

namespace Symfony\\Component\\Console\\Style;

/**
 * Output style helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface StyleInterface
{
    /**
     * Formats a command title.
     *
     * @param string \$message
     */
    public function title(\$message);

    /**
     * Formats a section title.
     *
     * @param string \$message
     */
    public function section(\$message);

    /**
     * Formats a list.
     */
    public function listing(array \$elements);

    /**
     * Formats informational text.
     *
     * @param string|array \$message
     */
    public function text(\$message);

    /**
     * Formats a success result bar.
     *
     * @param string|array \$message
     */
    public function success(\$message);

    /**
     * Formats an error result bar.
     *
     * @param string|array \$message
     */
    public function error(\$message);

    /**
     * Formats an warning result bar.
     *
     * @param string|array \$message
     */
    public function warning(\$message);

    /**
     * Formats a note admonition.
     *
     * @param string|array \$message
     */
    public function note(\$message);

    /**
     * Formats a caution admonition.
     *
     * @param string|array \$message
     */
    public function caution(\$message);

    /**
     * Formats a table.
     */
    public function table(array \$headers, array \$rows);

    /**
     * Asks a question.
     *
     * @param string        \$question
     * @param string|null   \$default
     * @param callable|null \$validator
     *
     * @return mixed
     */
    public function ask(\$question, \$default = null, \$validator = null);

    /**
     * Asks a question with the user input hidden.
     *
     * @param string        \$question
     * @param callable|null \$validator
     *
     * @return mixed
     */
    public function askHidden(\$question, \$validator = null);

    /**
     * Asks for confirmation.
     *
     * @param string \$question
     * @param bool   \$default
     *
     * @return bool
     */
    public function confirm(\$question, \$default = true);

    /**
     * Asks a choice question.
     *
     * @param string          \$question
     * @param string|int|null \$default
     *
     * @return mixed
     */
    public function choice(\$question, array \$choices, \$default = null);

    /**
     * Add newline(s).
     *
     * @param int \$count The number of newlines
     */
    public function newLine(\$count = 1);

    /**
     * Starts the progress output.
     *
     * @param int \$max Maximum steps (0 if unknown)
     */
    public function progressStart(\$max = 0);

    /**
     * Advances the progress output X steps.
     *
     * @param int \$step Number of steps to advance
     */
    public function progressAdvance(\$step = 1);

    /**
     * Finishes the progress output.
     */
    public function progressFinish();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Style/StyleInterface.php";
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

namespace Symfony\\Component\\Console\\Style;

/**
 * Output style helpers.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface StyleInterface
{
    /**
     * Formats a command title.
     *
     * @param string \$message
     */
    public function title(\$message);

    /**
     * Formats a section title.
     *
     * @param string \$message
     */
    public function section(\$message);

    /**
     * Formats a list.
     */
    public function listing(array \$elements);

    /**
     * Formats informational text.
     *
     * @param string|array \$message
     */
    public function text(\$message);

    /**
     * Formats a success result bar.
     *
     * @param string|array \$message
     */
    public function success(\$message);

    /**
     * Formats an error result bar.
     *
     * @param string|array \$message
     */
    public function error(\$message);

    /**
     * Formats an warning result bar.
     *
     * @param string|array \$message
     */
    public function warning(\$message);

    /**
     * Formats a note admonition.
     *
     * @param string|array \$message
     */
    public function note(\$message);

    /**
     * Formats a caution admonition.
     *
     * @param string|array \$message
     */
    public function caution(\$message);

    /**
     * Formats a table.
     */
    public function table(array \$headers, array \$rows);

    /**
     * Asks a question.
     *
     * @param string        \$question
     * @param string|null   \$default
     * @param callable|null \$validator
     *
     * @return mixed
     */
    public function ask(\$question, \$default = null, \$validator = null);

    /**
     * Asks a question with the user input hidden.
     *
     * @param string        \$question
     * @param callable|null \$validator
     *
     * @return mixed
     */
    public function askHidden(\$question, \$validator = null);

    /**
     * Asks for confirmation.
     *
     * @param string \$question
     * @param bool   \$default
     *
     * @return bool
     */
    public function confirm(\$question, \$default = true);

    /**
     * Asks a choice question.
     *
     * @param string          \$question
     * @param string|int|null \$default
     *
     * @return mixed
     */
    public function choice(\$question, array \$choices, \$default = null);

    /**
     * Add newline(s).
     *
     * @param int \$count The number of newlines
     */
    public function newLine(\$count = 1);

    /**
     * Starts the progress output.
     *
     * @param int \$max Maximum steps (0 if unknown)
     */
    public function progressStart(\$max = 0);

    /**
     * Advances the progress output X steps.
     *
     * @param int \$step Number of steps to advance
     */
    public function progressAdvance(\$step = 1);

    /**
     * Finishes the progress output.
     */
    public function progressFinish();
}
", "vendor/symfony/console/Style/StyleInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Style/StyleInterface.php");
    }
}
