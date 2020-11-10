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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php */
class __TwigTemplate_c9a622d9e739b50b73d171a5772baffa195d7108a9a2b48c3c0befbb9c53161d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php"));

        // line 1
        echo "<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Jan Schneider <jan@horde.org>
 * @copyright 2017 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;

use phpDocumentor\\Reflection\\DocBlock\\Tag;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;

class AlignFormatter implements Formatter
{
    /** @var int The maximum tag name length. */
    protected \$maxLen = 0;

    /**
     * Constructor.
     *
     * @param Tag[] \$tags All tags that should later be aligned with the formatter.
     */
    public function __construct(array \$tags)
    {
        foreach (\$tags as \$tag) {
            \$this->maxLen = max(\$this->maxLen, strlen(\$tag->getName()));
        }
    }

    /**
     * Formats the given tag to return a simple plain text version.
     *
     * @param Tag \$tag
     *
     * @return string
     */
    public function format(Tag \$tag)
    {
        return '@' . \$tag->getName() . str_repeat(' ', \$this->maxLen - strlen(\$tag->getName()) + 1) . (string)\$tag;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Jan Schneider <jan@horde.org>
 * @copyright 2017 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;

use phpDocumentor\\Reflection\\DocBlock\\Tag;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;

class AlignFormatter implements Formatter
{
    /** @var int The maximum tag name length. */
    protected \$maxLen = 0;

    /**
     * Constructor.
     *
     * @param Tag[] \$tags All tags that should later be aligned with the formatter.
     */
    public function __construct(array \$tags)
    {
        foreach (\$tags as \$tag) {
            \$this->maxLen = max(\$this->maxLen, strlen(\$tag->getName()));
        }
    }

    /**
     * Formats the given tag to return a simple plain text version.
     *
     * @param Tag \$tag
     *
     * @return string
     */
    public function format(Tag \$tag)
    {
        return '@' . \$tag->getName() . str_repeat(' ', \$this->maxLen - strlen(\$tag->getName()) + 1) . (string)\$tag;
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Formatter/AlignFormatter.php");
    }
}
