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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php */
class __TwigTemplate_ceb4c395e4139ff475a8ca93352014787532e9ff8197af2c0222a3a81cab14d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Processes bytes as they pass through a buffer and replaces sequences in it.
 *
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilter implements Swift_StreamFilter
{
    /** The needle(s) to search for */
    private \$search;

    /** The replacement(s) to make */
    private \$replace;

    /**
     * Create a new StringReplacementFilter with \$search and \$replace.
     *
     * @param string|array \$search
     * @param string|array \$replace
     */
    public function __construct(\$search, \$replace)
    {
        \$this->search = \$search;
        \$this->replace = \$replace;
    }

    /**
     * Returns true if based on the buffer passed more bytes should be buffered.
     *
     * @param string \$buffer
     *
     * @return bool
     */
    public function shouldBuffer(\$buffer)
    {
        if ('' === \$buffer) {
            return false;
        }

        \$endOfBuffer = substr(\$buffer, -1);
        foreach ((array) \$this->search as \$needle) {
            if (false !== strpos(\$needle, \$endOfBuffer)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Perform the actual replacements on \$buffer and return the result.
     *
     * @param string \$buffer
     *
     * @return string
     */
    public function filter(\$buffer)
    {
        return str_replace(\$this->search, \$this->replace, \$buffer);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Processes bytes as they pass through a buffer and replaces sequences in it.
 *
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilter implements Swift_StreamFilter
{
    /** The needle(s) to search for */
    private \$search;

    /** The replacement(s) to make */
    private \$replace;

    /**
     * Create a new StringReplacementFilter with \$search and \$replace.
     *
     * @param string|array \$search
     * @param string|array \$replace
     */
    public function __construct(\$search, \$replace)
    {
        \$this->search = \$search;
        \$this->replace = \$replace;
    }

    /**
     * Returns true if based on the buffer passed more bytes should be buffered.
     *
     * @param string \$buffer
     *
     * @return bool
     */
    public function shouldBuffer(\$buffer)
    {
        if ('' === \$buffer) {
            return false;
        }

        \$endOfBuffer = substr(\$buffer, -1);
        foreach ((array) \$this->search as \$needle) {
            if (false !== strpos(\$needle, \$endOfBuffer)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Perform the actual replacements on \$buffer and return the result.
     *
     * @param string \$buffer
     *
     * @return string
     */
    public function filter(\$buffer)
    {
        return str_replace(\$this->search, \$this->replace, \$buffer);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php");
    }
}
