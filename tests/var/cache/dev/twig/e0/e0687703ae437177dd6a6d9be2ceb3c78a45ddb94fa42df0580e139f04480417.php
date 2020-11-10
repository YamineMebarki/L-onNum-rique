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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php */
class __TwigTemplate_b4dcdeaf82098d1eb9ac659e7bb7e0700ab9fc4b9a8562145bc2df578ca3e07b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (isset(\$repository_full_class_name)): ?>
use <?= \$repository_full_class_name ?>;
<?php endif ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * @Route(\"<?= \$route_path ?>\")
 */
class <?= \$class_name ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"/\", name=\"<?= \$route_name ?>_index\", methods={\"GET\"})
     */
<?php if (isset(\$repository_full_class_name)): ?>
    public function index(<?= \$repository_class_name ?> \$<?= \$repository_var ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/site.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$repository_var ?>->findAll(),
        ]);
    }
<?php else: ?>
    public function index(): Response
    {
        \$<?= \$entity_var_plural ?> = \$this->getDoctrine()
            ->getRepository(<?= \$entity_class_name ?>::class)
            ->findAll();

        return \$this->render('<?= \$templates_path ?>/site.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$entity_var_plural ?>,
        ]);
    }
<?php endif ?>

    /**
     * @Route(\"/new\", name=\"<?= \$route_name ?>_new\", methods={\"GET\",\"POST\"})
     */
    public function new(Request \$request): Response
    {
        \$<?= \$entity_var_singular ?> = new <?= \$entity_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/new.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}\", name=\"<?= \$route_name ?>_show\", methods={\"GET\"})
     */
    public function show(<?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/show.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}/edit\", name=\"<?= \$route_name ?>_edit\", methods={\"GET\",\"POST\"})
     */
    public function edit(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->getDoctrine()->getManager()->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/edit.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}\", name=\"<?= \$route_name ?>_delete\", methods={\"DELETE\"})
     */
    public function delete(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        if (\$this->isCsrfTokenValid('delete'.\$<?= \$entity_var_singular ?>->get<?= ucfirst(\$entity_identifier) ?>(), \$request->request->get('_token'))) {
            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->remove(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();
        }

        return \$this->redirectToRoute('<?= \$route_name ?>_index');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (isset(\$repository_full_class_name)): ?>
use <?= \$repository_full_class_name ?>;
<?php endif ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;

/**
 * @Route(\"<?= \$route_path ?>\")
 */
class <?= \$class_name ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"/\", name=\"<?= \$route_name ?>_index\", methods={\"GET\"})
     */
<?php if (isset(\$repository_full_class_name)): ?>
    public function index(<?= \$repository_class_name ?> \$<?= \$repository_var ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/site.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$repository_var ?>->findAll(),
        ]);
    }
<?php else: ?>
    public function index(): Response
    {
        \$<?= \$entity_var_plural ?> = \$this->getDoctrine()
            ->getRepository(<?= \$entity_class_name ?>::class)
            ->findAll();

        return \$this->render('<?= \$templates_path ?>/site.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$entity_var_plural ?>,
        ]);
    }
<?php endif ?>

    /**
     * @Route(\"/new\", name=\"<?= \$route_name ?>_new\", methods={\"GET\",\"POST\"})
     */
    public function new(Request \$request): Response
    {
        \$<?= \$entity_var_singular ?> = new <?= \$entity_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/new.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}\", name=\"<?= \$route_name ?>_show\", methods={\"GET\"})
     */
    public function show(<?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/show.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}/edit\", name=\"<?= \$route_name ?>_edit\", methods={\"GET\",\"POST\"})
     */
    public function edit(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->getDoctrine()->getManager()->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/edit.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

    /**
     * @Route(\"/{<?= \$entity_identifier ?>}\", name=\"<?= \$route_name ?>_delete\", methods={\"DELETE\"})
     */
    public function delete(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        if (\$this->isCsrfTokenValid('delete'.\$<?= \$entity_var_singular ?>->get<?= ucfirst(\$entity_identifier) ?>(), \$request->request->get('_token'))) {
            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->remove(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();
        }

        return \$this->redirectToRoute('<?= \$route_name ?>_index');
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/crud/controller/Controller.tpl.php");
    }
}
