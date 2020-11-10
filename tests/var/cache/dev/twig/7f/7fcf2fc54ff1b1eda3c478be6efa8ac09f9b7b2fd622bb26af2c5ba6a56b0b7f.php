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

/* vendor/symfony/translation/Loader/CsvFileLoader.php */
class __TwigTemplate_bf248f63828d89226a09d3c6d89450c86b59a11c96d44b517fdd1fe8ad5f1076 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/CsvFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/CsvFileLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;

/**
 * CsvFileLoader loads translations from CSV files.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class CsvFileLoader extends FileLoader
{
    private \$delimiter = ';';
    private \$enclosure = '\"';
    private \$escape = '\\\\';

    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$messages = [];

        try {
            \$file = new \\SplFileObject(\$resource, 'rb');
        } catch (\\RuntimeException \$e) {
            throw new NotFoundResourceException(sprintf('Error opening file \"%s\".', \$resource), 0, \$e);
        }

        \$file->setFlags(\\SplFileObject::READ_CSV | \\SplFileObject::SKIP_EMPTY);
        \$file->setCsvControl(\$this->delimiter, \$this->enclosure, \$this->escape);

        foreach (\$file as \$data) {
            if (false === \$data) {
                continue;
            }

            if ('#' !== substr(\$data[0], 0, 1) && isset(\$data[1]) && 2 === \\count(\$data)) {
                \$messages[\$data[0]] = \$data[1];
            }
        }

        return \$messages;
    }

    /**
     * Sets the delimiter, enclosure, and escape character for CSV.
     *
     * @param string \$delimiter Delimiter character
     * @param string \$enclosure Enclosure character
     * @param string \$escape    Escape character
     */
    public function setCsvControl(\$delimiter = ';', \$enclosure = '\"', \$escape = '\\\\')
    {
        \$this->delimiter = \$delimiter;
        \$this->enclosure = \$enclosure;
        \$this->escape = \$escape;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/CsvFileLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\NotFoundResourceException;

/**
 * CsvFileLoader loads translations from CSV files.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class CsvFileLoader extends FileLoader
{
    private \$delimiter = ';';
    private \$enclosure = '\"';
    private \$escape = '\\\\';

    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$messages = [];

        try {
            \$file = new \\SplFileObject(\$resource, 'rb');
        } catch (\\RuntimeException \$e) {
            throw new NotFoundResourceException(sprintf('Error opening file \"%s\".', \$resource), 0, \$e);
        }

        \$file->setFlags(\\SplFileObject::READ_CSV | \\SplFileObject::SKIP_EMPTY);
        \$file->setCsvControl(\$this->delimiter, \$this->enclosure, \$this->escape);

        foreach (\$file as \$data) {
            if (false === \$data) {
                continue;
            }

            if ('#' !== substr(\$data[0], 0, 1) && isset(\$data[1]) && 2 === \\count(\$data)) {
                \$messages[\$data[0]] = \$data[1];
            }
        }

        return \$messages;
    }

    /**
     * Sets the delimiter, enclosure, and escape character for CSV.
     *
     * @param string \$delimiter Delimiter character
     * @param string \$enclosure Enclosure character
     * @param string \$escape    Escape character
     */
    public function setCsvControl(\$delimiter = ';', \$enclosure = '\"', \$escape = '\\\\')
    {
        \$this->delimiter = \$delimiter;
        \$this->enclosure = \$enclosure;
        \$this->escape = \$escape;
    }
}
", "vendor/symfony/translation/Loader/CsvFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/CsvFileLoader.php");
    }
}
