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

/* vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php */
class __TwigTemplate_311bff0cead1511a1bc26317107c0b6640e3fb59545150e959928e47fa5ae735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class MultiplePcreFilterIterator extends \\FilterIterator
{
    protected \$matchRegexps = [];
    protected \$noMatchRegexps = [];

    /**
     * @param \\Iterator \$iterator        The Iterator to filter
     * @param array     \$matchPatterns   An array of patterns that need to match
     * @param array     \$noMatchPatterns An array of patterns that need to not match
     */
    public function __construct(\\Iterator \$iterator, array \$matchPatterns, array \$noMatchPatterns)
    {
        foreach (\$matchPatterns as \$pattern) {
            \$this->matchRegexps[] = \$this->toRegex(\$pattern);
        }

        foreach (\$noMatchPatterns as \$pattern) {
            \$this->noMatchRegexps[] = \$this->toRegex(\$pattern);
        }

        parent::__construct(\$iterator);
    }

    /**
     * Checks whether the string is accepted by the regex filters.
     *
     * If there is no regexps defined in the class, this method will accept the string.
     * Such case can be handled by child classes before calling the method if they want to
     * apply a different behavior.
     *
     * @param string \$string The string to be matched against filters
     *
     * @return bool
     */
    protected function isAccepted(\$string)
    {
        // should at least not match one rule to exclude
        foreach (\$this->noMatchRegexps as \$regex) {
            if (preg_match(\$regex, \$string)) {
                return false;
            }
        }

        // should at least match one rule
        if (\$this->matchRegexps) {
            foreach (\$this->matchRegexps as \$regex) {
                if (preg_match(\$regex, \$string)) {
                    return true;
                }
            }

            return false;
        }

        // If there is no match rules, the file is accepted
        return true;
    }

    /**
     * Checks whether the string is a regex.
     *
     * @param string \$str
     *
     * @return bool Whether the given string is a regex
     */
    protected function isRegex(\$str)
    {
        if (preg_match('/^(.{3,}?)[imsxuADU]*\$/', \$str, \$m)) {
            \$start = substr(\$m[1], 0, 1);
            \$end = substr(\$m[1], -1);

            if (\$start === \$end) {
                return !preg_match('/[*?[:alnum:] \\\\\\\\]/', \$start);
            }

            foreach ([['{', '}'], ['(', ')'], ['[', ']'], ['<', '>']] as \$delimiters) {
                if (\$start === \$delimiters[0] && \$end === \$delimiters[1]) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Converts string into regexp.
     *
     * @param string \$str Pattern
     *
     * @return string regexp corresponding to a given string
     */
    abstract protected function toRegex(\$str);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * MultiplePcreFilterIterator filters files using patterns (regexps, globs or strings).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class MultiplePcreFilterIterator extends \\FilterIterator
{
    protected \$matchRegexps = [];
    protected \$noMatchRegexps = [];

    /**
     * @param \\Iterator \$iterator        The Iterator to filter
     * @param array     \$matchPatterns   An array of patterns that need to match
     * @param array     \$noMatchPatterns An array of patterns that need to not match
     */
    public function __construct(\\Iterator \$iterator, array \$matchPatterns, array \$noMatchPatterns)
    {
        foreach (\$matchPatterns as \$pattern) {
            \$this->matchRegexps[] = \$this->toRegex(\$pattern);
        }

        foreach (\$noMatchPatterns as \$pattern) {
            \$this->noMatchRegexps[] = \$this->toRegex(\$pattern);
        }

        parent::__construct(\$iterator);
    }

    /**
     * Checks whether the string is accepted by the regex filters.
     *
     * If there is no regexps defined in the class, this method will accept the string.
     * Such case can be handled by child classes before calling the method if they want to
     * apply a different behavior.
     *
     * @param string \$string The string to be matched against filters
     *
     * @return bool
     */
    protected function isAccepted(\$string)
    {
        // should at least not match one rule to exclude
        foreach (\$this->noMatchRegexps as \$regex) {
            if (preg_match(\$regex, \$string)) {
                return false;
            }
        }

        // should at least match one rule
        if (\$this->matchRegexps) {
            foreach (\$this->matchRegexps as \$regex) {
                if (preg_match(\$regex, \$string)) {
                    return true;
                }
            }

            return false;
        }

        // If there is no match rules, the file is accepted
        return true;
    }

    /**
     * Checks whether the string is a regex.
     *
     * @param string \$str
     *
     * @return bool Whether the given string is a regex
     */
    protected function isRegex(\$str)
    {
        if (preg_match('/^(.{3,}?)[imsxuADU]*\$/', \$str, \$m)) {
            \$start = substr(\$m[1], 0, 1);
            \$end = substr(\$m[1], -1);

            if (\$start === \$end) {
                return !preg_match('/[*?[:alnum:] \\\\\\\\]/', \$start);
            }

            foreach ([['{', '}'], ['(', ')'], ['[', ']'], ['<', '>']] as \$delimiters) {
                if (\$start === \$delimiters[0] && \$end === \$delimiters[1]) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Converts string into regexp.
     *
     * @param string \$str Pattern
     *
     * @return string regexp corresponding to a given string
     */
    abstract protected function toRegex(\$str);
}
", "vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php");
    }
}
