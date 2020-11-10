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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php */
class __TwigTemplate_2ad026d6c38e496d3fb64d9f709a92768894d91de12c36d4aa2e83c51b6aafe8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Allows reading and writing of bytes to and from an array.
 *
 * @author     Chris Corbyn
 */
class Swift_ByteStream_ArrayByteStream implements Swift_InputByteStream, Swift_OutputByteStream
{
    /**
     * The internal stack of bytes.
     *
     * @var string[]
     */
    private \$array = [];

    /**
     * The size of the stack.
     *
     * @var int
     */
    private \$arraySize = 0;

    /**
     * The internal pointer offset.
     *
     * @var int
     */
    private \$offset = 0;

    /**
     * Bound streams.
     *
     * @var Swift_InputByteStream[]
     */
    private \$mirrors = [];

    /**
     * Create a new ArrayByteStream.
     *
     * If \$stack is given the stream will be populated with the bytes it contains.
     *
     * @param mixed \$stack of bytes in string or array form, optional
     */
    public function __construct(\$stack = null)
    {
        if (is_array(\$stack)) {
            \$this->array = \$stack;
            \$this->arraySize = count(\$stack);
        } elseif (is_string(\$stack)) {
            \$this->write(\$stack);
        } else {
            \$this->array = [];
        }
    }

    /**
     * Reads \$length bytes from the stream into a string and moves the pointer
     * through the stream by \$length.
     *
     * If less bytes exist than are requested the
     * remaining bytes are given instead. If no bytes are remaining at all, boolean
     * false is returned.
     *
     * @param int \$length
     *
     * @return string
     */
    public function read(\$length)
    {
        if (\$this->offset == \$this->arraySize) {
            return false;
        }

        // Don't use array slice
        \$end = \$length + \$this->offset;
        \$end = \$this->arraySize < \$end ? \$this->arraySize : \$end;
        \$ret = '';
        for (; \$this->offset < \$end; ++\$this->offset) {
            \$ret .= \$this->array[\$this->offset];
        }

        return \$ret;
    }

    /**
     * Writes \$bytes to the end of the stream.
     *
     * @param string \$bytes
     */
    public function write(\$bytes)
    {
        \$to_add = str_split(\$bytes);
        foreach (\$to_add as \$value) {
            \$this->array[] = \$value;
        }
        \$this->arraySize = count(\$this->array);

        foreach (\$this->mirrors as \$stream) {
            \$stream->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Attach \$is to this stream.
     *
     * The stream acts as an observer, receiving all data that is written.
     * All {@link write()} and {@link flushBuffers()} operations will be mirrored.
     */
    public function bind(Swift_InputByteStream \$is)
    {
        \$this->mirrors[] = \$is;
    }

    /**
     * Remove an already bound stream.
     *
     * If \$is is not bound, no errors will be raised.
     * If the stream currently has any buffered data it will be written to \$is
     * before unbinding occurs.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
        foreach (\$this->mirrors as \$k => \$stream) {
            if (\$is === \$stream) {
                unset(\$this->mirrors[\$k]);
            }
        }
    }

    /**
     * Move the internal read pointer to \$byteOffset in the stream.
     *
     * @param int \$byteOffset
     *
     * @return bool
     */
    public function setReadPointer(\$byteOffset)
    {
        if (\$byteOffset > \$this->arraySize) {
            \$byteOffset = \$this->arraySize;
        } elseif (\$byteOffset < 0) {
            \$byteOffset = 0;
        }

        \$this->offset = \$byteOffset;
    }

    /**
     * Flush the contents of the stream (empty it) and set the internal pointer
     * to the beginning.
     */
    public function flushBuffers()
    {
        \$this->offset = 0;
        \$this->array = [];
        \$this->arraySize = 0;

        foreach (\$this->mirrors as \$stream) {
            \$stream->flushBuffers();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php";
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
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Allows reading and writing of bytes to and from an array.
 *
 * @author     Chris Corbyn
 */
class Swift_ByteStream_ArrayByteStream implements Swift_InputByteStream, Swift_OutputByteStream
{
    /**
     * The internal stack of bytes.
     *
     * @var string[]
     */
    private \$array = [];

    /**
     * The size of the stack.
     *
     * @var int
     */
    private \$arraySize = 0;

    /**
     * The internal pointer offset.
     *
     * @var int
     */
    private \$offset = 0;

    /**
     * Bound streams.
     *
     * @var Swift_InputByteStream[]
     */
    private \$mirrors = [];

    /**
     * Create a new ArrayByteStream.
     *
     * If \$stack is given the stream will be populated with the bytes it contains.
     *
     * @param mixed \$stack of bytes in string or array form, optional
     */
    public function __construct(\$stack = null)
    {
        if (is_array(\$stack)) {
            \$this->array = \$stack;
            \$this->arraySize = count(\$stack);
        } elseif (is_string(\$stack)) {
            \$this->write(\$stack);
        } else {
            \$this->array = [];
        }
    }

    /**
     * Reads \$length bytes from the stream into a string and moves the pointer
     * through the stream by \$length.
     *
     * If less bytes exist than are requested the
     * remaining bytes are given instead. If no bytes are remaining at all, boolean
     * false is returned.
     *
     * @param int \$length
     *
     * @return string
     */
    public function read(\$length)
    {
        if (\$this->offset == \$this->arraySize) {
            return false;
        }

        // Don't use array slice
        \$end = \$length + \$this->offset;
        \$end = \$this->arraySize < \$end ? \$this->arraySize : \$end;
        \$ret = '';
        for (; \$this->offset < \$end; ++\$this->offset) {
            \$ret .= \$this->array[\$this->offset];
        }

        return \$ret;
    }

    /**
     * Writes \$bytes to the end of the stream.
     *
     * @param string \$bytes
     */
    public function write(\$bytes)
    {
        \$to_add = str_split(\$bytes);
        foreach (\$to_add as \$value) {
            \$this->array[] = \$value;
        }
        \$this->arraySize = count(\$this->array);

        foreach (\$this->mirrors as \$stream) {
            \$stream->write(\$bytes);
        }
    }

    /**
     * Not used.
     */
    public function commit()
    {
    }

    /**
     * Attach \$is to this stream.
     *
     * The stream acts as an observer, receiving all data that is written.
     * All {@link write()} and {@link flushBuffers()} operations will be mirrored.
     */
    public function bind(Swift_InputByteStream \$is)
    {
        \$this->mirrors[] = \$is;
    }

    /**
     * Remove an already bound stream.
     *
     * If \$is is not bound, no errors will be raised.
     * If the stream currently has any buffered data it will be written to \$is
     * before unbinding occurs.
     */
    public function unbind(Swift_InputByteStream \$is)
    {
        foreach (\$this->mirrors as \$k => \$stream) {
            if (\$is === \$stream) {
                unset(\$this->mirrors[\$k]);
            }
        }
    }

    /**
     * Move the internal read pointer to \$byteOffset in the stream.
     *
     * @param int \$byteOffset
     *
     * @return bool
     */
    public function setReadPointer(\$byteOffset)
    {
        if (\$byteOffset > \$this->arraySize) {
            \$byteOffset = \$this->arraySize;
        } elseif (\$byteOffset < 0) {
            \$byteOffset = 0;
        }

        \$this->offset = \$byteOffset;
    }

    /**
     * Flush the contents of the stream (empty it) and set the internal pointer
     * to the beginning.
     */
    public function flushBuffers()
    {
        \$this->offset = 0;
        \$this->array = [];
        \$this->arraySize = 0;

        foreach (\$this->mirrors as \$stream) {
            \$stream->flushBuffers();
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php");
    }
}
