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

/* vendor/symfony/translation/Dumper/IcuResFileDumper.php */
class __TwigTemplate_a73948b85f68f756f11666daa1e22e2f3ebfdf35edd57c455995d53cb1621980 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/IcuResFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/IcuResFileDumper.php"));

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
 * IcuResDumper generates an ICU ResourceBundle formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class IcuResFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    protected \$relativePathTemplate = '%domain%/%locale%.%extension%';

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$data = \$indexes = \$resources = '';

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$indexes .= pack('v', \\strlen(\$data) + 28);
            \$data .= \$source.\"\\0\";
        }

        \$data .= \$this->writePadding(\$data);

        \$keyTop = \$this->getPosition(\$data);

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$resources .= pack('V', \$this->getPosition(\$data));

            \$data .= pack('V', \\strlen(\$target))
                .mb_convert_encoding(\$target.\"\\0\", 'UTF-16LE', 'UTF-8')
                .\$this->writePadding(\$data)
                  ;
        }

        \$resOffset = \$this->getPosition(\$data);

        \$data .= pack('v', \\count(\$messages->all(\$domain)))
            .\$indexes
            .\$this->writePadding(\$data)
            .\$resources
              ;

        \$bundleTop = \$this->getPosition(\$data);

        \$root = pack('V7',
            \$resOffset + (2 << 28), // Resource Offset + Resource Type
            6,                      // Index length
            \$keyTop,                        // Index keys top
            \$bundleTop,                     // Index resources top
            \$bundleTop,                     // Index bundle top
            \\count(\$messages->all(\$domain)), // Index max table length
            0                               // Index attributes
        );

        \$header = pack('vC2v4C12@32',
            32,                     // Header size
            0xDA, 0x27,             // Magic number 1 and 2
            20, 0, 0, 2,            // Rest of the header, ..., Size of a char
            0x52, 0x65, 0x73, 0x42, // Data format identifier
            1, 2, 0, 0,             // Data version
            1, 4, 0, 0              // Unicode version
        );

        return \$header.\$root.\$data;
    }

    private function writePadding(\$data)
    {
        \$padding = \\strlen(\$data) % 4;

        return \$padding ? str_repeat(\"\\xAA\", 4 - \$padding) : null;
    }

    private function getPosition(\$data)
    {
        return (\\strlen(\$data) + 28) / 4;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'res';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/IcuResFileDumper.php";
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
 * IcuResDumper generates an ICU ResourceBundle formatted string representation of a message catalogue.
 *
 * @author Stealth35
 */
class IcuResFileDumper extends FileDumper
{
    /**
     * {@inheritdoc}
     */
    protected \$relativePathTemplate = '%domain%/%locale%.%extension%';

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        \$data = \$indexes = \$resources = '';

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$indexes .= pack('v', \\strlen(\$data) + 28);
            \$data .= \$source.\"\\0\";
        }

        \$data .= \$this->writePadding(\$data);

        \$keyTop = \$this->getPosition(\$data);

        foreach (\$messages->all(\$domain) as \$source => \$target) {
            \$resources .= pack('V', \$this->getPosition(\$data));

            \$data .= pack('V', \\strlen(\$target))
                .mb_convert_encoding(\$target.\"\\0\", 'UTF-16LE', 'UTF-8')
                .\$this->writePadding(\$data)
                  ;
        }

        \$resOffset = \$this->getPosition(\$data);

        \$data .= pack('v', \\count(\$messages->all(\$domain)))
            .\$indexes
            .\$this->writePadding(\$data)
            .\$resources
              ;

        \$bundleTop = \$this->getPosition(\$data);

        \$root = pack('V7',
            \$resOffset + (2 << 28), // Resource Offset + Resource Type
            6,                      // Index length
            \$keyTop,                        // Index keys top
            \$bundleTop,                     // Index resources top
            \$bundleTop,                     // Index bundle top
            \\count(\$messages->all(\$domain)), // Index max table length
            0                               // Index attributes
        );

        \$header = pack('vC2v4C12@32',
            32,                     // Header size
            0xDA, 0x27,             // Magic number 1 and 2
            20, 0, 0, 2,            // Rest of the header, ..., Size of a char
            0x52, 0x65, 0x73, 0x42, // Data format identifier
            1, 2, 0, 0,             // Data version
            1, 4, 0, 0              // Unicode version
        );

        return \$header.\$root.\$data;
    }

    private function writePadding(\$data)
    {
        \$padding = \\strlen(\$data) % 4;

        return \$padding ? str_repeat(\"\\xAA\", 4 - \$padding) : null;
    }

    private function getPosition(\$data)
    {
        return (\\strlen(\$data) + 28) / 4;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'res';
    }
}
", "vendor/symfony/translation/Dumper/IcuResFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/IcuResFileDumper.php");
    }
}
