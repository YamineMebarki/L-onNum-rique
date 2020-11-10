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

/* vendor/symfony/http-foundation/Session/Session.php */
class __TwigTemplate_be6258955f7ba8bbe0201b795b62e682e6302073c6b8309d4f259b82282f8b27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Session.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Session.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Drak <drak@zikula.org>
 */
class Session implements SessionInterface, \\IteratorAggregate, \\Countable
{
    protected \$storage;

    private \$flashName;
    private \$attributeName;
    private \$data = [];
    private \$usageIndex = 0;

    /**
     * @param SessionStorageInterface \$storage    A SessionStorageInterface instance
     * @param AttributeBagInterface   \$attributes An AttributeBagInterface instance, (defaults null for default AttributeBag)
     * @param FlashBagInterface       \$flashes    A FlashBagInterface instance (defaults null for default FlashBag)
     */
    public function __construct(SessionStorageInterface \$storage = null, AttributeBagInterface \$attributes = null, FlashBagInterface \$flashes = null)
    {
        \$this->storage = \$storage ?: new NativeSessionStorage();

        \$attributes = \$attributes ?: new AttributeBag();
        \$this->attributeName = \$attributes->getName();
        \$this->registerBag(\$attributes);

        \$flashes = \$flashes ?: new FlashBag();
        \$this->flashName = \$flashes->getName();
        \$this->registerBag(\$flashes);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return \$this->storage->start();
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \$this->getAttributeBag()->has(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        return \$this->getAttributeBag()->get(\$name, \$default);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$this->getAttributeBag()->set(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->getAttributeBag()->all();
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$attributes)
    {
        \$this->getAttributeBag()->replace(\$attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        return \$this->getAttributeBag()->remove(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->getAttributeBag()->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted()
    {
        return \$this->storage->isStarted();
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->getAttributeBag()->all());
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public function count()
    {
        return \\count(\$this->getAttributeBag()->all());
    }

    /**
     * @return int
     *
     * @internal
     */
    public function getUsageIndex()
    {
        return \$this->usageIndex;
    }

    /**
     * @return bool
     *
     * @internal
     */
    public function isEmpty()
    {
        if (\$this->isStarted()) {
            ++\$this->usageIndex;
        }
        foreach (\$this->data as &\$data) {
            if (!empty(\$data)) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate(\$lifetime = null)
    {
        \$this->storage->clear();

        return \$this->migrate(true, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function migrate(\$destroy = false, \$lifetime = null)
    {
        return \$this->storage->regenerate(\$destroy, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        \$this->storage->save();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->storage->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function setId(\$id)
    {
        if (\$this->storage->getId() !== \$id) {
            \$this->storage->setId(\$id);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->storage->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName(\$name)
    {
        \$this->storage->setName(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataBag()
    {
        ++\$this->usageIndex;

        return \$this->storage->getMetadataBag();
    }

    /**
     * {@inheritdoc}
     */
    public function registerBag(SessionBagInterface \$bag)
    {
        \$this->storage->registerBag(new SessionBagProxy(\$bag, \$this->data, \$this->usageIndex));
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(\$name)
    {
        \$bag = \$this->storage->getBag(\$name);

        return method_exists(\$bag, 'getBag') ? \$bag->getBag() : \$bag;
    }

    /**
     * Gets the flashbag interface.
     *
     * @return FlashBagInterface
     */
    public function getFlashBag()
    {
        return \$this->getBag(\$this->flashName);
    }

    /**
     * Gets the attributebag interface.
     *
     * Note that this method was added to help with IDE autocompletion.
     *
     * @return AttributeBagInterface
     */
    private function getAttributeBag()
    {
        return \$this->getBag(\$this->attributeName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Session.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag;
use Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Drak <drak@zikula.org>
 */
class Session implements SessionInterface, \\IteratorAggregate, \\Countable
{
    protected \$storage;

    private \$flashName;
    private \$attributeName;
    private \$data = [];
    private \$usageIndex = 0;

    /**
     * @param SessionStorageInterface \$storage    A SessionStorageInterface instance
     * @param AttributeBagInterface   \$attributes An AttributeBagInterface instance, (defaults null for default AttributeBag)
     * @param FlashBagInterface       \$flashes    A FlashBagInterface instance (defaults null for default FlashBag)
     */
    public function __construct(SessionStorageInterface \$storage = null, AttributeBagInterface \$attributes = null, FlashBagInterface \$flashes = null)
    {
        \$this->storage = \$storage ?: new NativeSessionStorage();

        \$attributes = \$attributes ?: new AttributeBag();
        \$this->attributeName = \$attributes->getName();
        \$this->registerBag(\$attributes);

        \$flashes = \$flashes ?: new FlashBag();
        \$this->flashName = \$flashes->getName();
        \$this->registerBag(\$flashes);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return \$this->storage->start();
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \$this->getAttributeBag()->has(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        return \$this->getAttributeBag()->get(\$name, \$default);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$this->getAttributeBag()->set(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->getAttributeBag()->all();
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$attributes)
    {
        \$this->getAttributeBag()->replace(\$attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        return \$this->getAttributeBag()->remove(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->getAttributeBag()->clear();
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted()
    {
        return \$this->storage->isStarted();
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->getAttributeBag()->all());
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public function count()
    {
        return \\count(\$this->getAttributeBag()->all());
    }

    /**
     * @return int
     *
     * @internal
     */
    public function getUsageIndex()
    {
        return \$this->usageIndex;
    }

    /**
     * @return bool
     *
     * @internal
     */
    public function isEmpty()
    {
        if (\$this->isStarted()) {
            ++\$this->usageIndex;
        }
        foreach (\$this->data as &\$data) {
            if (!empty(\$data)) {
                return false;
            }
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate(\$lifetime = null)
    {
        \$this->storage->clear();

        return \$this->migrate(true, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function migrate(\$destroy = false, \$lifetime = null)
    {
        return \$this->storage->regenerate(\$destroy, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        \$this->storage->save();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return \$this->storage->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function setId(\$id)
    {
        if (\$this->storage->getId() !== \$id) {
            \$this->storage->setId(\$id);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->storage->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName(\$name)
    {
        \$this->storage->setName(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataBag()
    {
        ++\$this->usageIndex;

        return \$this->storage->getMetadataBag();
    }

    /**
     * {@inheritdoc}
     */
    public function registerBag(SessionBagInterface \$bag)
    {
        \$this->storage->registerBag(new SessionBagProxy(\$bag, \$this->data, \$this->usageIndex));
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(\$name)
    {
        \$bag = \$this->storage->getBag(\$name);

        return method_exists(\$bag, 'getBag') ? \$bag->getBag() : \$bag;
    }

    /**
     * Gets the flashbag interface.
     *
     * @return FlashBagInterface
     */
    public function getFlashBag()
    {
        return \$this->getBag(\$this->flashName);
    }

    /**
     * Gets the attributebag interface.
     *
     * Note that this method was added to help with IDE autocompletion.
     *
     * @return AttributeBagInterface
     */
    private function getAttributeBag()
    {
        return \$this->getBag(\$this->attributeName);
    }
}
", "vendor/symfony/http-foundation/Session/Session.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Session.php");
    }
}
