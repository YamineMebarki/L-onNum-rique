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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php */
class __TwigTemplate_634fad6a1c1fc8886a7e5bf4bfad3ee84c82f3fcb3c1362287621fec516911f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Riak\\Bucket;
use Riak\\Exception;
use Riak\\Input;
use Riak\\Object;
use function count;
use function serialize;
use function time;
use function unserialize;

/**
 * Riak cache provider.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class RiakCache extends CacheProvider
{
    public const EXPIRES_HEADER = 'X-Riak-Meta-Expires';

    /** @var Bucket */
    private \$bucket;

    /**
     * Sets the riak bucket instance to use.
     */
    public function __construct(Bucket \$bucket)
    {
        \$this->bucket = \$bucket;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        try {
            \$response = \$this->bucket->get(\$id);

            // No objects found
            if (! \$response->hasObject()) {
                return false;
            }

            // Check for attempted siblings
            \$object = (\$response->hasSiblings())
                ? \$this->resolveConflict(\$id, \$response->getVClock(), \$response->getObjectList())
                : \$response->getFirstObject();

            // Check for expired object
            if (\$this->isExpired(\$object)) {
                \$this->bucket->delete(\$object);

                return false;
            }

            return unserialize(\$object->getContent());
        } catch (Exception\\RiakException \$e) {
            // Covers:
            // - Riak\\ConnectionException
            // - Riak\\CommunicationException
            // - Riak\\UnexpectedResponseException
            // - Riak\\NotFoundException
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        try {
            // We only need the HEAD, not the entire object
            \$input = new Input\\GetInput();

            \$input->setReturnHead(true);

            \$response = \$this->bucket->get(\$id, \$input);

            // No objects found
            if (! \$response->hasObject()) {
                return false;
            }

            \$object = \$response->getFirstObject();

            // Check for expired object
            if (\$this->isExpired(\$object)) {
                \$this->bucket->delete(\$object);

                return false;
            }

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        try {
            \$object = new Object(\$id);

            \$object->setContent(serialize(\$data));

            if (\$lifeTime > 0) {
                \$object->addMetadata(self::EXPIRES_HEADER, (string) (time() + \$lifeTime));
            }

            \$this->bucket->put(\$object);

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        try {
            \$this->bucket->delete(\$id);

            return true;
        } catch (Exception\\BadArgumentsException \$e) {
            // Key did not exist on cluster already
        } catch (Exception\\RiakException \$e) {
            // Covers:
            // - Riak\\Exception\\ConnectionException
            // - Riak\\Exception\\CommunicationException
            // - Riak\\Exception\\UnexpectedResponseException
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        try {
            \$keyList = \$this->bucket->getKeyList();

            foreach (\$keyList as \$key) {
                \$this->bucket->delete(\$key);
            }

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        // Only exposed through HTTP stats API, not Protocol Buffers API
        return null;
    }

    /**
     * Check if a given Riak Object have expired.
     */
    private function isExpired(Object \$object) : bool
    {
        \$metadataMap = \$object->getMetadataMap();

        return isset(\$metadataMap[self::EXPIRES_HEADER])
            && \$metadataMap[self::EXPIRES_HEADER] < time();
    }

    /**
     * On-read conflict resolution. Applied approach here is last write wins.
     * Specific needs may override this method to apply alternate conflict resolutions.
     *
     * {@internal Riak does not attempt to resolve a write conflict, and store
     * it as sibling of conflicted one. By following this approach, it is up to
     * the next read to resolve the conflict. When this happens, your fetched
     * object will have a list of siblings (read as a list of objects).
     * In our specific case, we do not care about the intermediate ones since
     * they are all the same read from storage, and we do apply a last sibling
     * (last write) wins logic.
     * If by any means our resolution generates another conflict, it'll up to
     * next read to properly solve it.}
     *
     * @param string \$id
     * @param string \$vClock
     * @param array  \$objectList
     *
     * @return Object
     */
    protected function resolveConflict(\$id, \$vClock, array \$objectList)
    {
        // Our approach here is last-write wins
        \$winner = \$objectList[count(\$objectList) - 1];

        \$putInput = new Input\\PutInput();
        \$putInput->setVClock(\$vClock);

        \$mergedObject = new Object(\$id);
        \$mergedObject->setContent(\$winner->getContent());

        \$this->bucket->put(\$mergedObject, \$putInput);

        return \$mergedObject;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Riak\\Bucket;
use Riak\\Exception;
use Riak\\Input;
use Riak\\Object;
use function count;
use function serialize;
use function time;
use function unserialize;

/**
 * Riak cache provider.
 *
 * @link   www.doctrine-project.org
 *
 * @deprecated
 */
class RiakCache extends CacheProvider
{
    public const EXPIRES_HEADER = 'X-Riak-Meta-Expires';

    /** @var Bucket */
    private \$bucket;

    /**
     * Sets the riak bucket instance to use.
     */
    public function __construct(Bucket \$bucket)
    {
        \$this->bucket = \$bucket;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        try {
            \$response = \$this->bucket->get(\$id);

            // No objects found
            if (! \$response->hasObject()) {
                return false;
            }

            // Check for attempted siblings
            \$object = (\$response->hasSiblings())
                ? \$this->resolveConflict(\$id, \$response->getVClock(), \$response->getObjectList())
                : \$response->getFirstObject();

            // Check for expired object
            if (\$this->isExpired(\$object)) {
                \$this->bucket->delete(\$object);

                return false;
            }

            return unserialize(\$object->getContent());
        } catch (Exception\\RiakException \$e) {
            // Covers:
            // - Riak\\ConnectionException
            // - Riak\\CommunicationException
            // - Riak\\UnexpectedResponseException
            // - Riak\\NotFoundException
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        try {
            // We only need the HEAD, not the entire object
            \$input = new Input\\GetInput();

            \$input->setReturnHead(true);

            \$response = \$this->bucket->get(\$id, \$input);

            // No objects found
            if (! \$response->hasObject()) {
                return false;
            }

            \$object = \$response->getFirstObject();

            // Check for expired object
            if (\$this->isExpired(\$object)) {
                \$this->bucket->delete(\$object);

                return false;
            }

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        try {
            \$object = new Object(\$id);

            \$object->setContent(serialize(\$data));

            if (\$lifeTime > 0) {
                \$object->addMetadata(self::EXPIRES_HEADER, (string) (time() + \$lifeTime));
            }

            \$this->bucket->put(\$object);

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        try {
            \$this->bucket->delete(\$id);

            return true;
        } catch (Exception\\BadArgumentsException \$e) {
            // Key did not exist on cluster already
        } catch (Exception\\RiakException \$e) {
            // Covers:
            // - Riak\\Exception\\ConnectionException
            // - Riak\\Exception\\CommunicationException
            // - Riak\\Exception\\UnexpectedResponseException
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        try {
            \$keyList = \$this->bucket->getKeyList();

            foreach (\$keyList as \$key) {
                \$this->bucket->delete(\$key);
            }

            return true;
        } catch (Exception\\RiakException \$e) {
            // Do nothing
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        // Only exposed through HTTP stats API, not Protocol Buffers API
        return null;
    }

    /**
     * Check if a given Riak Object have expired.
     */
    private function isExpired(Object \$object) : bool
    {
        \$metadataMap = \$object->getMetadataMap();

        return isset(\$metadataMap[self::EXPIRES_HEADER])
            && \$metadataMap[self::EXPIRES_HEADER] < time();
    }

    /**
     * On-read conflict resolution. Applied approach here is last write wins.
     * Specific needs may override this method to apply alternate conflict resolutions.
     *
     * {@internal Riak does not attempt to resolve a write conflict, and store
     * it as sibling of conflicted one. By following this approach, it is up to
     * the next read to resolve the conflict. When this happens, your fetched
     * object will have a list of siblings (read as a list of objects).
     * In our specific case, we do not care about the intermediate ones since
     * they are all the same read from storage, and we do apply a last sibling
     * (last write) wins logic.
     * If by any means our resolution generates another conflict, it'll up to
     * next read to properly solve it.}
     *
     * @param string \$id
     * @param string \$vClock
     * @param array  \$objectList
     *
     * @return Object
     */
    protected function resolveConflict(\$id, \$vClock, array \$objectList)
    {
        // Our approach here is last-write wins
        \$winner = \$objectList[count(\$objectList) - 1];

        \$putInput = new Input\\PutInput();
        \$putInput->setVClock(\$vClock);

        \$mergedObject = new Object(\$id);
        \$mergedObject->setContent(\$winner->getContent());

        \$this->bucket->put(\$mergedObject, \$putInput);

        return \$mergedObject;
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php");
    }
}
