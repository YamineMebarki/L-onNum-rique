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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php */
class __TwigTemplate_a6683229d8c2c5a01ddb78f902486555161474a796955e5ce3aa6c5411e0f2fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php"));

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
 * Writes data to a KeyCache using a stream.
 *
 * @author Chris Corbyn
 */
interface Swift_KeyCache_KeyCacheInputStream extends Swift_InputByteStream
{
    /**
     * Set the KeyCache to wrap.
     *
     * @param Swift_KeyCache \$keyCache
     */
    public function setKeyCache(Swift_KeyCache \$keyCache);

    /**
     * Set the nsKey which will be written to.
     *
     * @param string \$nsKey
     */
    public function setNsKey(\$nsKey);

    /**
     * Set the itemKey which will be written to.
     *
     * @param string \$itemKey
     */
    public function setItemKey(\$itemKey);

    /**
     * Specify a stream to write through for each write().
     *
     * @param Swift_InputByteStream \$is
     */
    public function setWriteThroughStream(Swift_InputByteStream \$is);

    /**
     * Any implementation should be cloneable, allowing the clone to access a
     * separate \$nsKey and \$itemKey.
     */
    public function __clone();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php";
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
 * Writes data to a KeyCache using a stream.
 *
 * @author Chris Corbyn
 */
interface Swift_KeyCache_KeyCacheInputStream extends Swift_InputByteStream
{
    /**
     * Set the KeyCache to wrap.
     *
     * @param Swift_KeyCache \$keyCache
     */
    public function setKeyCache(Swift_KeyCache \$keyCache);

    /**
     * Set the nsKey which will be written to.
     *
     * @param string \$nsKey
     */
    public function setNsKey(\$nsKey);

    /**
     * Set the itemKey which will be written to.
     *
     * @param string \$itemKey
     */
    public function setItemKey(\$itemKey);

    /**
     * Specify a stream to write through for each write().
     *
     * @param Swift_InputByteStream \$is
     */
    public function setWriteThroughStream(Swift_InputByteStream \$is);

    /**
     * Any implementation should be cloneable, allowing the clone to access a
     * separate \$nsKey and \$itemKey.
     */
    public function __clone();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php");
    }
}
