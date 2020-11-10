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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php */
class __TwigTemplate_ed241d3ecdc3877dd62c73794137ac0d580dfe415a240dca84189880b153fbad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php"));

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
 * A KeyCache which streams to and from disk.
 *
 * @author Chris Corbyn
 */
class Swift_KeyCache_DiskKeyCache implements Swift_KeyCache
{
    /** Signal to place pointer at start of file */
    const POSITION_START = 0;

    /** Signal to place pointer at end of file */
    const POSITION_END = 1;

    /** Signal to leave pointer in whatever position it currently is */
    const POSITION_CURRENT = 2;

    /**
     * An InputStream for cloning.
     *
     * @var Swift_KeyCache_KeyCacheInputStream
     */
    private \$stream;

    /**
     * A path to write to.
     *
     * @var string
     */
    private \$path;

    /**
     * Stored keys.
     *
     * @var array
     */
    private \$keys = [];

    /**
     * Create a new DiskKeyCache with the given \$stream for cloning to make
     * InputByteStreams, and the given \$path to save to.
     *
     * @param string \$path to save to
     */
    public function __construct(Swift_KeyCache_KeyCacheInputStream \$stream, \$path)
    {
        \$this->stream = \$stream;
        \$this->path = \$path;
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
     *
     * @throws Swift_IoException
     */
    public function setString(\$nsKey, \$itemKey, \$string, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
                break;
            case self::MODE_APPEND:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_END);
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
                break;
        }
        fwrite(\$fp, \$string);
        \$this->freeHandle(\$nsKey, \$itemKey);
    }

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$mode
     *
     * @throws Swift_IoException
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
                break;
            case self::MODE_APPEND:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_END);
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
                break;
        }
        while (false !== \$bytes = \$os->read(8192)) {
            fwrite(\$fp, \$bytes);
        }
        \$this->freeHandle(\$nsKey, \$itemKey);
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
     * @throws Swift_IoException
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
            \$str = '';
            while (!feof(\$fp) && false !== \$bytes = fread(\$fp, 8192)) {
                \$str .= \$bytes;
            }
            \$this->freeHandle(\$nsKey, \$itemKey);

            return \$str;
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
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
            while (!feof(\$fp) && false !== \$bytes = fread(\$fp, 8192)) {
                \$is->write(\$bytes);
            }
            \$this->freeHandle(\$nsKey, \$itemKey);
        }
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
        return is_file(\$this->path.'/'.\$nsKey.'/'.\$itemKey);
    }

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey)
    {
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$this->freeHandle(\$nsKey, \$itemKey);
            unlink(\$this->path.'/'.\$nsKey.'/'.\$itemKey);
        }
    }

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey)
    {
        if (array_key_exists(\$nsKey, \$this->keys)) {
            foreach (\$this->keys[\$nsKey] as \$itemKey => \$null) {
                \$this->clearKey(\$nsKey, \$itemKey);
            }
            if (is_dir(\$this->path.'/'.\$nsKey)) {
                rmdir(\$this->path.'/'.\$nsKey);
            }
            unset(\$this->keys[\$nsKey]);
        }
    }

    /**
     * Initialize the namespace of \$nsKey if needed.
     *
     * @param string \$nsKey
     */
    private function prepareCache(\$nsKey)
    {
        \$cacheDir = \$this->path.'/'.\$nsKey;
        if (!is_dir(\$cacheDir)) {
            if (!mkdir(\$cacheDir)) {
                throw new Swift_IoException('Failed to create cache directory '.\$cacheDir);
            }
            \$this->keys[\$nsKey] = [];
        }
    }

    /**
     * Get a file handle on the cache item.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$position
     *
     * @return resource
     */
    private function getHandle(\$nsKey, \$itemKey, \$position)
    {
        if (!isset(\$this->keys[\$nsKey][\$itemKey])) {
            \$openMode = \$this->hasKey(\$nsKey, \$itemKey) ? 'r+b' : 'w+b';
            \$fp = fopen(\$this->path.'/'.\$nsKey.'/'.\$itemKey, \$openMode);
            \$this->keys[\$nsKey][\$itemKey] = \$fp;
        }
        if (self::POSITION_START == \$position) {
            fseek(\$this->keys[\$nsKey][\$itemKey], 0, SEEK_SET);
        } elseif (self::POSITION_END == \$position) {
            fseek(\$this->keys[\$nsKey][\$itemKey], 0, SEEK_END);
        }

        return \$this->keys[\$nsKey][\$itemKey];
    }

    private function freeHandle(\$nsKey, \$itemKey)
    {
        \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_CURRENT);
        fclose(\$fp);
        \$this->keys[\$nsKey][\$itemKey] = null;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        foreach (\$this->keys as \$nsKey => \$null) {
            \$this->clearAll(\$nsKey);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php";
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
 * A KeyCache which streams to and from disk.
 *
 * @author Chris Corbyn
 */
class Swift_KeyCache_DiskKeyCache implements Swift_KeyCache
{
    /** Signal to place pointer at start of file */
    const POSITION_START = 0;

    /** Signal to place pointer at end of file */
    const POSITION_END = 1;

    /** Signal to leave pointer in whatever position it currently is */
    const POSITION_CURRENT = 2;

    /**
     * An InputStream for cloning.
     *
     * @var Swift_KeyCache_KeyCacheInputStream
     */
    private \$stream;

    /**
     * A path to write to.
     *
     * @var string
     */
    private \$path;

    /**
     * Stored keys.
     *
     * @var array
     */
    private \$keys = [];

    /**
     * Create a new DiskKeyCache with the given \$stream for cloning to make
     * InputByteStreams, and the given \$path to save to.
     *
     * @param string \$path to save to
     */
    public function __construct(Swift_KeyCache_KeyCacheInputStream \$stream, \$path)
    {
        \$this->stream = \$stream;
        \$this->path = \$path;
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
     *
     * @throws Swift_IoException
     */
    public function setString(\$nsKey, \$itemKey, \$string, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
                break;
            case self::MODE_APPEND:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_END);
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
                break;
        }
        fwrite(\$fp, \$string);
        \$this->freeHandle(\$nsKey, \$itemKey);
    }

    /**
     * Set a ByteStream into the cache under \$itemKey for the namespace \$nsKey.
     *
     * @see MODE_WRITE, MODE_APPEND
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$mode
     *
     * @throws Swift_IoException
     */
    public function importFromByteStream(\$nsKey, \$itemKey, Swift_OutputByteStream \$os, \$mode)
    {
        \$this->prepareCache(\$nsKey);
        switch (\$mode) {
            case self::MODE_WRITE:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
                break;
            case self::MODE_APPEND:
                \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_END);
                break;
            default:
                throw new Swift_SwiftException(
                    'Invalid mode ['.\$mode.'] used to set nsKey='.
                    \$nsKey.', itemKey='.\$itemKey
                    );
                break;
        }
        while (false !== \$bytes = \$os->read(8192)) {
            fwrite(\$fp, \$bytes);
        }
        \$this->freeHandle(\$nsKey, \$itemKey);
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
     * @throws Swift_IoException
     *
     * @return string
     */
    public function getString(\$nsKey, \$itemKey)
    {
        \$this->prepareCache(\$nsKey);
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
            \$str = '';
            while (!feof(\$fp) && false !== \$bytes = fread(\$fp, 8192)) {
                \$str .= \$bytes;
            }
            \$this->freeHandle(\$nsKey, \$itemKey);

            return \$str;
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
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_START);
            while (!feof(\$fp) && false !== \$bytes = fread(\$fp, 8192)) {
                \$is->write(\$bytes);
            }
            \$this->freeHandle(\$nsKey, \$itemKey);
        }
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
        return is_file(\$this->path.'/'.\$nsKey.'/'.\$itemKey);
    }

    /**
     * Clear data for \$itemKey in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     */
    public function clearKey(\$nsKey, \$itemKey)
    {
        if (\$this->hasKey(\$nsKey, \$itemKey)) {
            \$this->freeHandle(\$nsKey, \$itemKey);
            unlink(\$this->path.'/'.\$nsKey.'/'.\$itemKey);
        }
    }

    /**
     * Clear all data in the namespace \$nsKey if it exists.
     *
     * @param string \$nsKey
     */
    public function clearAll(\$nsKey)
    {
        if (array_key_exists(\$nsKey, \$this->keys)) {
            foreach (\$this->keys[\$nsKey] as \$itemKey => \$null) {
                \$this->clearKey(\$nsKey, \$itemKey);
            }
            if (is_dir(\$this->path.'/'.\$nsKey)) {
                rmdir(\$this->path.'/'.\$nsKey);
            }
            unset(\$this->keys[\$nsKey]);
        }
    }

    /**
     * Initialize the namespace of \$nsKey if needed.
     *
     * @param string \$nsKey
     */
    private function prepareCache(\$nsKey)
    {
        \$cacheDir = \$this->path.'/'.\$nsKey;
        if (!is_dir(\$cacheDir)) {
            if (!mkdir(\$cacheDir)) {
                throw new Swift_IoException('Failed to create cache directory '.\$cacheDir);
            }
            \$this->keys[\$nsKey] = [];
        }
    }

    /**
     * Get a file handle on the cache item.
     *
     * @param string \$nsKey
     * @param string \$itemKey
     * @param int    \$position
     *
     * @return resource
     */
    private function getHandle(\$nsKey, \$itemKey, \$position)
    {
        if (!isset(\$this->keys[\$nsKey][\$itemKey])) {
            \$openMode = \$this->hasKey(\$nsKey, \$itemKey) ? 'r+b' : 'w+b';
            \$fp = fopen(\$this->path.'/'.\$nsKey.'/'.\$itemKey, \$openMode);
            \$this->keys[\$nsKey][\$itemKey] = \$fp;
        }
        if (self::POSITION_START == \$position) {
            fseek(\$this->keys[\$nsKey][\$itemKey], 0, SEEK_SET);
        } elseif (self::POSITION_END == \$position) {
            fseek(\$this->keys[\$nsKey][\$itemKey], 0, SEEK_END);
        }

        return \$this->keys[\$nsKey][\$itemKey];
    }

    private function freeHandle(\$nsKey, \$itemKey)
    {
        \$fp = \$this->getHandle(\$nsKey, \$itemKey, self::POSITION_CURRENT);
        fclose(\$fp);
        \$this->keys[\$nsKey][\$itemKey] = null;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        foreach (\$this->keys as \$nsKey => \$null) {
            \$this->clearAll(\$nsKey);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php");
    }
}
