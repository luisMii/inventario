<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Analytic Dashboard
     */
    public function index()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Home',
                'url' => '/',
                'active' => true
            ],
        ];

        return view('Index', [
            'pageTitle' => 'Blank Page',
            'breadcrumbItems' => $breadcrumbsItems
        ]);
        
    }
    
    public function clientes()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Clientes',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Clientes', [
            'pageTitle' => 'Blank Page clientes',
            'breadcrumbItems' => $breadcrumbsItems
        ]);
        
        
    }
    public function cotizacion()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Cotizacion',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Cotizacion', [
            'pageTitle' => 'Blank Page cotizacion',
            'breadcrumbItems' => $breadcrumbsItems
        ]);
        
        
    }
    public function ini_cotizacion()
    {
        $breadcrumbsItems = [
            [
                'name' => 'IniCotizacion',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Ini_cotizacion', [
            'pageTitle' => 'Blank Page ini_cotizacion',
            'breadcrumbItems' => $breadcrumbsItems
        ]);
        
        
    }
    public function ver_producto()
    {
        $breadcrumbsItems = [
            [
                'name' => 'ver_producto',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Ver_producto', [
            'pageTitle' => 'Blank Page clientes',
            'breadcrumbItems' => $breadcrumbsItems
        ]);
        
        
    }
    public function inventario()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Inventario',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Inventario', [
            'pageTitle' => 'Blank Page inventario',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    public function nota()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Nota',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Nota', [
            'pageTitle' => 'Blank Page nota',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    public function orden()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Orden',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Orden', [
            'pageTitle' => 'Blank Page orden',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    public function orden_compra()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Orden',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Orden_compra', [
            'pageTitle' => 'Blank Page orden',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    public function proveedores()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Proveedores',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Proveedores', [
            'pageTitle' => 'Blank Page proveedores',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    public function certificado_calidad()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Certificado_calidad',
                'url' => '/',
                'active' => true
            ],
        ];
        return view('Certificado_calidad', [
            'pageTitle' => 'CERTIFICADO DE CALIDAD',
            'breadcrumbItems' => $breadcrumbsItems]);
        
    }
    /**
     * Ecommerce Dashboard
     */
    public function ecommerceDashboard()
    {
        $chartData = [
            'revenueReport' => [
                'month' => ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                'revenue' => [
                    'title' => 'Revenue',
                    'data' => [76, 85, 101, 98, 87, 105, 91, 114, 94],
                ],
                'netProfit' => [
                    'title' => 'Net Profit',
                    'data' => [35, 41, 36, 26, 45, 48, 52, 53, 41],
                ],
                'cashFlow' => [
                    'title' => 'Cash Flow',
                    'data' => [44, 55, 57, 56, 61, 58, 63, 60, 66],
                ],
            ],
            'revenue' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'data' => [350, 500, 950, 700, 100],
                'total' => 4000,
                'currencySymbol' => '$',
            ],
            'productSold' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'quantity' => [800, 600, 1000, 50, 100],
                'total' => 100,
            ],
            'growth' => [
                'year' => [1991, 1992, 1993, 1994, 1995],
                'perYearRate' => [10, 20, 30, 40, 10],
                'total' => 10,
                'preSymbol' => '+',
                'postSymbol' => '%',
            ],
            'lastWeekOrder' => [
                'name' => 'Last Week Order',
                'data' => [44, 55, 57, 56, 61, 10],
                'total' => '10k+',
                'percentage' => 100,
                'preSymbol' => '-',
            ],
            'lastWeekProfit' => [
                'name' => 'Last Week Profit',
                'data' => [44, 55, 57, 56, 61, 10],
                'total' => '10k+',
                'percentage' => 100,
                'preSymbol' => '+',
            ],
            'lastWeekOverview' => [
                'labels' => ["Success", "Return"],
                'data' => [60, 40],
                'title' => 'Profit',
                'amount' => '650k+',
                'percentage' => 0.02,
            ],
        ];
        $topCustomers = [
            [
                'serialNo' => 1,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'green',
                'backgroundColor' => 'sky',
                'isMvpUser' => true,
                'photo' => '/images/customer.png',
            ],
            [
                'serialNo' => 2,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'sky',
                'backgroundColor' => 'orange',
                'isMvpUser' => false,
                'photo' => '/images/customer.png',
            ],
            [
                'serialNo' => 3,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'orange',
                'backgroundColor' => 'green',
                'isMvpUser' => false,
                'photo' => '/images/customer.png',
            ],
            [
                'serialNo' => 4,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'green',
                'backgroundColor' => 'sky',
                'isMvpUser' => true,
                'photo' => '/images/customer.png',
            ],
            [
                'serialNo' => 5,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'sky',
                'backgroundColor' => 'orange',
                'isMvpUser' => false,
                'photo' => '/images/customer.png',
            ],
            [
                'serialNo' => 6,
                'name' => 'Danniel Smith',
                'totalPoint' => 50.5,
                'progressBarPoint' => 50,
                'progressBarColor' => 'orange',
                'backgroundColor' => 'green',
                'isMvpUser' => false,
                'photo' => '/images/customer.png',
            ],
        ];
        $recentOrders = [
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'due',
            ],
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'paid',
            ],
            [
                'companyName' => 'Biffco Enterprises Ltd.',
                'email' => 'Biffco@biffco.com',
                'productType' => 'Technology',
                'invoiceNo' => 'INV-0001',
                'amount' => 1000,
                'currencySymbol' => '$',
                'paymentStatus' => 'due',
            ],
        ];

        return view('dashboards.ecommerce', [
            'pageTitle' => 'Ecommerce Dashboard',
            'data' => $chartData,
            'topCustomers' => $topCustomers,
            'recentOrders' => $recentOrders,
        ]);
    }
}
