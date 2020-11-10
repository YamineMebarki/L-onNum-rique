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

/* vendor/symfony/validator/Constraints/Regex.php */
class __TwigTemplate_cb21fe90bd3891b303583c82a15460456846e62b2672f1bb23e0489e92133141 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Regex.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Regex.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Regex extends Constraint
{
    const REGEX_FAILED_ERROR = 'de1e3db3-5ed4-4941-aae4-59f3667cc3a3';

    protected static \$errorNames = [
        self::REGEX_FAILED_ERROR => 'REGEX_FAILED_ERROR',
    ];

    public \$message = 'This value is not valid.';
    public \$pattern;
    public \$htmlPattern;
    public \$match = true;
    public \$normalizer;

    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'pattern';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['pattern'];
    }

    /**
     * Converts the htmlPattern to a suitable format for HTML5 pattern.
     * Example: /^[a-z]+\$/ would be converted to [a-z]+
     * However, if options are specified, it cannot be converted.
     *
     * Pattern is also ignored if match=false since the pattern should
     * then be reversed before application.
     *
     * @see http://dev.w3.org/html5/spec/single-page.html#the-pattern-attribute
     *
     * @return string|null
     */
    public function getHtmlPattern()
    {
        // If htmlPattern is specified, use it
        if (null !== \$this->htmlPattern) {
            return empty(\$this->htmlPattern)
                ? null
                : \$this->htmlPattern;
        }

        // Quit if delimiters not at very beginning/end (e.g. when options are passed)
        if (\$this->pattern[0] !== \$this->pattern[\\strlen(\$this->pattern) - 1]) {
            return null;
        }

        \$delimiter = \$this->pattern[0];

        // Unescape the delimiter
        \$pattern = str_replace('\\\\'.\$delimiter, \$delimiter, substr(\$this->pattern, 1, -1));

        // If the pattern is inverted, we can wrap it in
        // ((?!pattern).)*
        if (!\$this->match) {
            return '((?!'.\$pattern.').)*';
        }

        // If the pattern contains an or statement, wrap the pattern in
        // .*(pattern).* and quit. Otherwise we'd need to parse the pattern
        if (false !== strpos(\$pattern, '|')) {
            return '.*('.\$pattern.').*';
        }

        // Trim leading ^, otherwise prepend .*
        \$pattern = '^' === \$pattern[0] ? substr(\$pattern, 1) : '.*'.\$pattern;

        // Trim trailing \$, otherwise append .*
        \$pattern = '\$' === \$pattern[\\strlen(\$pattern) - 1] ? substr(\$pattern, 0, -1) : \$pattern.'.*';

        return \$pattern;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Regex.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Regex extends Constraint
{
    const REGEX_FAILED_ERROR = 'de1e3db3-5ed4-4941-aae4-59f3667cc3a3';

    protected static \$errorNames = [
        self::REGEX_FAILED_ERROR => 'REGEX_FAILED_ERROR',
    ];

    public \$message = 'This value is not valid.';
    public \$pattern;
    public \$htmlPattern;
    public \$match = true;
    public \$normalizer;

    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'pattern';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['pattern'];
    }

    /**
     * Converts the htmlPattern to a suitable format for HTML5 pattern.
     * Example: /^[a-z]+\$/ would be converted to [a-z]+
     * However, if options are specified, it cannot be converted.
     *
     * Pattern is also ignored if match=false since the pattern should
     * then be reversed before application.
     *
     * @see http://dev.w3.org/html5/spec/single-page.html#the-pattern-attribute
     *
     * @return string|null
     */
    public function getHtmlPattern()
    {
        // If htmlPattern is specified, use it
        if (null !== \$this->htmlPattern) {
            return empty(\$this->htmlPattern)
                ? null
                : \$this->htmlPattern;
        }

        // Quit if delimiters not at very beginning/end (e.g. when options are passed)
        if (\$this->pattern[0] !== \$this->pattern[\\strlen(\$this->pattern) - 1]) {
            return null;
        }

        \$delimiter = \$this->pattern[0];

        // Unescape the delimiter
        \$pattern = str_replace('\\\\'.\$delimiter, \$delimiter, substr(\$this->pattern, 1, -1));

        // If the pattern is inverted, we can wrap it in
        // ((?!pattern).)*
        if (!\$this->match) {
            return '((?!'.\$pattern.').)*';
        }

        // If the pattern contains an or statement, wrap the pattern in
        // .*(pattern).* and quit. Otherwise we'd need to parse the pattern
        if (false !== strpos(\$pattern, '|')) {
            return '.*('.\$pattern.').*';
        }

        // Trim leading ^, otherwise prepend .*
        \$pattern = '^' === \$pattern[0] ? substr(\$pattern, 1) : '.*'.\$pattern;

        // Trim trailing \$, otherwise append .*
        \$pattern = '\$' === \$pattern[\\strlen(\$pattern) - 1] ? substr(\$pattern, 0, -1) : \$pattern.'.*';

        return \$pattern;
    }
}
", "vendor/symfony/validator/Constraints/Regex.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Regex.php");
    }
}
