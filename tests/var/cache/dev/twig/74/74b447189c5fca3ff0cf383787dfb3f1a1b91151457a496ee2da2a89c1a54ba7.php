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

/* vendor/symfony/serializer/Normalizer/DataUriNormalizer.php */
class __TwigTemplate_b286c19c814b9a7164a372bb62216d267ae5342e6acd8cca980f5a65b61eac33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DataUriNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DataUriNormalizer.php"));

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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser;
use Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface as DeprecatedMimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypes;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes an {@see \\SplFileInfo} object to a data URI.
 * Denormalizes a data URI to a {@see \\SplFileObject} object.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DataUriNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    private static \$supportedTypes = [
        \\SplFileInfo::class => true,
        \\SplFileObject::class => true,
        File::class => true,
    ];

    /**
     * @var MimeTypeGuesserInterface|null
     */
    private \$mimeTypeGuesser;

    /**
     * @param MimeTypeGuesserInterface|null \$mimeTypeGuesser
     */
    public function __construct(\$mimeTypeGuesser = null)
    {
        if (\$mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface) {
            @trigger_error(sprintf('Passing a %s to \"%s()\" is deprecated since Symfony 4.3, pass a \"%s\" instead.', DeprecatedMimeTypeGuesserInterface::class, __METHOD__, MimeTypeGuesserInterface::class), E_USER_DEPRECATED);
        } elseif (null === \$mimeTypeGuesser) {
            if (class_exists(MimeTypes::class)) {
                \$mimeTypeGuesser = MimeTypes::getDefault();
            } elseif (class_exists(MimeTypeGuesser::class)) {
                @trigger_error(sprintf('Passing null to \"%s()\" to use a default MIME type guesser without Symfony Mime installed is deprecated since Symfony 4.3. Try running \"composer require symfony/mime\".', __METHOD__), E_USER_DEPRECATED);
                \$mimeTypeGuesser = MimeTypeGuesser::getInstance();
            }
        } elseif (!\$mimeTypeGuesser instanceof MimeTypes) {
            throw new \\TypeError(sprintf('Argument 1 passed to \"%s()\" must be an instance of \"%s\" or null, %s given.', __METHOD__, MimeTypes::class, \\is_object(\$mimeTypeGuesser) ? \\get_class(\$mimeTypeGuesser) : \\gettype(\$mimeTypeGuesser)));
        }

        \$this->mimeTypeGuesser = \$mimeTypeGuesser;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\SplFileInfo) {
            throw new InvalidArgumentException('The object must be an instance of \"\\SplFileInfo\".');
        }

        \$mimeType = \$this->getMimeType(\$object);
        \$splFileObject = \$this->extractSplFileObject(\$object);

        \$data = '';

        \$splFileObject->rewind();
        while (!\$splFileObject->eof()) {
            \$data .= \$splFileObject->fgets();
        }

        if ('text' === explode('/', \$mimeType, 2)[0]) {
            return sprintf('data:%s,%s', \$mimeType, rawurlencode(\$data));
        }

        return sprintf('data:%s;base64,%s', \$mimeType, base64_encode(\$data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\SplFileInfo;
    }

    /**
     * {@inheritdoc}
     *
     * Regex adapted from Brian Grinstead code.
     *
     * @see https://gist.github.com/bgrins/6194623
     *
     * @throws InvalidArgumentException
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (!preg_match('/^data:([a-z0-9][a-z0-9\\!\\#\\\$\\&\\-\\^\\_\\+\\.]{0,126}\\/[a-z0-9][a-z0-9\\!\\#\\\$\\&\\-\\^\\_\\+\\.]{0,126}(;[a-z0-9\\-]+\\=[a-z0-9\\-]+)?)?(;base64)?,[a-z0-9\\!\\\$\\&\\\\\\'\\,\\(\\)\\*\\+\\,\\;\\=\\-\\.\\_\\~\\:\\@\\/\\?\\%\\s]*\\s*\$/i', \$data)) {
            throw new NotNormalizableValueException('The provided \"data:\" URI is not valid.');
        }

        try {
            switch (\$type) {
                case 'Symfony\\Component\\HttpFoundation\\File\\File':
                    return new File(\$data, false);

                case 'SplFileObject':
                case 'SplFileInfo':
                    return new \\SplFileObject(\$data);
            }
        } catch (\\RuntimeException \$exception) {
            throw new NotNormalizableValueException(\$exception->getMessage(), \$exception->getCode(), \$exception);
        }

        throw new InvalidArgumentException(sprintf('The class parameter \"%s\" is not supported. It must be one of \"SplFileInfo\", \"SplFileObject\" or \"Symfony\\Component\\HttpFoundation\\File\\File\".', \$type));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return isset(self::\$supportedTypes[\$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Gets the mime type of the object. Defaults to application/octet-stream.
     *
     * @return string
     */
    private function getMimeType(\\SplFileInfo \$object)
    {
        if (\$object instanceof File) {
            return \$object->getMimeType();
        }

        if (\$this->mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface && \$mimeType = \$this->mimeTypeGuesser->guess(\$object->getPathname())) {
            return \$mimeType;
        }

        if (\$this->mimeTypeGuesser && \$mimeType = \$this->mimeTypeGuesser->guessMimeType(\$object->getPathname())) {
            return \$mimeType;
        }

        return 'application/octet-stream';
    }

    /**
     * Returns the \\SplFileObject instance associated with the given \\SplFileInfo instance.
     *
     * @return \\SplFileObject
     */
    private function extractSplFileObject(\\SplFileInfo \$object)
    {
        if (\$object instanceof \\SplFileObject) {
            return \$object;
        }

        return \$object->openFile();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/DataUriNormalizer.php";
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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser;
use Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface as DeprecatedMimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypeGuesserInterface;
use Symfony\\Component\\Mime\\MimeTypes;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes an {@see \\SplFileInfo} object to a data URI.
 * Denormalizes a data URI to a {@see \\SplFileObject} object.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DataUriNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    private static \$supportedTypes = [
        \\SplFileInfo::class => true,
        \\SplFileObject::class => true,
        File::class => true,
    ];

    /**
     * @var MimeTypeGuesserInterface|null
     */
    private \$mimeTypeGuesser;

    /**
     * @param MimeTypeGuesserInterface|null \$mimeTypeGuesser
     */
    public function __construct(\$mimeTypeGuesser = null)
    {
        if (\$mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface) {
            @trigger_error(sprintf('Passing a %s to \"%s()\" is deprecated since Symfony 4.3, pass a \"%s\" instead.', DeprecatedMimeTypeGuesserInterface::class, __METHOD__, MimeTypeGuesserInterface::class), E_USER_DEPRECATED);
        } elseif (null === \$mimeTypeGuesser) {
            if (class_exists(MimeTypes::class)) {
                \$mimeTypeGuesser = MimeTypes::getDefault();
            } elseif (class_exists(MimeTypeGuesser::class)) {
                @trigger_error(sprintf('Passing null to \"%s()\" to use a default MIME type guesser without Symfony Mime installed is deprecated since Symfony 4.3. Try running \"composer require symfony/mime\".', __METHOD__), E_USER_DEPRECATED);
                \$mimeTypeGuesser = MimeTypeGuesser::getInstance();
            }
        } elseif (!\$mimeTypeGuesser instanceof MimeTypes) {
            throw new \\TypeError(sprintf('Argument 1 passed to \"%s()\" must be an instance of \"%s\" or null, %s given.', __METHOD__, MimeTypes::class, \\is_object(\$mimeTypeGuesser) ? \\get_class(\$mimeTypeGuesser) : \\gettype(\$mimeTypeGuesser)));
        }

        \$this->mimeTypeGuesser = \$mimeTypeGuesser;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\SplFileInfo) {
            throw new InvalidArgumentException('The object must be an instance of \"\\SplFileInfo\".');
        }

        \$mimeType = \$this->getMimeType(\$object);
        \$splFileObject = \$this->extractSplFileObject(\$object);

        \$data = '';

        \$splFileObject->rewind();
        while (!\$splFileObject->eof()) {
            \$data .= \$splFileObject->fgets();
        }

        if ('text' === explode('/', \$mimeType, 2)[0]) {
            return sprintf('data:%s,%s', \$mimeType, rawurlencode(\$data));
        }

        return sprintf('data:%s;base64,%s', \$mimeType, base64_encode(\$data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\SplFileInfo;
    }

    /**
     * {@inheritdoc}
     *
     * Regex adapted from Brian Grinstead code.
     *
     * @see https://gist.github.com/bgrins/6194623
     *
     * @throws InvalidArgumentException
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (!preg_match('/^data:([a-z0-9][a-z0-9\\!\\#\\\$\\&\\-\\^\\_\\+\\.]{0,126}\\/[a-z0-9][a-z0-9\\!\\#\\\$\\&\\-\\^\\_\\+\\.]{0,126}(;[a-z0-9\\-]+\\=[a-z0-9\\-]+)?)?(;base64)?,[a-z0-9\\!\\\$\\&\\\\\\'\\,\\(\\)\\*\\+\\,\\;\\=\\-\\.\\_\\~\\:\\@\\/\\?\\%\\s]*\\s*\$/i', \$data)) {
            throw new NotNormalizableValueException('The provided \"data:\" URI is not valid.');
        }

        try {
            switch (\$type) {
                case 'Symfony\\Component\\HttpFoundation\\File\\File':
                    return new File(\$data, false);

                case 'SplFileObject':
                case 'SplFileInfo':
                    return new \\SplFileObject(\$data);
            }
        } catch (\\RuntimeException \$exception) {
            throw new NotNormalizableValueException(\$exception->getMessage(), \$exception->getCode(), \$exception);
        }

        throw new InvalidArgumentException(sprintf('The class parameter \"%s\" is not supported. It must be one of \"SplFileInfo\", \"SplFileObject\" or \"Symfony\\Component\\HttpFoundation\\File\\File\".', \$type));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return isset(self::\$supportedTypes[\$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }

    /**
     * Gets the mime type of the object. Defaults to application/octet-stream.
     *
     * @return string
     */
    private function getMimeType(\\SplFileInfo \$object)
    {
        if (\$object instanceof File) {
            return \$object->getMimeType();
        }

        if (\$this->mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface && \$mimeType = \$this->mimeTypeGuesser->guess(\$object->getPathname())) {
            return \$mimeType;
        }

        if (\$this->mimeTypeGuesser && \$mimeType = \$this->mimeTypeGuesser->guessMimeType(\$object->getPathname())) {
            return \$mimeType;
        }

        return 'application/octet-stream';
    }

    /**
     * Returns the \\SplFileObject instance associated with the given \\SplFileInfo instance.
     *
     * @return \\SplFileObject
     */
    private function extractSplFileObject(\\SplFileInfo \$object)
    {
        if (\$object instanceof \\SplFileObject) {
            return \$object;
        }

        return \$object->openFile();
    }
}
", "vendor/symfony/serializer/Normalizer/DataUriNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php");
    }
}
