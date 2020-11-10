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

/* vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php */
class __TwigTemplate_c715b88f2e7c66f3df3a8af516006bf52f0dc1e6ae1f6dcf7f99372bbc0b7531 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser\\Shortcut;

use Symfony\\Component\\CssSelector\\Node\\ElementNode;
use Symfony\\Component\\CssSelector\\Node\\SelectorNode;
use Symfony\\Component\\CssSelector\\Parser\\ParserInterface;

/**
 * CSS selector element parser shortcut.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ElementParser implements ParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse(string \$source): array
    {
        // Matches an optional namespace, required element or `*`
        // \$source = 'testns|testel';
        // \$matches = array (size=3)
        //     0 => string 'testns|testel' (length=13)
        //     1 => string 'testns' (length=6)
        //     2 => string 'testel' (length=6)
        if (preg_match('/^(?:([a-z]++)\\|)?([\\w-]++|\\*)\$/i', trim(\$source), \$matches)) {
            return [new SelectorNode(new ElementNode(\$matches[1] ?: null, \$matches[2]))];
        }

        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php";
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

namespace Symfony\\Component\\CssSelector\\Parser\\Shortcut;

use Symfony\\Component\\CssSelector\\Node\\ElementNode;
use Symfony\\Component\\CssSelector\\Node\\SelectorNode;
use Symfony\\Component\\CssSelector\\Parser\\ParserInterface;

/**
 * CSS selector element parser shortcut.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ElementParser implements ParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse(string \$source): array
    {
        // Matches an optional namespace, required element or `*`
        // \$source = 'testns|testel';
        // \$matches = array (size=3)
        //     0 => string 'testns|testel' (length=13)
        //     1 => string 'testns' (length=6)
        //     2 => string 'testel' (length=6)
        if (preg_match('/^(?:([a-z]++)\\|)?([\\w-]++|\\*)\$/i', trim(\$source), \$matches)) {
            return [new SelectorNode(new ElementNode(\$matches[1] ?: null, \$matches[2]))];
        }

        return [];
    }
}
", "vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php");
    }
}
