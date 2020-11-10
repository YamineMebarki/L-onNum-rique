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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php */
class __TwigTemplate_b900528bd71bf090ef1e9c0d7d318eeb95f1ee3f414fcff5a8d75222dca31859 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php"));

        // line 1
        echo "<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\DocBlock\\Tags\\Example;

/**
 * Class used to find an example file's location based on a given ExampleDescriptor.
 */
class ExampleFinder
{
    /** @var string */
    private \$sourceDirectory = '';

    /** @var string[] */
    private \$exampleDirectories = [];

    /**
     * Attempts to find the example contents for the given descriptor.
     *
     * @param Example \$example
     *
     * @return string
     */
    public function find(Example \$example)
    {
        \$filename = \$example->getFilePath();

        \$file = \$this->getExampleFileContents(\$filename);
        if (!\$file) {
            return \"** File not found : {\$filename} **\";
        }

        return implode('', array_slice(\$file, \$example->getStartingLine() - 1, \$example->getLineCount()));
    }

    /**
     * Registers the project's root directory where an 'examples' folder can be expected.
     *
     * @param string \$directory
     *
     * @return void
     */
    public function setSourceDirectory(\$directory = '')
    {
        \$this->sourceDirectory = \$directory;
    }

    /**
     * Returns the project's root directory where an 'examples' folder can be expected.
     *
     * @return string
     */
    public function getSourceDirectory()
    {
        return \$this->sourceDirectory;
    }

    /**
     * Registers a series of directories that may contain examples.
     *
     * @param string[] \$directories
     */
    public function setExampleDirectories(array \$directories)
    {
        \$this->exampleDirectories = \$directories;
    }

    /**
     * Returns a series of directories that may contain examples.
     *
     * @return string[]
     */
    public function getExampleDirectories()
    {
        return \$this->exampleDirectories;
    }

    /**
     * Attempts to find the requested example file and returns its contents or null if no file was found.
     *
     * This method will try several methods in search of the given example file, the first one it encounters is
     * returned:
     *
     * 1. Iterates through all examples folders for the given filename
     * 2. Checks the source folder for the given filename
     * 3. Checks the 'examples' folder in the current working directory for examples
     * 4. Checks the path relative to the current working directory for the given filename
     *
     * @param string \$filename
     *
     * @return string|null
     */
    private function getExampleFileContents(\$filename)
    {
        \$normalizedPath = null;

        foreach (\$this->exampleDirectories as \$directory) {
            \$exampleFileFromConfig = \$this->constructExamplePath(\$directory, \$filename);
            if (is_readable(\$exampleFileFromConfig)) {
                \$normalizedPath = \$exampleFileFromConfig;
                break;
            }
        }

        if (!\$normalizedPath) {
            if (is_readable(\$this->getExamplePathFromSource(\$filename))) {
                \$normalizedPath = \$this->getExamplePathFromSource(\$filename);
            } elseif (is_readable(\$this->getExamplePathFromExampleDirectory(\$filename))) {
                \$normalizedPath = \$this->getExamplePathFromExampleDirectory(\$filename);
            } elseif (is_readable(\$filename)) {
                \$normalizedPath = \$filename;
            }
        }

        return \$normalizedPath && is_readable(\$normalizedPath) ? file(\$normalizedPath) : null;
    }

    /**
     * Get example filepath based on the example directory inside your project.
     *
     * @param string \$file
     *
     * @return string
     */
    private function getExamplePathFromExampleDirectory(\$file)
    {
        return getcwd() . DIRECTORY_SEPARATOR . 'examples' . DIRECTORY_SEPARATOR . \$file;
    }

    /**
     * Returns a path to the example file in the given directory..
     *
     * @param string \$directory
     * @param string \$file
     *
     * @return string
     */
    private function constructExamplePath(\$directory, \$file)
    {
        return rtrim(\$directory, '\\\\/') . DIRECTORY_SEPARATOR . \$file;
    }

    /**
     * Get example filepath based on sourcecode.
     *
     * @param string \$file
     *
     * @return string
     */
    private function getExamplePathFromSource(\$file)
    {
        return sprintf(
            '%s%s%s',
            trim(\$this->getSourceDirectory(), '\\\\/'),
            DIRECTORY_SEPARATOR,
            trim(\$file, '\"')
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\DocBlock\\Tags\\Example;

/**
 * Class used to find an example file's location based on a given ExampleDescriptor.
 */
class ExampleFinder
{
    /** @var string */
    private \$sourceDirectory = '';

    /** @var string[] */
    private \$exampleDirectories = [];

    /**
     * Attempts to find the example contents for the given descriptor.
     *
     * @param Example \$example
     *
     * @return string
     */
    public function find(Example \$example)
    {
        \$filename = \$example->getFilePath();

        \$file = \$this->getExampleFileContents(\$filename);
        if (!\$file) {
            return \"** File not found : {\$filename} **\";
        }

        return implode('', array_slice(\$file, \$example->getStartingLine() - 1, \$example->getLineCount()));
    }

    /**
     * Registers the project's root directory where an 'examples' folder can be expected.
     *
     * @param string \$directory
     *
     * @return void
     */
    public function setSourceDirectory(\$directory = '')
    {
        \$this->sourceDirectory = \$directory;
    }

    /**
     * Returns the project's root directory where an 'examples' folder can be expected.
     *
     * @return string
     */
    public function getSourceDirectory()
    {
        return \$this->sourceDirectory;
    }

    /**
     * Registers a series of directories that may contain examples.
     *
     * @param string[] \$directories
     */
    public function setExampleDirectories(array \$directories)
    {
        \$this->exampleDirectories = \$directories;
    }

    /**
     * Returns a series of directories that may contain examples.
     *
     * @return string[]
     */
    public function getExampleDirectories()
    {
        return \$this->exampleDirectories;
    }

    /**
     * Attempts to find the requested example file and returns its contents or null if no file was found.
     *
     * This method will try several methods in search of the given example file, the first one it encounters is
     * returned:
     *
     * 1. Iterates through all examples folders for the given filename
     * 2. Checks the source folder for the given filename
     * 3. Checks the 'examples' folder in the current working directory for examples
     * 4. Checks the path relative to the current working directory for the given filename
     *
     * @param string \$filename
     *
     * @return string|null
     */
    private function getExampleFileContents(\$filename)
    {
        \$normalizedPath = null;

        foreach (\$this->exampleDirectories as \$directory) {
            \$exampleFileFromConfig = \$this->constructExamplePath(\$directory, \$filename);
            if (is_readable(\$exampleFileFromConfig)) {
                \$normalizedPath = \$exampleFileFromConfig;
                break;
            }
        }

        if (!\$normalizedPath) {
            if (is_readable(\$this->getExamplePathFromSource(\$filename))) {
                \$normalizedPath = \$this->getExamplePathFromSource(\$filename);
            } elseif (is_readable(\$this->getExamplePathFromExampleDirectory(\$filename))) {
                \$normalizedPath = \$this->getExamplePathFromExampleDirectory(\$filename);
            } elseif (is_readable(\$filename)) {
                \$normalizedPath = \$filename;
            }
        }

        return \$normalizedPath && is_readable(\$normalizedPath) ? file(\$normalizedPath) : null;
    }

    /**
     * Get example filepath based on the example directory inside your project.
     *
     * @param string \$file
     *
     * @return string
     */
    private function getExamplePathFromExampleDirectory(\$file)
    {
        return getcwd() . DIRECTORY_SEPARATOR . 'examples' . DIRECTORY_SEPARATOR . \$file;
    }

    /**
     * Returns a path to the example file in the given directory..
     *
     * @param string \$directory
     * @param string \$file
     *
     * @return string
     */
    private function constructExamplePath(\$directory, \$file)
    {
        return rtrim(\$directory, '\\\\/') . DIRECTORY_SEPARATOR . \$file;
    }

    /**
     * Get example filepath based on sourcecode.
     *
     * @param string \$file
     *
     * @return string
     */
    private function getExamplePathFromSource(\$file)
    {
        return sprintf(
            '%s%s%s',
            trim(\$this->getSourceDirectory(), '\\\\/'),
            DIRECTORY_SEPARATOR,
            trim(\$file, '\"')
        );
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/ExampleFinder.php");
    }
}
