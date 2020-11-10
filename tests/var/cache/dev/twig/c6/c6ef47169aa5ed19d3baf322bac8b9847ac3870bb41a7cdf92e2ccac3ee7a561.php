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

/* vendor/symfony/property-info/Util/PhpDocTypeHelper.php */
class __TwigTemplate_f6177e77064b36def2de5185a0196a2c3eaaa8f19642bdea41fe81a9e3fa118d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Util/PhpDocTypeHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Util/PhpDocTypeHelper.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Util;

use phpDocumentor\\Reflection\\Type as DocType;
use phpDocumentor\\Reflection\\Types\\Collection;
use phpDocumentor\\Reflection\\Types\\Compound;
use phpDocumentor\\Reflection\\Types\\Null_;
use phpDocumentor\\Reflection\\Types\\Nullable;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * Transforms a php doc type to a {@link Type} instance.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Guilhem N. <egetick@gmail.com>
 */
final class PhpDocTypeHelper
{
    /**
     * Creates a {@see Type} from a PHPDoc type.
     *
     * @return Type[]
     */
    public function getTypes(DocType \$varType): array
    {
        \$types = [];
        \$nullable = false;

        if (\$varType instanceof Nullable) {
            \$nullable = true;
            \$varType = \$varType->getActualType();
        }

        if (!\$varType instanceof Compound) {
            if (\$varType instanceof Null_) {
                \$nullable = true;
            }

            \$type = \$this->createType(\$varType, \$nullable);
            if (null !== \$type) {
                \$types[] = \$type;
            }

            return \$types;
        }

        \$varTypes = [];
        for (\$typeIndex = 0; \$varType->has(\$typeIndex); ++\$typeIndex) {
            \$type = \$varType->get(\$typeIndex);

            // If null is present, all types are nullable
            if (\$type instanceof Null_) {
                \$nullable = true;
                continue;
            }

            if (\$type instanceof Nullable) {
                \$nullable = true;
                \$type = \$type->getActualType();
            }

            \$varTypes[] = \$type;
        }

        foreach (\$varTypes as \$varType) {
            \$type = \$this->createType(\$varType, \$nullable);
            if (null !== \$type) {
                \$types[] = \$type;
            }
        }

        return \$types;
    }

    /**
     * Creates a {@see Type} from a PHPDoc type.
     */
    private function createType(DocType \$type, bool \$nullable, string \$docType = null): ?Type
    {
        \$docType = \$docType ?? (string) \$type;

        if (\$type instanceof Collection) {
            list(\$phpType, \$class) = \$this->getPhpTypeAndClass((string) \$type->getFqsen());

            \$key = \$this->getTypes(\$type->getKeyType());
            \$value = \$this->getTypes(\$type->getValueType());

            // More than 1 type returned means it is a Compound type, which is
            // not handled by Type, so better use a null value.
            \$key = 1 === \\count(\$key) ? \$key[0] : null;
            \$value = 1 === \\count(\$value) ? \$value[0] : null;

            return new Type(\$phpType, \$nullable, \$class, true, \$key, \$value);
        }

        // Cannot guess
        if (!\$docType || 'mixed' === \$docType) {
            return null;
        }

        if ('[]' === substr(\$docType, -2)) {
            if ('mixed[]' === \$docType) {
                \$collectionKeyType = null;
                \$collectionValueType = null;
            } else {
                \$collectionKeyType = new Type(Type::BUILTIN_TYPE_INT);
                \$collectionValueType = \$this->createType(\$type, \$nullable, substr(\$docType, 0, -2));
            }

            return new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, \$collectionKeyType, \$collectionValueType);
        }

        \$docType = \$this->normalizeType(\$docType);
        list(\$phpType, \$class) = \$this->getPhpTypeAndClass(\$docType);

        if ('array' === \$docType) {
            return new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, null, null);
        }

        return new Type(\$phpType, \$nullable, \$class);
    }

    private function normalizeType(string \$docType): string
    {
        switch (\$docType) {
            case 'integer':
                return 'int';

            case 'boolean':
                return 'bool';

            // real is not part of the PHPDoc standard, so we ignore it
            case 'double':
                return 'float';

            case 'callback':
                return 'callable';

            case 'void':
                return 'null';

            default:
                return \$docType;
        }
    }

    private function getPhpTypeAndClass(string \$docType): array
    {
        if (\\in_array(\$docType, Type::\$builtinTypes)) {
            return [\$docType, null];
        }

        return ['object', substr(\$docType, 1)];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Util/PhpDocTypeHelper.php";
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

namespace Symfony\\Component\\PropertyInfo\\Util;

use phpDocumentor\\Reflection\\Type as DocType;
use phpDocumentor\\Reflection\\Types\\Collection;
use phpDocumentor\\Reflection\\Types\\Compound;
use phpDocumentor\\Reflection\\Types\\Null_;
use phpDocumentor\\Reflection\\Types\\Nullable;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * Transforms a php doc type to a {@link Type} instance.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Guilhem N. <egetick@gmail.com>
 */
final class PhpDocTypeHelper
{
    /**
     * Creates a {@see Type} from a PHPDoc type.
     *
     * @return Type[]
     */
    public function getTypes(DocType \$varType): array
    {
        \$types = [];
        \$nullable = false;

        if (\$varType instanceof Nullable) {
            \$nullable = true;
            \$varType = \$varType->getActualType();
        }

        if (!\$varType instanceof Compound) {
            if (\$varType instanceof Null_) {
                \$nullable = true;
            }

            \$type = \$this->createType(\$varType, \$nullable);
            if (null !== \$type) {
                \$types[] = \$type;
            }

            return \$types;
        }

        \$varTypes = [];
        for (\$typeIndex = 0; \$varType->has(\$typeIndex); ++\$typeIndex) {
            \$type = \$varType->get(\$typeIndex);

            // If null is present, all types are nullable
            if (\$type instanceof Null_) {
                \$nullable = true;
                continue;
            }

            if (\$type instanceof Nullable) {
                \$nullable = true;
                \$type = \$type->getActualType();
            }

            \$varTypes[] = \$type;
        }

        foreach (\$varTypes as \$varType) {
            \$type = \$this->createType(\$varType, \$nullable);
            if (null !== \$type) {
                \$types[] = \$type;
            }
        }

        return \$types;
    }

    /**
     * Creates a {@see Type} from a PHPDoc type.
     */
    private function createType(DocType \$type, bool \$nullable, string \$docType = null): ?Type
    {
        \$docType = \$docType ?? (string) \$type;

        if (\$type instanceof Collection) {
            list(\$phpType, \$class) = \$this->getPhpTypeAndClass((string) \$type->getFqsen());

            \$key = \$this->getTypes(\$type->getKeyType());
            \$value = \$this->getTypes(\$type->getValueType());

            // More than 1 type returned means it is a Compound type, which is
            // not handled by Type, so better use a null value.
            \$key = 1 === \\count(\$key) ? \$key[0] : null;
            \$value = 1 === \\count(\$value) ? \$value[0] : null;

            return new Type(\$phpType, \$nullable, \$class, true, \$key, \$value);
        }

        // Cannot guess
        if (!\$docType || 'mixed' === \$docType) {
            return null;
        }

        if ('[]' === substr(\$docType, -2)) {
            if ('mixed[]' === \$docType) {
                \$collectionKeyType = null;
                \$collectionValueType = null;
            } else {
                \$collectionKeyType = new Type(Type::BUILTIN_TYPE_INT);
                \$collectionValueType = \$this->createType(\$type, \$nullable, substr(\$docType, 0, -2));
            }

            return new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, \$collectionKeyType, \$collectionValueType);
        }

        \$docType = \$this->normalizeType(\$docType);
        list(\$phpType, \$class) = \$this->getPhpTypeAndClass(\$docType);

        if ('array' === \$docType) {
            return new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, null, null);
        }

        return new Type(\$phpType, \$nullable, \$class);
    }

    private function normalizeType(string \$docType): string
    {
        switch (\$docType) {
            case 'integer':
                return 'int';

            case 'boolean':
                return 'bool';

            // real is not part of the PHPDoc standard, so we ignore it
            case 'double':
                return 'float';

            case 'callback':
                return 'callable';

            case 'void':
                return 'null';

            default:
                return \$docType;
        }
    }

    private function getPhpTypeAndClass(string \$docType): array
    {
        if (\\in_array(\$docType, Type::\$builtinTypes)) {
            return [\$docType, null];
        }

        return ['object', substr(\$docType, 1)];
    }
}
", "vendor/symfony/property-info/Util/PhpDocTypeHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Util/PhpDocTypeHelper.php");
    }
}
