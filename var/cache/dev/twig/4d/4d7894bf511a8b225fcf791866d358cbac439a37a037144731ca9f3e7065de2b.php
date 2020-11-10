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

/* vendor/symfony/var-dumper/Caster/SplCaster.php */
class __TwigTemplate_567cb583758e774fb8851677fc9c090e8220d2f09c43d10a71956cf133651593 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/SplCaster.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/SplCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts SPL related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SplCaster
{
    private static \$splFileObjectFlags = [
        \\SplFileObject::DROP_NEW_LINE => 'DROP_NEW_LINE',
        \\SplFileObject::READ_AHEAD => 'READ_AHEAD',
        \\SplFileObject::SKIP_EMPTY => 'SKIP_EMPTY',
        \\SplFileObject::READ_CSV => 'READ_CSV',
    ];

    public static function castArrayObject(\\ArrayObject \$c, array \$a, Stub \$stub, \$isNested)
    {
        return self::castSplArray(\$c, \$a, \$stub, \$isNested);
    }

    public static function castArrayIterator(\\ArrayIterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        return self::castSplArray(\$c, \$a, \$stub, \$isNested);
    }

    public static function castHeap(\\Iterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'heap' => iterator_to_array(clone \$c),
        ];

        return \$a;
    }

    public static function castDoublyLinkedList(\\SplDoublyLinkedList \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$mode = \$c->getIteratorMode();
        \$c->setIteratorMode(\\SplDoublyLinkedList::IT_MODE_KEEP | \$mode & ~\\SplDoublyLinkedList::IT_MODE_DELETE);

        \$a += [
            \$prefix.'mode' => new ConstStub(((\$mode & \\SplDoublyLinkedList::IT_MODE_LIFO) ? 'IT_MODE_LIFO' : 'IT_MODE_FIFO').' | '.((\$mode & \\SplDoublyLinkedList::IT_MODE_DELETE) ? 'IT_MODE_DELETE' : 'IT_MODE_KEEP'), \$mode),
            \$prefix.'dllist' => iterator_to_array(\$c),
        ];
        \$c->setIteratorMode(\$mode);

        return \$a;
    }

    public static function castFileInfo(\\SplFileInfo \$c, array \$a, Stub \$stub, \$isNested)
    {
        static \$map = [
            'path' => 'getPath',
            'filename' => 'getFilename',
            'basename' => 'getBasename',
            'pathname' => 'getPathname',
            'extension' => 'getExtension',
            'realPath' => 'getRealPath',
            'aTime' => 'getATime',
            'mTime' => 'getMTime',
            'cTime' => 'getCTime',
            'inode' => 'getInode',
            'size' => 'getSize',
            'perms' => 'getPerms',
            'owner' => 'getOwner',
            'group' => 'getGroup',
            'type' => 'getType',
            'writable' => 'isWritable',
            'readable' => 'isReadable',
            'executable' => 'isExecutable',
            'file' => 'isFile',
            'dir' => 'isDir',
            'link' => 'isLink',
            'linkTarget' => 'getLinkTarget',
        ];

        \$prefix = Caster::PREFIX_VIRTUAL;

        if (false === \$c->getPathname()) {
            \$a[\$prefix.'⚠'] = 'The parent constructor was not called: the object is in an invalid state';

            return \$a;
        }

        foreach (\$map as \$key => \$accessor) {
            try {
                \$a[\$prefix.\$key] = \$c->\$accessor();
            } catch (\\Exception \$e) {
            }
        }

        if (isset(\$a[\$prefix.'realPath'])) {
            \$a[\$prefix.'realPath'] = new LinkStub(\$a[\$prefix.'realPath']);
        }

        if (isset(\$a[\$prefix.'perms'])) {
            \$a[\$prefix.'perms'] = new ConstStub(sprintf('0%o', \$a[\$prefix.'perms']), \$a[\$prefix.'perms']);
        }

        static \$mapDate = ['aTime', 'mTime', 'cTime'];
        foreach (\$mapDate as \$key) {
            if (isset(\$a[\$prefix.\$key])) {
                \$a[\$prefix.\$key] = new ConstStub(date('Y-m-d H:i:s', \$a[\$prefix.\$key]), \$a[\$prefix.\$key]);
            }
        }

        return \$a;
    }

    public static function castFileObject(\\SplFileObject \$c, array \$a, Stub \$stub, \$isNested)
    {
        static \$map = [
            'csvControl' => 'getCsvControl',
            'flags' => 'getFlags',
            'maxLineLen' => 'getMaxLineLen',
            'fstat' => 'fstat',
            'eof' => 'eof',
            'key' => 'key',
        ];

        \$prefix = Caster::PREFIX_VIRTUAL;

        foreach (\$map as \$key => \$accessor) {
            try {
                \$a[\$prefix.\$key] = \$c->\$accessor();
            } catch (\\Exception \$e) {
            }
        }

        if (isset(\$a[\$prefix.'flags'])) {
            \$flagsArray = [];
            foreach (self::\$splFileObjectFlags as \$value => \$name) {
                if (\$a[\$prefix.'flags'] & \$value) {
                    \$flagsArray[] = \$name;
                }
            }
            \$a[\$prefix.'flags'] = new ConstStub(implode('|', \$flagsArray), \$a[\$prefix.'flags']);
        }

        if (isset(\$a[\$prefix.'fstat'])) {
            \$a[\$prefix.'fstat'] = new CutArrayStub(\$a[\$prefix.'fstat'], ['dev', 'ino', 'nlink', 'rdev', 'blksize', 'blocks']);
        }

        return \$a;
    }

    public static function castFixedArray(\\SplFixedArray \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'storage' => \$c->toArray(),
        ];

        return \$a;
    }

    public static function castObjectStorage(\\SplObjectStorage \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$storage = [];
        unset(\$a[Caster::PREFIX_DYNAMIC.\"\\0gcdata\"]); // Don't hit https://bugs.php.net/65967

        \$clone = clone \$c;
        foreach (\$clone as \$obj) {
            \$storage[] = [
                'object' => \$obj,
                'info' => \$clone->getInfo(),
             ];
        }

        \$a += [
            Caster::PREFIX_VIRTUAL.'storage' => \$storage,
        ];

        return \$a;
    }

    public static function castOuterIterator(\\OuterIterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a[Caster::PREFIX_VIRTUAL.'innerIterator'] = \$c->getInnerIterator();

        return \$a;
    }

    public static function castWeakReference(\\WeakReference \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a[Caster::PREFIX_VIRTUAL.'object'] = \$c->get();

        return \$a;
    }

    private static function castSplArray(\$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$class = \$stub->class;
        \$flags = \$c->getFlags();

        if (!(\$flags & \\ArrayObject::STD_PROP_LIST)) {
            \$c->setFlags(\\ArrayObject::STD_PROP_LIST);
            \$a = Caster::castObject(\$c, \$class);
            \$c->setFlags(\$flags);
        }
        \$a += [
            \$prefix.'flag::STD_PROP_LIST' => (bool) (\$flags & \\ArrayObject::STD_PROP_LIST),
            \$prefix.'flag::ARRAY_AS_PROPS' => (bool) (\$flags & \\ArrayObject::ARRAY_AS_PROPS),
        ];
        if (\$c instanceof \\ArrayObject) {
            \$a[\$prefix.'iteratorClass'] = new ClassStub(\$c->getIteratorClass());
        }
        \$a[\$prefix.'storage'] = \$c->getArrayCopy();

        return \$a;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/SplCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts SPL related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class SplCaster
{
    private static \$splFileObjectFlags = [
        \\SplFileObject::DROP_NEW_LINE => 'DROP_NEW_LINE',
        \\SplFileObject::READ_AHEAD => 'READ_AHEAD',
        \\SplFileObject::SKIP_EMPTY => 'SKIP_EMPTY',
        \\SplFileObject::READ_CSV => 'READ_CSV',
    ];

    public static function castArrayObject(\\ArrayObject \$c, array \$a, Stub \$stub, \$isNested)
    {
        return self::castSplArray(\$c, \$a, \$stub, \$isNested);
    }

    public static function castArrayIterator(\\ArrayIterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        return self::castSplArray(\$c, \$a, \$stub, \$isNested);
    }

    public static function castHeap(\\Iterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'heap' => iterator_to_array(clone \$c),
        ];

        return \$a;
    }

    public static function castDoublyLinkedList(\\SplDoublyLinkedList \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$mode = \$c->getIteratorMode();
        \$c->setIteratorMode(\\SplDoublyLinkedList::IT_MODE_KEEP | \$mode & ~\\SplDoublyLinkedList::IT_MODE_DELETE);

        \$a += [
            \$prefix.'mode' => new ConstStub(((\$mode & \\SplDoublyLinkedList::IT_MODE_LIFO) ? 'IT_MODE_LIFO' : 'IT_MODE_FIFO').' | '.((\$mode & \\SplDoublyLinkedList::IT_MODE_DELETE) ? 'IT_MODE_DELETE' : 'IT_MODE_KEEP'), \$mode),
            \$prefix.'dllist' => iterator_to_array(\$c),
        ];
        \$c->setIteratorMode(\$mode);

        return \$a;
    }

    public static function castFileInfo(\\SplFileInfo \$c, array \$a, Stub \$stub, \$isNested)
    {
        static \$map = [
            'path' => 'getPath',
            'filename' => 'getFilename',
            'basename' => 'getBasename',
            'pathname' => 'getPathname',
            'extension' => 'getExtension',
            'realPath' => 'getRealPath',
            'aTime' => 'getATime',
            'mTime' => 'getMTime',
            'cTime' => 'getCTime',
            'inode' => 'getInode',
            'size' => 'getSize',
            'perms' => 'getPerms',
            'owner' => 'getOwner',
            'group' => 'getGroup',
            'type' => 'getType',
            'writable' => 'isWritable',
            'readable' => 'isReadable',
            'executable' => 'isExecutable',
            'file' => 'isFile',
            'dir' => 'isDir',
            'link' => 'isLink',
            'linkTarget' => 'getLinkTarget',
        ];

        \$prefix = Caster::PREFIX_VIRTUAL;

        if (false === \$c->getPathname()) {
            \$a[\$prefix.'⚠'] = 'The parent constructor was not called: the object is in an invalid state';

            return \$a;
        }

        foreach (\$map as \$key => \$accessor) {
            try {
                \$a[\$prefix.\$key] = \$c->\$accessor();
            } catch (\\Exception \$e) {
            }
        }

        if (isset(\$a[\$prefix.'realPath'])) {
            \$a[\$prefix.'realPath'] = new LinkStub(\$a[\$prefix.'realPath']);
        }

        if (isset(\$a[\$prefix.'perms'])) {
            \$a[\$prefix.'perms'] = new ConstStub(sprintf('0%o', \$a[\$prefix.'perms']), \$a[\$prefix.'perms']);
        }

        static \$mapDate = ['aTime', 'mTime', 'cTime'];
        foreach (\$mapDate as \$key) {
            if (isset(\$a[\$prefix.\$key])) {
                \$a[\$prefix.\$key] = new ConstStub(date('Y-m-d H:i:s', \$a[\$prefix.\$key]), \$a[\$prefix.\$key]);
            }
        }

        return \$a;
    }

    public static function castFileObject(\\SplFileObject \$c, array \$a, Stub \$stub, \$isNested)
    {
        static \$map = [
            'csvControl' => 'getCsvControl',
            'flags' => 'getFlags',
            'maxLineLen' => 'getMaxLineLen',
            'fstat' => 'fstat',
            'eof' => 'eof',
            'key' => 'key',
        ];

        \$prefix = Caster::PREFIX_VIRTUAL;

        foreach (\$map as \$key => \$accessor) {
            try {
                \$a[\$prefix.\$key] = \$c->\$accessor();
            } catch (\\Exception \$e) {
            }
        }

        if (isset(\$a[\$prefix.'flags'])) {
            \$flagsArray = [];
            foreach (self::\$splFileObjectFlags as \$value => \$name) {
                if (\$a[\$prefix.'flags'] & \$value) {
                    \$flagsArray[] = \$name;
                }
            }
            \$a[\$prefix.'flags'] = new ConstStub(implode('|', \$flagsArray), \$a[\$prefix.'flags']);
        }

        if (isset(\$a[\$prefix.'fstat'])) {
            \$a[\$prefix.'fstat'] = new CutArrayStub(\$a[\$prefix.'fstat'], ['dev', 'ino', 'nlink', 'rdev', 'blksize', 'blocks']);
        }

        return \$a;
    }

    public static function castFixedArray(\\SplFixedArray \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'storage' => \$c->toArray(),
        ];

        return \$a;
    }

    public static function castObjectStorage(\\SplObjectStorage \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$storage = [];
        unset(\$a[Caster::PREFIX_DYNAMIC.\"\\0gcdata\"]); // Don't hit https://bugs.php.net/65967

        \$clone = clone \$c;
        foreach (\$clone as \$obj) {
            \$storage[] = [
                'object' => \$obj,
                'info' => \$clone->getInfo(),
             ];
        }

        \$a += [
            Caster::PREFIX_VIRTUAL.'storage' => \$storage,
        ];

        return \$a;
    }

    public static function castOuterIterator(\\OuterIterator \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a[Caster::PREFIX_VIRTUAL.'innerIterator'] = \$c->getInnerIterator();

        return \$a;
    }

    public static function castWeakReference(\\WeakReference \$c, array \$a, Stub \$stub, \$isNested)
    {
        \$a[Caster::PREFIX_VIRTUAL.'object'] = \$c->get();

        return \$a;
    }

    private static function castSplArray(\$c, array \$a, Stub \$stub, \$isNested)
    {
        \$prefix = Caster::PREFIX_VIRTUAL;
        \$class = \$stub->class;
        \$flags = \$c->getFlags();

        if (!(\$flags & \\ArrayObject::STD_PROP_LIST)) {
            \$c->setFlags(\\ArrayObject::STD_PROP_LIST);
            \$a = Caster::castObject(\$c, \$class);
            \$c->setFlags(\$flags);
        }
        \$a += [
            \$prefix.'flag::STD_PROP_LIST' => (bool) (\$flags & \\ArrayObject::STD_PROP_LIST),
            \$prefix.'flag::ARRAY_AS_PROPS' => (bool) (\$flags & \\ArrayObject::ARRAY_AS_PROPS),
        ];
        if (\$c instanceof \\ArrayObject) {
            \$a[\$prefix.'iteratorClass'] = new ClassStub(\$c->getIteratorClass());
        }
        \$a[\$prefix.'storage'] = \$c->getArrayCopy();

        return \$a;
    }
}
", "vendor/symfony/var-dumper/Caster/SplCaster.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/SplCaster.php");
    }
}
