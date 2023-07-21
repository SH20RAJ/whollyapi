# App Details





<pre><code><strong>https://appspages.online/api/aptoide.php?url=https://<a data-footnote-ref href="#user-content-fn-1">instagram</a>.en.aptoide.com/app
</strong></code></pre>



{% swagger method="get" path="" baseUrl="https://appspages.online/api/aptoide.php?url=https://instagram.en.aptoide.com/app" summary="Get the App Details" %}
{% swagger-description %}

{% endswagger-description %}

{% swagger-parameter in="query" name="url" type="https://instagram.en.aptoide.com/app" required="true" %}
Your Apps URL i.e. 

[https://instagram.en.aptoide.com/app](https://instagram.en.aptoide.com/app)


{% endswagger-parameter %}

{% swagger-parameter in="query" type="or" %}

{% endswagger-parameter %}

{% swagger-parameter in="query" name="app_id" type="instagram" required="true" %}
Your Apps's ID i.e. instagram
{% endswagger-parameter %}

{% swagger-response status="200: OK" description="" %}
```json
{
    "props": {
        "initialI18nStore": {
            "en_GB": {
                "common": {
                    "know-more": "Know More",
                    "ok": "ok",
                    "more": "more",
                    "read_more": "Read more",
                    "read_less": "Read less",
                    "show_more": "More",
                    "see_more": "More",
                    "click_here": "Click here",
                    "close": "Close",
                    "cancel": "Cancel",
                    "top_stores": "Top Stores",
                    "download": "Download with Aptoide",
                    "downloads": "downloads",
                    "advertisement": "Advertisement",
                    "versions": "Versions",
                    "homepage": "Homepage",
                    "share-page": "Share this page via",
                    "install": "Download",
                    "others": "Others",
                    "qr_code": {
                        "direct": "Scan this QR code to install {{appName}} in your phone.",
                        "apkfy": "Scan this QR code to install {{appName}} with Aptoide in your phone."
                    },
                    "installer": {
                        "title": "Aptoide App",
                        "label": "Free and unrestricted apps!"
                    },
                    "category": {
                        "game": "Game",
                        "games": "Games",
                        "application": "Application",
                        "applications": "Apps",
                        "app": "App",
                        "apps": "Apps",
                        "store": "Store",
                        "stores": "Stores",
                        "store_label": "{{name}} Store",
                        "featured": "Featured Categories",
                        "editorials": "Editorials",
                        "rankings": "Rankings",
                        "latest": "Latest",
                        "trending": "Trending",
                        "top_downloads": "Top Downloads"
                    },
                    "popular": {
                        "label": "Popular {{category}}"
                    },
                    "sort": {
                        "latest": "Latest",
                        "top": "Ranking",
                        "trending": "Trending"
                    },
                    "cookies": {
                        "common": {
                            "allow": "Allow All",
                            "decline": "Decline All"
                        },
                        "notice": {
                            "title": "Cookie Preferences",
                            "manage": "Manage Cookies",
                            "message": "We use cookies to personalise content, to provide social media features and to analyse our traffic. We also share information about how you use our site with our social media and analytics partners who may combine it with other information that you may have already provided to them or that they've collected from your use of their services.\n\nYou can accept these cookies by clicking on \"Allow All\" or you can choose which ones you want to install by clicking on \"Manage Cookies\"."
                        },
                        "sidemenu": {
                            "about_title": "About the Cookies we use",
                            "about_message": "We use cookies to personalize content, provide social media features and analyze our traffic. We may share information about how you use our site with our social media and analytics partners.",
                            "necessary_title": "Necessary Cookies",
                            "active_needed": "Needs to be Active",
                            "necessary_message": "These cookies are used for basic functions of our site and to remember choices you've already made. These cannot be deactivated since they are esential for basic website features.",
                            "analytics_title": "Analytics Cookies",
                            "analytics_message": "These cookies are useful for us to analyze our traffic and measure the events that would allow us to improve our products in a constant basis. These cookies are optional.",
                            "marketing_title": "Marketing Cookies",
                            "marketing_message": "These cookies are the ones that help us understand which are the ads displayed in our website that could suit better your interests. These cookies are optional.",
                            "see_all": "See All",
                            "save": "Save Settings",
                            "return": "All Cookies"
                        },
                        "list": {
                            "name": "Name",
                            "description": "Description",
                            "duration": "Duration",
                            "type": "Type",
                            "host": "Host",
                            "content": {
                                "necessary": [
                                    {
                                        "name": "aptoide-locale",
                                        "description": "Language Code to redirect user to his\/her preferred language subdomain",
                                        "duration": "1 year",
                                        "type": "1st Party",
                                        "provider": "Aptoide"
                                    },
                                    {
                                        "name": "beta",
                                        "description": "A flag to show beta and alpha versions of apps",
                                        "duration": "1 year",
                                        "type": "1st Party",
                                        "provider": "Aptoide"
                                    },
                                    {
                                        "name": "cookie_settings",
                                        "description": "Object that represents user's cookie saved settings",
                                        "duration": "1 year",
                                        "type": "1st Party",
                                        "provider": "Aptoide"
                                    },
                                    {
                                        "name": "next-i18next",
                                        "description": "Website\u2019s current language code",
                                        "duration": "1 year",
                                        "type": "1st Party",
                                        "provider": "Aptoide"
                                    },
                                    {
                                        "name": "__cfduid",
                                        "description": "Helps Cloudflare detect malicious visitors to our websites and minimizes blocking legitimate users. It may be placed on the devices of our end users to identify individual clients behind a shared IP address and apply security settings on a per-client basis. It is necessary for supporting Cloudflare's security features.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "CloudFlare"
                                    }
                                ],
                                "analytics": [
                                    {
                                        "name": "_hjid",
                                        "description": "Hotjar cookie that is set when the user first lands on a page with the Hotjar script. It is used to persist the Hotjar User ID, unique to that site on the browser. This ensures that behaviour in subsequent visits to the same site will be attributed to the same user ID.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjClosedSurveyInvites",
                                        "description": "Hotjar cookie that is set once a visitor interacts with a Survey invitation modal pop-up. It is used to ensure that the same invite does not reappear if it has already been shown.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjDonePolls",
                                        "description": "Hotjar cookie that is set once a visitor completes a poll using the Feedback Poll widget. It is used to ensure that the same poll does not reappear if it has already been filled in.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjMinimizedPolls",
                                        "description": "Hotjar cookie that is set once a visitor minimizes a Feedback Poll widget. It is used to ensure that the widget stays minimized when the visitor navigates through our website.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjShownFeedbackMessage",
                                        "description": "Hotjar cookie that is set when a visitor minimizes or completes Incoming Feedback. This is done so that the Incoming Feedback will load as minimized immediately if the visitor navigates to another page where it is set to show.",
                                        "duration": "1 year",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjRecordingLastActivity",
                                        "description": "Hotjar cookie that is found in Session storage (as opposed to cookies). This gets updated when a visitor recording starts and when data is sent through the WebSocket (the visitor performs an action that Hotjar records).",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjTLDTest",
                                        "description": "When the Hotjar script executes we try to determine the most generic cookie path we should use, instead of the page hostname. This is done so that cookies can be shared across subdomains (where applicable). To determine this, we try to store the _hjTLDTest cookie for different URL substring alternatives until it fails. After this check, the cookie is removed.",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjUserAttributesHash",
                                        "description": "User Attributes sent through the Hotjar Identify API are cached for the duration of the session in order to know when an attribute has changed and needs to be updated.",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjCachedUserAttributes",
                                        "description": "This cookie stores User Attributes which are sent through the Hotjar Identify API, whenever the user is not in the sample. These attributes will only be saved if the user interacts with a Hotjar Feedback tool",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjIncludedInSample",
                                        "description": "This cookie is set to let Hotjar know whether that visitor is included in the sample which is used to generate Funnels. This is a session cookie which is destroyed when the user leaves the site.",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_hjAbsoluteSessionInProgress",
                                        "description": "This cookie is used to detect the first pageview session of a user. This is a True\/False flag set by the cookie.",
                                        "duration": "Session",
                                        "type": "3rd Party",
                                        "provider": "Hotjar"
                                    },
                                    {
                                        "name": "_ga",
                                        "description": "This cookie name is associated with Google Universal Analytics. This cookie is used to distinguish unique users by assigning a randomly generated number as a client identifier. It is included in each page request in a site and used to calculate visitor, session and campaign data for the sites analytics reports.",
                                        "duration": "2 Years",
                                        "type": "3rd Party",
                                        "provider": "Google"
                                    },
                                    {
                                        "name": "_gid",
                                        "description": "This cookie name is associated with Google Universal Analytics. It appears to store and update a unique value for each page visited.",
                                        "duration": "24 Hours",
                                        "type": "3rd Party",
                                        "provider": "Google"
                                    },
                                    {
                                        "name": "_gat\/_gtag",
                                        "description": "These cookies names are associated with Google Universal Analytics, according to documentation it is used to throttle the request rate - limiting the collection of data on high traffic sites",
                                        "duration": "1 minute",
                                        "type": "3rd Party",
                                        "provider": "Google"
                                    },
                                    {
                                        "name": "rakam_idaptoide.com",
                                        "description": "Used to distinguish users",
                                        "duration": "10 year",
                                        "type": "3rd Party",
                                        "provider": "Rakam"
                                    },
                                    {
                                        "name": "rakam_lastEventIdaptoide.com",
                                        "description": "ID from the last event sent to Rakam",
                                        "duration": "10 year",
                                        "type": "3rd Party",
                                        "provider": "Rakam"
                                    },
                                    {
                                        "name": "rakam_lastEventTimeaptoide.com",
                                        "description": "Timestamp in base64 from the last event sent to rakam",
                                        "duration": "10 year",
                                        "type": "3rd Party",
                                        "provider": "Rakam"
                                    },
                                    {
                                        "name": "rakam_sessionIdaptoide.com",
                                        "description": "Used to distinguish different user sessions",
                                        "duration": "10 year",
                                        "type": "3rd Party",
                                        "provider": "Rakam"
                                    }
                                ],
                                "marketing": [
                                    {
                                        "name": "Google Adsense Cookies",
                                        "description": "Cookies used by Adsense are to target advertising based on what's relevant to a user, to improve reporting on campaign performance, and to avoid showing ads the user has already seen",
                                        "duration": "",
                                        "type": "3rd Party",
                                        "provider": "Google Adsense"
                                    },
                                    {
                                        "name": "_fbp",
                                        "description": "Used by Facebook to deliver a series of advertisement products such as real time bidding from third-party advertisers.",
                                        "duration": "3 Months",
                                        "type": "3rd Party",
                                        "provider": "Facebook"
                                    }
                                ]
                            }
                        }
                    },
                    "search": {
                        "placeholder": "Search here",
                        "label": "Search",
                        "recent": "Recent Search",
                        "popular": "Popular Tags"
                    },
                    "drawer": {
                        "home": "Homepage",
                        "install_aptoide": "Install Aptoide",
                        "why_aptoide": "Why Aptoide?",
                        "developers_solution": "Developers Solution",
                        "cobrand_solution": "Co-brand Solution",
                        "apps_android": "Android Apps",
                        "apps_popular": "Popular Apps",
                        "games_android": "Android Games",
                        "games_popular": "Popular Games",
                        "change_language": "Change Language",
                        "adult_content": "Show Adult Content",
                        "beta_versions": "Show Beta Versions",
                        "cookie_settings": "Cookie Settings"
                    },
                    "top_navigation_bar": {
                        "home": "Home",
                        "developers": "Developers",
                        "cobrand": "Partners",
                        "appstore": "App Store"
                    },
                    "footer": {
                        "aptoide_360": "Aptoide 360",
                        "aptoide_app": "Aptoide App",
                        "aptoide_tv": "Aptoide TV",
                        "appcoins": "AppCoins",
                        "about_us": "About Us",
                        "jobs": "Careers",
                        "support": "Support",
                        "development": "Development",
                        "source_code": "Source Code",
                        "api": "API",
                        "aptoide_iab": "Aptoide IAB (Catappult)",
                        "community": "Community",
                        "embassadors": "Ambassadors",
                        "blog": "Blog",
                        "faq": "FAQ",
                        "facebook": "Aptoide Facebook",
                        "twitter": "Aptoide Twitter",
                        "instagram": "Aptoide Instagram",
                        "youtube": "Aptoide Youtube Channel",
                        "linked": "Aptoide LinkedIn Profile",
                        "our_products": "Our Products",
                        "appcoins_wallet": "AppCoins Wallet",
                        "our_services": "Catappult Services",
                        "co_brand": "For Stores",
                        "developers": "For Developers",
                        "appcoins_protocol": "AppCoins Protocol",
                        "company": "Company",
                        "why_aptoide": "Why Aptoide?",
                        "r_and_d": "R&D",
                        "aptoide-text": "Aptoide is the fastest growing app store and distribution platform in the world. We are a global platform for global talent. Do you want the world? <1>Let\u2019s play together.<\/1>",
                        "items": {
                            "company": "Company",
                            "about-us": "About us",
                            "careers": "Careers",
                            "faqs": "FAQs",
                            "support": "Support",
                            "blog": "Blog",
                            "brand-assets": "Brand Assets",
                            "aptoide-products": "Aptoide Products",
                            "app-store": "Aptoide App Store",
                            "catappult": "Catappult - Distribution console",
                            "aptoide-tv": "Aptoide TV",
                            "e-skills": "e-Skills",
                            "appcoins": "AppCoins Wallet",
                            "ios": "Aptoide for iOS"
                        },
                        "legal": "Legal Informations",
                        "cookie": "Cookie Policy",
                        "privacy": "Privacy Policy",
                        "copyright": "\u00a9{{year}} APTOIDE.COM. All rights reserved"
                    },
                    "download_popup": {
                        "title": "Install {{appName}} now, it's free!",
                        "qr_code": "Scan the QR code to directly install Aptoide on your device",
                        "or": "or",
                        "download": "Download the APK to your computer"
                    },
                    "download_dropdown": {
                        "option1_label": "Using Aptoide",
                        "option1_sublabel": "Safe and stable updates",
                        "option2_label": "Directly to device"
                    },
                    "reviews": {
                        "reviews": "Reviews",
                        "disclaimer": "These reviews and ratings come from Aptoide app users. To leave your own, please <1>install Aptoide.<\/1>",
                        "no_reviews": "There are no reviews or ratings yet! To leave the first one please <1>install Aptoide.<\/1>",
                        "from": {
                            "from_today": "Today",
                            "from_singular": "{{count}} day ago",
                            "from_dual": "{{count}} days ago",
                            "from_plural": "{{count}} days ago"
                        }
                    },
                    "share": {
                        "title": "Share this app via"
                    },
                    "errors": {
                        "page_not_found": {
                            "title": "Page not found",
                            "message": "We are sorry, but we could not find the page you are looking for \ud83d\ude14",
                            "login_message": "Still using an old-school computer? Open your login email in a mobile device with Aptoide installed to log in to your account!",
                            "message_a": "Oops... The page you are looking for isn't available right now!",
                            "message_b": "But you can always discover amazing apps or go back to the <1>Homepage<\/1>."
                        }
                    },
                    "meta": {
                        "index": {
                            "title": "Aptoide - The alternative Android app store",
                            "description": "Find, discover and download the best apps and games for Android in the official Aptoide app store",
                            "keywords": [
                                "android apps",
                                "android games",
                                "download android games",
                                "best android apps"
                            ]
                        }
                    },
                    "top": {
                        "show_all": "Show All",
                        "discover_appcoins": "Discover Our AppCoins Apps",
                        "all_categories": "All Categories",
                        "more": "More"
                    },
                    "editorial": {
                        "more": "More Editorials",
                        "meta": {
                            "archive_title": "Editorial Archive: discover Android apps and games",
                            "archive_description": "Discover your favorite Android games and apps. News, tips and tricks, app and game of the week editorial archive."
                        },
                        "meta_tag": {
                            "archive_title": "{{editorialTag}} - Editorial Archive"
                        }
                    },
                    "sidenav": {
                        "home": "home",
                        "games": "games",
                        "apps": "apps",
                        "editorial": "editorial",
                        "more": "more"
                    }
                },
                "app-view": {
                    "learn-more": "Learn More",
                    "trust-badge": {
                        "TRUSTED": {
                            "name": "Trusted",
                            "title": "This app is safe to download and install!",
                            "description": "We scan all apps with the best malware detection technology and compare them with other app stores to confirm they're not copycats."
                        },
                        "UNKNOWN": {
                            "name": "Unknown",
                            "title": "We don't have enough information about this app yet!",
                            "description": "This app hasn't been analysed yet so, unfortunately, we still don't have enough information about it at the moment."
                        },
                        "WARNING": {
                            "name": "Warning",
                            "title": "This app might be a threat!",
                            "description": "We've notice this app is certified by a different developer than the origial one, so it might have been tampered! We recommend you not to install it."
                        },
                        "CRITICAL": {
                            "name": "Threat",
                            "title": "This app is a threat!",
                            "description": "Our malware-detection system has noticed that this app is harmful, illegal or violates our Terms and Conditions. Do not install it!"
                        }
                    },
                    "not-fresh-version": "There's a newer version <1>here<\/1>.",
                    "appc_apps": "AppCoins apps",
                    "version": "Version {{version}}",
                    "fresh_message": "This is the latest version",
                    "trusted": "Trusted App",
                    "latest_version": "Latest APK Version",
                    "other_versions": "Other versions of {{appName}}",
                    "more_versions": "More versions",
                    "old_versions": "Old Versions",
                    "older_versions": "Older Versions",
                    "other_versions_touch": "Other versions",
                    "other_versions_store": "Other versions in {{storeName}}",
                    "last_version": "Latest Version of {{appName}}",
                    "editorial_content": "Editorial Content",
                    "description": "Description of {{appName}}",
                    "disclamer_short": "For technical reasons, this app can only be installed through Aptoide app.",
                    "disclamer_expanded": "Why is Aptoide app needed? The format of this app, called app bundle or OBB, is optimized to work perfect depending on the characteristics of each device. Aptoide app will manage and install the correct version for your device specifications.",
                    "appcoins_iap": "In-app purchases with AppCoins",
                    "changelog_title": "Whats new in version {{last_version}}",
                    "whats_new": "What's new",
                    "apps_like": "Apps in the same category",
                    "also_like": "You may also like...",
                    "app_version": "{{appName}} - Version {{version}}",
                    "app_version_fresh": "{{appName}} - This is the latest version {{version}}",
                    "good_app_guaranteed": {
                        "title": "Good App Guaranteed",
                        "body": "This app passed the security test for virus, malware and other malicious attacks and doesn't contain any threats."
                    },
                    "users_rating": "User Ratings",
                    "users_comments": "User Reviews of {{appName}}",
                    "more_comments": "See more comments",
                    "less_comments": "See less comments",
                    "apps_uploadedby": "More apps available in",
                    "similar_apps": "Apps like {{appName}}",
                    "generic_similar": "Similar Apps",
                    "generic_similar_appcoins": "Similar AppCoins Apps",
                    "information": {
                        "title": "{{appName}} - APK Information",
                        "apk_version": "APK Version",
                        "package": "Package",
                        "android_compatibility": "Android compatability",
                        "developer": "Developer",
                        "privacy_policy": "Privacy Policy",
                        "permissions": "Permissions",
                        "detailed": {
                            "title": "Detailed Information",
                            "app_name": "Name",
                            "file_size": "Size",
                            "downloads": "Downloads",
                            "release_date": "Release Date",
                            "min_screen": "Min Screen",
                            "compatible_cpus": "Supported CPU",
                            "package_id": "Package ID",
                            "package_name": "Package Name",
                            "sha1_signature": "SHA1 Signature",
                            "developer": "Developer",
                            "organization": "Organization",
                            "local": "Local",
                            "country": "Country",
                            "state_city": "State\/City",
                            "android_version": "Android Version"
                        }
                    },
                    "tabs": {
                        "details": "Details",
                        "reviews": "Reviews",
                        "editorial": "Editorial",
                        "version": "Versions",
                        "info": "Info",
                        "faqs": "FAQs"
                    },
                    "versions": {
                        "older_versions": "Older versions of {{appName}}",
                        "versions_info": "This is the latest version",
                        "versions": "Versions",
                        "subtitle": "Download and install old versions of apk for Android"
                    },
                    "meta": {
                        "app-view": {
                            "title": "{{appName}} - APK Download for Android",
                            "description": "Download {{appName}} {{version}} APK for Android right now. No extra costs. User ratings for {{smallAppName}}: {{rank}} \u2605",
                            "description_appc": "Download {{appName}} {{version}} APK for Android and earn an AppCoins bonus from Aptoide. User ratings for {{smallAppName}}: {{rank}}",
                            "keywords": [
                                "{{appName}} download",
                                "{{appName}} application",
                                "{{appName}} app"
                            ]
                        },
                        "versions": {
                            "title": "{{appName}} old version",
                            "description": "Download older versions for {{appName}} APK",
                            "keywords": [
                                "old {{appName}} apk",
                                "old version of {{appName}}",
                                "latest {{appName}} version"
                            ]
                        }
                    }
                },
                "bundles": {
                    "special": {
                        "mustPlay": "Must Play!",
                        "cantMiss": "Can't Miss!"
                    },
                    "trending": "Trending",
                    "local": "Top Download",
                    "local-top-downloads": "Local Top Downloads",
                    "cant-stop-playing": "Can't Stop Playing",
                    "must-have": "Must Have",
                    "last-updates": "Latest updates",
                    "other": "Other",
                    "featured": {
                        "games": "Featured Games Categories",
                        "apps": "Featured Apps Categories",
                        "earn-money": "Earn Money"
                    },
                    "popular": {
                        "apps": {
                            "title": "Popular Apps Android",
                            "social_networks": "Social Networks",
                            "lite_versions": "Lite Versions",
                            "tools": "Tools",
                            "video": "Video",
                            "game_tools": "Gaming Tools",
                            "audio": "Audio",
                            "entertainment": "Entertainment",
                            "communication": "Communication"
                        },
                        "games": {
                            "title": "Popular Games Android",
                            "action": "Action",
                            "sports": "Sports",
                            "casual": "Casual",
                            "non_stop_playing": "Non-Stop Playing"
                        }
                    },
                    "categories": {
                        "apps": {
                            "android": "Android Apps",
                            "of": "{{category}} Apps",
                            "latest": "Latest Apps",
                            "trending": "Trending Apps",
                            "top": "Top Apps",
                            "art-design": "Art & Design",
                            "auto-vehicles": "Auto & Vehicles",
                            "beauty": "Beauty",
                            "books-reference": "Books & Reference",
                            "business": "Business",
                            "comics": "Comics",
                            "communication": "Communication",
                            "dating": "Dating",
                            "demo": "Demo",
                            "education": "Education",
                            "entertainment": "Entertainment",
                            "events": "Events",
                            "finance": "Finance",
                            "food-drink": "Food & Drink",
                            "health": "Health",
                            "health-fitness": "Health & Fitness",
                            "house-home": "House & Home",
                            "libraries-demo": "Libraries & Demo",
                            "lifestyle": "Lifestyle",
                            "maps-navigation": "Maps & Navigation",
                            "media-video": "Media & Video",
                            "medical": "Medical",
                            "multimedia": "Multimedia",
                            "music-audio": "Music & Audio",
                            "news-magazines": "News & Magazines",
                            "news-weather": "News & Weather",
                            "others": "Others",
                            "parenting": "Parenting",
                            "personalization": "Personalization",
                            "photography": "Photography",
                            "productivity": "Productivity",
                            "reference": "Reference",
                            "shopping": "Shopping",
                            "social": "Social",
                            "software-libraries": "Software Libraries",
                            "sports": "Sports",
                            "themes": "Themes",
                            "tools": "Tools",
                            "transport": "Transport",
                            "transportation": "Transportation",
                            "travel": "Travel",
                            "travel-local": "Travel & Local",
                            "video-players-editors": "Video Players & Editors",
                            "weather": "Weather"
                        },
                        "games": {
                            "eskills": "e-Skills Games",
                            "play-to-earn": "Play-to-Earn Games",
                            "android": "Android Games",
                            "of": "{{category}} Games",
                            "latest": "Latest Games",
                            "trending": "Trending Games",
                            "top": "Top Games",
                            "adventure": "Adventure",
                            "strategy": "Strategy",
                            "casual": "Casual",
                            "simulation": "Simulation",
                            "action": "Action",
                            "arcade": "Arcade",
                            "puzzle": "Puzzle",
                            "educational": "Educational",
                            "role-playing": "Role Playing",
                            "trivia": "Trivia",
                            "word": "Word",
                            "sports-games": "Sports Games",
                            "board": "Board",
                            "racing": "Racing",
                            "card": "Card",
                            "casino": "Casino",
                            "brain-puzzle": "Brain & Puzzle",
                            "music": "Music",
                            "arcade-action": "Arcade & Action",
                            "cards-casino": "Cards & Casino",
                            "family": "Family"
                        },
                        "stores": {
                            "top": "Top Stores"
                        }
                    }
                },
                "appc": {
                    "notice": "In-app purchases with AppCoins",
                    "badge": {
                        "up-to": "up to",
                        "bonus": "bonus"
                    },
                    "bonus_info": {
                        "title": "Up to {{bonusValue}}% Bonus in every purchase!",
                        "body": "Use your AppCoins bonus to get more items in {{appName}}."
                    },
                    "sticky": "Up to {{bonusValue}}% Bonus"
                },
                "promotional": {
                    "eskills": {
                        "title": "Earn Money",
                        "description": "Beat other players with e-Skills"
                    },
                    "appc": {
                        "title": "A Bonus in Every Purchase",
                        "description": "Discover everything about AppCoins"
                    },
                    "play-to-earn": {
                        "title": "Play-to-Earn Games",
                        "description": "Everything you need to know!"
                    },
                    "roulette": {
                        "title": "Spin & Play",
                        "description": "Try your luck and discover new games."
                    }
                },
                "instagram-faq": {
                    "1": {
                        "question": "What is Instagram?",
                        "answer": "Instagram is one of the most popular social media networks on which millions of users from all over the world share images and videos. Users can also interact with each other thanks to their chat feature and even make online purchases on their favorite stores."
                    },
                    "2": {
                        "question": "How to download Instagram APK?",
                        "answer": "To download Instagram APK you just need to tap on the Download button above and follow the easy and simple steps."
                    },
                    "3": {
                        "question": "Is Instagram free to download?",
                        "answer": "Yes, downloading and installing Instagram is completely free."
                    },
                    "4": {
                        "question": "How do I download an older version of Instagram?",
                        "answer": "To download an older version of Instagram you just need to tap on Older Versions and then choose the one you would like to install."
                    },
                    "5": {
                        "question": "How do I update Instagram version?",
                        "answer": "To update Instagram to the latest version you just need to tap on the button Update above. If instead of Update the button says Open, it means you already have the latest version of Instagram!"
                    }
                }
            }
        },
        "initialLanguage": "en_GB",
        "i18nServerInstance": null,
        "pageProps": {
            "singletapActivated": false,
            "igniteSignature": "empty-signature",
            "versions": [
                {
                    "id": 65513131,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-21 06:18:12",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "294.0.0.0.15",
                    "vercode": 369401179,
                    "downloads": 67124254,
                    "size": 51469479,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65506766,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-20 06:31:34",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.84",
                    "vercode": 369307614,
                    "downloads": 67124254,
                    "size": 51626992,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65504442,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-19 20:30:52",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.81",
                    "vercode": 369307392,
                    "downloads": 67124254,
                    "size": 51581936,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65498664,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-19 06:20:46",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.74",
                    "vercode": 369306874,
                    "downloads": 67124254,
                    "size": 51639278,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65495754,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-18 23:58:34",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.64",
                    "vercode": 369306134,
                    "downloads": 67124254,
                    "size": 51643869,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65494667,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-18 13:47:59",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.57",
                    "vercode": 369305540,
                    "downloads": 67124254,
                    "size": 51120575,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65493308,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-18 03:32:37",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.51",
                    "vercode": 369305098,
                    "downloads": 67124254,
                    "size": 51627870,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65492139,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-17 21:25:06",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.47",
                    "vercode": 369304800,
                    "downloads": 67124254,
                    "size": 51091903,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65489900,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-17 12:31:05",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.44",
                    "vercode": 369304578,
                    "downloads": 67124254,
                    "size": 51116424,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                },
                {
                    "id": 65487268,
                    "uname": "instagram",
                    "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                    "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                    "date": "2023-07-17 06:14:26",
                    "name": "Instagram",
                    "store": "aptoide-web",
                    "vername": "293.0.2.0.37",
                    "vercode": 369304062,
                    "downloads": 67124254,
                    "size": 51644199,
                    "trusted": true,
                    "parsedName": "Instagram",
                    "appcoins": false
                }
            ],
            "isFresh": true,
            "canonical": true,
            "app": {
                "id": 65513131,
                "name": "Instagram",
                "package": "com.instagram.android",
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "added": "2012-04-05 18:23:36",
                "modified": "2023-07-21 08:01:23",
                "updated": "2023-07-21 06:43:16",
                "age": {
                    "name": "all",
                    "title": "Everyone",
                    "pegi": "PEGI-3",
                    "rating": 0
                },
                "developer": {
                    "id": 2747,
                    "name": "Instagram",
                    "website": "http:\/\/help.instagram.com\/",
                    "email": "android-support@instagram.com",
                    "privacy": "http:\/\/instagram.com\/legal\/privacy\/"
                },
                "store": {
                    "id": 2921627,
                    "name": "aptoide-web",
                    "avatar": "https:\/\/cdn6.aptoide.com\/imgs\/5\/2\/2\/522278a64c43fd4096f83e39b422b58d_ravatar.png",
                    "description": "",
                    "stats": {
                        "apps": 647178,
                        "subscribers": 718,
                        "downloads": 231833
                    }
                },
                "file": {
                    "vername": "294.0.0.0.15",
                    "vercode": 369401179,
                    "md5sum": "decb33ffa5c6d0e3be1fc054cf873393",
                    "filesize": 51469479,
                    "added": "2023-07-21 06:18:12",
                    "path": "https:\/\/pool.apk.aptoide.com\/aptoide-web\/com-instagram-android-369401179-65513131-decb33ffa5c6d0e3be1fc054cf873393.apk",
                    "pathAlt": "https:\/\/pool.apk.aptoide.com\/aptoide-web\/alt\/Y29tLWluc3RhZ3JhbS1hbmRyb2lkLTM2OTQwMTE3OS02NTUxMzEzMS1kZWNiMzNmZmE1YzZkMGUzYmUxZmMwNTRjZjg3MzM5Mw.apk",
                    "used_features": [
                        "android.hardware.faketouch"
                    ],
                    "used_permissions": [
                        "android.permission.ACCESS_FINE_LOCATION",
                        "android.permission.ACCESS_MEDIA_LOCATION",
                        "android.permission.ACCESS_NETWORK_STATE",
                        "android.permission.BLUETOOTH",
                        "android.permission.BLUETOOTH_CONNECT",
                        "android.permission.CAMERA",
                        "android.permission.CHANGE_NETWORK_STATE",
                        "android.permission.FOREGROUND_SERVICE",
                        "android.permission.FOREGROUND_SERVICE_MEDIA_PLAYBACK",
                        "android.permission.GET_ACCOUNTS",
                        "android.permission.INTERNET",
                        "android.permission.MANAGE_OWN_CALLS",
                        "android.permission.MEDIA_PROJECTION",
                        "android.permission.MODIFY_AUDIO_SETTINGS",
                        "android.permission.POST_NOTIFICATIONS",
                        "android.permission.READ_CONTACTS",
                        "android.permission.READ_EXTERNAL_STORAGE",
                        "android.permission.READ_MEDIA_IMAGES",
                        "android.permission.READ_MEDIA_VIDEO",
                        "android.permission.READ_MEDIA_VISUAL_USER_SELECTED",
                        "android.permission.READ_PHONE_NUMBERS",
                        "android.permission.READ_PHONE_STATE",
                        "android.permission.READ_PROFILE",
                        "android.permission.RECEIVE_BOOT_COMPLETED",
                        "android.permission.RECORD_AUDIO",
                        "android.permission.REORDER_TASKS",
                        "android.permission.USE_BIOMETRIC",
                        "android.permission.USE_CREDENTIALS",
                        "android.permission.USE_FINGERPRINT",
                        "android.permission.USE_FULL_SCREEN_INTENT",
                        "android.permission.VIBRATE",
                        "android.permission.WAKE_LOCK",
                        "android.permission.WRITE_EXTERNAL_STORAGE",
                        "android.permission.WRITE_SETTINGS",
                        "com.amazon.device.messaging.permission.RECEIVE",
                        "com.android.launcher.permission.INSTALL_SHORTCUT",
                        "com.android.launcher.permission.UNINSTALL_SHORTCUT",
                        "com.android.vending.BILLING",
                        "com.facebook.katana.provider.ACCESS",
                        "com.facebook.services.identity.FEO2",
                        "com.google.android.c2dm.permission.RECEIVE",
                        "com.google.android.finsky.permission.BIND_GET_INSTALL_REFERRER_SERVICE",
                        "com.google.android.gms.permission.AD_ID",
                        "com.htc.launcher.permission.READ_SETTINGS",
                        "com.htc.launcher.permission.UPDATE_SHORTCUT",
                        "com.huawei.android.launcher.permission.CHANGE_BADGE",
                        "com.instagram.android.DYNAMIC_RECEIVER_NOT_EXPORTED_PERMISSION",
                        "com.instagram.android.permission.CROSS_PROCESS_BROADCAST_MANAGER",
                        "com.instagram.direct.permission.DIRECT_APP_THREAD_STORE_SERVICE",
                        "com.instagram.direct.permission.PROTECTED_DEEPLINKING",
                        "com.sonyericsson.home.permission.BROADCAST_BADGE",
                        "com.sonymobile.home.permission.PROVIDER_INSERT_BADGE",
                        ".permission.RECEIVE_ADM_MESSAGE"
                    ],
                    "signature": {
                        "sha1": "C5:6F:B7:D5:91:BA:67:04:DF:04:7F:D9:8F:53:53:72:FE:A0:02:11",
                        "owner": {
                            "C": "US",
                            "CN": "Kevin Systrom",
                            "L": "San Francisco",
                            "O": "Instagram Inc",
                            "OU": "",
                            "ST": "California"
                        }
                    },
                    "hardware": {
                        "sdk": 28,
                        "screen": "SMALL",
                        "gles": 2,
                        "cpus": [
                            "arm64-v8a"
                        ],
                        "version": {
                            "name": "Android10",
                            "number": "10+"
                        }
                    },
                    "malware": {
                        "rank": "TRUSTED",
                        "trusted": true
                    }
                },
                "media": {
                    "keywords": [
                        "instagram",
                        "android",
                        "social"
                    ],
                    "description": "Instagram is the one of the most popular social media platforms in the world that allows users to create, share and enjoy creations to with everyone. It\u2019s a very useful tool to express your identity, share useful information, boost creativity, learn new things and skills, and, of course, have some fun and laughs. Thanks to some pretty useful and innovative features, such as Reels, Stories, Messenger Chat, Live Streaming...\u00a0Instagram is for sure the perfect social media platform to download to your Android device and join and community of creators from everywhere. In addition, this social network comes with very important safety and security features to guarantee your privacy and well-being in the digital world.\u00a0\r\n\r\nOn Instagram, everything is about sharing and discovering. This app offers a wide range of types of content for you to create and share, so for sure you\u2019ll find the right one for that moment, idea, piece of art... you name it! First, you can do a classic Post, which will stay in your profile. This can be anything from a photo to a video or a collection. Instagram posts are a great tool to tell the world about your identity and about who you truly are since your profile becomes a composition of everything you want to say to the world!\u00a0\r\n\r\nThe publishing options on Instagram don\u2019t end here, and that\u2019s one of the reasons for millions of users to download this social network. Apart from posts, you can also publish other types of content on Instagram, such as Stories. A Story is the right kind of publication to share a specific moment or idea: that great meal you had last night on your trip to Greece or a new song you composed for your loved one. Although the settings in terms of reach are always customizable in Instagram, the main characteristic of Stories is that they are available for 24 hours only, and they\u2019ll appear in the collection of Stories of your followers. To top it up, Instagram also has Reels, one of the latest and most popular Instagram features. Reels are usually short videos that get to express the most in the shortest time. The best part of Instagram Reels is that they get organized in one single tab for you to enjoy and discover new ones in a very quick and instant way. \u00a0\r\n\r\nOnce you download and install Instagram on your Android device, you\u2019ll access a whole world of content that\u2019s all about community. The variety and diversity in terms of creators and audiences you find on Instagram guarantee you\u2019ll find the perfect community for you for sure. From sports and fitness to fashion, lifestyle, health, entertainment, comedy, music... Instagram has it all! And it comes packed with some useful features to engage and enjoy these communities, so you\u2019ll always feel part of it. Obviously, you can follow the profiles you want to not only see all their content and stay tuned with their publications but also to get recommendations based on it and easily discover new profiles. But you can also interact with other members of the community via comments on their publications, live chat, and notes.\u00a0\r\n\r\nOne of the main priorities of Instagram is the safety of its users, and that\u2019s why there are some specific rules about the type of content and message that can be published, along with some tools to stay safe and protected. You can report anything you see on Instagram for it to be reviewed by specialists, and, also, you can block users and limit the type of content you, and others, can see. This type of options in terms of viewing limitations is one of the main reasons for everyone to choose Instagram as their preferred social network to download to their Android. Privacy can always be customized for you to share the right content with the right people.\u00a0",
                    "summary": "",
                    "news": "Introducing Voice Messaging\n\nIn any message thread, tap and hold the microphone icon to start recording a voice message. Release your finger to send.",
                    "screenshots": [
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/2\/0\/4\/20417106f46678f7005e3d21e320802c_screen.png",
                            "height": 800,
                            "width": 400,
                            "orientation": "portrait"
                        },
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/1\/0\/3\/103f0844de0fba6ba38651681eaca1e0_screen.png",
                            "height": 800,
                            "width": 400,
                            "orientation": "portrait"
                        },
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/d\/c\/2\/dc2d1eb1c0d5c82b72db6b60ae861963_screen.png",
                            "height": 800,
                            "width": 400,
                            "orientation": "portrait"
                        },
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/c\/d\/a\/cda2bed2344bebabc796646f19a7b1ee_screen.png",
                            "height": 800,
                            "width": 401,
                            "orientation": "portrait"
                        },
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/9\/e\/4\/9e4d266cfd0fb7c52f4ce7ea4ed86395_screen.png",
                            "height": 800,
                            "width": 404,
                            "orientation": "portrait"
                        },
                        {
                            "url": "https:\/\/cdn6.aptoide.com\/imgs\/f\/3\/1\/f311b60a9841c8b6d54d71583f6f4012_screen.png",
                            "height": 800,
                            "width": 400,
                            "orientation": "portrait"
                        }
                    ]
                },
                "stats": {
                    "rating": {
                        "avg": 4.27,
                        "total": 3389,
                        "votes": [
                            {
                                "value": 5,
                                "count": 1821
                            },
                            {
                                "value": 4,
                                "count": 1040
                            },
                            {
                                "value": 3,
                                "count": 302
                            },
                            {
                                "value": 2,
                                "count": 63
                            },
                            {
                                "value": 1,
                                "count": 163
                            }
                        ]
                    },
                    "prating": {
                        "avg": 4.14,
                        "total": 16039,
                        "votes": [
                            {
                                "value": 5,
                                "count": 10366
                            },
                            {
                                "value": 4,
                                "count": 1855
                            },
                            {
                                "value": 3,
                                "count": 1504
                            },
                            {
                                "value": 2,
                                "count": 329
                            },
                            {
                                "value": 1,
                                "count": 1985
                            }
                        ]
                    },
                    "downloads": 67124254,
                    "pdownloads": 116438215
                },
                "obb": {
                    "filesize": 0,
                    "filename": "",
                    "path": ""
                },
                "trusted": true,
                "fresh": false,
                "mature": false,
                "appcoins": false,
                "aab": null,
                "isTopGrossing": false,
                "isCompliant": true,
                "longName": {
                    "h1": "Instagram"
                },
                "size": 51469479,
                "hasDependencies": false,
                "malwareRank": "TRUSTED"
            },
            "query": {
                "uname": "instagram"
            },
            "appc": false,
            "compliant": true,
            "namespacesRequired": [
                "common",
                "app-view",
                "bundles",
                "appc",
                "promotional",
                "instagram-faq"
            ],
            "appType": "non_appc",
            "loaded": false,
            "packageName": "com.instagram.android",
            "groups": [
                {
                    "id": 45,
                    "name": "social",
                    "title": "Social",
                    "parent": {
                        "id": 7,
                        "name": "applications",
                        "title": "Applications"
                    }
                }
            ]
        },
        "initialReduxState": {
            "sideNav": {
                "open": false,
                "tabPage": "",
                "catID": "",
                "inAppView": false,
                "moreTab": false
            },
            "search": {
                "query": "",
                "type": "apps",
                "suggestions": []
            },
            "sidelang": {
                "active": false
            },
            "searchBox": {
                "open": false,
                "showIcon": false
            },
            "share": {
                "open": false
            },
            "cookie": {
                "open": false,
                "analytics": true,
                "marketing": false,
                "allowAll": false,
                "savedSettings": false
            },
            "shareModal": {
                "linkCopied": false,
                "iconHover": ""
            },
            "mature": {
                "showModal": false
            },
            "home": {
                "closeInstaller": false,
                "bundleExpanded": false,
                "scrollBundles": [],
                "moreInstaller": false,
                "scroll": true
            },
            "categories": {
                "subcategoryTab": "all"
            }
        },
        "mobile": false,
        "mature": false,
        "beta": false,
        "country": "US",
        "cookie_settings": {
            "analytics": false,
            "marketing": false,
            "saved_settings": false
        },
        "language": "en_GB",
        "singletapActivated": false,
        "igniteSignature": "empty-signature",
        "versions": [
            {
                "id": 65513131,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-21 06:18:12",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "294.0.0.0.15",
                "vercode": 369401179,
                "downloads": 67124254,
                "size": 51469479,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65506766,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-20 06:31:34",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.84",
                "vercode": 369307614,
                "downloads": 67124254,
                "size": 51626992,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65504442,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-19 20:30:52",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.81",
                "vercode": 369307392,
                "downloads": 67124254,
                "size": 51581936,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65498664,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-19 06:20:46",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.74",
                "vercode": 369306874,
                "downloads": 67124254,
                "size": 51639278,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65495754,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-18 23:58:34",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.64",
                "vercode": 369306134,
                "downloads": 67124254,
                "size": 51643869,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65494667,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-18 13:47:59",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.57",
                "vercode": 369305540,
                "downloads": 67124254,
                "size": 51120575,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65493308,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-18 03:32:37",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.51",
                "vercode": 369305098,
                "downloads": 67124254,
                "size": 51627870,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65492139,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-17 21:25:06",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.47",
                "vercode": 369304800,
                "downloads": 67124254,
                "size": 51091903,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65489900,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-17 12:31:05",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.44",
                "vercode": 369304578,
                "downloads": 67124254,
                "size": 51116424,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            },
            {
                "id": 65487268,
                "uname": "instagram",
                "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
                "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
                "date": "2023-07-17 06:14:26",
                "name": "Instagram",
                "store": "aptoide-web",
                "vername": "293.0.2.0.37",
                "vercode": 369304062,
                "downloads": 67124254,
                "size": 51644199,
                "trusted": true,
                "parsedName": "Instagram",
                "appcoins": false
            }
        ],
        "isFresh": true,
        "canonical": true,
        "app": {
            "id": 65513131,
            "name": "Instagram",
            "package": "com.instagram.android",
            "uname": "instagram",
            "icon": "https:\/\/cdn6.aptoide.com\/imgs\/3\/c\/0\/3c0b5296e29c391d50a7580b3e949a34_icon.png",
            "graphic": "https:\/\/cdn6.aptoide.com\/imgs\/3\/a\/e\/3aef259315e6bdcc3c538cccd2ccfc1d_fgraphic.jpg",
            "added": "2012-04-05 18:23:36",
            "modified": "2023-07-21 08:01:23",
            "updated": "2023-07-21 06:43:16",
            "age": {
                "name": "all",
                "title": "Everyone",
                "pegi": "PEGI-3",
                "rating": 0
            },
            "developer": {
                "id": 2747,
                "name": "Instagram",
                "website": "http:\/\/help.instagram.com\/",
                "email": "android-support@instagram.com",
                "privacy": "http:\/\/instagram.com\/legal\/privacy\/"
            },
            "store": {
                "id": 2921627,
                "name": "aptoide-web",
                "avatar": "https:\/\/cdn6.aptoide.com\/imgs\/5\/2\/2\/522278a64c43fd4096f83e39b422b58d_ravatar.png",
                "description": "",
                "stats": {
                    "apps": 647178,
                    "subscribers": 718,
                    "downloads": 231833
                }
            },
            "file": {
                "vername": "294.0.0.0.15",
                "vercode": 369401179,
                "md5sum": "decb33ffa5c6d0e3be1fc054cf873393",
                "filesize": 51469479,
                "added": "2023-07-21 06:18:12",
                "path": "https:\/\/pool.apk.aptoide.com\/aptoide-web\/com-instagram-android-369401179-65513131-decb33ffa5c6d0e3be1fc054cf873393.apk",
                "pathAlt": "https:\/\/pool.apk.aptoide.com\/aptoide-web\/alt\/Y29tLWluc3RhZ3JhbS1hbmRyb2lkLTM2OTQwMTE3OS02NTUxMzEzMS1kZWNiMzNmZmE1YzZkMGUzYmUxZmMwNTRjZjg3MzM5Mw.apk",
                "used_features": [
                    "android.hardware.faketouch"
                ],
                "used_permissions": [
                    "android.permission.ACCESS_FINE_LOCATION",
                    "android.permission.ACCESS_MEDIA_LOCATION",
                    "android.permission.ACCESS_NETWORK_STATE",
                    "android.permission.BLUETOOTH",
                    "android.permission.BLUETOOTH_CONNECT",
                    "android.permission.CAMERA",
                    "android.permission.CHANGE_NETWORK_STATE",
                    "android.permission.FOREGROUND_SERVICE",
                    "android.permission.FOREGROUND_SERVICE_MEDIA_PLAYBACK",
                    "android.permission.GET_ACCOUNTS",
                    "android.permission.INTERNET",
                    "android.permission.MANAGE_OWN_CALLS",
                    "android.permission.MEDIA_PROJECTION",
                    "android.permission.MODIFY_AUDIO_SETTINGS",
                    "android.permission.POST_NOTIFICATIONS",
                    "android.permission.READ_CONTACTS",
                    "android.permission.READ_EXTERNAL_STORAGE",
                    "android.permission.READ_MEDIA_IMAGES",
                    "android.permission.READ_MEDIA_VIDEO",
                    "android.permission.READ_MEDIA_VISUAL_USER_SELECTED",
                    "android.permission.READ_PHONE_NUMBERS",
                    "android.permission.READ_PHONE_STATE",
                    "android.permission.READ_PROFILE",
                    "android.permission.RECEIVE_BOOT_COMPLETED",
                    "android.permission.RECORD_AUDIO",
                    "android.permission.REORDER_TASKS",
                    "android.permission.USE_BIOMETRIC",
                    "android.permission.USE_CREDENTIALS",
                    "android.permission.USE_FINGERPRINT",
                    "android.permission.USE_FULL_SCREEN_INTENT",
                    "android.permission.VIBRATE",
                    "android.permission.WAKE_LOCK",
                    "android.permission.WRITE_EXTERNAL_STORAGE",
                    "android.permission.WRITE_SETTINGS",
                    "com.amazon.device.messaging.permission.RECEIVE",
                    "com.android.launcher.permission.INSTALL_SHORTCUT",
                    "com.android.launcher.permission.UNINSTALL_SHORTCUT",
                    "com.android.vending.BILLING",
                    "com.facebook.katana.provider.ACCESS",
                    "com.facebook.services.identity.FEO2",
                    "com.google.android.c2dm.permission.RECEIVE",
                    "com.google.android.finsky.permission.BIND_GET_INSTALL_REFERRER_SERVICE",
                    "com.google.android.gms.permission.AD_ID",
                    "com.htc.launcher.permission.READ_SETTINGS",
                    "com.htc.launcher.permission.UPDATE_SHORTCUT",
                    "com.huawei.android.launcher.permission.CHANGE_BADGE",
                    "com.instagram.android.DYNAMIC_RECEIVER_NOT_EXPORTED_PERMISSION",
                    "com.instagram.android.permission.CROSS_PROCESS_BROADCAST_MANAGER",
                    "com.instagram.direct.permission.DIRECT_APP_THREAD_STORE_SERVICE",
                    "com.instagram.direct.permission.PROTECTED_DEEPLINKING",
                    "com.sonyericsson.home.permission.BROADCAST_BADGE",
                    "com.sonymobile.home.permission.PROVIDER_INSERT_BADGE",
                    ".permission.RECEIVE_ADM_MESSAGE"
                ],
                "signature": {
                    "sha1": "C5:6F:B7:D5:91:BA:67:04:DF:04:7F:D9:8F:53:53:72:FE:A0:02:11",
                    "owner": {
                        "C": "US",
                        "CN": "Kevin Systrom",
                        "L": "San Francisco",
                        "O": "Instagram Inc",
                        "OU": "",
                        "ST": "California"
                    }
                },
                "hardware": {
                    "sdk": 28,
                    "screen": "SMALL",
                    "gles": 2,
                    "cpus": [
                        "arm64-v8a"
                    ],
                    "version": {
                        "name": "Android10",
                        "number": "10+"
                    }
                },
                "malware": {
                    "rank": "TRUSTED",
                    "trusted": true
                }
            },
            "media": {
                "keywords": [
                    "instagram",
                    "android",
                    "social"
                ],
                "description": "Instagram is the one of the most popular social media platforms in the world that allows users to create, share and enjoy creations to with everyone. It\u2019s a very useful tool to express your identity, share useful information, boost creativity, learn new things and skills, and, of course, have some fun and laughs. Thanks to some pretty useful and innovative features, such as Reels, Stories, Messenger Chat, Live Streaming...\u00a0Instagram is for sure the perfect social media platform to download to your Android device and join and community of creators from everywhere. In addition, this social network comes with very important safety and security features to guarantee your privacy and well-being in the digital world.\u00a0\r\n\r\nOn Instagram, everything is about sharing and discovering. This app offers a wide range of types of content for you to create and share, so for sure you\u2019ll find the right one for that moment, idea, piece of art... you name it! First, you can do a classic Post, which will stay in your profile. This can be anything from a photo to a video or a collection. Instagram posts are a great tool to tell the world about your identity and about who you truly are since your profile becomes a composition of everything you want to say to the world!\u00a0\r\n\r\nThe publishing options on Instagram don\u2019t end here, and that\u2019s one of the reasons for millions of users to download this social network. Apart from posts, you can also publish other types of content on Instagram, such as Stories. A Story is the right kind of publication to share a specific moment or idea: that great meal you had last night on your trip to Greece or a new song you composed for your loved one. Although the settings in terms of reach are always customizable in Instagram, the main characteristic of Stories is that they are available for 24 hours only, and they\u2019ll appear in the collection of Stories of your followers. To top it up, Instagram also has Reels, one of the latest and most popular Instagram features. Reels are usually short videos that get to express the most in the shortest time. The best part of Instagram Reels is that they get organized in one single tab for you to enjoy and discover new ones in a very quick and instant way. \u00a0\r\n\r\nOnce you download and install Instagram on your Android device, you\u2019ll access a whole world of content that\u2019s all about community. The variety and diversity in terms of creators and audiences you find on Instagram guarantee you\u2019ll find the perfect community for you for sure. From sports and fitness to fashion, lifestyle, health, entertainment, comedy, music... Instagram has it all! And it comes packed with some useful features to engage and enjoy these communities, so you\u2019ll always feel part of it. Obviously, you can follow the profiles you want to not only see all their content and stay tuned with their publications but also to get recommendations based on it and easily discover new profiles. But you can also interact with other members of the community via comments on their publications, live chat, and notes.\u00a0\r\n\r\nOne of the main priorities of Instagram is the safety of its users, and that\u2019s why there are some specific rules about the type of content and message that can be published, along with some tools to stay safe and protected. You can report anything you see on Instagram for it to be reviewed by specialists, and, also, you can block users and limit the type of content you, and others, can see. This type of options in terms of viewing limitations is one of the main reasons for everyone to choose Instagram as their preferred social network to download to their Android. Privacy can always be customized for you to share the right content with the right people.\u00a0",
                "summary": "",
                "news": "Introducing Voice Messaging\n\nIn any message thread, tap and hold the microphone icon to start recording a voice message. Release your finger to send.",
                "screenshots": [
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/2\/0\/4\/20417106f46678f7005e3d21e320802c_screen.png",
                        "height": 800,
                        "width": 400,
                        "orientation": "portrait"
                    },
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/1\/0\/3\/103f0844de0fba6ba38651681eaca1e0_screen.png",
                        "height": 800,
                        "width": 400,
                        "orientation": "portrait"
                    },
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/d\/c\/2\/dc2d1eb1c0d5c82b72db6b60ae861963_screen.png",
                        "height": 800,
                        "width": 400,
                        "orientation": "portrait"
                    },
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/c\/d\/a\/cda2bed2344bebabc796646f19a7b1ee_screen.png",
                        "height": 800,
                        "width": 401,
                        "orientation": "portrait"
                    },
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/9\/e\/4\/9e4d266cfd0fb7c52f4ce7ea4ed86395_screen.png",
                        "height": 800,
                        "width": 404,
                        "orientation": "portrait"
                    },
                    {
                        "url": "https:\/\/cdn6.aptoide.com\/imgs\/f\/3\/1\/f311b60a9841c8b6d54d71583f6f4012_screen.png",
                        "height": 800,
                        "width": 400,
                        "orientation": "portrait"
                    }
                ]
            },
            "stats": {
                "rating": {
                    "avg": 4.27,
                    "total": 3389,
                    "votes": [
                        {
                            "value": 5,
                            "count": 1821
                        },
                        {
                            "value": 4,
                            "count": 1040
                        },
                        {
                            "value": 3,
                            "count": 302
                        },
                        {
                            "value": 2,
                            "count": 63
                        },
                        {
                            "value": 1,
                            "count": 163
                        }
                    ]
                },
                "prating": {
                    "avg": 4.14,
                    "total": 16039,
                    "votes": [
                        {
                            "value": 5,
                            "count": 10366
                        },
                        {
                            "value": 4,
                            "count": 1855
                        },
                        {
                            "value": 3,
                            "count": 1504
                        },
                        {
                            "value": 2,
                            "count": 329
                        },
                        {
                            "value": 1,
                            "count": 1985
                        }
                    ]
                },
                "downloads": 67124254,
                "pdownloads": 116438215
            },
            "obb": {
                "filesize": 0,
                "filename": "",
                "path": ""
            },
            "trusted": true,
            "fresh": false,
            "mature": false,
            "appcoins": false,
            "aab": null,
            "isTopGrossing": false,
            "isCompliant": true,
            "longName": {
                "h1": "Instagram"
            },
            "size": 51469479,
            "hasDependencies": false,
            "malwareRank": "TRUSTED"
        },
        "query": {
            "uname": "instagram"
        },
        "appc": false,
        "compliant": true,
        "namespacesRequired": [
            "common",
            "app-view",
            "bundles",
            "appc",
            "promotional",
            "instagram-faq"
        ],
        "appType": "non_appc",
        "loaded": false,
        "packageName": "com.instagram.android",
        "groups": [
            {
                "id": 45,
                "name": "social",
                "title": "Social",
                "parent": {
                    "id": 7,
                    "name": "applications",
                    "title": "Applications"
                }
            }
        ]
    },
    "page": "\/app-view",
    "query": {
        "uname": "instagram"
    },
    "buildId": "JPf4HLKOb7aJouGvrP6e3",
    "assetPrefix": "https:\/\/cdn-mobile.aptoide.com",
    "isFallback": false,
    "customServer": true,
    "gip": true,
    "appGip": true,
    "scriptLoader": []
}
```
{% endswagger-response %}
{% endswagger %}



[^1]: Change App ID
