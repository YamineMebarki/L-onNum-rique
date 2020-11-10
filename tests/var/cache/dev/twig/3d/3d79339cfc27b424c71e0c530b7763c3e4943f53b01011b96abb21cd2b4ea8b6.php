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

/* vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php */
class __TwigTemplate_ce5ee5ab31369cf28c49733ca6accef286cc701243e24afcc50ef268690d9e5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php"));

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
 * Formatter style interface for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterStyleInterface
{
    /**
     * Sets style foreground color.
     *
     * @param string|null \$color The color name
     */
    public function setForeground(\$color = null);

    /**
     * Sets style background color.
     *
     * @param string \$color The color name
     */
    public function setBackground(\$color = null);

    /**
     * Sets some specific style option.
     *
     * @param string \$option The option name
     */
    public function setOption(\$option);

    /**
     * Unsets some specific style option.
     *
     * @param string \$option The option name
     */
    public function unsetOption(\$option);

    /**
     * Sets multiple style options at once.
     */
    public function setOptions(array \$options);

    /**
     * Applies the style to a given text.
     *
     * @param string \$text The text to style
     *
     * @return string
     */
    public function apply(\$text);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php";
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
 * Formatter style interface for defining styles.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface OutputFormatterStyleInterface
{
    /**
     * Sets style foreground color.
     *
     * @param string|null \$color The color name
     */
    public function setForeground(\$color = null);

    /**
     * Sets style background color.
     *
     * @param string \$color The color name
     */
    public function setBackground(\$color = null);

    /**
     * Sets some specific style option.
     *
     * @param string \$option The option name
     */
    public function setOption(\$option);

    /**
     * Unsets some specific style option.
     *
     * @param string \$option The option name
     */
    public function unsetOption(\$option);

    /**
     * Sets multiple style options at once.
     */
    public function setOptions(array \$options);

    /**
     * Applies the style to a given text.
     *
     * @param string \$text The text to style
     *
     * @return string
     */
    public function apply(\$text);
}
", "vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php");
    }
}
