    </main>


    <footer>
        <div class="red-stripe"></div>
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-3 col-lg-2">
                            <!--logo dinamico mono-->
                            <div class="footer-logo">
                                <?php if(get_theme_mod("NC_logo_footer")) { ?>
                                    <a class="footer-logo-img" href="<?php echo esc_url_raw(home_url()); ?>">
                                        <img src="<?php echo get_theme_mod("NC_logo_footer"); ?>" alt="Logo <?php bloginfo('name'); ?>">
                                    </a>
                                <?php } else { ?>
                                    <a class="footer-logo-txt" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo("name"); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-auto col-legal-info">
                            <!--legal info-->
                            <p>Preben’s Norwegian Community</p>
                            <p>Phone: <a href="tel:<?php echo get_theme_mod("NC_contatti_telefono"); ?>" target="_blank" aria-label="Link opens in a new tab"><?php echo get_theme_mod("NC_contatti_telefono"); ?></a></p>
                            <p>Email: <a href="mailto:<?php echo get_theme_mod("NC_contatti_email"); ?>" target="_blank" aria-label="Link opens in a new tab"><?php echo get_theme_mod("NC_contatti_email"); ?></a></p>
                            <p>Office: <?php echo get_theme_mod("NC_contatti_indirizzo"); ?></p>
                            <p>VAT number: <?php echo get_theme_mod("NC_contatti_piva"); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-9 offset-sm-3 col-lg-3 offset-lg-0 col-social-privacy">
                    <div class="row">
                        <div class="col-4">
                            <!--Facebook-->
                            <a class="social-icon-link" href="<?php echo get_theme_mod("NC_social_facebook"); ?>" target="_blank" aria-label="Link opens in a new tab">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation">
                                    <circle cx="28" cy="28" r="22.75" fill="white"/>
                                    <path d="M24.3807 20.2767V23.7459H21.8363V27.9997H24.3807V40.6097H29.6096V27.9997H33.1124C33.1124 27.9997 33.4431 25.9596 33.6 23.7347H29.6265V20.826C29.6742 20.5564 29.8103 20.3105 30.0132 20.1268C30.2161 19.9432 30.4744 19.8322 30.7473 19.8116H33.5944V15.3896H29.7329C24.2518 15.3896 24.3807 19.6378 24.3807 20.2767Z" fill="#002868"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4">
                            <!--Instagram-->
                            <a class="social-icon-link" href="<?php echo get_theme_mod("NC_social_instagram"); ?>" target="_blank" aria-label="Link opens in a new tab">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation">
                                    <circle cx="28" cy="28" r="22.75" fill="white"/>
                                    <path d="M27.6705 18.8619C30.756 18.8619 31.1263 18.8619 32.3451 18.9288C33.079 18.936 33.8062 19.0699 34.4946 19.3248C34.9978 19.5115 35.4529 19.8085 35.8265 20.1938C36.2118 20.5665 36.5072 21.022 36.6904 21.5257C36.9472 22.2119 37.083 22.9375 37.0916 23.6702C37.1481 24.8941 37.1584 25.2592 37.1584 28.3498C37.1584 31.4404 37.1584 31.8004 37.0916 33.0243C37.083 33.7569 36.9472 34.4825 36.6904 35.1687C36.5002 35.669 36.2062 36.1234 35.8277 36.5019C35.4493 36.8803 34.9949 37.1744 34.4946 37.3646C33.8084 37.6214 33.0828 37.7571 32.3502 37.7657C31.1263 37.8222 30.7612 37.8325 27.6705 37.8325C24.5799 37.8325 24.2148 37.8325 22.996 37.7657C22.2618 37.7563 21.5347 37.6206 20.8465 37.3646C20.3433 37.1802 19.8881 36.885 19.5146 36.5006C19.132 36.1257 18.837 35.6709 18.6506 35.1687C18.3958 34.4804 18.2619 33.7532 18.2547 33.0192C18.1981 31.8004 18.1827 31.4301 18.1827 28.3447C18.1827 25.2592 18.1827 24.8889 18.2547 23.6702C18.2631 22.9363 18.397 22.2093 18.6506 21.5206C18.837 21.0184 19.132 20.5636 19.5146 20.1887C19.8881 19.8044 20.3433 19.5091 20.8465 19.3248C21.5347 19.0687 22.2618 18.933 22.996 18.9236C24.2148 18.8722 24.5851 18.8568 27.6705 18.8568V18.8619ZM27.6705 16.7998C24.5285 16.7998 24.1377 16.7998 22.9035 16.8718C21.9434 16.8823 20.9922 17.0562 20.0905 17.386C19.3158 17.6744 18.6137 18.129 18.0335 18.7179C17.4425 19.2963 16.9875 19.999 16.7016 20.7749C16.3699 21.6761 16.1959 22.6276 16.1874 23.5879C16.1154 24.8066 16.1 25.2026 16.1 28.3447C16.1 31.4867 16.1 31.8827 16.172 33.1169C16.1853 34.075 16.3591 35.0241 16.6862 35.9247C16.9761 36.6999 17.4325 37.4021 18.0233 37.9817C18.6029 38.5725 19.305 39.0289 20.0803 39.3187C20.9809 39.6456 21.93 39.8195 22.888 39.833C24.1222 39.8844 24.5182 39.8998 27.6603 39.8998C30.8023 39.8998 31.1983 39.8998 32.4325 39.833C33.3906 39.82 34.3397 39.6461 35.2403 39.3187C36.0086 39.021 36.7064 38.5663 37.289 37.9837C37.8716 37.4011 38.3263 36.7033 38.624 35.935C38.951 35.0343 39.1248 34.0852 39.1383 33.1272C39.1897 31.893 39.2051 31.497 39.2051 28.3549C39.2051 25.2129 39.2051 24.8221 39.1383 23.5879C39.1247 22.6281 38.9509 21.6774 38.624 20.7749C38.3342 19.9997 37.8778 19.2975 37.287 18.7179C36.7069 18.129 36.0047 17.6744 35.23 17.386C34.33 17.0566 33.3805 16.8827 32.4222 16.8718C31.188 16.8152 30.792 16.7998 27.65 16.7998H27.6705Z" fill="#002868"/>
                                    <path d="M27.6705 22.4053C26.4944 22.4043 25.3443 22.7522 24.3659 23.405C23.3875 24.0578 22.6248 24.9862 22.1742 26.0727C21.7236 27.1591 21.6055 28.3548 21.8347 29.5085C22.0639 30.6621 22.6302 31.7218 23.4619 32.5535C24.2936 33.3852 25.3533 33.9515 26.5069 34.1807C27.6606 34.4099 28.8563 34.2918 29.9427 33.8412C31.0292 33.3906 31.9576 32.6279 32.6104 31.6495C33.2632 30.6711 33.6111 29.521 33.6101 28.3448C33.6108 27.5647 33.4576 26.792 33.1594 26.0711C32.8611 25.3501 32.4236 24.6951 31.872 24.1434C31.3203 23.5917 30.6652 23.1543 29.9443 22.856C29.2234 22.5578 28.4507 22.4046 27.6705 22.4053ZM27.6705 32.2017C26.9077 32.2017 26.162 31.9755 25.5278 31.5517C24.8935 31.1279 24.3992 30.5255 24.1073 29.8208C23.8154 29.116 23.739 28.3406 23.8878 27.5924C24.0366 26.8442 24.4039 26.157 24.9433 25.6176C25.4827 25.0782 26.17 24.7109 26.9181 24.5621C27.6663 24.4133 28.4418 24.4896 29.1465 24.7816C29.8513 25.0735 30.4536 25.5678 30.8774 26.2021C31.3012 26.8363 31.5274 27.582 31.5274 28.3448C31.5274 29.3677 31.1211 30.3487 30.3978 31.072C29.6745 31.7953 28.6934 32.2017 27.6705 32.2017Z" fill="#002868"/>
                                    <path d="M33.8467 23.5562C34.6135 23.5562 35.2352 22.9346 35.2352 22.1678C35.2352 21.4009 34.6135 20.7793 33.8467 20.7793C33.0799 20.7793 32.4583 21.4009 32.4583 22.1678C32.4583 22.9346 33.0799 23.5562 33.8467 23.5562Z" fill="#002868"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4">
                            <!--Youtube-->
                            <a class="social-icon-link" href="<?php echo get_theme_mod("NC_social_youtube"); ?>" target="_blank" aria-label="Link opens in a new tab">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation">
                                    <circle cx="28" cy="28" r="22.75" fill="white"/>
                                    <path d="M40.7377 21.191C40.4229 20.0217 39.5009 19.0997 38.3315 18.7849C36.1952 18.2002 27.6499 18.2002 27.6499 18.2002C27.6499 18.2002 19.1047 18.2002 16.9684 18.7624C15.8215 19.0772 14.877 20.0217 14.5622 21.191C14 23.3274 14 27.7574 14 27.7574C14 27.7574 14 32.2099 14.5622 34.3238C14.877 35.4931 15.799 36.4151 16.9684 36.7299C19.1272 37.3146 27.6499 37.3146 27.6499 37.3146C27.6499 37.3146 36.1952 37.3146 38.3315 36.7524C39.5009 36.4376 40.4229 35.5156 40.7377 34.3463C41.2999 32.2099 41.2999 27.7799 41.2999 27.7799C41.2999 27.7799 41.3224 23.3274 40.7377 21.191Z" fill="#002868"/>
                                    <path class="yt-arrow" d="M32.035 27.7578L24.929 23.665V31.8505L32.035 27.7578Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-12">
                            <p>
                                © <?php echo date("Y");?> <?php bloginfo("name"); ?>
                                <br>
                                <a href="<?php echo get_privacy_policy_url() ?>">Privacy e Cookies</a> •
                                <a href="">Credits</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        
               
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>