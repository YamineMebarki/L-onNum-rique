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

/* vendor/symfony/finder/SplFileInfo.php */
class __TwigTemplate_5cee51e20b15906edaa8b1aa6aaa5d03feb4fe040cef698fc48d38082c4c11fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/SplFileInfo.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/SplFileInfo.php"));

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

namespace Symfony\\Component\\Finder;

/**
 * Extends \\SplFileInfo to support relative paths.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SplFileInfo extends \\SplFileInfo
{
    private \$relativePath;
    private \$relativePathname;

    /**
     * @param string \$file             The file name
     * @param string \$relativePath     The relative path
     * @param string \$relativePathname The relative path name
     */
    public function __construct(string \$file, string \$relativePath, string \$relativePathname)
    {
        parent::__construct(\$file);
        \$this->relativePath = \$relativePath;
        \$this->relativePathname = \$relativePathname;
    }

    /**
     * Returns the relative path.
     *
     * This path does not contain the file name.
     *
     * @return string the relative path
     */
    public function getRelativePath()
    {
        return \$this->relativePath;
    }

    /**
     * Returns the relative path name.
     *
     * This path contains the file name.
     *
     * @return string the relative path name
     */
    public function getRelativePathname()
    {
        return \$this->relativePathname;
    }

    public function getFilenameWithoutExtension(): string
    {
        \$filename = \$this->getFilename();

        return pathinfo(\$filename, PATHINFO_FILENAME);
    }

    /**
     * Returns the contents of the file.
     *
     * @return string the contents of the file
     *
     * @throws \\RuntimeException
     */
    public function getContents()
    {
        set_error_handler(function (\$type, \$msg) use (&\$error) { \$error = \$msg; });
        \$content = file_get_contents(\$this->getPathname());
        restore_error_handler();
        if (false === \$content) {
            throw new \\RuntimeException(\$error);
        }

        return \$content;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/SplFileInfo.php";
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

namespace Symfony\\Component\\Finder;

/**
 * Extends \\SplFileInfo to support relative paths.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SplFileInfo extends \\SplFileInfo
{
    private \$relativePath;
    private \$relativePathname;

    /**
     * @param string \$file             The file name
     * @param string \$relativePath     The relative path
     * @param string \$relativePathname The relative path name
     */
    public function __construct(string \$file, string \$relativePath, string \$relativePathname)
    {
        parent::__construct(\$file);
        \$this->relativePath = \$relativePath;
        \$this->relativePathname = \$relativePathname;
    }

    /**
     * Returns the relative path.
     *
     * This path does not contain the file name.
     *
     * @return string the relative path
     */
    public function getRelativePath()
    {
        return \$this->relativePath;
    }

    /**
     * Returns the relative path name.
     *
     * This path contains the file name.
     *
     * @return string the relative path name
     */
    public function getRelativePathname()
    {
        return \$this->relativePathname;
    }

    public function getFilenameWithoutExtension(): string
    {
        \$filename = \$this->getFilename();

        return pathinfo(\$filename, PATHINFO_FILENAME);
    }

    /**
     * Returns the contents of the file.
     *
     * @return string the contents of the file
     *
     * @throws \\RuntimeException
     */
    public function getContents()
    {
        set_error_handler(function (\$type, \$msg) use (&\$error) { \$error = \$msg; });
        \$content = file_get_contents(\$this->getPathname());
        restore_error_handler();
        if (false === \$content) {
            throw new \\RuntimeException(\$error);
        }

        return \$content;
    }
}
", "vendor/symfony/finder/SplFileInfo.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/SplFileInfo.php");
    }
}
