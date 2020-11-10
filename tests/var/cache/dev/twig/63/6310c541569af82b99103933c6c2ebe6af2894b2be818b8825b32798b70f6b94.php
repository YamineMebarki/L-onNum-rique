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

/* vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php */
class __TwigTemplate_1c068ae371120bbeb55847c0a7012e1714a6a405f4e5918f474e6f3f64f9591a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Data\\Util\\ArrayAccessibleResourceBundle;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;

/**
 * Reads binary .res resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class IntlBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        // Point for future extension: Modify this class so that it works also
        // if the \\ResourceBundle class is not available.
        try {
            // Never enable fallback. We want to know if a bundle cannot be found
            \$bundle = new \\ResourceBundle(\$locale, \$path, false);
        } catch (\\Exception \$e) {
            \$bundle = null;
        }

        // The bundle is NULL if the path does not look like a resource bundle
        // (i.e. contain a bunch of *.res files)
        if (null === \$bundle) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s/%s.res\" could not be found.', \$path, \$locale));
        }

        // Other possible errors are U_USING_FALLBACK_WARNING and U_ZERO_ERROR,
        // which are OK for us.
        return new ArrayAccessibleResourceBundle(\$bundle);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php";
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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Reader;

use Symfony\\Component\\Intl\\Data\\Util\\ArrayAccessibleResourceBundle;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;

/**
 * Reads binary .res resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class IntlBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        // Point for future extension: Modify this class so that it works also
        // if the \\ResourceBundle class is not available.
        try {
            // Never enable fallback. We want to know if a bundle cannot be found
            \$bundle = new \\ResourceBundle(\$locale, \$path, false);
        } catch (\\Exception \$e) {
            \$bundle = null;
        }

        // The bundle is NULL if the path does not look like a resource bundle
        // (i.e. contain a bunch of *.res files)
        if (null === \$bundle) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s/%s.res\" could not be found.', \$path, \$locale));
        }

        // Other possible errors are U_USING_FALLBACK_WARNING and U_ZERO_ERROR,
        // which are OK for us.
        return new ArrayAccessibleResourceBundle(\$bundle);
    }
}
", "vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Bundle/Reader/IntlBundleReader.php");
    }
}
