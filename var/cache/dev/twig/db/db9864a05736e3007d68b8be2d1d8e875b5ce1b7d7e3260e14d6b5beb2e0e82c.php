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

/* vendor/symfony/intl/Data/Generator/GeneratorConfig.php */
class __TwigTemplate_99abd7e6671a2aded1a673a8f2a1e4813e286cdf6ad5befaceeb3163debe4eac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/GeneratorConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/GeneratorConfig.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\BundleWriterInterface;

/**
 * Stores contextual information for resource bundle generation.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class GeneratorConfig
{
    private \$sourceDir;
    private \$icuVersion;

    /**
     * @var BundleWriterInterface[]
     */
    private \$bundleWriters = [];

    public function __construct(string \$sourceDir, string \$icuVersion)
    {
        \$this->sourceDir = \$sourceDir;
        \$this->icuVersion = \$icuVersion;
    }

    /**
     * Adds a writer to be used during the data conversion.
     *
     * @param string                \$targetDir The output directory
     * @param BundleWriterInterface \$writer    The writer instance
     */
    public function addBundleWriter(\$targetDir, BundleWriterInterface \$writer)
    {
        \$this->bundleWriters[\$targetDir] = \$writer;
    }

    /**
     * Returns the writers indexed by their output directories.
     *
     * @return BundleWriterInterface[]
     */
    public function getBundleWriters()
    {
        return \$this->bundleWriters;
    }

    /**
     * Returns the directory where the source versions of the resource bundles
     * are stored.
     *
     * @return string An absolute path to a directory
     */
    public function getSourceDir()
    {
        return \$this->sourceDir;
    }

    /**
     * Returns the ICU version of the bundles being converted.
     *
     * @return string The ICU version string
     */
    public function getIcuVersion()
    {
        return \$this->icuVersion;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/GeneratorConfig.php";
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

namespace Symfony\\Component\\Intl\\Data\\Generator;

use Symfony\\Component\\Intl\\Data\\Bundle\\Writer\\BundleWriterInterface;

/**
 * Stores contextual information for resource bundle generation.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class GeneratorConfig
{
    private \$sourceDir;
    private \$icuVersion;

    /**
     * @var BundleWriterInterface[]
     */
    private \$bundleWriters = [];

    public function __construct(string \$sourceDir, string \$icuVersion)
    {
        \$this->sourceDir = \$sourceDir;
        \$this->icuVersion = \$icuVersion;
    }

    /**
     * Adds a writer to be used during the data conversion.
     *
     * @param string                \$targetDir The output directory
     * @param BundleWriterInterface \$writer    The writer instance
     */
    public function addBundleWriter(\$targetDir, BundleWriterInterface \$writer)
    {
        \$this->bundleWriters[\$targetDir] = \$writer;
    }

    /**
     * Returns the writers indexed by their output directories.
     *
     * @return BundleWriterInterface[]
     */
    public function getBundleWriters()
    {
        return \$this->bundleWriters;
    }

    /**
     * Returns the directory where the source versions of the resource bundles
     * are stored.
     *
     * @return string An absolute path to a directory
     */
    public function getSourceDir()
    {
        return \$this->sourceDir;
    }

    /**
     * Returns the ICU version of the bundles being converted.
     *
     * @return string The ICU version string
     */
    public function getIcuVersion()
    {
        return \$this->icuVersion;
    }
}
", "vendor/symfony/intl/Data/Generator/GeneratorConfig.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/GeneratorConfig.php");
    }
}
