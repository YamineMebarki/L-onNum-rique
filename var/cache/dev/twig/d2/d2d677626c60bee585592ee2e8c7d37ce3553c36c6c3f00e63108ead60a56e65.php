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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php */
class __TwigTemplate_f59f5202e5043d0d00d531f22893c6f387b8960ee8d9bc3ecd9e02017f0432e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages on the filesystem.
 *
 * @author Fabien Potencier
 * @author Xavier De Cock <xdecock@gmail.com>
 */
class Swift_FileSpool extends Swift_ConfigurableSpool
{
    /** The spool directory */
    private \$path;

    /**
     * File WriteRetry Limit.
     *
     * @var int
     */
    private \$retryLimit = 10;

    /**
     * Create a new FileSpool.
     *
     * @param string \$path
     *
     * @throws Swift_IoException
     */
    public function __construct(\$path)
    {
        \$this->path = \$path;

        if (!file_exists(\$this->path)) {
            if (!mkdir(\$this->path, 0777, true)) {
                throw new Swift_IoException(sprintf('Unable to create path \"%s\".', \$this->path));
            }
        }
    }

    /**
     * Tests if this Spool mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    /**
     * Starts this Spool mechanism.
     */
    public function start()
    {
    }

    /**
     * Stops this Spool mechanism.
     */
    public function stop()
    {
    }

    /**
     * Allow to manage the enqueuing retry limit.
     *
     * Default, is ten and allows over 64^20 different fileNames
     *
     * @param int \$limit
     */
    public function setRetryLimit(\$limit)
    {
        \$this->retryLimit = \$limit;
    }

    /**
     * Queues a message.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @throws Swift_IoException
     *
     * @return bool
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message)
    {
        \$ser = serialize(\$message);
        \$fileName = \$this->path.'/'.\$this->getRandomString(10);
        for (\$i = 0; \$i < \$this->retryLimit; ++\$i) {
            /* We try an exclusive creation of the file. This is an atomic operation, it avoid locking mechanism */
            \$fp = @fopen(\$fileName.'.message', 'xb');
            if (false !== \$fp) {
                if (false === fwrite(\$fp, \$ser)) {
                    return false;
                }

                return fclose(\$fp);
            } else {
                /* The file already exists, we try a longer fileName */
                \$fileName .= \$this->getRandomString(1);
            }
        }

        throw new Swift_IoException(sprintf('Unable to create a file for enqueuing Message in \"%s\".', \$this->path));
    }

    /**
     * Execute a recovery if for any reason a process is sending for too long.
     *
     * @param int \$timeout in second Defaults is for very slow smtp responses
     */
    public function recover(\$timeout = 900)
    {
        foreach (new DirectoryIterator(\$this->path) as \$file) {
            \$file = \$file->getRealPath();

            if ('.message.sending' == substr(\$file, -16)) {
                \$lockedtime = filectime(\$file);
                if ((time() - \$lockedtime) > \$timeout) {
                    rename(\$file, substr(\$file, 0, -8));
                }
            }
        }
    }

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent e-mail's
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null)
    {
        \$directoryIterator = new DirectoryIterator(\$this->path);

        /* Start the transport only if there are queued files to send */
        if (!\$transport->isStarted()) {
            foreach (\$directoryIterator as \$file) {
                if ('.message' == substr(\$file->getRealPath(), -8)) {
                    \$transport->start();
                    break;
                }
            }
        }

        \$failedRecipients = (array) \$failedRecipients;
        \$count = 0;
        \$time = time();
        foreach (\$directoryIterator as \$file) {
            \$file = \$file->getRealPath();

            if ('.message' != substr(\$file, -8)) {
                continue;
            }

            /* We try a rename, it's an atomic operation, and avoid locking the file */
            if (rename(\$file, \$file.'.sending')) {
                \$message = unserialize(file_get_contents(\$file.'.sending'));

                \$count += \$transport->send(\$message, \$failedRecipients);

                unlink(\$file.'.sending');
            } else {
                /* This message has just been catched by another process */
                continue;
            }

            if (\$this->getMessageLimit() && \$count >= \$this->getMessageLimit()) {
                break;
            }

            if (\$this->getTimeLimit() && (time() - \$time) >= \$this->getTimeLimit()) {
                break;
            }
        }

        return \$count;
    }

    /**
     * Returns a random string needed to generate a fileName for the queue.
     *
     * @param int \$count
     *
     * @return string
     */
    protected function getRandomString(\$count)
    {
        // This string MUST stay FS safe, avoid special chars
        \$base = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-';
        \$ret = '';
        \$strlen = strlen(\$base);
        for (\$i = 0; \$i < \$count; ++\$i) {
            \$ret .= \$base[random_int(0, \$strlen - 1)];
        }

        return \$ret;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php";
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
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages on the filesystem.
 *
 * @author Fabien Potencier
 * @author Xavier De Cock <xdecock@gmail.com>
 */
class Swift_FileSpool extends Swift_ConfigurableSpool
{
    /** The spool directory */
    private \$path;

    /**
     * File WriteRetry Limit.
     *
     * @var int
     */
    private \$retryLimit = 10;

    /**
     * Create a new FileSpool.
     *
     * @param string \$path
     *
     * @throws Swift_IoException
     */
    public function __construct(\$path)
    {
        \$this->path = \$path;

        if (!file_exists(\$this->path)) {
            if (!mkdir(\$this->path, 0777, true)) {
                throw new Swift_IoException(sprintf('Unable to create path \"%s\".', \$this->path));
            }
        }
    }

    /**
     * Tests if this Spool mechanism has started.
     *
     * @return bool
     */
    public function isStarted()
    {
        return true;
    }

    /**
     * Starts this Spool mechanism.
     */
    public function start()
    {
    }

    /**
     * Stops this Spool mechanism.
     */
    public function stop()
    {
    }

    /**
     * Allow to manage the enqueuing retry limit.
     *
     * Default, is ten and allows over 64^20 different fileNames
     *
     * @param int \$limit
     */
    public function setRetryLimit(\$limit)
    {
        \$this->retryLimit = \$limit;
    }

    /**
     * Queues a message.
     *
     * @param Swift_Mime_SimpleMessage \$message The message to store
     *
     * @throws Swift_IoException
     *
     * @return bool
     */
    public function queueMessage(Swift_Mime_SimpleMessage \$message)
    {
        \$ser = serialize(\$message);
        \$fileName = \$this->path.'/'.\$this->getRandomString(10);
        for (\$i = 0; \$i < \$this->retryLimit; ++\$i) {
            /* We try an exclusive creation of the file. This is an atomic operation, it avoid locking mechanism */
            \$fp = @fopen(\$fileName.'.message', 'xb');
            if (false !== \$fp) {
                if (false === fwrite(\$fp, \$ser)) {
                    return false;
                }

                return fclose(\$fp);
            } else {
                /* The file already exists, we try a longer fileName */
                \$fileName .= \$this->getRandomString(1);
            }
        }

        throw new Swift_IoException(sprintf('Unable to create a file for enqueuing Message in \"%s\".', \$this->path));
    }

    /**
     * Execute a recovery if for any reason a process is sending for too long.
     *
     * @param int \$timeout in second Defaults is for very slow smtp responses
     */
    public function recover(\$timeout = 900)
    {
        foreach (new DirectoryIterator(\$this->path) as \$file) {
            \$file = \$file->getRealPath();

            if ('.message.sending' == substr(\$file, -16)) {
                \$lockedtime = filectime(\$file);
                if ((time() - \$lockedtime) > \$timeout) {
                    rename(\$file, substr(\$file, 0, -8));
                }
            }
        }
    }

    /**
     * Sends messages using the given transport instance.
     *
     * @param Swift_Transport \$transport        A transport instance
     * @param string[]        \$failedRecipients An array of failures by-reference
     *
     * @return int The number of sent e-mail's
     */
    public function flushQueue(Swift_Transport \$transport, &\$failedRecipients = null)
    {
        \$directoryIterator = new DirectoryIterator(\$this->path);

        /* Start the transport only if there are queued files to send */
        if (!\$transport->isStarted()) {
            foreach (\$directoryIterator as \$file) {
                if ('.message' == substr(\$file->getRealPath(), -8)) {
                    \$transport->start();
                    break;
                }
            }
        }

        \$failedRecipients = (array) \$failedRecipients;
        \$count = 0;
        \$time = time();
        foreach (\$directoryIterator as \$file) {
            \$file = \$file->getRealPath();

            if ('.message' != substr(\$file, -8)) {
                continue;
            }

            /* We try a rename, it's an atomic operation, and avoid locking the file */
            if (rename(\$file, \$file.'.sending')) {
                \$message = unserialize(file_get_contents(\$file.'.sending'));

                \$count += \$transport->send(\$message, \$failedRecipients);

                unlink(\$file.'.sending');
            } else {
                /* This message has just been catched by another process */
                continue;
            }

            if (\$this->getMessageLimit() && \$count >= \$this->getMessageLimit()) {
                break;
            }

            if (\$this->getTimeLimit() && (time() - \$time) >= \$this->getTimeLimit()) {
                break;
            }
        }

        return \$count;
    }

    /**
     * Returns a random string needed to generate a fileName for the queue.
     *
     * @param int \$count
     *
     * @return string
     */
    protected function getRandomString(\$count)
    {
        // This string MUST stay FS safe, avoid special chars
        \$base = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-';
        \$ret = '';
        \$strlen = strlen(\$base);
        for (\$i = 0; \$i < \$count; ++\$i) {
            \$ret .= \$base[random_int(0, \$strlen - 1)];
        }

        return \$ret;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php");
    }
}
