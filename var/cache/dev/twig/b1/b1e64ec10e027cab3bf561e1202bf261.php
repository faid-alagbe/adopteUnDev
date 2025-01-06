<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* profil/editprofil.html.twig */
class __TwigTemplate_9b7b47cba8ca9e0ed597703b07f1e5c9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/editprofil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/editprofil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "            <!-- Begin page -->
        <div id=\"layout-wrapper\">

            <header id=\"page-topbar\">
        <div class=\"layout-width\">
            <div class=\"navbar-header\">
                <div class=\"d-flex\">
                    <!-- LOGO -->
                    <div class=\"navbar-brand-box horizontal-logo\">
                        <a href=\"index.html\" class=\"logo logo-dark\">
                            <span class=\"logo-sm\">
                                <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                            </span>
                            <span class=\"logo-lg\">
                                <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
                            </span>
                        </a>

                        <a href=\"index.html\" class=\"logo logo-light\">
                            <span class=\"logo-sm\">
                                <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                            </span>
                            <span class=\"logo-lg\">
                                <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
                            </span>
                        </a>
                    </div>

                    <button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none\" id=\"topnav-hamburger-icon\">
                        <span class=\"hamburger-icon\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <!-- App Search-->
                    <form class=\"app-search d-none d-md-block\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\" value=\"\">
                            <span class=\"mdi mdi-magnify search-widget-icon\"></span>
                            <span class=\"mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none\" id=\"search-close-options\"></span>
                        </div>
                        <div class=\"dropdown-menu dropdown-menu-lg\" id=\"search-dropdown\">
                            <div data-simplebar style=\"max-height: 320px;\">
                                <!-- item-->
                                <div class=\"dropdown-header\">
                                    <h6 class=\"text-overflow text-muted mb-0 text-uppercase\">Recent Searches</h6>
                                </div>

                                <div class=\"dropdown-item bg-transparent text-wrap\">
                                    <a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">how to setup <i class=\"mdi mdi-magnify ms-1\"></i></a>
                                    <a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">buttons <i class=\"mdi mdi-magnify ms-1\"></i></a>
                                </div>
                                <!-- item-->
                                <div class=\"dropdown-header mt-2\">
                                    <h6 class=\"text-overflow text-muted mb-1 text-uppercase\">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-bubble-chart-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-lifebuoy-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-user-settings-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class=\"dropdown-header mt-2\">
                                    <h6 class=\"text-overflow text-muted mb-2 text-uppercase\">Members</h6>
                                </div>

                                <div class=\"notification-list\">
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">Angela Bernier</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">David Grasso</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-5.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">Mike Bunch</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"text-center pt-3 pb-1\">
                                <a href=\"pages-search-results.html\" class=\"btn btn-primary btn-sm\">View All Results <i class=\"ri-arrow-right-line ms-1\"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">

                    <div class=\"dropdown d-md-none topbar-head-dropdown header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"bx bx-search fs-22\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-search-dropdown\">
                            <form class=\"p-3\">
                                <div class=\"form-group m-0\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
                                        <button class=\"btn btn-primary\" type=\"submit\"><i class=\"mdi mdi-magnify\"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class=\"dropdown ms-1 topbar-head-dropdown header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img id=\"header-lang-img\" src=\"assets/images/flags/us.svg\" alt=\"Header Language\" height=\"20\" class=\"rounded\">
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language py-2\" data-lang=\"en\" title=\"English\">
                                <img src=\"assets/images/flags/us.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">English</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"sp\" title=\"Spanish\">
                                <img src=\"assets/images/flags/spain.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Española</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"gr\" title=\"German\">
                                <img src=\"assets/images/flags/germany.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\"> <span class=\"align-middle\">Deutsche</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"it\" title=\"Italian\">
                                <img src=\"assets/images/flags/italy.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Italiana</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ru\" title=\"Russian\">
                                <img src=\"assets/images/flags/russia.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">русский</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ch\" title=\"Chinese\">
                                <img src=\"assets/images/flags/china.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">中国人</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"fr\" title=\"French\">
                                <img src=\"assets/images/flags/french.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">français</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ar\" title=\"Arabic\">
                                <img src=\"assets/images/flags/ae.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Arabic</span>
                            </a>
                        </div>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-category-alt fs-22'></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
                            <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col\">
                                        <h6 class=\"m-0 fw-semibold fs-15\"> Web Apps </h6>
                                    </div>
                                    <div class=\"col-auto\">
                                        <a href=\"#!\" class=\"btn btn-sm btn-soft-info\"> View All Apps
                                            <i class=\"ri-arrow-right-s-line align-middle\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"p-2\">
                                <div class=\"row g-0\">
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/github.png\" alt=\"Github\">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/bitbucket.png\" alt=\"bitbucket\">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/dribbble.png\" alt=\"dribbble\">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class=\"row g-0\">
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/dropbox.png\" alt=\"dropbox\">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/mail_chimp.png\" alt=\"mail_chimp\">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/slack.png\" alt=\"slack\">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-cart-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-shopping-bag fs-22'></i>
                            <span class=\"position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info\">5</span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart\" aria-labelledby=\"page-header-cart-dropdown\">
                            <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col\">
                                        <h6 class=\"m-0 fs-16 fw-semibold\"> My Cart</h6>
                                    </div>
                                    <div class=\"col-auto\">
                                        <span class=\"badge bg-warning-subtle text-warning fs-13\"><span class=\"cartitem-badge\">7</span>
                                            items</span>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style=\"max-height: 300px;\">
                                <div class=\"p-2\">
                                    <div class=\"text-center empty-cart\" id=\"empty-cart\">
                                        <div class=\"avatar-md mx-auto my-3\">
                                            <div class=\"avatar-title bg-info-subtle text-info fs-36 rounded-circle\">
                                                <i class='bx bx-cart'></i>
                                            </div>
                                        </div>
                                        <h5 class=\"mb-3\">Your Cart is Empty!</h5>
                                        <a href=\"apps-ecommerce-products.html\" class=\"btn btn-success w-md mb-3\">Shop Now</a>
                                    </div>
                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-1.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Branded
                                                        T-Shirts</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>10 x \$32</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">320</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-2.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Bentwood Chair</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>5 x \$18</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">89</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-3.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">
                                                        Borosil Paper Cup</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>3 x \$250</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">750</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-6.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Gray
                                                        Styled T-Shirt</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>1 x \$1250</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$ <span class=\"cart-item-price\">1250</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-5.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Stillbird Helmet</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>2 x \$495</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">990</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border\" id=\"checkout-elem\">
                                <div class=\"d-flex justify-content-between align-items-center pb-3\">
                                    <h5 class=\"m-0 text-muted\">Total:</h5>
                                    <div class=\"px-2\">
                                        <h5 class=\"m-0\" id=\"cart-item-total\">\$1258.58</h5>
                                    </div>
                                </div>

                                <a href=\"apps-ecommerce-checkout.html\" class=\"btn btn-success text-center w-100\">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"ms-1 header-item d-none d-sm-flex\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-toggle=\"fullscreen\">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>

                    <div class=\"ms-1 header-item d-none d-sm-flex\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode\">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\" id=\"notificationDropdown\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-notifications-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-bell fs-22'></i>
                            <span class=\"position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger\">3<span class=\"visually-hidden\">unread messages</span></span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-notifications-dropdown\">

                            <div class=\"dropdown-head bg-primary bg-pattern rounded-top\">
                                <div class=\"p-3\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">
                                            <h6 class=\"m-0 fs-16 fw-semibold text-white\"> Notifications </h6>
                                        </div>
                                        <div class=\"col-auto dropdown-tabs\">
                                            <span class=\"badge bg-light text-body fs-13\"> 4 New</span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"px-2 pt-2\">
                                    <ul class=\"nav nav-tabs dropdown-tabs nav-tabs-custom\" data-dropdown-tabs=\"true\" id=\"notificationItemsTab\" role=\"tablist\">
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#all-noti-tab\" role=\"tab\" aria-selected=\"true\">
                                                All (4)
                                            </a>
                                        </li>
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#messages-tab\" role=\"tab\" aria-selected=\"false\">
                                                Messages
                                            </a>
                                        </li>
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts-tab\" role=\"tab\" aria-selected=\"false\">
                                                Alerts
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class=\"tab-content position-relative\" id=\"notificationItemsTabContent\">
                                <div class=\"tab-pane fade show active py-2 ps-2\" id=\"all-noti-tab\" role=\"tabpanel\">
                                    <div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <div class=\"avatar-xs me-3 flex-shrink-0\">
                                                    <span class=\"avatar-title bg-info-subtle text-info rounded-circle fs-16\">
                                                        <i class=\"bx bx-badge-check\"></i>
                                                    </span>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-2 lh-base\">Your <b>Elite</b> author Graphic
                                                            Optimization <span class=\"text-secondary\">reward</span> is
                                                            ready!
                                                        </h6>
                                                    </a>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> Just 30 sec ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check01\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check01\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Answered to your comment on the cash flow forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check02\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check02\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <div class=\"avatar-xs me-3 flex-shrink-0\">
                                                    <span class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-16\">
                                                        <i class='bx bx-message-square-dots'></i>
                                                    </span>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-2 fs-13 lh-base\">You have received <b class=\"text-success\">20</b> new messages in the conversation
                                                        </h6>
                                                    </a>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check03\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check03\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check04\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check04\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"my-3 text-center view-all\">
                                            <button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
                                                All Notifications <i class=\"ri-arrow-right-line align-middle\"></i></button>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"tab-pane fade py-2 ps-2\" id=\"messages-tab\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
                                    <div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">James Lemire</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 30 min ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check01\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check01\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Answered to your comment on the cash flow forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check02\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check02\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-6.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Kenneth Brown</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Mentionned you in his comment on 📃 invoice #12501.
                                                        </p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 10 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check03\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check03\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 3 days ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check04\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check04\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"my-3 text-center view-all\">
                                            <button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
                                                All Messages <i class=\"ri-arrow-right-line align-middle\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade p-4\" id=\"alerts-tab\" role=\"tabpanel\" aria-labelledby=\"alerts-tab\"></div>

                                <div class=\"notification-actions\" id=\"notification-actions\">
                                    <div class=\"d-flex text-muted justify-content-center\">
                                        Select <div id=\"select-content\" class=\"text-body fw-semibold px-1\">0</div> Result <button type=\"button\" class=\"btn btn-link link-danger p-0 ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#removeNotificationModal\">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown ms-sm-3 header-item topbar-user\">
                        <button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
                                <span class=\"text-start ms-xl-2\">
                                    <span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">Anna Adame</span>
                                    <span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Founder</span>
                                </span>
                            </span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <!-- item-->
                            <h6 class=\"dropdown-header\">Welcome Anna!</h6>
                            <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Profile</span></a>
                            <a class=\"dropdown-item\" href=\"apps-chat.html\"><i class=\"mdi mdi-message-text-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Messages</span></a>
                            <a class=\"dropdown-item\" href=\"apps-tasks-kanban.html\"><i class=\"mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Taskboard</span></a>
                            <a class=\"dropdown-item\" href=\"pages-faqs.html\"><i class=\"mdi mdi-lifebuoy text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Help</span></a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"mdi mdi-wallet text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Balance : <b>\$5971.67</b></span></a>
                            <a class=\"dropdown-item\" href=\"pages-profile-settings.html\"><span class=\"badge bg-success-subtle text-success mt-1 float-end\">New</span><i class=\"mdi mdi-cog-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Settings</span></a>
                            <a class=\"dropdown-item\" href=\"auth-lockscreen-basic.html\"><i class=\"mdi mdi-lock text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Lock screen</span></a>
                            <a class=\"dropdown-item\" href=\"auth-logout-basic.html\"><i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\" data-key=\"t-logout\">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

    <!-- removeNotificationModal -->
    <div id=\"removeNotificationModal\" class=\"modal fade zoomIn\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\" id=\"NotificationModalbtn-close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mt-2 text-center\">
                        <lord-icon src=\"https://cdn.lordicon.com/gsqxdxog.json\" trigger=\"loop\" colors=\"primary:#f7b84b,secondary:#f06548\" style=\"width:100px;height:100px\"></lord-icon>
                        <div class=\"mt-4 pt-2 fs-15 mx-4 mx-sm-5\">
                            <h4>Are you sure ?</h4>
                            <p class=\"text-muted mx-4 mb-0\">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class=\"d-flex gap-2 justify-content-center mt-4 mb-2\">
                        <button type=\"button\" class=\"btn w-sm btn-light\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"button\" class=\"btn w-sm btn-danger\" id=\"delete-notification\">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class=\"navbar-menu\" hidden>
                <!-- LOGO -->
                <div class=\"navbar-brand-box\">
                    <!-- Dark Logo-->
                    <a href=\"index.html\" class=\"logo logo-dark\">
                        <span class=\"logo-sm\">
                            <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href=\"index.html\" class=\"logo logo-light\">
                        <span class=\"logo-sm\">
                            <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
                        <i class=\"ri-record-circle-line\"></i>
                    </button>
                    <div id=\"two-column-menu\">
                    </div>
                    <ul class=\"navbar-nav\" id=\"navbar-nav\">
                    </ul>
                    <div id=\"scrollbar\">
                        <div>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
        
                
            

                
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div>

                <div class=\"page-content\">
                    <div class=\"container-fluid\">

                        <div class=\"position-relative mx-n4\">
                            <div class=\"profile-wid-bg profile-setting-img\">
                                <img src=\"assets/images/profile-bg.jpg\" class=\"profile-wid-img\" alt=\"\">
                                <div class=\"overlay-content\">
                                    <div class=\"text-end\">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xxl-3\">
                                <div class=\"card mt-n5\">
                                    <div class=\"card-body p-4\">
                                        <div class=\"text-center\">
                                            <div class=\"profile-user position-relative d-inline-block mx-auto  mb-4\">
                                                <img src=\"assets/images/users/avatar-1.jpg\" class=\"rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow\" alt=\"user-profile-image\">
                                                <div class=\"avatar-xs p-0 rounded-circle profile-photo-edit\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\">
                                                    <label for=\"profile-img-file-input\" class=\"profile-photo-edit avatar-xs\">
                                                        <span class=\"avatar-title rounded-circle bg-light text-body material-shadow\">
                                                            <i class=\"ri-camera-fill\"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class=\"fs-16 mb-1\">Anna Adame</h5>
                                            <p class=\"text-muted mb-0\">Lead Designer / Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-center mb-5\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"card-title mb-0\">Complete Your Profile</h5>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\"><i class=\"ri-edit-box-line align-bottom me-1\"></i> Edit</a>
                                            </div>
                                        </div>
                                        <div class=\"progress animated-progress custom-progress progress-label\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"label\">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-center mb-4\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"card-title mb-0\">Portfolio</h5>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\"><i class=\"ri-add-fill align-bottom me-1\"></i> Add</a>
                                            </div>
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-body text-body material-shadow\">
                                                    <i class=\"ri-github-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"email\" class=\"form-control\" id=\"gitUsername\" placeholder=\"Username\" value=\"@daveadame\">
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-primary material-shadow\">
                                                    <i class=\"ri-global-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"websiteInput\" placeholder=\"www.example.com\" value=\"www.velzon.com\">
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-success material-shadow\">
                                                    <i class=\"ri-dribbble-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"dribbleName\" placeholder=\"Username\" value=\"@dave_adame\">
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-danger material-shadow\">
                                                    <i class=\"ri-pinterest-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"pinterestName\" placeholder=\"Username\" value=\"Advance Dave\">
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class=\"col-xxl-9\">
                                <div class=\"card mt-xxl-n5\">
                                    <div class=\"card-header\">
                                        <ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
                                                    <i class=\"fas fa-home\"></i> Personal Details
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
                                                    <i class=\"far fa-user\"></i> Change Password
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                    <div class=\"card-body p-4\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
                                                <form action=\"javascript:void(0);\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"firstnameInput\" class=\"form-label\">First Name</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"firstnameInput\" placeholder=\"Enter your firstname\" value=\"Dave\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"lastnameInput\" class=\"form-label\">Last Name</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"lastnameInput\" placeholder=\"Enter your lastname\" value=\"Adame\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"phonenumberInput\" class=\"form-label\">Phone Number</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"phonenumberInput\" placeholder=\"Enter your phone number\" value=\"+(1) 987 6543\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"emailInput\" class=\"form-label\">Email Address</label>
                                                                <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"Enter your email\" value=\"daveadame@velzon.com\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"JoiningdatInput\" class=\"form-label\">Joining Date</label>
                                                                <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" id=\"JoiningdatInput\" data-date-format=\"d M, Y\" data-deafult-date=\"24 Nov, 2021\" placeholder=\"Select date\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"skillsInput\" class=\"form-label\">Skills</label>
                                                                <select class=\"form-control\" name=\"skillsInput\" data-choices data-choices-text-unique-true multiple id=\"skillsInput\">
                                                                    <option value=\"illustrator\">Illustrator</option>
                                                                    <option value=\"photoshop\">Photoshop</option>
                                                                    <option value=\"css\">CSS</option>
                                                                    <option value=\"html\">HTML</option>
                                                                    <option value=\"javascript\" selected>Javascript</option>
                                                                    <option value=\"python\">Python</option>
                                                                    <option value=\"php\">PHP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"designationInput\" class=\"form-label\">Designation</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"designationInput\" placeholder=\"Designation\" value=\"Lead Designer / Developer\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"websiteInput1\" class=\"form-label\">Website</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"websiteInput1\" placeholder=\"www.example.com\" value=\"www.velzon.com\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"cityInput\" class=\"form-label\">City</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"cityInput\" placeholder=\"City\" value=\"California\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"countryInput\" class=\"form-label\">Country</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"countryInput\" placeholder=\"Country\" value=\"United States\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"zipcodeInput\" class=\"form-label\">Zip Code</label>
                                                                <input type=\"text\" class=\"form-control\" minlength=\"5\" maxlength=\"6\" id=\"zipcodeInput\" placeholder=\"Enter zipcode\" value=\"90011\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3 pb-2\">
                                                                <label for=\"exampleFormControlTextarea\" class=\"form-label\">Description</label>
                                                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea\" placeholder=\"Enter your description\" rows=\"3\">Hi I'm Anna Adame,It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"hstack gap-2 justify-content-end\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Updates</button>
                                                                <button type=\"button\" class=\"btn btn-soft-success\">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                            <!--end tab-pane-->
                                            <div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
                                                <form action=\"javascript:void(0);\">
                                                    <div class=\"row g-2\">
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"oldpasswordInput\" class=\"form-label\">Old Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"oldpasswordInput\" placeholder=\"Enter current password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"newpasswordInput\" class=\"form-label\">New Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"newpasswordInput\" placeholder=\"Enter new password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"confirmpasswordInput\" class=\"form-label\">Confirm Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"confirmpasswordInput\" placeholder=\"Confirm password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline\">Forgot Password ?</a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"text-end\">
                                                                <button type=\"submit\" class=\"btn btn-success\">Change Password</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                                
                                                
                                            </div>
                                            <!--end tab-pane-->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        

    

        <!-- JAVASCRIPT -->
        <script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
        <script src=\"assets/libs/node-waves/waves.min.js\"></script>
        <script src=\"assets/libs/feather-icons/feather.min.js\"></script>
        <script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
        <script src=\"assets/js/plugins.js\"></script>

        <!-- profile-setting init js -->
        <script src=\"assets/js/pages/profile-setting.init.js\"></script>

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profil/editprofil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
            <!-- Begin page -->
        <div id=\"layout-wrapper\">

            <header id=\"page-topbar\">
        <div class=\"layout-width\">
            <div class=\"navbar-header\">
                <div class=\"d-flex\">
                    <!-- LOGO -->
                    <div class=\"navbar-brand-box horizontal-logo\">
                        <a href=\"index.html\" class=\"logo logo-dark\">
                            <span class=\"logo-sm\">
                                <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                            </span>
                            <span class=\"logo-lg\">
                                <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
                            </span>
                        </a>

                        <a href=\"index.html\" class=\"logo logo-light\">
                            <span class=\"logo-sm\">
                                <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                            </span>
                            <span class=\"logo-lg\">
                                <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
                            </span>
                        </a>
                    </div>

                    <button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none\" id=\"topnav-hamburger-icon\">
                        <span class=\"hamburger-icon\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <!-- App Search-->
                    <form class=\"app-search d-none d-md-block\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\" value=\"\">
                            <span class=\"mdi mdi-magnify search-widget-icon\"></span>
                            <span class=\"mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none\" id=\"search-close-options\"></span>
                        </div>
                        <div class=\"dropdown-menu dropdown-menu-lg\" id=\"search-dropdown\">
                            <div data-simplebar style=\"max-height: 320px;\">
                                <!-- item-->
                                <div class=\"dropdown-header\">
                                    <h6 class=\"text-overflow text-muted mb-0 text-uppercase\">Recent Searches</h6>
                                </div>

                                <div class=\"dropdown-item bg-transparent text-wrap\">
                                    <a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">how to setup <i class=\"mdi mdi-magnify ms-1\"></i></a>
                                    <a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">buttons <i class=\"mdi mdi-magnify ms-1\"></i></a>
                                </div>
                                <!-- item-->
                                <div class=\"dropdown-header mt-2\">
                                    <h6 class=\"text-overflow text-muted mb-1 text-uppercase\">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-bubble-chart-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-lifebuoy-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"ri-user-settings-line align-middle fs-18 text-muted me-2\"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class=\"dropdown-header mt-2\">
                                    <h6 class=\"text-overflow text-muted mb-2 text-uppercase\">Members</h6>
                                </div>

                                <div class=\"notification-list\">
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">Angela Bernier</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">David Grasso</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
                                        <div class=\"d-flex\">
                                            <img src=\"assets/images/users/avatar-5.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"m-0\">Mike Bunch</h6>
                                                <span class=\"fs-11 mb-0 text-muted\">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"text-center pt-3 pb-1\">
                                <a href=\"pages-search-results.html\" class=\"btn btn-primary btn-sm\">View All Results <i class=\"ri-arrow-right-line ms-1\"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=\"d-flex align-items-center\">

                    <div class=\"dropdown d-md-none topbar-head-dropdown header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"bx bx-search fs-22\"></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-search-dropdown\">
                            <form class=\"p-3\">
                                <div class=\"form-group m-0\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
                                        <button class=\"btn btn-primary\" type=\"submit\"><i class=\"mdi mdi-magnify\"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class=\"dropdown ms-1 topbar-head-dropdown header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img id=\"header-lang-img\" src=\"assets/images/flags/us.svg\" alt=\"Header Language\" height=\"20\" class=\"rounded\">
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language py-2\" data-lang=\"en\" title=\"English\">
                                <img src=\"assets/images/flags/us.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">English</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"sp\" title=\"Spanish\">
                                <img src=\"assets/images/flags/spain.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Española</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"gr\" title=\"German\">
                                <img src=\"assets/images/flags/germany.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\"> <span class=\"align-middle\">Deutsche</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"it\" title=\"Italian\">
                                <img src=\"assets/images/flags/italy.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Italiana</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ru\" title=\"Russian\">
                                <img src=\"assets/images/flags/russia.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">русский</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ch\" title=\"Chinese\">
                                <img src=\"assets/images/flags/china.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">中国人</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"fr\" title=\"French\">
                                <img src=\"assets/images/flags/french.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">français</span>
                            </a>

                            <!-- item-->
                            <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ar\" title=\"Arabic\">
                                <img src=\"assets/images/flags/ae.svg\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
                                <span class=\"align-middle\">Arabic</span>
                            </a>
                        </div>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-category-alt fs-22'></i>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
                            <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col\">
                                        <h6 class=\"m-0 fw-semibold fs-15\"> Web Apps </h6>
                                    </div>
                                    <div class=\"col-auto\">
                                        <a href=\"#!\" class=\"btn btn-sm btn-soft-info\"> View All Apps
                                            <i class=\"ri-arrow-right-s-line align-middle\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"p-2\">
                                <div class=\"row g-0\">
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/github.png\" alt=\"Github\">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/bitbucket.png\" alt=\"bitbucket\">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/dribbble.png\" alt=\"dribbble\">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class=\"row g-0\">
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/dropbox.png\" alt=\"dropbox\">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/mail_chimp.png\" alt=\"mail_chimp\">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class=\"col\">
                                        <a class=\"dropdown-icon-item\" href=\"#!\">
                                            <img src=\"assets/images/brands/slack.png\" alt=\"slack\">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-cart-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-shopping-bag fs-22'></i>
                            <span class=\"position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info\">5</span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart\" aria-labelledby=\"page-header-cart-dropdown\">
                            <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col\">
                                        <h6 class=\"m-0 fs-16 fw-semibold\"> My Cart</h6>
                                    </div>
                                    <div class=\"col-auto\">
                                        <span class=\"badge bg-warning-subtle text-warning fs-13\"><span class=\"cartitem-badge\">7</span>
                                            items</span>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style=\"max-height: 300px;\">
                                <div class=\"p-2\">
                                    <div class=\"text-center empty-cart\" id=\"empty-cart\">
                                        <div class=\"avatar-md mx-auto my-3\">
                                            <div class=\"avatar-title bg-info-subtle text-info fs-36 rounded-circle\">
                                                <i class='bx bx-cart'></i>
                                            </div>
                                        </div>
                                        <h5 class=\"mb-3\">Your Cart is Empty!</h5>
                                        <a href=\"apps-ecommerce-products.html\" class=\"btn btn-success w-md mb-3\">Shop Now</a>
                                    </div>
                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-1.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Branded
                                                        T-Shirts</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>10 x \$32</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">320</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-2.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Bentwood Chair</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>5 x \$18</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">89</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-3.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">
                                                        Borosil Paper Cup</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>3 x \$250</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">750</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-6.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Gray
                                                        Styled T-Shirt</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>1 x \$1250</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$ <span class=\"cart-item-price\">1250</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"assets/images/products/img-5.png\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
                                            <div class=\"flex-grow-1\">
                                                <h6 class=\"mt-0 mb-1 fs-14\">
                                                    <a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Stillbird Helmet</a>
                                                </h6>
                                                <p class=\"mb-0 fs-12 text-muted\">
                                                    Quantity: <span>2 x \$495</span>
                                                </p>
                                            </div>
                                            <div class=\"px-2\">
                                                <h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">990</span></h5>
                                            </div>
                                            <div class=\"ps-2\">
                                                <button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\"><i class=\"ri-close-fill fs-16\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border\" id=\"checkout-elem\">
                                <div class=\"d-flex justify-content-between align-items-center pb-3\">
                                    <h5 class=\"m-0 text-muted\">Total:</h5>
                                    <div class=\"px-2\">
                                        <h5 class=\"m-0\" id=\"cart-item-total\">\$1258.58</h5>
                                    </div>
                                </div>

                                <a href=\"apps-ecommerce-checkout.html\" class=\"btn btn-success text-center w-100\">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"ms-1 header-item d-none d-sm-flex\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-toggle=\"fullscreen\">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>

                    <div class=\"ms-1 header-item d-none d-sm-flex\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode\">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class=\"dropdown topbar-head-dropdown ms-1 header-item\" id=\"notificationDropdown\">
                        <button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-notifications-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class='bx bx-bell fs-22'></i>
                            <span class=\"position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger\">3<span class=\"visually-hidden\">unread messages</span></span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-notifications-dropdown\">

                            <div class=\"dropdown-head bg-primary bg-pattern rounded-top\">
                                <div class=\"p-3\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col\">
                                            <h6 class=\"m-0 fs-16 fw-semibold text-white\"> Notifications </h6>
                                        </div>
                                        <div class=\"col-auto dropdown-tabs\">
                                            <span class=\"badge bg-light text-body fs-13\"> 4 New</span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"px-2 pt-2\">
                                    <ul class=\"nav nav-tabs dropdown-tabs nav-tabs-custom\" data-dropdown-tabs=\"true\" id=\"notificationItemsTab\" role=\"tablist\">
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#all-noti-tab\" role=\"tab\" aria-selected=\"true\">
                                                All (4)
                                            </a>
                                        </li>
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#messages-tab\" role=\"tab\" aria-selected=\"false\">
                                                Messages
                                            </a>
                                        </li>
                                        <li class=\"nav-item waves-effect waves-light\">
                                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts-tab\" role=\"tab\" aria-selected=\"false\">
                                                Alerts
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class=\"tab-content position-relative\" id=\"notificationItemsTabContent\">
                                <div class=\"tab-pane fade show active py-2 ps-2\" id=\"all-noti-tab\" role=\"tabpanel\">
                                    <div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <div class=\"avatar-xs me-3 flex-shrink-0\">
                                                    <span class=\"avatar-title bg-info-subtle text-info rounded-circle fs-16\">
                                                        <i class=\"bx bx-badge-check\"></i>
                                                    </span>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-2 lh-base\">Your <b>Elite</b> author Graphic
                                                            Optimization <span class=\"text-secondary\">reward</span> is
                                                            ready!
                                                        </h6>
                                                    </a>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> Just 30 sec ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check01\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check01\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Answered to your comment on the cash flow forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check02\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check02\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <div class=\"avatar-xs me-3 flex-shrink-0\">
                                                    <span class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-16\">
                                                        <i class='bx bx-message-square-dots'></i>
                                                    </span>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-2 fs-13 lh-base\">You have received <b class=\"text-success\">20</b> new messages in the conversation
                                                        </h6>
                                                    </a>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check03\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check03\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item position-relative\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check04\">
                                                        <label class=\"form-check-label\" for=\"all-notification-check04\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"my-3 text-center view-all\">
                                            <button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
                                                All Notifications <i class=\"ri-arrow-right-line align-middle\"></i></button>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"tab-pane fade py-2 ps-2\" id=\"messages-tab\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
                                    <div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">James Lemire</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 30 min ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check01\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check01\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Answered to your comment on the cash flow forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check02\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check02\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-6.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Kenneth Brown</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">Mentionned you in his comment on 📃 invoice #12501.
                                                        </p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 10 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check03\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check03\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"text-reset notification-item d-block dropdown-item\">
                                            <div class=\"d-flex\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
                                                <div class=\"flex-grow-1\">
                                                    <a href=\"#!\" class=\"stretched-link\">
                                                        <h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
                                                    </a>
                                                    <div class=\"fs-13 text-muted\">
                                                        <p class=\"mb-1\">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
                                                        <span><i class=\"mdi mdi-clock-outline\"></i> 3 days ago</span>
                                                    </p>
                                                </div>
                                                <div class=\"px-2 fs-15\">
                                                    <div class=\"form-check notification-check\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check04\">
                                                        <label class=\"form-check-label\" for=\"messages-notification-check04\"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"my-3 text-center view-all\">
                                            <button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
                                                All Messages <i class=\"ri-arrow-right-line align-middle\"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade p-4\" id=\"alerts-tab\" role=\"tabpanel\" aria-labelledby=\"alerts-tab\"></div>

                                <div class=\"notification-actions\" id=\"notification-actions\">
                                    <div class=\"d-flex text-muted justify-content-center\">
                                        Select <div id=\"select-content\" class=\"text-body fw-semibold px-1\">0</div> Result <button type=\"button\" class=\"btn btn-link link-danger p-0 ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#removeNotificationModal\">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"dropdown ms-sm-3 header-item topbar-user\">
                        <button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
                                <span class=\"text-start ms-xl-2\">
                                    <span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">Anna Adame</span>
                                    <span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Founder</span>
                                </span>
                            </span>
                        </button>
                        <div class=\"dropdown-menu dropdown-menu-end\">
                            <!-- item-->
                            <h6 class=\"dropdown-header\">Welcome Anna!</h6>
                            <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Profile</span></a>
                            <a class=\"dropdown-item\" href=\"apps-chat.html\"><i class=\"mdi mdi-message-text-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Messages</span></a>
                            <a class=\"dropdown-item\" href=\"apps-tasks-kanban.html\"><i class=\"mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Taskboard</span></a>
                            <a class=\"dropdown-item\" href=\"pages-faqs.html\"><i class=\"mdi mdi-lifebuoy text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Help</span></a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"mdi mdi-wallet text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Balance : <b>\$5971.67</b></span></a>
                            <a class=\"dropdown-item\" href=\"pages-profile-settings.html\"><span class=\"badge bg-success-subtle text-success mt-1 float-end\">New</span><i class=\"mdi mdi-cog-outline text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Settings</span></a>
                            <a class=\"dropdown-item\" href=\"auth-lockscreen-basic.html\"><i class=\"mdi mdi-lock text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\">Lock screen</span></a>
                            <a class=\"dropdown-item\" href=\"auth-logout-basic.html\"><i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i> <span class=\"align-middle\" data-key=\"t-logout\">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

    <!-- removeNotificationModal -->
    <div id=\"removeNotificationModal\" class=\"modal fade zoomIn\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\" id=\"NotificationModalbtn-close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mt-2 text-center\">
                        <lord-icon src=\"https://cdn.lordicon.com/gsqxdxog.json\" trigger=\"loop\" colors=\"primary:#f7b84b,secondary:#f06548\" style=\"width:100px;height:100px\"></lord-icon>
                        <div class=\"mt-4 pt-2 fs-15 mx-4 mx-sm-5\">
                            <h4>Are you sure ?</h4>
                            <p class=\"text-muted mx-4 mb-0\">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class=\"d-flex gap-2 justify-content-center mt-4 mb-2\">
                        <button type=\"button\" class=\"btn w-sm btn-light\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"button\" class=\"btn w-sm btn-danger\" id=\"delete-notification\">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class=\"navbar-menu\" hidden>
                <!-- LOGO -->
                <div class=\"navbar-brand-box\">
                    <!-- Dark Logo-->
                    <a href=\"index.html\" class=\"logo logo-dark\">
                        <span class=\"logo-sm\">
                            <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href=\"index.html\" class=\"logo logo-light\">
                        <span class=\"logo-sm\">
                            <img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
                        <i class=\"ri-record-circle-line\"></i>
                    </button>
                    <div id=\"two-column-menu\">
                    </div>
                    <ul class=\"navbar-nav\" id=\"navbar-nav\">
                    </ul>
                    <div id=\"scrollbar\">
                        <div>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
        
                
            

                
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div>

                <div class=\"page-content\">
                    <div class=\"container-fluid\">

                        <div class=\"position-relative mx-n4\">
                            <div class=\"profile-wid-bg profile-setting-img\">
                                <img src=\"assets/images/profile-bg.jpg\" class=\"profile-wid-img\" alt=\"\">
                                <div class=\"overlay-content\">
                                    <div class=\"text-end\">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xxl-3\">
                                <div class=\"card mt-n5\">
                                    <div class=\"card-body p-4\">
                                        <div class=\"text-center\">
                                            <div class=\"profile-user position-relative d-inline-block mx-auto  mb-4\">
                                                <img src=\"assets/images/users/avatar-1.jpg\" class=\"rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow\" alt=\"user-profile-image\">
                                                <div class=\"avatar-xs p-0 rounded-circle profile-photo-edit\">
                                                    <input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\">
                                                    <label for=\"profile-img-file-input\" class=\"profile-photo-edit avatar-xs\">
                                                        <span class=\"avatar-title rounded-circle bg-light text-body material-shadow\">
                                                            <i class=\"ri-camera-fill\"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class=\"fs-16 mb-1\">Anna Adame</h5>
                                            <p class=\"text-muted mb-0\">Lead Designer / Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-center mb-5\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"card-title mb-0\">Complete Your Profile</h5>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\"><i class=\"ri-edit-box-line align-bottom me-1\"></i> Edit</a>
                                            </div>
                                        </div>
                                        <div class=\"progress animated-progress custom-progress progress-label\">
                                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <div class=\"label\">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex align-items-center mb-4\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"card-title mb-0\">Portfolio</h5>
                                            </div>
                                            <div class=\"flex-shrink-0\">
                                                <a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\"><i class=\"ri-add-fill align-bottom me-1\"></i> Add</a>
                                            </div>
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-body text-body material-shadow\">
                                                    <i class=\"ri-github-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"email\" class=\"form-control\" id=\"gitUsername\" placeholder=\"Username\" value=\"@daveadame\">
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-primary material-shadow\">
                                                    <i class=\"ri-global-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"websiteInput\" placeholder=\"www.example.com\" value=\"www.velzon.com\">
                                        </div>
                                        <div class=\"mb-3 d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-success material-shadow\">
                                                    <i class=\"ri-dribbble-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"dribbleName\" placeholder=\"Username\" value=\"@dave_adame\">
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"avatar-xs d-block flex-shrink-0 me-3\">
                                                <span class=\"avatar-title rounded-circle fs-16 bg-danger material-shadow\">
                                                    <i class=\"ri-pinterest-fill\"></i>
                                                </span>
                                            </div>
                                            <input type=\"text\" class=\"form-control\" id=\"pinterestName\" placeholder=\"Username\" value=\"Advance Dave\">
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class=\"col-xxl-9\">
                                <div class=\"card mt-xxl-n5\">
                                    <div class=\"card-header\">
                                        <ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
                                                    <i class=\"fas fa-home\"></i> Personal Details
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
                                                    <i class=\"far fa-user\"></i> Change Password
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                    <div class=\"card-body p-4\">
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
                                                <form action=\"javascript:void(0);\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"firstnameInput\" class=\"form-label\">First Name</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"firstnameInput\" placeholder=\"Enter your firstname\" value=\"Dave\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"lastnameInput\" class=\"form-label\">Last Name</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"lastnameInput\" placeholder=\"Enter your lastname\" value=\"Adame\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"phonenumberInput\" class=\"form-label\">Phone Number</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"phonenumberInput\" placeholder=\"Enter your phone number\" value=\"+(1) 987 6543\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"emailInput\" class=\"form-label\">Email Address</label>
                                                                <input type=\"email\" class=\"form-control\" id=\"emailInput\" placeholder=\"Enter your email\" value=\"daveadame@velzon.com\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"JoiningdatInput\" class=\"form-label\">Joining Date</label>
                                                                <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" id=\"JoiningdatInput\" data-date-format=\"d M, Y\" data-deafult-date=\"24 Nov, 2021\" placeholder=\"Select date\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"skillsInput\" class=\"form-label\">Skills</label>
                                                                <select class=\"form-control\" name=\"skillsInput\" data-choices data-choices-text-unique-true multiple id=\"skillsInput\">
                                                                    <option value=\"illustrator\">Illustrator</option>
                                                                    <option value=\"photoshop\">Photoshop</option>
                                                                    <option value=\"css\">CSS</option>
                                                                    <option value=\"html\">HTML</option>
                                                                    <option value=\"javascript\" selected>Javascript</option>
                                                                    <option value=\"python\">Python</option>
                                                                    <option value=\"php\">PHP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"designationInput\" class=\"form-label\">Designation</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"designationInput\" placeholder=\"Designation\" value=\"Lead Designer / Developer\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-6\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"websiteInput1\" class=\"form-label\">Website</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"websiteInput1\" placeholder=\"www.example.com\" value=\"www.velzon.com\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"cityInput\" class=\"form-label\">City</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"cityInput\" placeholder=\"City\" value=\"California\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"countryInput\" class=\"form-label\">Country</label>
                                                                <input type=\"text\" class=\"form-control\" id=\"countryInput\" placeholder=\"Country\" value=\"United States\" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div class=\"mb-3\">
                                                                <label for=\"zipcodeInput\" class=\"form-label\">Zip Code</label>
                                                                <input type=\"text\" class=\"form-control\" minlength=\"5\" maxlength=\"6\" id=\"zipcodeInput\" placeholder=\"Enter zipcode\" value=\"90011\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3 pb-2\">
                                                                <label for=\"exampleFormControlTextarea\" class=\"form-label\">Description</label>
                                                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea\" placeholder=\"Enter your description\" rows=\"3\">Hi I'm Anna Adame,It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"hstack gap-2 justify-content-end\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Updates</button>
                                                                <button type=\"button\" class=\"btn btn-soft-success\">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                            <!--end tab-pane-->
                                            <div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
                                                <form action=\"javascript:void(0);\">
                                                    <div class=\"row g-2\">
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"oldpasswordInput\" class=\"form-label\">Old Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"oldpasswordInput\" placeholder=\"Enter current password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"newpasswordInput\" class=\"form-label\">New Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"newpasswordInput\" placeholder=\"Enter new password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-4\">
                                                            <div>
                                                                <label for=\"confirmpasswordInput\" class=\"form-label\">Confirm Password*</label>
                                                                <input type=\"password\" class=\"form-control\" id=\"confirmpasswordInput\" placeholder=\"Confirm password\">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"mb-3\">
                                                                <a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline\">Forgot Password ?</a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"text-end\">
                                                                <button type=\"submit\" class=\"btn btn-success\">Change Password</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                                
                                                
                                            </div>
                                            <!--end tab-pane-->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        

    

        <!-- JAVASCRIPT -->
        <script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
        <script src=\"assets/libs/node-waves/waves.min.js\"></script>
        <script src=\"assets/libs/feather-icons/feather.min.js\"></script>
        <script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
        <script src=\"assets/js/plugins.js\"></script>

        <!-- profile-setting init js -->
        <script src=\"assets/js/pages/profile-setting.init.js\"></script>

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>

{% endblock %}
", "profil/editprofil.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev\\templates\\profil\\editprofil.html.twig");
    }
}
