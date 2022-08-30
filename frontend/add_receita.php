<?php

    include '../backend/receita_class.php';

    if(isset($_GET['id'])){

      $receitas = new receitas();
      $receitas->set_id($_GET['id']);

      $receita = $receitas->listar();

      foreach($receita as $r){

          $id = $r['id'];
          $titulo = $r['titulo'];
          $img = $r['img'];
          $tempo = $r['tempo'];
          $categoria = $r['categoria'];
          $dificuldade = $r['dificuldade'];
          $rende = $r['rende'];
          $ingr = $r['ingr'];
          $preparo = $r['preparo'];

      }

  }

?>
<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="pt-BR"  class="touch-styles" data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- This is Squarespace. --><!-- tunny-sphere-9t29 -->
<base href="">
<meta charset="utf-8" />
<title>Receitas &mdash; ++Vegan</title>
<link rel="shortcut icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="https://tunny-sphere-9t29.squarespace.com/read-me-bedford"/>
<meta property="og:site_name" content="++Vegan"/>
<meta property="og:title" content="Receitas &mdash; ++Vegan"/>
<meta property="og:url" content="https://tunny-sphere-9t29.squarespace.com/read-me-bedford"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Receitas"/>
<meta itemprop="name" content="Receitas — ++Vegan"/>
<meta itemprop="url" content="https://tunny-sphere-9t29.squarespace.com/read-me-bedford"/>
<meta itemprop="description" content="Receitas"/>
<meta name="twitter:title" content="Receitas — ++Vegan"/>
<meta name="twitter:url" content="https://tunny-sphere-9t29.squarespace.com/read-me-bedford"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="Receitas"/>
<meta name="description" content="Receitas" />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/QK2TDqoozo7pBR-OgMDob45vhv5OXxm58gOaOP05fTGfe7MIfFHN4UJLFRbh52jhWDjkZRID52ZKwDmyjcIuFQgKwA93w2F8wUnnMKG0jAFu-WsoShFGZAsude80ZkoRdhXCHKoyjamTiY8Djhy8ZYmC-Ao1Oco8if37OcBDOcu8OfG0SaBujW48SagyjhmDjhy8ZYmC-Ao1OcFzdP37O1sudcooOWF3-emkZPXoi2JoO1FUiABkZWF3jAF8OcFzdPUyjamTiY8Djhy8ZYmC-Ao1OcFzdPUyjamTiY8Djhy8ZYmC-Ao1Oco8ifUySkolZPUCdhFydeyzSabCSaBujW48SagyjhmDjhy8ZYmC-Ao1OcFzdPUXiAo0pPuDSey8Sc9l5Wbk5PoDSWmyScmDSeBRZPoRdhXCiaiaOcBRiA8XpWFR-emqiAUTdcS0jhNlOYiaikoyjamTiY8Djhy8ZYmC-Ao1Oco8ifUaiaS0jWw0dA9CiaiaO1FUiABkZWF3jAF8ShFGZAsude80ZkoRdhXCiaiaO1sudcooOWF3-emkZPXoi2JoO1FUiABkZWF3jAF8OcFzdPJwSY4zpe8ljPu0daZyJy4yZeNKZPu1jW4ydAN0Zfu3Scv7fbRKHyMMeMw6MKG4fHvgIMMjgfMfH6GJCwbgIMMjgPMfH6qJnbIbMg6eJMJ7fbKOMsMMeMS6MKG4fHtgIMMjIfMfH6qJRMIbMg6sJMJ7fbRDFgMgeMb6MKG4fVJXIMIj2KMfqMY7DprWg6.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400&family=Sorts+Mill+Goudy:ital,wght@0,400;1,400">
<script type="text/javascript" crossorigin="anonymous" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.2.2/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" src="//assets.squarespace.com/@sqs/polyfiller/1.2.2/modern.js"></script>
<script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-356d6ddd929192b0c8561-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-356d6ddd929192b0c8561-min.pt-BR.js" ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-aa44ea871e34d0ccbe910-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-aa44ea871e34d0ccbe910-min.pt-BR.js" ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-6bfa8aee8a964e8700b7a-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-a99bfd704f08d86ca2c5f-min.en-US.js" ></script><script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-6bfa8aee8a964e8700b7a-min.pt-BR.js" ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-d70cdedb9f1cf1a288994-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-d70cdedb9f1cf1a288994-min.pt-BR.js" ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-7e149f72a5ea35122c201-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-7e149f72a5ea35122c201-min.pt-BR.js" ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-7a1e1db6c5d1c9ceb8547-min.pt-BR.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-7a1e1db6c5d1c9ceb8547-min.pt-BR.js" ></script><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-cb976142994f8872e8f27-min.pt-BR.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-702bf18174efe0acaa8ce-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-69c2b0be263347614449e-min.pt-BR.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-3d55c64c25996c7633fc2-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-eca0023335300bad7a571-min.pt-BR.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-49c4a5f3dae67a728e3f4-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-30c24e6e90c63cfec7029-min.pt-BR.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-53c004ac7d4bde1c92e38-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-7bc68a26a29e59d055e76-min.pt-BR.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-2474dc7bfa7d1cebae461-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-1d739c944cdb0d2e529d1-min.pt-BR.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-89b254b5c87045b9e1360-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-6592ecf90474cfc7064bf-min.pt-BR.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-49c4a5f3dae67a728e3f4-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-4fa9622a10b075fe3d594-min.pt-BR.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-bda1510c518beb0e828ff-min.pt-BR.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-4a16a8a8c965386db2173-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-315f1225d234b69733df3-min.pt-BR.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-3d55c64c25996c7633fc2-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-e884a60c455779f214639-min.pt-BR.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-8804675084a3982b022e3-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-284be27a2ec822f36e9da-min.pt-BR.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-3d55c64c25996c7633fc2-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-3f6c93d4617e73c890e37-min.pt-BR.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-225c7709a4e33a106e569-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-fcf1fc134ba4aab1b93b2-min.pt-BR.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-5d6c4f164c4ab5457107a-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-2efb238d5996b8d536cb5-min.pt-BR.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-8804675084a3982b022e3-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-f32b0b58842f9fdc01cf5-min.pt-BR.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-8804675084a3982b022e3-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-58b4e27e1c995a24ad89f-min.pt-BR.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-9d0a55de1efafbb9218e1-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-739d24dda71ba54cc3789-min.pt-BR.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-6df8c3ba19c2f8ff58a93-min.pt-BR.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-ef94529873378652e6e86-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-6186219d49b337b2ff623-min.pt-BR.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-1f18e025ea682ade6293a-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-88661086e6531bc2570c5-min.pt-BR.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-3d55c64c25996c7633fc2-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-93c974d97c8ef1039fafc-min.pt-BR.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-7cecc648f858e6f692130-min.pt-BR.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-42f09d8919b83bc1be6e3-min.pt-BR.js"}},"pageType":2,"website":{"id":"62f1386b35aba550b1e003e3","identifier":"tunny-sphere-9t29","websiteType":1,"contentModifiedOn":1660679446891,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1661185387404},"language":"pt-BR","timeZone":"America/Sao_Paulo","machineTimeZoneOffset":-10800000,"timeZoneOffset":-10800000,"timeZoneAbbr":"BRT","siteTitle":"++Vegan","fullSiteTitle":"Receitas \u2014 ++Vegan","siteDescription":{"html":"","raw":false},"shareButtonOptions":{"2":true,"8":true,"7":true,"4":true,"6":true,"3":true,"1":true},"authenticUrl":"https://tunny-sphere-9t29.squarespace.com","internalUrl":"https://tunny-sphere-9t29.squarespace.com","baseUrl":"https://tunny-sphere-9t29.squarespace.com","sslSetting":3,"isHstsEnabled":true,"createdOn":1659975787406,"templateId":"52a74dafe4b073a80cd253c5","installationId":"62f1386b35aba550b1e003fc","templateWebsiteId":"5df91b1bf4d3f0056605719e","hasPassword":false,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1660673344631,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":true},"websiteSettings":{"id":"62f1386b35aba550b1e003e5","websiteId":"62f1386b35aba550b1e003e3","subjects":[],"country":"BR","state":"RS","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"BRL","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"BRL","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":""},"websiteCloneable":false,"collection":{"title":"Receitas","id":"62f13a4adfaf885f6a5d4a3f","fullUrl":"/read-me-bedford","type":10,"permissionType":1},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"aspect-ratio":"Auto","banner-slideshow-controls":"Arrows","gallery-arrow-style":"No Background","gallery-aspect-ratio":"3:2 Standard","gallery-auto-crop":"true","gallery-autoplay":"false","gallery-design":"Grid","gallery-info-overlay":"Show on Hover","gallery-loop":"false","gallery-navigation":"Bullets","gallery-show-arrows":"true","gallery-transitions":"Fade","galleryArrowBackground":"rgba(34,34,34,1)","galleryArrowColor":"rgba(255,255,255,1)","galleryAutoplaySpeed":"3","galleryCircleColor":"rgba(255,255,255,1)","galleryInfoBackground":"rgba(0, 0, 0, .7)","galleryThumbnailSize":"100px","gridSize":"280px","gridSpacing":"10px","logoContainerWidth":"140px","product-gallery-auto-crop":"false","product-image-auto-crop":"true","siteTitleContainerWidth":"220px","tweak-v1-related-products-title-spacing":"50px"},"templateId":"52a74dafe4b073a80cd253c5","templateVersion":"7","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/ta/52a74d9ae4b0253945d2aee9/1043/scripts/","betaFeatureFlags":["asset_drop_in_image_blocks","commerce_vod_related_videos","commerce_etsy_shipping_import","image_block_asset_uploader","marquee_block","asset_picker_in_product_composer","commerce_etsy_product_import","viewer-role-contributor-invites","marketing_landing_page","member_areas_spanish_interviews","commerce_restock_notifications","commerce_order_status_access","fluid_engine_onboarding_wizard","asset_uploader_refactor","campaigns_global_uc_ab","send_local_pickup_ready_email","nested_categories_migration_enabled","reduce_general_search_api_traffic","member_areas_dpc","campaigns_iframe_frontend_routing_update","customer_accounts_email_verification","commerce_clearpay","customer_account_creation_recaptcha","background_art_onboarding","bg_art_presets_2022_1","campaigns_new_subscriber_search","block_annotations_revamp","campaigns_content_editing_survey","campaigns_asset_picker","crm_show_subscriber_import_in_profiles","summary_block_video_collections","appshell","asset_uploader","campaigns_thumbnail_layout","scheduling_block_schema_editor","crm_default_newsletter_block_to_campaigns","product_composer_feedback_form_on_save","large_card_uploader","member_areas_schedule_interview","commerce_category_id_discounts_enabled","commerce_site_visitor_metrics"],"videoAssetsFeatureFlags":[],"authenticatedAccount":{"id":"62f137f1b61f8864318e1db4","tutorialsCompleted":{"style-targeting-modal":true,"CONTENT_BLOCKERS_SURVEY":true,"buttons_update":true,"le2-welcome":true,"in_editor_survey":true,"layout-add-block-button":true,"background_art_onboarding":true},"notificationsRead":{},"lastLoginOn":1660065934340,"displayName":"Ana Laura Emer Spadini","firstName":"Ana Laura","lastName":"Emer Spadini","eligibleForMarketingDiscount":false,"avatarUrl":"https://static1.squarespace.com/static/images/62f138671e92445978cd2c15","bio":"","roles":{},"email":"emerspadini.ana@gmail.com","createdOn":1659975665326,"marketingId":"b9874cec-cd0c-4dc6-aa62-64daf8aee215","avatarAssetUrl":"https://static1.squarespace.com/static/images/62f138671e92445978cd2c15","pseudonymAccount":false,"preferredLocale":"pt-BR"},"authenticatedAccountWebsiteSettings":{"id":"62f1386eb67e3c1f85deb0a7"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[2066,1310,1418,1512,1223,1417,15,1220,1218,1911,1410,1228,1225,1411,1213,1513,1230,1226,1414,1421,1611,1210,1912,14,0,1219,1910,1413,1415,1610,1111,11,1233,1229,13,1212,1217,1419,1412,1422,1515,1516,1612,12,1214,1416,1112,1420,1224,1920,1311,1810,18,1514,1517,1511,1110,1211,1,1510,1216,1221,1215],"memberAccountNames":{"62f137f1b61f8864318e1db4":{"avatarUrl":"https://static1.squarespace.com/static/images/62f138671e92445978cd2c15","bio":"","displayName":"Ana Laura Emer Spadini"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"5df91b1bf4d3f00566056ce2","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cee","deleted":true},{"collectionId":"5df91b1bf4d3f00566056ce9","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cf4","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cf8","deleted":true},{"collectionId":"5df91b1bf4d3f00566056ce4","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cf1","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cfd","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cfb","deleted":true},{"collectionId":"5df91b1bf4d3f00566056cfc","deleted":true}],"connectedAccounts":[],"tzData":{"zones":[[-180,"Brazil","-03/-02",null]],"rules":{"Brazil":[[2001,2006,null,"Feb","Sun>=15","0:00","0",null],[2004,"only",null,"Nov",2,"0:00","1:00","S"],[2005,"only",null,"Oct",16,"0:00","1:00","S"],[2006,"only",null,"Nov",5,"0:00","1:00","S"],[2007,"only",null,"Feb",25,"0:00","0",null],[2007,"only",null,"Oct","Sun>=8","0:00","1:00","S"],[2008,"max",null,"Oct","Sun>=15","0:00","1:00","S"],[2008,2011,null,"Feb","Sun>=15","0:00","0",null],[2012,"only",null,"Feb","Sun>=22","0:00","0",null],[2013,2014,null,"Feb","Sun>=15","0:00","0",null],[2015,"only",null,"Feb","Sun>=22","0:00","0",null],[2016,2022,null,"Feb","Sun>=15","0:00","0",null],[2023,"only",null,"Feb","Sun>=22","0:00","0",null],[2024,2025,null,"Feb","Sun>=15","0:00","0",null],[2026,"only",null,"Feb","Sun>=22","0:00","0",null],[2027,2033,null,"Feb","Sun>=15","0:00","0",null],[2034,"only",null,"Feb","Sun>=22","0:00","0",null],[2035,2036,null,"Feb","Sun>=15","0:00","0",null],[2037,"only",null,"Feb","Sun>=22","0:00","0",null],[2038,"max",null,"Feb","Sun>=15","0:00","0",null]]}},"showAnnouncementBar":false};</script><script type="text/javascript"> SquarespaceFonts.loadViaContext(); Squarespace.load(window);</script><script type="application/ld+json">{"url":"https://tunny-sphere-9t29.squarespace.com","name":"++Vegan","description":"","@context":"http://schema.org","@type":"WebSite"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/sitecss/62f1386b35aba550b1e003e3/5/52a74dafe4b073a80cd253c5/62f1386b35aba550b1e003fc/1043/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    <script>/* Must be below squarespace-headers */(function(){var e='ontouchstart'in window||navigator.msMaxTouchPoints;var t=document.documentElement;if(!e&&t){t.className=t.className.replace(/touch-styles/,'')}})()
    </script>
  </head>
  <body id="collection-62f13a4adfaf885f6a5d4a3f" class="transparent-header enable-nav-button nav-button-style-outline nav-button-corner-style-pill banner-button-style-solid banner-button-corner-style-pill banner-slideshow-controls-arrows meta-priority-date  hide-entry-author hide-list-entry-footer    hide-blog-sidebar center-navigation--info    event-show-past-events event-thumbnails event-thumbnail-size-32-standard event-date-label  event-list-show-cats event-list-date event-list-time event-list-address   event-icalgcal-links  event-excerpts      gallery-design-grid aspect-ratio-auto lightbox-style-light gallery-navigation-bullets gallery-info-overlay-show-on-hover gallery-aspect-ratio-32-standard gallery-arrow-style-no-background gallery-transitions-fade gallery-show-arrows gallery-auto-crop   product-list-titles-under product-list-alignment-center product-item-size-11-square product-image-auto-crop product-gallery-size-11-square  show-product-price show-product-item-nav product-social-sharing tweak-v1-related-products-image-aspect-ratio-11-square tweak-v1-related-products-details-alignment-center newsletter-style-dark hide-opentable-icons opentable-style-dark small-button-style-solid small-button-shape-square medium-button-style-solid medium-button-shape-pill large-button-style-solid large-button-shape-square image-block-poster-text-alignment-center image-block-card-dynamic-font-sizing image-block-card-content-position-center image-block-card-text-alignment-center image-block-overlap-dynamic-font-sizing image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-dynamic-font-sizing image-block-collage-content-position-top image-block-collage-text-alignment-left image-block-stack-dynamic-font-sizing image-block-stack-text-alignment-left button-style-solid button-corner-style-square tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-brl collection-62f13a4adfaf885f6a5d4a3f collection-type-page collection-layout-default mobile-style-available has-banner-image general-page">
    <a href="#" class="body-overlay"></a>
    <div class="sqs-announcement-bar-dropzone"></div>
    <div id="sidecarNav">
  
  <?php
  
  include_once "header.php";
  
  ?>
                <div id="promotedGalleryWrapper" class="sqs-layout promoted-gallery-wrapper"><div class="row"><div class="col"></div></div></div>
                
                  
                    <div class="banner-thumbnail-wrapper has-description" data-content-field="main-image" data-collection-id="62f13a4adfaf885f6a5d4a3f" data-edit-main-image="" data-annotation-alignment="bottom left">
                      
                      <div class="color-overlay"></div>
                      <figure id="thumbnail" class="loading content-fill">
                        <img data-src="https://images.squarespace-cdn.com/content/v1/62f1386b35aba550b1e003e3/1660673430648-YYTILKUIUMLV1ZN5RU4P/vegan_inicial.jpg" data-image="https://images.squarespace-cdn.com/content/v1/62f1386b35aba550b1e003e3/1660673430648-YYTILKUIUMLV1ZN5RU4P/vegan_inicial.jpg" data-image-dimensions="1068x525" data-image-focal-point="0.5,0.5" alt="vegan_inicial.jpg"  />
                      </figure>
                      
                      <div class="desc-wrapper" data-content-field="description" data-collection-id="62f13a4adfaf885f6a5d4a3f"><p class="" style="white-space:pre-wrap;"><strong>Receitas</strong></p></div>
                    </div>
 
      <main id="page" role="main">
        
        <!--
        --><!--
        --><!--
        --><div id="content" class="main-content" data-content-field="main-content" data-collection-id="62f13a4adfaf885f6a5d4a3f" data-edit-main-image="">

        <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1659976996243" id="page-62f13aa71d7edc014ee9d154"><div class="row sqs-row"><div class="col sqs-col-12 span-12"><div class="sqs-block form-block sqs-block-form" data-block-type="9" id="block-yui_3_17_2_1_1659976973419_2636"><div class="sqs-block-content">
                
<div class="form-wrapper"

style="
padding: 40px;
border: 1px solid rgb(121, 121, 121);
box-shadow: 5px 5px 10px rgb(121, 121, 121);
"
> 
  <div class="form-inner-wrapper" >
    <form
       method="POST"
       action="../backend/salvar_receita.php"
      
    >
        <div class="field-list clear">
          

                    <?php if(isset($id)){ ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <?php } ?>

                    
              <div id="titulo-field" class="form-item field titulo required">
                
                <label class="title" for="titulo">
                  Nome da receita             
                  
                </label>
                             
                    <input
                        class="field-element titulo"
                        type="text"
                        id="titulo"
                        value="<?php if(isset($titulo)){ echo $titulo; } ?>"
                        name="titulo"
                        />
              </div>

             

              
            <div class="row sqs-row">
            
                        
            <div id="img-field" class=" form-item img sqs-layout sqs-grid-4 columns-4 col-4 sqs-col-4" >
                
            <label class="title" for="img" style="  padding: 20px 10px;
                                                            width: 160px;
                                                            background-color: #333;
                                                            color: #FFF;
                                                            text-transform: uppercase;
                                                            text-align: center;
                                                            display: block;
                                                            margin-top: 10px;
                                                            font-size: 14px;
                                                            cursor: pointer;"
                                                            >
            Selecionar imagem             
            </label>

                <input
                    class="field-element image"
                    type="file"
                    id="img"
                    name="img"
                    style="display: none;"
                    value="<?php if(isset($img)){ echo $img; } ?>"
                    
                />
            </div>
    
            <div id="tempo-field" class="form-item field tempo sqs-layout sqs-grid-3 columns-3 col-3 sqs-col-3 required">    
            <label class="title" for="tempo">
              Tempo de preparo             
              
            </label>
            <div class="description">minutos</div>

                <input
                    class="field-element"
                    id="tempo"
                    name="tempo"
                    type="number"
                    value="<?php if(isset($tempo)){ echo $tempo; } ?>"
                />
            </div>
            <div class="sqs-layout sqs-grid-2 columns-2 col-2 sqs-col-2"></div>

            <div id="rende-field" class="form-item field rende sqs-layout sqs-grid-3 columns-3 col-3 sqs-col-3 required" style="float: right;">    
            <label class="title" for="rende">
              Rendimento             
              
            </label>
            <div class="description">porções</div>

                <input
                    class="field-element"
                    id="rende"
                    name="rende"
                    type="number"
                    value="<?php if(isset($rende)){ echo $rende; } ?>"
                />
            </div>

        </div>

        <div class="row sqs-row">

                <div id="categoria" class=" form-item  field categoria required sqs-layout sqs-grid-6 columns-6 col-6 sqs-col-6" style="width: 48%;">
                                  
              <label class="categoria" for="categoria">
                Categoria
                                
              </label>                  
                  <input
                      class="field-element categoria"
                      type="text"
                      id="categoria"
                      name="categoria"
                      value="<?php if(isset($categoria)){ echo $categoria; } ?>"
                      
                  />
                </div>
  
                <div id="link-field" class="form-item field link sqs-layout sqs-grid-6 columns-6 col-6 sqs-col-6" style="width: 48%; float: right; ">
                  
              <label class="title" for="link">
                Nível de dificuldade
                
              </label>
          
                    <select
                    class="field-element"
                    data-title="Ampm"
                    
                  >                    
                    <option value="0">Selecionar</option>
                    <option value="facil">Fácil</option>
                    <option value="moderado">Moderado</option>
                    <option value="dificil">Difícil</option>

                  </select>
  
                </div> 
  
              </div>  
             
              
              <div id="ingr-field" class="form-item field ingr required">
                
            <label class="title" for="ingr">
              Ingredientes             
              
            </label>

                <textarea
                    class="field-element"
                    id="ingr"
                    name="ingr"
                    value="<?php if(isset($ingr)){ echo $ingr; } ?>"
                    >
                    </textarea>
              </div>

              <div id="preparo-field" class="form-item field preparo required">
                
            <label class="title" for="preparo">
              Preparo             
              
            </label>

                <textarea
                    class="field-element"
                    id="preparo"
                    name="preparo"
                    value="<?php if(isset($preparo)){ echo $preparo; } ?>"
                    >
                    </textarea>
              </div>


      <div data-animation-role="button"
        class="
          form-button-wrapper          
            form-button-wrapper--align-center          
        "
      >
        <input
          class="button sqs-system-button sqs-editable-button sqs-button-element--primary"
          type="submit"
          value="Enviar"
        />
    </form>
  </div>     


</div></div>          
             </div></div></div></div></div>

        </div><!--
        -->
        
      </main>


      <footer id="footer" role="contentinfo">
        <div class="footer-inner">
          <div class="nav-wrapper back-to-top-nav"><nav><div class="back-to-top"><a href="#header">Voltar ao topo</a></div></nav></div>
          


          
          <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Conteúdo do rodapé" data-type="block-field" data-updated-on="1660675867585" id="footerBlocks"><div class="row sqs-row"><div class="col sqs-col-12 span-12"><div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-3831e9eee3fa1292b385"><div class="sqs-block-content"><p class="" style="white-space:pre-wrap;">Copyright © 2022. All rights reserved</p>


</div></div></div></div></div>
        </div>
      </footer>

    </div>

    <script src="https://static1.squarespace.com/static/ta/52a74d9ae4b0253945d2aee9/1043/scripts/site-bundle.js" type="text/javascript"></script>
    <script type="text/javascript" data-sqs-type="imageloader-bootstrapper">(function() {if(window.ImageLoader) { window.ImageLoader.bootstrap({}, document); }})();</script><script>Squarespace.afterBodyLoad(Y);</script><svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="twitter-icon" viewBox="0 0 64 64"><path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"/></symbol><symbol id="twitter-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"/></symbol><symbol id="facebook-icon" viewBox="0 0 64 64"><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"/></symbol><symbol id="facebook-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"/></symbol><symbol id="instagram-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol></svg>

  </body>
</html>
