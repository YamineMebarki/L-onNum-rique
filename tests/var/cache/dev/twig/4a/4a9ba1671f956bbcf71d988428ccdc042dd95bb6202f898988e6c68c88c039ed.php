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

/* vendor/zendframework/zend-code/src/DeclareStatement.php */
class __TwigTemplate_c8dd622fbaa9566d917dbe73cd90af5dcac6d1e8040d03ad6be83c2da82862fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/DeclareStatement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/DeclareStatement.php"));

        // line 1
        echo "<?php

namespace Zend\\Code;

use Zend\\Code\\Exception\\InvalidArgumentException;

class DeclareStatement
{
    public const TICKS = 'ticks';
    public const STRICT_TYPES = 'strict_types';
    public const ENCODING = 'encoding';

    private const ALLOWED = [
        self::TICKS        => 'integer',
        self::STRICT_TYPES => 'integer',
        self::ENCODING     => 'string',
    ];

    /**
     * @var string
     */
    protected \$directive;

    /**
     * @var int|string
     */
    protected \$value;

    private function __construct(string \$directive, \$value)
    {
        \$this->directive = \$directive;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getDirective(): string
    {
        return \$this->directive;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function ticks(int \$value): self
    {
        return new self(self::TICKS, \$value);
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function strictTypes(int \$value): self
    {
        return new self(self::STRICT_TYPES, \$value);
    }

    /**
     * @param string \$value
     * @return self
     */
    public static function encoding(string \$value): self
    {
        return new self(self::ENCODING, \$value);
    }

    public static function fromArray(array \$config): self
    {
        \$directive = key(\$config);
        \$value = \$config[\$directive];

        if (! isset(self::ALLOWED[\$directive])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare directive must be one of: %s.',
                    implode(', ', array_keys(self::ALLOWED))
                )
            );
        }

        if (gettype(\$value) !== self::ALLOWED[\$directive]) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare value invalid. Expected %s, got %s.',
                    self::ALLOWED[\$directive],
                    gettype(\$value)
                )
            );
        }

        \$method = str_replace('_', '', lcfirst(ucwords(\$directive, '_')));

        return self::{\$method}(\$value);
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        \$value = is_string(\$this->value) ? '\\'' . \$this->value . '\\'' : \$this->value;

        return sprintf('declare(%s=%s);', \$this->directive, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/DeclareStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Zend\\Code;

use Zend\\Code\\Exception\\InvalidArgumentException;

class DeclareStatement
{
    public const TICKS = 'ticks';
    public const STRICT_TYPES = 'strict_types';
    public const ENCODING = 'encoding';

    private const ALLOWED = [
        self::TICKS        => 'integer',
        self::STRICT_TYPES => 'integer',
        self::ENCODING     => 'string',
    ];

    /**
     * @var string
     */
    protected \$directive;

    /**
     * @var int|string
     */
    protected \$value;

    private function __construct(string \$directive, \$value)
    {
        \$this->directive = \$directive;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getDirective(): string
    {
        return \$this->directive;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function ticks(int \$value): self
    {
        return new self(self::TICKS, \$value);
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function strictTypes(int \$value): self
    {
        return new self(self::STRICT_TYPES, \$value);
    }

    /**
     * @param string \$value
     * @return self
     */
    public static function encoding(string \$value): self
    {
        return new self(self::ENCODING, \$value);
    }

    public static function fromArray(array \$config): self
    {
        \$directive = key(\$config);
        \$value = \$config[\$directive];

        if (! isset(self::ALLOWED[\$directive])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare directive must be one of: %s.',
                    implode(', ', array_keys(self::ALLOWED))
                )
            );
        }

        if (gettype(\$value) !== self::ALLOWED[\$directive]) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare value invalid. Expected %s, got %s.',
                    self::ALLOWED[\$directive],
                    gettype(\$value)
                )
            );
        }

        \$method = str_replace('_', '', lcfirst(ucwords(\$directive, '_')));

        return self::{\$method}(\$value);
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        \$value = is_string(\$this->value) ? '\\'' . \$this->value . '\\'' : \$this->value;

        return sprintf('declare(%s=%s);', \$this->directive, \$value);
    }
}
", "vendor/zendframework/zend-code/src/DeclareStatement.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/DeclareStatement.php");
    }
}
