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

/* src/Controller/ArticleController.php */
class __TwigTemplate_83ca304d9f1a5ef76b8c6972727be5b19e4e1eeeeecb9e32878b33d1ccc1aaac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Controller/ArticleController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Controller/ArticleController.php"));

        // line 1
        echo "<?php

namespace App\\Controller;

use App\\Entity\\Category;
use Symfony\\Component\\Routing\\Annotation\\Route;
use App\\Entity\\Article;
use App\\Entity\\ArticleLike;
use App\\Entity\\User;
use App\\Entity\\Comment;
use App\\Form\\ArticleType;
use App\\Repository\\CategoryRepository;
use App\\Form\\CommentType;
use App\\Repository\\ArticleRepository;
use App\\Repository\\ArticleLikeRepository;
use App\\Repository\\UserRepository;
use App\\Repository\\CommentRepository;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class ArticleController extends AbstractController
{

    /**
     * @Route(\"/\", name=\"home\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function home(ArticleRepository \$repo)
    {
        \$articles = \$repo->findAll();
        \$user = \$this->getUser();
        if (\$user == null) {
            return \$this->render('article/home.html.twig', [
                'articles' => \$articles
            ]);
        }else {
            return \$this->render('article/home.html.twig', [
                'age' => \$user->getAge(),
                'name' => \$user->getUsername(),
                'role' => \$user->getRole(),
                'articles' => \$articles
            ]);
        }
    }

    /**
     * @Route(\"article/news\", name=\"create\")
     * @Route(\"article/{id}/edit\", name=\"edit\")
     */
    public function form(Article \$article = null, Request \$request, ObjectManager \$manager)
    {
        if (!\$article)
        {
            \$article = new Article();
        }
        \$form = \$this->createForm(ArticleType::class, \$article);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid())
        {
            if (!\$article->getId())
            {
                \$user = \$this->getUser();
                \$article->setName(\$user->getUsername());
                \$article ->setCreateAt(new \\DateTime());
            }
            \$manager->persist(\$article);
            \$manager->flush();
            return \$this->redirectToRoute('show', [ 'id' => \$article->getId()]);
        }
        return \$this->render('article/create.html.twig', [
            'formArticle' => \$form->createView(),
            'editMode' => \$article->getId() !== null
        ]);
    }

    /**
     * @Route(\"/dashboard\", name=\"security_dashboard\")
     * @param UserRepository \$repo
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function dashboard(UserRepository \$repo, ArticleRepository \$repoArticle)
    {
        \$isConnect = \$this->getUser();
        if (\$isConnect != null && \$isConnect->getRole() === 'admin') {
            \$user = \$this->getUser();
            \$users = \$repo->findAll();
            return \$this->render('article/dashboard.html.twig', [
                'users' => \$users
            ]);
        }else{
            return \$this->redirectToRoute('home');
        }
    }

    /**
     * @Route(\"/articles\", name=\"articles\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function articles(ArticleRepository \$repo, CategoryRepository \$repoCategory)
    {
        \$articles = \$repo->findAll();
        return \$this->render('article/articles.html.twig', [
            'articles' => \$articles
        ]);
    }

    /**
     * @Route(\"/sitemap.xml\", name=\"sitemap\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function sitemap()
    {
        return \$this->render('security/sitemap.xml');
    }

    /**
     * @Route(\"/article/{id}\", name=\"show\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function show(Article \$article, Request \$request, ObjectManager \$manager)
    {
        \$user = \$this->getUser();
        \$comment = new Comment();
        if (!\$comment) {
            \$article = new Article();
        }
        \$form = \$this->createForm(CommentType::class, \$comment);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$comment->setAuthor(\$user->getUsername())
                ->setArticle(\$article)
                ->setStats(true)
                ->setCreatedAt(new \\DateTime());
            \$manager->persist(\$comment);
            \$manager->flush();
            return \$this->redirectToRoute('show', ['id' => \$article->getId()]);
        }
        return \$this->render('article/show.html.twig', [
            'article' => \$article,
            'formComment' => \$form->createView(),
            'editMode' => \$comment->getId() !== null,
        ]);
    }

    /**
     * @Route(\"/article/{id}/like\", name=\"article_like\")
     * @param Article \$article
     * @param ObjectManager \$manager
     * @param ArticleLikeRepository \$likeRepo
     * @return Response
     * Permet de liker ou unliker un article
     */
    public function like(Article \$article, ObjectManager \$manager, ArticleLikeRepository \$likeRepo ) :   Response
    {
        \$user = \$this->getUser();
        if (!\$user) return \$this->json([
            'code' => 403,
            'message' => 'Unauthorize',
        ], 403);
        if (\$article->islikedByUser(\$user))
        {
            \$like = \$likeRepo->findOneBy([
                'article_id' => \$article->getId(),
                'user_id' => \$user->getId()
            ]);
            \$manager->remove(\$like);
            \$manager->flush();
            return \$this->json([
                'code' => 200,
                'message' => 'Like bien supprimé',
                'likes' => \$likeRepo->count(['article_id' => \$article->getId()])
            ], 200);
        }
        \$like = new ArticleLike();
        \$like->setArticleId(\$article)
            ->setUserId(\$user)
            ->setCreatedAt(new \\DateTime());
        \$manager->persist(\$like);
        \$manager->flush();
        return \$this->json([
            'code' => 200,
            'message' => 'like bien ajouter',
            'likes' => \$likeRepo->count(['article_id' => \$article->getId()])
        ], 200);
    }

    /**
     * @Route(\"dashboard/user/{id}\", name=\"show_user\")
     */
    public function showUser(User \$user, UserRepository \$repoUser, ArticleRepository \$repo)
    {
        \$articles = \$repo->findBy([
            'name' => \$user->getUsername()
        ]);
        return \$this->render('article/show_user.html.twig', [
            'user'  => \$user,
            'articles' => \$articles,
            'count' => \$repo->count(['name' => \$user->getUsername()])
        ] );
    }

    /**
     * @Route(\"article/remove/comment/{id}\", name=\"delete_comment\")
     */
    public function deleteCommentUserById(Comment \$comment)
    {
        \$delete = \$this->getDoctrine()
            ->getRepository(Comment::class)
            ->findOneBy([
                'id' => \$comment->getId()
            ]);
        \$em = \$this->getDoctrine()->getEntityManager();
        \$em->remove(\$delete);
        \$em->flush();
        return \$this->redirectToRoute('success_com');
    }

    /**
     * @return Response
     * @Route(\"Success_com\", name=\"success_com\")
     */
    public function SuccessCom(){
        \$user = \$this->getUser();
        return \$this->render('article/success_com.html.twig', [
            'user' => \$user
        ]);
    }

    /**
     * @Route(\"dashboard/user/delete/{id}\", name=\"delete_user\")
     * @param User \$user
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function removeUser(User \$user)
    {
        \$isConnect = \$this->getUser();
        if (\$isConnect != null && \$isConnect->getRole() === 'admin') {
            \$delete = \$this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy([
                    'id' => \$user->getId()
                ]);
            \$em = \$this->getDoctrine()->getEntityManager();
            \$em->remove(\$delete);
            \$em->flush();
            return \$this->redirectToRoute('security_dashboard');
        } else {
            return \$this->redirectToRoute('home');
        }
    }

    public function showCategory(CategoryRepository \$repo)
    {
        \$category = \$repo->findAll();
        return \$category;
    }

    /**
     * @Route(\"/user/{name}/articles\", name=\"my_articles\")
     * @param Article \$article
     * @param ArticleRepository \$repo
     * @return Response
     */
    public function showArticlesByUser( ArticleRepository \$repo){
        \$user = \$this->getUser();
        if (!\$user){
            \$articles = new  Article();
            \$user = new User();
        }else {
            \$user = \$this->getUser();
            \$articles = \$repo->findBy([
                'name' => \$user->getUserName()
            ]);
        }
        return \$this->render('article/my_articles.html.twig', [
            'articles' => \$articles,
            'user' => \$user,
            'count' => \$repo->count(['name' => \$user->getUsername()])
        ]);
    }

    /**
     * @return Response
     * @Route(\"/contact/user/{id}\", name=\"contact_user\")
     */
    public function contactUser(ObjectManager \$manager, Request \$request, User \$user){
        if(\$request->request->count() > 0){
            if (\$request->request->get('send') == 'Envoyer') {
                if ( filter_var(\$request->request->get('email'), FILTER_VALIDATE_EMAIL)) {
                    \$mail = htmlspecialchars(\$request->request->get('email'));
                    \$name = htmlspecialchars(\$request->request->get('name'));
                    \$msg = htmlspecialchars(\$request->request->get('msg'));
                    \$headers = \"MIME-Version: 1.0\\r\\n\";
                    \$headers = \"From:laonnumerique@gmail.com\" . PHP_EOL;
                    \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
                    mail(\$mail, \$name, \$msg, \$headers);
                    return \$this->redirectToRoute('success');
                }else{
                    return \$this->redirectToRoute('error_contact');
                }
            }
        }
        return \$this->render('article/contact_user.html.twig', [
            'name' => \$user->getUsername(),
            'email' => \$user->getEmail()
        ]);
    }

    /**
     * @return Response
     * @Route(\"/contact\", name=\"contact\")
     */
    public function contact(ObjectManager \$manager, Request \$request){
        if(\$request->request->count() > 0){
            if (\$request->request->get('send') == 'Envoyer') {
                if ( filter_var(\$request->request->get('email'), FILTER_VALIDATE_EMAIL)) {
                    \$mail = htmlspecialchars(\$request->request->get('email'));
                    \$name = htmlspecialchars(\$request->request->get('name'));
                    \$msg = htmlspecialchars(\$request->request->get('msg'));
                    \$headers = \"MIME-Version: 1.0\\r\\n\";
                    \$headers = \"From:\$mail\" . PHP_EOL;
                    \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
                    mail(\"laonnumerique@gmail.com\", \$name, \$msg, \$headers);
                    return \$this->redirectToRoute('success');
                }else{
                    return \$this->redirectToRoute('error_contact');
                }
            }
        }
        return \$this->render('article/contact.html.twig');
    }

    /**
     * @Route(\"contact/error/mail\", name=\"error_contact\")
     * @return Response
     */
    public function errorContact(){
        return \$this->render('article/error_contact.html.twig');
    }

    /**
     * @return Response
     * @Route(\"Success\", name=\"success\")
     */
    public function Success(){
        \$user = \$this->getUser();
        return \$this->render('article/mail.html.twig', [
            'user' => \$user
        ]);
    }

    /**
     * @Route(\"remove/article/{id}\", name=\"delete_article\")
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteArticleById(Article \$article, ArticleLikeRepository \$likeRepo, ObjectManager \$manager)
    {
        \$user = \$this->getUser();
        \$like = \$likeRepo->findOneBy([
            'article_id' => \$article->getId()
        ]);
        if (\$like != null) {
            \$manager->remove(\$like);
            \$manager->flush();
        }else{
            \$like = \$likeRepo->findOneBy([
                'id' => \$article->getId()
            ]);
        }
        \$delete = \$this->getDoctrine()
            ->getRepository(Article::class)
            ->findOneBy([
                'id' => \$article->getId()
            ]);
        \$em = \$this->getDoctrine()->getEntityManager();
        \$em->remove(\$delete);
        \$em->flush();
        return \$this->redirectToRoute('my_articles', [
            'name' => \$user->getUsername()
        ]);
    }

}

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Controller/ArticleController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Controller;

use App\\Entity\\Category;
use Symfony\\Component\\Routing\\Annotation\\Route;
use App\\Entity\\Article;
use App\\Entity\\ArticleLike;
use App\\Entity\\User;
use App\\Entity\\Comment;
use App\\Form\\ArticleType;
use App\\Repository\\CategoryRepository;
use App\\Form\\CommentType;
use App\\Repository\\ArticleRepository;
use App\\Repository\\ArticleLikeRepository;
use App\\Repository\\UserRepository;
use App\\Repository\\CommentRepository;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class ArticleController extends AbstractController
{

    /**
     * @Route(\"/\", name=\"home\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function home(ArticleRepository \$repo)
    {
        \$articles = \$repo->findAll();
        \$user = \$this->getUser();
        if (\$user == null) {
            return \$this->render('article/home.html.twig', [
                'articles' => \$articles
            ]);
        }else {
            return \$this->render('article/home.html.twig', [
                'age' => \$user->getAge(),
                'name' => \$user->getUsername(),
                'role' => \$user->getRole(),
                'articles' => \$articles
            ]);
        }
    }

    /**
     * @Route(\"article/news\", name=\"create\")
     * @Route(\"article/{id}/edit\", name=\"edit\")
     */
    public function form(Article \$article = null, Request \$request, ObjectManager \$manager)
    {
        if (!\$article)
        {
            \$article = new Article();
        }
        \$form = \$this->createForm(ArticleType::class, \$article);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid())
        {
            if (!\$article->getId())
            {
                \$user = \$this->getUser();
                \$article->setName(\$user->getUsername());
                \$article ->setCreateAt(new \\DateTime());
            }
            \$manager->persist(\$article);
            \$manager->flush();
            return \$this->redirectToRoute('show', [ 'id' => \$article->getId()]);
        }
        return \$this->render('article/create.html.twig', [
            'formArticle' => \$form->createView(),
            'editMode' => \$article->getId() !== null
        ]);
    }

    /**
     * @Route(\"/dashboard\", name=\"security_dashboard\")
     * @param UserRepository \$repo
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function dashboard(UserRepository \$repo, ArticleRepository \$repoArticle)
    {
        \$isConnect = \$this->getUser();
        if (\$isConnect != null && \$isConnect->getRole() === 'admin') {
            \$user = \$this->getUser();
            \$users = \$repo->findAll();
            return \$this->render('article/dashboard.html.twig', [
                'users' => \$users
            ]);
        }else{
            return \$this->redirectToRoute('home');
        }
    }

    /**
     * @Route(\"/articles\", name=\"articles\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function articles(ArticleRepository \$repo, CategoryRepository \$repoCategory)
    {
        \$articles = \$repo->findAll();
        return \$this->render('article/articles.html.twig', [
            'articles' => \$articles
        ]);
    }

    /**
     * @Route(\"/sitemap.xml\", name=\"sitemap\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function sitemap()
    {
        return \$this->render('security/sitemap.xml');
    }

    /**
     * @Route(\"/article/{id}\", name=\"show\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function show(Article \$article, Request \$request, ObjectManager \$manager)
    {
        \$user = \$this->getUser();
        \$comment = new Comment();
        if (!\$comment) {
            \$article = new Article();
        }
        \$form = \$this->createForm(CommentType::class, \$comment);
        \$form->handleRequest(\$request);
        if (\$form->isSubmitted() && \$form->isValid()) {
            \$comment->setAuthor(\$user->getUsername())
                ->setArticle(\$article)
                ->setStats(true)
                ->setCreatedAt(new \\DateTime());
            \$manager->persist(\$comment);
            \$manager->flush();
            return \$this->redirectToRoute('show', ['id' => \$article->getId()]);
        }
        return \$this->render('article/show.html.twig', [
            'article' => \$article,
            'formComment' => \$form->createView(),
            'editMode' => \$comment->getId() !== null,
        ]);
    }

    /**
     * @Route(\"/article/{id}/like\", name=\"article_like\")
     * @param Article \$article
     * @param ObjectManager \$manager
     * @param ArticleLikeRepository \$likeRepo
     * @return Response
     * Permet de liker ou unliker un article
     */
    public function like(Article \$article, ObjectManager \$manager, ArticleLikeRepository \$likeRepo ) :   Response
    {
        \$user = \$this->getUser();
        if (!\$user) return \$this->json([
            'code' => 403,
            'message' => 'Unauthorize',
        ], 403);
        if (\$article->islikedByUser(\$user))
        {
            \$like = \$likeRepo->findOneBy([
                'article_id' => \$article->getId(),
                'user_id' => \$user->getId()
            ]);
            \$manager->remove(\$like);
            \$manager->flush();
            return \$this->json([
                'code' => 200,
                'message' => 'Like bien supprimé',
                'likes' => \$likeRepo->count(['article_id' => \$article->getId()])
            ], 200);
        }
        \$like = new ArticleLike();
        \$like->setArticleId(\$article)
            ->setUserId(\$user)
            ->setCreatedAt(new \\DateTime());
        \$manager->persist(\$like);
        \$manager->flush();
        return \$this->json([
            'code' => 200,
            'message' => 'like bien ajouter',
            'likes' => \$likeRepo->count(['article_id' => \$article->getId()])
        ], 200);
    }

    /**
     * @Route(\"dashboard/user/{id}\", name=\"show_user\")
     */
    public function showUser(User \$user, UserRepository \$repoUser, ArticleRepository \$repo)
    {
        \$articles = \$repo->findBy([
            'name' => \$user->getUsername()
        ]);
        return \$this->render('article/show_user.html.twig', [
            'user'  => \$user,
            'articles' => \$articles,
            'count' => \$repo->count(['name' => \$user->getUsername()])
        ] );
    }

    /**
     * @Route(\"article/remove/comment/{id}\", name=\"delete_comment\")
     */
    public function deleteCommentUserById(Comment \$comment)
    {
        \$delete = \$this->getDoctrine()
            ->getRepository(Comment::class)
            ->findOneBy([
                'id' => \$comment->getId()
            ]);
        \$em = \$this->getDoctrine()->getEntityManager();
        \$em->remove(\$delete);
        \$em->flush();
        return \$this->redirectToRoute('success_com');
    }

    /**
     * @return Response
     * @Route(\"Success_com\", name=\"success_com\")
     */
    public function SuccessCom(){
        \$user = \$this->getUser();
        return \$this->render('article/success_com.html.twig', [
            'user' => \$user
        ]);
    }

    /**
     * @Route(\"dashboard/user/delete/{id}\", name=\"delete_user\")
     * @param User \$user
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function removeUser(User \$user)
    {
        \$isConnect = \$this->getUser();
        if (\$isConnect != null && \$isConnect->getRole() === 'admin') {
            \$delete = \$this->getDoctrine()
                ->getRepository(User::class)
                ->findOneBy([
                    'id' => \$user->getId()
                ]);
            \$em = \$this->getDoctrine()->getEntityManager();
            \$em->remove(\$delete);
            \$em->flush();
            return \$this->redirectToRoute('security_dashboard');
        } else {
            return \$this->redirectToRoute('home');
        }
    }

    public function showCategory(CategoryRepository \$repo)
    {
        \$category = \$repo->findAll();
        return \$category;
    }

    /**
     * @Route(\"/user/{name}/articles\", name=\"my_articles\")
     * @param Article \$article
     * @param ArticleRepository \$repo
     * @return Response
     */
    public function showArticlesByUser( ArticleRepository \$repo){
        \$user = \$this->getUser();
        if (!\$user){
            \$articles = new  Article();
            \$user = new User();
        }else {
            \$user = \$this->getUser();
            \$articles = \$repo->findBy([
                'name' => \$user->getUserName()
            ]);
        }
        return \$this->render('article/my_articles.html.twig', [
            'articles' => \$articles,
            'user' => \$user,
            'count' => \$repo->count(['name' => \$user->getUsername()])
        ]);
    }

    /**
     * @return Response
     * @Route(\"/contact/user/{id}\", name=\"contact_user\")
     */
    public function contactUser(ObjectManager \$manager, Request \$request, User \$user){
        if(\$request->request->count() > 0){
            if (\$request->request->get('send') == 'Envoyer') {
                if ( filter_var(\$request->request->get('email'), FILTER_VALIDATE_EMAIL)) {
                    \$mail = htmlspecialchars(\$request->request->get('email'));
                    \$name = htmlspecialchars(\$request->request->get('name'));
                    \$msg = htmlspecialchars(\$request->request->get('msg'));
                    \$headers = \"MIME-Version: 1.0\\r\\n\";
                    \$headers = \"From:laonnumerique@gmail.com\" . PHP_EOL;
                    \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
                    mail(\$mail, \$name, \$msg, \$headers);
                    return \$this->redirectToRoute('success');
                }else{
                    return \$this->redirectToRoute('error_contact');
                }
            }
        }
        return \$this->render('article/contact_user.html.twig', [
            'name' => \$user->getUsername(),
            'email' => \$user->getEmail()
        ]);
    }

    /**
     * @return Response
     * @Route(\"/contact\", name=\"contact\")
     */
    public function contact(ObjectManager \$manager, Request \$request){
        if(\$request->request->count() > 0){
            if (\$request->request->get('send') == 'Envoyer') {
                if ( filter_var(\$request->request->get('email'), FILTER_VALIDATE_EMAIL)) {
                    \$mail = htmlspecialchars(\$request->request->get('email'));
                    \$name = htmlspecialchars(\$request->request->get('name'));
                    \$msg = htmlspecialchars(\$request->request->get('msg'));
                    \$headers = \"MIME-Version: 1.0\\r\\n\";
                    \$headers = \"From:\$mail\" . PHP_EOL;
                    \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
                    mail(\"laonnumerique@gmail.com\", \$name, \$msg, \$headers);
                    return \$this->redirectToRoute('success');
                }else{
                    return \$this->redirectToRoute('error_contact');
                }
            }
        }
        return \$this->render('article/contact.html.twig');
    }

    /**
     * @Route(\"contact/error/mail\", name=\"error_contact\")
     * @return Response
     */
    public function errorContact(){
        return \$this->render('article/error_contact.html.twig');
    }

    /**
     * @return Response
     * @Route(\"Success\", name=\"success\")
     */
    public function Success(){
        \$user = \$this->getUser();
        return \$this->render('article/mail.html.twig', [
            'user' => \$user
        ]);
    }

    /**
     * @Route(\"remove/article/{id}\", name=\"delete_article\")
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteArticleById(Article \$article, ArticleLikeRepository \$likeRepo, ObjectManager \$manager)
    {
        \$user = \$this->getUser();
        \$like = \$likeRepo->findOneBy([
            'article_id' => \$article->getId()
        ]);
        if (\$like != null) {
            \$manager->remove(\$like);
            \$manager->flush();
        }else{
            \$like = \$likeRepo->findOneBy([
                'id' => \$article->getId()
            ]);
        }
        \$delete = \$this->getDoctrine()
            ->getRepository(Article::class)
            ->findOneBy([
                'id' => \$article->getId()
            ]);
        \$em = \$this->getDoctrine()->getEntityManager();
        \$em->remove(\$delete);
        \$em->flush();
        return \$this->redirectToRoute('my_articles', [
            'name' => \$user->getUsername()
        ]);
    }

}

", "src/Controller/ArticleController.php", "/var/www/public/DevLaon/templates/src/Controller/ArticleController.php");
    }
}
