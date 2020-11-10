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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php */
class __TwigTemplate_c18b4d1f959bc5afd95f959cbed23e68f2f35473f72c9dd442334ba9b6f32c4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php"));

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
 * A basic KeyCache backed by an array.
 *
 * @author Chris Corbyn
 */
class Swift_KeyCache_ArrayKeyCache implements Swift_KeyCache
{
    /**
     * Cache contents.
     *
     * @var array
     */
    private \$contents = [];

    /**
     * An InputStream for cloning.
     *
     * @var Swift_KeyCache_KeyCacheInputStream
     */
    private \$stream;

    /**
     * Create a new ArrayKeyCache with the given \$stream for cloning to make
     * InputByteStreams.
     */
    public function __construct(Swift_KeyCache_KeyCacheInputStream \$stream)
    {
        \$this->stream = \$stream;
    }

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
    public function setString(\$nsKey, \$itemKey, \$string, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$this->contents[\$nsKey][\$itemKey] = \$string;
                break;
            case self::MODE_APPEND:
                if (!\$this->hasKey(\$nsKey, \$itemKey)) {
                    \$this->contents[\$nsKey][\$itemKey] = '';
                }
                \$this->contents[\$nsKey][\$itemKey] .= \$string;
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
        }
    }

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$mode
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$this->clearKey(\$nsKey, \$itemKey);
                // no break
            case self::MODE_APPEND:
                if (!\$this->hasKey(\$nsKey, \$itemKey)) {
                    \$this->contents[\$nsKey][\$itemKey] = '';
                }
                while (false !== \$bytes = \$os->read(8192)) {
                    \$this->contents[\$nsKey][\$itemKey] .= \$bytes;
                }
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
        }
    }

    /**
     * Provides a ByteStream which when written to, writes data to \$itemKey.
     *
     * NOTE: The stream will always write in append mode.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return Swift_InputByteStream
     */
    public function getInputByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$writeThrough = null)
    {
        \$is = clone \$this->stream;
        \$is->setKeyCache(\$this);
        \$is->setNsKey(\$nsKey);
        \$is->setItemKey(\$itemKey);
        if (isset(\$writeThrough)) {
            \$is->setWriteThroughStream(\$writeThrough);
        }

        return \$is;
    }

    /**
     * Get data back out of the cache as a string.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            return \$this->contents[\$nsKey][\$itemKey];
        }
    }

    /**
     * Get data back out of the cache as a ByteStream.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      to write the data to
     */
    public function exportToByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is)
    {
        \$this->prepareCache(\$nsKey);
        \$is->write(\$this->getString(\$nsKey, \$itemKey));
    }

    /**
     * Check if the given \$itemKey exists in the namespace \$nsKey.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return bool
     */
    public function hasKey(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);

        return array_key_exists(\$itemKey, \$this->contents[\$nsKey]);
    }

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey)
    {
        unset(\$this->contents[\$nsKey][\$itemKey]);
    }

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey)
    {
        unset(\$this->contents[\$nsKey]);
    }

    /**
     * Initialize the namespace of \$nsKey if needed.
     *
     * @param string \$nsKey
     */
    private function prepareCache(\$nsKey)
    {
        if (!array_key_exists(\$nsKey, \$this->contents)) {
            \$this->contents[\$nsKey] = [];
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php";
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
 * A basic KeyCache backed by an array.
 *
 * @author Chris Corbyn
 */
class Swift_KeyCache_ArrayKeyCache implements Swift_KeyCache
{
    /**
     * Cache contents.
     *
     * @var array
     */
    private \$contents = [];

    /**
     * An InputStream for cloning.
     *
     * @var Swift_KeyCache_KeyCacheInputStream
     */
    private \$stream;

    /**
     * Create a new ArrayKeyCache with the given \$stream for cloning to make
     * InputByteStreams.
     */
    public function __construct(Swift_KeyCache_KeyCacheInputStream \$stream)
    {
        \$this->stream = \$stream;
    }

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
    public function setString(\$nsKey, \$itemKey, \$string, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$this->contents[\$nsKey][\$itemKey] = \$string;
                break;
            case self::MODE_APPEND:
                if (!\$this->hasKey(\$nsKey, \$itemKey)) {
                    \$this->contents[\$nsKey][\$itemKey] = '';
                }
                \$this->contents[\$nsKey][\$itemKey] .= \$string;
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
        }
    }

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$mode
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$this->clearKey(\$nsKey, \$itemKey);
                // no break
            case self::MODE_APPEND:
                if (!\$this->hasKey(\$nsKey, \$itemKey)) {
                    \$this->contents[\$nsKey][\$itemKey] = '';
                }
                while (false !== \$bytes = \$os->read(8192)) {
                    \$this->contents[\$nsKey][\$itemKey] .= \$bytes;
                }
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
        }
    }

    /**
     * Provides a ByteStream which when written to, writes data to \$itemKey.
     *
     * NOTE: The stream will always write in append mode.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return Swift_InputByteStream
     */
    public function getInputByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$writeThrough = null)
    {
        \$is = clone \$this->stream;
        \$is->setKeyCache(\$this);
        \$is->setNsKey(\$nsKey);
        \$is->setItemKey(\$itemKey);
        if (isset(\$writeThrough)) {
            \$is->setWriteThroughStream(\$writeThrough);
        }

        return \$is;
    }

    /**
     * Get data back out of the cache as a string.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            return \$this->contents[\$nsKey][\$itemKey];
        }
    }

    /**
     * Get data back out of the cache as a ByteStream.
     *
     * @param string                \$nsKey
     * @param string                \$itemKey
     * @param Swift_InputByteStream \$is      to write the data to
     */
    public function exportToByteStream(\$nsKey, \$itemKey, Swift_InputByteStream \$is)
    {
        \$this->prepareCache(\$nsKey);
        \$is->write(\$this->getString(\$nsKey, \$itemKey));
    }

    /**
     * Check if the given \$itemKey exists in the namespace \$nsKey.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     *
     * @return bool
     */
    public function hasKey(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);

        return array_key_exists(\$itemKey, \$this->contents[\$nsKey]);
    }

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey)
    {
        unset(\$this->contents[\$nsKey][\$itemKey]);
    }

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey)
    {
        unset(\$this->contents[\$nsKey]);
    }

    /**
     * Initialize the namespace of \$nsKey if needed.
     *
     * @param string \$nsKey
     */
    private function prepareCache(\$nsKey)
    {
        if (!array_key_exists(\$nsKey, \$this->contents)) {
            \$this->contents[\$nsKey] = [];
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php");
    }
}
