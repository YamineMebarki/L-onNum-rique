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

/* vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php */
class __TwigTemplate_b76cee93a34557f8300f7997f20f8fd92c3d790468f063ab108d40e298cdb063 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php"));

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

namespace Symfony\\Component\\CssSelector\\XPath\\Extension;

/**
 * XPath expression translator extension interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface ExtensionInterface
{
    /**
     * Returns node translators.
     *
     * These callables will receive the node as first argument and the translator as second argument.
     *
     * @return callable[]
     */
    public function getNodeTranslators();

    /**
     * Returns combination translators.
     *
     * @return callable[]
     */
    public function getCombinationTranslators();

    /**
     * Returns function translators.
     *
     * @return callable[]
     */
    public function getFunctionTranslators();

    /**
     * Returns pseudo-class translators.
     *
     * @return callable[]
     */
    public function getPseudoClassTranslators();

    /**
     * Returns attribute operation translators.
     *
     * @return callable[]
     */
    public function getAttributeMatchingTranslators();

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php";
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

namespace Symfony\\Component\\CssSelector\\XPath\\Extension;

/**
 * XPath expression translator extension interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface ExtensionInterface
{
    /**
     * Returns node translators.
     *
     * These callables will receive the node as first argument and the translator as second argument.
     *
     * @return callable[]
     */
    public function getNodeTranslators();

    /**
     * Returns combination translators.
     *
     * @return callable[]
     */
    public function getCombinationTranslators();

    /**
     * Returns function translators.
     *
     * @return callable[]
     */
    public function getFunctionTranslators();

    /**
     * Returns pseudo-class translators.
     *
     * @return callable[]
     */
    public function getPseudoClassTranslators();

    /**
     * Returns attribute operation translators.
     *
     * @return callable[]
     */
    public function getAttributeMatchingTranslators();

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName();
}
", "vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php");
    }
}
