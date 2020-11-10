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

/* vendor/symfony/css-selector/Parser/Reader.php */
class __TwigTemplate_28503bad78ce4e63a3dd2d930e59c7f713e22958f89fb2f74f3b2162a9ce7f2d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Reader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Reader.php"));

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
 * CSS selector reader.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Reader
{
    private \$source;
    private \$length;
    private \$position = 0;

    public function __construct(string \$source)
    {
        \$this->source = \$source;
        \$this->length = \\strlen(\$source);
    }

    public function isEOF(): bool
    {
        return \$this->position >= \$this->length;
    }

    public function getPosition(): int
    {
        return \$this->position;
    }

    public function getRemainingLength(): int
    {
        return \$this->length - \$this->position;
    }

    public function getSubstring(int \$length, int \$offset = 0): string
    {
        return substr(\$this->source, \$this->position + \$offset, \$length);
    }

    public function getOffset(string \$string)
    {
        \$position = strpos(\$this->source, \$string, \$this->position);

        return false === \$position ? false : \$position - \$this->position;
    }

    /**
     * @return array|false
     */
    public function findPattern(string \$pattern)
    {
        \$source = substr(\$this->source, \$this->position);

        if (preg_match(\$pattern, \$source, \$matches)) {
            return \$matches;
        }

        return false;
    }

    public function moveForward(int \$length)
    {
        \$this->position += \$length;
    }

    public function moveToEnd()
    {
        \$this->position = \$this->length;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Reader.php";
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
 * CSS selector reader.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Reader
{
    private \$source;
    private \$length;
    private \$position = 0;

    public function __construct(string \$source)
    {
        \$this->source = \$source;
        \$this->length = \\strlen(\$source);
    }

    public function isEOF(): bool
    {
        return \$this->position >= \$this->length;
    }

    public function getPosition(): int
    {
        return \$this->position;
    }

    public function getRemainingLength(): int
    {
        return \$this->length - \$this->position;
    }

    public function getSubstring(int \$length, int \$offset = 0): string
    {
        return substr(\$this->source, \$this->position + \$offset, \$length);
    }

    public function getOffset(string \$string)
    {
        \$position = strpos(\$this->source, \$string, \$this->position);

        return false === \$position ? false : \$position - \$this->position;
    }

    /**
     * @return array|false
     */
    public function findPattern(string \$pattern)
    {
        \$source = substr(\$this->source, \$this->position);

        if (preg_match(\$pattern, \$source, \$matches)) {
            return \$matches;
        }

        return false;
    }

    public function moveForward(int \$length)
    {
        \$this->position += \$length;
    }

    public function moveToEnd()
    {
        \$this->position = \$this->length;
    }
}
", "vendor/symfony/css-selector/Parser/Reader.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Reader.php");
    }
}
