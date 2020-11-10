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

/* vendor/phpdocumentor/type-resolver/src/FqsenResolver.php */
class __TwigTemplate_7f81da21eb06266e1369ea644edc4483237ba2f9dcaa93d25a9d3e806908b148 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/FqsenResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/src/FqsenResolver.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

use InvalidArgumentException;
use phpDocumentor\\Reflection\\Types\\Context;
use function explode;
use function implode;
use function strpos;

class FqsenResolver
{
    /** @var string Definition of the NAMESPACE operator in PHP */
    private const OPERATOR_NAMESPACE = '\\\\';

    public function resolve(string \$fqsen, ?Context \$context = null) : Fqsen
    {
        if (\$context === null) {
            \$context = new Context('');
        }

        if (\$this->isFqsen(\$fqsen)) {
            return new Fqsen(\$fqsen);
        }

        return \$this->resolvePartialStructuralElementName(\$fqsen, \$context);
    }

    /**
     * Tests whether the given type is a Fully Qualified Structural Element Name.
     */
    private function isFqsen(string \$type) : bool
    {
        return strpos(\$type, self::OPERATOR_NAMESPACE) === 0;
    }

    /**
     * Resolves a partial Structural Element Name (i.e. `Reflection\\DocBlock`) to its FQSEN representation
     * (i.e. `\\phpDocumentor\\Reflection\\DocBlock`) based on the Namespace and aliases mentioned in the Context.
     *
     * @throws InvalidArgumentException When type is not a valid FQSEN.
     */
    private function resolvePartialStructuralElementName(string \$type, Context \$context) : Fqsen
    {
        \$typeParts = explode(self::OPERATOR_NAMESPACE, \$type, 2);

        \$namespaceAliases = \$context->getNamespaceAliases();

        // if the first segment is not an alias; prepend namespace name and return
        if (!isset(\$namespaceAliases[\$typeParts[0]])) {
            \$namespace = \$context->getNamespace();
            if (\$namespace !== '') {
                \$namespace .= self::OPERATOR_NAMESPACE;
            }

            return new Fqsen(self::OPERATOR_NAMESPACE . \$namespace . \$type);
        }

        \$typeParts[0] = \$namespaceAliases[\$typeParts[0]];

        return new Fqsen(self::OPERATOR_NAMESPACE . implode(self::OPERATOR_NAMESPACE, \$typeParts));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/src/FqsenResolver.php";
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
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

use InvalidArgumentException;
use phpDocumentor\\Reflection\\Types\\Context;
use function explode;
use function implode;
use function strpos;

class FqsenResolver
{
    /** @var string Definition of the NAMESPACE operator in PHP */
    private const OPERATOR_NAMESPACE = '\\\\';

    public function resolve(string \$fqsen, ?Context \$context = null) : Fqsen
    {
        if (\$context === null) {
            \$context = new Context('');
        }

        if (\$this->isFqsen(\$fqsen)) {
            return new Fqsen(\$fqsen);
        }

        return \$this->resolvePartialStructuralElementName(\$fqsen, \$context);
    }

    /**
     * Tests whether the given type is a Fully Qualified Structural Element Name.
     */
    private function isFqsen(string \$type) : bool
    {
        return strpos(\$type, self::OPERATOR_NAMESPACE) === 0;
    }

    /**
     * Resolves a partial Structural Element Name (i.e. `Reflection\\DocBlock`) to its FQSEN representation
     * (i.e. `\\phpDocumentor\\Reflection\\DocBlock`) based on the Namespace and aliases mentioned in the Context.
     *
     * @throws InvalidArgumentException When type is not a valid FQSEN.
     */
    private function resolvePartialStructuralElementName(string \$type, Context \$context) : Fqsen
    {
        \$typeParts = explode(self::OPERATOR_NAMESPACE, \$type, 2);

        \$namespaceAliases = \$context->getNamespaceAliases();

        // if the first segment is not an alias; prepend namespace name and return
        if (!isset(\$namespaceAliases[\$typeParts[0]])) {
            \$namespace = \$context->getNamespace();
            if (\$namespace !== '') {
                \$namespace .= self::OPERATOR_NAMESPACE;
            }

            return new Fqsen(self::OPERATOR_NAMESPACE . \$namespace . \$type);
        }

        \$typeParts[0] = \$namespaceAliases[\$typeParts[0]];

        return new Fqsen(self::OPERATOR_NAMESPACE . implode(self::OPERATOR_NAMESPACE, \$typeParts));
    }
}
", "vendor/phpdocumentor/type-resolver/src/FqsenResolver.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/src/FqsenResolver.php");
    }
}
