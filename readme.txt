The Sandbox
Version 1.6
A theme rich and powerful with dynamic semantic class selectors

    Table of contents
        Introduction
        Installing
        Getting started
        Class functions
            sandbox_body_class()
            sandbox_post_class()
            sandbox_comment_class()
        Other features
            Comments on pages
            Page templates
        Creating a theme template
        Using filters
        Translations
        Web standards
        Microformats
        Credits and thanks
        License

    Introduction

    Sandbox is a lot of things:
        For WordPress 2.5.x
        Beautiful on the inside
        Valid XHTML 1.0 Transitional
        Widgets friendly
        The basis for your GPL-licensed theme

    More importantly, the Sandbox can be a lot of things.

    What began as Scott's leftovers has become an advanced, semantics-based theme. Andy added his innovative semantic class-generating functions and Scott edited it to oblivion.

    So what can you do with the Sandbox?
        You can just use it as-is and have a super-cool, truly minimalist theme.
        You can thoroughly customize it with CSS alone.
        You can use its functions, files, et al, as pleases you.
        You can use it to learn a few things about CSS, XHTML, and PHP.

    The real feature of the Sandbox is its markup. The use of class-generating functions in the body, post div, and comment/trackback li elements create an exceptionally extensible foundation. As Andy said, "Given straightforward markup with plenty of selectors, there isn't much that can't be accomplished with CSS and a decent browser."

    And the implementation of the hAtom and hCard microformats means we're looking forward. You might be able to improve on our markup, but who wants to work that hard?
    Installing

    The Sandbox theme is installed just like any other WordPress theme. To install this theme:
        Download the latest Sandbox release
        Extract the /sandbox/ folder from the archive
        Upload it to the ../wp-contents/themes/ directory
        Activate the theme in the Design submenu
        Enjoy

    You can read more detailed installation instructions on the WordPress Codex.
    Subversion Access

    Developers interested in Subversion access to the Sandbox repository may visit code.google.com/p/sandbox-theme. Please ignore if unfamiliar with Subversion.

    For the latest and possibly unstable version, check out the /trunk/:

    svn checkout http://sandbox-theme.googlecode.com/svn/trunk/

    A legacy version for WordPress 2.0.x is in /branches/0.9/. Otherwise, please check out tagged versions in the /tags/ subdirectory. Tagged versions are stable and the latest release will be for the current stable version of WordPress.
    Getting started

    For beginners getting started, see the example layouts in /sandbox-layouts/. Instructions for using the included layouts can be found in the folder.

    The simplest way to get started with the Sandbox is to jump right in to style.css, using CSS to design the appearence of the Sandbox.

    For help learning CSS, visit:
        CSS Basics.com
        HTML.net's CSS Tutorial
        HTML Dog's CSS Beginner Tutorial
        Stylegala's CSS Reference
        W3's CSS School

    For Sandbox-related resources, including how-tos, Sandbox-based theme templates, and more, visit:
        archGFX
        Internet Duct Tape
        Sandbox Styles at NTU
        plaintxt.org
        Sandbox Designs Competition
        Sandbox Forums

    If you are interested in developing theme templates based on the Sandbox, see Creating theme templates in this document.
    Class functions

    The three semantic class-generating functions used in the Sandbox are charted below, outlining what semantic classes are generated (“Class”), any related WordPress function (“WP Tag”), and the usage of these classes (“Usage”). For more on the WP Tag aspect, read Template Tags and Conditional Tags on the WordPress Codex.
        sandbox_body_class()

        The sandbox_body_class() function is definied in the functions.php file. It has no parameters. It adds semantic classes to the body element relative to the content of the page that is being displayed.

        <body class="<?php sandbox_body_class() ?>">

        The chart below lists the semantic classes added to the body tag by this function.
        sandbox_body_class()
        CSS example
        body.single div.sidebar { display: none; }
        Class 	WP Tag 	Usage
        archive 	is_archive() 	When any archive page is displayed, i.e., applies to category-, date-, and author-based archive pages
        attachment 	is_attachment() 	When the post subpage containing an attachment is displayed, as set with "Linked to Page" in the post editor
        attachmentid-[n] 	is_attachment() 	Displays the ID number of queried attachment page, where [n] is the ID, e.g., attachmentid-20
        attachment-[mime] 	is_attachment() 	For attachment posts (see above), where [mime] is the abbreviated MIME type, e.g., attachment-jpeg
        author 	is_author() 	When a author archive page is displayed
        author-[name] 	is_author() 	When a specific author archive page is displayed, where [name] is the author's login name, e.g., author-admin
        author-paged-[n] 	is_author() & is_paged() 	Displays the "paged" number of author archive, where [n] is the paginated number
        blog 	is_home() 	When the page containing blog posts is displayed
        category 	is_category() 	When a category archive page is displayed
        category-[name] 	is_category() 	For a specific category, where [name] is the category slug, e.g., category-useful-links
        category-paged-[n] 	is_category() & is_paged() 	Displays the "paged" number of category archive, where [n] is the paginated number
        d01–31 	gmdate('d') 	The current day of when the page is displayed (Offset to GMT)
        date 	is_date() 	When a date archive page is displayed, e.g., by month, by year
        date-paged-[n] 	is_date() & is_paged() 	Displays the "paged" number of date-based archive, where [n] is the paginated number
        h00–24 	gmdate('h') 	The current hour of when the page is displayed (Offset to GMT)
        four04 	is_404() 	When a request results in zero posts, i.e., a 404 error page
        home 	is_front_page() 	When the front page is displayed
        m00–12 	gmdate('m') 	The current month of when the page is displayed (Offset to GMT)
        loggedin 	n/a 	When the page is displayed by a logged-in user
        page 	is_page() 	When a page is displayed
        page-author-[name] 	is_page() 	For a page by a specific author, where [name] is the user's login name, e.g., page-author-admin
        page-child 	is_page() 	When the page is a child page to another page
        page-paged-[n] 	is_page() & is_paged() 	Displays the "paged" number of pages, where [n] is the paginated number
        page-parent 	is_page() 	When the page has one or more child pages
        page-template 	is_page() 	When the page is using a page template
        page-template-[name] 	is_page() 	When the page is using a page template, where [name] is the file name of the page template
        paged 	is_paged() 	When whatever is displayed is "paged," e.g., page 2 of the index
        paged-[n] 	is_paged() 	Displays the "paged" number, where [n] is the paginated number, e.g., paged-3 for third page of index
        pageid-[n] 	is_page() 	Displays the page ID number of queried page, where [n] is the ID, e.g., pageid-20
        parent-pageid-[n] 	is_page() 	Displays the page ID of the current page's parent, where [n] is the ID, e.g., parent-pageid-20
        postid-[n] 	is_single() 	Displays the post ID number of queried post, where [n] is the post ID, e.g., postid-20
        search 	is_search() 	When the results of a search are displayed
        single 	is_single() 	When a single post is displayed
        s-author-[name] 	is_single() & is_author() 	For a single post published by a specific author, where [name] is the user's login name, e.g., s-author-admin
        s-category-[name] 	is_single() & is_category() 	For a single post published in a specific category, where [name] is the category slug, e.g., s-category-news
        s-d01–31 	gmdate('d') 	For a single post published on a specific day (Offset to GMT)
        s-h00–24 	gmdate('h') 	For a single post published at a specific hour (Offset to GMT)
        s-m00–12 	gmdate('m') 	For a single post published in a specific month (Offset to GMT)
        s-tag-[name] 	is_single() & is_tag() 	For a single post published with a specific tag, where [name] is the tag slug, e.g., s-category-foo-bar
        s-y2007 	gmdate('Y') 	For a single post published in a specific year (Offset to GMT)
        tag 	is_tag() 	When a tag archive page is displayed
        tag-[name] 	is_tag() 	For a specific tag, where [name] is the tag slug, e.g., tag-foo-bar
        tag-paged-[n] 	is_tag() & is_paged() 	Displays the "paged" number of tag archive, where [n] is the paginated number
        wordpress 	n/a 	When anything is displayed; a class that is always applied
        y2007 	gmdate('Y') 	The current year of when the page is display (Offset to GMT)
        sandbox_post_class()

        The sandbox_post_class() function is definied in the functions.php file. It has no parameters. It adds semantic classes to each post div element, relative to the actual post it contains.

        <div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?>">

        The chart below lists the semantic classes added to each post div element by this function.
        sandbox_post_class()
        CSS example
        div.category-news .entry-title { background: url('images/news.png'); }
        Class 	WP Tag 	Usage
        alt 	n/a 	For odd-numbered posts, e.g., for the 1st, 3rd, 5th posts
        author-[name] 	is_author() 	For any specific author, where [name] is the user's login name, e.g., author-admin
        category-[name] 	is_category() 	For any specific category, where [name] is the category slug, e.g., category-news
        d01–31 	gmdate('d') 	For a post published on a specific day (Offset to GMT)
        draft 	n/a 	For a post saved as a draft, as contrasted with an published post
        h00–24 	gmdate('h') 	For a post published at a specific hour (Offset to GMT)
        hentry 	n/a 	For the hAtom 0.1 specification, applied every post
        m00–12 	gmdate('m') 	For a post published in a specific month (Offset to GMT)
        p[n] 	n/a 	For counting posts relative to the top of the page, where [n] is the number, e.g., p1 for the first post, p2 for the second, p3 for the third
        page 	n/a 	A general class, applied to every page
        post 	n/a 	A general class, applied to every post
        private 	n/a 	For a post that has been saved as private
        protected 	n/a 	For a post protected by a password
        publish 	n/a 	For any published post, as contrasted with an unpublished draft
        tag-[name] 	is_tag() 	For any specific tag, where [name] is the tag slug, e.g., tag-foo-bar
        untagged 	is_tag() 	If there are no tags assigned to the post
        y2007 	gmdate('Y') 	For a post published in a certain year (Offset to GMT)
        sandbox_comment_class()

        The sandbox_comment_class() function is definied in the functions.php file. It has no parameters. It adds semantic classes to the each comment li element (“comment” here meaning comments, trackbacks, and pingbacks).

        <li id="comment-<?php comment_ID(); ?>" class="<?php sandbox_comment_class() ?>">

        The chart below lists the semantic classes added to each comment li element by this function.
        sandbox_comment_class()
        CSS example
        div.comments li.bypostauthor { border: 1px solid red; }
        Class 	WP Tag 	Usage
        alt 	n/a 	For odd-numbered comments, e.g., for the 1st, 3rd, 5th comments
        bypostauthor 	n/a 	When the comment author is also the post author
        byuser 	n/a 	For comments by registered users
        c-h00–24 	gmdate('h') 	For a comment posted at a specific hour (Offset to GMT)
        c[n] 	n/a 	For counting comments relative to the first, where [n] is the number, e.g., c1 for the first comment, c2 for the second, c3 for the third
        c-d01–31 	gmdate('d') 	For a comment posted on a specific date (Offset to GMT)
        c-m00–12 	gmdate('m') 	For a comment posted in a specific month (Offset to GMT)
        c-y2007 	gmdate('Y') 	For a comment posted in a specific year (Offset to GMT)
        comment 	n/a 	A general class, applied to every comment
        comment-author-[name] 	n/a 	For a comment by a specific registered user, where [name] is the user's login name, e.g., comment-author-susan
        p[n] 	n/a 	For counting pingbacks relative to the first, where [n] is the number, e.g., p1 for the first pingback, p2 for the second, p3 for the third
        pingback 	is_pingback() 	When a comment is a pingback
        t[n] 	n/a 	For counting trackbacks relative to the first, where [n] is the number, e.g., t1 for the first trackback, t2 for the second, t3 for the third
        trackback 	is_trackback() 	When a comment is a trackback
    Other features

    In addition to the more advanced, code-related features of the Sandbox, there are at least two other features that make the Sandbox a highly viable choice as a base theme.
        Comments on pages

        Comments are not displayed on pages by default, but are displayed on posts, per the current convention. You can enable comments on a per page basis by adding a custom key/value with only the text comments.

        To enable comments on a page:
            In the Write › Page menu, expand the Custom Fields box
            In the Custom Fields box, add a new key with the exact text comments
            Add any text for a value (some text must be included for the key to save)
            Click Add Custom Field to save the key/value
            Comments should now be enabled on that page

        Enabling comments simply includes the comments.php file with the page. You can turn off comments on a page by deleting the comments key/value. This does not delete any exisiting comments, but simply disables comments.php from loading with the page.
        Page templates

        There are two page templates included: Links Page (links.php) and Archives Page (archives.php). You can add a title, text, and enable comments (see above) with both of these page templates.

        To use the page templates:
            In the Write › Page menu, expand the Page Templates box
            From the drop-down, select the page template to use
            Add a title and text (optional) for the page
            Click Create New Page / Save to publish the page

        The Archive Page template displays archives by month and by category. The Links Page displays links by link category.
    Creating a theme template

    If you are interested in creating a design for public release, consider creating a theme template based on the Sandbox. First read Designing Themes for Public Release on the WordPress Codex and seek support on the WordPress.org Forums.

    A theme template is a WordPress theme that uses the PHP files, e.g., index.php, single.php, in another theme folder but the style.css of the theme template.

    For a collection of excellent theme templates designed for the Sandbox, visit the Sandbox Designs Competition. In 2007, there were 46 designs submitted in the competition. All are examples of theme templates based on the Sandbox.

    Creating a theme template is essentially the same as creating a regular theme for WordPress, except you are not modifying any of the theme files and instead providing an alternate style.css.

    /*
    THEME NAME: My Design
    THEME URI: http://www.example.com/my-design/
    DESCRIPTION: New curtains for an old room
    VERSION: 0.1
    AUTHOR: John Doe
    AUTHOR Uri: http://www.example.com
    TAGS: one column, two columns, three columns, awesome, blue, pink
    TEMPLATE: sandbox
    */

    The line TEMPLATE: sandbox tells WordPress to use the theme files installed in the /sandbox/ folder with the "My Design" style.css style sheet.

    You can read more detailed information about developing WordPress Theme Style Sheets or in Creating Sandbox-based theme templates in the Sandbox Forums.
    Using filters

    Filters allow plugins and theme templates to change the data that the Sandbox returns to the browser without having to alter the theme fiiles. Filters provide a simple, clean way of altering what the Sandbox does without modifying the actual theme files.

    For example, if you wanted to add a link to globalnav page list, you would have to edit the theme files. When you upgrade the theme files (or accidentally break something), you will have to go back and make this change again. By using the globalnav_menu filter, however, you can alter the output of the sandbox_globalnav() without changing a single theme file.

    The chart below lists the filters available in the Sandbox theme.
    Sandbox filters
    Filter examples

    // Sandbox produces 32px avatars -- too small!
    function make_avatars_big() {
    	return '64';
    }
    // Add our function to the filter in Sandbox
    add_filter( 'avatar_size', 'make_avatars_big' );

    Filter 	Reference 	Usage
    avatar_size 	functions.php, 280 	Sets avatar image dimenions in pixels
    body_class 	functions.php, 143 	Adds classes to the body element
    comment_class 	functions.php, 222 	Adds classes to a comment li element
    gallery_img_class 	functions.php, 280 	Adds classes to gallery images
    gallery_img_rel 	functions.php, 334 	Adds rel attributes to gallery images
    globalnav_menu 	functions.php, 23 	Echos list of pages without white space
    post_class 	functions.php, 183 	Adds classes to a post div element

    For more information on using filters, see Plugin API: Filters on the WordPress Codex. The initial discussion about filters in the Sandbox on the Sandbox Forums may be also useful.
    Translations

    The Sandbox allows for complete localization. For detailed information about translating the Sandbox into your language, see Sandbox in your language on the Sandbox wiki.

    If you would like to submit a translation for the Sandbox, please open a new issue on the Sandbox project home. Please include both the PO and MO files. You're also welcome to help edit existing translations.

    Translations have been graciously provided by the following individuals:
        Brazilian Portuguese by Adriano Correia
        Chilean Spanish by Daidaros
        Danish by Carl Andersen
        French by Emile de Weerd
        German by Daniel Netzer and Lars Piechowiak
        Italian by Nokao and Jan Reister
        Japanese by Takayuki Miyoshi
        Norwegian by Kjell Knudsen
        Simplified Chinese by WordPress Chinese Group
        Spanish by Daidaros
    Web standards

    The Sandbox is compliant with both XHTML and CSS standards. What does this mean? An explanation of web standards from The Web Standards Project:

        Complying with web standards can give your web pages greater visibility in web searches. The structural information present in compliant documents makes it easy for search engines to access and evaluate the information in those documents, and they get indexed more accurately.

        Accessibility is an important idea behind many web standards. Not only does this mean allowing the web to be used by people with disabilities, but also allowing web pages to be understood by people using browsers other than the usual ones—including voice browsers that read web pages aloud to people with sight impairments, Braille browsers, hand-held browsers, teletext displays, and other unusual output devices.

    You can read more about developing with web standards at 456 Berea Street.
    Microformats

    Microformats are markup that express semantic information in your blog. People and machines can extract information from webpages marked up in a microformat much like feed readers extract information from Atom or RSS syndicated feeds. Essentially it's about making content more accessible.

    Microformats that have been implemented in the Sandbox theme include (less XFN, which is built into WordPress):
        hAtom: For all blog posts and pages
        hCard: For all post and comment authors
        rel="home": For marking links pointing to the blog home page
        XOXO: For menu, blogroll, archive, and sidebar lists

    Microformats help the Sandbox be an especially POSH WordPress theme. POSH stands for "plain old semantic HTML." It is a term used to refer to best practices of semantic HTML development.

    So the Sandbox can be highly POSH, but the semantic use of HTML elements is completely up to you, the end user. To learn more about semantic HTML, visit Mezzoblue.
    Credits and thanks

    The Sandbox is a collaboration between Andy and Scott.

    Thanks to all those who have provided their assistance, know-how, and generally sound advice on all things Sandbox. You are many. But a special thanks to the follow individuals:
        Adam
        Carolyn
        Engtech
        Lorelle

    Thanks are due to those who helped ensure the success of the Sandbox Designs Competition:
        Bruno Bichet
        Alister Cameron
        Nicole Hernandez
        Alex King
        Matt Mullenweg
        PressHarbor
        Lisa Sabin-Wilson
        Maja Schmidt
        Thomas Silkjær
        Small Potato
        Paul Stamatiou
        Bryan Veloso
        Becca Wei
        Elisabeth Wetsch
        Jonathan Wold
        David Yeiser
    License

    The Sandbox © 2006–2008 is licensed under the GNU General Public License:

        This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

        This program is distributed in the hope that it will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose. See the GNU General Public License for more details.

        You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc, 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

Last updated 18 July 2008