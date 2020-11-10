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

/* vendor/zendframework/zend-code/src/Generator/TypeGenerator.php */
class __TwigTemplate_9d1355fc6452d96d54dccbec08920da2154047e56e28b173fadbea9e90bc71f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/TypeGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/TypeGenerator.php"));

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

use Zend\\Code\\Generator\\Exception\\InvalidArgumentException;

use function in_array;
use function ltrim;
use function preg_match;
use function sprintf;
use function strpos;
use function strtolower;
use function substr;

final class TypeGenerator implements GeneratorInterface
{
    /**
     * @var bool
     */
    private \$isInternalPhpType;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var bool
     */
    private \$nullable;

    /**
     * @var string[]
     *
     * @link http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
     */
    private static \$internalPhpTypes = [
        'void',
        'int',
        'float',
        'string',
        'bool',
        'array',
        'callable',
        'iterable',
        'object'
    ];

    /**
     * @var string a regex pattern to match valid class names or types
     */
    private static \$validIdentifierMatcher = '/^[a-zA-Z_\\x80-\\xff][a-zA-Z0-9_\\x80-\\xff]*'
        . '(\\\\\\\\[a-zA-Z_\\x80-\\xff][a-zA-Z0-9_\\x80-\\xff]*)*\$/';

    /**
     * @param string \$type
     *
     * @return TypeGenerator
     *
     * @throws InvalidArgumentException
     */
    public static function fromTypeString(\$type)
    {
        list(\$nullable, \$trimmedNullable) = self::trimNullable(\$type);
        list(\$wasTrimmed, \$trimmedType) = self::trimType(\$trimmedNullable);

        if (! preg_match(self::\$validIdentifierMatcher, \$trimmedType)) {
            throw new InvalidArgumentException(sprintf(
                'Provided type \"%s\" is invalid: must conform \"%s\"',
                \$type,
                self::\$validIdentifierMatcher
            ));
        }

        \$isInternalPhpType = self::isInternalPhpType(\$trimmedType);

        if (\$wasTrimmed && \$isInternalPhpType) {
            throw new InvalidArgumentException(sprintf(
                'Provided type \"%s\" is an internal PHP type, but was provided with a namespace separator prefix',
                \$type
            ));
        }

        if (\$nullable && \$isInternalPhpType && 'void' === strtolower(\$trimmedType)) {
            throw new InvalidArgumentException(sprintf('Provided type \"%s\" cannot be nullable', \$type));
        }

        \$instance = new self();

        \$instance->type              = \$trimmedType;
        \$instance->nullable          = \$nullable;
        \$instance->isInternalPhpType = \$isInternalPhpType;

        return \$instance;
    }

    private function __construct()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function generate()
    {
        \$nullable = \$this->nullable ? '?' : '';

        if (\$this->isInternalPhpType) {
            return \$nullable . strtolower(\$this->type);
        }

        return \$nullable . '\\\\' . \$this->type;
    }

    /**
     * @return string the cleaned type string
     */
    public function __toString()
    {
        return ltrim(\$this->generate(), '?\\\\');
    }

    /**
     * @param string \$type
     *
     * @return bool[]|string[] ordered tuple, first key represents whether the type is nullable, second is the
     *                         trimmed string
     */
    private static function trimNullable(\$type)
    {
        if (0 === strpos(\$type, '?')) {
            return [true, substr(\$type, 1)];
        }

        return [false, \$type];
    }

    /**
     * @param string \$type
     *
     * @return bool[]|string[] ordered tuple, first key represents whether the values was trimmed, second is the
     *                         trimmed string
     */
    private static function trimType(\$type)
    {
        if (0 === strpos(\$type, '\\\\')) {
            return [true, substr(\$type, 1)];
        }

        return [false, \$type];
    }

    /**
     * @param string \$type
     *
     * @return bool
     */
    private static function isInternalPhpType(\$type)
    {
        return in_array(strtolower(\$type), self::\$internalPhpTypes, true);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/TypeGenerator.php";
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

use Zend\\Code\\Generator\\Exception\\InvalidArgumentException;

use function in_array;
use function ltrim;
use function preg_match;
use function sprintf;
use function strpos;
use function strtolower;
use function substr;

final class TypeGenerator implements GeneratorInterface
{
    /**
     * @var bool
     */
    private \$isInternalPhpType;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var bool
     */
    private \$nullable;

    /**
     * @var string[]
     *
     * @link http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
     */
    private static \$internalPhpTypes = [
        'void',
        'int',
        'float',
        'string',
        'bool',
        'array',
        'callable',
        'iterable',
        'object'
    ];

    /**
     * @var string a regex pattern to match valid class names or types
     */
    private static \$validIdentifierMatcher = '/^[a-zA-Z_\\x80-\\xff][a-zA-Z0-9_\\x80-\\xff]*'
        . '(\\\\\\\\[a-zA-Z_\\x80-\\xff][a-zA-Z0-9_\\x80-\\xff]*)*\$/';

    /**
     * @param string \$type
     *
     * @return TypeGenerator
     *
     * @throws InvalidArgumentException
     */
    public static function fromTypeString(\$type)
    {
        list(\$nullable, \$trimmedNullable) = self::trimNullable(\$type);
        list(\$wasTrimmed, \$trimmedType) = self::trimType(\$trimmedNullable);

        if (! preg_match(self::\$validIdentifierMatcher, \$trimmedType)) {
            throw new InvalidArgumentException(sprintf(
                'Provided type \"%s\" is invalid: must conform \"%s\"',
                \$type,
                self::\$validIdentifierMatcher
            ));
        }

        \$isInternalPhpType = self::isInternalPhpType(\$trimmedType);

        if (\$wasTrimmed && \$isInternalPhpType) {
            throw new InvalidArgumentException(sprintf(
                'Provided type \"%s\" is an internal PHP type, but was provided with a namespace separator prefix',
                \$type
            ));
        }

        if (\$nullable && \$isInternalPhpType && 'void' === strtolower(\$trimmedType)) {
            throw new InvalidArgumentException(sprintf('Provided type \"%s\" cannot be nullable', \$type));
        }

        \$instance = new self();

        \$instance->type              = \$trimmedType;
        \$instance->nullable          = \$nullable;
        \$instance->isInternalPhpType = \$isInternalPhpType;

        return \$instance;
    }

    private function __construct()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function generate()
    {
        \$nullable = \$this->nullable ? '?' : '';

        if (\$this->isInternalPhpType) {
            return \$nullable . strtolower(\$this->type);
        }

        return \$nullable . '\\\\' . \$this->type;
    }

    /**
     * @return string the cleaned type string
     */
    public function __toString()
    {
        return ltrim(\$this->generate(), '?\\\\');
    }

    /**
     * @param string \$type
     *
     * @return bool[]|string[] ordered tuple, first key represents whether the type is nullable, second is the
     *                         trimmed string
     */
    private static function trimNullable(\$type)
    {
        if (0 === strpos(\$type, '?')) {
            return [true, substr(\$type, 1)];
        }

        return [false, \$type];
    }

    /**
     * @param string \$type
     *
     * @return bool[]|string[] ordered tuple, first key represents whether the values was trimmed, second is the
     *                         trimmed string
     */
    private static function trimType(\$type)
    {
        if (0 === strpos(\$type, '\\\\')) {
            return [true, substr(\$type, 1)];
        }

        return [false, \$type];
    }

    /**
     * @param string \$type
     *
     * @return bool
     */
    private static function isInternalPhpType(\$type)
    {
        return in_array(strtolower(\$type), self::\$internalPhpTypes, true);
    }
}
", "vendor/zendframework/zend-code/src/Generator/TypeGenerator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/TypeGenerator.php");
    }
}
