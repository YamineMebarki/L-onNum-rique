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

/* vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php */
class __TwigTemplate_40d5ff07d0f598eef5a2b934561d49ea11b32a7ea99cc53a5f3fb229cdf3d096 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php"));

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

use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type as PropertyInfoType;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Guesses and loads the appropriate constraints using PropertyInfo.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class PropertyInfoLoader implements LoaderInterface
{
    private \$listExtractor;
    private \$typeExtractor;
    private \$accessExtractor;
    private \$classValidatorRegexp;

    public function __construct(PropertyListExtractorInterface \$listExtractor, PropertyTypeExtractorInterface \$typeExtractor, PropertyAccessExtractorInterface \$accessExtractor, string \$classValidatorRegexp = null)
    {
        \$this->listExtractor = \$listExtractor;
        \$this->typeExtractor = \$typeExtractor;
        \$this->accessExtractor = \$accessExtractor;
        \$this->classValidatorRegexp = \$classValidatorRegexp;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$className = \$metadata->getClassName();
        if (null !== \$this->classValidatorRegexp && !preg_match(\$this->classValidatorRegexp, \$className)) {
            return false;
        }

        if (!\$properties = \$this->listExtractor->getProperties(\$className)) {
            return false;
        }

        foreach (\$properties as \$property) {
            if (false === \$this->accessExtractor->isWritable(\$className, \$property)) {
                continue;
            }

            if (!property_exists(\$className, \$property)) {
                continue;
            }

            \$types = \$this->typeExtractor->getTypes(\$className, \$property);
            if (null === \$types) {
                continue;
            }

            \$hasTypeConstraint = false;
            \$hasNotNullConstraint = false;
            \$hasNotBlankConstraint = false;
            \$allConstraint = null;
            foreach (\$metadata->getPropertyMetadata(\$property) as \$propertyMetadata) {
                foreach (\$propertyMetadata->getConstraints() as \$constraint) {
                    if (\$constraint instanceof Type) {
                        \$hasTypeConstraint = true;
                    } elseif (\$constraint instanceof NotNull) {
                        \$hasNotNullConstraint = true;
                    } elseif (\$constraint instanceof NotBlank) {
                        \$hasNotBlankConstraint = true;
                    } elseif (\$constraint instanceof All) {
                        \$allConstraint = \$constraint;
                    }
                }
            }

            \$builtinTypes = [];
            \$nullable = false;
            \$scalar = true;
            foreach (\$types as \$type) {
                \$builtinTypes[] = \$type->getBuiltinType();

                if (\$scalar && !\\in_array(\$type->getBuiltinType(), [PropertyInfoType::BUILTIN_TYPE_INT, PropertyInfoType::BUILTIN_TYPE_FLOAT, PropertyInfoType::BUILTIN_TYPE_STRING, PropertyInfoType::BUILTIN_TYPE_BOOL], true)) {
                    \$scalar = false;
                }

                if (!\$nullable && \$type->isNullable()) {
                    \$nullable = true;
                }
            }
            if (!\$hasTypeConstraint) {
                if (1 === \\count(\$builtinTypes)) {
                    if (\$types[0]->isCollection() && (null !== \$collectionValueType = \$types[0]->getCollectionValueType())) {
                        \$this->handleAllConstraint(\$property, \$allConstraint, \$collectionValueType, \$metadata);
                    }

                    \$metadata->addPropertyConstraint(\$property, \$this->getTypeConstraint(\$builtinTypes[0], \$types[0]));
                } elseif (\$scalar) {
                    \$metadata->addPropertyConstraint(\$property, new Type(['type' => 'scalar']));
                }
            }

            if (!\$nullable && !\$hasNotBlankConstraint && !\$hasNotNullConstraint) {
                \$metadata->addPropertyConstraint(\$property, new NotNull());
            }
        }

        return true;
    }

    private function getTypeConstraint(string \$builtinType, PropertyInfoType \$type): Type
    {
        if (PropertyInfoType::BUILTIN_TYPE_OBJECT === \$builtinType && null !== \$className = \$type->getClassName()) {
            return new Type(['type' => \$className]);
        }

        return new Type(['type' => \$builtinType]);
    }

    private function handleAllConstraint(string \$property, ?All \$allConstraint, PropertyInfoType \$propertyInfoType, ClassMetadata \$metadata)
    {
        \$containsTypeConstraint = false;
        \$containsNotNullConstraint = false;
        if (null !== \$allConstraint) {
            foreach (\$allConstraint->constraints as \$constraint) {
                if (\$constraint instanceof Type) {
                    \$containsTypeConstraint = true;
                } elseif (\$constraint instanceof NotNull) {
                    \$containsNotNullConstraint = true;
                }
            }
        }

        \$constraints = [];
        if (!\$containsNotNullConstraint && !\$propertyInfoType->isNullable()) {
            \$constraints[] = new NotNull();
        }

        if (!\$containsTypeConstraint) {
            \$constraints[] = \$this->getTypeConstraint(\$propertyInfoType->getBuiltinType(), \$propertyInfoType);
        }

        if (null === \$allConstraint) {
            \$metadata->addPropertyConstraint(\$property, new All(['constraints' => \$constraints]));
        } else {
            \$allConstraint->constraints = array_merge(\$allConstraint->constraints, \$constraints);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php";
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

use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type as PropertyInfoType;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Guesses and loads the appropriate constraints using PropertyInfo.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class PropertyInfoLoader implements LoaderInterface
{
    private \$listExtractor;
    private \$typeExtractor;
    private \$accessExtractor;
    private \$classValidatorRegexp;

    public function __construct(PropertyListExtractorInterface \$listExtractor, PropertyTypeExtractorInterface \$typeExtractor, PropertyAccessExtractorInterface \$accessExtractor, string \$classValidatorRegexp = null)
    {
        \$this->listExtractor = \$listExtractor;
        \$this->typeExtractor = \$typeExtractor;
        \$this->accessExtractor = \$accessExtractor;
        \$this->classValidatorRegexp = \$classValidatorRegexp;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$className = \$metadata->getClassName();
        if (null !== \$this->classValidatorRegexp && !preg_match(\$this->classValidatorRegexp, \$className)) {
            return false;
        }

        if (!\$properties = \$this->listExtractor->getProperties(\$className)) {
            return false;
        }

        foreach (\$properties as \$property) {
            if (false === \$this->accessExtractor->isWritable(\$className, \$property)) {
                continue;
            }

            if (!property_exists(\$className, \$property)) {
                continue;
            }

            \$types = \$this->typeExtractor->getTypes(\$className, \$property);
            if (null === \$types) {
                continue;
            }

            \$hasTypeConstraint = false;
            \$hasNotNullConstraint = false;
            \$hasNotBlankConstraint = false;
            \$allConstraint = null;
            foreach (\$metadata->getPropertyMetadata(\$property) as \$propertyMetadata) {
                foreach (\$propertyMetadata->getConstraints() as \$constraint) {
                    if (\$constraint instanceof Type) {
                        \$hasTypeConstraint = true;
                    } elseif (\$constraint instanceof NotNull) {
                        \$hasNotNullConstraint = true;
                    } elseif (\$constraint instanceof NotBlank) {
                        \$hasNotBlankConstraint = true;
                    } elseif (\$constraint instanceof All) {
                        \$allConstraint = \$constraint;
                    }
                }
            }

            \$builtinTypes = [];
            \$nullable = false;
            \$scalar = true;
            foreach (\$types as \$type) {
                \$builtinTypes[] = \$type->getBuiltinType();

                if (\$scalar && !\\in_array(\$type->getBuiltinType(), [PropertyInfoType::BUILTIN_TYPE_INT, PropertyInfoType::BUILTIN_TYPE_FLOAT, PropertyInfoType::BUILTIN_TYPE_STRING, PropertyInfoType::BUILTIN_TYPE_BOOL], true)) {
                    \$scalar = false;
                }

                if (!\$nullable && \$type->isNullable()) {
                    \$nullable = true;
                }
            }
            if (!\$hasTypeConstraint) {
                if (1 === \\count(\$builtinTypes)) {
                    if (\$types[0]->isCollection() && (null !== \$collectionValueType = \$types[0]->getCollectionValueType())) {
                        \$this->handleAllConstraint(\$property, \$allConstraint, \$collectionValueType, \$metadata);
                    }

                    \$metadata->addPropertyConstraint(\$property, \$this->getTypeConstraint(\$builtinTypes[0], \$types[0]));
                } elseif (\$scalar) {
                    \$metadata->addPropertyConstraint(\$property, new Type(['type' => 'scalar']));
                }
            }

            if (!\$nullable && !\$hasNotBlankConstraint && !\$hasNotNullConstraint) {
                \$metadata->addPropertyConstraint(\$property, new NotNull());
            }
        }

        return true;
    }

    private function getTypeConstraint(string \$builtinType, PropertyInfoType \$type): Type
    {
        if (PropertyInfoType::BUILTIN_TYPE_OBJECT === \$builtinType && null !== \$className = \$type->getClassName()) {
            return new Type(['type' => \$className]);
        }

        return new Type(['type' => \$builtinType]);
    }

    private function handleAllConstraint(string \$property, ?All \$allConstraint, PropertyInfoType \$propertyInfoType, ClassMetadata \$metadata)
    {
        \$containsTypeConstraint = false;
        \$containsNotNullConstraint = false;
        if (null !== \$allConstraint) {
            foreach (\$allConstraint->constraints as \$constraint) {
                if (\$constraint instanceof Type) {
                    \$containsTypeConstraint = true;
                } elseif (\$constraint instanceof NotNull) {
                    \$containsNotNullConstraint = true;
                }
            }
        }

        \$constraints = [];
        if (!\$containsNotNullConstraint && !\$propertyInfoType->isNullable()) {
            \$constraints[] = new NotNull();
        }

        if (!\$containsTypeConstraint) {
            \$constraints[] = \$this->getTypeConstraint(\$propertyInfoType->getBuiltinType(), \$propertyInfoType);
        }

        if (null === \$allConstraint) {
            \$metadata->addPropertyConstraint(\$property, new All(['constraints' => \$constraints]));
        } else {
            \$allConstraint->constraints = array_merge(\$allConstraint->constraints, \$constraints);
        }
    }
}
", "vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php");
    }
}
