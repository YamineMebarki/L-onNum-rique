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

/* vendor/symfony/http-foundation/Session/Storage/MetadataBag.php */
class __TwigTemplate_a26450ff33d8385020742e0286fd05437f743e64f2c62bab0d7c6b71b547f2e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MetadataBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/MetadataBag.php"));

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
 * Metadata container.
 *
 * Adds metadata to the session.
 *
 * @author Drak <drak@zikula.org>
 */
class MetadataBag implements SessionBagInterface
{
    const CREATED = 'c';
    const UPDATED = 'u';
    const LIFETIME = 'l';

    /**
     * @var string
     */
    private \$name = '__metadata';

    /**
     * @var string
     */
    private \$storageKey;

    /**
     * @var array
     */
    protected \$meta = [self::CREATED => 0, self::UPDATED => 0, self::LIFETIME => 0];

    /**
     * Unix timestamp.
     *
     * @var int
     */
    private \$lastUsed;

    /**
     * @var int
     */
    private \$updateThreshold;

    /**
     * @param string \$storageKey      The key used to store bag in the session
     * @param int    \$updateThreshold The time to wait between two UPDATED updates
     */
    public function __construct(string \$storageKey = '_sf2_meta', int \$updateThreshold = 0)
    {
        \$this->storageKey = \$storageKey;
        \$this->updateThreshold = \$updateThreshold;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array)
    {
        \$this->meta = &\$array;

        if (isset(\$array[self::CREATED])) {
            \$this->lastUsed = \$this->meta[self::UPDATED];

            \$timeStamp = time();
            if (\$timeStamp - \$array[self::UPDATED] >= \$this->updateThreshold) {
                \$this->meta[self::UPDATED] = \$timeStamp;
            }
        } else {
            \$this->stampCreated();
        }
    }

    /**
     * Gets the lifetime that the session cookie was set with.
     *
     * @return int
     */
    public function getLifetime()
    {
        return \$this->meta[self::LIFETIME];
    }

    /**
     * Stamps a new session's metadata.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     */
    public function stampNew(\$lifetime = null)
    {
        \$this->stampCreated(\$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * Gets the created timestamp metadata.
     *
     * @return int Unix timestamp
     */
    public function getCreated()
    {
        return \$this->meta[self::CREATED];
    }

    /**
     * Gets the last used metadata.
     *
     * @return int Unix timestamp
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // nothing to do
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets name.
     *
     * @param string \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    private function stampCreated(\$lifetime = null)
    {
        \$timeStamp = time();
        \$this->meta[self::CREATED] = \$this->meta[self::UPDATED] = \$this->lastUsed = \$timeStamp;
        \$this->meta[self::LIFETIME] = (null === \$lifetime) ? ini_get('session.cookie_lifetime') : \$lifetime;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/MetadataBag.php";
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
 * Metadata container.
 *
 * Adds metadata to the session.
 *
 * @author Drak <drak@zikula.org>
 */
class MetadataBag implements SessionBagInterface
{
    const CREATED = 'c';
    const UPDATED = 'u';
    const LIFETIME = 'l';

    /**
     * @var string
     */
    private \$name = '__metadata';

    /**
     * @var string
     */
    private \$storageKey;

    /**
     * @var array
     */
    protected \$meta = [self::CREATED => 0, self::UPDATED => 0, self::LIFETIME => 0];

    /**
     * Unix timestamp.
     *
     * @var int
     */
    private \$lastUsed;

    /**
     * @var int
     */
    private \$updateThreshold;

    /**
     * @param string \$storageKey      The key used to store bag in the session
     * @param int    \$updateThreshold The time to wait between two UPDATED updates
     */
    public function __construct(string \$storageKey = '_sf2_meta', int \$updateThreshold = 0)
    {
        \$this->storageKey = \$storageKey;
        \$this->updateThreshold = \$updateThreshold;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$array)
    {
        \$this->meta = &\$array;

        if (isset(\$array[self::CREATED])) {
            \$this->lastUsed = \$this->meta[self::UPDATED];

            \$timeStamp = time();
            if (\$timeStamp - \$array[self::UPDATED] >= \$this->updateThreshold) {
                \$this->meta[self::UPDATED] = \$timeStamp;
            }
        } else {
            \$this->stampCreated();
        }
    }

    /**
     * Gets the lifetime that the session cookie was set with.
     *
     * @return int
     */
    public function getLifetime()
    {
        return \$this->meta[self::LIFETIME];
    }

    /**
     * Stamps a new session's metadata.
     *
     * @param int \$lifetime Sets the cookie lifetime for the session cookie. A null value
     *                      will leave the system settings unchanged, 0 sets the cookie
     *                      to expire with browser session. Time is in seconds, and is
     *                      not a Unix timestamp.
     */
    public function stampNew(\$lifetime = null)
    {
        \$this->stampCreated(\$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * Gets the created timestamp metadata.
     *
     * @return int Unix timestamp
     */
    public function getCreated()
    {
        return \$this->meta[self::CREATED];
    }

    /**
     * Gets the last used metadata.
     *
     * @return int Unix timestamp
     */
    public function getLastUsed()
    {
        return \$this->lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // nothing to do
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Sets name.
     *
     * @param string \$name
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    private function stampCreated(\$lifetime = null)
    {
        \$timeStamp = time();
        \$this->meta[self::CREATED] = \$this->meta[self::UPDATED] = \$this->lastUsed = \$timeStamp;
        \$this->meta[self::LIFETIME] = (null === \$lifetime) ? ini_get('session.cookie_lifetime') : \$lifetime;
    }
}
", "vendor/symfony/http-foundation/Session/Storage/MetadataBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php");
    }
}
