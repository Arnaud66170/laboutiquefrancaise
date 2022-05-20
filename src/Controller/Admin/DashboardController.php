<?php

namespace App\Controller\Admin;

use App\Entity\User;  /*A ajouter*/
use App\Entity\Category;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;   /*A ajouter*/
use App\Controller\Admin\UserCrudController;    /*A ajouter*/
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();  /* commenter*/

        // Option 1. You can make your dashboard redirect to some common page of your backend
        
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('La Boutique Française');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('Utilisateur', 'fas fa-list', EntityClass::class);

        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),/* affichage logo du dashboard en haut*/ 

            MenuItem::section('Users'),  /* permet de gérer les users */
            MenuItem::linkToCrud('Users', 'fa fa-user', User::class),  /* lien permettant d'accéder aux users */
            MenuItem::linkToCrud('Categories', 'fa fa-list', Category::class),
            MenuItem::linkToCrud('Product', 'fa fa-tag', Product::class),
        ];
    }
}
