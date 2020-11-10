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

/* vendor/symfony/console/Formatter/OutputFormatterInterface.php */
class __TwigTemplate_017052f6f03af554895cc4e96e55799ce3b413868070aed0f0923eba35e8f82c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterInterface.php"));

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

namespace Symfony\\Component\\Console\\Formatter;

/**
 * Formatter interface for console output.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterInterface
{
    /**
     * Sets the decorated flag.
     *
     * @param bool \$decorated Whether to decorate the messages or not
     */
    public function setDecorated(\$decorated);

    /**
     * Gets the decorated flag.
     *
     * @return bool true if the output will decorate messages, false otherwise
     */
    public function isDecorated();

    /**
     * Sets a new style.
     *
     * @param string                        \$name  The style name
     * @param OutputFormatterStyleInterface \$style The style instance
     */
    public function setStyle(\$name, OutputFormatterStyleInterface \$style);

    /**
     * Checks if output formatter has style with specified name.
     *
     * @param string \$name
     *
     * @return bool
     */
    public function hasStyle(\$name);

    /**
     * Gets style options from style with specified name.
     *
     * @param string \$name
     *
     * @return OutputFormatterStyleInterface
     *
     * @throws \\InvalidArgumentException When style isn't defined
     */
    public function getStyle(\$name);

    /**
     * Formats a message according to the given styles.
     *
     * @param string \$message The message to style
     *
     * @return string The styled message
     */
    public function format(\$message);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Formatter/OutputFormatterInterface.php";
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

namespace Symfony\\Component\\Console\\Formatter;

/**
 * Formatter interface for console output.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterInterface
{
    /**
     * Sets the decorated flag.
     *
     * @param bool \$decorated Whether to decorate the messages or not
     */
    public function setDecorated(\$decorated);

    /**
     * Gets the decorated flag.
     *
     * @return bool true if the output will decorate messages, false otherwise
     */
    public function isDecorated();

    /**
     * Sets a new style.
     *
     * @param string                        \$name  The style name
     * @param OutputFormatterStyleInterface \$style The style instance
     */
    public function setStyle(\$name, OutputFormatterStyleInterface \$style);

    /**
     * Checks if output formatter has style with specified name.
     *
     * @param string \$name
     *
     * @return bool
     */
    public function hasStyle(\$name);

    /**
     * Gets style options from style with specified name.
     *
     * @param string \$name
     *
     * @return OutputFormatterStyleInterface
     *
     * @throws \\InvalidArgumentException When style isn't defined
     */
    public function getStyle(\$name);

    /**
     * Formats a message according to the given styles.
     *
     * @param string \$message The message to style
     *
     * @return string The styled message
     */
    public function format(\$message);
}
", "vendor/symfony/console/Formatter/OutputFormatterInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Formatter/OutputFormatterInterface.php");
    }
}
