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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php */
class __TwigTemplate_1d903c1c7f6ec9968e20371118a95e498617c8b9551a558fbc42e068fb8734d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php"));

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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock;
use phpDocumentor\\Reflection\\DocBlock\\Description;

/**
 * Parses a tag definition for a DocBlock.
 */
abstract class BaseTag implements DocBlock\\Tag
{
    /** @var string Name of the tag */
    protected \$name = '';

    /** @var Description|null Description of the tag. */
    protected \$description;

    /**
     * Gets the name of this tag.
     *
     * @return string The name of this tag.
     */
    public function getName()
    {
        return \$this->name;
    }

    public function getDescription()
    {
        return \$this->description;
    }

    public function render(Formatter \$formatter = null)
    {
        if (\$formatter === null) {
            \$formatter = new Formatter\\PassthroughFormatter();
        }

        return \$formatter->format(\$this);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php";
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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock;
use phpDocumentor\\Reflection\\DocBlock\\Description;

/**
 * Parses a tag definition for a DocBlock.
 */
abstract class BaseTag implements DocBlock\\Tag
{
    /** @var string Name of the tag */
    protected \$name = '';

    /** @var Description|null Description of the tag. */
    protected \$description;

    /**
     * Gets the name of this tag.
     *
     * @return string The name of this tag.
     */
    public function getName()
    {
        return \$this->name;
    }

    public function getDescription()
    {
        return \$this->description;
    }

    public function render(Formatter \$formatter = null)
    {
        if (\$formatter === null) {
            \$formatter = new Formatter\\PassthroughFormatter();
        }

        return \$formatter->format(\$this);
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/BaseTag.php");
    }
}
