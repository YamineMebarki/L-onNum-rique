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

/* vendor/symfony/translation/Dumper/CsvFileDumper.php */
class __TwigTemplate_95b3ee4b73b178f50c5e6f6a9c47132220d29bf73482ee9d149242729d73422f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/CsvFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/CsvFileDumper.php"));

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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * CsvFileDumper generates a csv formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class CsvFileDumper extends FileDumper
{
    private \$delimiter = ';';
    private \$enclosure = '\"';

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$handle = fopen('php://memory', 'r+b');

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            fputcsv(\$handle, [\$source, \$target], \$this->delimiter, \$this->enclosure);
        }

        rewind(\$handle);
        \$output = stream_get_contents(\$handle);
        fclose(\$handle);

        return \$output;
    }

    /**
     * Sets the delimiter and escape character for CSV.
     *
     * @param string \$delimiter Delimiter character
     * @param string \$enclosure Enclosure character
     */
    public function setCsvControl(\$delimiter = ';', \$enclosure = '\"')
    {
        \$this->delimiter = \$delimiter;
        \$this->enclosure = \$enclosure;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'csv';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/CsvFileDumper.php";
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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * CsvFileDumper generates a csv formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class CsvFileDumper extends FileDumper
{
    private \$delimiter = ';';
    private \$enclosure = '\"';

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$handle = fopen('php://memory', 'r+b');

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            fputcsv(\$handle, [\$source, \$target], \$this->delimiter, \$this->enclosure);
        }

        rewind(\$handle);
        \$output = stream_get_contents(\$handle);
        fclose(\$handle);

        return \$output;
    }

    /**
     * Sets the delimiter and escape character for CSV.
     *
     * @param string \$delimiter Delimiter character
     * @param string \$enclosure Enclosure character
     */
    public function setCsvControl(\$delimiter = ';', \$enclosure = '\"')
    {
        \$this->delimiter = \$delimiter;
        \$this->enclosure = \$enclosure;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'csv';
    }
}
", "vendor/symfony/translation/Dumper/CsvFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/CsvFileDumper.php");
    }
}
