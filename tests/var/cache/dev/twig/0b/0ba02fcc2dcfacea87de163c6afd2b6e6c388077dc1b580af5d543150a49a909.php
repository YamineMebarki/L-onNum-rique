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

/* vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php */
class __TwigTemplate_c98b3f3a7ac41a0edaab7d3e23e95dc4ff8bcefae0955d8d2df8b3a0fb36db9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php"));

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

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * MockArraySessionStorage mocks the session for unit tests.
 *
 * No PHP session is actually started since a session can be initialized
 * and shutdown only once per PHP execution cycle.
 *
 * When doing functional testing, you should use MockFileSessionStorage instead.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Drak <drak@zikula.org>
 */
class MockArraySessionStorage implements SessionStorageInterface
{
    /**
     * @var string
     */
    protected \$id = '';

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var bool
     */
    protected \$started = false;

    /**
     * @var bool
     */
    protected \$closed = false;

    /**
     * @var array
     */
    protected \$data = [];

    /**
     * @var MetadataBag
     */
    protected \$metadataBag;

    /**
     * @var array|SessionBagInterface[]
     */
    protected \$bags = [];

    public function __construct(string \$name = 'MOCKSESSID', MetadataBag \$metaBag = null)
    {
        \$this->name = \$name;
        \$this->setMetadataBag(\$metaBag);
    }

    public function setSessionData(array \$array)
    {
        \$this->data = \$array;
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        if (empty(\$this->id)) {
            \$this->id = \$this->generateId();
        }

        \$this->loadSession();

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

        \$this->metadataBag->stampNew(\$lifetime);
        \$this->id = \$this->generateId();

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(\$id)
    {
        if (\$this->started) {
            throw new \\LogicException('Cannot set session ID after the session has started.');
        }

        \$this->id = \$id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        if (!\$this->started || \$this->closed) {
            throw new \\RuntimeException('Trying to save a session that was not started yet or was already closed');
        }
        // nothing to do since we don't persist the session data
        \$this->closed = false;
        \$this->started = false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // clear out the bags
        foreach (\$this->bags as \$bag) {
            \$bag->clear();
        }

        // clear out the session
        \$this->data = [];

        // reconnect the bags to the session
        \$this->loadSession();
    }

    /**
     * {@inheritdoc}
     */
    public function registerBag(SessionBagInterface \$bag)
    {
        \$this->bags[\$bag->getName()] = \$bag;
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(\$name)
    {
        if (!isset(\$this->bags[\$name])) {
            throw new \\InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', \$name));
        }

        if (!\$this->started) {
            \$this->start();
        }

        return \$this->bags[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted()
    {
        return \$this->started;
    }

    public function setMetadataBag(MetadataBag \$bag = null)
    {
        if (null === \$bag) {
            \$bag = new MetadataBag();
        }

        \$this->metadataBag = \$bag;
    }

    /**
     * Gets the MetadataBag.
     *
     * @return MetadataBag
     */
    public function getMetadataBag()
    {
        return \$this->metadataBag;
    }

    /**
     * Generates a session ID.
     *
     * This doesn't need to be particularly cryptographically secure since this is just
     * a mock.
     *
     * @return string
     */
    protected function generateId()
    {
        return hash('sha256', uniqid('ss_mock_', true));
    }

    protected function loadSession()
    {
        \$bags = array_merge(\$this->bags, [\$this->metadataBag]);

        foreach (\$bags as \$bag) {
            \$key = \$bag->getStorageKey();
            \$this->data[\$key] = isset(\$this->data[\$key]) ? \$this->data[\$key] : [];
            \$bag->initialize(\$this->data[\$key]);
        }

        \$this->started = true;
        \$this->closed = false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php";
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

use Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface;

/**
 * MockArraySessionStorage mocks the session for unit tests.
 *
 * No PHP session is actually started since a session can be initialized
 * and shutdown only once per PHP execution cycle.
 *
 * When doing functional testing, you should use MockFileSessionStorage instead.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Drak <drak@zikula.org>
 */
class MockArraySessionStorage implements SessionStorageInterface
{
    /**
     * @var string
     */
    protected \$id = '';

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var bool
     */
    protected \$started = false;

    /**
     * @var bool
     */
    protected \$closed = false;

    /**
     * @var array
     */
    protected \$data = [];

    /**
     * @var MetadataBag
     */
    protected \$metadataBag;

    /**
     * @var array|SessionBagInterface[]
     */
    protected \$bags = [];

    public function __construct(string \$name = 'MOCKSESSID', MetadataBag \$metaBag = null)
    {
        \$this->name = \$name;
        \$this->setMetadataBag(\$metaBag);
    }

    public function setSessionData(array \$array)
    {
        \$this->data = \$array;
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        if (\$this->started) {
            return true;
        }

        if (empty(\$this->id)) {
            \$this->id = \$this->generateId();
        }

        \$this->loadSession();

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

        \$this->metadataBag->stampNew(\$lifetime);
        \$this->id = \$this->generateId();

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(\$id)
    {
        if (\$this->started) {
            throw new \\LogicException('Cannot set session ID after the session has started.');
        }

        \$this->id = \$id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        if (!\$this->started || \$this->closed) {
            throw new \\RuntimeException('Trying to save a session that was not started yet or was already closed');
        }
        // nothing to do since we don't persist the session data
        \$this->closed = false;
        \$this->started = false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // clear out the bags
        foreach (\$this->bags as \$bag) {
            \$bag->clear();
        }

        // clear out the session
        \$this->data = [];

        // reconnect the bags to the session
        \$this->loadSession();
    }

    /**
     * {@inheritdoc}
     */
    public function registerBag(SessionBagInterface \$bag)
    {
        \$this->bags[\$bag->getName()] = \$bag;
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(\$name)
    {
        if (!isset(\$this->bags[\$name])) {
            throw new \\InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', \$name));
        }

        if (!\$this->started) {
            \$this->start();
        }

        return \$this->bags[\$name];
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted()
    {
        return \$this->started;
    }

    public function setMetadataBag(MetadataBag \$bag = null)
    {
        if (null === \$bag) {
            \$bag = new MetadataBag();
        }

        \$this->metadataBag = \$bag;
    }

    /**
     * Gets the MetadataBag.
     *
     * @return MetadataBag
     */
    public function getMetadataBag()
    {
        return \$this->metadataBag;
    }

    /**
     * Generates a session ID.
     *
     * This doesn't need to be particularly cryptographically secure since this is just
     * a mock.
     *
     * @return string
     */
    protected function generateId()
    {
        return hash('sha256', uniqid('ss_mock_', true));
    }

    protected function loadSession()
    {
        \$bags = array_merge(\$this->bags, [\$this->metadataBag]);

        foreach (\$bags as \$bag) {
            \$key = \$bag->getStorageKey();
            \$this->data[\$key] = isset(\$this->data[\$key]) ? \$this->data[\$key] : [];
            \$bag->initialize(\$this->data[\$key]);
        }

        \$this->started = true;
        \$this->closed = false;
    }
}
", "vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php");
    }
}
