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

/* vendor/twig/twig/src/Error/SyntaxError.php */
class __TwigTemplate_2fa7f27e779597e5d500b79105f53b2ecb2c229966b0479e3ed9d52993ac5b80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Error/SyntaxError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Error/SyntaxError.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Error;

/**
 * \\Exception thrown when a syntax error occurs during lexing or parsing of a template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SyntaxError extends Error
{
    /**
     * Tweaks the error message to include suggestions.
     *
     * @param string \$name  The original name of the item that does not exist
     * @param array  \$items An array of possible items
     */
    public function addSuggestions(\$name, array \$items)
    {
        \$alternatives = [];
        foreach (\$items as \$item) {
            \$lev = levenshtein(\$name, \$item);
            if (\$lev <= \\strlen(\$name) / 3 || false !== strpos(\$item, \$name)) {
                \$alternatives[\$item] = \$lev;
            }
        }

        if (!\$alternatives) {
            return;
        }

        asort(\$alternatives);

        \$this->appendMessage(sprintf(' Did you mean \"%s\"?', implode('\", \"', array_keys(\$alternatives))));
    }
}

class_alias('Twig\\Error\\SyntaxError', 'Twig_Error_Syntax');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Error/SyntaxError.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Error;

/**
 * \\Exception thrown when a syntax error occurs during lexing or parsing of a template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SyntaxError extends Error
{
    /**
     * Tweaks the error message to include suggestions.
     *
     * @param string \$name  The original name of the item that does not exist
     * @param array  \$items An array of possible items
     */
    public function addSuggestions(\$name, array \$items)
    {
        \$alternatives = [];
        foreach (\$items as \$item) {
            \$lev = levenshtein(\$name, \$item);
            if (\$lev <= \\strlen(\$name) / 3 || false !== strpos(\$item, \$name)) {
                \$alternatives[\$item] = \$lev;
            }
        }

        if (!\$alternatives) {
            return;
        }

        asort(\$alternatives);

        \$this->appendMessage(sprintf(' Did you mean \"%s\"?', implode('\", \"', array_keys(\$alternatives))));
    }
}

class_alias('Twig\\Error\\SyntaxError', 'Twig_Error_Syntax');
", "vendor/twig/twig/src/Error/SyntaxError.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Error/SyntaxError.php");
    }
}
