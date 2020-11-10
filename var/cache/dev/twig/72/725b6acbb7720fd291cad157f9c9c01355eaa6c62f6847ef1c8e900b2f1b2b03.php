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

/* vendor/symfony/property-access/Exception/UnexpectedTypeException.php */
class __TwigTemplate_6404017cd88d65e0f581d1ec8c738a349d0bcc40227bf4d3772eccf38595e366 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Exception/UnexpectedTypeException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Exception/UnexpectedTypeException.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Exception;

use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * Thrown when a value does not match an expected type.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UnexpectedTypeException extends RuntimeException
{
    /**
     * @param mixed                 \$value     The unexpected value found while traversing property path
     * @param PropertyPathInterface \$path      The property path
     * @param int                   \$pathIndex The property path index when the unexpected value was found
     */
    public function __construct(\$value, PropertyPathInterface \$path, int \$pathIndex)
    {
        \$message = sprintf(
            'PropertyAccessor requires a graph of objects or arrays to operate on, '.
            'but it found type \"%s\" while trying to traverse path \"%s\" at property \"%s\".',
            \\gettype(\$value),
            (string) \$path,
            \$path->getElement(\$pathIndex)
        );

        parent::__construct(\$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Exception/UnexpectedTypeException.php";
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

namespace Symfony\\Component\\PropertyAccess\\Exception;

use Symfony\\Component\\PropertyAccess\\PropertyPathInterface;

/**
 * Thrown when a value does not match an expected type.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UnexpectedTypeException extends RuntimeException
{
    /**
     * @param mixed                 \$value     The unexpected value found while traversing property path
     * @param PropertyPathInterface \$path      The property path
     * @param int                   \$pathIndex The property path index when the unexpected value was found
     */
    public function __construct(\$value, PropertyPathInterface \$path, int \$pathIndex)
    {
        \$message = sprintf(
            'PropertyAccessor requires a graph of objects or arrays to operate on, '.
            'but it found type \"%s\" while trying to traverse path \"%s\" at property \"%s\".',
            \\gettype(\$value),
            (string) \$path,
            \$path->getElement(\$pathIndex)
        );

        parent::__construct(\$message);
    }
}
", "vendor/symfony/property-access/Exception/UnexpectedTypeException.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Exception/UnexpectedTypeException.php");
    }
}
