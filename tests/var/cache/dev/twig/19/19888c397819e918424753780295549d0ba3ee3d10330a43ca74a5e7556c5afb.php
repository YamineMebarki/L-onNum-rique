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

/* vendor/symfony/validator/Mapping/Loader/FileLoader.php */
class __TwigTemplate_df143708bd71430602fd6ebd082f9eafbfff55f0d6e8d3a1021f6b3988cbe315 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/FileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/FileLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;

/**
 * Base loader for loading validation metadata from a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFileLoader
 * @see XmlFileLoader
 */
abstract class FileLoader extends AbstractLoader
{
    protected \$file;

    /**
     * Creates a new loader.
     *
     * @param string \$file The mapping file to load
     *
     * @throws MappingException If the file does not exist or is not readable
     */
    public function __construct(string \$file)
    {
        if (!is_file(\$file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" does not exist', \$file));
        }

        if (!is_readable(\$file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" is not readable', \$file));
        }

        if (!stream_is_local(\$this->file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" is not a local file', \$file));
        }

        \$this->file = \$file;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/FileLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;

/**
 * Base loader for loading validation metadata from a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFileLoader
 * @see XmlFileLoader
 */
abstract class FileLoader extends AbstractLoader
{
    protected \$file;

    /**
     * Creates a new loader.
     *
     * @param string \$file The mapping file to load
     *
     * @throws MappingException If the file does not exist or is not readable
     */
    public function __construct(string \$file)
    {
        if (!is_file(\$file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" does not exist', \$file));
        }

        if (!is_readable(\$file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" is not readable', \$file));
        }

        if (!stream_is_local(\$this->file)) {
            throw new MappingException(sprintf('The mapping file \"%s\" is not a local file', \$file));
        }

        \$this->file = \$file;
    }
}
", "vendor/symfony/validator/Mapping/Loader/FileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/FileLoader.php");
    }
}
