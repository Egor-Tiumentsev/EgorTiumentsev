<div class="<?php peregrine_print_archive_entry_class("h-column h-column-container d-flex  masonry-item style-108-outer style-local-1845-m4-outer");?>" data-masonry-width="<?php peregrine_print_masonry_col_class(true); ?>">
  <div data-colibri-id="1845-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-108 style-local-1845-m4 h-overflow-hidden position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-colibri-id="1845-m5" class="h-row-container gutters-row-lg-0 gutters-row-md-3 gutters-row-3 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-110 style-local-1845-m5 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-3 gutters-col-3 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-336-outer style-local-1845-m6-outer">
            <div data-colibri-id="1845-m6" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-336 style-local-1845-m6 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                <div data-href="<?php the_permalink(); ?>" data-colibri-component="link" data-colibri-id="1845-m7" class="colibri-post-thumbnail <?php peregrine_post_thumbnail_classes(); ?> <?php peregrine_post_thumb_placeholder_classes(); ?> style-109 style-local-1845-m7 h-overflow-hidden position-relative h-element">
                  <div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-1845-m7-height">
                    <?php peregrine_post_thumbnail(array (
                      'link' => true,
                    )); ?>
                  </div>
                  <div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
                    <div class="w-100 h-y-container"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-111-outer style-local-1845-m8-outer">
            <div data-colibri-id="1845-m8" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-0 v-inner-lg-3 v-inner-md-3 v-inner-3 style-111 style-local-1845-m8 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
                <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
                <div data-colibri-id="1845-m9" class="h-blog-meta style-356 style-local-1845-m9 position-relative h-element">
                  <div name="1" class="metadata-item">
                    <span class="metadata-prefix">
                      <?php esc_html_e('by','peregrine'); ?>
                    </span>
                    <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>">
                      <?php echo esc_html(get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) )); ?>
                    </a>
                  </div>
                </div>
                <?php endif; ?>
                <div data-colibri-id="1845-m10" class="h-blog-title style-114 style-local-1845-m10 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php peregrine_post_title(array (
                      'heading_type' => 'h4',
                      'classes' => 'colibri-word-wrap',
                    )); ?>
                  </div>
                </div>
                <div data-colibri-id="1845-m11" class="style-115 style-local-1845-m11 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php peregrine_post_excerpt(array (
                      'max_length' => 13,
                    )); ?>
                  </div>
                </div>
                <div data-colibri-id="1845-m12" class="style-343 style-local-1845-m12 position-relative h-element"></div>
                <div data-colibri-id="1845-m13" class="h-x-container style-120 style-local-1845-m13 position-relative h-element">
                  <div class="h-x-container-inner style-dynamic-1845-m13-group">
                    <span class="h-button__outer style-121-outer style-local-1845-m14-outer d-inline-flex h-element">
                      <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1845-m14" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-121 style-local-1845-m14 position-relative">
                        <span>
                          <?php esc_html_e('read more','peregrine'); ?>
                        </span>
                        <span class="h-svg-icon h-button__icon style-121-icon style-local-1845-m14-icon">
                          <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="arrow-right" viewBox="0 0 512 545.5">
                            <path d="M299.5 140.5l136 136 11 11.5-11 11.5-136 136-23-23L385 304H64v-32h321L276.5 163.5z"></path>
                          </svg>
                        </span>
                      </a>
                    </span>
                  </div>
                </div>
                <div data-colibri-id="1845-m15" class="h-blog-meta style-357 style-local-1845-m15 position-relative h-element">
                  <div name="2" class="metadata-item">
                    <a href="<?php peregrine_post_meta_date_url(); ?>">
                      <span class="h-svg-icon">
                        <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="calendar" viewBox="0 0 512 545.5">
                          <path d="M144 96h32v16h160V96h32v16h64v352H80V112h64V96zm-32 48v32h288v-32h-32v16h-32v-16H176v16h-32v-16h-32zm0 64v224h288V208H112zm96 32h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32z"></path>
                        </svg>
                      </span>
                      <?php peregrine_the_date('F j, Y'); ?>
                    </a>
                    <span class="meta-separator">
                      <?php esc_html_e('&#x25AA;','peregrine'); ?>
                    </span>
                  </div>
                  <div name="4" class="metadata-item">
                    <a href="<?php comments_link(); ?>">
                      <span class="h-svg-icon">
                        <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="comments" viewBox="0 0 512 545.5">
                          <path d="M32 112h320v256H197.5L122 428.5l-26 21V368H32V112zm32 32v192h64v46.5l54-43 4.5-3.5H320V144H64zm320 32h96v256h-64v81.5L314.5 432h-149l40-32h120l58.5 46.5V400h64V208h-64v-32z"></path>
                        </svg>
                      </span>
                      <?php echo esc_html(get_comments_number()); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
