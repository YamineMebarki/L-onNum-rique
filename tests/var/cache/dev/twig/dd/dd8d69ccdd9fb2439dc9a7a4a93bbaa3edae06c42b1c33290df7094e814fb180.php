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

/* vendor/symfony/translation/Extractor/AbstractFileExtractor.php */
class __TwigTemplate_88d3e62ad528568af7ac831fdc1661cc62525775fa8e15a7ef78209084b5a16c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Extractor/AbstractFileExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Extractor/AbstractFileExtractor.php"));

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

namespace Symfony\\Component\\Translation\\Extractor;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;

/**
 * Base class used by classes that extract translation messages from files.
 *
 * @author Marcos D. Sánchez <marcosdsanchez@gmail.com>
 */
abstract class AbstractFileExtractor
{
    /**
     * @param string|iterable \$resource Files, a file or a directory
     *
     * @return iterable
     */
    protected function extractFiles(\$resource)
    {
        if (is_iterable(\$resource)) {
            \$files = [];
            foreach (\$resource as \$file) {
                if (\$this->canBeExtracted(\$file)) {
                    \$files[] = \$this->toSplFileInfo(\$file);
                }
            }
        } elseif (is_file(\$resource)) {
            \$files = \$this->canBeExtracted(\$resource) ? [\$this->toSplFileInfo(\$resource)] : [];
        } else {
            \$files = \$this->extractFromDirectory(\$resource);
        }

        return \$files;
    }

    private function toSplFileInfo(string \$file): \\SplFileInfo
    {
        return new \\SplFileInfo(\$file);
    }

    /**
     * @param string \$file
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    protected function isFile(\$file)
    {
        if (!is_file(\$file)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file does not exist.', \$file));
        }

        return true;
    }

    /**
     * @param string \$file
     *
     * @return bool
     */
    abstract protected function canBeExtracted(\$file);

    /**
     * @param string|array \$resource Files, a file or a directory
     *
     * @return iterable files to be extracted
     */
    abstract protected function extractFromDirectory(\$resource);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Extractor/AbstractFileExtractor.php";
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

namespace Symfony\\Component\\Translation\\Extractor;

use Symfony\\Component\\Translation\\Exception\\InvalidArgumentException;

/**
 * Base class used by classes that extract translation messages from files.
 *
 * @author Marcos D. Sánchez <marcosdsanchez@gmail.com>
 */
abstract class AbstractFileExtractor
{
    /**
     * @param string|iterable \$resource Files, a file or a directory
     *
     * @return iterable
     */
    protected function extractFiles(\$resource)
    {
        if (is_iterable(\$resource)) {
            \$files = [];
            foreach (\$resource as \$file) {
                if (\$this->canBeExtracted(\$file)) {
                    \$files[] = \$this->toSplFileInfo(\$file);
                }
            }
        } elseif (is_file(\$resource)) {
            \$files = \$this->canBeExtracted(\$resource) ? [\$this->toSplFileInfo(\$resource)] : [];
        } else {
            \$files = \$this->extractFromDirectory(\$resource);
        }

        return \$files;
    }

    private function toSplFileInfo(string \$file): \\SplFileInfo
    {
        return new \\SplFileInfo(\$file);
    }

    /**
     * @param string \$file
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    protected function isFile(\$file)
    {
        if (!is_file(\$file)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file does not exist.', \$file));
        }

        return true;
    }

    /**
     * @param string \$file
     *
     * @return bool
     */
    abstract protected function canBeExtracted(\$file);

    /**
     * @param string|array \$resource Files, a file or a directory
     *
     * @return iterable files to be extracted
     */
    abstract protected function extractFromDirectory(\$resource);
}
", "vendor/symfony/translation/Extractor/AbstractFileExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Extractor/AbstractFileExtractor.php");
    }
}
