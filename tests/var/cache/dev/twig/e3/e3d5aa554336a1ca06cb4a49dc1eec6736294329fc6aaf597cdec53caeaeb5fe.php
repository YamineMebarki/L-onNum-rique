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

/* vendor/phpdocumentor/reflection-common/src/Location.php */
class __TwigTemplate_b3d12fddef181daf4b67ff49ffc5292bb01b8dfe41299fb0ce605420fdd9b454 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/src/Location.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/src/Location.php"));

        // line 1
        echo "<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

/**
 * The location where an element occurs within a file.
 */
final class Location
{
    /** @var int */
    private \$lineNumber = 0;

    /** @var int */
    private \$columnNumber = 0;

    /**
     * Initializes the location for an element using its line number in the file and optionally the column number.
     */
    public function __construct(int \$lineNumber, int \$columnNumber = 0)
    {
        \$this->lineNumber = \$lineNumber;
        \$this->columnNumber = \$columnNumber;
    }

    /**
     * Returns the line number that is covered by this location.
     */
    public function getLineNumber(): int
    {
        return \$this->lineNumber;
    }

    /**
     * Returns the column number (character position on a line) for this location object.
     */
    public function getColumnNumber(): int
    {
        return \$this->columnNumber;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/src/Location.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection;

/**
 * The location where an element occurs within a file.
 */
final class Location
{
    /** @var int */
    private \$lineNumber = 0;

    /** @var int */
    private \$columnNumber = 0;

    /**
     * Initializes the location for an element using its line number in the file and optionally the column number.
     */
    public function __construct(int \$lineNumber, int \$columnNumber = 0)
    {
        \$this->lineNumber = \$lineNumber;
        \$this->columnNumber = \$columnNumber;
    }

    /**
     * Returns the line number that is covered by this location.
     */
    public function getLineNumber(): int
    {
        return \$this->lineNumber;
    }

    /**
     * Returns the column number (character position on a line) for this location object.
     */
    public function getColumnNumber(): int
    {
        return \$this->columnNumber;
    }
}
", "vendor/phpdocumentor/reflection-common/src/Location.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/src/Location.php");
    }
}
