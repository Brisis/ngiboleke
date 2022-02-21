<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Front\Home\HomeController;

use App\Http\Controllers\Front\Shop\MerchantController;
use App\Http\Controllers\Front\Shop\ProductController;
use App\Http\Controllers\Front\Shop\CategoryController;

use App\Http\Controllers\Front\Checkout\CartController;
use App\Http\Controllers\Front\Checkout\PaymentController;

use App\Http\Controllers\Front\Site\ContactController;
use App\Http\Controllers\Front\Site\TermsController;
use App\Http\Controllers\Front\Site\AboutController;
use App\Http\Controllers\Front\Site\SettingsController;
use App\Http\Controllers\Front\Site\BlogController;

use App\Http\Controllers\Front\Help\FaqController;
use App\Http\Controllers\Front\Help\ChatController;
use App\Http\Controllers\Front\Help\SupportController;

use App\Http\Controllers\Front\Account\ProfileController;
use App\Http\Controllers\Front\Account\WishlistController;
use App\Http\Controllers\Front\Account\OrdersController;
use App\Http\Controllers\Front\Account\HistoryController;
use App\Http\Controllers\Front\Account\NotificationController;

/* Seller Controllers */
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\Customer\SellerCustomerController;
use App\Http\Controllers\Seller\Order\SellerOrderController;
use App\Http\Controllers\Seller\Review\SellerReviewController;
use App\Http\Controllers\Seller\Product\SellerProductController;
use App\Http\Controllers\Seller\Settings\SellerSettingsController;

/* Admin Controllers */
use App\Http\Controllers\Admin\AdminDashboardController;

//Order Controller
use App\Http\Controllers\Admin\Order\AdminOrderController;

//Category Controller
use App\Http\Controllers\Admin\Category\AdminCategoryController;

//Verification Controller
use App\Http\Controllers\Admin\Verifications\AdminVerificationsController;

//Seller Controller
use App\Http\Controllers\Admin\Seller\AdminSellerController;

//Statistics Controller
use App\Http\Controllers\Admin\Statistics\AdminStatisticsController;

//Product Controller
use App\Http\Controllers\Admin\Product\AdminProductController;

//Promotion Controller
use App\Http\Controllers\Admin\Promotion\AdminPromotionController;

//Rental Controller
use App\Http\Controllers\Admin\Rental\AdminRentalController;

//Sale Controller
use App\Http\Controllers\Admin\Sale\AdminSaleController;



//Home Controllers
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/page-not-found', [HomeController::class, 'notFound'])->name('404');

//Authentication

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/email/verify', [RegisterController::class, 'verify'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verification'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [RegisterController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/forgot-password', [LoginController::class, 'forgot'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [LoginController::class, 'forgotPost'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [LoginController::class, 'reset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->middleware('guest')->name('password.update');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//Shopping
//Merchant
Route::group([
  'prefix' => 'merchants',
  'as' => 'merchants.'
],
function(){
  Route::get('/', [MerchantController::class, 'index'])->name('merchants');
  Route::get('/{merchant:username}', [MerchantController::class, 'merchant'])->name('merchant');
  Route::get('/{merchant:username}/about', [MerchantController::class, 'about'])->name('about_merchant');
  Route::get('/{merchant:username}/reviews', [MerchantController::class, 'reviews'])->name('reviews_merchant');
});

Route::group(['middleware' => 'is_customer_verified'], function(){
  Route::get('/create_shop', [MerchantController::class,'createShop'])->name("create_shop");
  Route::post('/create_shop', [MerchantController::class,'store']);
});

Route::get('/property/{product:slug}', [ProductController::class, 'index'])->name('product');
Route::post('/add_review/{product}', [ProductController::class, 'addReview'])->middleware('auth')->name('add_review');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{category:slug}', [CategoryController::class, 'category'])->name('category');

Route::get('/collections', [CategoryController::class, 'collections'])->name('collections');
Route::get('/collections/{collection:slug}', [CategoryController::class, 'collection'])->name('collection');

//Search Products
Route::post('/search', [ProductController::class, 'search'])->name('search');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update']);
Route::delete('remove-from-cart', [CartController::class, 'remove']);
Route::post('remove-all-from-cart', [CartController::class, 'removeAll'])->name('remove_all');

//Checkout
Route::group(['middleware' => 'auth'], function(){
  Route::get('/checkout', [PaymentController::class, 'index'])->name('checkout');
  Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
  Route::get('/paid', [PaymentController::class, 'paid'])->name('paid');
});

//Website Information Controllers
Route::get('/terms-and-services', [TermsController::class, 'index'])->name('terms');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/verify', [SettingsController::class, 'verify'])->name('verify');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

//Account Controllers
Route::prefix('help')->group(function(){
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    //Route::get('/get-started', [SupportController::class, 'index'])->name('get_started');
});

Route::group(['middleware' => 'auth'], function ()
{
  //Account Controllers
  Route::group([
    'prefix' => 'account',
    'as' => 'account.',
  ],
  function(){
      Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
      // Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
      Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
      Route::get('/order', [OrdersController::class, 'order'])->name('order');
      //Route::get('/history', [HistoryController::class, 'index'])->name('history');
      // Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
      // Route::get('/notification', [NotificationController::class, 'notification'])->name('notification');

      //Account Settings
      Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
      //Update Account Details
      Route::get('/edit_details', [ProfileController::class, 'editDetails'])->name('edit_details');
      Route::post('/edit_details', [ProfileController::class, 'updateDetails']);

      //Update Account Address
      Route::get('/edit_address', [ProfileController::class, 'editAddress'])->name('edit_address');
      Route::post('/edit_address', [ProfileController::class, 'addAddress']);
      Route::put('/edit_address', [ProfileController::class, 'updateAddress']);

      //Update Account Picture
      Route::get('/edit_picture', [ProfileController::class, 'editPicture'])->name('edit_picture');
      Route::post('/edit_picture', [ProfileController::class, 'updatePicture']);

      //Account Verification
      Route::get('/verify', [ProfileController::class, 'addVerification'])->name('verify');
      Route::post('/verify', [ProfileController::class, 'verify']);
  });


  //Seller Controllers
  Route::group([
    'prefix' => 'seller',
    'as' => 'seller.',
    'middleware' => 'is_seller'
  ],
  function(){
      Route::get('/dashboard', [SellerDashboardController::class,'index'])->name("dashboard");

      Route::get('/verify', [SellerDashboardController::class,'verify'])->name("verify");
      Route::post('/verify', [SellerDashboardController::class,'verifyMerchant']);

      Route::get('/unverified', [SellerDashboardController::class,'unverified'])->name("unverified");

      Route::get('/edit', [SellerDashboardController::class,'profile'])->name("edit");
      Route::post('/edit', [SellerDashboardController::class,'storeChanges']);

      Route::get('/edit_picture', [SellerDashboardController::class,'edit_picture'])->name("edit_picture");
      Route::post('/edit_picture', [SellerDashboardController::class,'storeLogoChanges']);

      Route::get('/edit_cover', [SellerDashboardController::class,'edit_cover'])->name("edit_cover");
      Route::post('/edit_cover', [SellerDashboardController::class,'storeCoverChanges']);

      Route::group(['middleware' => 'is_seller'], function ()
      {
        //Products
        Route::group([
          'prefix' => 'products',
          'as' => 'products.'
        ],
        function(){
          Route::get('/', [SellerProductController::class,'index'])->name("products");

          Route::get('/add', [SellerProductController::class,'addProduct'])->name("add");
          Route::post('/add', [SellerProductController::class,'store']);

          Route::get('/{product}/edit', [SellerProductController::class,'editProduct'])->name("edit");
          Route::post('/{product}/edit', [SellerProductController::class,'storeEdit']);

          Route::post('/{product}/publish', [SellerProductController::class,'publish'])->name('publish');
          Route::post('/{product}/make_draft', [SellerProductController::class,'makeDraft'])->name('make_draft');

          Route::get('/{product}/add_image', [SellerProductController::class,'addImages'])->name("add_image");
          Route::post('/{product}/add_image', [SellerProductController::class,'storeImages']);

          Route::get('/{product}/add_color', [SellerProductController::class,'addColor'])->name("add_color");
          Route::post('/{product}/add_color', [SellerProductController::class,'storeColor']);

          Route::get('/{product}/add_promotion', [SellerProductController::class,'addPromotion'])->name("add_promotion");
          Route::post('/{product}/add_promotion', [SellerProductController::class,'storePromotion']);

          Route::get('/{product}/add_rental', [SellerProductController::class,'addRental'])->name("add_rental");
          Route::post('/{product}/add_rental', [SellerProductController::class,'storeRental']);

          Route::get('/{product}/add_hirepurchase', [SellerProductController::class,'addHirePurchase'])->name("add_hirepurchase");
          Route::post('/{product}/add_hirepurchase', [SellerProductController::class,'storeHirePurchase']);
        });

        Route::get('/customers', [SellerCustomerController::class,'index'])->name("customers");

        Route::get('/orders', [SellerOrderController::class,'index'])->name("orders");
        Route::get('/order', [SellerOrderController::class,'order'])->name("order");

        Route::get('/reviews', [SellerReviewController::class,'index'])->name("reviews");
      });


      Route::get('/settings', [SellerSettingsController::class,'index'])->name("settings");
  });

  //Admin Controllers
  Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'is_admin'
  ],
  function(){
      Route::get('/dashboard', [AdminDashboardController::class,'index'])->name("dashboard");
      Route::get('/users', [AdminDashboardController::class,'users'])->name("users");

      Route::get('/login', [AdminDashboardController::class,'login'])->name("login");
      Route::get('/add-product', [AdminDashboardController::class,'addProduct'])->name("add_product");


      //Admin Categories
      Route::group([
        'prefix' => 'categories',
        'as' => 'categories.'
      ],
      function(){
        //Location
        Route::get('/', [AdminCategoryController::class,'index'])->name("categories");
        Route::get('/categories/{category}', [AdminCategoryController::class,'category'])->name("category");
        //Add Category
        Route::get('/add_category', [AdminCategoryController::class,'addCategory'])->name("add_category");
        Route::post('/add_category', [AdminCategoryController::class,'store']);
        //Add Collections
        Route::get('/{category}/add_collection', [AdminCategoryController::class,'addCollection'])->name("add_collection");
        Route::post('/{category}/add_collection', [AdminCategoryController::class,'storeCollection']);
      });

      //Admin Locations
      Route::group([
        'prefix' => 'locations',
        'as' => 'locations.'
      ],
      function(){
        Route::get('/', [AdminLocationController::class,'index'])->name("locations");
        Route::get('/add_location', [AdminLocationController::class,'addLocation'])->name("add_location");
        Route::post('/add_location', [AdminLocationController::class,'store']);
      });

      //Admin Verification
      Route::group([
        'prefix' => 'verifications',
        'as' => 'verifications.'
      ],
      function(){
        Route::get('/', [AdminVerificationsController::class,'index'])->name("verifications");

        Route::get('/{verification}', [AdminVerificationsController::class,'verification'])->name("verification");
        Route::post('/{verification}', [AdminVerificationsController::class,'verify']);

        Route::post('/merchant/{verification}', [AdminVerificationsController::class,'verifyMerchant'])->name("verification_merchant");;
      });

      //Admin Products
      Route::group([
        'prefix' => 'products',
        'as' => 'products.'
      ],
      function(){
        Route::get('/', [AdminProductController::class,'index'])->name("products");
        Route::get('/drafts', [AdminProductController::class,'drafts'])->name("drafts");

        Route::get('/{product}', [AdminProductController::class,'product'])->name("product");
      });

      //Admin Promotions
      Route::group([
        'prefix' => 'promotions',
        'as' => 'promotions.'
      ],
      function(){
        //Promotions
        Route::get('/', [AdminPromotionController::class,'index'])->name("promotions");
        //Route::get('/promotions', [AdminPromotionController::class,'index'])->name("promotions");
        Route::get('/add_promotion', [AdminPromotionController::class,'addPromotion'])->name("add_promotion");
        Route::post('/add_promotion', [AdminPromotionController::class,'store']);
      });

      //Admin Rentals
      Route::group([
        'prefix' => 'rentals',
        'as' => 'rentals.'
      ],
      function(){
        //Rentals
        Route::get('/', [AdminRentalController::class,'index'])->name("rentals");
        //Route::get('/rentals', [AdminRentalController::class,'index'])->name("rentals");
        Route::get('/add_rental', [AdminRentalController::class,'addRental'])->name("add_rental");
        Route::post('/add_rental', [AdminRentalController::class,'store']);
      });

      //Admin Orders
      Route::group([
        'prefix' => 'orders',
        'as' => 'orders.'
      ],
      function(){
        //GET
        Route::get('/', [AdminOrderController::class,'index'])->name("orders");
        Route::get('/order', [AdminOrderController::class,'order'])->name("order");
      });

      //Admin Orders
      Route::group([
        'prefix' => 'sellers',
        'as' => 'sellers.'
      ],
      function(){
        //GET
        Route::get('/', [AdminSellerController::class,'index'])->name("sellers");
        Route::get('/seller/{merchant}', [AdminSellerController::class,'seller'])->name("seller");
      });

      //Admin Orders
      Route::group([
        'prefix' => 'statistics',
        'as' => 'statistics.'
      ],
      function(){
        //GET
        Route::get('/', [AdminStatisticsController::class,'index'])->name("statistics");
      });

      Route::get('/sales', [AdminSaleController::class,'index'])->name("sales");
      Route::get('/settings', [AdminDashboardController::class,'settings'])->name("settings");
  });
});
