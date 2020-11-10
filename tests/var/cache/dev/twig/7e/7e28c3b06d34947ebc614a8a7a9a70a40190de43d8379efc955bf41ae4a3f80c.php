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

/* vendor/symfony/intl/Data/Generator/FallbackTrait.php */
class __TwigTemplate_4d25322d926e067029149d991cf87156f9955eac07e43eaa444b1d39fbdccf61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/FallbackTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/FallbackTrait.php"));

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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Locale;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @internal
 */
trait FallbackTrait
{
    private \$fallbackCache = [];
    private \$generatingFallback = false;

    /**
     * @param string \$tempDir
     * @param string \$displayLocale
     *
     * @return array|null
     *
     * @see AbstractDataGenerator::generateDataForLocale()
     */
    abstract protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     *
     * @see AbstractDataGenerator::generateDataForRoot()
     */
    abstract protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir);

    private function generateFallbackData(BundleEntryReaderInterface \$reader, string \$tempDir, string \$displayLocale): array
    {
        if (null === \$fallback = Locale::getFallback(\$displayLocale)) {
            return [];
        }

        if (isset(\$this->fallbackCache[\$fallback])) {
            return \$this->fallbackCache[\$fallback];
        }

        \$prevGeneratingFallback = \$this->generatingFallback;
        \$this->generatingFallback = true;

        try {
            \$data = 'root' === \$fallback ? \$this->generateDataForRoot(\$reader, \$tempDir) : \$this->generateDataForLocale(\$reader, \$tempDir, \$fallback);
        } finally {
            \$this->generatingFallback = \$prevGeneratingFallback;
        }

        return \$this->fallbackCache[\$fallback] = \$data ?: [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/FallbackTrait.php";
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

use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Locale;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @internal
 */
trait FallbackTrait
{
    private \$fallbackCache = [];
    private \$generatingFallback = false;

    /**
     * @param string \$tempDir
     * @param string \$displayLocale
     *
     * @return array|null
     *
     * @see AbstractDataGenerator::generateDataForLocale()
     */
    abstract protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale);

    /**
     * @param string \$tempDir
     *
     * @return array|null
     *
     * @see AbstractDataGenerator::generateDataForRoot()
     */
    abstract protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir);

    private function generateFallbackData(BundleEntryReaderInterface \$reader, string \$tempDir, string \$displayLocale): array
    {
        if (null === \$fallback = Locale::getFallback(\$displayLocale)) {
            return [];
        }

        if (isset(\$this->fallbackCache[\$fallback])) {
            return \$this->fallbackCache[\$fallback];
        }

        \$prevGeneratingFallback = \$this->generatingFallback;
        \$this->generatingFallback = true;

        try {
            \$data = 'root' === \$fallback ? \$this->generateDataForRoot(\$reader, \$tempDir) : \$this->generateDataForLocale(\$reader, \$tempDir, \$fallback);
        } finally {
            \$this->generatingFallback = \$prevGeneratingFallback;
        }

        return \$this->fallbackCache[\$fallback] = \$data ?: [];
    }
}
", "vendor/symfony/intl/Data/Generator/FallbackTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/FallbackTrait.php");
    }
}
