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

/* vendor/symfony/var-dumper/VarDumper.php */
class __TwigTemplate_8b14f67d32e8e7f343918d31834da6694d3e424d8677256ee1f9a6d4605812b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/VarDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/VarDumper.php"));

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

namespace Symfony\\Component\\VarDumper;

use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

// Load the global dump() function
require_once __DIR__.'/Resources/functions/dump.php';

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class VarDumper
{
    private static \$handler;

    public static function dump(\$var)
    {
        if (null === self::\$handler) {
            \$cloner = new VarCloner();
            \$cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);

            if (isset(\$_SERVER['VAR_DUMPER_FORMAT'])) {
                \$dumper = 'html' === \$_SERVER['VAR_DUMPER_FORMAT'] ? new HtmlDumper() : new CliDumper();
            } else {
                \$dumper = \\in_array(\\PHP_SAPI, ['cli', 'phpdbg']) ? new CliDumper() : new HtmlDumper();
            }

            self::\$handler = function (\$var) use (\$cloner, \$dumper) {
                \$dumper->dump(\$cloner->cloneVar(\$var));
            };
        }

        return (self::\$handler)(\$var);
    }

    public static function setHandler(callable \$callable = null)
    {
        \$prevHandler = self::\$handler;
        self::\$handler = \$callable;

        return \$prevHandler;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/VarDumper.php";
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

namespace Symfony\\Component\\VarDumper;

use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

// Load the global dump() function
require_once __DIR__.'/Resources/functions/dump.php';

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class VarDumper
{
    private static \$handler;

    public static function dump(\$var)
    {
        if (null === self::\$handler) {
            \$cloner = new VarCloner();
            \$cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);

            if (isset(\$_SERVER['VAR_DUMPER_FORMAT'])) {
                \$dumper = 'html' === \$_SERVER['VAR_DUMPER_FORMAT'] ? new HtmlDumper() : new CliDumper();
            } else {
                \$dumper = \\in_array(\\PHP_SAPI, ['cli', 'phpdbg']) ? new CliDumper() : new HtmlDumper();
            }

            self::\$handler = function (\$var) use (\$cloner, \$dumper) {
                \$dumper->dump(\$cloner->cloneVar(\$var));
            };
        }

        return (self::\$handler)(\$var);
    }

    public static function setHandler(callable \$callable = null)
    {
        \$prevHandler = self::\$handler;
        self::\$handler = \$callable;

        return \$prevHandler;
    }
}
", "vendor/symfony/var-dumper/VarDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/VarDumper.php");
    }
}
