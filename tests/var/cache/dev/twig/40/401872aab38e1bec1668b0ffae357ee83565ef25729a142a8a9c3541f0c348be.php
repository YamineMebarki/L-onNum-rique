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

/* vendor/symfony/validator/Mapping/Loader/AbstractLoader.php */
class __TwigTemplate_887b948d8be76d80340a102b03c5ab7615e3166fcea5b7f36f2637b9a100f50b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/AbstractLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/AbstractLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\MappingException;

/**
 * Base loader for validation metadata.
 *
 * This loader supports the loading of constraints from Symfony's default
 * namespace (see {@link DEFAULT_NAMESPACE}) using the short class names of
 * those constraints. Constraints can also be loaded using their fully
 * qualified class names. At last, namespace aliases can be defined to load
 * constraints with the syntax \"alias:ShortName\".
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractLoader implements LoaderInterface
{
    /**
     * The namespace to load constraints from by default.
     */
    const DEFAULT_NAMESPACE = '\\\\Symfony\\\\Component\\\\Validator\\\\Constraints\\\\';

    protected \$namespaces = [];

    /**
     * Adds a namespace alias.
     *
     * The namespace alias can be used to reference constraints from specific
     * namespaces in {@link newConstraint()}:
     *
     *     \$this->addNamespaceAlias('mynamespace', '\\\\Acme\\\\Package\\\\Constraints\\\\');
     *
     *     \$constraint = \$this->newConstraint('mynamespace:NotNull');
     *
     * @param string \$alias     The alias
     * @param string \$namespace The PHP namespace
     */
    protected function addNamespaceAlias(\$alias, \$namespace)
    {
        \$this->namespaces[\$alias] = \$namespace;
    }

    /**
     * Creates a new constraint instance for the given constraint name.
     *
     * @param string \$name    The constraint name. Either a constraint relative
     *                        to the default constraint namespace, or a fully
     *                        qualified class name. Alternatively, the constraint
     *                        may be preceded by a namespace alias and a colon.
     *                        The namespace alias must have been defined using
     *                        {@link addNamespaceAlias()}.
     * @param mixed  \$options The constraint options
     *
     * @return Constraint
     *
     * @throws MappingException If the namespace prefix is undefined
     */
    protected function newConstraint(\$name, \$options = null)
    {
        if (false !== strpos(\$name, '\\\\') && class_exists(\$name)) {
            \$className = (string) \$name;
        } elseif (false !== strpos(\$name, ':')) {
            list(\$prefix, \$className) = explode(':', \$name, 2);

            if (!isset(\$this->namespaces[\$prefix])) {
                throw new MappingException(sprintf('Undefined namespace prefix \"%s\"', \$prefix));
            }

            \$className = \$this->namespaces[\$prefix].\$className;
        } else {
            \$className = self::DEFAULT_NAMESPACE.\$name;
        }

        return new \$className(\$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/AbstractLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\MappingException;

/**
 * Base loader for validation metadata.
 *
 * This loader supports the loading of constraints from Symfony's default
 * namespace (see {@link DEFAULT_NAMESPACE}) using the short class names of
 * those constraints. Constraints can also be loaded using their fully
 * qualified class names. At last, namespace aliases can be defined to load
 * constraints with the syntax \"alias:ShortName\".
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractLoader implements LoaderInterface
{
    /**
     * The namespace to load constraints from by default.
     */
    const DEFAULT_NAMESPACE = '\\\\Symfony\\\\Component\\\\Validator\\\\Constraints\\\\';

    protected \$namespaces = [];

    /**
     * Adds a namespace alias.
     *
     * The namespace alias can be used to reference constraints from specific
     * namespaces in {@link newConstraint()}:
     *
     *     \$this->addNamespaceAlias('mynamespace', '\\\\Acme\\\\Package\\\\Constraints\\\\');
     *
     *     \$constraint = \$this->newConstraint('mynamespace:NotNull');
     *
     * @param string \$alias     The alias
     * @param string \$namespace The PHP namespace
     */
    protected function addNamespaceAlias(\$alias, \$namespace)
    {
        \$this->namespaces[\$alias] = \$namespace;
    }

    /**
     * Creates a new constraint instance for the given constraint name.
     *
     * @param string \$name    The constraint name. Either a constraint relative
     *                        to the default constraint namespace, or a fully
     *                        qualified class name. Alternatively, the constraint
     *                        may be preceded by a namespace alias and a colon.
     *                        The namespace alias must have been defined using
     *                        {@link addNamespaceAlias()}.
     * @param mixed  \$options The constraint options
     *
     * @return Constraint
     *
     * @throws MappingException If the namespace prefix is undefined
     */
    protected function newConstraint(\$name, \$options = null)
    {
        if (false !== strpos(\$name, '\\\\') && class_exists(\$name)) {
            \$className = (string) \$name;
        } elseif (false !== strpos(\$name, ':')) {
            list(\$prefix, \$className) = explode(':', \$name, 2);

            if (!isset(\$this->namespaces[\$prefix])) {
                throw new MappingException(sprintf('Undefined namespace prefix \"%s\"', \$prefix));
            }

            \$className = \$this->namespaces[\$prefix].\$className;
        } else {
            \$className = self::DEFAULT_NAMESPACE.\$name;
        }

        return new \$className(\$options);
    }
}
", "vendor/symfony/validator/Mapping/Loader/AbstractLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/AbstractLoader.php");
    }
}
