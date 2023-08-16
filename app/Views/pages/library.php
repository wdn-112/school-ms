<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta http-equiv=X-UA-Compatible content="ie=edge">
    <title>Media Library | Edison</title>
    <script id=www-widgetapi-script src=../../s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js async=""></script>
    <script src=https://www.youtube.com/player_api></script>
    <link rel="stylesheet preload" as=style href=css/preload.min.css>
    <link rel="stylesheet preload" as=style href=css/icomoon.css>
    <link rel="stylesheet preload" as=style href=css/libs.min.css>
    <link rel=stylesheet href=css/library.min.css>
    <link rel=stylesheet href=css/floatbutton.min.css>
  </head>
  <body>
    <div class="promobar d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <ul class="promobar_socials d-flex align-items-center">
          <li class=promobar_socials-item>
            <a class=link href=# target=_blank rel="noopener noreferrer">
              <i class=icon-facebook></i>
            </a>
          </li>
          <li class=promobar_socials-item>
            <a class=link href=# target=_blank rel="noopener noreferrer">
              <i class=icon-twitter></i>
            </a>
          </li>
          <li class=promobar_socials-item>
            <a class=link href=# target=_blank rel="noopener noreferrer">
              <i class=icon-instagram></i>
            </a>
          </li>
        </ul>
        <div class="promobar_main d-flex align-items-center">
          <p class=promobar_main-text>Try for free! <span class=hide>30 day Trial and Free Lectures</span>
          </p>
          <a class="btn btn--yellow" href=# id=signUpTrigger>
            <span>Sign Up</span>
          </a>
        </div>
      </div>
    </div>
    <header class=header data-page=library>
      <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div class="logo header_logo">
          <a class="d-inline-flex align-items-center" href=index.html>
            <span class=logo_picture>
              <img src=svg/logo.svg alt=Edison>
            </span>
            <span class=text>
              <span class=brand>edison</span>
              <span class=text_secondary>courses</span>
            </span>
          </a>
        </div>
        <button class=header_trigger type=button data-bs-toggle=collapse data-bs-target=#headerMenu aria-controls=headerMenu>
          <span class=line></span>
          <span class=line></span>
          <span class=line></span>
        </button>
        <nav class="header_nav collapse" id=headerMenu>
          <ul class=header_nav-list>
            <li class=header_nav-list_item>
              <a class=nav-item href=index.html data-page=home>Home</a>
            </li>
            <li class="header_nav-list_item dropdown">
              <a class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center" href=courses.html data-bs-toggle=collapse data-bs-target=#coursesMenu data-trigger=dropdown aria-expanded=false aria-controls=coursesMenu data-page=courses>All Courses <i class="icon-angle-down icon"></i>
              </a>
              <div class="dropdown-menu collapse" id=coursesMenu>
                <ul class=dropdown-list>
                  <li class=list-item data-main=true>
                    <a class="dropdown-item nav-item" data-page=courses href=courses.html data-main=true>All Courses</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=course href=course.html>Course Description</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class=header_nav-list_item>
              <a class=nav-item href=about.html data-page=about>About Us</a>
            </li>
            <li class=header_nav-list_item>
              <a class=nav-item href=pricing.html data-page=pricing>Prices</a>
            </li>
            <li class="header_nav-list_item dropdown">
              <a class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center" href=journal.html data-bs-toggle=collapse data-bs-target=#journalMenu data-trigger=dropdown aria-expanded=false aria-controls=journalMenu data-page=journal>Journal <i class="icon-angle-down icon"></i>
              </a>
              <div class="dropdown-menu collapse" id=journalMenu>
                <ul class=dropdown-list>
                  <li class=list-item data-main=true>
                    <a class="dropdown-item nav-item" data-page=journal href=journal.html data-main=true>Journal</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=post href=post.html>Single Post</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header_nav-list_item dropdown">
              <a class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center" href=# data-bs-toggle=collapse data-bs-target=#pagesMenu data-trigger=dropdown aria-expanded=false aria-controls=pagesMenu data-page="">Pages <i class="icon-angle-down icon"></i>
              </a>
              <div class="dropdown-menu collapse" id=pagesMenu>
                <ul class=dropdown-list>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=library href=library.html>Media library</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=events href=events.html>Events</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=teachers href=team.html>Teachers</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=faq href=faq.html>FAQ</a>
                  </li>
                  <li class=list-item>
                    <a class="dropdown-item nav-item" data-page=error href=404.html>404</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class=header_nav-list_item>
              <a class=nav-item href=contacts.html data-page=contacts>Contact Us</a>
            </li>
          </ul>
          <ul class="promobar_socials d-flex align-items-center justify-content-center">
            <li class=promobar_socials-item>
              <a class=link href=# target=_blank rel="noopener noreferrer">
                <i class=icon-facebook></i>
              </a>
            </li>
            <li class=promobar_socials-item>
              <a class=link href=# target=_blank rel="noopener noreferrer">
                <i class=icon-twitter></i>
              </a>
            </li>
            <li class=promobar_socials-item>
              <a class=link href=# target=_blank rel="noopener noreferrer">
                <i class=icon-instagram></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <header class=page>
      <div class=page_breadcrumbs>
        <div class=container>
          <ul class="page_breadcrumbs-list d-flex flex-wrap align-items-center">
            <li class=list-item>
              <a href=index.html class=link>Home</a>
            </li>
            <li class=list-item>Media Library</li>
          </ul>
        </div>
      </div>
      <div class=page_main>
        <div class=underlay></div>
        <div class=container>
          <div class=content-wrapper>
            <h1 class=page_main-header>Media Library</h1>
            <p class=page_main-text>Donec accumsan, dolor ac malesuada rhoncus, leo arcu pellentesque dolor, nec tristique diam neque vitae sem. Nulla a lectus sollicitudin, volutpat lacus id, eleifend ipsum.</p>
            <form class=page_main-form action=# method=post data-type=search>
              <i class="icon-search-solid icon"></i>
              <input class="field required" type=search placeholder="Search for…">
            </form>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class=content>
        <div class="container d-flex flex-column flex-lg-row flex-wrap justify-content-lg-between">
          <div class="panel d-flex align-items-center justify-content-between">
            <div class=panel_block>
              <a class="link inline-flex align-items-center" href=# data-bs-toggle=collapse data-bs-target=#sidebar>
                <i class="icon-ellipsis-v-solid icon"></i> All </a>
            </div>
            <div class=panel_block>
              <select name=sidebarLang id=sidebarLangPanel>
                <option value=en>English</option>
                <option value=de>Deutsch</option>
                <option value=it>Italiano</option>
                <option value=pl>Polski</option>
              </select>
            </div>
          </div>
          <aside class="sidebar collapse" id=sidebar>
            <div class="sidebar_block sidebar_block--nav">
              <h4 class=sidebar_block-header>All Categories:</h4>
              <ul class=list>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Business and Marketing</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Languages learning</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Art and Design</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Programming</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Personal Growth</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Health and Beauty</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Psychology and Relationships</span>
                  </a>
                </li>
                <li class=list-item>
                  <a class=link href=#>
                    <span class=icon_wrapper>
                      <i class="icon-arrow-circle-left-solid icon"></i>
                    </span>
                    <span class=title>Cryptocurrency, Blockchain, Forex</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="sidebar_block sidebar_block--types">
              <h4 class=sidebar_block-header>Types of lessons:</h4>
              <ul class=list>
                <li class=list-item>
                  <input type=checkbox id=onlineVideo>
                  <label for=onlineVideo>
                    <i class="icon-check icon"></i> On-line video lessons </label>
                </li>
                <li class=list-item>
                  <input type=checkbox id=digests>
                  <label for=digests>
                    <i class="icon-check icon"></i> Text digests </label>
                </li>
                <li class=list-item>
                  <input type=checkbox id=webinars>
                  <label for=webinars>
                    <i class="icon-check icon"></i> Lections and Webinars </label>
                </li>
                <li class=list-item>
                  <input type=checkbox id=realTime>
                  <label for=realTime>
                    <i class="icon-check icon"></i> Real-time teaching </label>
                </li>
              </ul>
            </div>
            <div class="sidebar_block sidebar_block--lang">
              <h4 class=sidebar_block-header>Select Language</h4>
              <select name=sidebarLang id=sidebarLang>
                <option value=en>English</option>
                <option value=de>Deutsch</option>
                <option value=it>Italiano</option>
                <option value=pl>Polski</option>
              </select>
            </div>
          </aside>
          <div class=content_main>
            <div class="content_main-block content_main-block--promoted">
              <div class=video>
                <div class=cover>
                  <div class=cover_media>
                    <picture>
                      <source data-srcset=img/library/promoted.webp srcset=img/library/promoted.webp>
                      <img class=lazy data-src=img/library/promoted.jpg src=img/library/promoted.jpg alt=media>
                    </picture>
                  </div>
                  <a class=cover_play href=#>
                    <lottie-player src=lottie/play.json background=404.html speed=.5 style="width: 100%; height: 100%" loop autoplay></lottie-player>
                  </a>
                  <span class=cover_duration>20:00</span>
                  <span class=cover_label>Trending</span>
                </div>
                <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player" allowfullscreen></iframe>
              </div>
              <h4 class=title>NEW COURSE! Python specialization for everyone. Write your first program</h4>
              <div class="rate d-sm-flex align-items-center">
                <ul class="rating d-flex align-items-center">
                  <li class=rating_star>
                    <i class="icon-star icon"></i>
                  </li>
                  <li class=rating_star>
                    <i class="icon-star icon"></i>
                  </li>
                  <li class=rating_star>
                    <i class="icon-star icon"></i>
                  </li>
                  <li class=rating_star>
                    <i class="icon-star icon"></i>
                  </li>
                  <li class=rating_star>
                    <i class="icon-star icon"></i>
                  </li>
                </ul>
                <span class=text>Rate 4,8 by 345,000 respondents</span>
              </div>
              <p class=description>Learn to Program and Analyze Data with Python. Develop programs to gather, clean, analyze, and visualize data.</p>
              <div class="author d-flex align-items-start">
                <div class=author_avatar>
                  <picture>
                    <source data-srcset=img/library/avatar.webp srcset=img/library/avatar.webp>
                    <img class=lazy data-src=img/library/avatar.jpg src=img/library/avatar.jpg alt=media>
                  </picture>
                </div>
                <div class="author_about d-flex flex-column">
                  <h5 class=author_about-name>Givinill Gunao</h5>
                  <span class="author_about-text text">Author, course methodologist</span>
                  <p class="author_about-bio bio">Professor of the Practice of Computer Science, Columbia University, School of Engineering and Applied Sciences</p>
                </div>
              </div>
            </div>
            <div class="content_main-block content_main-block--list">
              <ul class="videos d-grid">
                <li class=videos-item>
                  <div class=cover>
                    <div class=cover_media>
                      <picture>
                        <source data-srcset=img/library/01.webp srcset=img/library/01.webp>
                        <img class=lazy data-src=img/library/01.jpg src=img/library/01.jpg alt=media>
                      </picture>
                    </div>
                    <span class=cover_duration>23:35</span>
                    <div class=cover_text>
                      <span class=cover_text-name>Bernard Trompton</span>
                      <h5 class=cover_text-title>Free webinar. Invaluable learning techniques</h5>
                    </div>
                  </div>
                  <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player" allowfullscreen></iframe>
                </li>
                <li class=videos-item>
                  <div class=cover>
                    <div class=cover_media>
                      <picture>
                        <source data-srcset=img/library/02.webp srcset=img/library/02.webp>
                        <img class=lazy data-src=img/library/02.jpg src=img/library/02.jpg alt=media>
                      </picture>
                    </div>
                    <span class=cover_duration>40:00</span>
                    <div class=cover_text>
                      <span class=cover_text-name>Margareth Farmer</span>
                      <h5 class=cover_text-title>Master Class - On-line Learning</h5>
                    </div>
                  </div>
                  <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player" allowfullscreen></iframe>
                </li>
                <li class=videos-item>
                  <div class=cover>
                    <div class=cover_media>
                      <picture>
                        <source data-srcset=img/library/03.webp srcset=img/library/03.webp>
                        <img class=lazy data-src=img/library/03.jpg src=img/library/03.jpg alt=media>
                      </picture>
                    </div>
                    <span class=cover_duration>23:35</span>
                    <div class=cover_text>
                      <span class=cover_text-name>Bernard Trompton</span>
                      <h5 class=cover_text-title>How Create on-line Store. Strategy, Instructions</h5>
                    </div>
                  </div>
                  <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player" allowfullscreen></iframe>
                </li>
                <li class=videos-item>
                  <div class=cover>
                    <div class=cover_media>
                      <picture>
                        <source data-srcset=img/library/04.webp srcset=img/library/04.webp>
                        <img class=lazy data-src=img/library/04.jpg src=img/library/04.jpg alt=media>
                      </picture>
                    </div>
                    <span class=cover_duration>40:00</span>
                    <div class=cover_text>
                      <span class=cover_text-name>Margareth Farmer</span>
                      <h5 class=cover_text-title>Machine learning</h5>
                    </div>
                  </div>
                  <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player" allowfullscreen></iframe>
                </li>
              </ul>
            </div>
            <div class="content_main-block content_main-block--courses">
              <ul class="courses d-grid">
                <li class="courses_item d-sm-flex">
                  <div class=media>
                    <picture>
                      <source data-srcset=img/library/course01.webp srcset=img/library/course01.webp>
                      <img class=lazy data-src=img/library/course01.jpg src=img/library/course01.jpg alt=media>
                    </picture>
                    <div class="media_cover media_cover--blue">
                      <i class="icon-code-solid icon"></i>
                    </div>
                  </div>
                  <div class="main d-flex flex-column">
                    <a class="main_title h4" href=course.html target=_blank rel="noopener noreferrer">Computer Programming Basic program</a>
                    <ul class="rating d-flex align-items-center">
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                    </ul>
                    <span class=main_author>by Adrian Dawson school</span>
                    <span class=main_duration>48 lectures ( 280 Hours)</span>
                  </div>
                </li>
                <li class="courses_item d-sm-flex">
                  <div class=media>
                    <picture>
                      <source data-srcset=img/library/course02.webp srcset=img/library/course02.webp>
                      <img class=lazy data-src=img/library/course02.jpg src=img/library/course02.jpg alt=media>
                    </picture>
                    <div class="media_cover media_cover--orange">
                      <i class="icon-js-square-brands icon"></i>
                    </div>
                  </div>
                  <div class="main d-flex flex-column">
                    <a class="main_title h4" href=course.html target=_blank rel="noopener noreferrer">Java Programming and Software Engineering Fundamentals</a>
                    <ul class="rating d-flex align-items-center">
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                    </ul>
                    <span class=main_author>by Adrian Dawson school</span>
                    <span class=main_duration>48 lectures ( 280 Hours)</span>
                  </div>
                </li>
                <li class="courses_item d-sm-flex">
                  <div class=media>
                    <picture>
                      <source data-srcset=img/library/course03.webp srcset=img/library/course03.webp>
                      <img class=lazy data-src=img/library/course03.jpg src=img/library/course03.jpg alt=media>
                    </picture>
                    <div class="media_cover media_cover--sky">
                      <i class="icon-css3-alt-brands icon"></i>
                    </div>
                  </div>
                  <div class="main d-flex flex-column">
                    <a class="main_title h4" href=course.html target=_blank rel="noopener noreferrer">Ultimate CSS Grid Course: From Beginner to Advanced</a>
                    <ul class="rating d-flex align-items-center">
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                    </ul>
                    <span class=main_author>by Adrian Dawson school</span>
                    <span class=main_duration>48 lectures ( 280 Hours)</span>
                  </div>
                </li>
                <li class="courses_item d-sm-flex">
                  <div class=media>
                    <picture>
                      <source data-srcset=img/library/course04.webp srcset=img/library/course04.webp>
                      <img class=lazy data-src=img/library/course04.jpg src=img/library/course04.jpg alt=media>
                    </picture>
                    <div class="media_cover media_cover--dark">
                      <i class="icon-python-brands icon"></i>
                    </div>
                  </div>
                  <div class="main d-flex flex-column">
                    <a class="main_title h4" href=course.html target=_blank rel="noopener noreferrer">IT Automation with Python</a>
                    <ul class="rating d-flex align-items-center">
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                      <li class=rating_star>
                        <i class="icon-star icon"></i>
                      </li>
                    </ul>
                    <span class=main_author>by Adrian Dawson school</span>
                    <span class=main_duration>48 lectures ( 280 Hours)</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="pagination d-flex align-items-center justify-content-sm-end">
              <ul class="pagination_pages d-flex">
                <li class=pagination_pages-page>
                  <a class="page active" href=#>
                    <span class=page-number>1</span>
                  </a>
                </li>
                <li class=pagination_pages-page>
                  <a class=page href=#>
                    <span class=page-number>2</span>
                  </a>
                </li>
                <li class=pagination_pages-page>
                  <a class=page href=#>
                    <span class=page-number>3</span>
                  </a>
                </li>
              </ul>
              <a class=pagination_next href=#>
                <i class="icon-angle-right icon"></i>
              </a>
            </div>
          </div>
          <div class="content_banner d-lg-flex align-items-center">
            <div class=media>
              <picture>
                <source data-srcset=img/library/banner.webp srcset=img/library/banner.webp>
                <img class=lazy data-src=img/library/banner.png src=img/library/banner.png alt=media>
              </picture>
            </div>
            <div class=main>
              <h2 class=main_title>Sign up now and save 50%</h2>
              <p class=main_text>Praesent gravida interdum ante non tincidunt. Integer pellentesque vestibulum ipsum, vitae hendrerit enim iaculis porta. Etiam euismod ipsum id orci rutrum</p>
            </div>
          </div>
        </div>
      </div>
      <section class=contacts_form>
        <div class=container>
          <div class=contacts_form-header>
            <h2 class=contacts_form-header_title>Our experts will help you choose a course</h2>
            <p class="contacts_form-header_text text">If you have questions about the format or do not know what to choose, leave your request: we will be happy to answer all your questions.</p>
          </div>
          <form class=contacts_form-form action=https://html.merku.love/edison/form.php method=post data-type=contacts>
            <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
              <input class="field required" type=text data-type=email placeholder=Email id=contactsEmail>
              <input class="field required" type=text placeholder=Name id=contactsName>
            </div>
            <div class="contacts_form-form_wrapper d-sm-flex justify-content-between">
              <input class="field required" type=text data-type=tel placeholder="Phone number" id=contactsTel>
              <input class="field required" type=text placeholder=Subject id=contactsSubject>
            </div>
            <textarea class="field required" placeholder="Your message here" data-type=message id=contactsMessage></textarea>
            <div class=contacts_form-form_footer>
              <div class="wrapper d-flex flex-wrap align-items-center justify-content-center">
                <div class=checkbox>
                  <input type=checkbox name=dataProcessing id=dataProcessing checked=checked>
                  <label for=dataProcessing>
                    <i class="icon-check icon"></i> I agree to the terms of data processing. </label>
                </div>
                <a class=link href=#>Terms and Conditions</a>
              </div>
              <button class="btn btn--gradient" type=submit>
                <span class=text>Send a Message</span>
              </button>
            </div>
          </form>
        </div>
      </section>
    </main>
    <footer class=footer>
      <div class=container>
        <div class="footer_wrapper d-sm-flex flex-wrap flex-lg-nowrap justify-content-lg-between">
          <div class="footer_block col-sm-6 col-lg-auto" data-order=1>
            <div class="logo logo--footer">
              <a class="d-inline-flex align-items-center" href=index.html>
                <span class=logo_picture>
                  <img src=svg/logo.svg alt=Edison>
                </span>
                <span class=text>
                  <span class=brand>edison</span>
                  <span class=text_secondary>courses</span>
                </span>
              </a>
            </div>
            <p class=footer_block-text>Curabitur non libero at lorem finibus lobortis. Ut auctor egestas pretium. Proin nunc ligula, venenatis tempor</p>
            <ul class="footer_block-socials d-flex align-items-center">
              <li class=footer_block-socials_item>
                <a class=link href=https://www.facebook.com/ target=_blank rel="noopener noreferrer">
                  <i class=icon-facebook></i>
                </a>
              </li>
              <li class=footer_block-socials_item>
                <a class=link href=https://www.twitter.com/ target=_blank rel="noopener noreferrer">
                  <i class=icon-twitter></i>
                </a>
              </li>
              <li class=footer_block-socials_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <i class=icon-instagram></i>
                </a>
              </li>
            </ul>
            <div class="wrapper d-flex flex-column">
              <a class="link link--contacts text text--sm d-inline-flex align-items-center" href=mailto:example@domain.com>
                <i class="icon-envelope icon"></i> acadesiq@mail.com </a>
              <a class="link link--contacts text text--sm d-inline-flex align-items-center" href=tel:+123456789>
                <i class="icon-phone-solid icon"></i> +1-202-555-0190 </a>
            </div>
          </div>
          <div class="footer_block col-sm-6 col-lg-auto" data-order=2>
            <h5 class=footer_block-header>Information:</h5>
            <ul class=footer_block-nav>
              <li class=footer_block-nav_item>
                <a class=link href=about.html>About This Project</a>
              </li>
              <li class=footer_block-nav_item>
                <a class=link href=contacts.html>Contact Us</a>
              </li>
              <li class=footer_block-nav_item>
                <a class=link href=courses.html>All Courses</a>
              </li>
              <li class=footer_block-nav_item>
                <a class=link href=journal.html>From the Blog</a>
              </li>
              <li class=footer_block-nav_item>
                <a class=link href=library.html>Media Library</a>
              </li>
              <li class=footer_block-nav_item>
                <a class=link href=faq.html>FAQ</a>
              </li>
            </ul>
          </div>
          <div class="footer_block col-sm-6 col-lg-auto m-sm-0" data-order=3>
            <h5 class=footer_block-header>Popular Courses:</h5>
            <ul class=footer_block-list>
              <li class="footer_block-list_item d-flex align-items-baseline">
                <span class=marker></span>
                <a class=link href=course.html>Data Science Fundamentals CS with Python and SQL</a>
              </li>
              <li class="footer_block-list_item d-flex align-items-baseline">
                <span class=marker></span>
                <a class=link href=course.html>AWS Certified Developer - Associate 2020</a>
              </li>
              <li class="footer_block-list_item d-flex align-items-baseline">
                <span class=marker></span>
                <a class=link href=course.html>How to Draw From Beginner to Master</a>
              </li>
            </ul>
          </div>
          <div class="footer_block col-sm-6 col-lg-auto" data-order=4>
            <h5 class=footer_block-header>Instagram:</h5>
            <ul class="footer_block-instagram d-grid">
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/01.webp srcset=img/footer/01.webp>
                    <img class=lazy data-src=img/footer/01.jpg src=img/footer/01.jpg alt=media>
                  </picture>
                </a>
              </li>
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/02.webp srcset=img/footer/02.webp>
                    <img class=lazy data-src=img/footer/02.jpg src=img/footer/02.jpg alt=media>
                  </picture>
                </a>
              </li>
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/03.webp srcset=img/footer/03.webp>
                    <img class=lazy data-src=img/footer/03.jpg src=img/footer/03.jpg alt=media>
                  </picture>
                </a>
              </li>
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/04.webp srcset=img/footer/04.webp>
                    <img class=lazy data-src=img/footer/04.jpg src=img/footer/04.jpg alt=media>
                  </picture>
                </a>
              </li>
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/05.webp srcset=img/footer/05.webp>
                    <img class=lazy data-src=img/footer/05.jpg src=img/footer/05.jpg alt=media>
                  </picture>
                </a>
              </li>
              <li class=footer_block-instagram_item>
                <a class=link href=https://www.instagram.com/ target=_blank rel="noopener noreferrer">
                  <picture>
                    <source data-srcset=img/footer/06.webp srcset=img/footer/06.webp>
                    <img class=lazy data-src=img/footer/06.jpg src=img/footer/06.jpg alt=media>
                  </picture>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=footer_secondary>
        <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-sm-between">
          <a class=footer_secondary-scroll id=scrollToTop href=#>
            <i class="icon-angle-up icon"></i>
          </a>
          <p class=footer_secondary-copyright>Copyright @ <span id=currentYear></span> Edison by Merkulove </p>
        </div>
      </div>
    </footer>
    <script src=../../unpkg.com/%40lottiefiles/lottie-player%402.0.2/dist/lottie-player.js></script>
    <script src=js/common.min.js></script>
    <script src=js/demo.js></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J2SRB925J5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-J2SRB925J5');
    </script>
  </body>
</html>