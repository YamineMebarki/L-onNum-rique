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

/* vendor/symfony/dependency-injection/Loader/IniFileLoader.php */
class __TwigTemplate_46606bfebd1a7b3e71ae97f3a066ad89308303917f43222be99c3abaf63341fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/IniFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/IniFileLoader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * IniFileLoader loads parameters from INI files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IniFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        \$path = \$this->locator->locate(\$resource);

        \$this->container->fileExists(\$path);

        // first pass to catch parsing errors
        \$result = parse_ini_file(\$path, true);
        if (false === \$result || [] === \$result) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file is not valid.', \$resource));
        }

        // real raw parsing
        \$result = parse_ini_file(\$path, true, INI_SCANNER_RAW);

        if (isset(\$result['parameters']) && \\is_array(\$result['parameters'])) {
            foreach (\$result['parameters'] as \$key => \$value) {
                \$this->container->setParameter(\$key, \$this->phpize(\$value));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'ini' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'ini' === \$type;
    }

    /**
     * Note that the following features are not supported:
     *  * strings with escaped quotes are not supported \"foo\\\"bar\";
     *  * string concatenation (\"foo\" \"bar\").
     */
    private function phpize(\$value)
    {
        // trim on the right as comments removal keep whitespaces
        if (\$value !== \$v = rtrim(\$value)) {
            \$value = '\"\"' === substr_replace(\$v, '', 1, -1) ? substr(\$v, 1, -1) : \$v;
        }
        \$lowercaseValue = strtolower(\$value);

        switch (true) {
            case \\defined(\$value):
                return \\constant(\$value);
            case 'yes' === \$lowercaseValue || 'on' === \$lowercaseValue:
                return true;
            case 'no' === \$lowercaseValue || 'off' === \$lowercaseValue || 'none' === \$lowercaseValue:
                return false;
            case isset(\$value[1]) && (
                (\"'\" === \$value[0] && \"'\" === \$value[\\strlen(\$value) - 1]) ||
                ('\"' === \$value[0] && '\"' === \$value[\\strlen(\$value) - 1])
            ):
                // quoted string
                return substr(\$value, 1, -1);
            default:
                return XmlUtils::phpize(\$value);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/IniFileLoader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\Config\\Util\\XmlUtils;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * IniFileLoader loads parameters from INI files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IniFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        \$path = \$this->locator->locate(\$resource);

        \$this->container->fileExists(\$path);

        // first pass to catch parsing errors
        \$result = parse_ini_file(\$path, true);
        if (false === \$result || [] === \$result) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file is not valid.', \$resource));
        }

        // real raw parsing
        \$result = parse_ini_file(\$path, true, INI_SCANNER_RAW);

        if (isset(\$result['parameters']) && \\is_array(\$result['parameters'])) {
            foreach (\$result['parameters'] as \$key => \$value) {
                \$this->container->setParameter(\$key, \$this->phpize(\$value));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'ini' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'ini' === \$type;
    }

    /**
     * Note that the following features are not supported:
     *  * strings with escaped quotes are not supported \"foo\\\"bar\";
     *  * string concatenation (\"foo\" \"bar\").
     */
    private function phpize(\$value)
    {
        // trim on the right as comments removal keep whitespaces
        if (\$value !== \$v = rtrim(\$value)) {
            \$value = '\"\"' === substr_replace(\$v, '', 1, -1) ? substr(\$v, 1, -1) : \$v;
        }
        \$lowercaseValue = strtolower(\$value);

        switch (true) {
            case \\defined(\$value):
                return \\constant(\$value);
            case 'yes' === \$lowercaseValue || 'on' === \$lowercaseValue:
                return true;
            case 'no' === \$lowercaseValue || 'off' === \$lowercaseValue || 'none' === \$lowercaseValue:
                return false;
            case isset(\$value[1]) && (
                (\"'\" === \$value[0] && \"'\" === \$value[\\strlen(\$value) - 1]) ||
                ('\"' === \$value[0] && '\"' === \$value[\\strlen(\$value) - 1])
            ):
                // quoted string
                return substr(\$value, 1, -1);
            default:
                return XmlUtils::phpize(\$value);
        }
    }
}
", "vendor/symfony/dependency-injection/Loader/IniFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/IniFileLoader.php");
    }
}
