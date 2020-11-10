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

/* vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php */
class __TwigTemplate_e719186099788d4d9283230fe8485e8fb7e2ed3a463aa33f31ef68b993c7c5ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php"));

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

use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the script bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class ScriptDataGenerator extends AbstractDataGenerator
{
    private static \$blacklist = [
        'Zzzz' => true, // Unknown Script
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$scriptCodes = [];

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/lang');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/lang', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->scriptCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Scripts']) && null !== \$localeBundle['Scripts']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => array_diff_key(iterator_to_array(\$localeBundle['Scripts']), self::\$blacklist),
            ];

            \$this->scriptCodes = array_merge(\$this->scriptCodes, array_keys(\$data['Names']));

            return \$data;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir)
    {
        \$rootBundle = \$reader->read(\$tempDir, 'root');

        \$this->scriptCodes = array_unique(\$this->scriptCodes);

        sort(\$this->scriptCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Scripts' => \$this->scriptCodes,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php";
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

use Symfony\\Component\\Intl\\Data\\Bundle\\Compiler\\BundleCompilerInterface;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface;
use Symfony\\Component\\Intl\\Data\\Util\\LocaleScanner;

/**
 * The rule for compiling the script bundle.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class ScriptDataGenerator extends AbstractDataGenerator
{
    private static \$blacklist = [
        'Zzzz' => true, // Unknown Script
    ];

    /**
     * Collects all available language codes.
     *
     * @var string[]
     */
    private \$scriptCodes = [];

    /**
     * {@inheritdoc}
     */
    protected function scanLocales(LocaleScanner \$scanner, \$sourceDir)
    {
        return \$scanner->scanLocales(\$sourceDir.'/lang');
    }

    /**
     * {@inheritdoc}
     */
    protected function compileTemporaryBundles(BundleCompilerInterface \$compiler, \$sourceDir, \$tempDir)
    {
        \$compiler->compile(\$sourceDir.'/lang', \$tempDir);
    }

    /**
     * {@inheritdoc}
     */
    protected function preGenerate()
    {
        \$this->scriptCodes = [];
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForLocale(BundleEntryReaderInterface \$reader, \$tempDir, \$displayLocale)
    {
        \$localeBundle = \$reader->read(\$tempDir, \$displayLocale);

        // isset() on \\ResourceBundle returns true even if the value is null
        if (isset(\$localeBundle['Scripts']) && null !== \$localeBundle['Scripts']) {
            \$data = [
                'Version' => \$localeBundle['Version'],
                'Names' => array_diff_key(iterator_to_array(\$localeBundle['Scripts']), self::\$blacklist),
            ];

            \$this->scriptCodes = array_merge(\$this->scriptCodes, array_keys(\$data['Names']));

            return \$data;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForRoot(BundleEntryReaderInterface \$reader, \$tempDir)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function generateDataForMeta(BundleEntryReaderInterface \$reader, \$tempDir)
    {
        \$rootBundle = \$reader->read(\$tempDir, 'root');

        \$this->scriptCodes = array_unique(\$this->scriptCodes);

        sort(\$this->scriptCodes);

        return [
            'Version' => \$rootBundle['Version'],
            'Scripts' => \$this->scriptCodes,
        ];
    }
}
", "vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Generator/ScriptDataGenerator.php");
    }
}
