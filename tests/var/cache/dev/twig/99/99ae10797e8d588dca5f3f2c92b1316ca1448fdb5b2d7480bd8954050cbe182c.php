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

/* vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php */
class __TwigTemplate_de5a737017064900e082e86f9887c15d042e35c3f9dd95d7d1f13a5401057ca3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php"));

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

use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * Reads .php resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class PhpBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        \$fileName = \$path.'/'.\$locale.'.php';

        // prevent directory traversal attacks
        if (\\dirname(\$fileName) !== \$path) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s\" does not exist.', \$fileName));
        }

        if (!file_exists(\$fileName)) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s/%s.php\" does not exist.', \$path, \$locale));
        }

        if (!is_file(\$fileName)) {
            throw new RuntimeException(sprintf('The resource bundle \"%s/%s.php\" is not a file.', \$path, \$locale));
        }

        return include \$fileName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php";
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

use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;
use Symfony\\Component\\Intl\\Exception\\RuntimeException;

/**
 * Reads .php resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class PhpBundleReader implements BundleReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function read(\$path, \$locale)
    {
        \$fileName = \$path.'/'.\$locale.'.php';

        // prevent directory traversal attacks
        if (\\dirname(\$fileName) !== \$path) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s\" does not exist.', \$fileName));
        }

        if (!file_exists(\$fileName)) {
            throw new ResourceBundleNotFoundException(sprintf('The resource bundle \"%s/%s.php\" does not exist.', \$path, \$locale));
        }

        if (!is_file(\$fileName)) {
            throw new RuntimeException(sprintf('The resource bundle \"%s/%s.php\" is not a file.', \$path, \$locale));
        }

        return include \$fileName;
    }
}
", "vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Bundle/Reader/PhpBundleReader.php");
    }
}
