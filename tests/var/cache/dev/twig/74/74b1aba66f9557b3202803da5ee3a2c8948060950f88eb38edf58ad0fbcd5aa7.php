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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php */
class __TwigTemplate_8ea99304b3d9a1e383a6a94d763e3d88e33856b10a65d3332011ecb83af016b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

use Doctrine\\Common\\Cache\\Cache;
use ReflectionClass;

/**
 * A cache aware annotation reader.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
final class CachedReader implements Reader
{
    /**
     * @var Reader
     */
    private \$delegate;

    /**
     * @var Cache
     */
    private \$cache;

    /**
     * @var boolean
     */
    private \$debug;

    /**
     * @var array
     */
    private \$loadedAnnotations = [];

    /**
     * Constructor.
     *
     * @param Reader \$reader
     * @param Cache  \$cache
     * @param bool   \$debug
     */
    public function __construct(Reader \$reader, Cache \$cache, \$debug = false)
    {
        \$this->delegate = \$reader;
        \$this->cache = \$cache;
        \$this->debug = (boolean) \$debug;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(ReflectionClass \$class)
    {
        \$cacheKey = \$class->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getClassAnnotations(\$class);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(ReflectionClass \$class, \$annotationName)
    {
        foreach (\$this->getClassAnnotations(\$class) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        \$class = \$property->getDeclaringClass();
        \$cacheKey = \$class->getName().'\$'.\$property->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getPropertyAnnotations(\$property);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName)
    {
        foreach (\$this->getPropertyAnnotations(\$property) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        \$class = \$method->getDeclaringClass();
        \$cacheKey = \$class->getName().'#'.\$method->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getMethodAnnotations(\$method);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName)
    {
        foreach (\$this->getMethodAnnotations(\$method) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * Clears loaded annotations.
     *
     * @return void
     */
    public function clearLoadedAnnotations()
    {
        \$this->loadedAnnotations = [];
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string          \$cacheKey The cache key.
     * @param ReflectionClass \$class    The related class.
     *
     * @return mixed The cached value or false when the value is not in cache.
     */
    private function fetchFromCache(\$cacheKey, ReflectionClass \$class)
    {
        if ((\$data = \$this->cache->fetch(\$cacheKey)) !== false) {
            if (!\$this->debug || \$this->isCacheFresh(\$cacheKey, \$class)) {
                return \$data;
            }
        }

        return false;
    }

    /**
     * Saves a value to the cache.
     *
     * @param string \$cacheKey The cache key.
     * @param mixed  \$value    The value.
     *
     * @return void
     */
    private function saveToCache(\$cacheKey, \$value)
    {
        \$this->cache->save(\$cacheKey, \$value);
        if (\$this->debug) {
            \$this->cache->save('[C]'.\$cacheKey, time());
        }
    }

    /**
     * Checks if the cache is fresh.
     *
     * @param string           \$cacheKey
     * @param ReflectionClass \$class
     *
     * @return boolean
     */
    private function isCacheFresh(\$cacheKey, ReflectionClass \$class)
    {
        if (null === \$lastModification = \$this->getLastModification(\$class)) {
            return true;
        }

        return \$this->cache->fetch('[C]'.\$cacheKey) >= \$lastModification;
    }

    /**
     * Returns the time the class was last modified, testing traits and parents
     *
     * @param ReflectionClass \$class
     * @return int
     */
    private function getLastModification(ReflectionClass \$class)
    {
        \$filename = \$class->getFileName();
        \$parent   = \$class->getParentClass();

        return max(array_merge(
            [\$filename ? filemtime(\$filename) : 0],
            array_map([\$this, 'getTraitLastModificationTime'], \$class->getTraits()),
            array_map([\$this, 'getLastModification'], \$class->getInterfaces()),
            \$parent ? [\$this->getLastModification(\$parent)] : []
        ));
    }

    /**
     * @param ReflectionClass \$reflectionTrait
     * @return int
     */
    private function getTraitLastModificationTime(ReflectionClass \$reflectionTrait)
    {
        \$fileName = \$reflectionTrait->getFileName();

        return max(array_merge(
            [\$fileName ? filemtime(\$fileName) : 0],
            array_map([\$this, 'getTraitLastModificationTime'], \$reflectionTrait->getTraits())
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\Common\\Annotations;

use Doctrine\\Common\\Cache\\Cache;
use ReflectionClass;

/**
 * A cache aware annotation reader.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
final class CachedReader implements Reader
{
    /**
     * @var Reader
     */
    private \$delegate;

    /**
     * @var Cache
     */
    private \$cache;

    /**
     * @var boolean
     */
    private \$debug;

    /**
     * @var array
     */
    private \$loadedAnnotations = [];

    /**
     * Constructor.
     *
     * @param Reader \$reader
     * @param Cache  \$cache
     * @param bool   \$debug
     */
    public function __construct(Reader \$reader, Cache \$cache, \$debug = false)
    {
        \$this->delegate = \$reader;
        \$this->cache = \$cache;
        \$this->debug = (boolean) \$debug;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotations(ReflectionClass \$class)
    {
        \$cacheKey = \$class->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getClassAnnotations(\$class);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getClassAnnotation(ReflectionClass \$class, \$annotationName)
    {
        foreach (\$this->getClassAnnotations(\$class) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotations(\\ReflectionProperty \$property)
    {
        \$class = \$property->getDeclaringClass();
        \$cacheKey = \$class->getName().'\$'.\$property->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getPropertyAnnotations(\$property);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName)
    {
        foreach (\$this->getPropertyAnnotations(\$property) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotations(\\ReflectionMethod \$method)
    {
        \$class = \$method->getDeclaringClass();
        \$cacheKey = \$class->getName().'#'.\$method->getName();

        if (isset(\$this->loadedAnnotations[\$cacheKey])) {
            return \$this->loadedAnnotations[\$cacheKey];
        }

        if (false === (\$annots = \$this->fetchFromCache(\$cacheKey, \$class))) {
            \$annots = \$this->delegate->getMethodAnnotations(\$method);
            \$this->saveToCache(\$cacheKey, \$annots);
        }

        return \$this->loadedAnnotations[\$cacheKey] = \$annots;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName)
    {
        foreach (\$this->getMethodAnnotations(\$method) as \$annot) {
            if (\$annot instanceof \$annotationName) {
                return \$annot;
            }
        }

        return null;
    }

    /**
     * Clears loaded annotations.
     *
     * @return void
     */
    public function clearLoadedAnnotations()
    {
        \$this->loadedAnnotations = [];
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string          \$cacheKey The cache key.
     * @param ReflectionClass \$class    The related class.
     *
     * @return mixed The cached value or false when the value is not in cache.
     */
    private function fetchFromCache(\$cacheKey, ReflectionClass \$class)
    {
        if ((\$data = \$this->cache->fetch(\$cacheKey)) !== false) {
            if (!\$this->debug || \$this->isCacheFresh(\$cacheKey, \$class)) {
                return \$data;
            }
        }

        return false;
    }

    /**
     * Saves a value to the cache.
     *
     * @param string \$cacheKey The cache key.
     * @param mixed  \$value    The value.
     *
     * @return void
     */
    private function saveToCache(\$cacheKey, \$value)
    {
        \$this->cache->save(\$cacheKey, \$value);
        if (\$this->debug) {
            \$this->cache->save('[C]'.\$cacheKey, time());
        }
    }

    /**
     * Checks if the cache is fresh.
     *
     * @param string           \$cacheKey
     * @param ReflectionClass \$class
     *
     * @return boolean
     */
    private function isCacheFresh(\$cacheKey, ReflectionClass \$class)
    {
        if (null === \$lastModification = \$this->getLastModification(\$class)) {
            return true;
        }

        return \$this->cache->fetch('[C]'.\$cacheKey) >= \$lastModification;
    }

    /**
     * Returns the time the class was last modified, testing traits and parents
     *
     * @param ReflectionClass \$class
     * @return int
     */
    private function getLastModification(ReflectionClass \$class)
    {
        \$filename = \$class->getFileName();
        \$parent   = \$class->getParentClass();

        return max(array_merge(
            [\$filename ? filemtime(\$filename) : 0],
            array_map([\$this, 'getTraitLastModificationTime'], \$class->getTraits()),
            array_map([\$this, 'getLastModification'], \$class->getInterfaces()),
            \$parent ? [\$this->getLastModification(\$parent)] : []
        ));
    }

    /**
     * @param ReflectionClass \$reflectionTrait
     * @return int
     */
    private function getTraitLastModificationTime(ReflectionClass \$reflectionTrait)
    {
        \$fileName = \$reflectionTrait->getFileName();

        return max(array_merge(
            [\$fileName ? filemtime(\$fileName) : 0],
            array_map([\$this, 'getTraitLastModificationTime'], \$reflectionTrait->getTraits())
        ));
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php");
    }
}
