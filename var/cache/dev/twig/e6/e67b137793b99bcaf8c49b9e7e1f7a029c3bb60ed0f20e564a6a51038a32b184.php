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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php */
class __TwigTemplate_e64f9dad65810f33a78e50025e6f4e2f38ecd9783923efd8ae7cc23d17989a9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php"));

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
class Swift_KeyCache_SimpleKeyCacheInputStream implements Swift_KeyCache_KeyCacheInputStream
{
    /** The KeyCache being written to */
    private \$keyCache;

    /** The nsKey of the KeyCache being written to */
    private \$nsKey;

    /** The itemKey of the KeyCache being written to */
    private \$itemKey;

    /** A stream to write through on each write() */
    private \$writeThrough = null;

    /**
     * Set the KeyCache to wrap.
     */
    public function setKeyCache(Swift_KeyCache \$keyCache)
    {
        \$this->keyCache = \$keyCache;
    }

    /**
     * Specify a stream to write through for each write().
     */
    public function setWriteThroughStream(Swift_InputByteStream \$is)
    {
        \$this->writeThrough = \$is;
    }

    /**
     * Writes \$bytes to the end of the stream.
     *
     * @param string                \$bytes
     * @param Swift_InputByteStream \$is    optional
     */
    public function write(\$bytes, Swift_InputByteStream \$is = null)
    {
        \$this->keyCache->setString(
            \$this->nsKey, \$this->itemKey, \$bytes, Swift_KeyCache::MODE_APPEND
            );
        if (isset(\$is)) {
            \$is->write(\$bytes);
        }
        if (isset(\$this->writeThrough)) {
            \$this->writeThrough->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Not used.
     */
    public function bind(Swift_InputByteStream \$is)
    {
    }

    /**
     * Not used.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
    }

    /**
     * Flush the contents of the stream (empty it) and set the internal pointer
     * to the beginning.
     */
    public function flushBuffers()
    {
        \$this->keyCache->clearKey(\$this->nsKey, \$this->itemKey);
    }

    /**
     * Set the nsKey which will be written to.
     *
     * @param string \$nsKey
     */
    public function setNsKey(\$nsKey)
    {
        \$this->nsKey = \$nsKey;
    }

    /**
     * Set the itemKey which will be written to.
     *
     * @param string \$itemKey
     */
    public function setItemKey(\$itemKey)
    {
        \$this->itemKey = \$itemKey;
    }

    /**
     * Any implementation should be cloneable, allowing the clone to access a
     * separate \$nsKey and \$itemKey.
     */
    public function __clone()
    {
        \$this->writeThrough = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php";
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
class Swift_KeyCache_SimpleKeyCacheInputStream implements Swift_KeyCache_KeyCacheInputStream
{
    /** The KeyCache being written to */
    private \$keyCache;

    /** The nsKey of the KeyCache being written to */
    private \$nsKey;

    /** The itemKey of the KeyCache being written to */
    private \$itemKey;

    /** A stream to write through on each write() */
    private \$writeThrough = null;

    /**
     * Set the KeyCache to wrap.
     */
    public function setKeyCache(Swift_KeyCache \$keyCache)
    {
        \$this->keyCache = \$keyCache;
    }

    /**
     * Specify a stream to write through for each write().
     */
    public function setWriteThroughStream(Swift_InputByteStream \$is)
    {
        \$this->writeThrough = \$is;
    }

    /**
     * Writes \$bytes to the end of the stream.
     *
     * @param string                \$bytes
     * @param Swift_InputByteStream \$is    optional
     */
    public function write(\$bytes, Swift_InputByteStream \$is = null)
    {
        \$this->keyCache->setString(
            \$this->nsKey, \$this->itemKey, \$bytes, Swift_KeyCache::MODE_APPEND
            );
        if (isset(\$is)) {
            \$is->write(\$bytes);
        }
        if (isset(\$this->writeThrough)) {
            \$this->writeThrough->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Not used.
     */
    public function bind(Swift_InputByteStream \$is)
    {
    }

    /**
     * Not used.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
    }

    /**
     * Flush the contents of the stream (empty it) and set the internal pointer
     * to the beginning.
     */
    public function flushBuffers()
    {
        \$this->keyCache->clearKey(\$this->nsKey, \$this->itemKey);
    }

    /**
     * Set the nsKey which will be written to.
     *
     * @param string \$nsKey
     */
    public function setNsKey(\$nsKey)
    {
        \$this->nsKey = \$nsKey;
    }

    /**
     * Set the itemKey which will be written to.
     *
     * @param string \$itemKey
     */
    public function setItemKey(\$itemKey)
    {
        \$this->itemKey = \$itemKey;
    }

    /**
     * Any implementation should be cloneable, allowing the clone to access a
     * separate \$nsKey and \$itemKey.
     */
    public function __clone()
    {
        \$this->writeThrough = null;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php");
    }
}
