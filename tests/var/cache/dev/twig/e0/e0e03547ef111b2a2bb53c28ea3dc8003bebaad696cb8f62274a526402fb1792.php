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

/* vendor/symfony/finder/Iterator/FileTypeFilterIterator.php */
class __TwigTemplate_11cc02890f7cf890f864dd9e02f5e3ee6145f9e750c820fee39c2773d8753c8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/FileTypeFilterIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/FileTypeFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * FileTypeFilterIterator only keeps files, directories, or both.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileTypeFilterIterator extends \\FilterIterator
{
    const ONLY_FILES = 1;
    const ONLY_DIRECTORIES = 2;

    private \$mode;

    /**
     * @param \\Iterator \$iterator The Iterator to filter
     * @param int       \$mode     The mode (self::ONLY_FILES or self::ONLY_DIRECTORIES)
     */
    public function __construct(\\Iterator \$iterator, int \$mode)
    {
        \$this->mode = \$mode;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();
        if (self::ONLY_DIRECTORIES === (self::ONLY_DIRECTORIES & \$this->mode) && \$fileinfo->isFile()) {
            return false;
        } elseif (self::ONLY_FILES === (self::ONLY_FILES & \$this->mode) && \$fileinfo->isDir()) {
            return false;
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Iterator/FileTypeFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

/**
 * FileTypeFilterIterator only keeps files, directories, or both.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileTypeFilterIterator extends \\FilterIterator
{
    const ONLY_FILES = 1;
    const ONLY_DIRECTORIES = 2;

    private \$mode;

    /**
     * @param \\Iterator \$iterator The Iterator to filter
     * @param int       \$mode     The mode (self::ONLY_FILES or self::ONLY_DIRECTORIES)
     */
    public function __construct(\\Iterator \$iterator, int \$mode)
    {
        \$this->mode = \$mode;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();
        if (self::ONLY_DIRECTORIES === (self::ONLY_DIRECTORIES & \$this->mode) && \$fileinfo->isFile()) {
            return false;
        } elseif (self::ONLY_FILES === (self::ONLY_FILES & \$this->mode) && \$fileinfo->isDir()) {
            return false;
        }

        return true;
    }
}
", "vendor/symfony/finder/Iterator/FileTypeFilterIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/FileTypeFilterIterator.php");
    }
}
