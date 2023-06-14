

/**
 * @file
 * Global utilities.
 *
 */


/*
(function ($, Drupal, drupalSettings) {
    console.log('drupalsettings:');
    console.log(drupalSettings.medad_pdf.watermark_type);
    Drupal.behaviors.dar_theme = {
      attach: function (context, settings) {
        // Access the configuration settings from your custom module.
        var customSettings = Drupal.settings.medad_pdf;
  
        // Use the configuration settings in your JavaScript file.
        console.log('Setting 1: ' + customSettings.watermark_type);
       
      }
    };
  })(jQuery, Drupal, drupalSettings);
*/

(function ($, Drupal) {

    

    'use strict';
  
    var alphabets = {
        eng: ['ALL', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
        ar: ['الكل', 'أ', 'ا', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و', 'ي', 'ء']
    };
    var lang = $('html').attr('lang');
    var letter;
    // var GuidesNo;
    if (lang == 'en' || lang == "En") {
        letter = 'Letter';
        // GuidesNo = 'Guides No';
    }
    else if (lang == 'fr' || lang == "FR") {
        letter = 'Lettre';
        // GuidesNo = 'Guides  Nu';
    }
    else {
        letter = 'حرف';
        // GuidesNo = 'إرشاد رقم';
    }
  
    function getAToZLi(alphabets) {
        return alphabets.map(function (e, i) {
            if (i == 0) {
                return '';
            }
            return `<li>
            <a herf="#" data-target='${e}'>${e}</a>
            <div class="help_txt">
                <div class="let d-flex">
                    <span>${letter} </span><span>:</span><span>${e}</span>
                </div>
            </div>
        </li>`;
        }).join('');
    }
  
  
    function getAToZList(lang = 'English') {
        let $container;
  
        let engAtoZ = `<ul class='glosary-links'>
        <li><a herf="#" data-target='all' class="all">${alphabets.eng[0]}</a>
        </li>
        ${getAToZLi(alphabets.eng)}
        </ul>`;
  
        let arAtoZ = `<ul class='glosary-links'>
        <li><a herf="#" data-target='all' class="all">${alphabets.ar[0]}</a>
        </li>
        ${getAToZLi(alphabets.ar)}
        </ul>`;
  
        let engAtoZDir = `<ul class='glosary-links' dir="ltr">
        </li>
        ${getAToZLi(alphabets.eng)}
        </ul>`;
  
        let arAtoZDir = `<ul class='glosary-links' dir='rtl'>
        </li>
        ${getAToZLi(alphabets.ar)}
        </ul>`;
  
        let $addAtoZFilter = jQuery(".add-atoz-filter");
  
  
        if (lang === 'Arabic') {
  
  
            let atoz = getAToZLi(alphabets.ar);
  
            $container = jQuery(`<div class='group-container'><div class="links">
            ${arAtoZ}
            </div></div>`);
  
            if ($addAtoZFilter.length) {
                $container.find(".links").prepend(engAtoZDir);
            }
  
        } else if (lang == 'English') {
  
            $container = jQuery(`<div class='group-container'><div class="links">
            ${engAtoZ}
            </div></div>`);
  
            if ($addAtoZFilter.length) {
                $container.find(".links").append(arAtoZDir);
            }
        }
  
  
        let $containerLinks = $container.find(">.links a");
        $containerLinks.addClass("disabled");
        $containerLinks.on('click', function () {
  
            let $this = jQuery(this);
            if ($this.hasClass("disabled")) {
                return;
            }
            let char = $this.attr("data-target");
            if ($this.hasClass("active")) {
                $container.find(".glosary-group").removeClass("hidden");
                $this.removeClass("active");
            }
            if ($this.hasClass("all")) {
                $container.find(".glosary-group").removeClass("hidden");
                $containerLinks.removeClass("active");
            }
            else {
                //remove from other links
                $containerLinks.removeClass("active");
  
                $container.find(".glosary-group").addClass("hidden");
                $container.find(".glosary-group.group-" + char).removeClass("hidden");
                $this.addClass("active");
            }
        });
  
        return $container;
    }
  
    
  
    $(document).ready(function () {

      var currentUrl = location.href;
 
  
       revertCheckboElts($);
  
        var current_language = drupalSettings.language;
        //home page more link query string alter
        function alterMoreLinkCustom() {
            let $moreLink = jQuery(".more-link-alter .more-link a").filter(function () {
                return this.href.indexOf("dar-search") != -1 && !jQuery(this).hasClass("custom-converted");
            });
            if (!$moreLink.length) {
                return;
            }
  
            let hrefPart = $moreLink.attr("href").split("?");
            let urlParams = new URLSearchParams(hrefPart[1]);
            let content_type = urlParams.get('content_type');
  
            if (!content_type) {
                return;
            }
            let newhref = "";
            if (content_type.trim() === 'All') {
                newhref = hrefPart[0] + "?sort_by=field_edtf_date_created&f%5B0%5D=";
            } else {
                newhref = hrefPart[0] + "?sort_by=field_edtf_date_created&f%5B0%5D=content_type%3A" + content_type;
            }
            $moreLink.attr("href", newhref);
            $moreLink.addClass("custom-converted");
        }
  
        let interval = setInterval(alterMoreLinkCustom, 1000);
        alterMoreLinkCustom();
  
        let $atozDiv = jQuery(".browse-list.add-atoz-filter");
        // console.log($)
  
        // if ($('body').hasClass('path-collection-browse')) {
        if ($atozDiv.length) {
            let $lis = jQuery(".browse-list .item-list>ul>li");
            if ($lis.length) {
                let $container = getAToZList(current_language);
                // console.log("cuurenr ln : " + current_language);
  
                jQuery(".browse-list .item-list").prepend($container);
  
                let count = {};
                $lis.each(function (e) {
                    let $this = jQuery(this);
                    let char = $this.find(".parent-section .parent-title").text().trim()[0];
                    if (!count[char]) {
                        count[char] = 0;
                    }
                    count[char] += 1;
                    let $group = $container.find(".group-" + char);
                    console.log(".group-" + char, $group);
                    if (!$group.length) {
                        // if (char != undefined) { $group = jQuery("<div class='glosary-group group-" + char + "'><h3> " + char + "</h3><h4 class='group-count'>0</h4><ul></ul></div>"); }
                        if (char != undefined) { $group = jQuery("<div class='glosary-group group-" + char + "'><h3> " + char + "</h3><ul></ul></div>"); }
                        $container.append($group);
                    }
                    $group.find("ul").append($this);
                });
  
                for (let k in count) {
                    let c = count[k];
                    if (c > 0) {
                        let $linkItem = $container.find(">.links a[data-target='" + k + "']");
                        $linkItem.removeClass("disabled");
                        $linkItem.text(k)
                    }
                    // jQuery(".group-" + k + " .group-count").text(c + " Result" + (c == 1 ? "" : "s"));
                }
                console.log($('.glosary-links>li>a.all'));
                $('.glosary-links>li>a.all').removeClass('disabled')
  
                ///sum up childs count to parent
                if ((current_language == 'Arabic') && ($('body').hasClass('path-collection-browse'))) {
                    function sumChildCount($childs) {
                        let totalCount = 0;
                        $childs.each(function () {
                            let $this = jQuery(this);
                            let levelup = +$this.attr('data-level') + 1;
                            let $childssub = $this.closest(".parent-section").find(".collection-item-count[data-level=" + levelup + "]");
                            let childCount = 0;
                            if ($childssub.length) {
                                childCount = sumChildCount($childssub);
                            }
                            let count = +$this.attr('data-count').replaceAll(/[^0-9]/g, "") + childCount;
                            totalCount += count;
                            $this.html("(" + count + ")" /*(count == 1 ? " نتيجة " : " نتائج ")*/);
                        });
                        return totalCount;
                    }
                    sumChildCount(jQuery(".collection-item-count[data-level=0]"));
  
                }
                else {
  
                    function sumChildCount($childs) {
                        let totalCount = 0;
                        $childs.each(function () {
                            let $this = jQuery(this);
                            let levelup = +$this.attr('data-level') + 1;
                            let $childssub = $this.closest(".parent-section").find(".collection-item-count[data-level=" + levelup + "]");
                            let childCount = 0;
                            if ($childssub.length) {
                                childCount = sumChildCount($childssub);
                            }
                            let count = +$this.attr('data-count').replaceAll(/[^0-9]/g, "") + childCount;
                            totalCount += count;
                            $this.html('(' + count + ')' /*+ (count == 1 ? "" : "s") */);
                        });
                        return totalCount;
                    }
                    sumChildCount(jQuery(".collection-item-count[data-level=0]"));
                }
  
  
  
                ///endof sum up code
  
                jQuery(".children-section").slideUp().addClass("hidden");
                jQuery(".parent-title").each(function () {
                    let $title = jQuery(this);
                    let $section = $title.closest(".parent-section");
                    let $toggle;
                    let $isRoot = false;
                    //level 0
                    if ($section.hasClass("parent-level-0")) {
                        $isRoot = true;
                        $toggle = jQuery("<div class='tclose title-toggle toggle-root'>+</div>");
                    } else {
                        $toggle = jQuery("<div class='tclose title-toggle toggle-sub'> &gt; </div>");
                    }
                    if ($section.hasClass("parent-level-0") && $section.find('.children-section .views-row').length == 0) {
                        $toggle = jQuery("<div class='title-toggle no-children'></div>");
  
                    }
                    $title.prepend($toggle);
                    $toggle.on('click', function (evt) {
                        let $target = jQuery(this).closest(".parent-section").find(">.children-section");
                        if ($target.hasClass("hidden")) {
                            if ($isRoot) {
  
                                $toggle.text("-").addClass('topen').removeClass('tclose');
                                console.log($toggle.closest('li').addClass('opened'));
                                $toggle.closest('.title').find('.collection-item-count').hide();
                            } else {
  
                                $toggle.html("&lt;").addClass('topen').removeClass('tclose');
                                $toggle.closest('li').addClass('opened');
                                $toggle.closest('.title').find('.collection-item-count').hide();
                            }
  
                            $target.removeClass("hidden");
                            $target.slideDown(500);
                        } else {
                            if ($isRoot) {
                                $toggle.text("+").addClass('tclose').removeClass('topen');
                                $toggle.closest('li').removeClass('opened');
                                $toggle.closest('.title').find('.collection-item-count').show();
                            } else {
                                $toggle.html("&gt;").addClass('tclose').removeClass('topen');
                                $toggle.closest('li').removeClass('opened');
                                $toggle.closest('.title').find('.collection-item-count').show();
                            }
  
                            $target.slideUp(500, function () {
                                $target.addClass("hidden");
                            });
                        }
                    });
                });
            }
  
        }
  
  
    });
  
    Drupal.behaviors.dar = {
        attach: function (context, settings) {
            // // $('.myoverlay').addClass('show');
  
            $(document).ready(function () {
                if ($('.run').length == 0) {
                  //  $('.pagination.js-pager__items li:last.active').closest('.pagination.js-pager__items').find('li:first').css('display', 'none');
  
                    if ($('.view-solr-search-content .view-empty').length > 0) {
                        $('.head.sort,.head.info').hide();
                    }
                    else {
                        $('.head.sort,.head.info').show();
                    }
  
                    var removeAll;
                    var sortBy;
                    // var searchError;
                    var advancedSearch;
                    var currentLang;
                    var loginHead;
                    var registerHead;
                    var loginHeadDesc;
                    var rights;
                    var powerBy;
                    var naseej;
                    var memberIn;
                    var object;
                    var DescriptionData;
                    var identifier;
                    var LibraryClassification;
                    var author;
                    var altTitle;
                    var deweyCategory;
                    var descItem;
  
                    $('body').append('<p class="run"></p>');
                    // // $('.myoverlay').removeClass('show');
                    var lang = $('html').attr('lang');
                    if (lang == 'en' || lang == "En") {
                        currentLang = Drupal.t("en");
                    }
                    else if (lang == 'fr' || lang == "FR") {
                        currentLang = "fr";
                    }
                    else {
                        currentLang = "ar";
                    }
                    removeAll = Drupal.t("Remove ALL");
                    sortBy = Drupal.t("Sort By");
                    // searchError = 'Please Enter text to Search';
                    advancedSearch = Drupal.t('Advanced Search');
                    loginHead = Drupal.t("Welcome Back");
                    registerHead = Drupal.t("Welcome");
                    loginHeadDesc = Drupal.t("Glad to see you!");
                    rights = Drupal.t("© 2021 Medad, All rights reserved.");
                    powerBy = Drupal.t("Powered by");
                    naseej = Drupal.t("Naseej");
                    memberIn = Drupal.t("Memebr In");
                    object = Drupal.t("Object");
                    DescriptionData = Drupal.t("Description Data");
                    identifier = Drupal.t("Identifier");
                    LibraryClassification = Drupal.t("Library of Congress classification");
                    author = Drupal.t("Author");
                    altTitle = Drupal.t("Alternative Title");
                    deweyCategory = Drupal.t("Dewey classification");
                    descItem = Drupal.t("Description");
                    /*
                    removed by mira for newspaper display
                    if ($('[class*="node--view-mode"] .horizontal-tabs-list').length > 0) {
                        $('[class*="node--view-mode"] .horizontal-tabs-list li').eq(0).find('strong').text(object);
                        $('[class*="node--view-mode"] .horizontal-tabs-list li').eq(1).find('strong').text(DescriptionData);
                    }*/
                    if ($('.member_in').length > 0) {
                        $('.member_in .field__label').text(memberIn);
                    }
                    if ($('.identifiey').length > 0) {
                        $('.identifiey .field__label').text(identifier);
                    }
                    if ($('.congrass_category').length > 0) {
                        $('.congrass_category .field__label').text(LibraryClassification);
                    }
                    if ($('.author_item').length > 0) {
                        $('.author_item .field__label').text(author);
                    }
                    if ($('.alt_title_item').length > 0) {
                        $('.alt_title_item .field__label').text(altTitle);
                    }
                    if ($('.dewey_category').length > 0) {
                        $('.dewey_category .field__label').text(deweyCategory);
                    }
                    if ($('.desc-item').length > 0) {
                        $('.desc-item .field__label').text(descItem);
                    }
                    var currentUrl = location.href;
                    //login-form
                    $('details[id*="edit-contact"]').removeAttr('open');
                    // $("[class*='page-user-login'] .main-content").prepend('<div class="login-logo"><a href="/' + currentLang + '" class="logo-link"></a></div>');
                    // $("[class*='page-user-register'] .main-content").prepend('<div class="login-logo"><a href="/' + currentLang + '" class="logo-link"></a></div>');
                    var loginFooter = '<div class="login-footer">';
                    loginFooter += '<p class="rights">';
                    loginFooter += rights + '</p>';
                    loginFooter += '<p class="power"><span>';
                    loginFooter += powerBy;
                    loginFooter += '</span><a href="#" class="naseej">' + naseej + '</a></p>';
  
  
                    function filter() {
                        
                    }
                    setTimeout(() => {
                        $('.loged-user-info .username').on('click', function () {
                            $(this).find('.arrow').toggleClass('open');
                            $('.language-switcher-language-url  .lang-list').slideUp(function () {
                                $('.region-top-header-form .logedin').slideToggle();
                            });
                        });
  
                        $('.language-switcher-language-url .lang-icon').on('click', function () {
                            $(this).find('.arrow-icon').toggleClass('open');
                            if ($('.region-top-header-form .logedin').length > 0)
                                $('.region-top-header-form .logedin').slideUp(function () {
                                    $('.language-switcher-language-url  .lang-list').slideToggle();
                                });
                            else
                                $('.language-switcher-language-url  .lang-list').slideToggle();
  
                        });
  
                      $(".dropdown").on("click", ".dropdown-toggle", function(e) {
                          e.preventDefault();
                          // $('ul.dropdown-menu').slideToggle('slow');
                          $(this).parent().addClass("show");
                          $(this).attr("aria-expanded", "true");
                          $(this).next().addClass("show");
                      });
  
                        if ($('.loged-name .username').length > 0) {
                            var name = $('.loged-name .username').text().trim();
                            if (name.length > 20) {
                                var newName = name.subString(0, 20) + '...';
                                $('.loged-name .username').text(newName);
                            }
                        }
                        $('.facets-widget-checkbox h3').append('<span></span>');
                        $(document).on('click', '.facets-widget-checkbox h3 span', function () {
                            $(this).toggleClass('closed');
                            $(this).closest('h3').toggleClass('hide');
                            $(this).closest('.facets-widget-checkbox').find('ul').slideToggle();
                        });
  
                        $('.facets-widget-range_slider h3').append('<span></span>');
                        $(document).on('click', '.facets-widget-range_slider h3 span', function () {
                            $(this).toggleClass('closed');
                            $(this).closest('h3').toggleClass('hide');
                            $(this).closest('.facets-widget-range_slider').find('ul').slideToggle();
                        });
  
                        $('.search-page .result .count').text(parseInt($('.search-page .view-header').text()) > 0 ? $('.search-page .view-header').text() : 0);
                        var InitaialsortInput = $('.views-exposed-form[class*="block-views-exposed-filter-blockdar-search-page"] form .js-form-type-select');
                        InitaialsortInput.find('option').removeAttr('selected');
                        var uri = window.location.toString();
  
  
                        var sortedByCopy = InitaialsortInput.find('select').clone();
  
                        $('.search-page .content-head .sorted-by').append(sortedByCopy);
                        sortedByCopy.on('change', function () {
                            if ($('.daradvance-search-form').hasClass('d-none')) {
                                InitaialsortInput.find('select').val(sortedByCopy.val());
                                $('.views-exposed-form[class*="block-views-exposed-filter-blockdar-search-page"] form').submit();
                            }
                            else {
                                $('.daradvance-search-form form .js-form-item-sort-by').find('select').val(sortedByCopy.val());
                                $('.daradvance-search-form form').submit();
                            }
  
                        })
                        const urlParams = new URLSearchParams(window.location.search);
  
                        
                        //i removed the removeFact mira to see if neede
                        function removeFact() {
                          
                        }
  
                        $(document).on('click', '.filter-items .filter-item .remove', function () {
                            var removeValue = $(this).closest('.filter-item').children('.txt').text();
                            // var index = $(this).closest('.filter-item').children('.facetIndex').val();
                            uncheckInput(removeValue);
                            $(this).closest('.filter-item').remove();
                            // $('.myoverlay').addClass('show');
                            $('.filter .all-items').slideUp();
                            $('.view-all').prop('disabled', true);
                            // var remindFilters = $('.facet-item input.facets-checkbox:checked').closest('.facet-item').children('label').children('.facet-item__value');
                        });
                        $(document).on('click', '.filter-items .remove-all', function () {
                            // $('.myoverlay').addClass('show');
                            removeFact();
                        });
  
                        $(document).on('click', '.filter .view-all', function () {
                            $('.filter-items .filter .items').html('');
                            filter();
                            // $('.myoverlay').addClass('show');
                            $('.all-items').slideDown();
                        });
                        $(document).on('click', '.overlay.show,.all-items  h1 .close', function () {
                          //  $('.myoverlay.show').removeClass('show');
                            $('.filter .all-items').slideUp();
                        });
  
  
                        function getPosition(string, subString, index) {
                            return string.split(subString, index).join(subString).length;
  
                        }
                        function uncheckInput(value) {
                            var filters = $('.facet-item input.facets-checkbox:checked').closest('.facet-item').children('label').children('.facet-item__value');
                            for (let index = 0; index < filters.length; index++) {
                                var filterItem = $(filters[index]);
                                if (filterItem.text() == value) {
                                    filterItem.closest('.facet-item').children('input.facets-checkbox').prop('checked', false);
                                    var newURL = filterItem.closest('.facet-item').children('a').attr('href');
                                    window.location.href = newURL;
                                }
  
                            }
                        }
                        //end-filter
  
                    }, 500);
  
                    function checkGridList() {
                        // $('.myoverlay').addClass('show');
                        if (sessionStorage.getItem("searchview") != 'undefined' && document.getElementById("grid-list") != null) {
                            if (sessionStorage.getItem("searchview") == 'list') {
                                $('.search-results__content').addClass('list');
                                $('.grid-list .grid').removeClass('active');
                                $('.grid-list .list').addClass('active');
                            } else {
                                $('.search-results__content').removeClass('list');
                                $('.grid-list .grid').addClass('active');
                                $('.grid-list .list').removeClass('active');
                            }
                        }
  
                        // added new for gridlist ddl by mira
                        //ADDED NEWLY END OF PI 2023
                        if (sessionStorage.getItem("searchview") != 'undefined' && document.getElementById("grid-list-ddl") != null) {
                            if (sessionStorage.getItem("searchview") == 'list-ddl') {
                                $('.search-results__content').addClass('list');
                                $('.grid-list-ddl .grid-ddl').removeClass('active');
                                $('.grid-list-ddl .list-ddl').addClass('active');
                                $('#grid-list-ddl').val('list-ddl');
                            } else if (sessionStorage.getItem("searchview") == 'grid-ddl') {
                                $('.search-results__content').removeClass('list');
                                $('.grid-list-ddl .grid-ddl').addClass('active');
                                $('.grid-list-ddl .list-ddl').removeClass('active');
                                $('#grid-list-ddl').val('grid-ddl');
                            }
                        }
  
                    }
                    if ($(window).width() > 768) {
                        checkGridList();
                    }
                    else {
                        $('.search-results__content').removeClass('list');
                        $('.grid-list .grid').addClass('active');
                        $('.grid-list .list').removeClass('active');
  
                        //added new for gridlist ddl added new by mira
                        //ADDED NEWLY END OF PI 2023
                        $('.grid-list-ddl .grid-ddl').addClass('active');
                        $('.grid-list-ddl .list-ddl').removeClass('active');
                    }
  
                    $(document).on('click', '.grid-list', function (e) {
                        var closeDiv = $(e.target).closest('div');
                        closeDiv.addClass('active');
                        if (closeDiv.hasClass('list')) {
                            $('.grid-list .grid').removeClass('active');
                            $('.search-results__content').addClass('list');
                            sessionStorage.setItem("searchview", "list");
                        }
                        else {
                            $('.grid-list .list').removeClass('active');
                            $('.search-results__content').removeClass('list');
                            sessionStorage.setItem("searchview", "grid");
                        }
                    });
  
                    //for dropdown grid-list view in search page
                    //newly added by mira
                    //ADDED NEWLY END OF PI 2023
                    $(document).ready(function() {
                      $('.grid-list-ddl').change(function() {
                          if (this.value == 'list-ddl') {
                              $('.grid-list-ddl .grid-ddl').removeClass('active');
                              $('.grid-list-ddl .list-ddl').addClass('active');
                              $('.search-results__content').addClass('list');
                              $('.search-results__content').removeClass('grid');
                              sessionStorage.setItem("searchview", "list-ddl");
                          }
                          else if (this.value == 'grid-ddl') {
                              $('.grid-list-ddl .list-ddl').removeClass('active');
                              $('.grid-list-ddl .grid-ddl').addClass('active');
                              $('.search-results__content').addClass('grid');
                              $('.search-results__content').removeClass('list');
                              sessionStorage.setItem("searchview", "grid-ddl");
                          }
                      });

                        //search page actions dropdownlist
                        $('#search-page-actions').change(function() {
                            if(this.value == 'export-to-csv-action'){
                                $("button[data-drupal-selector=edit-20]").trigger('click');
                            }else if(this.value == 'save-search-action'){
                                $(".saved-search button[data-drupal-selector=edit-submit]").mousedown();
                            }
                        });

                        //when click select all
                        $('#search_page_actions_select_all').change(function() {
                            if($(this).is(":checked")){
                                //$("#edit-select-all").prop("checked", true);
                                $(".search-results__content .form-checkbox").each(function(){$(this).prop('checked', true);})
                                $("button[data-drupal-selector=edit-20]").removeAttr("disabled");
                            }else{
                                //$("#edit-select-all").prop("checked", false);  
                                $(".search-results__content .form-checkbox").each(function(){$(this).prop('checked', false);})
                            }

                            enable_disable_export_search_page();
                            //set to none when action is clicked
                            $('#search_page_actions_select_all').val('none');
                        });

                        // onclick of checkbox for actions check if allow or disallow the export button
                        $('.search-results__content input[type=checkbox]').click(function(){
                            enable_disable_export_search_page();
                        });
                    });
                    //check if enable or disable export to csv button newly added
                    function enable_disable_export_search_page(){
                        if($(".search-results__content input:checkbox:checked").length == 0){
                            $("#search-page-actions option[value='export-to-csv-action']").attr("disabled","disabled");
                        }else{
                            $("#search-page-actions option[value='export-to-csv-action']").removeAttr("disabled");
                        }
                    }
                    //FINISHED ADDED NEWLY END OF PI 2023

                    
                  
  
                    $(document).on('click', '.facets-soft-limit-link', function () {
                        $(this).closest('.facets-widget-checkbox').addClass('fixed');
                        $(this).closest('.facets-widget-range_slider').addClass('fixed');
                        $('.overlay').show();
                    });
                    $(document).on('click', '.page-item', function () {
                        // $('.myoverlay').addClass('show');
                        $(document).once('weberAjaxViews').ajaxComplete(function (event, xhr, settings) {
                            if ($(window).width() > 768) {
                                checkGridList();
                            }
                            else {
                                $('.search-results__content').removeClass('list');
                                $('.grid-list .grid').addClass('active');
                                $('.grid-list .list').removeClass('active');
                            }
  
                            // $('.myoverlay').removeClass('show');
  
                        });
                    });
  
                    $(document).on('click', '.facet-item', function () {
                        // $('.myoverlay').addClass('show');
                        $(document).once('weberAjaxViews').ajaxComplete(function (event, xhr, settings) {
                            if ($('.facets-widget-checkbox h3 span').length == 0)
                                $('.facets-widget-checkbox h3').append('<span></span>');
                            if ($('.facets-widget-range_slider h3 span').length == 0)
                                $('.facets-widget-range_slider h3').append('<span></span>');
                            if ($('.search-results__results .view-empty').length > 0) {
                                $('.head.sort,.head.info').hide();
                            }
                            else {
                                $('.head.sort,.head.info').show();
                            }
                            if ($(window).width() > 768) {
                                checkGridList();
                            }
                            else {
                                $('.search-results__content').removeClass('list');
                                $('.grid-list .grid').addClass('active');
                                $('.grid-list .list').removeClass('active');
                                $('.cont .facets .close').trigger('click');
                            }
                            $('.search-page .result .count').text(parseInt($('.search-page .view-header').text()) > 0 ? $('.search-page .view-header').text() : 0);
                            setTimeout(() => {
                                filter();
                            }, 1000);
                            // $('.myoverlay').removeClass('show');
  
                        });
  
                    });
                    $('.burger-icon').on('click', function () {
                        $(this).toggleClass('open');
                        $('nav#navbar-top .region-top-header .menu--main').toggleClass('open');
                        $('.overlay').slideToggle();
                        $('body').toggleClass('hide-overflow');
                    });
                    $(document).on('click', '.filter-small', function () {
                        $('.cont .facets').slideDown().addClass('d-flex');
                        $('body').css('overflow', 'hidden');
                    })
                    // test
                    $(document).on('click', '#block-solrsearchcontentadvancedsearchforglobalsearch #edit-submit', function () {
                      //$('.cont .facets').slideDown().addClass('d-flex');
                      //$('body').css('overflow', 'hidden');
                      console.log("Button advanced clicked!" + window.location);
                      // window.location.reload();
                      //$("#block-solrsearchcontentadvancedsearchforglobalsearch form").submit();
                    })
                    $(document).on('click', '.cont .facets .close', function () {
                        $('.cont .facets').slideUp().removeClass('d-flex');;
                        $('body').css('overflow', 'auto');
                    })
                    var windowWidth = $(window).width();
  
                    var header = $("#header.header #navbar-top");
                    var animte = false;
  
                    $(window).scroll(function () {
                        if ($(window).scrollTop() >= 100 && windowWidth > 992) {
                            header.addClass("fixed");
  
                            if (!animte) {
                                header.slideDown(1000);
                                animte = true
                            }
                        } else {
                            animte = false;
                            header.removeClass("fixed");
                        }
  
                    });
  
                    var scrollToTop = $(".scroll-to-top");
                    $(window).on("scroll", function () {
                        if ($(window).scrollTop() >= 200) {
                            if (!scrollToTop.is(":visible")) {
                                scrollToTop.css('display', 'inline-block');
                            }
                        } else {
                            if (scrollToTop.is(":visible")) {
                                scrollToTop.css('display', 'none');
                            }
                        }
                    });
                    $('.scroll-to-top').click(function () {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                    $(window).on('resize', function () {
                        var win = $(this);
                        if (win.width() > 768) {
                            checkGridList();
                        }
                        else {
                            $('.search-results__content').removeClass('list');
                            $('.grid-list .grid').addClass('active');
                            $('.grid-list .list').removeClass('active');
                        }
                        // $('.myoverlay').removeClass('show');
  
                    });
  
                    $('.page-view-solr-search-content .views-exposed-form form .form-submit').click(function (e) {
                        $(document).once('weberAjaxViews').ajaxComplete(function (event, xhr, settings) {
                            if ($('.facets-widget-checkbox  h3 span').length == 0)
                                $('.facets-widget-checkbox  h3').append('<span></span>');
                          if ($('.facets-widget-range_slider  h3 span').length == 0)
                              $('.facets-widget-range_slider  h3').append('<span></span>');
                               
                            if ($('.search-results__results .view-empty').length > 0) {
                                $('.head.sort,.head.info').hide();
                            }
                            else {
                                $('.head.sort,.head.info').show();
                            }
                            if ($(window).width() > 768) {
                                checkGridList();
                            }
                            else {
                                $('.search-results__content').removeClass('list');
                                $('.grid-list .grid').addClass('active');
                                $('.grid-list .list').removeClass('active');
                                $('.cont .facets .close').trigger('click');
                            }
                            $('.search-page .result .count').text(parseInt($('.search-page .view-header').text()) > 0 ? $('.search-page .view-header').text() : 0);
                            setTimeout(() => {
                                filter();
                            }, 1000);
                            // $('.myoverlay').removeClass('show');
  
                        });
                    })
                    if ($('.pdf-lang').length > 0) {
                        var pdfLang = ($('.pdf-lang .js-form-item').text().trim().split('\n')[1].trim() + '').toLowerCase().substring(0, 2);
                        $('iframe').closest('details').css('width', '90%')
                        setTimeout(() => {
                            if (pdfLang == 'ar') {
                                $("iframe").contents().find("html").attr('dir', 'rtl')
                            }
                        }, 5000);
                    }
                }
            });
            window.addEventListener("load", function () {
                if ($('.loaded-indecator').length == 0) {
                    $('body').append('<p class="loaded-indecator"></p>');
                    // $('.myoverlay').removeClass('show');
                    ////////////////////// home-page-setions /////////////////////
                    $('.homePage-section').closest('.views-element-container').addClass('homePage-partion')
                }
                ////////////////////// end-home-page-setions /////////////////
            });
        }
    };
  
  $(document).on('click', '.facets-btn-filter-sm', function () {
      $('.search-page .facets').slideDown().addClass('d-flex');
      $('body').css('overflow', 'hidden');
  })
  $(document).on('click', '.filter-close-btn-sm', function () {
      $('.search-page .facets').slideUp().removeClass('d-flex');;
      $('body').css('overflow', 'auto');
  })
  $(document).ready(function() {
      if($('.block-facet--checkbox .facets-checkbox:checkbox:checked').length > 0)
      {
      //    $(this).closest("li.facet-item").hide()
      }
      
  });
  
      //solve toltip issue for range slider 
      /*$('#date_issued_slider').on('slidechange', function(event, ui) {
          $(".ui-slider-tip:first ").text(ui.values[0]);
      });*/
  


    //click the download button of pdfjs 19-5-2023 mira
    document.addEventListener('DOMContentLoaded', function() {
        // Get the iframe element using the class name
        var iframe = document.querySelector('.pdf');
        if (typeof iframe !== 'undefined' && iframe !== null) {
            var iframeWindow = iframe.contentWindow;

            // Handle click event on the pdfjs-downloadbutton
            var pdfjsDownloadButton = document.getElementById('pdfjs-downloadbutton');
            if (typeof pdfjsDownloadButton !== 'undefined' && pdfjsDownloadButton !== null) {
                pdfjsDownloadButton.addEventListener('click', function() {
                    showCustomConfirmForPDFjs(Drupal.t('Some items may be under copyright. You are responsible for checking Use and Reproduction terms listed for thie item (below). By downloading, you agree to the Terms of Use.'), Drupal.t('Agree')).then((result) => {
                        if (result) {
                            // Access the button inside the iframe and click it
                            var buttonInsideIframe = iframeWindow.document.getElementById('download');
                            buttonInsideIframe.click();
                        }
                    });

                    
                });
            }
        }
    });

        function showCustomConfirmForPDFjs(message, okLabel = 'OK') {
            const dialog = document.createElement('div');
            dialog.classList.add('modal');
            dialog.classList.add('fade');

            dialog.id = 'pdfjs-downloadButton-target';
            
            const dialog1 = document.createElement('div');
            dialog1.classList.add('modal-dialog');
            dialog1.classList.add('modal-dialog-centered');
            dialog.appendChild(dialog1);

            const dialog2 = document.createElement('div');
            dialog2.classList.add('modal-content');
            
            dialog1.appendChild(dialog2);
            const dialog3_1 = document.createElement('div');
            dialog3_1.classList.add('modal-header');

            const dialog3_1_0 = document.createElement('h5');
            dialog3_1_0.classList.add('modal-title');
            dialog3_1_0.textContent = Drupal.t('Download');
            dialog3_1.appendChild(dialog3_1_0);


            const dialog3_1_1 = document.createElement('button');
            dialog3_1_1.classList.add('close');
            dialog3_1_1.setAttribute("data-dismiss","modal");
            dialog3_1_1.setAttribute("aria-label","Close");
            dialog3_1.appendChild(dialog3_1_1);

            const dialog3_1_1_1 = document.createElement('span');
            dialog3_1_1_1.classList.add('close');
            dialog3_1_1_1.id = 'close-download-pdfjs';
            dialog3_1_1_1.setAttribute("aria-hidden","true");
            dialog3_1_1.appendChild(dialog3_1_1_1);


            const messageElement_1 = document.createElement('p');
            messageElement_1.textContent = 'x';
            dialog3_1_1.appendChild(messageElement_1);
            

            dialog2.appendChild(dialog3_1);

            const dialog3_2 = document.createElement('div');
            dialog3_2.classList.add('modal-body');
            
            dialog2.appendChild(dialog3_2);
            
            const messageElement = document.createElement('p');
            messageElement.textContent = message;
            dialog3_2.appendChild(messageElement);
            
            const okButton = document.createElement('button');
            okButton.textContent = okLabel;
            okButton.classList.add('btn-primary');
            okButton.classList.add('btn');

            dialog3_2.appendChild(okButton);

            
            $( dialog ).appendTo( ".media-info" );


        
            return new Promise((resolve) => {
            const handleButtonClick = (result) => {
                okButton.removeEventListener('click', handleOKClick);
                resolve(result);
            };
        
            const handleOKClick = () => {
                handleButtonClick(true);
                var closedownloadpdfjs = document.getElementById('close-download-pdfjs');
                closedownloadpdfjs.click();
                document.body.removeChild(dialog);
            };
        
            /*const handleCancelClick = () => {
                handleButtonClick(false);
            };*/
        
            okButton.addEventListener('click', handleOKClick);
            //cancelButton.addEventListener('click', handleCancelClick);
            });
        }
 
    })(jQuery, Drupal);
/*  
  function appendToDownloadpdfjs(content) {
    //Drupal.theme.ajaxProgressThrobber(Drupal.t('Message'))
    console.log('reached appendToDownloadpdfjs');
    var parentDiv = document.getElementById('pdfjs-downloadbutton');
    parentDiv.innerHTML += content;
  }
  */

  ////// Style functions functions ///////////////
  
  function revertCheckboElts($){
      var list = $('.page-view-flag-bookmark .custom-switch');
      list.map( function()  {
          var listItems = $(this).children();
          $(this).append(listItems.get().reverse());
      })
  }
  
  
