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

/* vendor/symfony/translation/Dumper/YamlFileDumper.php */
class __TwigTemplate_70ea70739c3e9043f735120dd6542a1259134aad4343c14ffa02fedb22355b38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/YamlFileDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/YamlFileDumper.php"));

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

use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\Util\\ArrayConverter;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YamlFileDumper generates yaml files from a message catalogue.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class YamlFileDumper extends FileDumper
{
    private \$extension;

    public function __construct(string \$extension = 'yml')
    {
        \$this->extension = \$extension;
    }

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        if (!class_exists('Symfony\\Component\\Yaml\\Yaml')) {
            throw new LogicException('Dumping translations in the YAML format requires the Symfony Yaml component.');
        }

        \$data = \$messages->all(\$domain);

        if (isset(\$options['as_tree']) && \$options['as_tree']) {
            \$data = ArrayConverter::expandToTree(\$data);
        }

        if (isset(\$options['inline']) && (\$inline = (int) \$options['inline']) > 0) {
            return Yaml::dump(\$data, \$inline);
        }

        return Yaml::dump(\$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return \$this->extension;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/YamlFileDumper.php";
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

use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\Util\\ArrayConverter;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YamlFileDumper generates yaml files from a message catalogue.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class YamlFileDumper extends FileDumper
{
    private \$extension;

    public function __construct(string \$extension = 'yml')
    {
        \$this->extension = \$extension;
    }

    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        if (!class_exists('Symfony\\Component\\Yaml\\Yaml')) {
            throw new LogicException('Dumping translations in the YAML format requires the Symfony Yaml component.');
        }

        \$data = \$messages->all(\$domain);

        if (isset(\$options['as_tree']) && \$options['as_tree']) {
            \$data = ArrayConverter::expandToTree(\$data);
        }

        if (isset(\$options['inline']) && (\$inline = (int) \$options['inline']) > 0) {
            return Yaml::dump(\$data, \$inline);
        }

        return Yaml::dump(\$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return \$this->extension;
    }
}
", "vendor/symfony/translation/Dumper/YamlFileDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/YamlFileDumper.php");
    }
}
