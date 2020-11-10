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

/* vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php */
class __TwigTemplate_1efb6afa5add637a977f61e2530984e38d53b39b78d5da8c180f24375df0faad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Zend\\Code\\Reflection\\PropertyReflection;

use function sprintf;
use function str_replace;
use function strtolower;

class PropertyGenerator extends AbstractMemberGenerator
{
    const FLAG_CONSTANT = 0x08;

    /**
     * @var bool
     */
    protected \$isConst;

    /**
     * @var PropertyValueGenerator
     */
    protected \$defaultValue;

    /**
     * @var bool
     */
    private \$omitDefaultValue = false;

    /**
     * @param  PropertyReflection \$reflectionProperty
     * @return PropertyGenerator
     */
    public static function fromReflection(PropertyReflection \$reflectionProperty)
    {
        \$property = new static();

        \$property->setName(\$reflectionProperty->getName());

        \$allDefaultProperties = \$reflectionProperty->getDeclaringClass()->getDefaultProperties();

        \$defaultValue = \$allDefaultProperties[\$reflectionProperty->getName()];
        \$property->setDefaultValue(\$defaultValue);
        if (\$defaultValue === null) {
            \$property->omitDefaultValue = true;
        }

        if (\$reflectionProperty->getDocComment() != '') {
            \$property->setDocBlock(DocBlockGenerator::fromReflection(\$reflectionProperty->getDocBlock()));
        }

        if (\$reflectionProperty->isStatic()) {
            \$property->setStatic(true);
        }

        if (\$reflectionProperty->isPrivate()) {
            \$property->setVisibility(self::VISIBILITY_PRIVATE);
        } elseif (\$reflectionProperty->isProtected()) {
            \$property->setVisibility(self::VISIBILITY_PROTECTED);
        } else {
            \$property->setVisibility(self::VISIBILITY_PUBLIC);
        }

        \$property->setSourceDirty(false);

        return \$property;
    }

    /**
     * Generate from array
     *
     * @configkey name               string                                          [required] Class Name
     * @configkey const              bool
     * @configkey defaultvalue       null|bool|string|int|float|array|ValueGenerator
     * @configkey flags              int
     * @configkey abstract           bool
     * @configkey final              bool
     * @configkey static             bool
     * @configkey visibility         string
     * @configkey omitdefaultvalue   bool
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return PropertyGenerator
     */
    public static function fromArray(array \$array)
    {
        if (! isset(\$array['name'])) {
            throw new Exception\\InvalidArgumentException(
                'Property generator requires that a name is provided for this object'
            );
        }

        \$property = new static(\$array['name']);
        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'const':
                    \$property->setConst(\$value);
                    break;
                case 'defaultvalue':
                    \$property->setDefaultValue(\$value);
                    break;
                case 'docblock':
                    \$docBlock = \$value instanceof DocBlockGenerator ? \$value : DocBlockGenerator::fromArray(\$value);
                    \$property->setDocBlock(\$docBlock);
                    break;
                case 'flags':
                    \$property->setFlags(\$value);
                    break;
                case 'abstract':
                    \$property->setAbstract(\$value);
                    break;
                case 'final':
                    \$property->setFinal(\$value);
                    break;
                case 'static':
                    \$property->setStatic(\$value);
                    break;
                case 'visibility':
                    \$property->setVisibility(\$value);
                    break;
                case 'omitdefaultvalue':
                    \$property->omitDefaultValue(\$value);
                    break;
            }
        }

        return \$property;
    }

    /**
     * @param string \$name
     * @param PropertyValueGenerator|string|array \$defaultValue
     * @param int \$flags
     */
    public function __construct(\$name = null, \$defaultValue = null, \$flags = self::FLAG_PUBLIC)
    {
        if (null !== \$name) {
            \$this->setName(\$name);
        }
        if (null !== \$defaultValue) {
            \$this->setDefaultValue(\$defaultValue);
        }
        if (\$flags !== self::FLAG_PUBLIC) {
            \$this->setFlags(\$flags);
        }
    }

    /**
     * @param  bool \$const
     * @return PropertyGenerator
     */
    public function setConst(\$const)
    {
        if (\$const) {
            \$this->setFlags(self::FLAG_CONSTANT);
        } else {
            \$this->removeFlag(self::FLAG_CONSTANT);
        }

        return \$this;
    }

    /**
     * @return bool
     */
    public function isConst()
    {
        return (bool) (\$this->flags & self::FLAG_CONSTANT);
    }

    /**
     * @param PropertyValueGenerator|mixed \$defaultValue
     * @param string                       \$defaultValueType
     * @param string                       \$defaultValueOutputMode
     *
     * @return PropertyGenerator
     */
    public function setDefaultValue(
        \$defaultValue,
        \$defaultValueType = PropertyValueGenerator::TYPE_AUTO,
        \$defaultValueOutputMode = PropertyValueGenerator::OUTPUT_MULTIPLE_LINE
    ) {
        if (! \$defaultValue instanceof PropertyValueGenerator) {
            \$defaultValue = new PropertyValueGenerator(\$defaultValue, \$defaultValueType, \$defaultValueOutputMode);
        }

        \$this->defaultValue = \$defaultValue;

        return \$this;
    }

    /**
     * @return PropertyValueGenerator
     */
    public function getDefaultValue()
    {
        return \$this->defaultValue;
    }

    /**
     * @throws Exception\\RuntimeException
     * @return string
     */
    public function generate()
    {
        \$name         = \$this->getName();
        \$defaultValue = \$this->getDefaultValue();

        \$output = '';

        if ((\$docBlock = \$this->getDocBlock()) !== null) {
            \$docBlock->setIndentation('    ');
            \$output .= \$docBlock->generate();
        }

        if (\$this->isConst()) {
            if (\$defaultValue !== null && ! \$defaultValue->isValidConstantType()) {
                throw new Exception\\RuntimeException(sprintf(
                    'The property %s is said to be '
                    . 'constant but does not have a valid constant value.',
                    \$this->name
                ));
            }
            \$output .= \$this->indentation . \$this->getVisibility() . ' const ' . \$name . ' = '
                . (\$defaultValue !== null ? \$defaultValue->generate() : 'null;');

            return \$output;
        }

        \$output .= \$this->indentation . \$this->getVisibility() . (\$this->isStatic() ? ' static' : '') . ' \$' . \$name;

        if (\$this->omitDefaultValue) {
            return \$output . ';';
        }

        return \$output . ' = ' . (\$defaultValue !== null ? \$defaultValue->generate() : 'null;');
    }

    /**
     * @param bool \$omit
     * @return PropertyGenerator
     */
    public function omitDefaultValue(bool \$omit = true)
    {
        \$this->omitDefaultValue = \$omit;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Zend\\Code\\Reflection\\PropertyReflection;

use function sprintf;
use function str_replace;
use function strtolower;

class PropertyGenerator extends AbstractMemberGenerator
{
    const FLAG_CONSTANT = 0x08;

    /**
     * @var bool
     */
    protected \$isConst;

    /**
     * @var PropertyValueGenerator
     */
    protected \$defaultValue;

    /**
     * @var bool
     */
    private \$omitDefaultValue = false;

    /**
     * @param  PropertyReflection \$reflectionProperty
     * @return PropertyGenerator
     */
    public static function fromReflection(PropertyReflection \$reflectionProperty)
    {
        \$property = new static();

        \$property->setName(\$reflectionProperty->getName());

        \$allDefaultProperties = \$reflectionProperty->getDeclaringClass()->getDefaultProperties();

        \$defaultValue = \$allDefaultProperties[\$reflectionProperty->getName()];
        \$property->setDefaultValue(\$defaultValue);
        if (\$defaultValue === null) {
            \$property->omitDefaultValue = true;
        }

        if (\$reflectionProperty->getDocComment() != '') {
            \$property->setDocBlock(DocBlockGenerator::fromReflection(\$reflectionProperty->getDocBlock()));
        }

        if (\$reflectionProperty->isStatic()) {
            \$property->setStatic(true);
        }

        if (\$reflectionProperty->isPrivate()) {
            \$property->setVisibility(self::VISIBILITY_PRIVATE);
        } elseif (\$reflectionProperty->isProtected()) {
            \$property->setVisibility(self::VISIBILITY_PROTECTED);
        } else {
            \$property->setVisibility(self::VISIBILITY_PUBLIC);
        }

        \$property->setSourceDirty(false);

        return \$property;
    }

    /**
     * Generate from array
     *
     * @configkey name               string                                          [required] Class Name
     * @configkey const              bool
     * @configkey defaultvalue       null|bool|string|int|float|array|ValueGenerator
     * @configkey flags              int
     * @configkey abstract           bool
     * @configkey final              bool
     * @configkey static             bool
     * @configkey visibility         string
     * @configkey omitdefaultvalue   bool
     *
     * @throws Exception\\InvalidArgumentException
     * @param  array \$array
     * @return PropertyGenerator
     */
    public static function fromArray(array \$array)
    {
        if (! isset(\$array['name'])) {
            throw new Exception\\InvalidArgumentException(
                'Property generator requires that a name is provided for this object'
            );
        }

        \$property = new static(\$array['name']);
        foreach (\$array as \$name => \$value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', \$name))) {
                case 'const':
                    \$property->setConst(\$value);
                    break;
                case 'defaultvalue':
                    \$property->setDefaultValue(\$value);
                    break;
                case 'docblock':
                    \$docBlock = \$value instanceof DocBlockGenerator ? \$value : DocBlockGenerator::fromArray(\$value);
                    \$property->setDocBlock(\$docBlock);
                    break;
                case 'flags':
                    \$property->setFlags(\$value);
                    break;
                case 'abstract':
                    \$property->setAbstract(\$value);
                    break;
                case 'final':
                    \$property->setFinal(\$value);
                    break;
                case 'static':
                    \$property->setStatic(\$value);
                    break;
                case 'visibility':
                    \$property->setVisibility(\$value);
                    break;
                case 'omitdefaultvalue':
                    \$property->omitDefaultValue(\$value);
                    break;
            }
        }

        return \$property;
    }

    /**
     * @param string \$name
     * @param PropertyValueGenerator|string|array \$defaultValue
     * @param int \$flags
     */
    public function __construct(\$name = null, \$defaultValue = null, \$flags = self::FLAG_PUBLIC)
    {
        if (null !== \$name) {
            \$this->setName(\$name);
        }
        if (null !== \$defaultValue) {
            \$this->setDefaultValue(\$defaultValue);
        }
        if (\$flags !== self::FLAG_PUBLIC) {
            \$this->setFlags(\$flags);
        }
    }

    /**
     * @param  bool \$const
     * @return PropertyGenerator
     */
    public function setConst(\$const)
    {
        if (\$const) {
            \$this->setFlags(self::FLAG_CONSTANT);
        } else {
            \$this->removeFlag(self::FLAG_CONSTANT);
        }

        return \$this;
    }

    /**
     * @return bool
     */
    public function isConst()
    {
        return (bool) (\$this->flags & self::FLAG_CONSTANT);
    }

    /**
     * @param PropertyValueGenerator|mixed \$defaultValue
     * @param string                       \$defaultValueType
     * @param string                       \$defaultValueOutputMode
     *
     * @return PropertyGenerator
     */
    public function setDefaultValue(
        \$defaultValue,
        \$defaultValueType = PropertyValueGenerator::TYPE_AUTO,
        \$defaultValueOutputMode = PropertyValueGenerator::OUTPUT_MULTIPLE_LINE
    ) {
        if (! \$defaultValue instanceof PropertyValueGenerator) {
            \$defaultValue = new PropertyValueGenerator(\$defaultValue, \$defaultValueType, \$defaultValueOutputMode);
        }

        \$this->defaultValue = \$defaultValue;

        return \$this;
    }

    /**
     * @return PropertyValueGenerator
     */
    public function getDefaultValue()
    {
        return \$this->defaultValue;
    }

    /**
     * @throws Exception\\RuntimeException
     * @return string
     */
    public function generate()
    {
        \$name         = \$this->getName();
        \$defaultValue = \$this->getDefaultValue();

        \$output = '';

        if ((\$docBlock = \$this->getDocBlock()) !== null) {
            \$docBlock->setIndentation('    ');
            \$output .= \$docBlock->generate();
        }

        if (\$this->isConst()) {
            if (\$defaultValue !== null && ! \$defaultValue->isValidConstantType()) {
                throw new Exception\\RuntimeException(sprintf(
                    'The property %s is said to be '
                    . 'constant but does not have a valid constant value.',
                    \$this->name
                ));
            }
            \$output .= \$this->indentation . \$this->getVisibility() . ' const ' . \$name . ' = '
                . (\$defaultValue !== null ? \$defaultValue->generate() : 'null;');

            return \$output;
        }

        \$output .= \$this->indentation . \$this->getVisibility() . (\$this->isStatic() ? ' static' : '') . ' \$' . \$name;

        if (\$this->omitDefaultValue) {
            return \$output . ';';
        }

        return \$output . ' = ' . (\$defaultValue !== null ? \$defaultValue->generate() : 'null;');
    }

    /**
     * @param bool \$omit
     * @return PropertyGenerator
     */
    public function omitDefaultValue(bool \$omit = true)
    {
        \$this->omitDefaultValue = \$omit;

        return \$this;
    }
}
", "vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/PropertyGenerator.php");
    }
}
