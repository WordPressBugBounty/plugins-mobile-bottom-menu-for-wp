(function ($) {
    'use strict';

    $(document).ready(function () {

        /**
         * Handle Skin Import
         */
        setTimeout(function () {
            // Prevent Codestar default click
            $('.premade_skins').find('.csf--sibling').unbind('click');

            // When clicking on a skin
            $('.premade_skins .csf--image').click(function (event) {
                event.preventDefault();

                var skin = $(this).find('input').val();
                var skinName = $(this).attr('title') || skin;

                // Open modal with options
                showBnavImportModal(skin, skinName);
            });
        }, 1000);

        function showBnavImportModal(skin, skinName) {
            if ($('#bnav-import-modal').length === 0) {
				$('body').append(`
					<div id="bnav-import-modal">
						<div class="bnav-import-modal-content">
							<h2>Import Skin: <span id="bnav-skin-name"></span></h2>
							<p>Choose what to import for the Mobile Menu:</p>
							<button class="bnav-import-btn" data-type="style_only">Import Style Only</button>
							<button class="bnav-import-btn" data-type="full">Import The Full Template</button>
				
							<!-- explanatory text -->
							<div class="bnav-import-info">
								<p><strong>Full Skin imports</strong> the complete menu (items, icons, labels).</p>
								<p><strong>Style Only</strong> applies styling only (colors, spacing); you’ll add the menu items and icons yourself.</p>
							</div>
				
							<button id="bnav-import-close" class="bnav-close-btn">
								<i class="fa fa-times"></i>
							</button>
						</div>
					</div>
				`);
            }

            $('#bnav-skin-name').text(skinName);
            $('#bnav-import-modal').fadeIn();

            // Close modal
            $('#bnav-import-close').off('click').on('click', function () {
                $('#bnav-import-modal').fadeOut();
            });

            // Import buttons
            $('.bnav-import-btn').off('click').on('click', function () {
                var importType = $(this).data('type');
				
				if(importType === 'full') {
					console.log("Hello world full22")
                	if (confirm(wp_bnav_messages.skin_change_confirmation_alert)) {
						$.ajax({
							type: 'POST',
							url: wp_bnav.ajaxurl,
							dataType: 'json',
							data: {
								action: wp_bnav.action,
								nonce: wp_bnav.nonce,
								skin: skin,
							},
							success: function (response) {
								if (response.success && response.data.status === true) {
									// Remove active class from all skins
									$('.premade_skins .csf--image').removeClass('csf--active');
									// Add active class to the selected skin
									$('.premade_skins .csf--image').has('input[value="' + skin + '"]').addClass('csf--active');

									alert(response.data.message);
									window.location.reload();
								} else {
									alert(response.data && response.data.message ? response.data.message : 'Something went wrong.');
								}
							},
							error: function () {
								alert('An error occurred during the import process.');
							}
						});
					}
				}
				
				if(importType === 'style_only') {
					console.log("Hello worldooooo")
					if (confirm(wp_bnav_messages.skin_change_confirmation_alert)) {
						$.ajax({
							type: 'POST',
							url: wp_bnav.ajaxurl,
							dataType: 'json',
							data: {
								action: 'set_premade_skin_style',
								nonce: wp_bnav.nonce,
								skin: skin,
							},
							success: function (response) {
								console.log("Hello world success")
								console.log(response)
								// console.log(response.data.status === 'success')
								if (response && response.status === 'success') {
									// Remove active class from all skins
									$('.premade_skins .csf--image').removeClass('csf--active');
									// Add active class to the selected skin
									$('.premade_skins .csf--image').has('input[value="' + skin + '"]').addClass('csf--active');

									alert(response.message);
									window.location.reload();
								} else {
									alert(response && response.message ? response.message : 'Something went wrong.');
								}
							},
							error: function () {
								alert('An error occurred during the import process.');
							}
						});
					}
				}

                $('#bnav-import-modal').fadeOut();
            });
        }

        /**
         * Handle Plugin Install Button
         */
        $('.wp-bnav-custom-landing-install-btn').on('click', function (e) {
            e.preventDefault();

            let $button = $(this);
            $button.prop('disabled', true);
            $button.find('.wp-bnav-custom-landing-install-btn-txt').text('Installing...');
            let targetUrl = $button.data('target-url');

            $.ajax({
                url: Wp_Bnav_custom_plugin_install_obj.ajax_url,
                type: 'POST',
                data: {
                    action: 'Wp_Bnav_custom_plugin_install',
                    nonce: Wp_Bnav_custom_plugin_install_obj.nonce
                },
                success: function (response) {
                    $button.prop('disabled', false);
                    $button.find('.wp-bnav-custom-landing-install-btn-txt').text('Plugin Activated');
                    setTimeout(function () {
                        window.location.href = targetUrl;
                    }, 1000);
                },
                error: function () {
                    alert('An error occurred during the installation process.');
                    $button.prop('disabled', false);
                    $button.find('.wp-bnav-custom-landing-install-btn-txt').text('Install Ai Alt Text - Free');
                }
            });
        });

    });

})(jQuery);
