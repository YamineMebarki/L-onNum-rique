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

/* vendor/twig/twig/src/FileExtensionEscapingStrategy.php */
class __TwigTemplate_9037dd89fb221b9a15c136a46dba3bb06c017ab41d3a3e1b529b79651aed5478 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/FileExtensionEscapingStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/FileExtensionEscapingStrategy.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Default autoescaping strategy based on file names.
 *
 * This strategy sets the HTML as the default autoescaping strategy,
 * but changes it based on the template name.
 *
 * Note that there is no runtime performance impact as the
 * default autoescaping strategy is set at compilation time.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileExtensionEscapingStrategy
{
    /**
     * Guesses the best autoescaping strategy based on the file name.
     *
     * @param string \$name The template name
     *
     * @return string|false The escaping strategy name to use or false to disable
     */
    public static function guess(\$name)
    {
        if (\\in_array(substr(\$name, -1), ['/', '\\\\'])) {
            return 'html'; // return html for directories
        }

        if ('.twig' === substr(\$name, -5)) {
            \$name = substr(\$name, 0, -5);
        }

        \$extension = pathinfo(\$name, PATHINFO_EXTENSION);

        switch (\$extension) {
            case 'js':
                return 'js';

            case 'css':
                return 'css';

            case 'txt':
                return false;

            default:
                return 'html';
        }
    }
}

class_alias('Twig\\FileExtensionEscapingStrategy', 'Twig_FileExtensionEscapingStrategy');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/FileExtensionEscapingStrategy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Default autoescaping strategy based on file names.
 *
 * This strategy sets the HTML as the default autoescaping strategy,
 * but changes it based on the template name.
 *
 * Note that there is no runtime performance impact as the
 * default autoescaping strategy is set at compilation time.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileExtensionEscapingStrategy
{
    /**
     * Guesses the best autoescaping strategy based on the file name.
     *
     * @param string \$name The template name
     *
     * @return string|false The escaping strategy name to use or false to disable
     */
    public static function guess(\$name)
    {
        if (\\in_array(substr(\$name, -1), ['/', '\\\\'])) {
            return 'html'; // return html for directories
        }

        if ('.twig' === substr(\$name, -5)) {
            \$name = substr(\$name, 0, -5);
        }

        \$extension = pathinfo(\$name, PATHINFO_EXTENSION);

        switch (\$extension) {
            case 'js':
                return 'js';

            case 'css':
                return 'css';

            case 'txt':
                return false;

            default:
                return 'html';
        }
    }
}

class_alias('Twig\\FileExtensionEscapingStrategy', 'Twig_FileExtensionEscapingStrategy');
", "vendor/twig/twig/src/FileExtensionEscapingStrategy.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/FileExtensionEscapingStrategy.php");
    }
}
