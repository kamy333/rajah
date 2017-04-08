<script src="<?php echo $path; ?>js/plugins/blueimp//blueimp-helper.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery-fullscreen.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery-indicator.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery-video.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery-vimeo.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/blueimp-gallery-youtube.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/vendor/jquery.js"></script>
<script src="<?php echo $path; ?>js/plugins/blueimp/jquery.blueimp-gallery.js"></script>
<!--<script src="js/plugins/blueimp/demo.js"></script>-->


<script>

    /*
     * blueimp Gallery Demo JS
     * https://github.com/blueimp/Gallery
     *
     * Copyright 2013, Sebastian Tschan
     * https://blueimp.net
     *
     * Licensed under the MIT license:
     * http://www.opensource.org/licenses/MIT
     */

    /* global blueimp, $ */

    $(function () {
        'use strict';

        // Load demo images from flickr:
        $.ajax({
            // Flickr API is SSL only:
            // https://code.flickr.net/2014/04/30/flickr-api-going-ssl-only-on-june-27th-2014/
            url: 'https://api.flickr.com/services/rest/',
            data: {
                format: 'json',
                method: 'flickr.interestingness.getList',
                api_key: '7617adae70159d09ba78cfec73c13be3' // jshint ignore:line
            },
            dataType: 'jsonp',
            jsonp: 'jsoncallback'
        }).done(function (result) {
            var carouselLinks = [];
            var linksContainer = $('#links');
            var baseUrl;
            // Add the demo images as links with thumbnails to the page:
            $.each(result.photos.photo, function (index, photo) {
                baseUrl = 'https://farm' + photo.farm + '.static.flickr.com/' +
                    photo.server + '/' + photo.id + '_' + photo.secret
                $('<a/>')
                    .append($('<img>').prop('src', baseUrl + '_s.jpg'))
                    .prop('href', baseUrl + '_b.jpg')
                    .prop('title', photo.title)
                    .attr('data-gallery', '')
                    .appendTo(linksContainer);
                carouselLinks.push({
                    href: baseUrl + '_c.jpg',
                    title: photo.title
                })
            });
            // Initialize the Gallery as image carousel:
            blueimp.Gallery(carouselLinks, {
                container: '#blueimp-image-carousel',
                carousel: true
            })
        });

        // Initialize the Gallery as video carousel:
        blueimp.Gallery([
            {
                title: 'Desiree towards Chupah',
                type: 'text/html',
                vimeo: '162192645',
                poster: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/DesireeStairs.jpg'
            },
//            {
//                title: 'Gypsy King 1',
//                type: 'text/html',
//                vimeo: '163138866',
//                poster: 'http://www.ikamy.ch/Inspinia/img/video/GypsyKing1.jpg'
//            },
//
//            {
//                title: 'Gypsy King 2',
//                type: 'text/html',
//                vimeo: '163138825',
//                poster: 'http://www.ikamy.ch/Inspinia/video/img/GypsyKing2.jpg'            },

            {
                title: 'Caroline Feredoun dancing',
//                href: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/CaroDancing.mp4',
//                type: 'video/mp4',
                type: 'text/html',
                vimeo: '162191272',
                poster: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/CaroDancing.jpg'
            },


            {
                title: 'Children gathering',
//                href: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/Children.mp4',
//                type: 'video/mp4',
                type: 'text/html',
                vimeo: '162191966',
                poster: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/Children.jpg'
            },
            {
                title: 'Setareh Daughter dancing  ',
                type: 'text/html',
                vimeo: '162192412',
                poster: 'http://www.ikamy.ch/Inspinia/img/DesireeVideo/SetarehDaughterDancing.jpg'
            }
        ], {
            container: '#blueimp-video-carousel',
            carousel: true
        })
    });


</script>