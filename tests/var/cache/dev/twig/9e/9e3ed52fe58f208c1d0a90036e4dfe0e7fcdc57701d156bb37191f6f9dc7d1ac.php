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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php */
class __TwigTemplate_d1631ee1e959e040b6cf03441f73b9388e59417f5a4664689083391e0ed92963 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php"));

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
 * Creates filters for replacing needles in a string buffer.
 *
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilterFactory implements Swift_ReplacementFilterFactory
{
    /** Lazy-loaded filters */
    private \$filters = [];

    /**
     * Create a new StreamFilter to replace \$search with \$replace in a string.
     *
     * @param string \$search
     * @param string \$replace
     *
     * @return Swift_StreamFilter
     */
    public function createFilter(\$search, \$replace)
    {
        if (!isset(\$this->filters[\$search][\$replace])) {
            if (!isset(\$this->filters[\$search])) {
                \$this->filters[\$search] = [];
            }

            if (!isset(\$this->filters[\$search][\$replace])) {
                \$this->filters[\$search][\$replace] = [];
            }

            \$this->filters[\$search][\$replace] = new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
        }

        return \$this->filters[\$search][\$replace];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php";
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
 * Creates filters for replacing needles in a string buffer.
 *
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilterFactory implements Swift_ReplacementFilterFactory
{
    /** Lazy-loaded filters */
    private \$filters = [];

    /**
     * Create a new StreamFilter to replace \$search with \$replace in a string.
     *
     * @param string \$search
     * @param string \$replace
     *
     * @return Swift_StreamFilter
     */
    public function createFilter(\$search, \$replace)
    {
        if (!isset(\$this->filters[\$search][\$replace])) {
            if (!isset(\$this->filters[\$search])) {
                \$this->filters[\$search] = [];
            }

            if (!isset(\$this->filters[\$search][\$replace])) {
                \$this->filters[\$search][\$replace] = [];
            }

            \$this->filters[\$search][\$replace] = new Swift_StreamFilters_StringReplacementFilter(\$search, \$replace);
        }

        return \$this->filters[\$search][\$replace];
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php");
    }
}
