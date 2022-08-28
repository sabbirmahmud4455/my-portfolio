import React from 'react'
import Logo from './Logo'
import MainMenuNavList from './MainMenuNavList'


const Header = () => {
  return (
	<header className="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            {/*  Start Header Left */}
            <div class="col-lg-2 col-6">
                <div class="header-left">

                    <Logo></Logo>

                </div>
            </div>
            {/* End Header Left */}
            {/* Start Header Center */}
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                        {/* Start Mainmanu Nav */}
                        
						<MainMenuNavList></MainMenuNavList>

                        {/* End Mainmanu Nav */}
                    </nav>
                    {/* Start Header Right  */}

                    {/* <div class="header-right">
                        <a class="rn-btn" target="_blank" href="https://themeforest.net/checkout/from_item/33188244?license=regular"><span>BUY NOW</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div> */}

                    {/* End Header Right  */}

                </div>
            </div>
            {/* End Header Center */}
        </div>
    </header>
  )
}

export default Header