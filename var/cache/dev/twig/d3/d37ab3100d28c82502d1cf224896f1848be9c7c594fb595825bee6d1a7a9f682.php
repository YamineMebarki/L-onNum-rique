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

/* vendor/symfony/css-selector/CssSelectorConverter.php */
class __TwigTemplate_34d053a20a1aa0fadf0f2e9c3c8845cca9fe2e445a1029d4ee3d7d5ca9da6011 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/CssSelectorConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/CssSelectorConverter.php"));

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

namespace Symfony\\Component\\CssSelector;

use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser;
use Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension;
use Symfony\\Component\\CssSelector\\XPath\\Translator;

/**
 * CssSelectorConverter is the main entry point of the component and can convert CSS
 * selectors to XPath expressions.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class CssSelectorConverter
{
    private \$translator;

    /**
     * @param bool \$html Whether HTML support should be enabled. Disable it for XML documents
     */
    public function __construct(bool \$html = true)
    {
        \$this->translator = new Translator();

        if (\$html) {
            \$this->translator->registerExtension(new HtmlExtension(\$this->translator));
        }

        \$this->translator
            ->registerParserShortcut(new EmptyStringParser())
            ->registerParserShortcut(new ElementParser())
            ->registerParserShortcut(new ClassParser())
            ->registerParserShortcut(new HashParser())
        ;
    }

    /**
     * Translates a CSS expression to its XPath equivalent.
     *
     * Optionally, a prefix can be added to the resulting XPath
     * expression with the \$prefix parameter.
     *
     * @param string \$cssExpr The CSS expression
     * @param string \$prefix  An optional prefix for the XPath expression
     *
     * @return string
     */
    public function toXPath(\$cssExpr, \$prefix = 'descendant-or-self::')
    {
        return \$this->translator->cssToXPath(\$cssExpr, \$prefix);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/CssSelectorConverter.php";
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

namespace Symfony\\Component\\CssSelector;

use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ClassParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\ElementParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\EmptyStringParser;
use Symfony\\Component\\CssSelector\\Parser\\Shortcut\\HashParser;
use Symfony\\Component\\CssSelector\\XPath\\Extension\\HtmlExtension;
use Symfony\\Component\\CssSelector\\XPath\\Translator;

/**
 * CssSelectorConverter is the main entry point of the component and can convert CSS
 * selectors to XPath expressions.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class CssSelectorConverter
{
    private \$translator;

    /**
     * @param bool \$html Whether HTML support should be enabled. Disable it for XML documents
     */
    public function __construct(bool \$html = true)
    {
        \$this->translator = new Translator();

        if (\$html) {
            \$this->translator->registerExtension(new HtmlExtension(\$this->translator));
        }

        \$this->translator
            ->registerParserShortcut(new EmptyStringParser())
            ->registerParserShortcut(new ElementParser())
            ->registerParserShortcut(new ClassParser())
            ->registerParserShortcut(new HashParser())
        ;
    }

    /**
     * Translates a CSS expression to its XPath equivalent.
     *
     * Optionally, a prefix can be added to the resulting XPath
     * expression with the \$prefix parameter.
     *
     * @param string \$cssExpr The CSS expression
     * @param string \$prefix  An optional prefix for the XPath expression
     *
     * @return string
     */
    public function toXPath(\$cssExpr, \$prefix = 'descendant-or-self::')
    {
        return \$this->translator->cssToXPath(\$cssExpr, \$prefix);
    }
}
", "vendor/symfony/css-selector/CssSelectorConverter.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/CssSelectorConverter.php");
    }
}
