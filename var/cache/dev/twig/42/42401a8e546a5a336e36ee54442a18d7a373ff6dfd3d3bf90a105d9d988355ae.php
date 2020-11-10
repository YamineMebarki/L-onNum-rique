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

/* vendor/fzaninotto/faker/src/Faker/Provider/Text.php */
class __TwigTemplate_a3f624c31eb05f6a3ce13499c2e8d1186e6c49e2d3e24ba771f6273bc54c6fb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Text.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Text.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

abstract class Text extends Base
{
    protected static \$baseText = '';
    protected static \$separator = ' ';
    protected static \$separatorLen = 1;
    protected \$explodedText;
    protected \$consecutiveWords = array();
    protected static \$textStartsWithUppercase = true;

    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * Depending on the \$maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     * @param integer \$maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param integer \$indexSize  Determines how many words are considered for the generation of the next word.
     *                             The minimum is 1, and it produces the higher level of randomness, although the
     *                             generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                             produce more correct text, at the price of less randomness.
     * @return string
     */
    public function realText(\$maxNbChars = 200, \$indexSize = 2)
    {
        if (\$maxNbChars < 10) {
            throw new \\InvalidArgumentException('maxNbChars must be at least 10');
        }

        if (\$indexSize < 1) {
            throw new \\InvalidArgumentException('indexSize must be at least 1');
        }

        if (\$indexSize > 5) {
            throw new \\InvalidArgumentException('indexSize must be at most 5');
        }

        \$words = \$this->getConsecutiveWords(\$indexSize);
        \$result = array();
        \$resultLength = 0;
        // take a random starting point
        \$next = static::randomKey(\$words);
        while (\$resultLength < \$maxNbChars && isset(\$words[\$next])) {
            // fetch a random word to append
            \$word = static::randomElement(\$words[\$next]);

            // calculate next index
            \$currentWords = static::explode(\$next);
            \$currentWords[] = \$word;
            array_shift(\$currentWords);
            \$next = static::implode(\$currentWords);

            // ensure text starts with an uppercase letter
            if (\$resultLength == 0 && !static::validStart(\$word)) {
                continue;
            }

            // append the element
            \$result[] = \$word;
            \$resultLength += static::strlen(\$word) + static::\$separatorLen;
        }

        // remove the element that caused the text to overflow
        array_pop(\$result);

        // build result
        \$result = static::implode(\$result);

        return static::appendEnd(\$result);
    }

    protected function getConsecutiveWords(\$indexSize)
    {
        if (!isset(\$this->consecutiveWords[\$indexSize])) {
            \$parts = \$this->getExplodedText();
            \$words = array();
            \$index = array();
            for (\$i = 0; \$i < \$indexSize; \$i++) {
                \$index[] = array_shift(\$parts);
            }

            for (\$i = 0, \$count = count(\$parts); \$i < \$count; \$i++) {
                \$stringIndex = static::implode(\$index);
                if (!isset(\$words[\$stringIndex])) {
                    \$words[\$stringIndex] = array();
                }
                \$word = \$parts[\$i];
                \$words[\$stringIndex][] = \$word;
                array_shift(\$index);
                \$index[] = \$word;
            }
            // cache look up words for performance
            \$this->consecutiveWords[\$indexSize] = \$words;
        }

        return \$this->consecutiveWords[\$indexSize];
    }

    protected function getExplodedText()
    {
        if (\$this->explodedText === null) {
            \$this->explodedText = static::explode(preg_replace('/\\s+/u', ' ', static::\$baseText));
        }

        return \$this->explodedText;
    }

    protected static function explode(\$text)
    {
        return explode(static::\$separator, \$text);
    }

    protected static function implode(\$words)
    {
        return implode(static::\$separator, \$words);
    }

    protected static function strlen(\$text)
    {
        return function_exists('mb_strlen') ? mb_strlen(\$text, 'UTF-8') : strlen(\$text);
    }

    protected static function validStart(\$word)
    {
        \$isValid = true;
        if (static::\$textStartsWithUppercase) {
            \$isValid = preg_match('/^\\p{Lu}/u', \$word);
        }
        return \$isValid;
    }

    protected static function appendEnd(\$text)
    {
        return preg_replace(\"/([ ,-:;\\x{2013}\\x{2014}]+\$)/us\", '', \$text).'.';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Text.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

abstract class Text extends Base
{
    protected static \$baseText = '';
    protected static \$separator = ' ';
    protected static \$separatorLen = 1;
    protected \$explodedText;
    protected \$consecutiveWords = array();
    protected static \$textStartsWithUppercase = true;

    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * Depending on the \$maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     * @param integer \$maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param integer \$indexSize  Determines how many words are considered for the generation of the next word.
     *                             The minimum is 1, and it produces the higher level of randomness, although the
     *                             generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                             produce more correct text, at the price of less randomness.
     * @return string
     */
    public function realText(\$maxNbChars = 200, \$indexSize = 2)
    {
        if (\$maxNbChars < 10) {
            throw new \\InvalidArgumentException('maxNbChars must be at least 10');
        }

        if (\$indexSize < 1) {
            throw new \\InvalidArgumentException('indexSize must be at least 1');
        }

        if (\$indexSize > 5) {
            throw new \\InvalidArgumentException('indexSize must be at most 5');
        }

        \$words = \$this->getConsecutiveWords(\$indexSize);
        \$result = array();
        \$resultLength = 0;
        // take a random starting point
        \$next = static::randomKey(\$words);
        while (\$resultLength < \$maxNbChars && isset(\$words[\$next])) {
            // fetch a random word to append
            \$word = static::randomElement(\$words[\$next]);

            // calculate next index
            \$currentWords = static::explode(\$next);
            \$currentWords[] = \$word;
            array_shift(\$currentWords);
            \$next = static::implode(\$currentWords);

            // ensure text starts with an uppercase letter
            if (\$resultLength == 0 && !static::validStart(\$word)) {
                continue;
            }

            // append the element
            \$result[] = \$word;
            \$resultLength += static::strlen(\$word) + static::\$separatorLen;
        }

        // remove the element that caused the text to overflow
        array_pop(\$result);

        // build result
        \$result = static::implode(\$result);

        return static::appendEnd(\$result);
    }

    protected function getConsecutiveWords(\$indexSize)
    {
        if (!isset(\$this->consecutiveWords[\$indexSize])) {
            \$parts = \$this->getExplodedText();
            \$words = array();
            \$index = array();
            for (\$i = 0; \$i < \$indexSize; \$i++) {
                \$index[] = array_shift(\$parts);
            }

            for (\$i = 0, \$count = count(\$parts); \$i < \$count; \$i++) {
                \$stringIndex = static::implode(\$index);
                if (!isset(\$words[\$stringIndex])) {
                    \$words[\$stringIndex] = array();
                }
                \$word = \$parts[\$i];
                \$words[\$stringIndex][] = \$word;
                array_shift(\$index);
                \$index[] = \$word;
            }
            // cache look up words for performance
            \$this->consecutiveWords[\$indexSize] = \$words;
        }

        return \$this->consecutiveWords[\$indexSize];
    }

    protected function getExplodedText()
    {
        if (\$this->explodedText === null) {
            \$this->explodedText = static::explode(preg_replace('/\\s+/u', ' ', static::\$baseText));
        }

        return \$this->explodedText;
    }

    protected static function explode(\$text)
    {
        return explode(static::\$separator, \$text);
    }

    protected static function implode(\$words)
    {
        return implode(static::\$separator, \$words);
    }

    protected static function strlen(\$text)
    {
        return function_exists('mb_strlen') ? mb_strlen(\$text, 'UTF-8') : strlen(\$text);
    }

    protected static function validStart(\$word)
    {
        \$isValid = true;
        if (static::\$textStartsWithUppercase) {
            \$isValid = preg_match('/^\\p{Lu}/u', \$word);
        }
        return \$isValid;
    }

    protected static function appendEnd(\$text)
    {
        return preg_replace(\"/([ ,-:;\\x{2013}\\x{2014}]+\$)/us\", '', \$text).'.';
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Text.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Text.php");
    }
}
