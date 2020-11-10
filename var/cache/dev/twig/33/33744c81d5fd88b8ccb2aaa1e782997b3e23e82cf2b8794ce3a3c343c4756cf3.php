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

/* vendor/symfony/twig-bridge/Extension/YamlExtension.php */
class __TwigTemplate_fb4b3d21d639bb903ddfe3dd542a4b2fe3248d2050d64be139450f007606e374 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/YamlExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/YamlExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Yaml\\Dumper as YamlDumper;
use Symfony\\Component\\Yaml\\Yaml;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * Provides integration of the Yaml component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class YamlExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('yaml_encode', [\$this, 'encode']),
            new TwigFilter('yaml_dump', [\$this, 'dump']),
        ];
    }

    public function encode(\$input, \$inline = 0, \$dumpObjects = 0)
    {
        static \$dumper;

        if (null === \$dumper) {
            \$dumper = new YamlDumper();
        }

        if (\\defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) {
            return \$dumper->dump(\$input, \$inline, 0, \$dumpObjects);
        }

        return \$dumper->dump(\$input, \$inline, 0, false, \$dumpObjects);
    }

    public function dump(\$value, \$inline = 0, \$dumpObjects = false)
    {
        if (\\is_resource(\$value)) {
            return '%Resource%';
        }

        if (\\is_array(\$value) || \\is_object(\$value)) {
            return '%'.\\gettype(\$value).'% '.\$this->encode(\$value, \$inline, \$dumpObjects);
        }

        return \$this->encode(\$value, \$inline, \$dumpObjects);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'yaml';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/YamlExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Yaml\\Dumper as YamlDumper;
use Symfony\\Component\\Yaml\\Yaml;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * Provides integration of the Yaml component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class YamlExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('yaml_encode', [\$this, 'encode']),
            new TwigFilter('yaml_dump', [\$this, 'dump']),
        ];
    }

    public function encode(\$input, \$inline = 0, \$dumpObjects = 0)
    {
        static \$dumper;

        if (null === \$dumper) {
            \$dumper = new YamlDumper();
        }

        if (\\defined('Symfony\\Component\\Yaml\\Yaml::DUMP_OBJECT')) {
            return \$dumper->dump(\$input, \$inline, 0, \$dumpObjects);
        }

        return \$dumper->dump(\$input, \$inline, 0, false, \$dumpObjects);
    }

    public function dump(\$value, \$inline = 0, \$dumpObjects = false)
    {
        if (\\is_resource(\$value)) {
            return '%Resource%';
        }

        if (\\is_array(\$value) || \\is_object(\$value)) {
            return '%'.\\gettype(\$value).'% '.\$this->encode(\$value, \$inline, \$dumpObjects);
        }

        return \$this->encode(\$value, \$inline, \$dumpObjects);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'yaml';
    }
}
", "vendor/symfony/twig-bridge/Extension/YamlExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/YamlExtension.php");
    }
}
