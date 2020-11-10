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

/* vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php */
class __TwigTemplate_390bcdf060dd3116a5a9ed5d37af2e1a5da3fbe6695ee0d4b4effec1fd6aa603 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Util;

use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class RecursiveArrayAccess
{
    public static function get(\$array, array \$indices)
    {
        foreach (\$indices as \$index) {
            // Use array_key_exists() for arrays, isset() otherwise
            if (\\is_array(\$array)) {
                if (\\array_key_exists(\$index, \$array)) {
                    \$array = \$array[\$index];
                    continue;
                }
            } elseif (\$array instanceof \\ArrayAccess) {
                if (isset(\$array[\$index])) {
                    \$array = \$array[\$index];
                    continue;
                }
            }

            throw new OutOfBoundsException(sprintf('The index %s does not exist.', \$index));
        }

        return \$array;
    }

    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php";
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

namespace Symfony\\Component\\Intl\\Data\\Util;

use Symfony\\Component\\Intl\\Exception\\OutOfBoundsException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class RecursiveArrayAccess
{
    public static function get(\$array, array \$indices)
    {
        foreach (\$indices as \$index) {
            // Use array_key_exists() for arrays, isset() otherwise
            if (\\is_array(\$array)) {
                if (\\array_key_exists(\$index, \$array)) {
                    \$array = \$array[\$index];
                    continue;
                }
            } elseif (\$array instanceof \\ArrayAccess) {
                if (isset(\$array[\$index])) {
                    \$array = \$array[\$index];
                    continue;
                }
            }

            throw new OutOfBoundsException(sprintf('The index %s does not exist.', \$index));
        }

        return \$array;
    }

    private function __construct()
    {
    }
}
", "vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Util/RecursiveArrayAccess.php");
    }
}
