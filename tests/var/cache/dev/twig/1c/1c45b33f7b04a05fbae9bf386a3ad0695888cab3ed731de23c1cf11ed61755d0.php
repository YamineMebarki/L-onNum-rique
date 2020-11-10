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

/* vendor/symfony/console/Input/StringInput.php */
class __TwigTemplate_408d78825fad1557d93f2c9169a2068959b086b0077823a32d752edb793847ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/StringInput.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Input/StringInput.php"));

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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * StringInput represents an input provided as a string.
 *
 * Usage:
 *
 *     \$input = new StringInput('foo --bar=\"foobar\"');
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringInput extends ArgvInput
{
    const REGEX_STRING = '([^\\s]+?)(?:\\s|(?<!\\\\\\\\)\"|(?<!\\\\\\\\)\\'|\$)';
    const REGEX_QUOTED_STRING = '(?:\"([^\"\\\\\\\\]*(?:\\\\\\\\.[^\"\\\\\\\\]*)*)\"|\\'([^\\'\\\\\\\\]*(?:\\\\\\\\.[^\\'\\\\\\\\]*)*)\\')';

    /**
     * @param string \$input A string representing the parameters from the CLI
     */
    public function __construct(string \$input)
    {
        parent::__construct([]);

        \$this->setTokens(\$this->tokenize(\$input));
    }

    /**
     * Tokenizes a string.
     *
     * @param string \$input The input to tokenize
     *
     * @return array An array of tokens
     *
     * @throws InvalidArgumentException When unable to parse input (should never happen)
     */
    private function tokenize(\$input)
    {
        \$tokens = [];
        \$length = \\strlen(\$input);
        \$cursor = 0;
        while (\$cursor < \$length) {
            if (preg_match('/\\s+/A', \$input, \$match, null, \$cursor)) {
            } elseif (preg_match('/([^=\"\\'\\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = \$match[1].\$match[2].stripcslashes(str_replace(['\"\\'', '\\'\"', '\\'\\'', '\"\"'], '', substr(\$match[3], 1, \\strlen(\$match[3]) - 2)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(substr(\$match[0], 1, \\strlen(\$match[0]) - 2));
            } elseif (preg_match('/'.self::REGEX_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(\$match[1]);
            } else {
                // should never happen
                throw new InvalidArgumentException(sprintf('Unable to parse input near \"... %s ...\"', substr(\$input, \$cursor, 10)));
            }

            \$cursor += \\strlen(\$match[0]);
        }

        return \$tokens;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Input/StringInput.php";
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

namespace Symfony\\Component\\Console\\Input;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * StringInput represents an input provided as a string.
 *
 * Usage:
 *
 *     \$input = new StringInput('foo --bar=\"foobar\"');
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringInput extends ArgvInput
{
    const REGEX_STRING = '([^\\s]+?)(?:\\s|(?<!\\\\\\\\)\"|(?<!\\\\\\\\)\\'|\$)';
    const REGEX_QUOTED_STRING = '(?:\"([^\"\\\\\\\\]*(?:\\\\\\\\.[^\"\\\\\\\\]*)*)\"|\\'([^\\'\\\\\\\\]*(?:\\\\\\\\.[^\\'\\\\\\\\]*)*)\\')';

    /**
     * @param string \$input A string representing the parameters from the CLI
     */
    public function __construct(string \$input)
    {
        parent::__construct([]);

        \$this->setTokens(\$this->tokenize(\$input));
    }

    /**
     * Tokenizes a string.
     *
     * @param string \$input The input to tokenize
     *
     * @return array An array of tokens
     *
     * @throws InvalidArgumentException When unable to parse input (should never happen)
     */
    private function tokenize(\$input)
    {
        \$tokens = [];
        \$length = \\strlen(\$input);
        \$cursor = 0;
        while (\$cursor < \$length) {
            if (preg_match('/\\s+/A', \$input, \$match, null, \$cursor)) {
            } elseif (preg_match('/([^=\"\\'\\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = \$match[1].\$match[2].stripcslashes(str_replace(['\"\\'', '\\'\"', '\\'\\'', '\"\"'], '', substr(\$match[3], 1, \\strlen(\$match[3]) - 2)));
            } elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(substr(\$match[0], 1, \\strlen(\$match[0]) - 2));
            } elseif (preg_match('/'.self::REGEX_STRING.'/A', \$input, \$match, null, \$cursor)) {
                \$tokens[] = stripcslashes(\$match[1]);
            } else {
                // should never happen
                throw new InvalidArgumentException(sprintf('Unable to parse input near \"... %s ...\"', substr(\$input, \$cursor, 10)));
            }

            \$cursor += \\strlen(\$match[0]);
        }

        return \$tokens;
    }
}
", "vendor/symfony/console/Input/StringInput.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Input/StringInput.php");
    }
}
