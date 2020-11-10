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

/* vendor/symfony/translation/Formatter/MessageFormatterInterface.php */
class __TwigTemplate_8197d37bf9e8e125aca5c0058ad3e6460e1fcd9cbd59e74ed2694151f11ec8f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/MessageFormatterInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/MessageFormatterInterface.php"));

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

namespace Symfony\\Component\\Translation\\Formatter;

/**
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
interface MessageFormatterInterface
{
    /**
     * Formats a localized message pattern with given arguments.
     *
     * @param string \$message    The message (may also be an object that can be cast to string)
     * @param string \$locale     The message locale
     * @param array  \$parameters An array of parameters for the message
     *
     * @return string
     */
    public function format(\$message, \$locale, array \$parameters = []);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Formatter/MessageFormatterInterface.php";
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

namespace Symfony\\Component\\Translation\\Formatter;

/**
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
interface MessageFormatterInterface
{
    /**
     * Formats a localized message pattern with given arguments.
     *
     * @param string \$message    The message (may also be an object that can be cast to string)
     * @param string \$locale     The message locale
     * @param array  \$parameters An array of parameters for the message
     *
     * @return string
     */
    public function format(\$message, \$locale, array \$parameters = []);
}
", "vendor/symfony/translation/Formatter/MessageFormatterInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Formatter/MessageFormatterInterface.php");
    }
}
