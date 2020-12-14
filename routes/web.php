<?php

Route::get('/', [
    "uses" => "FrontEnd\MainController@index",
    "as"   => "/"
]);

Route::post('/store-info', 'FrontEnd\MainController@storeInfo')->name('storeInfo');

// Contact Start
Route::get('/contact', [
    "uses" => "ContactController@contact",
    "as"   => "contact"
]);

Route::post('/contact-message', [
    'uses' => 'ContactController@sendMessage',
    'as'   => 'contact-message-send'
]);
// Contact End

//Advanced Search Start

Route::post('/advanced-search', [
    'uses' => "FrontEnd\MainController@advancedSearch",
    'as'   => 'advanced-search'
]);

//Advanced Search End

// Career Start
Route::get('/career', [
    "uses" => "FrontEnd\CareerController@index",
    "as"   => "career"
]);

Route::post('/cv-send', [
    'uses' => 'FrontEnd\CareerController@sendCv',
    'as'   => 'career-cv-send'
]);
// Career End

// About Start
Route::get('/about', [
    "uses" => "FrontEnd\MainController@about",
    "as"   => "about"
]);

Route::get('/message-from-director', [
    "uses" => "MessagesFromCompany@mdMsg",
    "as"   => "mdmsg"
]);

Route::get('/message-from-chairman', [
    "uses" => "MessagesFromCompany@chairmanMsg",
    "as"   => "chairmanmsg"
]);
// About End

//Comment Start
Route::post('/comment', [
    "uses"  => "FrontEnd\BlogController@saveComment",
    "as"    => "comment-save"
]);
//Comment End

//FAq Start
Route::get('/faq', [
    "uses"  => "FrontEnd\MainController@faq",
    "as"    => "faq"
]);
//FAq End

//Category Start
Route::get('/news/category/{slug}', [
    "uses"  => "FrontEnd\BlogController@blogShowByCategory",
    "as"    => "category-wise-blog"
]);
//Category End

// Booking Contact Start
Route::post('/booking-contact-message', [
    'uses' => 'Admin\Booking\BookingContactController@sendBookimgMessage',
    'as'   => 'booking-contact-message-send'
]);
// Booking Contact End

//Awards & Recognition Start
Route::get('/awards', [
    'uses' => 'FrontEnd\MainController@award',
    'as'   => 'awards'
]);
//Awards & Recognition End

//companies Start
Route::get('/companies', [
    'uses' => 'FrontEnd\MainController@concern',
    'as'   => 'companies'
]);

Route::get('/companies/{id}', [
    'uses' => 'FrontEnd\MainController@concernShow',
    'as'   => 'companies-show'
]);
//companies End

//Gallery Start
Route::get('/gallery', [
    'uses' => 'GalleryController@showImage',
    'as'   => 'gallery'
]);
//Gallery End

//Video Gallery Start
Route::get('/video-gallery', [
    'uses' => 'FrontEnd\MainController@galleryVideo',
    'as'   => 'video-gallery'
]);
//Video Gallery End

//News Start
Route::get('/news', [
    'uses' => 'FrontEnd\BlogController@index',
    'as'   => 'news'
]);

Route::get('/news/{slug}', [
    'uses' => 'FrontEnd\BlogController@blogDetails',
    'as'   => 'news-detail'
]);
//news End

//Project Start
Route::get('/project/{slug}', [
    'uses' => 'FrontEnd\ProjectController@projectShow',
    'as'   => 'project'
]);

Route::get('/projects', [
    'uses' => 'FrontEnd\ProjectController@projectList',
    'as'   => 'project-list'
]);

Route::get('/project-type/{type}/{status}', [
    'uses' => 'FrontEnd\ProjectController@projectTypeStatus',
    'as'   => 'type-status'
]);
//Project End

//Auth Start
Auth::routes();
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function()
{
    Route::get('/dashboard', [
        "uses" => "Admin\MainController@dashboard",
        "as"   => "dashboard"
    ]);
    
    //Start Why Choose
    Route::get('/settings/front-page/why-choose', [
        "uses" => "WhyChooseController@index",
        "as"   => "general-setting-whychoose"
    ]);
    
    Route::post('/settings/front-page/why-choose', [
        "uses" => "WhyChooseController@saveInfo",
        "as"   => "general-setting-whychoose"
    ]);
    
    //End Why Choose
    
    //Start Company Messages
    Route::get('/settings/company-messages', [
        "uses" => "MessagesFromCompany@addInfo",
        "as"   => "company-messages"
    ]);
    
    Route::post('/settings/company-messages/save', [
        "uses" => "MessagesFromCompany@saveInfo",
        "as"   => "company-message"
    ]);
    
    //End Company Messages
    
    // Career Start
    Route::get('/career/add', [
        "uses" => "FrontEnd\CareerController@careerIndex",
        "as"   => "career-add"
    ]);
    
    Route::post('/career-save', [
        'uses' => 'FrontEnd\CareerController@careerAdd',
        'as'   => 'career-save'
    ]);
    
    Route::get('/career/manage', [
        "uses" => "FrontEnd\CareerController@careerManage",
        "as"   => "career-manage"
    ]);
    
    Route::get('/career/delete/{id}', [
        "uses" => "FrontEnd\CareerController@careerDelete",
        "as"   => "career-delete"
    ]);
    
    Route::get('/career/edit/{id}', [
        "uses" => "FrontEnd\CareerController@careerEdit",
        "as"   => "career-edit"
    ]);
    
    Route::post('/career-update', [
        'uses' => 'FrontEnd\CareerController@careerUpdate',
        'as'   => 'career-update'
    ]);
    // Career End
    
    // Award Start
    Route::get('/award/add', [
        "uses" => "FrontEnd\MainController@awardIndex",
        "as"   => "award-add"
    ]);
    
    Route::post('/award-save', [
        'uses' => 'FrontEnd\MainController@awardAdd',
        'as'   => 'award-save'
    ]);
    
    Route::get('/award/manage', [
        "uses" => "FrontEnd\MainController@awardManage",
        "as"   => "award-manage"
    ]);
    
    Route::get('/award/edit/{id}', [
        "uses" => "FrontEnd\MainController@awardEdit",
        "as"   => "award-edit"
    ]);
    
    Route::post('/award/update', [
        "uses" => "FrontEnd\MainController@awardUpdate",
        "as"   => "award-update"
    ]);
    
    Route::get('/award/delete/{id}', [
        "uses" => "FrontEnd\MainController@awardDelete",
        "as"   => "award-delete"
    ]);
    // Award End
    
    // Concern Start
    Route::get('/concern/add', [
        "uses" => "FrontEnd\MainController@concernIndex",
        "as"   => "concern-add"
    ]);
    
    Route::get('/concern/manage', [
        "uses" => "FrontEnd\MainController@concernManage",
        "as"   => "concern-manage"
    ]);
    
    Route::post('/concern-save', [
        'uses' => 'FrontEnd\MainController@concernAdd',
        'as'   => 'concern-save'
    ]);
    
    Route::get('/concern/edit/{id}', [
        "uses" => "FrontEnd\MainController@concernEdit",
        "as"   => "concern-edit"
    ]);
    
    Route::post('/concern-update', [
        'uses' => 'FrontEnd\MainController@concernUpdate',
        'as'   => 'concern-update'
    ]);
    
    Route::get('/concern/delete/{id}', [
        "uses" => "FrontEnd\MainController@concernDelete",
        "as"   => "concern-delete"
    ]);
    // Concern End

    //Start Basic Settings
    Route::get('/settings/general', [
        "uses" => "Admin\Settings\BasicSettingController@index",
        "as"   => "general-setting"
    ]);

    Route::post('/settings/general/edit/', [
        "uses" => "Admin\Settings\BasicSettingController@settingsBasic",
        "as"   => "general-setting-edit"
    ]);
    
    Route::post('/settings/general/edit-favicon/', [
        "uses" => "Admin\Settings\BasicSettingController@faviconUpdate",
        "as"   => "general-setting-edit-favicon"
    ]);
    
    Route::post('/settings/about-company/about', [
        "uses" => "CompanyOverviewController@aboutUpdate",
        "as"   => "company-about-update"
    ]);
    
    Route::post('/settings/about-company/aboutImage', [
        "uses" => "CompanyOverviewController@aboutImageUpdate",
        "as"   => "company-about-image"
    ]);
    
    Route::get('/settings/about-company', [
        "uses" => "CompanyOverviewController@index",
        "as"   => "about-company"
    ]);
    
    Route::get('/settings/company-info', [
        "uses" => "CompanyOverviewController@companyInfo",
        "as"   => "edit-company-info"
    ]);

    Route::post('/settings/company-info-update', [
        "uses" => "CompanyOverviewController@companyInfoUpdate",
        "as"   => "update-company-info"
    ]);
   
    // Route::post('/settings/general/edit-favicon/', [
    //     "uses" => "Admin\Settings\BasicSettingController@faviconUpdate",
    //     "as"   => "general-setting-edit-favicon"
    // ]);

    //Sliders Start
    Route::get('/settings/sliders-add', [
        "uses" => "Admin\Settings\SliderController@addSliders",
        'as' => 'sliders-add'
    ]);
    
    Route::post('/settings/sliders-add', [
        "uses" => "Admin\Settings\SliderController@saveSliders",
        'as' => 'sliders-add'
    ]);
    
    Route::get('/settings/sliders-manage', [
        "uses" => "Admin\Settings\SliderController@manageSliders",
        'as' => 'sliders-manage'
    ]);
    
    Route::get('/settings/sliders-manage-publish/{id}', [
        "uses" => "Admin\Settings\SliderController@publishedSliders",
        'as' => 'sliders-manage-publish'
    ]);
    
    Route::get('/settings/sliders-manage-unpublish/{id}', [
        "uses" => "Admin\Settings\SliderController@unPublishedSliders",
        'as' => 'sliders-manage-unpublish'
    ]);
    
    Route::get('/settings/sliders-edit/{id}', [
        "uses" => "Admin\Settings\SliderController@editSliders",
        'as' => 'sliders-edit'
    ]);
    
    Route::post('/settings/sliders-update-image', [
        "uses" => "Admin\Settings\SliderController@updateSlidersImage",
        'as' => 'sliders-update-image'
    ]);
    
    Route::post('/settings/sliders-update', [
        "uses" => "Admin\Settings\SliderController@updateSliders",
        'as' => 'sliders-update'
    ]);
    
    Route::get('/settings/sliders-delete/{id}', [
        "uses" => "Admin\Settings\SliderController@deleteSliders",
        'as' => 'sliders-delete'
    ]);
    //Sliders End
    //End Basic Settings
    
    //Video Gallery Start
    Route::get('/video-add', [
        'uses' => 'FrontEnd\MainController@addVideo',
        'as'   => 'video-add'
    ]);
    
    Route::post('/video-save', [
            'uses' => 'FrontEnd\MainController@saveVideo',
            'as'  => 'video-save'
        ]);
//Video Gallery End

Route::get('/image-add', [
        'uses' => 'GalleryController@addImage',
        'as'   => 'image-add'
    ]);
    
    Route::post('/image-save', [
            'uses' => 'GalleryController@saveImage',
            'as'  => 'image-save'
        ]);
        
        Route::get('/image-category-add', [
        'uses' => 'GalleryController@addImageCategory',
        'as'   => 'image-category-add'
    ]);
    
    Route::post('/image-category-save', [
            'uses' => 'GalleryController@saveImageCategory',
            'as'  => 'image-category-save'
        ]);

    //offer Page
    
    //Offer Start
    Route::get('/offer/offer-add', [
        "uses" => "Admin\Offer\OfferController@addOffer",
        'as' => 'offer-add'
    ]);
    
    Route::post('/offer/offer-save', [
        "uses" => "Admin\Offer\OfferController@saveOffer",
        'as' => 'offer-save'
    ]);
    
    //End Offer

    //Start Contact
    Route::get('/contact-message', [
        'uses' => 'Admin\Contact\ContactController@contactMessage',
        'as' => 'contact-message'
    ]);

    Route::get('/contact-message-view/{id}', [
        'uses' => 'Admin\Contact\ContactController@showContactMessage',
        'as' => 'contact-message-view'
    ]);

    Route::get('/contact-message-unread/{id}', [
        'uses' => 'Admin\Contact\ContactController@unreadContactMessage',
        'as' => 'contact-message-unread'
    ]);

    Route::get('/contact-message-trash', [
        'uses' => 'Admin\Contact\ContactController@trashContactMessages',
        'as' => 'contact-messages-trash'
    ]);

    Route::get('/contact-message-trash/{id}', [
        'uses' => 'Admin\Contact\ContactController@trashContactMessage',
        'as' => 'contact-message-trash'
    ]);

    Route::get('/contact-message-trash-restore/{id}', [
        'uses' => 'Admin\Contact\ContactController@trashRestoreContactMessage',
        'as' => 'contact-message-trash-restore'
    ]);

    Route::get('/contact-list', [
        'uses' => 'Admin\Contact\ContactController@contactList',
        'as' => 'contact-list'
    ]);

    Route::get('/contact-info', [
        'uses' => 'ContactInformationController@contactInfoAdd',
        'as' => 'contact-info'
    ]);

    Route::post('/contact-info', [
        'uses' => 'ContactInformationController@contactInfoSave',
        'as' => 'contact-info'
    ]);
    //End Contact
    
    //Start Booking
    
    Route::get('/booking/contact-message', [
        'uses' => 'Admin\Booking\BookingContactController@index',
        'as' => 'booking-contact-message'
    ]);
    
    Route::get('/booking/contact-message/{id}', [
        'uses' => 'Admin\Booking\BookingContactController@updateStatus',
        'as' => 'update-status'
    ]);
    
    //End Booking
    
    //Start FAQ
    
    Route::get('/faq/add-faq', [
        'uses' => 'Admin\Faq\FaqController@addFaq',
        'as' => 'add-faq'
    ]);
    
    Route::post('/faq/save-faq', [
        'uses' => 'Admin\Faq\FaqController@saveFaq',
        'as' => 'save-faq'
    ]);

    Route::get('/faq/mange-faq', [
        'uses' => 'Admin\Faq\FaqController@manageFaq',
        'as' => 'faq-manage'
    ]);

    Route::get('/faq/edit-faq/{id}', [
        'uses' => 'Admin\Faq\FaqController@editFaq',
        'as' => 'faq-edit'
    ]);

    Route::get('/faq/delete-faq/{id}', [
        'uses' => 'Admin\Faq\FaqController@deleteFaq',
        'as' => 'faq-delete'
    ]);

    Route::post('/faq/update-faq', [
        'uses' => 'Admin\Faq\FaqController@updateFaq',
        'as' => 'faq-update'
    ]);
    
    //End FAQ

    //Start Project
    Route::get('/project/add-project', [
        'uses' => 'Admin\Project\ProjectController@addProject',
        'as'  => 'add-project'
    ]);

    Route::post('/project/add-project', [
        'uses' => 'Admin\Project\ProjectController@saveProject',
        'as'  => 'add-project'
    ]);
    
    Route::get('/project/manage-project/land', [
        'uses' => 'Admin\Project\ProjectController@manageProjectLand',
        'as'  => 'manage-project-land'
    ]);
    
    Route::get('/project/manage-project/apartment', [
        'uses' => 'Admin\Project\ProjectController@manageProjectApartment',
        'as'  => 'manage-project-apartment'
    ]);
    
    Route::get('/project/manage-project/commercial', [
        'uses' => 'Admin\Project\ProjectController@manageProjectCommercial',
        'as'  => 'manage-project-commercial'
    ]);
    
    Route::get('/project/edit-project/{id}', [
        'uses' => 'Admin\Project\ProjectController@editProject',
        'as'  => 'edit-project'
    ]);
    
    Route::post('/project/delete-project/{id}', [
        'uses' => 'Admin\Project\ProjectController@deleteProject',
        'as'  => 'delete-project'
    ]);
    
    Route::post('/project/update-project/', [
        'uses' => 'Admin\Project\ProjectController@updateProject',
        'as'  => 'update-project'
    ]);

    Route::get('/project/add-project-location', [
        'uses' => 'Admin\Project\ProjectController@addProjectLocation',
        'as'  => 'add-project-location'
    ]);
    
    Route::get('/project/add-why-choose', [
        'uses' => 'Admin\Project\ProjectController@addProjectWhyUs',
        'as'  => 'add-project-why-chooses'
    ]);
    
    Route::post('/project/add-why-choose/add', [
        'uses' => 'Admin\Project\ProjectController@saveProjectWhyUs',
        'as'  => 'add-project-why-choose'
    ]);
    
    Route::get('/project/add-project-facilities', [
        'uses' => 'Admin\Project\ProjectController@addProjectFacilities',
        'as'  => 'add-project-facility'
    ]);
    
    Route::post('/project/add-project-facilities/add', [
        'uses' => 'Admin\Project\ProjectController@saveProjectFacilities',
        'as'  => 'add-project-facilities'
    ]);

    Route::post('/project/add-project-location', [
        'uses' => 'Admin\Project\ProjectController@saveProjectLocation',
        'as'  => 'add-project-location'
    ]);

    Route::post('/project/add-project/about', [
        'uses' => 'Admin\Project\ProjectController@addAbout',
        'as'  => 'add-project-about'
    ]);

    Route::post('/project/add-project/section', [
        'uses' => 'Admin\Project\ProjectController@addSection',
        'as'  => 'add-project-section'
    ]);

    Route::post('/project/add-project/floorPlan', [
        'uses' => 'Admin\Project\ProjectController@addFloorPlan',
        'as'  => 'add-project-floor-plan'
    ]);

    Route::post('/project/add-project/slider', [
        'uses' => 'Admin\Project\ProjectController@addProjectSlider',
        'as'  => 'add-project-slider'
    ]);

    Route::post('/project/add-project/gallery', [
        'uses' => 'Admin\Project\ProjectController@addGallery',
        'as'  => 'add-project-gallery'
    ]);

    Route::get('/project/add-brochure', [
        'uses' => 'Admin\Project\ProjectController@addBrochure',
        'as'  => 'add-brochure'
    ]);
    
    Route::post('/project/add-brochure/add', [
        'uses' => 'Admin\Project\ProjectController@saveBrochure',
        'as'  => 'save-brochure'
    ]);
    //End Project

    //Start Testimonial
    Route::get('/testimonial/add-testimonial', [
        'uses' => 'Admin\Testimonial\PortfolioController@addTestimonial',
        'as'  => 'add-testimonial'
    ]);

    Route::post('/testimonial/add-testimonial', [
        'uses' => 'Admin\Testimonial\PortfolioController@saveTestimonial',
        'as'  => 'add-testimonial'
    ]);

    Route::get('/testimonial/manage-testimonial', [
        'uses' => 'Admin\Testimonial\PortfolioController@manageTestimonial',
        'as'   => 'manage-testimonial'
    ]);

    Route::get('/testimonial/edit-testimonial/{id}', [
        'uses' => 'Admin\Testimonial\PortfolioController@editTestimonial',
        'as'  => 'edit-testimonial'
    ]);

    Route::post('/testimonial/update-testimonial', [
        'uses' => 'Admin\Testimonial\PortfolioController@updateTestimonial',
        'as'  => 'update-testimonial'
    ]);
    
    Route::get('/testimonial/delete-testimonial/{id}', [
        'uses' => 'Admin\Testimonial\PortfolioController@deleteTestimonial',
        'as'  => 'delete-testimonial'
    ]);
    //End Testimonial

    //Blog Start
    Route::get('/blog/blog-add', [
        "uses" => "Admin\Blog\BlogController@addBlog",
        'as' => 'blog-add'
    ]);
    
    Route::post('/blog/blog-add', [
        "uses" => "Admin\Blog\BlogController@saveBlog",
        'as' => 'blog-add'
    ]);
    
    Route::get('/blog/blog-manage', [
        "uses" => "Admin\Blog\BlogController@manageBlog",
        'as' => 'blog-manage'
    ]);
    
    Route::get('/blog/blog-edit/{id}', [
        "uses" => "Admin\Blog\BlogController@editBlog",
        'as' => 'blog-edit'
    ]);
    
    Route::post('/blog/blog-update', [
        "uses" => "Admin\Blog\BlogController@updateBlog",
        'as' => 'blog-update'
    ]);
    
    Route::get('/blog/blog-delete/{id}', [
        "uses" => "Admin\Blog\BlogController@deleteBlog",
        'as' => 'blog-delete'
    ]);
    //Blog End

    //Category Start
    Route::get('/category/category-add', [
        "uses" => "Admin\Blog\CategoryController@addCategory",
        'as' => 'category-add'
    ]);
    Route::post('/category/category-add', [
        "uses" => "Admin\Blog\CategoryController@saveCategory",
        'as' => 'category-add'
    ]);
    //Category End
    
    //Comment Start
    Route::get('/comments/modarate-comment', [
        "uses" => "Admin\Blog\BlogController@showComment",
        'as' => 'modarate-comment'
    ]);
    
    Route::get('/comments/publish-comment/{id}', [
        "uses" => "Admin\Blog\BlogController@publishComment",
        'as' => 'publish-comment'
    ]);
    
    Route::get('/comments/unpublish-comment/{id}', [
        "uses" => "Admin\Blog\BlogController@unPublishComment",
        'as' => 'unpublish-comment'
    ]);
    //Comment End
});