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

/* vendor/twig/twig/src/Util/DeprecationCollector.php */
class __TwigTemplate_b0b86daa5be614041d3c997a6e1212b6b97d342b5c8973d32b181e257573c13a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Util/DeprecationCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Util/DeprecationCollector.php"));

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

namespace Twig\\Util;

use Twig\\Environment;
use Twig\\Error\\SyntaxError;
use Twig\\Source;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DeprecationCollector
{
    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * Returns deprecations for templates contained in a directory.
     *
     * @param string \$dir A directory where templates are stored
     * @param string \$ext Limit the loaded templates by extension
     *
     * @return array An array of deprecations
     */
    public function collectDir(\$dir, \$ext = '.twig')
    {
        \$iterator = new \\RegexIterator(
            new \\RecursiveIteratorIterator(
                new \\RecursiveDirectoryIterator(\$dir), \\RecursiveIteratorIterator::LEAVES_ONLY
            ), '{'.preg_quote(\$ext).'\$}'
        );

        return \$this->collect(new TemplateDirIterator(\$iterator));
    }

    /**
     * Returns deprecations for passed templates.
     *
     * @param \\Traversable \$iterator An iterator of templates (where keys are template names and values the contents of the template)
     *
     * @return array An array of deprecations
     */
    public function collect(\\Traversable \$iterator)
    {
        \$deprecations = [];
        set_error_handler(function (\$type, \$msg) use (&\$deprecations) {
            if (E_USER_DEPRECATED === \$type) {
                \$deprecations[] = \$msg;
            }
        });

        foreach (\$iterator as \$name => \$contents) {
            try {
                \$this->twig->parse(\$this->twig->tokenize(new Source(\$contents, \$name)));
            } catch (SyntaxError \$e) {
                // ignore templates containing syntax errors
            }
        }

        restore_error_handler();

        return \$deprecations;
    }
}

class_alias('Twig\\Util\\DeprecationCollector', 'Twig_Util_DeprecationCollector');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Util/DeprecationCollector.php";
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

namespace Twig\\Util;

use Twig\\Environment;
use Twig\\Error\\SyntaxError;
use Twig\\Source;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class DeprecationCollector
{
    private \$twig;

    public function __construct(Environment \$twig)
    {
        \$this->twig = \$twig;
    }

    /**
     * Returns deprecations for templates contained in a directory.
     *
     * @param string \$dir A directory where templates are stored
     * @param string \$ext Limit the loaded templates by extension
     *
     * @return array An array of deprecations
     */
    public function collectDir(\$dir, \$ext = '.twig')
    {
        \$iterator = new \\RegexIterator(
            new \\RecursiveIteratorIterator(
                new \\RecursiveDirectoryIterator(\$dir), \\RecursiveIteratorIterator::LEAVES_ONLY
            ), '{'.preg_quote(\$ext).'\$}'
        );

        return \$this->collect(new TemplateDirIterator(\$iterator));
    }

    /**
     * Returns deprecations for passed templates.
     *
     * @param \\Traversable \$iterator An iterator of templates (where keys are template names and values the contents of the template)
     *
     * @return array An array of deprecations
     */
    public function collect(\\Traversable \$iterator)
    {
        \$deprecations = [];
        set_error_handler(function (\$type, \$msg) use (&\$deprecations) {
            if (E_USER_DEPRECATED === \$type) {
                \$deprecations[] = \$msg;
            }
        });

        foreach (\$iterator as \$name => \$contents) {
            try {
                \$this->twig->parse(\$this->twig->tokenize(new Source(\$contents, \$name)));
            } catch (SyntaxError \$e) {
                // ignore templates containing syntax errors
            }
        }

        restore_error_handler();

        return \$deprecations;
    }
}

class_alias('Twig\\Util\\DeprecationCollector', 'Twig_Util_DeprecationCollector');
", "vendor/twig/twig/src/Util/DeprecationCollector.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Util/DeprecationCollector.php");
    }
}
