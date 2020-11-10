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

/* vendor/phpdocumentor/reflection-common/src/Fqsen.php */
class __TwigTemplate_9fb6f8c91ea5898d27737df15247e372adcf51b114a95b9cbf97275bd4c4f3e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/src/Fqsen.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/src/Fqsen.php"));

        // line 1
        echo "<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

use InvalidArgumentException;

/**
 * Value Object for Fqsen.
 *
 * @link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc-meta.md
 */
final class Fqsen
{
    /**
     * @var string full quallified class name
     */
    private \$fqsen;

    /**
     * @var string name of the element without path.
     */
    private \$name;

    /**
     * Initializes the object.
     *
     * @throws InvalidArgumentException when \$fqsen is not matching the format.
     */
    public function __construct(string \$fqsen)
    {
        \$matches = [];
        \$result = preg_match(
            '/^\\\\\\\\([a-zA-Z_\\\\x7f-\\\\xff][a-zA-Z0-9_\\\\x7f-\\\\xff\\\\\\\\]*)?(?:[:]{2}\\\\\$?([a-zA-Z_\\\\x7f-\\\\xff][a-zA-Z0-9_\\\\x7f-\\\\xff]*))?(?:\\\\(\\\\))?\$/',
            \$fqsen,
            \$matches
        );

        if (\$result === 0) {
            throw new InvalidArgumentException(
                sprintf('\"%s\" is not a valid Fqsen.', \$fqsen)
            );
        }

        \$this->fqsen = \$fqsen;

        if (isset(\$matches[2])) {
            \$this->name = \$matches[2];
        } else {
            \$matches = explode('\\\\', \$fqsen);
            \$this->name = trim(end(\$matches), '()');
        }
    }

    /**
     * converts this class to string.
     */
    public function __toString(): string
    {
        return \$this->fqsen;
    }

    /**
     * Returns the name of the element without path.
     */
    public function getName(): string
    {
        return \$this->name;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/src/Fqsen.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

use InvalidArgumentException;

/**
 * Value Object for Fqsen.
 *
 * @link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc-meta.md
 */
final class Fqsen
{
    /**
     * @var string full quallified class name
     */
    private \$fqsen;

    /**
     * @var string name of the element without path.
     */
    private \$name;

    /**
     * Initializes the object.
     *
     * @throws InvalidArgumentException when \$fqsen is not matching the format.
     */
    public function __construct(string \$fqsen)
    {
        \$matches = [];
        \$result = preg_match(
            '/^\\\\\\\\([a-zA-Z_\\\\x7f-\\\\xff][a-zA-Z0-9_\\\\x7f-\\\\xff\\\\\\\\]*)?(?:[:]{2}\\\\\$?([a-zA-Z_\\\\x7f-\\\\xff][a-zA-Z0-9_\\\\x7f-\\\\xff]*))?(?:\\\\(\\\\))?\$/',
            \$fqsen,
            \$matches
        );

        if (\$result === 0) {
            throw new InvalidArgumentException(
                sprintf('\"%s\" is not a valid Fqsen.', \$fqsen)
            );
        }

        \$this->fqsen = \$fqsen;

        if (isset(\$matches[2])) {
            \$this->name = \$matches[2];
        } else {
            \$matches = explode('\\\\', \$fqsen);
            \$this->name = trim(end(\$matches), '()');
        }
    }

    /**
     * converts this class to string.
     */
    public function __toString(): string
    {
        return \$this->fqsen;
    }

    /**
     * Returns the name of the element without path.
     */
    public function getName(): string
    {
        return \$this->name;
    }
}
", "vendor/phpdocumentor/reflection-common/src/Fqsen.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/src/Fqsen.php");
    }
}
