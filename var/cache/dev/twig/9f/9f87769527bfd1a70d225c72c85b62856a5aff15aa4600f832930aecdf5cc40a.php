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

/* vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php */
class __TwigTemplate_16248b3b056bd94e9e50e3fcf3089a7361d8f743b448f82d971026549022353d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

/**
 * MockFileSessionStorage is used to mock sessions for
 * functional testing when done in a single PHP process.
 *
 * No PHP session is actually started since a session can be initialized
 * and shutdown only once per PHP execution cycle and this class does
 * not pollute any session related globals, including session_*() functions
 * or session.* PHP ini directives.
 *
 * @author Drak <drak@zikula.org>
 */
class MockFileSessionStorage extends MockArraySessionStorage
{
    private \$savePath;

    /**
     * @param string      \$savePath Path of directory to save session files
     * @param string      \$name     Session name
     * @param MetadataBag \$metaBag  MetadataBag instance
     */
    public function __construct(string \$savePath = null, string \$name = 'MOCKSESSID', MetadataBag \$metaBag = null)
    {
        if (null === \$savePath) {
            \$savePath = sys_get_temp_dir();
        }

        if (!is_dir(\$savePath) && !@mkdir(\$savePath, 0777, true) && !is_dir(\$savePath)) {
            throw new \\RuntimeException(sprintf('Session Storage was not able to create directory \"%s\"', \$savePath));
        }

        \$this->savePath = \$savePath;

        parent::__construct(\$name, \$metaBag);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        if (!\$this->id) {
            \$this->id = \$this->generateId();
        }

        \$this->read();

        \$this->started = true;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function regenerate(\$destroy = false, \$lifetime = null)
    {
        if (!\$this->started) {
            \$this->start();
        }

        if (\$destroy) {
            \$this->destroy();
        }

        return parent::regenerate(\$destroy, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        if (!\$this->started) {
            throw new \\RuntimeException('Trying to save a session that was not started yet or was already closed');
        }

        \$data = \$this->data;

        foreach (\$this->bags as \$bag) {
            if (empty(\$data[\$key = \$bag->getStorageKey()])) {
                unset(\$data[\$key]);
            }
        }
        if ([\$key = \$this->metadataBag->getStorageKey()] === array_keys(\$data)) {
            unset(\$data[\$key]);
        }

        try {
            if (\$data) {
                file_put_contents(\$this->getFilePath(), serialize(\$data));
            } else {
                \$this->destroy();
            }
        } finally {
            \$this->data = \$data;
        }

        // this is needed for Silex, where the session object is re-used across requests
        // in functional tests. In Symfony, the container is rebooted, so we don't have
        // this issue
        \$this->started = false;
    }

    /**
     * Deletes a session from persistent storage.
     * Deliberately leaves session data in memory intact.
     */
    private function destroy()
    {
        if (is_file(\$this->getFilePath())) {
            unlink(\$this->getFilePath());
        }
    }

    /**
     * Calculate path to file.
     *
     * @return string File path
     */
    private function getFilePath()
    {
        return \$this->savePath.'/'.\$this->id.'.mocksess';
    }

    /**
     * Reads session from storage and loads session.
     */
    private function read()
    {
        \$filePath = \$this->getFilePath();
        \$this->data = is_readable(\$filePath) && is_file(\$filePath) ? unserialize(file_get_contents(\$filePath)) : [];

        \$this->loadSession();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage;

/**
 * MockFileSessionStorage is used to mock sessions for
 * functional testing when done in a single PHP process.
 *
 * No PHP session is actually started since a session can be initialized
 * and shutdown only once per PHP execution cycle and this class does
 * not pollute any session related globals, including session_*() functions
 * or session.* PHP ini directives.
 *
 * @author Drak <drak@zikula.org>
 */
class MockFileSessionStorage extends MockArraySessionStorage
{
    private \$savePath;

    /**
     * @param string      \$savePath Path of directory to save session files
     * @param string      \$name     Session name
     * @param MetadataBag \$metaBag  MetadataBag instance
     */
    public function __construct(string \$savePath = null, string \$name = 'MOCKSESSID', MetadataBag \$metaBag = null)
    {
        if (null === \$savePath) {
            \$savePath = sys_get_temp_dir();
        }

        if (!is_dir(\$savePath) && !@mkdir(\$savePath, 0777, true) && !is_dir(\$savePath)) {
            throw new \\RuntimeException(sprintf('Session Storage was not able to create directory \"%s\"', \$savePath));
        }

        \$this->savePath = \$savePath;

        parent::__construct(\$name, \$metaBag);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        if (!\$this->id) {
            \$this->id = \$this->generateId();
        }

        \$this->read();

        \$this->started = true;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function regenerate(\$destroy = false, \$lifetime = null)
    {
        if (!\$this->started) {
            \$this->start();
        }

        if (\$destroy) {
            \$this->destroy();
        }

        return parent::regenerate(\$destroy, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        if (!\$this->started) {
            throw new \\RuntimeException('Trying to save a session that was not started yet or was already closed');
        }

        \$data = \$this->data;

        foreach (\$this->bags as \$bag) {
            if (empty(\$data[\$key = \$bag->getStorageKey()])) {
                unset(\$data[\$key]);
            }
        }
        if ([\$key = \$this->metadataBag->getStorageKey()] === array_keys(\$data)) {
            unset(\$data[\$key]);
        }

        try {
            if (\$data) {
                file_put_contents(\$this->getFilePath(), serialize(\$data));
            } else {
                \$this->destroy();
            }
        } finally {
            \$this->data = \$data;
        }

        // this is needed for Silex, where the session object is re-used across requests
        // in functional tests. In Symfony, the container is rebooted, so we don't have
        // this issue
        \$this->started = false;
    }

    /**
     * Deletes a session from persistent storage.
     * Deliberately leaves session data in memory intact.
     */
    private function destroy()
    {
        if (is_file(\$this->getFilePath())) {
            unlink(\$this->getFilePath());
        }
    }

    /**
     * Calculate path to file.
     *
     * @return string File path
     */
    private function getFilePath()
    {
        return \$this->savePath.'/'.\$this->id.'.mocksess';
    }

    /**
     * Reads session from storage and loads session.
     */
    private function read()
    {
        \$filePath = \$this->getFilePath();
        \$this->data = is_readable(\$filePath) && is_file(\$filePath) ? unserialize(file_get_contents(\$filePath)) : [];

        \$this->loadSession();
    }
}
", "vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php");
    }
}
