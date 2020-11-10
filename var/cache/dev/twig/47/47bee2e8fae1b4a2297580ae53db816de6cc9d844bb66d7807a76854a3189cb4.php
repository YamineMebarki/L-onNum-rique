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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php */
class __TwigTemplate_23ab63f0e3bcdb963459cd6fd3253382fbd71956181ecc239096dfff45cfe8f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php"));

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
 * Provides a mechanism for storing data using two keys.
 *
 * @author Chris Corbyn
 */
interface Swift_KeyCache
{
    /** Mode for replacing existing cached data */
    const MODE_WRITE = 1;

    /** Mode for appending data to the end of existing cached data */
    const MODE_APPEND = 2;

    /**
     * Set a string into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param string \$string
     * @param int    \$mode
     */
    public function setString(\$nsKey, \$itemKey, \$string, \$mode);

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string                 \$nsKey
     * @param string                 \$itemKey
     * @param Swift_OutputByteStream \$os
     * @param int                    \$mode
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode);

    /**
     * Provides a ByteStream which when written to, writes data to \$itemKey.
     *
     * NOTE: The stream will always write in append mode.
     * If the optional third parameter is passed all writes will go through \$is.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      optional input stream
     *
     * @return Swift_InputByteStream
     */
    public function getInputByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is = null);

    /**
     * Get data back out of the cache as a string.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey);

    /**
     * Get data back out of the cache as a ByteStream.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      stream to write the data to
     */
    public function exportToByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is);

    /**
     * Check if the given \$itemKey exists in the namespace \$nsKey.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return bool
     */
    public function hasKey(\$nsKey, \$itemKey);

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey);

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php";
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
 * Provides a mechanism for storing data using two keys.
 *
 * @author Chris Corbyn
 */
interface Swift_KeyCache
{
    /** Mode for replacing existing cached data */
    const MODE_WRITE = 1;

    /** Mode for appending data to the end of existing cached data */
    const MODE_APPEND = 2;

    /**
     * Set a string into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param string \$string
     * @param int    \$mode
     */
    public function setString(\$nsKey, \$itemKey, \$string, \$mode);

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string                 \$nsKey
     * @param string                 \$itemKey
     * @param Swift_OutputByteStream \$os
     * @param int                    \$mode
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode);

    /**
     * Provides a ByteStream which when written to, writes data to \$itemKey.
     *
     * NOTE: The stream will always write in append mode.
     * If the optional third parameter is passed all writes will go through \$is.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      optional input stream
     *
     * @return Swift_InputByteStream
     */
    public function getInputByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is = null);

    /**
     * Get data back out of the cache as a string.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey);

    /**
     * Get data back out of the cache as a ByteStream.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      stream to write the data to
     */
    public function exportToByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is);

    /**
     * Check if the given \$itemKey exists in the namespace \$nsKey.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return bool
     */
    public function hasKey(\$nsKey, \$itemKey);

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey);

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php");
    }
}
