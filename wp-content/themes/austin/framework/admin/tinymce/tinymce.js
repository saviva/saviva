function init() {
    tinyMCEPopup.resizeToInnerSize();
}

function getshortcodeText(selectedShortcode) {

    var shortcodeText = null;

    /*--------------- 	Content Shortcodes   ------------------- */

    if (selectedShortcode == "segment") {
        shortcodeText = '[segment id="" class="" style="" background_image="http://example.com/x.png" background_color="#eaeaea" parallax_background="true" background_speed="0.5"]<p>Replace with your segment content here</p>[/segment]';
        return shortcodeText;
    }

    if (selectedShortcode == 'heading2') {
        shortcodeText = '[heading2 title="Connect with us on our <strong>blog</strong>" subtitle="From the Blog" button_text="Visit Blog" button_url="#" pitch_text="Lorem ipsum dolor sit amet, consectetuer elit. Aenean leo ligula."]';
        return shortcodeText;
    }

    if (selectedShortcode == 'action_call') {
        shortcodeText = '[action_call text="Ready to get started <strong>on your project?</strong></h3>" button_url="http://themeforest.net/user/LiveMesh" button_text="Purchase Now"]';
        return shortcodeText;
    }

    /*--------------- 	Typography Shortcodes   ------------------- */

    if (selectedShortcode == "pullquote") {
        shortcodeText = '[pullquote align="right"]Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.[/pullquote]';
        return shortcodeText;
    }

    if (selectedShortcode == 'blockquote') {
        shortcodeText = '[blockquote align="right" author="Tom Bodett"]They say a person needs just three things to be truly happy in this world: someone to love, something to do, and something to hope for.[/blockquote]';
        return shortcodeText;
    }

    /*--------------- Custom Post Types ----------------------- */

    if (selectedShortcode == 'pricing') {
        shortcodeText = '[pricing_plans post_count=4 pricing_ids="123,456,789"]';
        return shortcodeText;
    }

    if (selectedShortcode == 'team') {
        shortcodeText = '[team department="marketing,sales"]';
        return shortcodeText;
    }

    if (selectedShortcode == 'team2') {
        shortcodeText = '[team2 department="marketing,sales"]';
        return shortcodeText;
    }

    if (selectedShortcode == 'team-slider') {
        shortcodeText = '[team_slider department="marketing,sales"]';
        return shortcodeText;
    }

    if (selectedShortcode == 'testimonials') {
        shortcodeText = '[responsive_slider type="testimonials2" animation="slide" control_nav="true" direction_nav=false pause_on_hover="true" slideshow_speed=4500][testimonials post_count=3 testimonial_ids="123,456,789"][/responsive_slider]';
        return shortcodeText;
    }

    if (selectedShortcode == 'testimonials2') {
        shortcodeText = '[responsive_slider type="testimonials2" animation="slide" control_nav="true" direction_nav=false pause_on_hover="true" slideshow_speed=4500][testimonials2 post_count=3 testimonial_ids="123,456,789"][/responsive_slider]';
        return shortcodeText;
    }

    /*--------------- 	Column Shortcodes   ------------------- */

    if (selectedShortcode == 'two_columns_template') {
        shortcodeText = '[one_half]<br />Replace with your content<br />[/one_half]<br /><br />[one_half_last]<br />Replace with your content<br />[/one_half_last]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'three_columns_template') {
        shortcodeText = '[one_third]<br />Replace with your content<br />[/one_third]<br /><br />[one_third]<br />Replace with your content<br />[/one_third]<br /><br />[one_third_last]<br />Replace with your content<br />[/one_third_last]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'four_columns_template') {
        shortcodeText = '[one_fourth]<br />Replace with your content<br />[/one_fourth]<br /><br />[one_fourth]<br />Replace with your content<br />[/one_fourth]<br /><br />[one_fourth]<br />Replace with your content<br />[/one_fourth]<br /><br />[one_fourth_last]<br />Replace with your content<br />[/one_fourth_last]<br />';
        return shortcodeText;
    }

    /*--------------- 	Button Shortcodes   ------------------- */
    if (selectedShortcode == 'default_button') {
        shortcodeText = '[button size="small,medium,large" type="rounded" color="black, blue, cyan, green, orange, pink, red, teal, theme, trans" href="http://www." ]Replace with your content[/button]<br />';
        return shortcodeText;
    }

    /* ----------- Lists ---------------- */

    if (selectedShortcode == 'list') {
        shortcodeText = '[list type="list1,list2,....list10"]<li>Item 1...</li><li>Item 2...</li><li>Item 3...</li>[/list]<br />';
        return shortcodeText;
    }

    /* -------------- Divider Shortcodes ------------------ */

    messageShortcodes = new Array("divider", "divider_space", "divider_line", "divider_top", "divider_fancy", "clear");
    if (messageShortcodes.indexOf(selectedShortcode) != -1) {
        shortcodeText = '[' + selectedShortcode + ']<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'header_fancy') {
        shortcodeText = '[header_fancy id="header1" style="margin-bottom: 20px;" title="Smartphone Section"]<br />';
        return shortcodeText;
    }

    /* -------------- Message Shortcodes ------------------ */
    messageShortcodes = new Array("info", "note", "attention", "success", "warning", "tip", "errors");
    if (messageShortcodes.indexOf(selectedShortcode) != -1) {
        shortcodeText = '[' + selectedShortcode + ' title="Optional Title"]Your Message Text[/" + selectedShortcode + "]<br />';
        return shortcodeText;
    }

    /* ----------- Tabs and Accordions ---------------- */
    if (selectedShortcode == 'tabs') {
        shortcodeText = '[tabgroup]<br />[tab title="Tab 1"]Tab 1 content goes here.[/tab]<br />[tab title="Tab 2"]Tab 2 content goes here.[/tab]<br />[tab title="Tab 3"]Tab 3 content goes here.[/tab]<br />[/tabgroup]';
        return shortcodeText;
    }

    if (selectedShortcode == 'toggle') {
        shortcodeText = '[toggle type="first" title="Toggle 1"]Toggle 1 content goes here.[/toggle]<br />[toggle title="Toggle 2"]Toggle 2 content goes here.[/toggle]<br />[toggle title="Toggle 3"]Toggle 3 content goes here.[/toggle]<br />';
        return shortcodeText;
    }

    /* -------------- Posts Shortcodes -------------------------*/
    if (selectedShortcode == 'recent_posts' || selectedShortcode == 'popular_posts') {
        shortcodeText = '[' + selectedShortcode + ' post_count=5 hide_thumbnail="false" show_meta="false" excerpt_count=70 image_size="small"]' + '<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'category_posts') {
        shortcodeText = '[category_posts category_slugs="Slug1,Slug2" post_count=5 hide_thumbnail="false" show_meta="false" excerpt_count=70 image_size="small" ]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'tag_posts') {
        shortcodeText = '[tag_posts tag_slugs="Slug1,Slug2" post_count=5 hide_thumbnail="false" show_meta="false" excerpt_count=70 image_size="small"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'show_custom_post_types') {
        shortcodeText = '[show_custom_post_types post_types="post,portfolio" post_count=5 hide_thumbnail="false" show_meta="false" excerpt_count=70 image_size="small"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'show_post_snippets') {
        shortcodeText = '[show_post_snippets layout_class="rounded-images" post_type="portfolio" number_of_columns=3 post_count=6 image_size="medium" excerpt_count=100 display_title="true" display_summary="true" show_excerpt="true" hide_thumbnail="false"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'show_post_snippets2') {
        shortcodeText = '[show_post_snippets taxonomy="portfolio_category" terms="inspiration,technology" post_type="portfolio" number_of_columns=3 post_count=6 image_size="large"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'show_portfolio') {
        shortcodeText = '[show_portfolio number_of_columns=4 post_count=12 image_size="small" filterable=true no_margin=true]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'show_gallery') {
        shortcodeText = '[show_gallery number_of_columns=4 post_count=12 image_size="small" filterable=true no_margin=false]<br />';
        return shortcodeText;
    }

    /* --------------- Image and Icon Shortcode ------------------------ */

    if (selectedShortcode == 'image') {
        shortcodeText = '[image link="true" title="Visit Mountain Lion Page" src="http://example.com/lion.jpg" alt="Mountain Lion" align="left" image_frame="true" wrapper="true" wrapper_class="image-bordered" size="large"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'icon') {
        shortcodeText = '[icon class="icon-thumbnails" style="font-size:48px;"]<br />';
        return shortcodeText;
    }

    /* --------------- Media Shortcodes ------------------------ */

    if (selectedShortcode == 'html5_video_showcase') {
        shortcodeText = '[video_showcase id="video-intro" class="video-heading" mp4_url="http://example.com/office.mp4" ogg_url="http://example.com/office.ogv" webm_url="http://example.com/office.webm" placeholder_url="http://example.com/about-video-placeholder.jpg" subtitle="Developers and Designers" title="All the tools you need to build a top notch website. " overlay_pattern="http://example.com/patterns/pattern-3.gif" overlay_color="#31110F" overlay_opacity="0.3" loop=true]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'html5_video_section') {
        shortcodeText = '[video_section id="html5-video-bg1" class="video-heading" mp4_url="http://example.com/office.mp4" ogg_url="http://example.com/office.ogv" webm_url="http://example.com/office.webm" placeholder_url="http://example.com/about-video-placeholder.jpg" subtitle="Developers and Designers" text="All the tools you need to build a top notch website. " button_text="Contact Us" button_url="http://example.com/contact-us" overlay_pattern="http://example.com/patterns/pattern-3.gif" overlay_color="#31110F" overlay_opacity="0.3" loop=true]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'youtube_video_showcase') {
        shortcodeText = '[ytp_video_showcase id="video-intro" video_url="http://www.youtube.com/watch?v=RdIh8GiVR9I" containment="self" placeholder_url="http://example.com/ytp-video-placeholder.jpg" subtitle="Developers and Designers" title="All the tools you need to build a top notch website. " overlay_pattern="http://example.com/patterns/pattern-3.gif" overlay_color="#31110F" overlay_opacity="0.3" loop=true]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'youtube_video_section') {
        shortcodeText = '[ytp_video_section id="video-intro" video_url="http://www.youtube.com/watch?v=RdIh8GiVR9I" containment="self" placeholder_url="http://example.com/ytp-video-placeholder.jpg" subtitle="Developers and Designers" text="All the tools you need to build a top notch website. " button_text="Contact Us" button_url="http://example.com/contact-us" overlay_pattern="http://example.com/patterns/pattern-3.gif" overlay_color="#31110F" overlay_opacity="0.3" loop=true]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'html5_audio') {
        shortcodeText = '[html5_audio ogg_url="http://mydomain.com/song.ogg" mp3_url="http://mydomain.com/song.mp3" ]<br />';
        return shortcodeText;
    }

    /* --------------- Stats Shortcodes ------------------------ */

    if (selectedShortcode == 'stats_bar') {
        shortcodeText = '[stats][stats_bar title="Web Design 87%" value="87"][stats_bar title="Logo Design 60%" value="60"][stats_bar title="Brand Marketing 70%" value="70"][/stats]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'piechart') {
        shortcodeText = '[piechart percent=70 title="Repeat Customers"][piechart percent=92 title="Referral Work"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'number_stats') {
        shortcodeText = '[animate-numbers][animate-number icon="icon-lab4" title="Pixels Pushed" start_value="87"]26492[/animate-number][animate-number icon="icon-java" title="Coffees Consumed" start_value="60"]613[/animate-number][animate-number icon="icon-heart11" title="Wide-Grip Pushups" start_value="70"]1277[/animate-number][/animate-numbers]<br />';
        return shortcodeText;
    }

    /* --------------- Social Shortcodes ------------------------ */

    if (selectedShortcode == 'social_list') {
        shortcodeText = '[social_list googleplus_url="http://plus.google.com" facebook_url="http://www.facebook.com" twitter_url="http://www.twitter.com" youtube_url="http://www.youtube.com/" linkedin_url="http://www.linkedin.com" include_rss="true"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'subscribe_rss') {
        shortcodeText = '[subscribe_rss]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'donate') {
        shortcodeText = '[donate title="Please Donate to John Smith Foundation" account="email@example.com" display_card_logos="true" cause="Earthquake Relief"]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'private' || selectedShortcode == 'protected') {
        shortcodeText = '[' + selectedShortcode + ']Your Protected or Private Content here[/" + selectedShortcode + "]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'contact_form') {
        shortcodeText = '[contact_form mail_to="receipient@mydomain.com" phone=true web_url=true subject=true button_color="default"]<br />';
        return shortcodeText;
    }

    /* --------------- Box Shortcodes ------------------------ */

    if (selectedShortcode == 'box_frame') {
        shortcodeText = '[box_frame title="Title for Box" width="Specify width in pixels"]Any HTML content goes here - images, lists, text paragraphs etc.[/box_frame]<br />';
        return shortcodeText;
    }

    /* --------------- Miscellaneous Shortcodes ------------------------ */

    if (selectedShortcode == 'responsive_slider') {
        shortcodeText = '[responsive_slider type="testimonials2" animation="slide" control_nav="true" direction_nav=false pause_on_hover="true" slideshow_speed=4500]<ul><li>Slide 1 content goes here.</li><li>Slide 2 content goes here.</li><li>Slide 3 content goes here.</li></ul>[/responsive_slider]<br />';
        return shortcodeText;
    }

    if (selectedShortcode == 'tab_slider') {
        shortcodeText = '[tab_slider slideshow=false animation=slide direction_nav=false]<ul><li data-name="Slide 1">Slide 1 content goes here.</li><li data-name="Slide 2">Slide 2 content goes here.</li><li data-name="Slide 3">Slide 3 content goes here.</li></ul>[/responsive_slider]';
        return shortcodeText;
    }

    if (selectedShortcode == 'ticker_slider') {
        shortcodeText = '[ticker_slider messages="We are <span>Creative</span>,We create <span>Brands</span>,We Design <span>Stunners</span>,We Build<span> Websites</span>" animation_speed=500 slideshow_speed=5700]<ul><li><img alt="slide1" src="http://mydomain.com/slide1.jpg" width="1920" height="1080" /></li><li><img alt="slide2" src="http://mydomain.com/slide2.jpg" width="1920" height="1080" /></li><li><img alt="slide3" src="http://mydomain.com/slide3.jpg" width="1920" height="1080" /></li></ul>[/responsive_slider]';
        return shortcodeText;
    }

    if (selectedShortcode == 'browser_slider' || selectedShortcode == 'imac_slider' || selectedShortcode == 'macbook_slider' || selectedShortcode == 'ipad_slider' || selectedShortcode == 'iphone_slider' || selectedShortcode == 'htcone_slider' || selectedShortcode == 'galaxys4_slider') {
        shortcodeText = '[' + selectedShortcode + ' image_urls="http://example.com/slide1.jpg,http://example.com/slide2.jpg,http://example.com/slide3.jpg" browser_url="http://portfoliotheme.org/austin" animation="slide" direction_nav=true control_nav=false slideshow_speed=4000 animation_speed=600 pause_on_action=true pause_on_hover=true easing="swing" style="margin-bottom:20px;"]';
        return shortcodeText;
    }

    /* --------------- Miscellaneous Shortcodes ------------------------ */

    // Default if none of the above shortcodes match
    if (!shortcodeText)
        shortcodeText = '[' + selectedShortcode + '] Replace with your content [/' + selectedShortcode + ']';

    return shortcodeText;
}

function shortcodeSubmit() {

    var shortcodeText;

    var mo_shortcode = document.getElementById('shortcode_panel');


    if (mo_shortcode.className.indexOf('current') != -1) {
        mo_shortcode = document.getElementById('shortcode_select').value;

    }

    shortcodeText = getshortcodeText(mo_shortcode);

    if (window.tinyMCE) {
        //TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
        //window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, shortcodeText);
        tinyMCEPopup.editor.execCommand('mceInsertContent', false, shortcodeText);
        //Peforms a clean up of the current editor HTML.
        //tinyMCEPopup.editor.execCommand('mceCleanup');
        //Repaints the editor. Sometimes the browser has graphic glitches.
        tinyMCEPopup.editor.execCommand('mceRepaint');
        tinyMCEPopup.close();
    }

}