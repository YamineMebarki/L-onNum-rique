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

/* vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php */
class __TwigTemplate_e334e3c35400e7bf4ffd5db2b478984cf284d1ac6a03d398f3f8fe8c0c63fb98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;

/**
 * Stores to any stream resource
 *
 * Can be used to store into php://stderr, remote and local files, etc.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class StreamHandler extends AbstractProcessingHandler
{
    protected \$stream;
    protected \$url;
    private \$errorMessage;
    protected \$filePermission;
    protected \$useLocking;
    private \$dirCreated;

    /**
     * @param resource|string \$stream
     * @param int             \$level          The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int|null        \$filePermission Optional file permissions (default (0644) are only for owner read/write)
     * @param bool            \$useLocking     Try to lock log file before doing any writes
     *
     * @throws \\Exception                If a missing directory is not buildable
     * @throws \\InvalidArgumentException If stream is not a resource or string
     */
    public function __construct(\$stream, \$level = Logger::DEBUG, \$bubble = true, \$filePermission = null, \$useLocking = false)
    {
        parent::__construct(\$level, \$bubble);
        if (is_resource(\$stream)) {
            \$this->stream = \$stream;
        } elseif (is_string(\$stream)) {
            \$this->url = \$stream;
        } else {
            throw new \\InvalidArgumentException('A stream must either be a resource or a string.');
        }

        \$this->filePermission = \$filePermission;
        \$this->useLocking = \$useLocking;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        if (\$this->url && is_resource(\$this->stream)) {
            fclose(\$this->stream);
        }
        \$this->stream = null;
        \$this->dirCreated = null;
    }

    /**
     * Return the currently active stream if it is open
     *
     * @return resource|null
     */
    public function getStream()
    {
        return \$this->stream;
    }

    /**
     * Return the stream URL if it was configured with a URL and not an active resource
     *
     * @return string|null
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!is_resource(\$this->stream)) {
            if (null === \$this->url || '' === \$this->url) {
                throw new \\LogicException('Missing stream url, the stream can not be opened. This may be caused by a premature call to close().');
            }
            \$this->createDir();
            \$this->errorMessage = null;
            set_error_handler(array(\$this, 'customErrorHandler'));
            \$this->stream = fopen(\$this->url, 'a');
            if (\$this->filePermission !== null) {
                @chmod(\$this->url, \$this->filePermission);
            }
            restore_error_handler();
            if (!is_resource(\$this->stream)) {
                \$this->stream = null;
                throw new \\UnexpectedValueException(sprintf('The stream or file \"%s\" could not be opened: '.\$this->errorMessage, \$this->url));
            }
        }

        if (\$this->useLocking) {
            // ignoring errors here, there's not much we can do about them
            flock(\$this->stream, LOCK_EX);
        }

        \$this->streamWrite(\$this->stream, \$record);

        if (\$this->useLocking) {
            flock(\$this->stream, LOCK_UN);
        }
    }

    /**
     * Write to stream
     * @param resource \$stream
     * @param array \$record
     */
    protected function streamWrite(\$stream, array \$record)
    {
        fwrite(\$stream, (string) \$record['formatted']);
    }

    private function customErrorHandler(\$code, \$msg)
    {
        \$this->errorMessage = preg_replace('{^(fopen|mkdir)\\(.*?\\): }', '', \$msg);
    }

    /**
     * @param string \$stream
     *
     * @return null|string
     */
    private function getDirFromStream(\$stream)
    {
        \$pos = strpos(\$stream, '://');
        if (\$pos === false) {
            return dirname(\$stream);
        }

        if ('file://' === substr(\$stream, 0, 7)) {
            return dirname(substr(\$stream, 7));
        }

        return;
    }

    private function createDir()
    {
        // Do not try to create dir if it has already been tried.
        if (\$this->dirCreated) {
            return;
        }

        \$dir = \$this->getDirFromStream(\$this->url);
        if (null !== \$dir && !is_dir(\$dir)) {
            \$this->errorMessage = null;
            set_error_handler(array(\$this, 'customErrorHandler'));
            \$status = mkdir(\$dir, 0777, true);
            restore_error_handler();
            if (false === \$status && !is_dir(\$dir)) {
                throw new \\UnexpectedValueException(sprintf('There is no existing directory at \"%s\" and its not buildable: '.\$this->errorMessage, \$dir));
            }
        }
        \$this->dirCreated = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;

/**
 * Stores to any stream resource
 *
 * Can be used to store into php://stderr, remote and local files, etc.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class StreamHandler extends AbstractProcessingHandler
{
    protected \$stream;
    protected \$url;
    private \$errorMessage;
    protected \$filePermission;
    protected \$useLocking;
    private \$dirCreated;

    /**
     * @param resource|string \$stream
     * @param int             \$level          The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int|null        \$filePermission Optional file permissions (default (0644) are only for owner read/write)
     * @param bool            \$useLocking     Try to lock log file before doing any writes
     *
     * @throws \\Exception                If a missing directory is not buildable
     * @throws \\InvalidArgumentException If stream is not a resource or string
     */
    public function __construct(\$stream, \$level = Logger::DEBUG, \$bubble = true, \$filePermission = null, \$useLocking = false)
    {
        parent::__construct(\$level, \$bubble);
        if (is_resource(\$stream)) {
            \$this->stream = \$stream;
        } elseif (is_string(\$stream)) {
            \$this->url = \$stream;
        } else {
            throw new \\InvalidArgumentException('A stream must either be a resource or a string.');
        }

        \$this->filePermission = \$filePermission;
        \$this->useLocking = \$useLocking;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        if (\$this->url && is_resource(\$this->stream)) {
            fclose(\$this->stream);
        }
        \$this->stream = null;
        \$this->dirCreated = null;
    }

    /**
     * Return the currently active stream if it is open
     *
     * @return resource|null
     */
    public function getStream()
    {
        return \$this->stream;
    }

    /**
     * Return the stream URL if it was configured with a URL and not an active resource
     *
     * @return string|null
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (!is_resource(\$this->stream)) {
            if (null === \$this->url || '' === \$this->url) {
                throw new \\LogicException('Missing stream url, the stream can not be opened. This may be caused by a premature call to close().');
            }
            \$this->createDir();
            \$this->errorMessage = null;
            set_error_handler(array(\$this, 'customErrorHandler'));
            \$this->stream = fopen(\$this->url, 'a');
            if (\$this->filePermission !== null) {
                @chmod(\$this->url, \$this->filePermission);
            }
            restore_error_handler();
            if (!is_resource(\$this->stream)) {
                \$this->stream = null;
                throw new \\UnexpectedValueException(sprintf('The stream or file \"%s\" could not be opened: '.\$this->errorMessage, \$this->url));
            }
        }

        if (\$this->useLocking) {
            // ignoring errors here, there's not much we can do about them
            flock(\$this->stream, LOCK_EX);
        }

        \$this->streamWrite(\$this->stream, \$record);

        if (\$this->useLocking) {
            flock(\$this->stream, LOCK_UN);
        }
    }

    /**
     * Write to stream
     * @param resource \$stream
     * @param array \$record
     */
    protected function streamWrite(\$stream, array \$record)
    {
        fwrite(\$stream, (string) \$record['formatted']);
    }

    private function customErrorHandler(\$code, \$msg)
    {
        \$this->errorMessage = preg_replace('{^(fopen|mkdir)\\(.*?\\): }', '', \$msg);
    }

    /**
     * @param string \$stream
     *
     * @return null|string
     */
    private function getDirFromStream(\$stream)
    {
        \$pos = strpos(\$stream, '://');
        if (\$pos === false) {
            return dirname(\$stream);
        }

        if ('file://' === substr(\$stream, 0, 7)) {
            return dirname(substr(\$stream, 7));
        }

        return;
    }

    private function createDir()
    {
        // Do not try to create dir if it has already been tried.
        if (\$this->dirCreated) {
            return;
        }

        \$dir = \$this->getDirFromStream(\$this->url);
        if (null !== \$dir && !is_dir(\$dir)) {
            \$this->errorMessage = null;
            set_error_handler(array(\$this, 'customErrorHandler'));
            \$status = mkdir(\$dir, 0777, true);
            restore_error_handler();
            if (false === \$status && !is_dir(\$dir)) {
                throw new \\UnexpectedValueException(sprintf('There is no existing directory at \"%s\" and its not buildable: '.\$this->errorMessage, \$dir));
            }
        }
        \$this->dirCreated = true;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php");
    }
}
