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

/* vendor/symfony/property-info/Extractor/PhpDocExtractor.php */
class __TwigTemplate_344284943d32868256d8c62d8e27441ff4a6bfce66d9f91c9e5861a31d2a5981 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Extractor/PhpDocExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Extractor/PhpDocExtractor.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Extractor;

use phpDocumentor\\Reflection\\DocBlock;
use phpDocumentor\\Reflection\\DocBlockFactory;
use phpDocumentor\\Reflection\\DocBlockFactoryInterface;
use phpDocumentor\\Reflection\\Types\\ContextFactory;
use Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;
use Symfony\\Component\\PropertyInfo\\Util\\PhpDocTypeHelper;

/**
 * Extracts data using a PHPDoc parser.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PhpDocExtractor implements PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface
{
    const PROPERTY = 0;
    const ACCESSOR = 1;
    const MUTATOR = 2;

    /**
     * @var DocBlock[]
     */
    private \$docBlocks = [];

    private \$docBlockFactory;
    private \$contextFactory;
    private \$phpDocTypeHelper;
    private \$mutatorPrefixes;
    private \$accessorPrefixes;
    private \$arrayMutatorPrefixes;

    /**
     * @param DocBlockFactoryInterface \$docBlockFactory
     * @param string[]|null            \$mutatorPrefixes
     * @param string[]|null            \$accessorPrefixes
     * @param string[]|null            \$arrayMutatorPrefixes
     */
    public function __construct(DocBlockFactoryInterface \$docBlockFactory = null, array \$mutatorPrefixes = null, array \$accessorPrefixes = null, array \$arrayMutatorPrefixes = null)
    {
        if (!class_exists(DocBlockFactory::class)) {
            throw new \\LogicException(sprintf('Unable to use the \"%s\" class as the \"phpdocumentor/reflection-docblock\" package is not installed.', __CLASS__));
        }

        \$this->docBlockFactory = \$docBlockFactory ?: DocBlockFactory::createInstance();
        \$this->contextFactory = new ContextFactory();
        \$this->phpDocTypeHelper = new PhpDocTypeHelper();
        \$this->mutatorPrefixes = null !== \$mutatorPrefixes ? \$mutatorPrefixes : ReflectionExtractor::\$defaultMutatorPrefixes;
        \$this->accessorPrefixes = null !== \$accessorPrefixes ? \$accessorPrefixes : ReflectionExtractor::\$defaultAccessorPrefixes;
        \$this->arrayMutatorPrefixes = null !== \$arrayMutatorPrefixes ? \$arrayMutatorPrefixes : ReflectionExtractor::\$defaultArrayMutatorPrefixes;
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        \$shortDescription = \$docBlock->getSummary();

        if (!empty(\$shortDescription)) {
            return \$shortDescription;
        }

        foreach (\$docBlock->getTagsByName('var') as \$var) {
            \$varDescription = \$var->getDescription()->render();

            if (!empty(\$varDescription)) {
                return \$varDescription;
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        \$contents = \$docBlock->getDescription()->render();

        return '' === \$contents ? null : \$contents;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock, \$source, \$prefix) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        switch (\$source) {
            case self::PROPERTY:
                \$tag = 'var';
                break;

            case self::ACCESSOR:
                \$tag = 'return';
                break;

            case self::MUTATOR:
                \$tag = 'param';
                break;
        }

        \$types = [];
        /** @var DocBlock\\Tags\\Var_|DocBlock\\Tags\\Return_|DocBlock\\Tags\\Param \$tag */
        foreach (\$docBlock->getTagsByName(\$tag) as \$tag) {
            if (\$tag && null !== \$tag->getType()) {
                \$types = array_merge(\$types, \$this->phpDocTypeHelper->getTypes(\$tag->getType()));
            }
        }

        if (!isset(\$types[0])) {
            return null;
        }

        if (!\\in_array(\$prefix, \$this->arrayMutatorPrefixes)) {
            return \$types;
        }

        return [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), \$types[0])];
    }

    private function getDocBlock(string \$class, string \$property): array
    {
        \$propertyHash = sprintf('%s::%s', \$class, \$property);

        if (isset(\$this->docBlocks[\$propertyHash])) {
            return \$this->docBlocks[\$propertyHash];
        }

        \$ucFirstProperty = ucfirst(\$property);

        switch (true) {
            case \$docBlock = \$this->getDocBlockFromProperty(\$class, \$property):
                \$data = [\$docBlock, self::PROPERTY, null];
                break;

            case list(\$docBlock) = \$this->getDocBlockFromMethod(\$class, \$ucFirstProperty, self::ACCESSOR):
                \$data = [\$docBlock, self::ACCESSOR, null];
                break;

            case list(\$docBlock, \$prefix) = \$this->getDocBlockFromMethod(\$class, \$ucFirstProperty, self::MUTATOR):
                \$data = [\$docBlock, self::MUTATOR, \$prefix];
                break;

            default:
                \$data = [null, null, null];
        }

        return \$this->docBlocks[\$propertyHash] = \$data;
    }

    private function getDocBlockFromProperty(string \$class, string \$property): ?DocBlock
    {
        // Use a ReflectionProperty instead of \$class to get the parent class if applicable
        try {
            \$reflectionProperty = new \\ReflectionProperty(\$class, \$property);
        } catch (\\ReflectionException \$e) {
            return null;
        }

        try {
            return \$this->docBlockFactory->create(\$reflectionProperty, \$this->contextFactory->createFromReflector(\$reflectionProperty->getDeclaringClass()));
        } catch (\\InvalidArgumentException \$e) {
            return null;
        }
    }

    private function getDocBlockFromMethod(string \$class, string \$ucFirstProperty, int \$type): ?array
    {
        \$prefixes = self::ACCESSOR === \$type ? \$this->accessorPrefixes : \$this->mutatorPrefixes;
        \$prefix = null;

        foreach (\$prefixes as \$prefix) {
            \$methodName = \$prefix.\$ucFirstProperty;

            try {
                \$reflectionMethod = new \\ReflectionMethod(\$class, \$methodName);
                if (\$reflectionMethod->isStatic()) {
                    continue;
                }

                if (
                    (self::ACCESSOR === \$type && 0 === \$reflectionMethod->getNumberOfRequiredParameters()) ||
                    (self::MUTATOR === \$type && \$reflectionMethod->getNumberOfParameters() >= 1)
                ) {
                    break;
                }
            } catch (\\ReflectionException \$e) {
                // Try the next prefix if the method doesn't exist
            }
        }

        if (!isset(\$reflectionMethod)) {
            return null;
        }

        try {
            return [\$this->docBlockFactory->create(\$reflectionMethod, \$this->contextFactory->createFromReflector(\$reflectionMethod)), \$prefix];
        } catch (\\InvalidArgumentException \$e) {
            return null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Extractor/PhpDocExtractor.php";
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

namespace Symfony\\Component\\PropertyInfo\\Extractor;

use phpDocumentor\\Reflection\\DocBlock;
use phpDocumentor\\Reflection\\DocBlockFactory;
use phpDocumentor\\Reflection\\DocBlockFactoryInterface;
use phpDocumentor\\Reflection\\Types\\ContextFactory;
use Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;
use Symfony\\Component\\PropertyInfo\\Util\\PhpDocTypeHelper;

/**
 * Extracts data using a PHPDoc parser.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class PhpDocExtractor implements PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface
{
    const PROPERTY = 0;
    const ACCESSOR = 1;
    const MUTATOR = 2;

    /**
     * @var DocBlock[]
     */
    private \$docBlocks = [];

    private \$docBlockFactory;
    private \$contextFactory;
    private \$phpDocTypeHelper;
    private \$mutatorPrefixes;
    private \$accessorPrefixes;
    private \$arrayMutatorPrefixes;

    /**
     * @param DocBlockFactoryInterface \$docBlockFactory
     * @param string[]|null            \$mutatorPrefixes
     * @param string[]|null            \$accessorPrefixes
     * @param string[]|null            \$arrayMutatorPrefixes
     */
    public function __construct(DocBlockFactoryInterface \$docBlockFactory = null, array \$mutatorPrefixes = null, array \$accessorPrefixes = null, array \$arrayMutatorPrefixes = null)
    {
        if (!class_exists(DocBlockFactory::class)) {
            throw new \\LogicException(sprintf('Unable to use the \"%s\" class as the \"phpdocumentor/reflection-docblock\" package is not installed.', __CLASS__));
        }

        \$this->docBlockFactory = \$docBlockFactory ?: DocBlockFactory::createInstance();
        \$this->contextFactory = new ContextFactory();
        \$this->phpDocTypeHelper = new PhpDocTypeHelper();
        \$this->mutatorPrefixes = null !== \$mutatorPrefixes ? \$mutatorPrefixes : ReflectionExtractor::\$defaultMutatorPrefixes;
        \$this->accessorPrefixes = null !== \$accessorPrefixes ? \$accessorPrefixes : ReflectionExtractor::\$defaultAccessorPrefixes;
        \$this->arrayMutatorPrefixes = null !== \$arrayMutatorPrefixes ? \$arrayMutatorPrefixes : ReflectionExtractor::\$defaultArrayMutatorPrefixes;
    }

    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        \$shortDescription = \$docBlock->getSummary();

        if (!empty(\$shortDescription)) {
            return \$shortDescription;
        }

        foreach (\$docBlock->getTagsByName('var') as \$var) {
            \$varDescription = \$var->getDescription()->render();

            if (!empty(\$varDescription)) {
                return \$varDescription;
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        \$contents = \$docBlock->getDescription()->render();

        return '' === \$contents ? null : \$contents;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        /** @var \$docBlock DocBlock */
        list(\$docBlock, \$source, \$prefix) = \$this->getDocBlock(\$class, \$property);
        if (!\$docBlock) {
            return null;
        }

        switch (\$source) {
            case self::PROPERTY:
                \$tag = 'var';
                break;

            case self::ACCESSOR:
                \$tag = 'return';
                break;

            case self::MUTATOR:
                \$tag = 'param';
                break;
        }

        \$types = [];
        /** @var DocBlock\\Tags\\Var_|DocBlock\\Tags\\Return_|DocBlock\\Tags\\Param \$tag */
        foreach (\$docBlock->getTagsByName(\$tag) as \$tag) {
            if (\$tag && null !== \$tag->getType()) {
                \$types = array_merge(\$types, \$this->phpDocTypeHelper->getTypes(\$tag->getType()));
            }
        }

        if (!isset(\$types[0])) {
            return null;
        }

        if (!\\in_array(\$prefix, \$this->arrayMutatorPrefixes)) {
            return \$types;
        }

        return [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), \$types[0])];
    }

    private function getDocBlock(string \$class, string \$property): array
    {
        \$propertyHash = sprintf('%s::%s', \$class, \$property);

        if (isset(\$this->docBlocks[\$propertyHash])) {
            return \$this->docBlocks[\$propertyHash];
        }

        \$ucFirstProperty = ucfirst(\$property);

        switch (true) {
            case \$docBlock = \$this->getDocBlockFromProperty(\$class, \$property):
                \$data = [\$docBlock, self::PROPERTY, null];
                break;

            case list(\$docBlock) = \$this->getDocBlockFromMethod(\$class, \$ucFirstProperty, self::ACCESSOR):
                \$data = [\$docBlock, self::ACCESSOR, null];
                break;

            case list(\$docBlock, \$prefix) = \$this->getDocBlockFromMethod(\$class, \$ucFirstProperty, self::MUTATOR):
                \$data = [\$docBlock, self::MUTATOR, \$prefix];
                break;

            default:
                \$data = [null, null, null];
        }

        return \$this->docBlocks[\$propertyHash] = \$data;
    }

    private function getDocBlockFromProperty(string \$class, string \$property): ?DocBlock
    {
        // Use a ReflectionProperty instead of \$class to get the parent class if applicable
        try {
            \$reflectionProperty = new \\ReflectionProperty(\$class, \$property);
        } catch (\\ReflectionException \$e) {
            return null;
        }

        try {
            return \$this->docBlockFactory->create(\$reflectionProperty, \$this->contextFactory->createFromReflector(\$reflectionProperty->getDeclaringClass()));
        } catch (\\InvalidArgumentException \$e) {
            return null;
        }
    }

    private function getDocBlockFromMethod(string \$class, string \$ucFirstProperty, int \$type): ?array
    {
        \$prefixes = self::ACCESSOR === \$type ? \$this->accessorPrefixes : \$this->mutatorPrefixes;
        \$prefix = null;

        foreach (\$prefixes as \$prefix) {
            \$methodName = \$prefix.\$ucFirstProperty;

            try {
                \$reflectionMethod = new \\ReflectionMethod(\$class, \$methodName);
                if (\$reflectionMethod->isStatic()) {
                    continue;
                }

                if (
                    (self::ACCESSOR === \$type && 0 === \$reflectionMethod->getNumberOfRequiredParameters()) ||
                    (self::MUTATOR === \$type && \$reflectionMethod->getNumberOfParameters() >= 1)
                ) {
                    break;
                }
            } catch (\\ReflectionException \$e) {
                // Try the next prefix if the method doesn't exist
            }
        }

        if (!isset(\$reflectionMethod)) {
            return null;
        }

        try {
            return [\$this->docBlockFactory->create(\$reflectionMethod, \$this->contextFactory->createFromReflector(\$reflectionMethod)), \$prefix];
        } catch (\\InvalidArgumentException \$e) {
            return null;
        }
    }
}
", "vendor/symfony/property-info/Extractor/PhpDocExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Extractor/PhpDocExtractor.php");
    }
}
