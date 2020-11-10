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

/* vendor/symfony/css-selector/Parser/Token.php */
class __TwigTemplate_c4e7fd21f7ed5745381a9410762a8d01fe1dd938d6218931066fd65ca05c4872 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Token.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Token.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser;

/**
 * CSS selector token.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Token
{
    const TYPE_FILE_END = 'eof';
    const TYPE_DELIMITER = 'delimiter';
    const TYPE_WHITESPACE = 'whitespace';
    const TYPE_IDENTIFIER = 'identifier';
    const TYPE_HASH = 'hash';
    const TYPE_NUMBER = 'number';
    const TYPE_STRING = 'string';

    private \$type;
    private \$value;
    private \$position;

    public function __construct(?string \$type, ?string \$value, ?int \$position)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->position = \$position;
    }

    public function getType(): ?int
    {
        return \$this->type;
    }

    public function getValue(): ?string
    {
        return \$this->value;
    }

    public function getPosition(): ?int
    {
        return \$this->position;
    }

    public function isFileEnd(): bool
    {
        return self::TYPE_FILE_END === \$this->type;
    }

    public function isDelimiter(array \$values = []): bool
    {
        if (self::TYPE_DELIMITER !== \$this->type) {
            return false;
        }

        if (empty(\$values)) {
            return true;
        }

        return \\in_array(\$this->value, \$values);
    }

    public function isWhitespace(): bool
    {
        return self::TYPE_WHITESPACE === \$this->type;
    }

    public function isIdentifier(): bool
    {
        return self::TYPE_IDENTIFIER === \$this->type;
    }

    public function isHash(): bool
    {
        return self::TYPE_HASH === \$this->type;
    }

    public function isNumber(): bool
    {
        return self::TYPE_NUMBER === \$this->type;
    }

    public function isString(): bool
    {
        return self::TYPE_STRING === \$this->type;
    }

    public function __toString(): string
    {
        if (\$this->value) {
            return sprintf('<%s \"%s\" at %s>', \$this->type, \$this->value, \$this->position);
        }

        return sprintf('<%s at %s>', \$this->type, \$this->position);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Token.php";
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

namespace Symfony\\Component\\CssSelector\\Parser;

/**
 * CSS selector token.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Token
{
    const TYPE_FILE_END = 'eof';
    const TYPE_DELIMITER = 'delimiter';
    const TYPE_WHITESPACE = 'whitespace';
    const TYPE_IDENTIFIER = 'identifier';
    const TYPE_HASH = 'hash';
    const TYPE_NUMBER = 'number';
    const TYPE_STRING = 'string';

    private \$type;
    private \$value;
    private \$position;

    public function __construct(?string \$type, ?string \$value, ?int \$position)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->position = \$position;
    }

    public function getType(): ?int
    {
        return \$this->type;
    }

    public function getValue(): ?string
    {
        return \$this->value;
    }

    public function getPosition(): ?int
    {
        return \$this->position;
    }

    public function isFileEnd(): bool
    {
        return self::TYPE_FILE_END === \$this->type;
    }

    public function isDelimiter(array \$values = []): bool
    {
        if (self::TYPE_DELIMITER !== \$this->type) {
            return false;
        }

        if (empty(\$values)) {
            return true;
        }

        return \\in_array(\$this->value, \$values);
    }

    public function isWhitespace(): bool
    {
        return self::TYPE_WHITESPACE === \$this->type;
    }

    public function isIdentifier(): bool
    {
        return self::TYPE_IDENTIFIER === \$this->type;
    }

    public function isHash(): bool
    {
        return self::TYPE_HASH === \$this->type;
    }

    public function isNumber(): bool
    {
        return self::TYPE_NUMBER === \$this->type;
    }

    public function isString(): bool
    {
        return self::TYPE_STRING === \$this->type;
    }

    public function __toString(): string
    {
        if (\$this->value) {
            return sprintf('<%s \"%s\" at %s>', \$this->type, \$this->value, \$this->position);
        }

        return sprintf('<%s at %s>', \$this->type, \$this->position);
    }
}
", "vendor/symfony/css-selector/Parser/Token.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Token.php");
    }
}
