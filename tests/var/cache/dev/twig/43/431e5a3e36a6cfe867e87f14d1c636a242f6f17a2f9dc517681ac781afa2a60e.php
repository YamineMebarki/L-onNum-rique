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

/* vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php */
class __TwigTemplate_39e426776e253bfba0726e51b015a21b88845aa6f701296d22ae8684f105ec4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php"));

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
 * Stores log to files that are rotated every day and a limited number of files are kept.
 *
 * This rotation is only intended to be used as a workaround. Using logrotate to
 * handle the rotation is strongly encouraged when you can use it.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class RotatingFileHandler extends StreamHandler
{
    const FILE_PER_DAY = 'Y-m-d';
    const FILE_PER_MONTH = 'Y-m';
    const FILE_PER_YEAR = 'Y';

    protected \$filename;
    protected \$maxFiles;
    protected \$mustRotate;
    protected \$nextRotation;
    protected \$filenameFormat;
    protected \$dateFormat;

    /**
     * @param string   \$filename
     * @param int      \$maxFiles       The maximal amount of files to keep (0 means unlimited)
     * @param int      \$level          The minimum logging level at which this handler will be triggered
     * @param bool     \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int|null \$filePermission Optional file permissions (default (0644) are only for owner read/write)
     * @param bool     \$useLocking     Try to lock log file before doing any writes
     */
    public function __construct(\$filename, \$maxFiles = 0, \$level = Logger::DEBUG, \$bubble = true, \$filePermission = null, \$useLocking = false)
    {
        \$this->filename = \$filename;
        \$this->maxFiles = (int) \$maxFiles;
        \$this->nextRotation = new \\DateTime('tomorrow');
        \$this->filenameFormat = '{filename}-{date}';
        \$this->dateFormat = 'Y-m-d';

        parent::__construct(\$this->getTimedFilename(), \$level, \$bubble, \$filePermission, \$useLocking);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        parent::close();

        if (true === \$this->mustRotate) {
            \$this->rotate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();

        if (true === \$this->mustRotate) {
            \$this->rotate();
        }
    }

    public function setFilenameFormat(\$filenameFormat, \$dateFormat)
    {
        if (!preg_match('{^Y(([/_.-]?m)([/_.-]?d)?)?\$}', \$dateFormat)) {
            trigger_error(
                'Invalid date format - format must be one of '.
                'RotatingFileHandler::FILE_PER_DAY (\"Y-m-d\"), RotatingFileHandler::FILE_PER_MONTH (\"Y-m\") '.
                'or RotatingFileHandler::FILE_PER_YEAR (\"Y\"), or you can set one of the '.
                'date formats using slashes, underscores and/or dots instead of dashes.',
                E_USER_DEPRECATED
            );
        }
        if (substr_count(\$filenameFormat, '{date}') === 0) {
            trigger_error(
                'Invalid filename format - format should contain at least `{date}`, because otherwise rotating is impossible.',
                E_USER_DEPRECATED
            );
        }
        \$this->filenameFormat = \$filenameFormat;
        \$this->dateFormat = \$dateFormat;
        \$this->url = \$this->getTimedFilename();
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        // on the first record written, if the log is new, we should rotate (once per day)
        if (null === \$this->mustRotate) {
            \$this->mustRotate = !file_exists(\$this->url);
        }

        if (\$this->nextRotation < \$record['datetime']) {
            \$this->mustRotate = true;
            \$this->close();
        }

        parent::write(\$record);
    }

    /**
     * Rotates the files.
     */
    protected function rotate()
    {
        // update filename
        \$this->url = \$this->getTimedFilename();
        \$this->nextRotation = new \\DateTime('tomorrow');

        // skip GC of old log if files are unlimited
        if (0 === \$this->maxFiles) {
            return;
        }

        \$logFiles = glob(\$this->getGlobPattern());
        if (\$this->maxFiles >= count(\$logFiles)) {
            // no files to remove
            return;
        }

        // Sorting the files by name to remove the older ones
        usort(\$logFiles, function (\$a, \$b) {
            return strcmp(\$b, \$a);
        });

        foreach (array_slice(\$logFiles, \$this->maxFiles) as \$file) {
            if (is_writable(\$file)) {
                // suppress errors here as unlink() might fail if two processes
                // are cleaning up/rotating at the same time
                set_error_handler(function (\$errno, \$errstr, \$errfile, \$errline) {});
                unlink(\$file);
                restore_error_handler();
            }
        }

        \$this->mustRotate = false;
    }

    protected function getTimedFilename()
    {
        \$fileInfo = pathinfo(\$this->filename);
        \$timedFilename = str_replace(
            array('{filename}', '{date}'),
            array(\$fileInfo['filename'], date(\$this->dateFormat)),
            \$fileInfo['dirname'] . '/' . \$this->filenameFormat
        );

        if (!empty(\$fileInfo['extension'])) {
            \$timedFilename .= '.'.\$fileInfo['extension'];
        }

        return \$timedFilename;
    }

    protected function getGlobPattern()
    {
        \$fileInfo = pathinfo(\$this->filename);
        \$glob = str_replace(
            array('{filename}', '{date}'),
            array(\$fileInfo['filename'], '[0-9][0-9][0-9][0-9]*'),
            \$fileInfo['dirname'] . '/' . \$this->filenameFormat
        );
        if (!empty(\$fileInfo['extension'])) {
            \$glob .= '.'.\$fileInfo['extension'];
        }

        return \$glob;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php";
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
 * Stores log to files that are rotated every day and a limited number of files are kept.
 *
 * This rotation is only intended to be used as a workaround. Using logrotate to
 * handle the rotation is strongly encouraged when you can use it.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class RotatingFileHandler extends StreamHandler
{
    const FILE_PER_DAY = 'Y-m-d';
    const FILE_PER_MONTH = 'Y-m';
    const FILE_PER_YEAR = 'Y';

    protected \$filename;
    protected \$maxFiles;
    protected \$mustRotate;
    protected \$nextRotation;
    protected \$filenameFormat;
    protected \$dateFormat;

    /**
     * @param string   \$filename
     * @param int      \$maxFiles       The maximal amount of files to keep (0 means unlimited)
     * @param int      \$level          The minimum logging level at which this handler will be triggered
     * @param bool     \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int|null \$filePermission Optional file permissions (default (0644) are only for owner read/write)
     * @param bool     \$useLocking     Try to lock log file before doing any writes
     */
    public function __construct(\$filename, \$maxFiles = 0, \$level = Logger::DEBUG, \$bubble = true, \$filePermission = null, \$useLocking = false)
    {
        \$this->filename = \$filename;
        \$this->maxFiles = (int) \$maxFiles;
        \$this->nextRotation = new \\DateTime('tomorrow');
        \$this->filenameFormat = '{filename}-{date}';
        \$this->dateFormat = 'Y-m-d';

        parent::__construct(\$this->getTimedFilename(), \$level, \$bubble, \$filePermission, \$useLocking);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        parent::close();

        if (true === \$this->mustRotate) {
            \$this->rotate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();

        if (true === \$this->mustRotate) {
            \$this->rotate();
        }
    }

    public function setFilenameFormat(\$filenameFormat, \$dateFormat)
    {
        if (!preg_match('{^Y(([/_.-]?m)([/_.-]?d)?)?\$}', \$dateFormat)) {
            trigger_error(
                'Invalid date format - format must be one of '.
                'RotatingFileHandler::FILE_PER_DAY (\"Y-m-d\"), RotatingFileHandler::FILE_PER_MONTH (\"Y-m\") '.
                'or RotatingFileHandler::FILE_PER_YEAR (\"Y\"), or you can set one of the '.
                'date formats using slashes, underscores and/or dots instead of dashes.',
                E_USER_DEPRECATED
            );
        }
        if (substr_count(\$filenameFormat, '{date}') === 0) {
            trigger_error(
                'Invalid filename format - format should contain at least `{date}`, because otherwise rotating is impossible.',
                E_USER_DEPRECATED
            );
        }
        \$this->filenameFormat = \$filenameFormat;
        \$this->dateFormat = \$dateFormat;
        \$this->url = \$this->getTimedFilename();
        \$this->close();
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        // on the first record written, if the log is new, we should rotate (once per day)
        if (null === \$this->mustRotate) {
            \$this->mustRotate = !file_exists(\$this->url);
        }

        if (\$this->nextRotation < \$record['datetime']) {
            \$this->mustRotate = true;
            \$this->close();
        }

        parent::write(\$record);
    }

    /**
     * Rotates the files.
     */
    protected function rotate()
    {
        // update filename
        \$this->url = \$this->getTimedFilename();
        \$this->nextRotation = new \\DateTime('tomorrow');

        // skip GC of old log if files are unlimited
        if (0 === \$this->maxFiles) {
            return;
        }

        \$logFiles = glob(\$this->getGlobPattern());
        if (\$this->maxFiles >= count(\$logFiles)) {
            // no files to remove
            return;
        }

        // Sorting the files by name to remove the older ones
        usort(\$logFiles, function (\$a, \$b) {
            return strcmp(\$b, \$a);
        });

        foreach (array_slice(\$logFiles, \$this->maxFiles) as \$file) {
            if (is_writable(\$file)) {
                // suppress errors here as unlink() might fail if two processes
                // are cleaning up/rotating at the same time
                set_error_handler(function (\$errno, \$errstr, \$errfile, \$errline) {});
                unlink(\$file);
                restore_error_handler();
            }
        }

        \$this->mustRotate = false;
    }

    protected function getTimedFilename()
    {
        \$fileInfo = pathinfo(\$this->filename);
        \$timedFilename = str_replace(
            array('{filename}', '{date}'),
            array(\$fileInfo['filename'], date(\$this->dateFormat)),
            \$fileInfo['dirname'] . '/' . \$this->filenameFormat
        );

        if (!empty(\$fileInfo['extension'])) {
            \$timedFilename .= '.'.\$fileInfo['extension'];
        }

        return \$timedFilename;
    }

    protected function getGlobPattern()
    {
        \$fileInfo = pathinfo(\$this->filename);
        \$glob = str_replace(
            array('{filename}', '{date}'),
            array(\$fileInfo['filename'], '[0-9][0-9][0-9][0-9]*'),
            \$fileInfo['dirname'] . '/' . \$this->filenameFormat
        );
        if (!empty(\$fileInfo['extension'])) {
            \$glob .= '.'.\$fileInfo['extension'];
        }

        return \$glob;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php");
    }
}
