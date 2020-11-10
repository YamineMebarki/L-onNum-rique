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

/* vendor/symfony/translation/Loader/YamlFileLoader.php */
class __TwigTemplate_ed858df5109208170c310e508dba7f8e4c69d4183eb3ccbeae53abe8f3a753cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/YamlFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/YamlFileLoader.php"));

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

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Parser as YamlParser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YamlFileLoader loads translations from Yaml files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class YamlFileLoader extends FileLoader
{
    private \$yamlParser;

    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        if (null === \$this->yamlParser) {
            if (!class_exists('Symfony\\Component\\Yaml\\Parser')) {
                throw new LogicException('Loading translations from the YAML format requires the Symfony Yaml component.');
            }

            \$this->yamlParser = new YamlParser();
        }

        try {
            \$messages = \$this->yamlParser->parseFile(\$resource, Yaml::PARSE_CONSTANT);
        } catch (ParseException \$e) {
            throw new InvalidResourceException(sprintf('Error parsing YAML, invalid file \"%s\"', \$resource), 0, \$e);
        }

        if (null !== \$messages && !\\is_array(\$messages)) {
            throw new InvalidResourceException(sprintf('Unable to load file \"%s\".', \$resource));
        }

        return \$messages ?: [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/YamlFileLoader.php";
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

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;
use Symfony\\Component\\Translation\\Exception\\LogicException;
use Symfony\\Component\\Yaml\\Exception\\ParseException;
use Symfony\\Component\\Yaml\\Parser as YamlParser;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * YamlFileLoader loads translations from Yaml files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class YamlFileLoader extends FileLoader
{
    private \$yamlParser;

    /**
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        if (null === \$this->yamlParser) {
            if (!class_exists('Symfony\\Component\\Yaml\\Parser')) {
                throw new LogicException('Loading translations from the YAML format requires the Symfony Yaml component.');
            }

            \$this->yamlParser = new YamlParser();
        }

        try {
            \$messages = \$this->yamlParser->parseFile(\$resource, Yaml::PARSE_CONSTANT);
        } catch (ParseException \$e) {
            throw new InvalidResourceException(sprintf('Error parsing YAML, invalid file \"%s\"', \$resource), 0, \$e);
        }

        if (null !== \$messages && !\\is_array(\$messages)) {
            throw new InvalidResourceException(sprintf('Unable to load file \"%s\".', \$resource));
        }

        return \$messages ?: [];
    }
}
", "vendor/symfony/translation/Loader/YamlFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/YamlFileLoader.php");
    }
}
